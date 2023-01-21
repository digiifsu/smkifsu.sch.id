  <?php $this->extend('frontend/layouts/app'); ?>
  <?php $this->section('content'); ?>
  <!-- This used pages header -->
  <header class="pages_header w-full" style="background: url('<?php echo base_url('assets/frontend/assets/img/header_bg.png') ?>');">
    <?= $this->include('frontend/partials/nav_menu'); ?>
    <div class="pages_nav">
        <div class="container">
            <h2>
                Ektrakulikuler
            </h2>
            <div class="nav flex items-center gap-3">
                <a href="ekskul_profile.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
                href="" class="active">Ektrakulikuler</a>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="galery_list grid grid-cols-1 md-grid-cols-2 lg-grid-cols-3 gap-5">
            <?php $model = model('Admin/Eskul');
            $data_eskul = $model->select('tb_lembaga.nama as nama_pembina,'.$model->_get_table().".*")->join('tb_lembaga','tb_lembaga.id='.$model->_get_table().".pembina",'LEFT')->get()->getResult(); ?>
            <?php if ($data_eskul): ?>
                <?php foreach ($data_eskul as  $value): ?>
                    <div class="card">
                        <div class="title">
                           <p><?php echo strip_tags($value->nama); ?></p>
                       </div>
                       <a href="<?php echo site_url(route_to('frontend_eskul_detail',$value->id)); ?>" class="detail flex flex-center">
                        <p>Profil Ekskul</p>
                    </a>
                    <?php if (!empty($value->foto)): ?>
                       <img data-src="<?php echo base_url($value->foto) ?>" >
                   <?php else: ?>
                       <img data-src="../assets/img/ekskulbg.png" >
                   <?php endif ?>
               </div>

           <?php endforeach ?>
       <?php endif ?>
   </div>
</div>
</section>
<?php $this->endSection(); ?>