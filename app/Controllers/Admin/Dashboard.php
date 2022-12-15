<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private $title = "Dashboard";
    public function index()
    {
        $title = $this->title;
        return view("admin/home", compact('title'));
    }
    public function logout(){
        redirect()->route('admin_login');
    }
}
