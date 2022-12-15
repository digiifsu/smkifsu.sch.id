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
                'id_kategori' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '33',
                ),
                'judul' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                ),
                'deskripsi' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'isi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'publish_at' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                ),
                'thumbnail' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
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
