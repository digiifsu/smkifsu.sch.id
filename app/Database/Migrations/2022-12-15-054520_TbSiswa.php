<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class TbSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id' => array(
                    'type' => 'INT',
                    'null' => false,
                    'auto_increment' => true,
                ),
                'nis' => array(
                    'type' => 'INT',
                    'constraint' => '8',
                    'null' => false,
                ),
                'nama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '120',
                    'null' => false,
                ),
                'kelas' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '87',
                ),
                'status' => array(
                    'type' => 'ENUM',
                    'constraint' => ['ya', 'tidak'],
                    'default' => 'ya',
                ),
                'agama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '221',
                ),
                'jenis_kelamin' => array(
                    'type' => 'ENUM',
                    'constraint' => [
                        'L',
                        'P'
                    ],
                ),
                'id_komli' => array(
                    'type' => 'INT',
                    'null' => true,
                ),
                'gambar' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                )
            )
        );
        //
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_komli', 'tb_kompetensi_keahlian', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tb_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tb_siswa');
    }
}
