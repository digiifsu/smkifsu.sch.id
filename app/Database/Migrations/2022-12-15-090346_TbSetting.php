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
            )
        );
    }

    public function down()
    {
        //
    }
}
