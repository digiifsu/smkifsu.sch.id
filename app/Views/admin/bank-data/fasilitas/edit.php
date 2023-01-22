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
    <span class="page-title">Edit Eskul</span>

</div>
<div class="container">
    <div class="bg-white rounded p-3">
        <?php if (session()->has('success')): ?>
        <p class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></p>
    <?php endif ?>
    <?php echo form_open() ?>
    <div class="form-group">
        <label for="nama">Nama Fasilitas</label>
        <input required type="text" value="<?php echo $data->nama ?>" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input required  value="<?php echo $data->image ?>"  type="text" id="img-fasilitas" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="360_link">360_link</label>
        <input type="text" id="360_link"  value="<?php echo $data->link360 ?>"  name="link360" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>
</div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('footer') ?>
<?php echo script_tag('assets/vendors/tinymce/tinymce.min.js'); 
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
    $('#tb').DataTable();
</script>
<?php $this->endSection() ?> ?>