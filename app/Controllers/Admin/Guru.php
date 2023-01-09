<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function pekerjaan(){
        return [
            'Guru Adaftif',
            'Guru Produktif',
            'Kepala Sekolah',
            'Tata Usaha',
            'Kebersihan',
            'Satpam',
            'Penjaga ISEU'

        ];
    }
    public function agama(){
        return [
            'Islam',
            'Kristen',
            'Budha',
            'Hindu',
            'Wahyudi',

        ];
    }
    public function index()
    {
        $title = 'Guru/Pegawai';
        $pekerjaan = $this->pekerjaan();
        $agama = $this->agama();
        $data = (new \App\Models\Admin\Guru)->get()->getResult();
        return view('admin/bank-data/guru/show_all',compact('title','data','pekerjaan','agama'));
    }
}
