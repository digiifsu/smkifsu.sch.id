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
                'tag' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'id_category' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    'constraint' => '14',
                    'null' => false,
                ),
                'time' => array(
                    'type' => 'DATE TIME',
                ),
                'author' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    'constraint' => '14',
                    'null' => false,
                ),
                'status' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
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
