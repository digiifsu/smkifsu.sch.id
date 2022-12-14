<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Categories extends BaseController {
	public function index() {
		if ($this->request->getMethod("POST", true) === "POST") {
			$this->validation();
			$model = model('Admin/Categories');
			$data = $this->request->getPost();

			//cek slug
			if (empty($data['slug'])) {
				$data['slug'] = buat_slug($data['nama']);
			} else {
				$data['slug'] = buat_slug($data['slug']);
			}
			//process insert data
			if ($model->insertPost($data)) {
				return redirect()->route('admin_categories')->with('message', 'Kategori Berhasil di tambahkan');
			} else {
				return redirect()->route('admin_categories')->with('message', 'Kategori Berhasil di tambahkan');
			}
		} else {
			$title = 'Manage Categories';
			$categories = model('Admin/Categories')->get()->getResultArray();
			return view('admin/categories/all_categories', compact('title', 'categories'));
		}

	}
	//validation the request
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
			return redirect()->route('admin_categories');
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
