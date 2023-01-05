<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BankData extends BaseController
{
    public function siswa()
    {
        $title = 'Data Siswa';
        return view('admin/bank-data/siswa/show_all.php', compact('title'));
    }
}
