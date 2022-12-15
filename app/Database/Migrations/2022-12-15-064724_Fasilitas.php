<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fasilitas extends Migration
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
                'deskripsi' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'image' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Fasilitas');
    }

    public function down()
    {
        $this->forge->dropTable('Fasilitas');
    }
}
