<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('content') ?>
<div class="page-inner">
    <div class="page-title">AKUN SAYA</div>
</div>
<div class="container-fluid">
    <div class="bg-white">
        <?php echo form_open() ?>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?php echo login_data()->user->nama_lengkap; ?>" name="nama_lengkap">
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
<?php $this->endSection(); ?>