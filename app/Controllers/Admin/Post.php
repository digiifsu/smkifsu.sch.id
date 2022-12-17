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
    
        //data artikel

        return view('admin/post/all_post', compact('title'));
    }
    public function addNew(){
        $title = "Manager Article";
        return view("admin/post/add_post",compact('title'));
    }
    public function update($id = null)
    {
        if(empty($id)) redirect()->route('admin_post_all');

        echo $id;
    }
}
