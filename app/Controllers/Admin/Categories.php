<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\PostsCategories;
use CodeIgniter\Exceptions\PageNotFoundException;

class Categories extends BaseController {
	public function index() {
		if ($this->request->getMethod("POST", true) === "POST") {
			$this->validation();
			$model = model('Admin/PostsCategories');
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
			$categories = model('Admin/PostsCategories')->get()->getResultArray();
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
		$model = model('Admin/PostsCategories');
		if($model->where('id',$id)->countAllResults() > 0){
			if($model->delete($id)){
				return redirect()->back()->with('message', 'Data berhasil di hapus');
			}
		}
		return redirect()->back()->with('message', 'data gagal di hapus');
	}
    public function edit($id = null){
        if (is_null($id)){
            return PageNotFoundException::forMethodNotFound();
        }
		$model = new PostsCategories();
		$data['categories'] = $model->get()->getRow();
		$data['title'] = "Edit";
        return view('admin/categories/edit_category', $data);
    }
    public function update($id = null){
        if(is_null($id)){
            return PageNotFoundException::forMethodNotFound();
        }
        $model = new PostsCategories();
        $data['slug'] = str_replace(' ','-',strip_tags($this->request->getPost('slug')));
        $data['nama'] = strip_tags($this->request->getPost('nama'));
        if($model->update($id,$data)){
            return redirect()->route('admin_categories')->with('message','data berhasil di update');
        }
        throw PageNotFoundException::forPageNotFound();
    }

}
