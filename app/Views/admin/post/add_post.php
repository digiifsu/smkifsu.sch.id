<?php
$this->extend('admin\layout\app_layout');
//sction head
$this->section('head');
echo link_tag('assets/vendors/froala/css/froala_editor.pkgd.min.css');
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
                if(session()->has('error_success')){
                    echo "<p class='alert alert-success'>".session()->getFlashdata('error_success')."</p>" . PHP_EOL;
                }
                if (session()->has('error_danger')) {
                    $errors = session()->getFlashdata('error_danger');
                    if (is_array($errors)) {
                        foreach ($errors as $error) {
                            echo "<p class='alert alert-danger'>{$error}</p>" . PHP_EOL;
                        }
                    }
                }
                ?>
            </div>
            <div class="card-post bg-white p-3">
                <div class="form-group">
                    <input required='true' value="<?= old('title'); ?>" id='title' autofocus="true" autocomplete="false" type="text" name='title' class="form-control title-input-post" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div>
                        <div class="input-group">
                            <?php
                            $kategori = array(
                                'budaya',
                                'pendidkan',
                                'tresome'
                            );
                            ?>
                            <select name="id_category" class="form-control" id="categories">
                               <?php
                               foreach($kategori as $e => $i){
                                    ?>
                                    <option value="<?= $e ?>"><?= $i ?></option>
                                    <?php
                               }
                               ?>
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
                            <span class="input-group-text" id="basic-addon3">https://smkifsu.sch.id/post/</span>
                        </div>
                        <input name='slug' value="<?= old('slug'); ?>" id='slug' type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea required='true' autofocus="true" autocomplete="false" name="isi" id="post-body" style="height:300px!important;" class="form-control"><?= old('isi'); ?></textarea>
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
                                <input required='true' autofocus="true" autocomplete="false" name="date" class="form-control" type="date" name="" id="">
                            </div>
                            <div class="col-md-6">
                                <input required='true' autofocus="true" autocomplete="false" name="time" type="time" name="" class="form-control" id="">
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 mb-5">
                        <label for="thumbnail">Thumbnail</label>
                        <div class="file-preview">
                            <input type="file" name="thumbnail" id='upload-file' class="form-control ">
                            <div id='image'>
                                <img src="" id='images' alt="" srcset="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="submit" name="publish" class="btn btn-secondary">Publish</button>
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
echo script_tag('assets/vendors/froala/js/froala_editor.pkgd.min.js');
?>
<script>
    $(document).ready(function() {
        (function() {
            new FroalaEditor("#post-body", {
                imageManagerPageSize: 20,
                imageManagerScrollOffset: 10,
                imageManagerLoadURL: "<?= base_url(route_to('admin_file_manage')) ?>",
                imageManagerLoadMethod: "GET",
                imageManagerLoadParams: {
                    cmd: "fetch"
                },
                imageManagerDeleteURL: "http://example.com/delete_image",
                imageManagerDeleteMethod: "DELETE",
                imageManagerDeleteParams: {
                    param: 'value'
                },
                imageUploadURL: '<?= base_url(route_to('admin_post_upload_file')) ?>',
                imageUploadParams: {
                    id: 'my_editor',
                }
            });
        })();


        $('#title').on('keyup', (e) => {
            $("#slug").html($(this).val());
        })

        $('#upload-file').on('change', function(e) {
            document.getElementById('images').src = URL.createObjectURL(e.target.files[0]);
        })

    });
</script>
<?php $this->endSection();  ?>