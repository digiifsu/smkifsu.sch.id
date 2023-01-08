<?php $this->extend('admin\layout\app_layout'); ?>
<?php
$this->section("content")
    ?>
<div class="page-inner">
    <h4 class="page-title">Kompetensi keahlian</h4>
    <div class="page-category">
        <a href="<?php redirect()->back(); ?>" class="btn btn-sm btn-primary" id="btn-tambah-siswa">
            <i class='fa fa-plus'></i> Tambah
        </a>
    </div>
</div>
<?php $this->endSection(); ?>