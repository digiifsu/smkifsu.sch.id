<?php echo $this->extend('frontend/layouts/app'); ?>
<?php echo $this->section('content') ?>
<?php 
$pengaturan = model("Admin\Pengaturan")->get()->getRow();
 ?>
<header class="pages_header w-full" style="background: url('../assets/img/header_bg.png');">
	<?= $this->include('frontend/partials/nav_menu'); ?>
	<div class="pages_nav">
		<div class="container">
			<h2>
				Profil Sekolah
			</h2>
			<div class="nav flex items-center gap-3">
				<a href="../home.html">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a href=""
				class="active">Profil Sekolah</a>
			</div>
		</div>
	</div>
</header>
<section id="schoolProfile">
	<div class="container">
		<div class="title_group">
			<div class="title">
				<p>Selayang Pandang</p>
			</div>
			<h2>Profil Sekolah</h2>
		</div>
		<article class="profil_sekolah grid grid-cols-1 md-grid-cols-2 gap-15">
			<div class="text_group">
				<?php echo $pengaturan->profile_sekolah;  ?>
			</div>
			<iframe class="video_profile" width="100%" src="<?php echo $pengaturan->video_profile; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</article>
		<?php 
		$total_komli = model('Admin/Komli');
		$total_guru = model('Admin/Guru');
		$total_siswa = model('Admin/Siswa');

		?>
		<div class="school_stat grid grid-cols-1 md-grid-cols-4 gap-5">
			<div class="card_stat">
				<img data-src="<?php echo base_url('assets/frontend/assets/icons/Vector.svg') ?>" class="icon">
				<h2><?php echo $total_komli->countAllResults(); ?>+</h2>
				<p>Kompetisi Keahlian</p>
			</div>
			<div class="card_stat">
				<img data-src="<?php echo base_url('assets/frontend/assets/icons/Vector.svg') ?>" class="icon">
				<h2><?php echo $total_guru->countAllResults(); ?>+</h2>
				<p>Tenaga Pendidik dan Staf</p>
			</div>
			<div class="card_stat">
				<img data-src="<?php echo base_url('assets/frontend/assets/icons/Vector.svg') ?>" class="icon">
				<h2><?php echo $total_siswa->countAllResults(); ?>+</h2>
				<p>Pelajar</p>
			</div>
			<div class="card_stat">
				<img data-src="<?php echo base_url('assets/frontend/assets/icons/Vector.svg') ?>" class="icon">
				<h2>4000+</h2>
				<p>Alumni</p>
			</div>
		</div>
	</div>
	<?php echo $this->include('frontend/shared/sponsor'); ?>
	<?php echo $this->endSection() ?> ?>