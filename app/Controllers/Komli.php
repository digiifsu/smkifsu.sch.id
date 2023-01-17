<?php

namespace App\Controllers;

class Komli extends BaseController
{
    public function detail($id = null,$slug = null)
    {
      if (empty($id)) {
        return;
    }
    $komliModel = new \App\Models\Admin\Komli();
    $data = $result = $komliModel->select('tb_lembaga.nama as nama_kajur,tb_lembaga.image as foto_kajur, tb_kompetensi_keahlian.*')
    ->join('tb_lembaga', 'tb_lembaga.id = tb_kompetensi_keahlian.kepala_jurusan','LEFT')
    ->where('tb_kompetensi_keahlian.id',$id)
    ->where('tb_kompetensi_keahlian.slug',$slug)
    ->get()
    ->getRow();
    return view('frontend/detail_komli',[
        'title' => 'detail komli',
        'data_komli' => $data,

    ]);
}

}
