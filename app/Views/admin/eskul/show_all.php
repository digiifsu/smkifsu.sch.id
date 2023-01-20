<?php

use App\Models\Admin\Eskul;

 $this->extend('admin/layout/app_layout'); ?>
<?php $this->section('content'); ?>
<div class="page-inner">
    <span class="page-title">Manage Eskul</span>

</div>
<div class="container-fluid p-5">
    <button class="btn btn-primary mb-4">Add Eskul</button>
    <div class="bg-white">
        <div class="table-responsive">
            <table class="table table bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Eskul</th>
                        <th>Pembina</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $eskul = new Eskul();
                    $data_eskul = $eskul->select('tb_lembaga.nama as nama_pembina,'.$eskul->_get_table().".*")->join('tb_lembaga','tb_lembaga.id='.$eskul->_get_table().".pembina",'LEFT')->get()->getResult();
                    if(!empty($data_eskul)){
                        $i = 0;
                        foreach($data_eskul as $data){
                            $i++;
                            ?>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $data->nama;?></td>
                                <td><?= $data->nama_pembina;?></td>
                                <td>
                                    <a href="" class="btn btn-sm  btn-warning">Update</a>
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
<?php $this->endSection(); ?>