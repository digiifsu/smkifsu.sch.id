<nav class="w-full">
    <div class="container">
        <div class="navbar flex w-full h-full items-center justify-between">
            <a href="#" class="logo">
                <img data-src="<?= base_url('assets/frontend') ?>/assets/icons/logo-ifsu.svg" class="w-full h-full">
            </a>

            <div class="nav_menu nav_hidden">
                <div class="container">
                    <div class="sidebar">
                        <div class="logo">
                            <img data-src="assets/icons/logo-ifsu.svg" class="w-full h-full">
                        </div>
                        <div class="toggle_close">
                            <i class="fa-solid fa-xmark text-4xl"></i>
                        </div>
                    </div>
                    <?php if (!isset($_SERVER['PATH_INFO'])): ?>
                        <ul class="nav_items home_nav">
                        <?php else: ?>
                            <ul class="nav_items">
                            <?php endif ?>
                            <li class="dropdown">
                                <div class="nav_link">Profil<i class="fa-solid fa-chevron-down text-sm"></i></div>
                                <div class="dropdown-content">
                                    <a href="<?= base_url(route_to('frontend_profile')) ?>">Profil Sekolah</a>
                                    <?php
                                    $model = model('admin/komli');
                                    if($data = $model->get()->getResult()){
                                        foreach ($data as  $value) {
                                            ?>
                                            <a href="<?php echo site_url(route_to('frontend_detail_komli',$value->id, $value->slug)); ?>"><?php echo $value->nama_komli; ?></a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <a href="<?php echo site_url(route_to('frontend_sambutan_kepala_sekolah')) ?>">Sambutan Kepala Sekolah</a>
                                    <a href="<?php echo site_url(route_to('frontend_struktur_organisasi')); ?>">Stuktur Organisasi</a>
                                    <a href="<?php echo site_url(route_to('frontend_visimisi')); ?>">Visi & Misi</a>
                                    <a href="<?php echo site_url(route_to('frontend_budaya_sekolah')); ?>">Budaya Sekolah</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <div class="nav_link">Kurikulum<i class="fa-solid fa-chevron-down text-sm"></i>
                                </div>
                                <div class="dropdown-content">
                                    <a href="#kompetensi">Kompetisi Keahlian</a>
                                    <a href="pages/prospek_pplg.html">Prospek Kelulusan</a>
                                    <a href="pages/ekskul_list.html">Ektrakulikuler</a>
                                    <a href="#">Gambaran Pembelajaran</a>
                                </div>
                            </li>
                            <li>
                                <a href="pages/prestasi_list.html" class="nav_link">Prestasi</a>
                            </li>
                            <li class="dropdown">
                                <div class="nav_link">Kelas Industri<i class="fa-solid fa-chevron-down text-sm"></i>
                                </div>
                                <div class="dropdown-content">
                                    <a href="#">Teaching Factory</a>
                                    <a href="#">Axioo Class Program</a>
                                </div>
                            </li>
                            <li>
                                <a href="<?= site_url(route_to('frontend_post')) ?>" class="nav_link">Berita</a>
                            </li>
                            <li>
                                <a href="pages/school_contact.html" class="nav_link">Kontak Kami</a>
                            </li>
                            <a href="ppdb.html" id="nav_btn" class="btn btn-sm btn_v2 btn_scrolled">PPDB</a>
                        </ul>
                    </div>
                </div>

                <div class="toggle_open">
                    <i class="fa-solid fa-bars text-3xl"></i>
                </div>
            </div>
        </div>
    </nav>
