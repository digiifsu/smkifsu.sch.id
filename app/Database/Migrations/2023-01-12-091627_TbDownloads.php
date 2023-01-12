<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbDownloads extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    'usigned' => true,
                    'constraint' => '14',
                ),
                'title' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
                'download_history' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '400'
                ),
                'last_download' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '400'
                )
            )
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_download');
    }

    public function down()
    {
        $this->forge->dropTable('tb_download');
    }
}
