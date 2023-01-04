<?php
$this->extend('admin\layout\app_layout');
//sction head
$this->section('head');
echo link_tag('assets/vendors/froala/css/froala_editor.pkgd.min.css'),
link_tag('assets/vendors/tagin/tagin.min.css');
$this->endSection();
//section content
$this->section('content');
?>
<style>
    .card-post {
        border-radius: 0 !important;
        border: none;
        box-shadow: 0px 0px 3px #dedede;
    }

    .card.card-post .card-title {
        font-size: 13px;
    }

    .fr-box {
        border-radius: 0 !important;
    }

    .file-preview {
        position: relative !important;
    }

    .file-preview #image {
        border: 1px solid #dedede;
    }

    .file-preview #image #images {
        width: 100%;
    }
</style>
<div class="page-inner">
    <h4 class="page-title">Tambah Post</h4>
    <div class="page-category">
        <a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= base_url(route_to('admin_post_all')) ?>"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <!-- add new post -->

    <?= form_open_multipart() ?>

    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="err-block">
                <?php
                if (session()->has('error_success')) {
                    echo "<p class='alert alert-success'>" . session()->getFlashdata('error_success') . "</p>" . PHP_EOL;
                }
                if (session()->has('error_danger')) {
                    $errors = session()->getFlashdata('error_danger');
                    if (is_array($errors)) {
                        foreach ($errors as $error) {
                            echo "<p class='alert alert-danger'>{$error}</p>" . PHP_EOL;
                        }
                    } else {
                        echo "<p class='alert alert-danger'>" . session()->getFlashdata('error_danger') . "</p>" . PHP_EOL;
                    }
                }
                ?>
            </div>
            <div class="card-post bg-white p-3">
                <div class="form-group">
                    <input required='true' value="<?= old('title') ?? $data->title ?? ''; ?>" id='title' autofocus="true" autocomplete="false" type="text" name='title' class="form-control title-input-post" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" data-role='tagsinput' value="<?= old('keywords') ?? $data->keywords ?? '' ?>" id='keywords' placeholder="Ketikan kata kunci yang di pisahkan oleh koma!" class="form-control" hidden name="keywords">
                </div>
                <div class="form-group">
                    <label for="deskripsi_singkat">Deskripsi Singkat</label>
                    <textarea class="form-control" rows="4" name="deskripsi_singkat"><?= old('deskripsi_singkat') ?? $data->deskripsi_singkat ?? '' ?></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div>
                        <div class="input-group">
                            <select name="id_category" class="form-control" id="categories">
                                <?php if (!empty($categories)) : ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <?php if ($category['id'] == (old('id_category') ?? $data->id_category)) : ?>
                                            <option selected value="<?= $category['id'] ?>"><?= $category['nama'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $category['id'] ?>"><?= $category['nama'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option value="null">Uncategories</option>
                                <?php endif; ?>
                            </select>
                            <div class="input-group-prepend">
                                <button class="btn btn-sm btn-primary" type="button">
                                    <i class="fa fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://smkifsu.sch.id/post/:id/</span>
                        </div>
                        <input id="slug" name='slug' value="<?= old('slug') ?? $data->slug; ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea required='true' autofocus="true" autocomplete="false" name="isi" id="post-body" style="height:300px!important;" class="form-control"><?= old('isi') ?? $data->isi; ?></textarea>
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
                        <input class="form-control" required type="datetime-local" name="create_at" value="<?= date('Y-m-d h:i:s',strtotime(old('publish_at') ?? $data->create_at)) ?>" </div>
                        <div class="mt-3">
                            <label for="thumbnail" class='form-label'>Thumbnail</label>
                            <div class="file-preview">
                                <button id='upload-file' class='btn btn-success btn-sm' type='button'>Pilih file</button>
                                <input type="text" value="<?= old('thumbnail') ?? $data->thumbnail ?>" class="form-control form-control-sm mt-2" name="thumbnail" id='input-thumbnail'>
                                <div id='image' style="display: block">
                                    <img src="<?= old('thumbnail') ?? base_url($data->thumbnail) ?>" id='images' alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group">
                            <button type="submit" name="update" class="btn btn-secondary">Update & publish</button>
                            <button name="draft" type="submit" class="btn btn-warning">Save Draft</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- end:add new post -->
    </div>
    <?php
    $this->endSection();
    $this->section('footer');
    echo $this->include('admin/post/partials/footer');
    $this->endSection();?>