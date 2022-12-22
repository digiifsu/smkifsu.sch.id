<?php $this->extend('admin/layout/app_layout'); ?>

<?php $this->section('head') ?>
<style>
    .card {
        border-radius: 2px;
        box-shadow: 0px 0px 0px 1px #dedede;
    }
</style>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<div class="page-inner">
    <span class="page-title">Manage Categories</span>
    <div class="page-category mt-3">
        <a class="btn btn-outline btn-sm btn-primary btn-rounded" href="<?= base_url(route_to('admin_dashboard')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;Back</a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">New Categories</div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slug">Keywords</label>
                            <input type="text" class="form-control">
                            <small><i class="input-text">Boleh Dikosongkan</i></small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- bagian show -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table id='table-categories' class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Categories</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pendidikan</td>
                                <td>Kemauan</td>
                                <td>
                                    lore
                                </td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>Kemauan</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            
                                            <a class="dropdown-item" href="#"><i class="fa fa-edit fa-1x"></i>&nbsp; Update</a>
                                            <a class="dropdown-item" href="#">Publish</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->endSection(); ?>

<?php $this->section('footer') ?>

<script>
    $(document).ready(function() {
        $('#table-categories').DataTable();
    })
</script>

<?php $this->endSection(); ?>