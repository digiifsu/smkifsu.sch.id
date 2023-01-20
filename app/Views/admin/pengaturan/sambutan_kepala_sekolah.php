<?php $this->extend('admin/layout/app_layout'); ?>
<?php $pengaturan = model('Admin/Pengaturan')->get()->getRow(); ?>
<?php $this->section('head');
echo link_tag('elfinder/css/elfinder.min.css'),
link_tag('elfinder/css/Material/css/theme-light.css');
?>
<style>
    .upload-box {
        margin-top: 10px;
        width: 150px;
        border-radius: 4px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 1px dashed;
        background-color: #dedede;
        text-align: center;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('content') ?>
<div class="page-inner py-3">
    <h4 class="page-title">Pengaturan&raquo;Profile Sekolah</h4>
    <div class="page-category">
        <button type="button" class="btn btn-sm btn-primary" id="btn-tambah-guru">
            <i class='fa fa-arrow-left'></i> Back
        </button>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
</div>

<div class="container-fluid">
    <div class="bg-white  p-4">
       <?php if (session()->has('success')): ?>
       <p class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </p>
<?php endif ?>
<?php echo form_open(); ?>
<div class="form-group">
  <label for="foto-kepsek">Foto kepsek</label>
  <input type="text" id="img-kepsek" name="foto_kepsek" class="form-control" hidden value="<?php echo $pengaturan->foto_kepsek; ?>">
  <div class="upload-box">
      <?php if (!empty($pengaturan->foto_kepsek)): ?>
          <img width="100%" height="100%" src="<?= base_url($pengaturan->foto_kepsek); ?>" alt="">
      <?php endif; ?>
  </div>
</div>
<div class="form-group">
    <label for="budaya_sekolah">Sambutan Kepala Sekolah</label>
    <textarea name="sambutan_kepala_sekolah" class="form-control" id="sambutan_kepala_sekolah" cols="30" rows="20">
        <?php echo $pengaturan->sambutan_kepala_sekolah; ?>
    </textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary">Kirim</button>
</div>
</form>
</div>
</div>


<?php $this->endSection() ?>
<?php echo $this->section('footer') ?>
<?php echo script_tag('assets/vendors/tinymce/tinymce.min.js'); ?>

<script>
  tinymce.init({
    selector: '#sambutan_kepala_sekolah',
    menubar : true,
    hieight:800,
    plugins : 'lists',
    toolbar : ['bullist | bold | numlist | formatselect'],
});
</script>
<?php
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

    //untuk upload file gambar siswa
    $('.upload-box').on('click', function() {
        mceElf.browser(function(e) {
            document.querySelector('.upload-box').innerHTML = `<img src="${e}" width="100%" height='100%'>`;
            document.getElementById('img-kepsek').value = e.replace('<?= base_url() ?>', '');
        }, '', {
            filetype: 'image'
        })
    });
</script>

<?php echo $this->endSection() ?> ?>
