
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="<?= base_url('assets/frontend') ?>" target="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/comp.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&family=Nunito:wght@300;400;500;600;700;800&family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="<?= base_url('assets/frontend/assets/js/lozad.js'); ?>"></script>
    <style>
        ul,ol{
            margin: 18px;
            padding: 10px;
        }
        .head_about .desc .text_group p{
            margin: 10px 0px;
        }
    </style>
    <?php $this->renderSection('head'); ?>
    <title><?php echo $title ?? '' ?> - SMKS INFORMATIKA SUMEDANG</title>
</head>

<body>
  <?php
  $pengaturan = model("Admin/Pengaturan")->get()->getRow();
   ?>
    <!-- this used home header -->
    <?php $this->renderSection('content'); ?>
    <footer>
        <div class="container">
            <div class="footer grid grid-cols-1 md-grid-cols-2 lg-grid-cols-10 gap-15">
                <div class="footer_title lg-col-span-4">
                    <div class="profile">
                        <img data-src="<?php echo base_url('assets/frontend/assets/icons/logo-ifsu.svg') ?>" class="icon">
                        <h2>SMK INFORMATIKA SUMEDANG</h2>
                    </div>
                    <p>Selamat Datang di Website resmi SMK Informatika Sumedang Bagian ini merupakan bagian except yang
                        berfungsi untuk menjelaskan secara singkat dari keseluruhan isi berita/blog</p>
                    <div class="sosmed_group">
                        <a href="<?php echo $pengaturan->ig_link; ?>" class="icon">
                            <i class="fa-brands fa-instagram text-white text-md"></i>
                        </a>
                        <a href="<?php echo $pengaturan->fb_link; ?>" class="icon">
                            <i class="fa-brands fa-square-facebook text-white text-md"></i>
                        </a>
                        <a href="<?php echo $pengaturan->yt_link; ?>" class="icon">
                            <i class="fa-brands fa-youtube text-white text-md"></i>
                        </a>
                        <a href="<?php echo $pengaturan->tiktok_link; ?>" class="icon">
                            <i class="fa-brands fa-tiktok text-white text-md"></i>
                        </a>
                    </div>
                </div>
                <div class="footer_nav lg-col-span-6 grid grid-cols-1 lg-grid-cols-10 gap-8">
                    <div class="nav_menu lg-col-span-3">
                        <h2>OUR PAGES</h2>
                        <a href="<?php echo site_url(route_to('frontend_profile')); ?>" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Profil
                                Sekolah</span>
                        </a>
                        <a href="<?php echo site_url(route_to('frontend_post')) ?>" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Berita</span>
                        </a>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Agenda</span>
                        </a>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Kontak Kami</span>
                        </a>
                    </div>
                    <div class="nav_menu lg-col-span-3">
                        <h2>KATEGORI</h2>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Layanan Kami</span>
                        </a>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Berita
                                Terkini</span>
                        </a>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Prestasi
                                Sekolah</span>
                        </a>
                        <a href="#" class="nav_item flex items-center">
                            <i class="fa-solid fa-chevron-right text-white text-xs ease"></i><span>Pendataan
                                Siswa</span>
                        </a>
                    </div>
                    <div class="nav_menu lg-col-span-4">

                        <h2>IKUTI KAMI</h2>
                        <div class="nav_item">
                            <p>
                              <?php echo $pengaturan->alamat_sekolah; ?>
                            </p>
                        </div>
                        <div class="nav_item">
                            <p>Phone : <?php echo $pengaturan->telepon; ?></p>
                        </div>
                        <div class="nav_item">
                            <p>Email : <?php echo $pengaturan->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                Copyright &copy; 2022 Digifsu - Teaching Factory
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/frontend/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/js/swiper.js') ?>"></script>

    <script>
        // Home Navbar Scrolling Effect
        // window.onscroll = function () {
        //     if (window.pageYOffset > fixedNav) {
        //         header.classList.add("header_fixed")
        //         btnNav.classList.add("btn_scrolled")
        //         toggleOpen.classList.add("text-black")
        //         for (i = 0; i < linkNav.length; ++i) {
        //             linkNav[i].classList.remove("link_v2")
        //             linkNav[i].classList.replace("active_v2", "active")
        //         }
        //     } else {
        //         header.classList.remove("header_fixed")
        //         btnNav.classList.remove("btn_scrolled")
        //         toggleOpen.classList.remove("text-black")
        //         for (i = 0; i < linkNav.length; ++i) {
        //             linkNav[i].classList.add("link_v2")
        //             linkNav[i].classList.replace("active", "active_v2")
        //         }
        //     }
        // }
    </script>
</body>

</html>
