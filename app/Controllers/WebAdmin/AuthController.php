<?php
namespace App\Controllers\WebAdmin;
use App\Controllers\BaseController;
class AuthController extends BaseController{
    public function login(){
        $title = "Login admin";
        //for show login page for admin
        return view('webadmin/auth/login', compact('title'));
    }
}