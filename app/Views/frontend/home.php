<?php $this->extend('frontend/layout/app'); ?>
<?= $this->include('frontend/partials/header') ?>
<?php $this->section('content'); ?>
<section id="kompetensi" class="w-full">
        <div class="container">
            <div class="kompetensi grid grid-cols-1 md-grid-cols-2 gap-12 items-center w-full">
                <div class="kompetensi_title">
                    <div class="title_group">
                        <div class="title">
                            <p>KOMPETENSI KEAHLIAN</p>
                        </div>
                        <h2>Menciptakan Bibit <span class="text-yellow">Unggul</span> dan <span
                                class="text-yellow">Terampil</span></h2>
                        <p>Mengembangkan skill siswa sesuai kompetisi keahliannya masing masing</p>
                    </div>
                </div>
                <div class="kompetensi_list grid grid-cols-1 md-grid-cols-2 gap-10">
                    <div class="list">
                        <div class="icon">
                            <img src="assets/icons/pplg.png" alt="">
                        </div>
                        <h2>Pemrograman Perangkat Lunak dan Gim (PPLG)</h2>
                        <p>Mengembangkan skill siswa sesuai kompetisi keahliannya masing masing</p>
                        <div class="btn">
                            <a href="">Profil Jurusan</a><i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="list">
                        <div class="icon">
                            <img src="assets/icons/dkv.png" alt="">
                        </div>
                        <h2>Design Visual dan Komunikasi (DKV)</h2>
                        <p>Mengembangkan skill siswa sesuai kompetisi keahliannya masing masing</p>
                        <div class="btn">
                            <a href="">Profil Jurusan</a><i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home_sec3" class="w-full">
        <div class="container">
            <div class="fasilitas">
                <div class="title_group title_centered">
                    <div class="title">
                        <p>FASILITAS</p>
                    </div>
                    <h2>
                        Membantu Para Siswa <span class="text-yellow">Berkembang</span>
                    </h2>
                </div>
                <div class="w-full grid grid-cols-1 md-grid-cols-3 lg-grid-cols-4 xl-grid-cols-5 gap-5">
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-red"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-green"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-yellow"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-aqua"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-pink"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-orange"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-brown"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-blue"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-red"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-green"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-yellow"></i>Ruang Praktik
                        Siswa</div>
                    <div class="facility_list"><i class="fa-regular fa-building text-3xl text-aqua"></i>Ruang Praktik
                        Siswa</div>
                </div>
                <a href="" class="btn btn-md btn-more">
                    Selengkapnya
                </a>
            </div>

        </div>
    </section>
    <section id="karyaSiswa" class="w-full">
        <div class="karya_siswa">
            <div class="container">
                <div class="control">
                    <div class="title_group title_centered">
                        <div class="title">
                            <p>KARYA SISWA</p>
                        </div>
                        <h2>Beragam Karya <span class="text-yellow">Digital</span> Ciptaan Siswa-Siswi IFSU</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                    <div class="control_btn">
                        <div class="btn button_prev"><i class="fa-solid fa-chevron-left text-white text-sm"></i></div>
                        <div class="btn button_next"><i class="fa-solid fa-chevron-right text-white text-sm"></i></div>
                    </div>
                </div>
            </div>

            <div class="blank"></div>
            <div class="list swiper karyaSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="karya_card">
                            <div class="text_group">
                                <div class="icon">
                                    <img src="assets/icons/web.png" alt="">
                                </div>
                                <h2>Web Apps</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                            </div>
                            <a href="#" class="link">Lihat detail</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="karya_card">
                            <div class="text_group">
                                <div class="icon">
                                    <img src="assets/icons/mobile.png" alt="">
                                </div>
                                <h2>Mobile Apps</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                            </div>
                            <a href="#" class="link">Lihat detail</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="karya_card">
                            <div class="text_group">
                                <div class="icon">
                                    <img src="assets/icons/film.png" alt="">
                                </div>
                                <h2>Film & Animasi</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                            </div>
                            <a href="#" class="link">Lihat detail</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="karya_card">
                            <div class="text_group">
                                <div class="icon">
                                    <img src="assets/icons/photo.png" alt="">
                                </div>
                                <h2>Photography</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                            </div>
                            <a href="#" class="link">Lihat detail</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="karya_card">
                            <div class="text_group">
                                <div class="icon">
                                    <img src="assets/icons/bot.png" alt="">
                                </div>
                                <h2>Robotic</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                            </div>
                            <a href="#" class="link">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home_sec5" class="w-full">
        <div class="container">
            <div class="testimoni">
                <div class="title_group">
                    <div class="title">
                        <p>TESTIMONI</p>
                    </div>
                    <h2>LULUSAN KAMI</h2>
                </div>
                <div class="swiper testiSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi_card">
                                <div class="profile">
                                    <div class="profile_icon">
                                        <img src="assets/img/cameraman-holding-camera.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h2>Jamal</h2>
                                        <p>Programmer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old.Contrary to popular belief,
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi_card">
                                <div class="profile">
                                    <div class="profile_icon">
                                        <img src="assets/img/ahit.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h2>Ahmad Hidayat</h2>
                                        <p>Programmer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old.Contrary to popular belief,
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi_card">
                                <div class="profile">
                                    <div class="profile_icon">
                                        <img src="assets/img/cameraman-holding-camera.jpg"
                                            alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h2>S. Putri</h2>
                                        <p>Programmer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old.Contrary to popular belief,
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi_card">
                                <div class="profile">
                                    <div class="profile_icon">
                                        <img src="assets/img/cameraman-holding-camera.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h2>Jamal</h2>
                                        <p>Programmer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old.Contrary to popular belief,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- berita terkini -->
    <section id="beritaPost" class="w-full">
        <div class="container">
            <div class="berita">
                <div class="title_group">
                    <div class="title">
                        <p>SMKIFSU</p>
                    </div>
                    <h2>BERITA TERKINI</h2>
                </div>
                <div class="berita_galery grid grid-cols-1 md-grid-cols-3 gap-10 md-gap-5">
                <?php if(!empty($blog) && is_array($blog)):?>
                    <?php foreach($blog as $item): ?>
                        <div class="berita_border">
                        <?php
                        if(!empty($item->thumbnail)){
                            ?>
                            <img src="<?= base_url($item->thumbnail); ?>">
                            <?php
                        }
                        ?>
                        <a href="<?= site_url(route_to('frontend_detail_post', $item->id,$item->slug)) ?>" class="berita_desc">
                            <div class="category">
                                <?= $item->nama_category ?>
                            </div>
                            <div class="title">
                                <div class="date flex items-center">
                                    <i class="fa-regular fa-calendar-days text-white text-sm"></i>
                                    <p><?= date('d/m/Y h:i:s',strtotime($item->create_at)); ?></p>
                                </div>
                                <h2><?= strlen($item->title) >= 100 ? substr($item->title,0,100).'...' : $item->title; ?></h2>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                        
                 <?php endif; ?>
            </div>
            <a href="pages/berita_list.html" class="btn btn-md btn-more">
                Selengkapnya
            </a>
        </div>
    </section>
    <!-- endberita -->
    <section id="home_sec7" class="w-full">
        <div class="container">
            <div class="contact w-full">
                <div class="title_group">
                    <div class="title">
                        <p>KONTAK</p>
                    </div>
                    <h2>HUBUNGI KAMI</h2>
                </div>
                <div class="contact_grid grid grid-cols-1 md-grid-cols-2 gap-5">
                    <div class="contact_form">
                        <form action="">
                            <input type="text" class="form_control mb-2" placeholder="Pengirim"></input>
                            <input type="text" class="form_control mb-2" placeholder="Email"></input>
                            <input type="text" class="form_control mb-2" placeholder="Subject"></input>
                            <textarea name="pesan" id="pesan" rows="8" placeholder="Pesan"
                                class="form_control pesan"></textarea>
                            <button type="submit" class="btn btn-submit">
                                Kirim
                            </button>
                        </form>
                    </div>
                    <div class="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4564104195706!2d107.92178571539691!3d-6.835753768770058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d6cca33a73eb%3A0xafda24d08020430d!2sSMK%20Informatika%20Sumedang!5e0!3m2!1sen!2sid!4v1671603360520!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->endSection(); ?>