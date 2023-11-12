<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExtrasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_extra'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nombre_extra' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'porcion_extra' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'precio_extra' => [
                'type' => 'FLOAT'
            ],
            'link_imagen_bebida' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ]
            ]);

            $this->forge->addKey('id_extra',true);
            $this->forge->createTable('extras');
    }

    public function down()
    {
        $this->forge->dropTable('extras');
    }
}
