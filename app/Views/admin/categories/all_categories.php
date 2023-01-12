<?php $this->extend('admin/layout/app_layout'); ?>

<?php $this->section('head');
echo link_tag('assets/vendors/tagin/tagin.min.css')
?>
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
            <?php if (session()->has('message')) : ?>
                <?php if (is_array(session()->getFlashdata('message'))) : ?>
                <?php else : ?>
                    <p class="alert alert-info"><?= session()->getFlashdata('message') ?></p>
                <?php endif; ?>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">New Categories</div>
                </div>
                <div class="card-body">
                    <?= form_open(); ?>
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input required type="text" name='nama' value="<?= $data['nama'] ?? old('nama') ?? ''; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" value="<?= $data['slug'] ?? old('slug') ?? ''; ?>" name="slug" class="form-control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah</button>
                    </div>
                    <?php form_close(); ?>
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
                                <th>ID</th>
                                <th>Nama Categories</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (is_array($categories)) :
                                $i = 0; ?>
                                <?php foreach ($categories as $categori) :
                                    $i++; ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $categori['nama']; ?></td>
                                        <td><?= $categori['slug']; ?></td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdown_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdown_menu">
                                                    <a class="dropdown-item" onclick="confirm(event)" href="<?= base_url(route_to('admin_categories_delete', $categori['id'])); ?>"><i class="fa fa-trash fa-1x"></i>&nbsp; Delete</a>
                                                    <a class="dropdown-item" href="<?= site_url(route_to('admin_categories_edit',$categori['id'])); ?>"><i class="fa fa-edit fa-1x"></i>&nbsp; Update</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('footer');
echo script_tag('assets/vendors/tagin/tagin.min.js');
?>

<script>
    $(document).ready(function() {
        $('#table-categories').DataTable();
        const tagin = new Tagin(document.querySelector('#keywords'), {
            enter: true,
            space: true,
        })
    });

    function confirm(e) {
        e.preventDefault();


        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Dengan menghapus kategori, Semua postingan akan memiliki kategori uncategory",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`
        }).then(function(result) {
            if (result.isConfirmed) {
                return window.location.replace(e.target.href)
            } else {
                Swal.fire({
                    icon: 'success',
                    text: "Data kategori gagal di hapus",
                    title: "Dibatalkan",
                })
            }
        });

    }
</script>

<?php $this->endSection(); ?>