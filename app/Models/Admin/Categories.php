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
    public function insertPost($data){
        //check slug
        if($this->where('slug',$data['slug'])->countAllResults() === 0) {
            return $this->insert($data);
        }
        return redirect()->route('admin_post_categories')->with('message_danger', 'Slug sudah ada di database!');
    }
}
