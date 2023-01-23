<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Agenda extends BaseController
{
    public function index()
    {
        return view("admin/agenda/show_all",['title'=>'Agenda']);
    }
    public function store(){
        $data = $this->request->getPost();
        $model = model('Admin/Agenda');
        if ($model->save($data)) {
            return redirect()->back()->with("success","data berhasil di tambahkan!");
        }
    }
    public function destroy($id = null){
        if (!empty($id)) {
            if (model('Admin/Agenda')->find($id)) {
                model("Admin/Agenda")->delete($id);
                return redirect()->back()->with("success",'Data berhasil dihapus');
            }
        }
        throw PageNotFoundException::forPageNotFound();
    }
}
