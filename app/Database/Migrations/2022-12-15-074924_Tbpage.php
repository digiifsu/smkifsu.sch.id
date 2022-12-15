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
                'slug' => array(
                    'type' => "VARCHAR",
                    "unique" => true,
                    'constrant' => '224',
                ),
                'id_kategori' => array(
                    'type' => 'INT',
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
                'views' => array(
                    'type' => "INT",
                    'default' => '0',
                ),
                'publish_at' => array(
                    'type' => 'DATETIME',
                ),
                'update_at' => array(
                    'type' => 'DATETIME',
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
        $this->forge->createTable('tb_pages');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pages');
    }
}
