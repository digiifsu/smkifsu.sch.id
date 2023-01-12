<?php $this->extend('admin/layout/app_layout') ?>
<?php $this->section('content') ?>
<div class="page-inner">
    <span class="page-title">Manage</span>
    <div class="page-category mt-3">
        <a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= base_url(route_to('admin_dashboard')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;Back</a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <div class="col-md-12 mx-auto bg-white p-4">

    </div>
</div>

<?php $this->endSection(); ?>