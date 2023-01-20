<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //mendapatkan postingan dari database
        $blogModel = new \App\Models\Admin\Posts();
        $komliModel = new \App\Models\Admin\Komli();
        $blog = $blogModel->withCategory()->where('status','publish')->limit(3)->get()->getResult();
        return view('frontend/home',['blog'=>$blog,'komli'=>$komliModel->getAll(2)->get()->getResult()]);
    }
    //detail post
    public function detailPost($id = null,$slug = null){
        $blogModel = new \App\Models\Admin\Posts();
        $blog = $blogModel->withCategory()->where('status','publish')->where('tb_post.slug',$slug)->where('tb_post.id',$id)->get()->getRow();
        return view("frontend/detail_berita",['detail_berita'=>$blog]);
    }
    public function profile(){
        return view('frontend/profile_sekolah');
    }
    public function visi_misi(){
        return view('frontend/visi_misi',['title'=>'Visi Misi']);
    }
    public function budaya_sekolah(){
        return view('frontend/budaya_sekolah',['title'=>'Budaya Sekolah']);
    }
    public function post(){
        return view('frontend/post_list',['title'=>"Post"]);
    }
    public function sambutan(){
      return view('frontend/sambutan_kepala_sekolah',['title'=>'Sambutan Kepala Sekolah']);
    }
}
?>
