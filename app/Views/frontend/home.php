<?php $this->extend('frontend/layouts/app'); ?>
<?php $this->section('content'); ?>
<header class="home_header" style="background: url('<?= base_url('assets/frontend') ?>/assets/img/header_bg.png');">
    <?= $this->include('frontend/partials/nav_menu'); ?>
    <div class="header_content">
        <div class="container">
            <div class="header_items">
                <div class="title">
                    <p>Website Official</p>
                    <div class="line"></div>
                </div>
                <h1>SMK INFORMATIKA SUMEDANG</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                industry's standard dummy text ever since the</p>
                <div class="header_btn">
                    <a href="" class="btn btn-md"><i class="fa-regular fa-circle-play text-lg"></i>PROFIL IFSU</a>
                    <a href="" class="btn btn-md"><i class="fa-regular fa-compass text-lg"></i></i>Metaverse</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="kompetensi" class="w-full">
    <div class="container">
        <div class="kompetensi grid grid-cols-1 md-grid-cols-2 gap-12 items-center w-full">
            <div class="kompetensi_title">
                <div class="title_group">
                    <div class="title">
                        <p>KOMPETENSI KEAHLIAN</p>
                    </div>
                    <h2>Menciptakan Bibit <span class="text-yellow">Unggul</span> dan <span class="text-yellow">Terampil</span></h2>
                    <p>Mengembangkan skill siswa sesuai kompetisi keahliannya masing masing</p>
                </div>
            </div>
            <div class="kompetensi_list grid grid-cols-1 md-grid-cols-2 gap-10">

                <?php if (!empty($komli)): ?>
                    <?php foreach ($komli as  $value): ?>
                        <div class="list">
                            <div class="icon">
                                <img data-src="<?php echo base_url('assets/frontend'); ?>/assets/icons/pplg.png" alt="">
                            </div>
                            <h2><?php echo $value->nama_komli; ?></h2>
                            <p>
                                <?php echo substr(strip_tags(ucwords($value->deskripsi)), 0,130); ?>
                            </p>
                            <div class="btn">
                                <a href="<?php echo site_url(route_to('frontend_detail_komli',$value->id, $value->slug)); ?>">Profil Jurusan</a><i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <span>Not Data found!</span>
                <?php endif ?>
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
            <a href="pages/facility_list.html" class="btn btn-md btn-more">
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
                                <img data-src="assets/icons/web.png" alt="">
                            </div>
                            <h2>Web Apps</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="karya_card">
                        <div class="text_group">
                            <div class="icon">
                                <img data-src="assets/icons/mobile.png" alt="">
                            </div>
                            <h2>Mobile Apps</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="karya_card">
                        <div class="text_group">
                            <div class="icon">
                                <img data-src="assets/icons/film.png" alt="">
                            </div>
                            <h2>Film & Animasi</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="karya_card">
                        <div class="text_group">
                            <div class="icon">
                                <img data-src="assets/icons/photo.png" alt="">
                            </div>
                            <h2>Photography</h2>
                            <p>L orem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,orem ipsum dolor
                                sit amet, consectetur adipisicing elit. Eligendi,orem ipsum dolor sit amet,
                            consectetur adipisicing elit. Eligendi,</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="karya_card">
                        <div class="text_group">
                            <div class="icon">
                                <img data-src="assets/icons/bot.png" alt="">
                            </div>
                            <h2>Robotic</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,</p>
                        </div>
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
                                    <img data-src="assets/img/cameraman-holding-camera.jpg" alt="">
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
                                    <img data-src="assets/img/ahit.jpg" alt="">
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
                                    <img data-src="assets/img/cameraman-holding-camera.jpg" alt="">
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
                                    <img data-src="assets/img/cameraman-holding-camera.jpg" alt="">
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

                <?php if (!empty($blog)): ?>
                    <?php foreach ($blog as $row): ?>
                        <div class="berita_border">
                            <img data-src="<?php echo base_url($row->thumbnail); ?>">
                            <a href="<?php echo site_url(route_to('frontend_detail_post',$row->id,$row->slug)) ?>" class="berita_desc">
                                <div class="category">
                                    <?php echo $row->nama_category ?? 'Unknown';  ?>
                                </div>
                                <div class="title">
                                    <div class="date flex items-center">
                                        <i class="fa-regular fa-calendar-days text-white text-sm"></i>
                                        <p><?= date('D,d-M-Y',strtotime($row->create_at)) ?></p>
                                    </div>
                                    <h2><?= $row->title ?? '' ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <span>Not Data</span>
                <?php endif ?>
            </div>
        </div>
        <a href="pages/berita_list.html" class="btn btn-md btn-more">
            Selengkapnya
        </a>
    </div>
</section>
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
                        <textarea name="pesan" id="pesan" rows="8" placeholder="Pesan" class="form_control pesan"></textarea>
                        <button type="submit" class="btn btn-submit">
                            Kirim
                        </button>
                    </form>
                </div>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4564104195706!2d107.92178571539691!3d-6.835753768770058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d6cca33a73eb%3A0xafda24d08020430d!2sSMK%20Informatika%20Sumedang!5e0!3m2!1sen!2sid!4v1671603360520!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->include('frontend/shared/sponsor') ?>
<?php $this->endSection(); ?>