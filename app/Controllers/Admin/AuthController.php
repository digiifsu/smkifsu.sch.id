<?php
/**
 * Summary of AuthController
 * Login Untuk admin
 */
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class AuthController extends BaseController{
    public function login(){
        $title = "Login admin";
        return view("admin/login",compact('title'));
    }
}