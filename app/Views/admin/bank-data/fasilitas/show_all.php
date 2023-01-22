<?php

use App\Models\Admin\Fasilitas;

$this->extend('admin/layout/app_layout'); ?>
<?php $this->section('head');
echo link_tag('elfinder/css/elfinder.min.css'),
link_tag('elfinder/css/Material/css/theme-light.css');
$this->endSection('head');
?>
<?php $this->section('content'); ?>
<div class="page-inner">
    <span class="page-title">Manage Fasiltias</span>

</div>
<div class="container">
  <button type="button" class="btn mb-3 btn-primary" id="btn_tambah_fasilitas">
    <i class='fa fa-plus'></i> Tambah Fasilitas
</button>
<div class="bg-white rounded p-3">
    <?php if (session()->has('success')): ?>
    <p class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></p>
<?php endif ?>
<div class="table-responsive">
    <table id="tb" class="table table bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Fasilitas</th>
                <th>Link 360</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $fasilitas = new Fasilitas();
            $data_fasilitas = $fasilitas->get()->getResult();
            if(!empty($data_fasilitas)){
                $i = 0;
                foreach($data_fasilitas as $data){
                    $i++;
                    ?>
                    <tr>
                        <td><?= $i;?></td>
                        <td><?= $data->nama;?></td>
                        <td><?= $data->link360;?></td>
                        <td>
                            <a href="<?php echo site_url(route_to('admin_fasilitas_edit',$data->id)); ?>" class="btn btn-sm  btn-danger">Edit</a>

                            <a href="<?php echo site_url(route_to('admin_fasilitas_delete',$data->id)); ?>" class="btn btn-sm  btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php $this->endSection(); ?>

<?php $this->section('footer') ?>
<!-- Modal -->
<div class="modal fade" id="modal_tambah_fasilitas" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <?php echo form_open() ?>
    <div class="form-group">
        <label for="nama">Nama Fasilitas</label>
        <input required type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input required type="text" id="img-fasilitas" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="360_link">360_link</label>
        <input type="text" id="360_link" name="link360" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<?php echo script_tag('assets/vendors/tinymce/tinymce.min.js'); ?>
<?php 
echo script_tag('assets/vendors/tinymce/tinymce.min.js');
echo script_tag('elfinder/js/elfinder.min.js');
echo script_tag('assets/js/tinymceElfinder.js');
?>
<script>
    const mceElf = new tinymceElfinder({
        cssAutoLoad: false,
        // connector URL (Set your connector)
        url: '<?= site_url(route_to('filemanager_backend')) ?>',
        baseUrl: '<?= base_url('public/elfinder') ?>', // Base URL to css/*, js/*
        // upload target folder hash for this tinyMCE
        uploadTargetHash: 'l1_lw', // Hash value on elFinder of writable folder
        // elFinder dialog node id
        nodeId: 'elfinder' // Any ID you decide
    });

    //tambah gambar untuk guru
    $('#img-fasilitas').on('click', function () {
        mceElf.browser(function (e) {
            document.getElementById('img-fasilitas').value = e.replace('<?= base_url() ?>', '');
        }, '', {
            filetype: 'image'
        })
    });

    $(document).ready(function(){
        $('#btn_tambah_fasilitas').on('click',()=>{
            $("#modal_tambah_fasilitas").modal({
                backdrop:true,
                show:true,
                focus:true,
            });
        })
    });
    tinymce.init({
        selector: '#sambutan_pembina',
        menubar : true,
        hieight:800,
        plugins : 'lists',
        toolbar : ['bullist | bold | numlist | formatselect'],
    });
    tinymce.init({
        selector: '#yang_dipelajari',
        menubar : true,
        hieight:800,
        plugins : 'lists',
        toolbar : ['bullist | bold | numlist | formatselect'],
    });
    $('#tb').DataTable();
</script>
<?php $this->endSection() ?> ?>