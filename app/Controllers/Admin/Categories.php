<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Categories extends BaseController
{
 
    public function index(){
        $title = 'Add New Categories';
        return view('admin/categories/all_categories', compact('title'));
    }
}
