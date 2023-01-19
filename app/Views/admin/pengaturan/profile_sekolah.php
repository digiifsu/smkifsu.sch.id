<?php $this->extend('admin/layout/app_layout'); ?>

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

<div class="container">
    <div class="bg-white p-4">
     <?php if (session()->has('success')): ?>
     <p class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </p>
<?php endif ?>
<?php echo form_open(); ?>
<div class="form-group">
    <textarea name="profile_sekolah" class="form-control" id="profile_sekolah" cols="30" rows="10">
        <?php echo $profile_sekolah; ?>
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
    selector: '#profile_sekolah',
    menubar : false,
})
</script>

<?php echo $this->endSection() ?> ?>