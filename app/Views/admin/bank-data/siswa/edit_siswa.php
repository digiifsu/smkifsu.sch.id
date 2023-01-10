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
<?php $this->section('content') ?>
<div class='page-inner'>

    <h4 class="page-title">Edit Siswa</h4>
    <div class="page-category">
        <a href="<?php  redirect()->back(); ?>"  class="btn btn-sm btn-primary" id="btn-tambah-siswa">
            <i class='fa fa-arrow-lefts'></i> Back
        </a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-3 bg-white shadow-sm">
                <dl class="dl-horizontal">
                    <dt>NIS</dt>
                    <dd>
                        <?= $data_siswa->nis ?? '-' ?>
                    </dd>
                    <dt>Nama</dt>
                    <dd><?= $data_siswa->nama ?></dd>
                    <dt>Kelas</dt>
                    <dd>
                        <?= $data_siswa->kelas; ?>
                    </dd>
                    <dt>KOMLI</dt>
                    <dd><?= $data_siswa->id_komli ?? '-'; ?></dd>
                    <dt>Jenis Kelamin</dt>
                    <dd>
                        <?= $data_siswa->jenis_kelamin ?? '-'; ?>
                    </dd>
                    <dt>Agama</dt>
                    <dd><?= $data_siswa->agama ?? 'ateis'; ?></dd>

                    <dt>Foto</dt>
                    <dd class="dont-break-out">
                        <?php if (!empty($data_siswa->gambar)): ?>
                            <img width="150px" height="150px" class="rounded" src="<?= base_url($data_siswa->gambar); ?>" alt="" srcset="">
                        <?php else: ?>
                            <div class="upload-box">
                                <i class="fa fa-image"></i>
                            </div>
                        <?php endif; ?>
                    </dd>
                </dl>
            </div>
            <div class="col-md-6 bg-white rounded shadow-sm">
                <div class="-body">
                    <?= form_open('', ['id' => 'update_siswa']) ?>
                    <div class="form-group">
                        <label for="" class="form-label">NIS</label>
                        <input value="<?= $data_siswa->nis ?>" required type="number" name="nis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input value="<?= $data_siswa->nama ?>" required type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Kelas</label>
                        <input value="<?= $data_siswa->kelas ?>" required type="text" name="kelas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <select required name="jenis_kelamin" id="" class="form-control">
                            <option value="1">Laki Laki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Kopotensi Keahlian</label>
                        <select required name="id_komli" id="" class="form-control">
                        <?php if(!empty($data_komli)): ?>
                            <?php foreach($data_komli as $row): ?>
                                <?php if($row->id === $data_siswa->id_komli): ?>
                                    <option selected value="<?= $row->id ?>"><?= $row->nama_komli; ?></option>
                                    <?php else: ?>
                                        <option value="<?= $row->id ?>"><?= $row->nama_komli; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Agama</label>
                        <input value="<?= $data_siswa->agama ?>" required type="text" name="agama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Foto Siswa</label>
                        <input hidden id="img-siswa" name="gambar" value="<?= $data_siswa->gambar ?>" type="text">
                        <div class="upload-box">
                            <i class="fa fa-image"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class='btn btn-primary'>UPDATE</button>
                    </div>
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
  
    //untuk upload file gambar siswa
    $('.upload-box').on('click', function () {
        mceElf.browser(function (e) {
            document.querySelector('.upload-box').innerHTML = `<img src="${e}" width="100%" height='100%'>`;
            document.getElementById('img-siswa').value = e.replace('<?= base_url() ?>', '');
        }, '', {
            filetype: 'image'
        })
    });
    /**
     * ajax for add siswa
     */
    $('#update_siswa').on('submit', function (e) {
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
                update_siswa($('#update_siswa').serialize());
            }
        });
    })

    async function update_siswa(e) {
        $.ajax({
            url: '<?= site_url(route_to('admin_bankdata_update_siswa',$data_siswa->id)) ?>',
            method: 'post',
            data: e,
            success: function (e) {
                if (e.success === false) {
                    if (e.errorType == 'validation') {
                        for (const key in e.errors) {
                            if (Object.hasOwnProperty.call(e.errors, key)) {
                                const element = e.errors[key];
                                $(`input[name="${key}"]`).css('border', '1px solid red');
                            }
                        }
                    } else {
                        swal({
                            title: 'Kesalahan',
                            icon: 'warning',
                            text: e.error,
                        })
                    }
                } else if (e.success === true) {
                    //jika data sudah di tambahkan ke database
                    swal({
                        icon: 'success',
                        title: 'Suksess',
                        text: e.message+" Reload browser untuk melihat perubahan",
                    })
                }
            }

        }).fail(function (e) {
            const response = JSON.parse(e.responseText);
            swal({
                title: `Error ${response.code}`,
                icon: 'danger',
                text: response.message,
            })
        });
    }

</script>
<?php $this->endSection() ?>