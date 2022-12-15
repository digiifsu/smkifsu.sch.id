<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbimgFasilitas extends Migration
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
                'id_fasilitas' => array(
                    'type' => 'INT',
                    'constraint' => '14',
                    'null' => true,
                ),
                'image_url' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                )
            )
        );
        //
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_imgfasilitas');
    }

    public function down()
    {
        $this->forge->dropTable('tb_imgfasilitas');
    }
}
