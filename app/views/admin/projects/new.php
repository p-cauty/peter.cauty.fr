<form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="My  Super Corp inc." required />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="url">URL :</label>
                <input type="url" name="url" id="url" class="form-control" placeholder="https://www.mysupercorp.inc" required />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="desc">Description :</label>
                <textarea style="resize: none" rows="3" type="text" name="desc" id="desc" class="form-control" placeholder="I was a mega freelancer in this great company!" required></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Logo / Picture :</label>
                <input type="file" name="image" id="image" class="form-control-file" required />
            </div>
        </div>
    </div>
    <div class="form-row">
        <button class="btn btn-secondary" type="reset"><i class="fas fa-times"></i> Cancel</button>
        &nbsp;&nbsp;
        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Add project</button>
    </div>
</form>