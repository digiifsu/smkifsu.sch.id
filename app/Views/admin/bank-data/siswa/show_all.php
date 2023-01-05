<?php $this->extend('admin\layout\app_layout'); ?>
<?php
echo $this->section('content')
?>
<div class="page-inner">
    <h4 class="page-title">Tambah Post</h4>
    <div class="page-category">
        <a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= base_url(route_to('admin_post_all')) ?>"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <!-- add new post -->
</div>
<?php $this->endSection(); ?>