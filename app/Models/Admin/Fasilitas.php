<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Fasilitas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_fasilitas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'link360',
        'image',
    ];
}
