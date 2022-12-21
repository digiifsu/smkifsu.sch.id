<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    public function index()
    {
        //
    }
    public function addNewPostCategories(){
        $title = 'Add New Categories';
        return view('admin/categories/add_new', compact('title'));
    }
}
