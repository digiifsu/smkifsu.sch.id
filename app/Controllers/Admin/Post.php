<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Post extends BaseController
{
    public function index()
    {
        $title = "Manage Post";

        $tb_post = model('Admin/Posts');
        //get data categories from model
        $data_post = $tb_post->withCategory()->orderBy('create_at', 'desc')->get()->getResult();
        return view('admin/post/all_post', compact('title', 'data_post'));
    }

    public function addNew()
    {
        $status = 'unpublish';
        if (isset($_POST['publish'])) {
            $is_admin = true;
            if ($is_admin) {
                $status = 'publish';
            }
        } else {
            $status = 'draft';
        }


        //check apakah request nya method
        if ($this->request->getMethod(true) === "POST") {
                $rule = array(
                    'title' => 'required',
                    'isi' => 'required',
                    'keywords' => 'required',
                    'id_category' => 'required',
                );
                //if valiation valied redirect to add post page
                if ($this->validate($rule) === FALSE) {
                    return redirect()->route('admin_post_addNew')->with('error_danger', $this->validator->getErrors())->withInput();
                }
            //get data
            $data = $this->request->getPost();
            if (empty($data['slug'])) {
                $data['slug'] = trim(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9_-]/", ' ', $data['title'])), '-');
            } else {
                $data['slug'] = trim(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9_-]/", ' ', $data['slug'])), '-');
            }
         
            //status draft or published
            $data['status'] = $status;
            $data['author'] = 4;
            $data['isi'] = $this->request->getPost('isi');
            $data['views'] = 0;
            $data['thumbnail'] = str_replace(base_url(), '', $this->request->getPost('thumbnail'));
            $data['create_at'] = $this->request->getPost('create_at');
            $data['deskripsi_singkat'] = strip_tags($data['deskripsi_singkat']);
            //get model posts
            $model = model('Admin/Posts');
            //insert proccess
            if ($model->insert($data)) {
                //if success redirect to back page
                return redirect()->route('admin_post_addNew')->with('error_success', "Post Berhasil di simpan sebagai " . $data['status'] . "");
            } else {
                //if not success show message and back to before page
                return redirect()->route('admin_post_addNew')->with('error_danger', "Post gagal dibuat");
            }
        } else {
            $title = "Add Post";
            $categories = model('Admin/PostsCategories')->findAll();
            return view("admin/post/add_post", compact('title', 'categories'));
        }
    }
    public function update($id = null)
    {
        if (empty($id)) redirect()->route('admin_post_all');
        $model = model(\Admin\Posts::class);
        if(false === ($model->where('id', $id)->countAllResults() > 0)){
            return redirect()->back();
        }
        //update
        if($this->request->getMethod(true) === "POST") {
            $status = 'unpublish';
            if (isset($_POST['update'])) {
                $is_admin = true;
                if ($is_admin) {
                    $status = 'publish';
                }
            } else {
                $status = 'draft';
            }

            $data = [
                'title' => $this->request->getPost('title'),
                'slug' => buat_slug($this->request->getPost('slug')),
                'isi' => $this->request->getPost('isi'),
                'author' => 4,
                'id_category' => $this->request->getPost('id_category'),
                'create_at' => $this->request->getPost('create_at'),
                'status' => $status,
                'deskripsi_singkat' => $this->request->getPost('deskripsi_singkat'),
                'thumbnail' => str_replace(base_url(),'',$this->request->getPost('thumbnail')),
                'keywords' => $this->request->getPost('keywords'),
            ];
            if($model->update($id,$data)){
                return redirect()->route('admin_post_all');
            }
        } 
       else{
            $data = $model->withCategory()->where('tb_post.id', $id)->get()->getRow();
            $title = "Edit post {$data->id}";
            $categories = model('Admin/PostsCategories')->findAll();
            return view('admin/post/edit_post', compact('data', 'title', 'categories'));
       }
    }
    public function delete($id = null)
    {
        if ($id == null) {
            return redirect()->route('admin_post_all')->with('error', 'welcda');
        }
        //check dulu di database ada gak 
        $post_model = model('Admin/Posts');
        if ($post_model->where('id', $id)->countAllResults() > 0) {
            if ($post_model->delete($id)) {
                return redirect()->back()->with('message', "Post berhasil di hapus!");
            }
        } else {
            return redirect()->back()->with('message', "Post gagal di hapus!");
        }
    }
}
