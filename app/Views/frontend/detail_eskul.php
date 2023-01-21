  <?php $this->extend('frontend/layouts/app'); ?>
  <?php $this->section('content'); ?>
  <!-- This used pages header -->
  <header class="home_header" style="background: url('<?php echo base_url($data_eskul->foto) ?>');">
     <?= $this->include('frontend/partials/nav_menu'); ?>
     <div class="header_content">
        <div class="container">
            <div class="header_items">
                <div class="title">
                    <p>#IFSU.EKSKUL</p>
                </div>
                <h1><?php echo $data_eskul->nama; ?></h1>
                <p>
                    <?php echo strip_tags(substr($data_eskul->sambutan_pembina,0,200)) ?>
                </p>
                <div class="header_btn">
                    <a href="" class="btn btn-md"><i class="fa-regular fa-circle-play text-lg"></i>PROFIL KAMI</a>
                    <a href="" class="btn btn-md"></i></i>Join Us</a>
                </div>
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
                        <p>SAMBUTAN PEMBINA</p>
                    </div>
                    <h2><?php echo $data_eskul->nama; ?></h2>
                </div>
                <div class="text_group">
                   <?php 
                   echo $data_eskul->sambutan_pembina;
                    ?>
                </div>
            </div>
            <div class="banner md-col-span-2">
                <div class="namecard">
                    <p>Pembina ICSO</p>
                    <h6><?php echo $data_eskul->nama_pembina; ?></h6>
                </div>
                <img data-src="<?php echo base_url($data_eskul->foto_pembina) ?>">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="ekskul_program grid grid-cols-1 md-grid-cols-2 gap-12 lg-gap-20 items-center">
            <div class="img_group grid grid-cols-5 grid-rows-3 gap-5">
                <div class="galery col-span-2 row-span-1"></div>
                <div class="galery col-span-3 row-span-2"></div>
                <div class="galery col-span-2 row-span-2"></div>
                <div class="galery col-span-3 row-span-1"></div>
            </div>
            <div class="list">
                <div class="title_group">
                    <div class="title">
                        <p>Materi Pembelajaran</p>
                    </div>
                    <h2>Apa yang dipelajari bersama Kami?</h2>
                </div>
               <p><?php echo $data_eskul->yang_dipelajari; ?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="title_group title_centered">
            <div class="title">
                <p>Struktur</p>
            </div>
            <h2>Informatika Creative Student Organitation</h2>
        </div>
        <div class="container">
            <div class="ekskul_structure grid grid-cols-1 md-grid-cols-3 gap-10">
                <div class="card_structure">
                    <div class="img_border">
                        <img src="<?php echo base_url($data_eskul->ketua->foto) ?>" alt="" width="100%">
                    </div>
                    <p>President of <?= $data_eskul->nama; ?> </p>
                    <h6><?php echo $data_eskul->ketua->nama ?></h6>
                </div>
                <div class="card_structure">
                    <div class="img_border">
                        <img src="<?php echo base_url($data_eskul->wakil1->foto) ?>" alt="" width="100%">
                    </div>
                    <p>President of <?= $data_eskul->nama; ?> </p>
                    <h6><?php echo $data_eskul->wakil1->nama ?></h6>
                </div>
                <div class="card_structure">
                    <div class="img_border">
                        <img src="<?php echo base_url($data_eskul->wakil2->foto) ?>" alt="" width="100%">
                    </div>
                    <p>President of <?= $data_eskul->nama; ?> </p>
                    <h6><?php echo $data_eskul->wakil2->nama ?></h6>
                </div>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="join_us_section grid grid-cols-1 gap-5 lg-grid-cols-5 lg-gap-18 items-center">
            <div class="banner md-col-span-2"></div>
            <div class="control md-col-span-3">
                <div class="title_group">
                    <div class="title">
                        <p>YUK JADI BAGIAN DARI KAMI</p>
                    </div>
                    <h2>Informatika Creative Student Organitation (ICSO)</h2>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. n the industry's standard  has been the industry's standard dummy text ever since</p>
                <a href="" class="btn btn-sm">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>