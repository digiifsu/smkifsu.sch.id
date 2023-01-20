<?php $this->extend('frontend/layouts/app'); ?>
<?php $this->section('content'); ?>
<!-- this used pages header -->
<header class="pages_header w-full" style="background: url('<?= base_url('assets/frontend') ?>/assets/img/header_bg.png');">
    <?= $this->include('frontend/partials/nav_menu'); ?>
    <div class="pages_nav">
        <div class="container">
            <h2>
                Stuktur Organisasi
            </h2>
            <div class="nav flex items-center gap-3">
                <a href="<?php echo site_url('frontend'); ?>">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
                href="#" class="active">Struktur Organisasi</a>
            </div>
        </div>
    </div>
</header>
<section id="sectionArticle">
    <div class="container">
        <article class="article_wrapper">
            <div class="title_group">
                <div class="title">
                    <p>Struktur Pengurus</p>
                </div>
                <h2>SMK INFORMATIKA SUMEDANG</h2>
            </div>
            <div class="line"></div>
            <div class="pengurus grid grid-cols-1 lg-grid-cols-2 gap-5">
               <?php
               $guru = model("admin/guru");
               ?>
               <?php if ($data = $guru->where('status','aktif')->get()->getResult()): ?>
               <?php foreach ($data as $row): ?>
                   <div class="pengurus_card grid grid-cols-8 gap-5 md-gap-7">
                    <div class="profile_img col-span-3">
                       <?php if (!empty($row->image)): ?>
                            <img width="100%" height="100%" style="object-fit: cover;" data-src="<?= base_url($row->image); ?>">
                        <?php else: ?>
                             <img width="100%" height="100%" style="object-fit: cover;" data-src="<?php echo base_url('assets/img/nophoto_user.jpg'); ?>">
                       <?php endif ?>
                    </div>
                    <div class="bio col-span-5">
                        <p><?= $row->kategori; ?></p>
                        <h2><?= ucwords($row->nama); ?></h2>
                        <div class="sosmed_group flex gap-3">
                            <a href="<?= $row->ig_link; ?>" class="icon">
                                <i class="fa-brands fa-instagram text-white text-md"></i>
                            </a>
                            <a href="<?= $row->fb_link; ?>" class="icon">
                                <i class="fa-brands fa-square-facebook text-white text-md"></i>
                            </a>
                            <a href="<?= $row->yt_link; ?>" class="icon">
                                <i class="fa-brands fa-youtube text-white text-md"></i>
                            </a>
                            <a href="<?= $row->tiktok_link; ?>" class="icon">
                                <i class="fa-brands fa-tiktok text-white text-md"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</article>
</div>
</section>
<?= $this->include('frontend/shared/sponsor') ?>
<?php $this->endSection(); ?>
