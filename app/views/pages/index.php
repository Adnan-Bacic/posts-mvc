<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3"><?php echo $data['title']; ?></h1>
                    <p class="lead"><?php echo $data['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>