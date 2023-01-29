<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //mendapatkan postingan dari database
        $blogModel = new \App\Models\Admin\Posts();
        $komliModel = new \App\Models\Admin\Komli();
        $blog = $blogModel->withCategory()->where('status', 'publish')->limit(3)->get()->getResult();
        return view('frontend/home', ['title' => "Homepage", 'blog' => $blog, 'komli' => $komliModel->getAll(2)->get()->getResult()]);
    }
    //detail post
    public function detailPost($id = null, $slug = null)
    {
        $blogModel = new \App\Models\Admin\Posts();
        $blog = $blogModel
            ->withCategory()
            ->where('tb_post.status', 'publish')
            ->where('tb_post.slug', $slug)
            ->where('tb_post.id', $id)
            ->get()
            ->getRow();
        $author = model('User')->find($blog->author);
        if ($author) {
            $blog->nama_lengkap = $author['nama_lengkap'];
        }
        return view("frontend/detail_berita", ['detail_berita' => $blog, 'title' => $blog->title]);
    }
    public function profile()
    {
        return view('frontend/profile_sekolah', ['title' => "Profile"]);
    }
    public function visi_misi()
    {
        return view('frontend/visi_misi', ['title' => 'Visi Misi']);
    }
    public function fasilitas()
    {
        return view('frontend/fasilitas', ['title' => 'fasilitas']);
    }
    public function budaya_sekolah()
    {
        return view('frontend/budaya_sekolah', ['title' => 'Budaya Sekolah']);
    }
    public function post()
    {
        return view('frontend/post_list', ['title' => "Post"]);
    }
    public function sambutan()
    {
        return view('frontend/sambutan_kepala_sekolah', ['title' => 'Sambutan Kepala Sekolah']);
    }
    public function eskul()
    {
        return view('frontend/eskul', ['title' => 'Eskul']);
    }
    public function prestasi(){
        return view('frontend/prestatsi',['title'=>'Prestasi']);
    }
    public function detail($id = null)
    {
        $data = [];
        $model = model('Admin/Eskul');
        $data_eskul = $model->select('tb_lembaga.nama as nama_pembina,tb_lembaga.image as foto_pembina,' . $model->_get_table() . ".*")->join('tb_lembaga', 'tb_lembaga.id=' . $model->_get_table() . ".pembina", 'LEFT')->where($model->_get_table() . '.id', $id)->get()->getRow();
        if (!$data_eskul) {
            return redirect()->back();
        }
        $data = $data_eskul;
        $data->ketua = db_connect()->query("SELECT nama as nama,gambar as foto FROM tb_siswa WHERE tb_siswa.id='" . $data->ketua . "'")
            ->getRow();
        $data->wakil1 = db_connect()->query("SELECT nama as nama,gambar as foto FROM tb_siswa WHERE tb_siswa.id='" . $data->wakil1 . "'")
            ->getRow();
        $data->wakil2 = db_connect()->query("SELECT nama as nama,gambar as foto FROM tb_siswa WHERE tb_siswa.id='" . $data->wakil2 . "'")
            ->getRow();
        return view('frontend/detail_eskul', ['title' => 'Eskul', 'data_eskul' => $data]);
    }
}
?>