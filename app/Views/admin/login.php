<?php $this->extend('admin/layout/auth_layout') ?>

<?php $this->section("content"); ?>
<div class="login-wrapper">

    <div class="card" style="border-radius: 0;">
        <div class="card-header">
            <div class="card-title">Login</div>
        </div>
        <div class="card-body">
            <?php
            if (session()->has('login_error')) {
                $login_error = session()->getFlashdata('login_error');
                if (is_array($login_error)) {
                    foreach ($login_error as $error) {
            ?>
                        <p class="alert alert-warning"><?= $error; ?></p>
                    <?php
                    }
                } else {
                    ?>
                    <p class="alert alert-warning"><?= $login_error; ?></p>
            <?php
                }
            }
            ?>
            <form action="<?= route_to('admin_login_post') ?>" method="POST">
                <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= old('email') ?>" placeholder="Ketikan email anda">
                </div>
                <div class="form-group form-group-default">
                    <label>password</label>
                    <input type="password" class="form-control" name="password" value="<?= old('password') ?>" placeholder="Ketikan password anda">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">Remember Me</span>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>