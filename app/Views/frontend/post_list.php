<?php echo $this->extend('frontend/layouts/app'); ?>
<?php echo $this->section('content') ?>
<header class="pages_header w-full" style="background: url('<?= base_url('assets/frontend/assets/img/header_bg.png') ?>');">
	<?= $this->include('frontend/partials/nav_menu'); ?>
	<div class="pages_nav">
		<div class="container">
			<h2>
				Postingan Sekolah
			</h2>
			<div class="nav flex items-center gap-3">
				<a href="#">Beranda</a><i class="fa-solid fa-chevron-right text-white"></i><a
				href="">Postingan Sekolah</a>
			</div>
		</div>
	</div>
</header>
<!-- Berita Pages -->
<div class="container">
	<div class="berita grid grid-cols-1 lg-grid-cols-3 gap-10 xl-gap-12 items-start">
		<section class="berita_group lg-col-span-2">
			<div class="berita_banner swiper newsSwiper">
				<div class="swiper-wrapper">
					<?php 
					$model_berita = model("Admin/Posts");
					$post = $model_berita->orderBy('create_at','asc')->get()->getResult();
					?>
					<?php if (!empty($post)): ?>
						<?php foreach ($post as $value): ?>
							<a href="<?php echo site_url(route_to('frontend_detail_post',$value->id,$value->slug)); ?>" class="swiper-slide card_news_banner">
								<img data-src="<?php echo base_url($value->thumbnail ?? 'assets/frontend/assets/img/berita_banner.png') ?>" width="100%" height="100%">
								<div class="title_news_banner flex flex-center">
									<div class="date flex items-center">
										<i class="fa-regular fa-calendar-days text-white text-sm"></i>
										<p><?= tanggal_indo(date('Y-m-y',strtotime($value->create_at))) ?></p>

									</div>
									<h2><?php echo $value->title ?? '-' ?></h2>
								</div>
							</a>
						<?php endforeach ?>
					<?php endif ?>
				</div>
				<div class="banner_control berita_btn_prev flex items-center justify-start"><i class="fa-solid fa-chevron-left text-white text-xl"></i></div>
				<div class="banner_control berita_btn_next flex items-center justify-end"><i class="fa-solid fa-chevron-right text-white text-xl"></i></div>
			</div>
			<div class="berita_title_group">
				<div class="line"></div>
				<div class="title">
					<h2>Berita Terkini</h2>
				</div>
			</div>
			<div class="berita_galery grid grid-cols-1 md-grid-cols-2 gap-6">
				<?php 
				$post_with_paginate = $model_berita->paginate(40);
				$categori = model('Admin/PostsCategories');
				$pager = $model_berita->pager;
				?>
				<?php if (!empty($post_with_paginate)): ?>
					<?php foreach ($post_with_paginate as  $value): ?>
						<div class="berita_border">
							<?php if (!empty($value->thumbnail)): ?>
								<img src="<?php echo base_url($value->thumbnail) ?>">
							<?php else: ?>
								<img src="<?php echo base_url('assets/frontend/assets/img/banner_news.png') ?>">
							<?php endif ?>
							<a href="<?php echo site_url(route_to('frontend_detail_post',$value['id'],$value['slug'])); ?>" class="berita_desc">
								<div class="category">
									<?= $categori->where('id',$value['id_category'])->get()->getRow()->nama ?>
								</div>
								<div class="title">
									<div class="date flex items-center">
										<i class="fa-regular fa-calendar-days text-white text-sm"></i>
										<p><?= tanggal_indo(date('Y-m-y',strtotime($value['create_at']))) ?></p>
									</div>
									<h2>
										<?php echo $value['title'] ?? '' ?>
									</h2>
								</div>
							</a>
						</div>
					<?php endforeach ?>
				<?php endif ?>
			</div>
			<?php echo $pager->links(); ?>

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
			<div class="agenda_group grid grid-cols-1 gap-5">
				<div class="card_agenda">
					<img src="<?php echo base_url('frontend/assets/assets/img/agenda.png') ?>" alt="">
					<div class="title">
						<p>Jum'at, 04 November 2022</p>
						<h2>Penilaian Akhir Semester</h2>
					</div>
				</div>
				<div class="card_agenda">
					<img src="<?php echo base_url('frontend/assets/assets/img/agenda.png') ?>" alt="">
					<div class="title">
						<p>Jum'at, 04 November 2022</p>
						<h2>Penilaian Akhir Semester</h2>
					</div>
				</div>
				<div class="card_agenda">
					<img src="<?php echo base_url('frontend/assets/assets/img/agenda.png') ?>" alt="">
					<div class="title">
						<p>Jum'at, 04 November 2022</p>
						<h2>Penilaian Akhir Semester</h2>
					</div>
				</div>
			</div>
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
<?php $this->endSection(); ?>