<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbSetting extends Migration
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
                'favicon' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'judul' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'kata_kunci' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '122'
                ),
                'deskripsi' => array(
                    'type' => 'TEXT',
                ),
                'tag' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'copyright' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'visi' => array(
                    'type' => 'TEXT',
                ),
                'misi' => array(
                    'type' => 'TEXT',
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_setting');
    }

    public function down()
    {
        $this->forge->dropTable('tb_setting');
    }
}
