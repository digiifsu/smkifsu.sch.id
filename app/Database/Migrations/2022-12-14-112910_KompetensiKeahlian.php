<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KompetensiKeahlian extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id'=> array(
                    'type' => 'INT',
                    'constraint' => '22',
                    'auto_increment'=>true,
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '120'
                ),
                'nama_komli' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '80',
                ),
                'deskripsi' => array(
                    'type' => 'TEXT',
                ),
                'visi' => array(
                    'type' => 'TEXT',
                ),
                'misi' => array(
                    'type' => 'TEXT'
                ),
                'kepala_jurusan' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'unsigned' => true,
                ),
                'karir' => array(
                    'type' => 'TEXT',
                ),
            ),
        );

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('tb_kompetensi_keahlian');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kompetensi_keahlian');
    }
}
