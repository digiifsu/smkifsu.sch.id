<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Posts;
use App\Models\Admin\PostsCategories;

class Dashboard extends BaseController
{
    private $title = "Dashboard";
    public function getCountData(){
        $modelPost = new Posts();
        $modelPostCategories = new PostsCategories();
        return [
            'post' => $modelPost->countAllResults(),
            'post_categories' => $modelPostCategories->countAllResults(),
        ];
    }
    public function index()
    {
        $title = $this->title;
        $count_data = $this->getCountData();
        return view("admin/home", compact('title','count_data'));
    }
    public function logout(){
        redirect()->route('admin_login');
    }
}
