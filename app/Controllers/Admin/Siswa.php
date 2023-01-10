<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Komli;
use App\Models\Admin\Siswa as ModelSiswa;

class Siswa extends BaseController
{
    public function getModel(){
        $model_siswa = new ModelSiswa;
        $model_komli = new Komli();
        return [
            'data_siswa' => $model_siswa->get()->getResult(),
            'data_komli' => $model_komli->get()->getResult(),
        ];
    }
    public function index()
    {
        $data = $this->getModel();
        $data['title'] = 'Data Siswa';
        return view('admin/bank-data/siswa/show_all.php', $data);
    }
    public function store()
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
            $model_siswa = new ModelSiswa();
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
    public function destroy($id = null){
        if(!is_null($id)){
            //cek dulu ada gak di db
            $model = new ModelSiswa();
            if($model->where('id',$id)->countAllResults() === 1) {
               if($model->delete($id)){
                    return redirect()->route('admin_bankdata_siswa')->with('message', 'Data Berhasil di hapus');
               }
            }
        }
    }
    public function edit($id = null){
        $title = "Edit siswa";
        if(empty($id)){
            return redirect()->back();
        }
        $model = new ModelSiswa();
        //cek dul
        $data = $model->where('id', $id);
        if($data->countAllResults() <= 0){
            return redirect()->route('admin_bankdata_siswa');
        }
        $data_siswa = $model->where('id',$id)->get()->getRow();
        $data = $this->getModel();
        $data['title'] = 'Edit Data Siswa';
        $data['data_siswa'] = $data_siswa;
        return view('admin/bank-data/siswa/edit_siswa', $data);
    }
    public function update($id = null){
        $model = new ModelSiswa();
        if(is_null($id)){
            return $this->response->setJSON([
                'success' => false,
                'errorType' => 'not_parameter',
                'error' =>'Tidak ada parameter',
            ]);
        }
        $data = $model->where('id', $id);
        if($data->countAllResults() <= 0){
            return $this->response->setJSON([
                'success' => false,
                'errorType' => 'nis_notfound',
                'error' =>'Nis tidak di temukan',
            ]);
        }
        if($model->update($id,$this->request->getPost())){
            return $this->response->setJSON([
                'success' => true,
                'message' => 'data berhasil di update',
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'errorType' => 'nis_notfound',
                'error' =>'Data Gagal Di update',
            ]);
        }
    }
}