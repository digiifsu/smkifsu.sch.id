<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Komli extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_kompetensi_keahlian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = array ('nama_komli', 'deskripsi','slug' , 'video_profile', 'kepala_jurusan' , 'kata_ajakan');

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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
    public function joinKajur(){
        
    }
    public function getAll($limit = null){
     $result = $this->select('tb_lembaga.nama as nama_kajur, tb_kompetensi_keahlian.*')
     ->join('tb_lembaga', 'tb_lembaga.id = tb_kompetensi_keahlian.kepala_jurusan','LEFT');
     return $result;
    }
}
