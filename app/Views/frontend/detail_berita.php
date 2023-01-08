<?php $this->extend('frontend/layout/app') ?>
<?= $this->include('frontend/shared/navbar') ?>
    <header class="pages_header w-full" style="background: url('../assets/img/header_bg.png');">
        <div class="pages_nav news_page_nav">
            <div class="container">
                <div class="nav flex items-center gap-3">
                    <a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
                        href="">Berita Sekolah</a>
                </div>
                <h2 class="news_title">
                    Workshop Kewirausahaan Berbasis Digital Marketing
                </h2>
                <div class="detail flex items-center gap-8">
                    <div class="subdetail flex items-center">
                        <i class="fa-regular fa-calendar-days text-white"></i>
                        <p>Jum'at, 04 November 2022</p>
                    </div>
                    <div class="subdetail flex items-center">
                        <i class="fa-solid fa-user text-white text-sm"></i>
                        <p>Administrator</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Berita Pages -->
    <div class="container">
        <div class="berita grid grid-cols-1 lg-grid-cols-3 gap-10 xl-gap-12 items-start">
            <section class="berita_group lg-col-span-2">
                <div class="berita_artikel">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's
                        standard dummy text
                        ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                        the industry's
                        standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting
                        industry. has been
                        the industry's standard dummy text ever since theLorem Ipsum is simply dummy text of the printing
                        and typesetting
                        industry. has been the industry's standard dummy text ever since the</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's
                        standard dummy text
                        ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                        the industry's
                        standard dummy text ever since the</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's
                        standard dummy text
                        ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                        the industry's
                        standard dummy text ever since the</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's
                        standard dummy text
                        ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                        the industry's
                        standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting
                        industry. has been
                        the industry's standard dummy text ever since theLorem Ipsum is simply dummy text of the printing
                        and typesetting
                        industry. has been the industry's standard dummy text ever since the</p>
                    <span class="mark">(Edited by penulis)</span>
                    <div class="line"></div>
                </div>
                <div class="berita_comment_form">
                    <div class="title">
                        <i class="fa-regular fa-comments text-3xl"></i>
                        <div>
                            <h2>Komentar</h2>
                            <p>Seluruh data yang anda kirimkan Terlindungi</p>
                        </div>
                    </div>
                    <form action="" class="form_container">
                        <textarea name="comment" id="comment" rows="4" class="form_control" placeholder="Komentar Anda"></textarea>
                        <div class="form_group grid grid-cols-1 md-grid-cols-2">
                            <input type="text" class="form_control" placeholder="Nama Lengkap">
                            <input type="text" class="form_control" placeholder="Email Anda">
                        </div>
                        <input type="submit" value="Posting" class="btn_submit">
                    </form>
                </div>
            </section>
            
        </div>
    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/swiper.js"></script>
</body>

</html>