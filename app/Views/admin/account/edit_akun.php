<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('content') ?>
<div class="page-inner">
    <div class="page-title">AKUN SAYA</div>
</div>
<div class="container-fluid">
    <div class="bg-white">
        <?php if (session()->has('success')): ?>
            <p class="alert alert-info">
                <?= session()->getFlashdata('success') ?>
            </p>
        <?php endif; ?>
        <?php echo form_open() ?>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" name="nama_lengkap">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select required autofocus onautocomplete="false" name="level" class="form-control" id="">
                <?php $role = ['super_admin' => "Super Admin", 'admin' => "Admin"]; ?>
                <?php foreach ($role as $key => $value): ?>
                    <?php if ($data['level'] == $key): ?>
                        <option selected value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    <?php endif; ?>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" value="<?php echo $data['email']; ?>" name="email">
        </div>
        <div class="form-group">
            <label for="Jabatan">Jabatan</label>
            <input type="text" class="form-control" value="<?php echo $data['jabatan']; ?>" name="jabatan">
        </div>
        <div class="form-group">
            <label for="new_password">Ubah Password</label>
            <input type="text" class="form-control" value="" name="password">
        </div>
        <div class="form-group">
            <button name="edit" class="btn btn-primary">update</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<?php $this->endSection(); ?>