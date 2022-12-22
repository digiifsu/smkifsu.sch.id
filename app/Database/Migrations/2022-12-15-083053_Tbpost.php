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
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    'unsigned' =>true,
                    'constraint' => '14',
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                ),
                'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                ),
                'keywords' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '225',
                    'null' => true,
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
                'id_tag' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                    'null' => true,
                ),
                'id_category' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                    'null' => true,
                ),
                'create_at' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
                'update_at' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
                'author' => array(
                    'type' => 'INT',
                    'unsigned' => true,
                    'constraint' => '15',
                ),
                'views' => array(
                    'type' => 'INT',
                    'default' => '0',
                ),
                'status' => array(
                    'type' => 'ENUM',
                    'constraint' => ['draft','publish','unpublish'],
                    'default' => 'unpublish',
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
