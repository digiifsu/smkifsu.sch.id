<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Siswa;

class BankData extends BaseController
{
    public function siswa()
    {
        $title = 'Data Siswa';
        return view('admin/bank-data/siswa/show_all.php', compact('title'));
    }
    public function tambahSiswa(){
        var_dump($this->request->getPost());
        //validasi siswa
        $rules = array(
            'nis' => array(
                'label' => 'Nis',
                'rules' => 'required|trim'
            ),
            'nama' => array(
                'label' => 'Nama'
            )
        );
        $model_siswa = model(Siswa::class);

    }
}
