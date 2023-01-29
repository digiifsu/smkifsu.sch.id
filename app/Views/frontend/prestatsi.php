<?php $this->extend('frontend/layouts/app'); ?>
<?php $this->section('content'); ?>
<header class="pages_header w-full" style="background: url('<?= base_url('assets/frontend') ?>/assets/img/header_bg.png');">
<?= $this->include('frontend/partials/nav_menu'); ?>
    <div class="pages_nav">
        <div class="container">
            <h2>
                Prestasi Sekolah
            </h2>
            <div class="nav flex items-center gap-3">
                <a href="<?= base_url('assets/frontend') ?>/home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a href=""
                    class="active">Prestasi Sekolah</a>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="prestasi_list grid grid-cols-1 md-grid-cols-2 gap-5">
            <div class="card_prestasi">
                <div class="img_border">
                    <div class="darken-sm"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/img/prestasi_2.png" alt="">
                </div>
                <div class="desc_prestasi">
                    <div class="border"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/icons/trophy.svg" width="35px">
                    <h2>Lomba Kompetisi Siswa Tingkat Kabupaten</h2>
                    <ul>
                        <li>- Juara 1 & 3 Web Technology</li>
                        <li>- Juara 1 Web Technology</li>
                    </ul>
                </div>
            </div>
            <div class="card_prestasi">
                <div class="img_border">
                    <div class="darken-sm"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/img/prestasi_1.png" alt="">
                </div>
                <div class="desc_prestasi">
                    <div class="border"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/icons/trophy.svg" width="35px">
                    <h2>Kompetisi Dinamik UPI Ke-17</h2>
                    <ul>
                        <li>- Juara 1 Web UI Design</li>
                    </ul>
                </div>
            </div>
            <div class="card_prestasi">
                <div class="img_border">
                    <div class="darken-sm"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/img/prestasi_3.png" alt="">
                </div>
                <div class="desc_prestasi">
                    <div class="border"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/icons/trophy.svg" width="35px">
                    <h2>Nama Kompetisi</h2>
                    <ul>
                        <li>- Prestasi</li>
                    </ul>
                </div>
            </div>
            <div class="card_prestasi">
                <div class="img_border">
                    <div class="darken-sm"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/img/prestasi_3.png" alt="">
                </div>
                <div class="desc_prestasi">
                    <div class="border"></div>
                    <img data-src="<?= base_url('assets/frontend') ?>/assets/icons/trophy.svg" width="35px">
                    <h2>Nama Kompetisi</h2>
                    <ul>
                        <li>- Prestasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>