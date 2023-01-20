<?php echo $this->extend('frontend/layouts/app'); ?>
<?php echo $this->section('content') ?>
<?php
$pengaturan = model('Admin/Pengaturan')->get()->getRow();

 ?>
<!-- this used pages header -->
     <header class="pages_header w-full" style="background: url('<?php echo base_url('assets/frontend/assets/img/header_bg.png') ?>');">
     	<?= $this->include('frontend/partials/nav_menu'); ?>
       <div class="pages_nav">
           <div class="container">
               <h2>
                   Profil Sekolah
               </h2>
               <div class="nav flex items-center gap-3">
                   <a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a href="">Profil Sekolah</a><i class="fa-solid fa-chevron-right text-white"></i><a href="" class="active">Sambutan Kepala Sekolah</a>
               </div>
           </div>
       </div>
   </header>
   <section id="sectionArticle">
       <div class="container">
           <article class="article_wrapper">
               <div class="title_group">
                   <div class="title">
                       <p>Sambutan</p>
                   </div>
                   <h2>Kepala Sekolah</h2>
               </div>
               <div class="banner_img">
                   <!-- banner image -->
               </div>
               <div class="article_text">
                 <?php if (!empty($pengaturan->sambutan_kepala_sekolah)): ?>
                   <p>
                     <?php echo $pengaturan->sambutan_kepala_sekolah; ?>
                   </p>
                 <?php endif; ?>
                </div>
               <p class="watermark">
                   ( Edited by Admin )
               </p>
           </article>
       </div>
   </section>
<?php $this->endSection(); ?>
