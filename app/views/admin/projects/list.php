<a href="<?= WEBROOT ?>admin/projects/new" class="btn btn-success"><i class="fas fa-plus"></i> New project</a>
<br /><br />
<table class="table table-striped" id="projects">
    <thead>
        <tr>
            <th>Order</th>
            <th>Logo</th>
            <th>Name</th>
            <th>Description</th>
            <th>URL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project):
    /** @var \PitouFW\Entity\Project $project */ ?>
        <tr>
            <td data-sort="<?= $project->getOrdr() ?>">
                <?php if ($project->getOrdr() < count($projects)): ?>
                <i class="fas fa-chevron-up" onclick="document.location.href='<?= WEBROOT ?>admin/projects/up/<?= $project->getId() ?>'"></i>
                <?php endif; if ($project->getOrdr() > 1): ?>
                <i class="fas fa-chevron-down" onclick="document.location.href='<?= WEBROOT ?>admin/projects/down/<?= $project->getId() ?>'"></i>
                <?php endif ?>
            </td>
            <td><img height="30" src="<?= WEBROOT . $project->getImage() ?>" /></td>
            <td><?= $project->getName() ?></td>
            <td><?= strlen($project->getDescr()) > 67 ? substr($project->getDescr(), 0, 67) . '...' : $project->getDescr() ?></td>
            <td><a href="<?= $project->getUrl() ?>" target="_blank" rel="noopener"><?= strlen($project->getUrl()) > 32 ? substr($project->getUrl(), 0, 32) . '...' : $project->getUrl() ?>&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a></td>
            <td>
                <a href="<?= WEBROOT ?>admin/projects/edit/<?= $project->getId() ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                <a href="<?= WEBROOT ?>admin/projects/delete/<?= $project->getId() ?>" onclick="if(!confirm('Are you sure?'))return false" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#projects').DataTable({
            order: []
        });
    });
</script>