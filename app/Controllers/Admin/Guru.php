<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guru extends BaseController
{
    public function pekerjaan()
    {
        return [
            'Guru Adaftif',
            'Guru Produktif',
            'Kepala Sekolah',
            'Tata Usaha',
            'Kebersihan',
            'Satpam',
            'Wakasek',
            'Wakasek Kesiswaan',
            'Kesiswaan',
            'Guru Normatif',
            'Satpam',
            'Kebersihan',
            'Guru Mapel',
            'Bos Iseu'
        ];
    }
    public function agama()
    {
        return [
            'Islam',
            'Kristen',
            'Budha',
            'Hindu',
            'Wahyudi',

        ];
    }
    public function index()
    {
        $title = 'Guru/Pegawai';
        $pekerjaan = $this->pekerjaan();
        $agama = $this->agama();
        $data = (new \App\Models\Admin\Guru)->get()->getResult();
        return view('admin/bank-data/guru/show_all', compact('title', 'data', 'pekerjaan', 'agama'));
    }
    public function store()
    {
        $data = $this->request->getPost();
        //create validate
        $modelGuru = new \App\Models\Admin\Guru();
        if ($modelGuru->insert($data)) {
            return $this->response->setJSON(
                [
                    'status' => true,
                    'message' => 'Data berhasil di tambahkan',
                ]
            );
        }
    }
    private function _getGuru()
    {
        return new \App\Models\Admin\Guru();
    }
    /**
     * Untuk menghapus guru
     * */
    public function destroy($id = null)
    {
        $model = new \App\Models\Admin\Guru();
        $result = $model->where('id', $id)->limit(1);
        if ($result->countAllResults() > 0) {
            $result->delete($id);
            return redirect()->route('admin_bankdata_guru')->with('message', 'data berhasil di hapus!');
        } else {
            throw PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id = null){
        if(is_null($id)){
            throw PageNotFoundException::forPageNotFound();
        }
        $data = $this->request->getPost();
        if($this->_getGuru()->update($id,$data)){
            return redirect()->route('admin_bangdata_update_guru',[$id])->with('message', 'data berhasil di update');
        }
    }
    public function edit($id = null)
    {
        if (NULL === $id) {
            throw PageNotFoundException::forPageNotFound();
        }
        $guru = $this->_getGuru()->where('id', $id);
        if ($guru->countAllResults() <= 0) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view(
            'admin/bank-data/guru/edit',
            [
                'title' => 'Edit Guru',
                'data_guru' => $this->_getGuru()->where('id',$id)->get()->getRow(),
                'agama' => $this->agama(),
                'kategori' => $this->pekerjaan(),
            ]
        );
    }
}