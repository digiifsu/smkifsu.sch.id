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
   <?php if (session()->has('message')) : ?>
    <?php echo session()->getFlashdata('message'); ?>
    <?php endif; ?>
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
                            Status
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
                                <td><?= is_null($data->nama_category) ? 'tanpa kategori' :  esc($data->nama_category); ?></td>
                                <td class="center">
                                    <?php if ($data->status === 'publish') : ?>
                                        <span class="badge badge-primary">publish</span>
                                    <?php elseif($data->status == 'draft') : ?>
                                        <span class="badge badge-warning">Draft</span>
                                    <?php else : ?>
                                    <span class="badge badge-danger">Unpublish</span>
                                    <?php endif; ?>
                                </td>
                                <td class="center">
                                    <?php
                                    if (!empty($data->nama_lengkap)) {
                                    ?>
                                        <span class="badge badge-success">
                                            <?= $data->nama_lengkap ?>
                                        </span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge badge-danger">
                                            Unknown
                                        </span>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="center">
                                    <div class="dropdown show">
                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="<?= route_to('admin_post_delete', $data->id); ?>"><i class="fa fa-1x fa-trash"></i>&nbsp; Delete</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-edit fa-1x"></i>&nbsp; Update</a>
                                            <a class="dropdown-item" href="#">Publish</a>
                                        </div>
                                    </div>
                                </td>
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

    </script>

    <?php $this->endSection() ?>

   