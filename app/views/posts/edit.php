<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light">
                <i class="fa fa-backward"></i> Back
            </a>
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success') ?>
                <h2>Edit post</h2>
                <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="<?php echo $data['title']; ?>" class="form-control from-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['title_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" class="form-control from-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['body_err'] ?></span>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>