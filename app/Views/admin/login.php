<?php $this->extend('admin/layout/auth_layout') ?>
<?php $this->section("content"); ?>
<div class="login-wrapper">
    <div class="card" style="border-radius: 0;">
        <div class="card-header">
            <div class="card-title">Login</div>
        </div>
        <div class="card-body">
            <?php if (session()->has('login_error')) : ?>
                <?php if (is_array(session()->getFlashdata('login_error'))) : ?>
                    <?php foreach (session()->getFlashdata('login_error') as $asu) : ?>
                        <p class="alert alert-danger"><?= $asu; ?></p>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="alert alert-danger"><?= session()->getFlashdata('login_error') ?></p>
                <?php endif; ?>
            <?php endif; ?>
            <?= form_open(base_url(route_to('admin_login_post'))) ?>
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
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>