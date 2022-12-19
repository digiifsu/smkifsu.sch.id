<?php $this->extend('admin\layout\app_layout'); ?>


<?php $this->section('head'); ?>
<link rel="stylesheet" href="<?= base_url('assets/vendors/DataTables/datatables.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendors/DataTables/jQueryUI-1.13.2/themes/base/jquery-ui.min.css'); ?>">
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<style>
    table tr th {
        height: 10px;
    }
</style>
<div class="page-inner">
    <h4 class="page-title">All Post</h4>
    <div class="page-category">
        <a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= base_url(route_to('admin_post_addNew')) ?>"><i class="fa fa-plus-circle"></i>&nbsp;Add New
            Post</a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <hr>
    <div style="box-shadow: 0px 0px 0px 1px #dedede;" class="container-wrapper border bg-white p-3">
        <div class="tabel-responsive">
            <table id="tb_post" class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:30px; ">
                            <input type="checkbox">
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Kategori
                        </th>
                        <th>
                            Details
                        </th>
                        <th>
                            Author
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($data_post) && is_array($data_post)) : ?>
                        <?php foreach ($data_post as $data) : ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td id="title-action">
                                    <a href="<?= base_url(sprintf('post/%s/%s.html', $data->id, $data->slug)); ?>"><?= esc($data->title); ?></a>
                                </td>
                                <td><?= is_null($data->nama_category) ? 'tanpa kategori' :  esc($data->nama_category);?></td>
                                <td>
                                <span>Publish: <time>29-2-3</time></span>
                                </td>
                                <td>
                                    <?php
                                    if(!empty($data->nama_lengkap)){
                                        ?>
                                        <span class="badge badge-success">
                                            <?= $data->nama_lengkap ?>
                                        </span>
                                        <?php
                                    } else{
                                        ?>
                                        <span class="badge badge-danger">
                                            Unknown
                                        </span>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>Action</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="action mt-3">
                <button class="btn btn-sm btn-danger">Delete</button>
            </div>
        </div>
    </div>

    <?php
    $this->endSection();
    //section footer
    $this->section('footer');
    $script_file = array(
        'assets/vendors/DataTables/datatables.min.js',
        'assets/vendors/DataTables/jQueryUI-1.13.2/jquery-ui.min.js',
    );
    foreach ($script_file as $script) {
        echo script_tag($script) . PHP_EOL;
    }

    ?>

    <script>
        $(document).ready(function() {
            $('#tb_post').DataTable();
        });
        $('#title-action').mousemove(function(){
            alert('dadan')
        })
    </script>

    <?php $this->endSection() ?>