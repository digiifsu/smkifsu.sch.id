<?php $this->extend('admin/layout/app_layout'); ?>
<?php $this->section('content'); ?>
<div class="page-inner">
    <div class="page-title">Manage Agenda</div>
</div>
<div class="container-fluid">
    <div class="bg-white p-4">
        <?php if (session()->has('success')): ?>
        <p class="alert alert-info"><?php echo session()->getFlashdata('success'); ?></p>
    <?php endif ?>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah_data">
        Tambah Data
    </button>
    <div class="mt-3">
        <div class="table-responsive">
            <table id="tabel" class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Judul
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $agenda = new App\Models\Admin\Agenda();
                    $data = $agenda->findALl();

                    ?>
                    <?php if (!empty($data)): $i = 0;?>
                        <?php foreach ($data as  $value): $i++;?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $value->judul; ?></td>
                                <td><?php echo $value->tanggal; ?></td>
                                <td>
                                    <a onclick="return confirm('Apakah kamu yakin?')" href="<?php echo site_url(route_to('admin_bankdata_delete',$value->id)) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>              
<?php $this->endSection(); ?>
<?php $this->section('footer') ?>
<!-- Modal -->
<div class="modal fade" id="modal_tambah_data" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_dataLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_dataLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <?php echo form_open(); ?>
    <div class="form-group">
        <label for="judul">Judul Agenda</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input required autofocus autocomplete="false" type="datetime-local" class="form-control" name="tanggal" id="tanggal">
    </div>
    <div class="form-group">
        <label for="tempat">tempat</label>
        <input required autofocus autocomplete="false" type="text" class="form-control" name="tempat" id="tempat">
    </div>
    <div class="form-group">
        <label for="icon">Icon</label>
        <input type="text" name="icon" class="form-control" id="icp">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    <?php form_close(); ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script>
    $("#tabel").DataTable({});
</script>
<?php $this->endSection(); ?>