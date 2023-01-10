<?php $this->extend('admin\layout\app_layout'); ?>
<?php $this->section('head');?>
<?php $this->endSection() ?>
<?php $this->section('content')?>
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
        <div class="card" style="box-shadow:none;border-radius:0;">
            <div class="card-header">
                <div class="d-flex  align-items-center">
                    <h4 class="card-title">Data Kelas</h4>

                    <button class="btn btn-primary btn-sm ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-file-excel"></i>
                        Export excel
                    </button>
                </div>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="add-row" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama kelas</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data_kelas) && is_array($data_kelas)) {
                                $i = 0;
                                foreach ($data_kelas as $row) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row->nama_kelas ?></td>
                                       
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= site_url(route_to('admin_bankdata_update_kelas',strip_tags($row->id))) ?>" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg" data-original-title="Edit data">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a onclick="confirm(event)" href="<?= site_url(route_to('admin_bankdata_hapus_kelas',strip_tags($row->id))) ?>" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Hapus">
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

<?php $this->section('footer');?>
<!-- Modal -->
<div class="modal fade" id="add_siswa" tabindex="-1" role="dialog" aria-labelledby="add_siswaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_siswaLabel">Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('', ['id' => 'tambah_kelas']) ?>
                
                <div class="form-group">
                    <label for="" class="form-label">Nama Kelas</label>
                    <input required type="text" name="nama_kelas" class="form-control">
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
   
    //modal tambah siswa
    $('#btn_tambah_kelas').on('click', () => {
        $('#add_siswa').modal('show')
    })
    // Add Row
    $('#add-row').DataTable({
        "pageLength": 5,
    });
    
    /**
     * ajax for add siswa
     */
    $('#tambah_kelas').on('submit', function (e) {
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
                save_data($('#tambah_kelas').serialize());
            }
        });
    })

   

    async function save_data(e) {
        $.ajax({
            url: '<?= site_url(route_to('admin_bankdata_tambah_kelas')) ?>',
            method: 'post',
            data: e,
            success: function (e) {
                console.log(e);
                if (e.status === true) {
                    //jika data sudah di tambahkan ke database
                    $('#tambah_kelas').trigger('reset');
                    $('#add_siswa').modal('hide')
                    swal({
                        icon: 'success',
                        title: 'Suksess',
                        text: e.message,
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
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

    //notofication
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