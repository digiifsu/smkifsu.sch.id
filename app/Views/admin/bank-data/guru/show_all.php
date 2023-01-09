<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('head');
echo link_tag('elfinder/css/elfinder.min.css'),
link_tag('elfinder/css/Material/css/theme-light.css');
?>
<style>
    .upload-box {
        margin-top: 10px;
        width: 150px;
        border-radius: 4px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 1px dashed;
        background-color: #dedede;
        text-align: center;
    }
</style>
<?php $this->endSection() ?>
<?php
echo $this->section('content')
?>
<div class="page-inner">
    <h4 class="page-title">Data Guru / Pegawai</h4>
    <div class="page-category">
        <button type="button" class="btn btn-sm btn-primary" id="btn-tambah-guru">
            <i class='fa fa-plus'></i> Tambah
        </button>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <!-- add new post -->

    <div class="col-md-12 bg-white p-2" style="border: 1px solid #dedede;">
        <div class="card" style="box-shadow:none;border-radius:0;">
            <div class="card-header">
                <div class="d-flex  align-items-center">
                    <h4 class="card-title">Data Guru / Pegawai</h4>

                    <button class="btn btn-primary btn-sm ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-file-excel"></i>
                        Export excel
                    </button>
                </div>
            </div>
            <div class="card-body">
                <?php if(session()->has('message')): ?>
                    <p class="alert alert-info"><?= session()->getFlashdata('message'); ?></p>
                <?php endif ?>
                <div class="table-responsive">
                    <table id="komli-tabel" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Email</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                                <th>
                                    Gambar
                                </th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data) && is_array($data)) {
                                $i = 0;
                                foreach ($data as $row) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->kategori ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->agama ?></td>
                                        <td><?= $row->jenis_kelamin ?></td>
                                        <td>
                                            <?php if (!empty($row->image)) : ?>
                                                <img style="border:1px solid;" width="50px" height="50px" class="rounded-circle" src="<?= base_url($row->image) ?>" alt="">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= site_url(route_to('admin_bangdata_update_guru', strip_tags($row->id))) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit data <?= $row->nama ?>">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a onclick="confirm(event)" href="<?= site_url(route_to('admin_bankdata_delete_guru', strip_tags($row->id))) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('footer');
echo script_tag('assets/vendors/tinymce/tinymce.min.js');
echo script_tag('elfinder/js/elfinder.min.js');
echo script_tag('assets/js/tinymceElfinder.js');

?>
<!-- Modal -->
<div class="modal fade" id="add_guru" tabindex="-1" role="dialog" aria-labelledby="add_siswaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_siswaLabel">Tambah Guru / Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('', ['id' => 'tambah_guru']) ?>

                <div class="form-group">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input required type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email</label>
                    <input required type="email" name="email" class="form-control">
                </div>
                <!-- <div class="form-group">
                    <label for="" class="form-label">Agama</label>
                    <input required type="text" name="kelas" class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="" class="form-label">Kategori</label>
                    <select required name="kategori" id="" class="form-control">
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job ?>"><?= $job ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Agama</label>
                    <select required name="agama" id="" class="form-control">
                        <?php foreach ($agama as $ag) : ?>
                            <option value="<?= $ag ?>"><?= $ag ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select required name="jenis_kelamin" id="" class="form-control">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto Siswa</label>
                    <input hidden id="img-guru" name="image" type="text">
                    <div class="upload-box">
                        <i class="fa fa-image"></i>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const mceElf = new tinymceElfinder({
        cssAutoLoad: false,
        // connector URL (Set your connector)
        url: '<?= site_url(route_to('filemanager_backend')) ?>',
        baseUrl: '<?= base_url('public/elfinder') ?>', // Base URL to css/*, js/*
        // upload target folder hash for this tinyMCE
        uploadTargetHash: 'l1_lw', // Hash value on elFinder of writable folder
        // elFinder dialog node id
        nodeId: 'elfinder' // Any ID you decide
    });

    //tambah gambar untuk guru
    $('.upload-box').on('click', function () {
        mceElf.browser(function (e) {
            document.querySelector('.upload-box').innerHTML = `<img src="${e}" width="100%" height='100%'>`;
            document.getElementById('img-guru').value = e.replace('<?= base_url() ?>', '');
        }, '', {
            filetype: 'image'
        })
    });

    //modal tambah siswa
    $('#btn-tambah-guru').on('click', () => {
        $('#add_guru').modal('show')
    });
    $('#komli-tabel').DataTable({
        "pageLength": 5,
    });

  
    async function save(data){
        $.ajax({
            url : `<?=site_url(route_to('admin_bankdata_tambah_guru')) ?>`,
            data : data,
            type: "POST",
            success : function(e){
                if(e.status === true){
                    swal({
                        icon : 'success',
                        title : 'Success',
                        text : e.message+', 4 detik bakal mereload',
                    });
                    $('#tambah_guru').trigger('reset');
                    $('#add_komli').modal('hide');
                    setTimeout(function (){
                        window.location.reload();
                    },4000)
                }
            }
        })
    }


    $('#tambah_guru').on('submit', async function(event){
        event.preventDefault();
        save($('#tambah_guru').serialize());
    });

</script>
<?php $this->endSection() ?>