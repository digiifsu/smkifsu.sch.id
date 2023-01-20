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
    public function sambutanKepsek(){
      return view('admin/pengaturan/sambutan_kepala_sekolah',['title'=>'Pengaturan Kepala Sekolah']);
    }
    public function general(){
        $pengaturan = $this->model()->get()->getRow();
        return view('admin/pengaturan/general',['title'=>'Pengaturan Umum','pengaturan'=>$pengaturan]);
    }
    public function updateSambutanKepsek(){
      $data = $this->request->getPost();
      foreach ($data as $key => $value) {
          $this->model()->query("UPDATE tb_pengaturan SET {$key}='{$value}'");
      }
      return redirect()->route('admin_sambutan_kepsek')->with('success','Pengaturan Berhasil di update');
    }
    public function profile(){
        $profile = $this->model()->get()->getRow();
        return view('admin/pengaturan/profile_sekolah',[
            'title'=>"Pengaturan Profile Sekolah",
            'profile_sekolah'=>$profile->profile_sekolah,
            'visi_misi'=>$profile->visi_misi,
            'budaya_sekolah' => $profile->budaya_sekolah,
        ]);
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
        $visi_misi = $this->request->getPost('visi_misi');
        $budaya_sekolah = $this->request->getPost('budaya_sekolah');
        if ($this->model()->updateProfile($profile_sekolah,$visi_misi,$budaya_sekolah)) {
            return redirect()->route('admin_pengaturan_profile')->with('success','Pengaturan Berhasil di update');
        }
    }
}
?>
