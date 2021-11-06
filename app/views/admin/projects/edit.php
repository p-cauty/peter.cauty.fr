<?php /** @var \PitouFW\Entity\Project $project */ ?>
<a href="<?= WEBROOT ?>admin/projects">&larr; Back to projects list</a>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Name :</label>
                <input value="<?= $project->getName() ?>" type="text" name="name" id="name" class="form-control" placeholder="My  Super Corp inc." required />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="url">URL :</label>
                <input value="<?= $project->getUrl() ?>" type="url" name="url" id="url" class="form-control" placeholder="https://www.mysupercorp.inc" required />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="desc">Description :</label>
                <textarea style="resize: none" rows="3" type="text" name="desc" id="desc" class="form-control" placeholder="I was a mega freelancer in this great company!" required><?= $project->getDescr() ?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Logo / Picture :</label>
                <br />
                <img src="<?= WEBROOT . $project->getImage() ?>" height="80" />
                <br /><br />
                <input type="file" name="image" id="image" class="form-control-file" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Update</button>
    </div>
</form>