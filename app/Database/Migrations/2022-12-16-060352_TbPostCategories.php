<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPostCategories extends Migration
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
                    'type' => 'VARCHAR',
                    'unique' => true,
                    'cosntraint' => '225',
                ),
                'nama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'description' => array(
                    'type' => 'TEXT'
                ),
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_Post_Categories');
    }

    public function down()
    {
        $this->forge->dropTable('tb_Post_Categories');
    }
}