<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class KompetensiKeahlian extends BaseController
{
    public function index()
    {
        return view('admin/bank-data/komli/show_all', ['title' => 'kompetensi keahlian']);
    }
}
