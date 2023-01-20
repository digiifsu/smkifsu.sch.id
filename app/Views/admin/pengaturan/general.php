<?php $this->extend('admin/layout/app_layout'); ?>

<?php $this->section('content') ?>
<div class="page-inner py-3">
    <h4 class="page-title">Pengaturan&raquo;General</h4>
    <div class="page-category">
        <button type="button" class="btn btn-sm btn-primary" id="btn-tambah-guru">
            <i class='fa fa-arrow-left'></i> Back
        </button>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
</div>

<div class="container-fluid">
    <div class="bg-white p-4">
        <?php if (session()->has('success')): ?>
        <p class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </p>
    <?php endif ?>
    <?php echo form_open(); ?>
    <div class="form-group">
       <label for="title">Title</label>
       <input type="text" value="<?= $pengaturan->title ?>" name="title" class="form-control">
   </div>
   <div class="form-group">
      <label for="email">Email</label>
      <input type="text" value="<?= $pengaturan->email ?>" name="email" class="form-control">
  </div>
   <div class="form-group">
       <label for="video_profile">Video Profile</label>
       <input type="text" value="<?= $pengaturan->video_profile ?>" name="video_profile" class="form-control">
   </div>
   <div class="form-group">
       <label for="yt_link">Youtube Link</label>
       <input type="text" value="<?= $pengaturan->yt_link ?>" name="yt_link" class="form-control">
   </div>
   <div class="form-group">
       <label for="ig_link">Instagram Link</label>
       <input type="text" value="<?= $pengaturan->ig_link ?>" name="ig_link" class="form-control">
   </div>
   <div class="form-group">
       <label for="tiktok_link">Tiktok Link</label>
       <input type="text" value="<?= $pengaturan->tiktok_link ?>" name="tiktok_link" class="form-control">
   </div>
   <div class="form-group">
       <label for="fb_link">Facebook Link</label>
       <input type="text" value="<?= $pengaturan->fb_link ?>" name="fb_link" class="form-control">
   </div>
   <div class="form-group">
    <label for="alamat_sekolah">Alamat Sekolah</label>
    <textarea type="text" value="<?= $pengaturan->alamat_sekolah ?>" name="alamat_sekolah" class="form-control"><?= $pengaturan->alamat_sekolah ?></textarea>
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
