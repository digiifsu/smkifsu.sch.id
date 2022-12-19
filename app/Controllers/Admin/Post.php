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
        $publish = false;
        if (isset($_POST['publish'])) {
            $publish = true;
        }
        //check apakah request nya method
        if ($this->request->getMethod(true) === "POST") {
            $rule = array(
                'title' => 'required',
                'isi' => 'required',
                'id_category' => 'required',
            );
            //if valiation valied redirect to add post page
            if ($this->validate($rule) === FALSE) {
                return redirect()->route('admin_post_addNew')->with('error_danger', $this->validator->getErrors())->withInput();
            }
            //prosess file thumbnail
            $thumbnail = '';
            if(($_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) && ($file = $this->request->getFile('thumbnail'))){
                if($file->hasMoved() === false){
                    $filename_random = $file->getRandomName();
                    if ($file->move(FCPATH . 'uploads/images/post/thumb', $filename_random)) {
                        $thumbnail = 'uploads/images/post/thumb/' . $filename_random;
                    }
                }
            }
 
            //get data
            $data = $this->request->getPost();
            if (empty($data['slug'])) {
                $data['slug'] = trim(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9_-]/", ' ', $data['title'])), '-');
            }
            //status draft or published
            $data['status'] = $publish ? 'publish' : 'draft';
            $data['author'] = 4;
            $data['views'] = 0;
            $data['create_at'] = $data['date'] . ' ' . $data['time'];
            $data['thumbnail'] = $thumbnail;
            $data['deskripsi_singkat'] = substr(strip_tags($data['isi']), 0, 300);
            //get model posts
            $model = model('Admin/Posts');
            //insert proccess
            if ($model->insert($data)) {
                //if success redirect to back page
                return redirect()->route('admin_post_addNew')->with('error_success', "Post Berhasil di simpan sebagai ".$data['status']."");
            } else {
                //if not success show message and back to before page
                return redirect()->route('admin_post_addNew')->with('error_danger', "Post gagal dibuat");
            }
        } else {
            $title = "Manager Article";
            return view("admin/post/add_post", compact('title'));
        }
    }
    public function update($id = null)
    {
        if (empty($id)) redirect()->route('admin_post_all');

        echo $id;
    }
}
