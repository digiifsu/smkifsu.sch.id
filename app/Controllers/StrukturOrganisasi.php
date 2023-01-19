<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StrukturOrganisasi extends BaseController
{
    public function index()
    {
        return view('frontend/struktur_organisasi');
    }
}
