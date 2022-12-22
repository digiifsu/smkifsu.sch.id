<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Post extends BaseController
{
    public function index()
    {
        $title = "Manage Article";

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
            //prosess file thumbnail
            $thumbnail = '';
            if (($_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) && ($file = $this->request->getFile('thumbnail'))) {
                $validationRule = [
                    'thumbnail' => [
                        'label' => 'Image File',
                        'rules' => 'uploaded[thumbnail]'
                            . '|is_image[thumbnail]'
                            . '|mime_in[thumbnail,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (!$this->validate($validationRule)) {
                    return redirect()->route('admin_post_addNew')->withInput()->with('error_danger', "Gambar Thumbnail tidak valid");
                } else {
                    if ($file->hasMoved() === false) {
                        $filename_random = $file->getRandomName();
                        if ($file->move(FCPATH . 'uploads/images/post/thumb', $filename_random)) {
                            $thumbnail = 'uploads/images/post/thumb/' . $filename_random;
                        }
                    }
                }
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
            $data['views'] = 0;
            $data['create_at'] = $this->request->getPost('create_at');
            $data['thumbnail'] = $thumbnail;
            $data['deskripsi_singkat'] = substr(strip_tags($data['isi']), 0, 300);
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
            $title = "Manager Article";
            $categories = model('Admin/Categories')->findAll();
            return view("admin/post/add_post", compact('title', 'categories'));
        }
    }
    public function update($id = null)
    {
        if (empty($id)) redirect()->route('admin_post_all');

        echo $id;
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
