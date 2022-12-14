<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                
                'nama_lengkap' => "super admin",
                'email' => 'superadmin@gmail.com',
                'password' => password_hash('123456',PASSWORD_DEFAULT),
                'jabatan' => 'kepala jurusan',
                'level' => 'super_admin',
                'avatar' => 'https://via.placeholder.com/150'
            ),
            array( 
                'nama_lengkap' => "Admin",
                'email' => 'admin@gmail.com',
                'password' => password_hash('123456',PASSWORD_DEFAULT),
                'jabatan' => 'tata usaha',
                'level' => 'admin',
                'avatar' => 'https://via.placeholder.com/150'
            ),
        );
        foreach($data as $datas){
            $this->db->table('tb_users')->insert($datas);
        }
    }
}

?>