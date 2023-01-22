  <?php $this->extend('frontend/layouts/app'); ?>
  <?php $this->section('content'); ?>
  <!-- This used pages header -->
  <header class="pages_header w-full" style="background: url('<?php echo base_url('assets/frontend/assets/img/header_bg.png') ?>');">
   <?= $this->include('frontend/partials/nav_menu'); ?>
   <div class="pages_nav">
    <div class="container">
        <h2>
            Fasilitas
        </h2>
        <div class="nav flex items-center gap-3">
            <a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
            href="" class="active">Fasilitas</a>
        </div>
    </div>
</div>
</header>
<section>
    <div class="container">
        <div class="galery_list grid grid-cols-1 md-grid-cols-2 lg-grid-cols-3 gap-5">
            <?php 
            $data = model('Admin/Fasilitas')->findAll();

            ?>
            <?php if (!empty($data)): ?>
                <?php foreach ($data as  $value): ?>
                    <div class="card">
                        <div class="title">
                           <p><?php echo $value->nama ?></p>
                       </div>
                       <a href="<?php echo $value->link360 ?>" class="detail flex flex-center">
                        <i class="fa-solid fa-magnifying-glass text-white text-lg"></i><p>Lihat 360deg</p>
                    </a>
                    <?php if (!empty($value->image)): ?>
                        <img data-src="<?php echo base_url($value->image); ?>" >
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <span>Nof found</span>
        <?php endif ?>
    </div>
</div>
</section>

<?php $this->endSection(); ?>