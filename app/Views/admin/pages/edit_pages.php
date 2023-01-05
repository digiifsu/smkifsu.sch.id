<?php $this->extend('admin\layout\app_layout'); ?>


<?php $this->section('head'); ?>
<style>
    table tr th {
        height: 10px;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>

<div class="page-inner">
    <h4 class="page-title">Edit Pages</h4>
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
                            Edit Judul
                        </th>
                        <th>
                           Edit Kategori
                        </th>
                        <th>
                            Ubah isi
                        </th>
                        <th>
                            Ubah Deskripsi
                        </th>
                        <th style="width:30px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($data_post) && is_array($data_post)) : ?>
                        <?php foreach ($data_post as $data) : ?>
                            <tr>
                                <td class="center"><input type="checkbox"></td>
                                <td id="title-action">
                                    <a href="<?= base_url(sprintf('post/%s/%s.html', $data->id, $data->slug)); ?>"><?= esc($data->title); ?></a>
                                </td>
                                <td><?= is_null($data->nama_category) ? 'tanpa kategori' :  esc($data->nama_category); ?></td>
                                <td class="center">
                                    <?php if ($data->status === 'publish') : ?>
                                        <span class="badge badge-primary">publish</span>
                                    <?php elseif ($data->status == 'draft') : ?>
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
                                            <a onclick="return confirmation(event);" href='<?= base_url(route_to('admin_post_delete', $data->id)); ?>' class="dropdown-item"><i class="fa fa-1x fa-trash"></i>&nbsp; Delete</a>
                                            <a class="dropdown-item" href="<?= base_url(route_to('admin_post_update', $data->id)); ?>"><i class="fa fa-edit fa-1x"></i>&nbsp; Update</a>
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
    ?>

    <script>
        $(document).ready(function() {
            $('#tb_post').DataTable();
        });

        function p(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'question',
                title: 'Apakah anda yakin?',
                text: 'Kamu akan menghapus post ini secara permanenet!',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: `Tidak`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.replace(e.target.href)
                } else {
                    return false;
                }
            });
        }

        ///notofication
        <?php if (session()->has('message')) : ?>
          
            $.notify({
                icon: 'flaticon-alarm-1',
                title: 'Notifikasi',
                message: '<?php echo session()->getFlashdata('message'); ?>',
            }, {
                type: 'info',
                placement: {
                    from: "top",
                    align: "right"
                },
                time: 1000,
            });
        <?php endif; ?>
    </script>

    <?php $this->endSection() ?>