<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Komli;
use CodeIgniter\Exceptions\PageNotFoundException;

class KompetensiKeahlian extends BaseController
{
    public function index()
    {
        $data = new Komli();
        $result = $data->get()->getResult();
        return view('admin/bank-data/komli/show_all', ['title' => 'kompetensi keahlian', 'data' => $result]);
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
        $data['slug'] = str_replace(' ', '-', strtolower($this->request->getPost('nama_komli')));
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
        if (is_null($id)) throw PageNotFoundException::forPageNotFound();
        $data = (new Komli())->where('id', $id)->get()->getRow();
        return view('admin/bank-data/komli/edit', ['title' => 'Edit', 'data' => $data]);
    }
    public function postEdit($id = null)
    {
        if (is_null($id)) throw PageNotFoundException::forPageNotFound();
        $data = $this->request->getPost();
        $data['slug'] = str_replace(' ', '-', strtolower($this->request->getPost('nama_komli')));
        $model = new Komli();
        if ($model->where('id', $id)->countAllResults()  > 0) {
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
