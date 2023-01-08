<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //mendapatkan postingan dari database
        $blogModel = new \App\Models\Admin\Posts();
        $blog = $blogModel->withCategory()->where('status','publish')->limit(3)->get()->getResult();
        return view('frontend/home',['blog'=>$blog]);
    }
    public function detailPost($id = null,$slug = null){
        $blogModel = new \App\Models\Admin\Posts();
        $blog = $blogModel->withCategory()->where('status','publish')->where('tb_post.slug',$slug)->where('tb_post.id',$id)->limit(3)->get()->getRow();
        return view("frontend/detail_berita");
    }
}
