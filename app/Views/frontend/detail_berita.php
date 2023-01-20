<?php $this->extend('frontend/layouts/app'); ?>
<?php $this->section('head'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/base16/one-light.min.css">
<meta property="og:site_name" content="SMK INFORMATIKA SUMEDANG" />
<meta property="og:title" content="<?php echo $detail_berita->title; ?>" />
<meta property="og:description" content="
<?php echo $detail_berita->deskripsi_singkat; ?>
" />
<meta property="og:url" content="<?php echo site_url(route_to('frontend_detail_post',$detail_berita->id,$detail_berita->slug)); ?>" />
<meta property="og:type" content="article" />
<meta property="article:publisher" content="<?php echo $detail_berita->nama_lengkap; ?>" />
<meta property="article:section" content="Coding" />
<meta property="article:tag" content="<?php echo $detail_berita->keywords; ?>" />
<meta property="og:image" content="<?php echo base_url($detail_berita->thumbnail); ?>" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="640" />
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<header class="pages_header w-full" style="background: url('<?php echo base_url($detail_berita->thumbnail); ?>');">
  <?= $this->include('frontend/partials/nav_menu'); ?>

    <div class="pages_nav news_page_nav">
        <div class="container">
            <div class="nav flex items-center gap-3">
                <a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
                    href="">Berita Sekolah</a>
            </div>
            <h2 class="news_title">
                <?php echo $detail_berita->title ?? '' ?>
            </h2>
            <div class="detail flex items-center gap-8">
                <div class="subdetail flex items-center">
                    <i class="fa-regular fa-calendar-days text-white"></i>
                    <p><?= tanggal_indo(date('Y-m-y',strtotime($detail_berita->create_at))) ?></p>
                </div>
                <div class="subdetail flex items-center">
                    <i class="fa-solid fa-user text-white text-sm"></i>
                    <p><?php echo $detail_berita->nama_lengkap ?? 'administrator'; ?></p>
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
                <p>
                  <?php if (!empty($detail_berita->isi)): ?>
                    <?php echo $detail_berita->isi; ?>
                    <?php else: ?>
                      <span>Nuff</span>
                  <?php endif; ?>
                </p>
                <!-- <span class="mark">(Edited by penulis)</span> -->
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
        <!-- Aside Berita -->
        <aside class="berita_menu">
            <div class="search_box flex justify-between">
                <input type="text" placeholder="Search....">
                <button class="btn_search flex flex-center"><i class="fa-solid fa-magnifying-glass text-lg text-white absolute"></i></button>
            </div>
            <div class="berita_title_group">
                <div class="line"></div>
                <div class="title">
                    <p>AGENDA</p>
                    <h2>SMKIFSU</h2>
                </div>
            </div>
            <?php echo $this->include('frontend/shared/sidebar_agenda'); ?>
            <div class="berita_title_group">
                <div class="line"></div>
                <div class="title">
                    <p>KATEGORI</p>
                    <h2>BERITA IFSU</h2>
                </div>
            </div>
            <ul class="category_group">
                <li><a href="">Berita Sekolah</a></li>
                <li><a href="">Prestasi</a></li>
                <li><a href="">Informasi Penerimaan Siswa Baru</a></li>
                <li><a href="">Informasi Kelulusan</a></li>
                <li><a href="">Informasi Beasiswa</a></li>
                <li><a href="">Lainnya</a></li>
            </ul>
        </aside>
    </div>
</div>

<script src="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/highlight.min.js"></script>
<!-- and it's easy to individually load additional languages -->
<script src="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/languages/go.min.js"></script><script type="text/javascript">
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el);
  });
});
</script>
<?php $this->endSection(); ?>
