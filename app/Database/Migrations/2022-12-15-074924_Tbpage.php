<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbpage extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    'constraint' => '14',
                    'null' => false,
                ),
                'nama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '33',
                ),
                'pekerjaan' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'kategory' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'agama' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'jenis_kelamin' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'status' => array(
                    'type' => 'TEXT',
                    'null' => true,
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_page');
    }

    public function down()
    {
        $this->forge->dropTable('tb_page');
    }
}
