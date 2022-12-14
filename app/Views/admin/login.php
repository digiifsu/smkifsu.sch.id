<?php $this->extend('admin/layout/auth_layout') ?>

<?php $this->section("content"); ?>
<div class="login-wrapper">
    <div class="card" style="border-radius: 0;">
        <div class="card-header">
            <div class="card-title">Login</div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Ketikan email anda">
                </div>
                <div class="form-group form-group-default">
                    <label>password</label>
                    <input type="password" class="form-control" placeholder="Ketikan password anda">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">Remember Me</span>
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success">login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>