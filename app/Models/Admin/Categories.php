<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Categories extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_post_categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'nama',
        'deskripsi',
        'slug'
    ];
}
