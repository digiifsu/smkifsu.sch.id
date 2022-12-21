<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPagesCategories extends Migration
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
                    'constraint' => '255',
                ),
                'nama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '250',
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_pages_categories');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pages_categories');
    }
}
