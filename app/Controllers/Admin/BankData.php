<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Siswa;

class BankData extends BaseController
{
    public function siswa()
    {
        $title = 'Data Siswa';
        $model_siswa = new Siswa;
        $data_siswa = $model_siswa->get()->getResult();
        return view('admin/bank-data/siswa/show_all.php', compact('title','data_siswa'));
    }
    public function tambahSiswa()
    {
        //validasi siswa
        $rules = array(
            'nis' => array(
                'label' => 'Nis',
                'rules' => 'required|trim'
            ),
            'nama' => array(
                'label' => 'Nama',
                'rules' => 'required|trim',
            ),
            'kelas' => array(
                'label' => 'Kelas',
                'rules' => 'required|trim'
            ),
            'jenis_kelamin' => array(
                'label' => 'Jenis Kelamin',
                'rules' => 'required|trim'
            ),

            'id_komli' => array(
                'label' => 'Kopetensi Keahlian',
                'rules' => 'required|trim'
            ),

            'agama' => array(
                'label' => 'Agama',
                'rules' => 'required|trim'
            )
        );
        if ($this->validate($rules) === false) {
            return $this->response->setJSON([
                'success' => false,
                'errorType' => 'validation',
                'errors' => $this->validator->getErrors(),
                'old' => $this->request->getPost(),
            ]);
        } else {
            $model_siswa = new Siswa();
            //cek dulu nis nya ada belum?
            $nis = $this->request->getPost('nis');
            if($model_siswa->where('nis', $nis)->countAllResults() === 0){
                $model_siswa->insert($this->request->getPost());
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'data berhasil di tambah',
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'errorType' => 'duplicated_data',
                    'error' =>'Nis sudah ada di database',
                ]);
            }
        }

    }
}