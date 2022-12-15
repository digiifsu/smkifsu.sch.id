<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbLembaga extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id' => array(
                    'type' => "INT",
                    'constraint' => '10',
                    'unsigned' => true,
                    'auto_increment' => true,
                ),
                'nama' => array(
                    'type' => "VARCHAR",
                    'constraint' => '225',
                    'null'=>false,
                ),
                'pekerjaan' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '120',
                    'null' => true,
                ),
                'kategori' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '223',
                    'null'=>true,
                ),
                'email' => array(
                    'type'=> "VARCHAR",
                    'constraint' => '120',
                    'null' =>false,
                ),
                'agama' => array(
                    'type' => 'INT',
                    'constraint' => '120',
                ),
                'jenis_kelamin' => array(
                    'type' => 'ENUM',
                    'constraint' => ['L','P'],
                    'default' => 'L',
                ),
                'image' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '128',
                ),
                'status' => array(
                    'type' => 'ENUM',
                    'constraint' => ['aktif','tidak']
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_lembaga');
    }

    public function down()
    {
        $this->forge->dropTable('tb_lembaga');
    }
}
