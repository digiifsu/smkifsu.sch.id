<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Tbpost extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id_post' => array(
                    'type' => 'INT',
                    'auto_increment' =>true,
                    'constraint' => '14',
                    'null' => false,
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'judul' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                ),
                'deskripsi_singkat' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'thumbnail' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'isi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'id_tag' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                    'null' => true,
                ),
                'id_category' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                    'null' => true,
                ),
                'time' => array(
                    'type' => 'DATETIME',
                ),
                'update_at' => array(
                    'type' => 'DATETIME',
                ),
                'author' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                ),
                'views' => array(
                    'type' => 'INT',
                    'default' => '0',
                ),
                'status' => array(
                    'type' => 'ENUM',
                    'constraint' => ['draft','publish'],
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_post');
    }

    public function down()
    {
        $this->forge->dropTable('tb_post');
    }
}
