<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pages extends BaseController {
    public function index()
    {
        if ($this->request->getMethod("POST", true) === "POST") {
            $this->validation();
            $model = model('Admin/Pages');
            $data = $this->request->getPost();


            //
            if (empty($data['slug'])) {
                $data['slug'] = buat_slug($data['nama']);
            } else {
                $data['slug'] = buat_slug($data['slug']);
            }
            // 
            if ($model->insertPost($data)) {
                return redirect()->route('admin_pages')->with('message',
                'Kategori ......');
            } else {
                return redirect()->route('admin_pages')->with('message',
                'Kategori ......');
            }
        } else {
            $title = 'Manage Pages';
            $categories = model('Admin/Pages')->get()->getResultArray();
            return view('admin/pages/all_pages', compact('title', 
            'categories'));
        }
    }
    // 
    public function validation() {
		$rule = array(
			'keywords' => 'required|trim',
			'nama' => 'required|trim',
			'deskripsi' => 'required',
		);
		if (!$this->validate($rule)) {
			return redirect()->back()->with('error', $this->validator->getError());
		}
	}
	public function delete($id = null) {
		if (is_null($id)) {
			return redirect()->route('admin_pages');
		}
		$model = model('Admin/Categories');
		if($model->where('id',$id)->countAllResults() > 0){
			if($model->delete($id)){
				return redirect()->back()->with('message', 'Data berhasil di hapus');
			}
		}
		return redirect()->back()->with('message', 'data gagal di hapus');
	}
}
