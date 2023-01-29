<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('content') ?>
<div class="page-inner">
    <div class="page-title">Manage Account</div>
</div>
<div class="container-fluid">
    <div class="bg-white p-4">
        <button type="button" class="btn bt-sm mb-4 btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $data = model('User')->findAll(); $i = 0; ?>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as  $value): $i++;?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['nama_lengkap']; ?>
                            <?php if (login_data()->user->id === $value['id']): ?>
                                (Akun Kamu)
                            <?php endif ?>
                        </td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['level'] ?></td>
                        <td><?php echo $value['jabatan'] ?></td>
                        <td>
                            <!-- <a href="" class="btn  btn-sm btn-danger">Delete</a> -->
                            <a href="<?= site_url(route_to('admin_manage_account_edit', $value['id'])); ?>" class="btn btn-warning btn-sm">Update</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('footer'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <?= form_open(); ?>
    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="nama_lengkap">
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="jabatan">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select required autofocus onautocomplete="false" name="level" class="form-control" id="">
            <?php $role = ['super_admin'=>"Super Admin",'admin'=>"Admin"]; ?>
            <?php foreach ($role as $key =>  $value): ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="password">
    </div>
    <div class="mt-4 mb-4">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    <?= form_close(); ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<?php $this->endSection(); ?>