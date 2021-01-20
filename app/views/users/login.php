<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success') ?>
                <h2>Login</h2>
                <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control from-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control from-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">Dont have an account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>