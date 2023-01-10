<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('head'); ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<div class="page-inner">
    <h4 class="page-title">Data Kelas</h4>
    <div class="page-category">
        <button type="button" class="btn btn-sm btn-primary" id="btn_tambah_kelas">
            <i class='fa fa-plus'></i> Tambah
        </button>
        <!-- <a class="btn btn-sm btn-primary btn-rounded" href=""><i class="fas fa-plus-circle"></i> Tambah Kategori</a> -->
    </div>
    <!-- add new post -->

    <div class="col-md-12 bg-white p-2" style="border: 1px solid #dedede;">
        <?= form_open('', ['id' => 'tambah_kelas']) ?>

        <div class="form-group">
            <label for="" class="form-label">Nama Kelas</label>
            <input required type="text" name="nama_kelas" value="<?= $data_kelas->nama_kelas; ?>" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</div>
<?php

$this->endSection();
$this->section('footer');
?>
<script>
       
     <?php if (session()->has('message')): ?>

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