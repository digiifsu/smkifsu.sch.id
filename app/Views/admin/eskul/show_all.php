<?php

use App\Models\Admin\Eskul;

$this->extend('admin/layout/app_layout'); ?>
<?php $this->section('head');
echo link_tag('elfinder/css/elfinder.min.css'),
link_tag('elfinder/css/Material/css/theme-light.css');
$this->endSection('head');
?>
<?php $this->section('content'); ?>
<div class="page-inner">
    <span class="page-title">Manage Eskul</span>

</div>
<div class="container">
  <button type="button" class="btn mb-3 btn-primary" id="btn-tambah-eskul">
    <i class='fa fa-plus'></i> Tambah Eskul
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
                <th>Nama Eskul</th>
                <th>Pembina</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $eskul = new Eskul();
            $data_eskul = $eskul->select('tb_lembaga.nama as nama_pembina,'.$eskul->_get_table().".*")->join('tb_lembaga','tb_lembaga.id='.$eskul->_get_table().".pembina",'LEFT')->get()->getResult();
            if(!empty($data_eskul)){
                $i = 0;
                foreach($data_eskul as $data){
                    $i++;
                    ?>
                    <tr>
                        <td><?= $i;?></td>
                        <td><?= $data->nama;?></td>
                        <td><?= $data->nama_pembina;?></td>
                        <td>
                            <a href="<?php echo site_url(route_to('admin_eskul_edit',$data->id)); ?>" class="btn btn-sm  btn-danger">Edit</a>

                            <a href="<?php echo site_url(route_to('admin_eskul_delete',$data->id)); ?>" class="btn btn-sm  btn-danger">Delete</a>
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
<div class="modal fade" id="modal_tambah_eskul" >
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
        <label for="nama">Nama Eskul</label>
        <input required type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input required type="text" id="img-eskul" name="foto" class="form-control">

    </div>
    <div class="form-group">
        <label for="sambutan_pembina">Sambutan Pembina</label>
        <textarea required name="sambutan_pembina" id="sambutan_pembina" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="yang_dipelajari">Deskripsi Pembelajaran</label>
        <textarea required name="yang_dipelajari" id="yang_dipelajari" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="pembina">Pembina Eskul</label>
        <?php
        $data_guru = model("Admin/Guru")->get()->getResult();
        ?>
        <select class="form-control" name="pembina" id="">
            <option required value="">Pilih Pembina</option>
            <?php if (!empty($data_guru)): ?>
                <?php foreach ($data_guru as  $value): ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                <?php endforeach ?>
            <?php else: ?>
                <option value=""></option>
            <?php endif ?>
        </select>
    </div>
    <div class="form-group"> 
        <?php
        $data_siswa = model("Admin/Siswa")->get()->getResult();
        ?>
        <label for="ketua">Ketua Eskul</label>
        <select class="form-control" name="ketua" id="">
            <option  required value="">Pilih Ketua</option>
            <?php if (!empty($data_siswa)): ?>
                <?php foreach ($data_siswa as  $value): ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->nama ?> (<?= $value->kelas; ?>) </option>
                <?php endforeach ?>
            <?php else: ?>
                <option value=""></option>
            <?php endif ?>
        </select>
    </div>
    <div class="form-group">
        <label for="ketua">Wakil ketua 1</label>

        <select class="form-control" name="wakil1" id="">
            <option value="">Pilih Wakil 1</option>
            <?php if (!empty($data_siswa)): ?>
                <?php foreach ($data_siswa as  $value): ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->nama ?> (<?= $value->kelas; ?>) </option>
                <?php endforeach ?>
            <?php else: ?>
                <option value=""></option>
            <?php endif ?>
        </select>
    </div>
    <div class="form-group">
        <label for="ketua">Wakil Ketua2</label>
        <select class="form-control" name="wakil2" id="">
            <option value="">Pilih Wakil 2</option>
            <?php if (!empty($data_siswa)): ?>
                <?php foreach ($data_siswa as  $value): ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->nama ?> (<?= $value->kelas; ?>) </option>
                <?php endforeach ?>
            <?php else: ?>
                <option value=""></option>
            <?php endif ?>
        </select>
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
    $('#img-eskul').on('click', function () {
        mceElf.browser(function (e) {
            document.getElementById('img-eskul').value = e.replace('<?= base_url() ?>', '');
        }, '', {
            filetype: 'image'
        })
    });

    $(document).ready(function(){
        $('#btn-tambah-eskul').on('click',()=>{
            $("#modal_tambah_eskul").modal({
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