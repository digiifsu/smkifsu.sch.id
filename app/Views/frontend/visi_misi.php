<?php echo $this->extend('frontend/layouts/app'); ?>
<?php echo $this->section('content') ?>
<?php 
$pengaturan = model("Admin/Pengaturan")->get()->getRow();


 ?>
<header class="pages_header w-full" style="background: url('../assets/img/header_bg.png');">
	<?= $this->include('frontend/partials/nav_menu'); ?>
	<div class="pages_nav">
		<div class="container">
			<h2>
				Profil Sekolah
			</h2>
			<div class="nav flex items-center gap-3">
				<a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a href="">Profil Sekolah</a><i class="fa-solid fa-chevron-right text-white"></i><a href="" class="active">Budaya Sekolah</a>
			</div>
		</div>
	</div>
</header>
<section id="sectionArticle">
	<div class="container">
		<article class="article_wrapper">
			<div class="title_group">
				<div class="title">
					<p>Visi & Misi</p>
				</div>
				<h2>SMK INFORMATIKA SUMEDANG</h2>
			</div>
			<div class="line"></div>
			
			<div class="visimisi">
				<?php echo !empty($pengaturan->visi_misi) ? $pengaturan->visi_misi : 'Belum ada content'; ?>
			</div>
		</article>
	</div>
</section>
<?php $this->endSection(); ?>