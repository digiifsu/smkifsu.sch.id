<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_post';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title',
         'slug',
         'isi',
         'author',
         'id_category',
         'view',
         'create_at',
         'status',
        'deskripsi_singkat',
         'thumbnail',

    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public $tb_post_categories = 'tb_post_categories';
    public function withCategory()
    {
        $buillder = $this->db->table($this->table);
        $buillder->select($this->table . '.*,' . $this->tb_post_categories . '.nama as nama_category' . ',tb_users.nama_lengkap');
        $buillder->join($this->tb_post_categories, $this->tb_post_categories . '.id=' . $this->table . '.id_category', 'left');
        $buillder->join('tb_users', 'tb_users.id=tb_post.author', 'left');
        return $buillder;
    }

    public function dataTable()
    {
    }
}
