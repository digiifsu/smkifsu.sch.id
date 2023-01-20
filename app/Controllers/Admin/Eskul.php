<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Eskul extends BaseController {
    public function index(){
      return view('admin/eskul/show_all',['title'=>'Eskul']);
    }
}

 ?>
