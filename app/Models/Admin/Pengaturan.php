<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Pengaturan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_pengaturan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title',
         'keywords',
         'profile_sekolah',
         'favicon',
         'video_profile',
    ];
    public function updateProfile($content,$visi_misi,$budaya_sekolah){
        return $this->query("UPDATE ".$this->table." SET profile_sekolah='{$content}',visi_misi='{$visi_misi}',budaya_sekolah='{$budaya_sekolah}'");
    }
}
