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
    <h4 class="page-title">Data Siswa</h4>
    <div class="page-category">
        <button type="button" class="btn btn-sm btn-primary" id="btn-tambah-siswa">
           <i class='fa fa-plus'></i> Tambah
        </button> <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <!-- add new post -->

    <div class="col-md-12 bg-white p-2">
        <div class="card" style="border: 1px solid #dedede;box-shadow:none;border-radius:0;">
            <div class="card-header">
                <div class="d-flex  align-items-center">
                    <h4 class="card-title">Data Siswa</h4>

                    <button class="btn btn-primary btn-sm ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-file-excel"></i>
                        Export excel
                    </button>
                </div>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                                <th>Kopotensi Keahlian</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>20211324</th>
                                <th>Dadan Hidayat</th>
                                <th>Islam</th>
                                <th>Laki-Laki</th>
                                <th>RPL</th>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
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

<?php $this->section('footer');
echo script_tag('assets/vendors/tinymce/tinymce.min.js');
echo script_tag('elfinder/js/elfinder.min.js');
echo script_tag('assets/js/tinymceElfinder.js');

?>
<!-- Modal -->
<div class="modal fade" id="add_siswa" tabindex="-1" role="dialog" aria-labelledby="add_siswaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_siswaLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('',['id'=>'tambah_siswa']) ?>
                <div class="form-group">
                    <label for="" class="form-label">NIS</label>
                    <input required type="text" name="nis" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input required type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Kelas</label>
                    <input required type="text" name="kelas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select required name="jenis_kelamin" id="" class="form-control">
                        <option  value="1">Laki Laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Kopotensi Keahlian</label>
                    <select required name="id_komli" id="" class="form-control">
                        <option value="1">RPL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Agama</label>
                    <input required type="text" name="agama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto Siswa</label>
                    <input hidden id="img-siswa" name="gambar" type="text">
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
    //modal tambah siswa
    $('#btn-tambah-siswa').on('click', () => {
        $('#add_siswa').modal('show')
    })
    // Add Row
    $('#add-row').DataTable({
        "pageLength": 5,
    });
    //untuk upload file gambar siswa
    $('.upload-box').on('click', function() {
        mceElf.browser(function(e) {
            document.querySelector('.upload-box').innerHTML = `<img src="${e}" width="100%" height='100%'>`;
            document.getElementById('img-siswa').value = e.replace('<?= base_url() ?>','');
        }, '', {
            filetype: 'image'
        })
    });
    /**
     * ajax for add siswa
     */
    $('#tambah_siswa').on('submit', function(e){
        //mencegah form mengarahkan ke halaman lain
        e.preventDefault();
        swal({
            title: "Apakah anda yakin?",
            text: "Apakah data yang mau anda masukan sudah benar!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((val) => {
                if (val) {
                  save_data($('#tambah_siswa').serialize());
                }
            });
    })
    async function save_data(e){
        $.ajax({
            url : '<?= site_url(route_to('admin_tambah_siswa')) ?>',
            method : 'post',
            data : e,
            success : function (e){
                console.log(e);
            }

        }).fail(function(e){
            const response = JSON.parse(e.responseText);
            swal({
                title :`Error ${response.code}`,
                icon : 'danger',
                text : response.message,
            })
        });
    }
</script>
<?php $this->endSection() ?>