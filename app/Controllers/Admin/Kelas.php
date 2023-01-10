<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use ErrorException;

class Kelas extends BaseController
{
    public function _kelas(){
        return new \App\Models\Admin\Kelas();
    }
    public function index()
    {
        $title = "Kelas";
        $data_kelas = $this->_kelas()->get()->getResult();
        return view('admin/bank-data/kelas/show_all',compact('data_kelas','title'));
    }
    public function store(){
        if($this->_kelas()->insert(['nama_kelas'=>$this->request->getPost('nama_kelas')])){
            return $this->response->setJSON([
                'status' => true,
                'message'=>"Data berhasil di tambahkan!",
            ]);
        } else {
            throw ErrorException(); 
        }
    }
    public function edit($id = null){
        if(is_null($id)){
            throw PageNotFoundException::forPageNotFound();
        }
        $title = "edit kelas";
        $data_kelas = $this->_kelas()->where('id',$id)->get()->getRow();
        $act = 'edit';
        return view('admin/bank-data/kelas/edit',compact('data_kelas','title','act'));
    }
    public function update($kelas = null){
        if(is_null($kelas)){
            throw PageNotFoundException::forEmptyController();
        }
        if($this->_kelas()->update($kelas, ['nama_kelas'=>$this->request->getPost('nama_kelas')])){
            return redirect()->back()->with('message', 'Data berhasil di update');
        }
    }
}
