<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light">
                <i class="fa fa-backward"></i> Back
            </a>
            <h1><?php echo $data['post']->title; ?></h1>
            <div class="bg-secondary text-white p-2 mb-3">
                Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
            </div>
            <p><?php echo $data['post']->body; ?></p>

            <?php
                if($data['post']->user_id == $_SESSION['user_id']){
                    ?>
                    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id ?>" class="btn btn-dark">Edit</a>
                    <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id ?>" method="POST" class="float-right">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger">You cannot edit or delete other peoples posts.</div>
                    <?php
                }
            ?>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>