<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Guru;
use App\Models\Admin\Komli;
use CodeIgniter\Exceptions\PageNotFoundException;

class KompetensiKeahlian extends BaseController
{
    public function _dataGuru()
    {
        return new Guru();
    }
    public function index()
    {
        $data = new Komli();
        $result = $data->select('tb_lembaga.nama as nama_kajur, tb_kompetensi_keahlian.*')
            ->join('tb_lembaga', 'tb_lembaga.id = tb_kompetensi_keahlian.kepala_jurusan','LEFT')
            ->get()
            ->getResult();
        return view(
            'admin/bank-data/komli/show_all',
            [
                'title' => 'kompetensi keahlian',
                'data' => $result,
                'data_guru' => $this->_dataGuru()->get()->getResult()
            ]
        );
    }
    public function store()
    {
        //next craeate validate
        //        $this->validate(
        //            [
        //                'nama_komli' => 'required',
        //                ''
        //            ]
        //        );
        $data = $this->request->getPost();
        $data['slug'] = buat_slug($this->request->getPost('nama_komli'));
        $model = new Komli();
        if ($model->where('slug', $data['slug'])->countAllResults() <= 0) {
            if ($model->insert($data)) {
                return $this->response->setJSON([
                    'status' => true,
                    'message' => "Data berhasil di tambahkan"
                ]);
            }
        }
    }
    public function update($id = null)
    {
        if (is_null($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        $data = (new Komli())->where('id', $id)->get()->getRow();
        return view(
            'admin/bank-data/komli/edit',
            [
                'title' => 'Edit',
                'data' => $data,
                'data_guru' => $this->_dataGuru()->get()->getResult(),
            ]
        );
    }
    public function postEdit($id = null)
    {
        if (is_null($id))
            throw PageNotFoundException::forPageNotFound();
        $data = $this->request->getPost();
        $data['slug'] = buat_slug($this->request->getPost('nama_komli'));
        $model = new Komli();
        if ($model->where('id', $id)->countAllResults() > 0) {
            if ($model->update($id, $data)) {
                return redirect()->route('admin_bankdata_komli')->with('message', 'Data berhasil di update!');
            }
        }
    }
    public function delete($id = null)
    {
        if ($id == null) {
            throw PageNotFoundException::forPageNotFound();
        }
        $model = new Komli();
        if ($model->delete($id)) {
            return redirect()->route('admin_bankdata_komli')->with('message', 'Data berhasil di hapus!');
        }
        throw PageNotFoundException::forPageNotFound();
    }
}