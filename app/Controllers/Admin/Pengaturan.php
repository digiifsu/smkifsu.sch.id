<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function model(){
        return model("Admin\Pengaturan");
    }
    public function index()
    {

    }
    public function general(){
        $pengaturan = $this->model()->get()->getRow();
        return view('admin/pengaturan/general',['title'=>'Pengaturan Umum','pengaturan'=>$pengaturan]);
    }
    public function profile(){
        $profile = $this->model()->get()->getRow();
        return view('admin/pengaturan/profile_sekolah', ['title'=>"Pengaturan Profile Sekolah",'profile_sekolah'=>$profile->profile_sekolah]);
    }
    public function generalUpdate(){
        $data = $this->request->getPost();
        foreach ($data as $key => $value) {
            $this->model()->query("UPDATE tb_pengaturan SET {$key}='{$value}'");
        }
        return redirect()->route('admin_pengaturan_general')->with('success','Pengaturan Berhasil di update');
    }
    public function profileUpdate(){
        $profile_sekolah = $this->request->getPost('profile_sekolah');
        echo $profile_sekolah;
        if ($this->model()->updateProfile($profile_sekolah)) {
            return redirect()->route('admin_pengaturan_profile')->with('success','Pengaturan Berhasil di update');
        }
    }
}
?>
