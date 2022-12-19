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
        $data_post = $tb_post->withCategory()->orderBy('create_at','desc')->get()->getResult();
        return view('admin/post/all_post', compact('title','data_post'));
    }
    public function addNew(){
        $publish = false;
        if (isset($_POST['publish'])) {
            $publish = true;
        }
        
        $title = "Manager Article";
        return view("admin/post/add_post",compact('title'));
    }
    public function update($id = null)
    {
        if(empty($id)) redirect()->route('admin_post_all');

        echo $id;
    }
}
