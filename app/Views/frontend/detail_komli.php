<?php $this->extend('frontend/layouts/app'); ?>
<?php $this->section('content'); ?>
<!-- this used pages header -->
<header class="pages_header w-full" style="background: url('<?= base_url('assets/frontend') ?>/assets/img/header_bg.png');">
    <?= $this->include('frontend/partials/nav_menu'); ?>
    <div class="pages_nav">
        <div class="container">
            <h2>
                Profil <?php echo ucwords($data_komli->nama_komli); ?>
            </h2>
            <div class="nav flex items-center gap-3">
                <a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a href="">Profil Jurusan</a><i class="fa-solid fa-chevron-right text-white"></i><a class="active" href=""><?php echo ucwords($data_komli->nama_komli); ?></a>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="head_about grid grid-cols-1 md-grid-cols-5 gap-4 md-gap-10 lg-gap-20 xl-gap-30">
            <div class="desc md-col-span-3">
                <div class="title_group">
                    <div class="title">
                        <p>TENTANG</p>
                    </div>
                    <h2><?php echo $data_komli->nama_komli; ?></h2>
                </div>
                <div class="text_group">
                    <p class="deskripsi_komli">
                        <?php echo $data_komli->deskripsi; ?>
                    </p>
                    <a href="<?= $data_komli->video_profile ?>" target="__blank" class="btn btn-md">Tonton Vidio Profil</a>
                </div>
            </div>
            <div class="banner md-col-span-2">
                <div class="namecard">
                    <p>Kepala Jurusan</p>
                    <h6><?= ucwords($data_komli->nama_kajur); ?></h6>
                </div>
                <?php if (!empty($data->foto_kajur)) : ?>
                    <img data-src="<?php echo base_url($data_komli->foto_kajur); ?>">
                <?php else : ?>
                    <img data-src="<?php echo base_url('assets/img/nophoto_user.jpg'); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="title_group title_centered">
            <div class="title">
                <p>APA YANG DIPELAJARI</p>
            </div>
            <h2 class="md-w-50 mx-auto">Pengembangan Perangkat Lunak Dan Gim</h2>
        </div>
        <div class="study_program grid grid-cols-1 md-grid-cols-2 lg-grid-cols-3 gap-5">
            <div class="card ease">
                <div class="icon">
                    <img data-src="../assets/icons/webdev.svg" alt="">
                </div>
                <h2>Desain Grafis</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                    industry's standard dummy</p>
            </div>
            <div class="card ease">
                <div class="icon">
                    <img data-src="../assets/icons/mobile.svg" alt="">
                </div>
                <h2>Fotografi</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                    industry's standard dummy</p>
            </div>
            <div class="card ease">
                <div class="icon">
                    <img data-src="../assets/icons/robo.svg" alt="">
                </div>
                <h2>Film</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                    industry's standard dummy</p>
            </div>
        </div>
    </div>
</section>
<section class="jurusan_karya">
    <div class="container">
        <div class="showcase_wrapper grid grid-cols-1 lg-grid-cols-7 gap-10 lg-gap-16 xl-gap-20 items-center">
            <div class="control lg-col-span-4">
                <div class="title_group">
                    <div class="title">
                        <p>KARYA SISWA</p>
                    </div>
                    <h2><?php echo ucwords($data_komli->nama_komli); ?></h2>
                </div>
                <div class="desc">
                    <p>
                        Semua karya siswa bisa di lihat di link bawah ini!
                    </p>
                </div>
                <a href="" class="btn btn-md gap-4">
                    <i class="fa-brands fa-instagram text-lg"></i>Pusat Karya Ifsu
                </a>
            </div>
            <div class="project lg-col-span-3">
                <img src="<?php base_url('assets/frontend') ?>/assets/img/prototype.png">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="join_us_section grid grid-cols-1 gap-5 lg-grid-cols-5 lg-gap-18 items-center">
            <div class="banner md-col-span-2">

            </div>
            <div class="control md-col-span-3">
                <div class="title_group">
                    <div class="title">
                        <p>YUK GABUNG DALAM JURUSAN</p>
                    </div>
                    <h2><?php echo ucwords($data_komli->nama_komli); ?></h2>
                </div>
                <p>
                    <?php echo ucwords($data_komli->kata_ajakan); ?>
                </p>
                <a href="" class="btn btn-sm">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
<?= $this->include('frontend/shared/sponsor') ?>
<?php $this->endSection(); ?>