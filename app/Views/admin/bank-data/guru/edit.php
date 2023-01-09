<?php $this->extend('admin/layout/app_layout') ?>
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
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<div class="page-inner">
    <h4 class="page-title">Edit Guru/Pegawai</h4>
    <div class="page-category">
        <button class="btn btn-sm btn-primary" id="btn-tambah-komli">
            <i class='fa fa-plus'></i> Back
        </button>
    </div>

    <div class="bg-white p-4">
        <div class="col-md-6 bg-white rounded shadow-sm">
            <div class="-body">
                <?= form_open('', ['id' => 'update_siswa']) ?>
                <div class="form-group">
                    <label for="" class="form-label">Nama</label>
                    <input value="<?= $data_guru->nama ?>" required type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jenis kelamin</label>
                    <input value="<?= $data_guru->jenis_kelamin ?>" required type="text" name="nama"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Kategori</label>
                    <select class="form-control" name='kategori'>
                    <?php foreach ($kategori as $item): ?>
                            <?php if ($item === $data_guru->kategori): ?>
                                <option selected value="<?= $item ?>">
                                    <?= $item ?>
                                </option>
                            <?php else: ?>
                                <option value="<?= $item ?>">
                                    <?= $item ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email</label>
                    <input value="<?= $data_guru->email ?>" required type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Agama</label>
                    <select required name="id_komli" id="" class="form-control">
                        <?php foreach ($agama as $ag): ?>
                            <?php if ($ag === $data_guru->agama): ?>
                                <option selected value="<?= $ag ?>">
                                    <?= $ag ?>
                                </option>
                            <?php else: ?>
                                <option value="<?= $ag ?>">
                                    <?= $ag ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto Siswa</label>
                    <input hidden id="img-siswa" name="gambar" value="<?= $data_guru->image ?>" type="text">
                    <?php if ($data_guru->image !== null): ?>
                        <div class="upload-box">
                            <img width='100%' height='100%' src="<?= base_url($data_guru->image); ?>" alt="">
                        </div>
                    <?php else: ?>
                        <div class="upload-box">
                            <i class="fa fa-image"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <button type="submit" class='btn btn-primary'>UPDATE</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>