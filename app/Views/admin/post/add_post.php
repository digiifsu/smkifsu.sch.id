<?php $this->extend('admin\layout\app_layout');  ?>

<?php $this->section('head'); ?>
<link rel="stylesheet" href="<?= base_url('assets/vendors/froala') ?>/css/froala_editor.pkgd.min.css">
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<style>
	.card-post{
		border-radius: 0!important;
		border:none;
		box-shadow: 0px 0px 3px #dedede;
	}
	.card.card-post .card-title{
		font-size: 13px;
	}
	.fr-box{
		border-radius: 0!important;
	}
</style>
<div class="page-inner">
	<h4 class="page-title">Tambah Post</h4>
	<div class="page-category">
		<a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= route_to('admin_post_all') ?>"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
		<!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
	</div>
	<!-- add new post -->
	<form action="">
		<div class="row">
			<div class="col-md-8 mb-3">
				<div class="card-post bg-white p-3">
					<div class="form-group">
						<input type="text" class="form-control title-input-post" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<div>
							<div class="input-group">

								<select name="" class="form-control" id="categories">
									<option value="">Pendidikan</option>
									<option value="">Budaya</option>
									<option value="">Sekolah</option>

								</select>
								<div class="input-group-prepend">
									<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-plus"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="slug">Slug</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon3">https://smkifsu.sch.id/post/</span>
							</div>
							<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
						</div>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="" id="post-body" style="height:300px!important;" class="form-control"></textarea>
					</div>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="card card-post">
					<div class="card-header">
						<b class="card-title">PUBLISH</b>
					</div>
					<div class="card-body">

						<div class="mb-2">
							<label for="publish_date">Publish date</label>
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="date" name="" id="">
								</div>
								<div class="col-md-6">
									<input type="time" name="" class="form-control" id="">
								</div>
							</div>
						</div>

						<div class="mt-3">
							<label for="thumbnail">Thumbnail</label>
							<input type="file" class="form-control">
						</div>
						
					</div>
					<div class="card-footer">
						<div class="btn-group" role="group" aria-label="Basic example">
							<button type="button" class="btn btn-secondary">Publish</button>
							<button type="button" class="btn btn-warning">Save Draft</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end:add new post -->
</div>



<?php $this->endSection(); ?>

<?php $this->section('footer'); ?>
<script type="text/javascript" src="<?= base_url('assets/vendors/froala/js/froala_editor.pkgd.min.js') ?>"></script>

<script>
	(function () {
		new FroalaEditor("#post-body", {
			imageUploadURL : '<?= route_to('admin_post_upload_file') ?>',
			imageUploadParams: {
				id : 'my_editor',
			}
			
		})
	})()
</script>
<?php $this->endSection();  ?>