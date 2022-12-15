<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ekstrakurikuler extends Migration
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
                    'constraint' => '225',
                ),
                'profile' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'ketua' => array(
                    'type' => 'INT',
                    'null' => false,
                ),
                'pembina' => array(
                    'type' => 'INT',
                    'null' => false,
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_ekstrakurikuler');
    }

    public function down()
    {
        $this->forge->dropTable('tb_ekstrakurikuler');
    }
}
