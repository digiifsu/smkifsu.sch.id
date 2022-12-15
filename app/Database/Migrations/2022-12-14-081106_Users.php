<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true,
                ),
                'nama_lengkap' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',                
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',                
                ),
                'jabatan' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 23,
                ),
                'level' => array(
                    'type' => 'ENUM',
                    'constraint' => ['super_admin','admin','user'],
                    'default' => 'admin',
                ),
                'create_at' => array(
                    'type' => 'datetime',
                ),
        ));
        $this->forge->addUniqueKey('email');
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable("tb_users", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tb_users');
    }
}
