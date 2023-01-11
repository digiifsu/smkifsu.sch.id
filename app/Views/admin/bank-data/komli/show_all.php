<?php $this->extend('admin\layout\app_layout'); ?>
<?php
$this->section("content")
    ?>
<div class="page-inner">
    <h4 class="page-title">Kompetensi keahlian</h4>
    <div class="page-category">
        <button  class="btn btn-sm btn-primary" id="btn-tambah-komli">
            <i class='fa fa-plus'></i> Tambah
        </button>
    </div>
    <div class="col-md-12 bg-white shadow-sm p-3">
        <?php if(session()->has('message')): ?>
            <p class="alert alert-info"><?= session()->getFlashdata('message') ?></p>
        <?php endif; ?>
        <table class="table table" id="komli-tabel">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Kepala Jursan</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data) && is_array($data)): $i = 0; ?>
                    <?php foreach ($data as $result): $i++; ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $result->nama_komli ?></td>
                            <td><?= potongString($result->deskripsi,300); ?></td>
                            <td><?= potongString($result->visi,300); ?></td>
                            <td><?= potongString($result->misi,300); ?></td>
                            <td><?= $result->nama_kajur ?></td>
                            <td>
                                <a onclick="return confirm('Apakah anda yakin!')" class="btn btn-sm btn-warning" href="<?= site_url(route_to('admin_bankdata_delete_komli',$result->id)) ?>">Delete</a>
                                <a href="<?= site_url(route_to('admin_bankdata_update_komli',$result->id)) ?>" class="btn btn-sm btn-danger">Update</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php  endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('footer') ?>
<!-- Modal -->
<div class="modal fade" id="add_komli" tabindex="-1" role="dialog" aria-labelledby="add_siswaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_siswaLabel">Add Komli</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('', ['id' => 'tambah_komli']) ?>
                <div class="form-group">
                    <label for="" class="form-label">Nama Komli</label>
                    <input required type="text" name="nama_komli" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Visi</label>
                    <textarea name="visi" id="" cols="30" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Misi</label>
                    <textarea name="misi" class="form-control" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Kepala Jurusan</label>
                    <select required name="kepala_jurusan" id="" class="form-control">
                       <?php foreach($data_guru as $guru): ?>
                            <option value="<?= $guru->id ?>"><?= $guru->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Prospek Karir</label>
                    <textarea name="karir" class="form-control" id="" cols="30" rows="3"></textarea>
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
    $('#btn-tambah-komli').on('click', () => {
        $('#add_komli').modal('show')
    });
    $('#komli-tabel').DataTable({
        "pageLength": 5,
    });

    $('#tambah_komli').on('submit', function(e){
        e.preventDefault();
        save($('#tambah_komli').serialize());
    });
    function save(data){
        $.ajax({
            url : `<?=site_url(route_to('admin_bankdata_tambah_komli')) ?>`,
            data : data,
            type: "POST",
            success : function(e){
                if(e.status === true){
                    swal({
                        icon : 'success',
                        title : 'Success',
                        text : e.message+', 4 detik bakal mereload',
                    });
                    $('#tambah_komli').trigger('reset');
                    $('#add_komli').modal('hide');
                    setTimeout(function (){
                        window.location.reload();
                    },4000)
                }
            }
        })
    }

</script>
<?php $this->endSection() ?>
