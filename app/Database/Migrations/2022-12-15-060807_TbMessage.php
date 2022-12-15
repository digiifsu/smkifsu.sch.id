<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class TbMessage extends Migration
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
                    'constrait' => '225',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'message' => array(
                    'type' => 'TEXT',
                    'null' => true,
                )
                )
                );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_message');
    }

    public function down()
    {
        $this->forge->dropTable('tb_message');
    }
}
