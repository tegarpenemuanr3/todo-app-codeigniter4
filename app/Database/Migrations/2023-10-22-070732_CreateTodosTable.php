<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'desc' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'ENUM("belum","selesai")',
                'default' => 'belum',
            ]
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('todos');
    }  

    public function down()
    {
        $this->forge->dropTable('todos');
    }
}

// File ini di buat dengan cara:
// php spark migrate:create CreateTodosTable 

// Jalankan migrate dengan:
// php spark migrate