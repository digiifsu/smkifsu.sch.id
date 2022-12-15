<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index()
    {
        $title = "Manage Article";

        //data artikel

        return view('admin/post/all_post', compact('title'));
    }
}
