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
        <a href="<?php redirect()->back(); ?>" class="btn btn-sm btn-primary" id="btn-tambah-siswa">
            <i class='fa fa-arrow-lefts'></i> Back
        </a>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white rounded shadow-sm">
                <div class="-body">
                    <?= form_open(route_to('admin_bankdata_updates_komli', $data->id), ['id' => 'update_siswa']) ?>
                    <div class="form-group">
                        <label for="" class="form-label">Nama Komli</label>
                        <input value="<?= $data->nama_komli ?>" required type="text" name="nama_komli"
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Deskrpsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"
                        class="form-control"><?= $data->deskripsi; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Link Video Profile</label>
                        <input type="text" class="form-control" name="video_profile" value="<?= $data->video_profile; ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Kepala Jurusan</label>
                        <select required name="kepala_jurusan" id="" class="form-control">
                            <?php foreach ($data_guru as $guru): ?>
                                <?php if ($guru->id === $data->kepala_jurusan): ?>
                                    <option selected value="<?= $guru->id ?>">
                                        <?= $guru->nama ?>
                                    </option>
                                <?php else: ?>
                                    <option value="<?= $guru->id ?>">
                                        <?= $guru->nama ?>
                                    </option>
                                <?php endif; ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">kata ajakan</label>
                        <textarea name="kata_ajakan" id="" cols="30" rows="10"
                        class="form-control"><?= $data->kata_ajakan; ?></textarea>
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
<?php $this->section('footer');?>
<?php echo script_tag('assets/vendors/tinymce/tinymce.min.js'); ?>
<script>

    window.onload = () =>{
        tinymce.init({
            menubar : true,
            selector : '#deskripsi',
            plugins : 'lists',
            toolbar : ['bullist | bold | numlist | formatselect'],
        })
    }
</script>
<?php $this->endSection() ?>