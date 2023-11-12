<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBebidasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bebida'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nombre_bebida' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'tamaño_bebida' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'precio_bebida' => [
                'type' => 'FLOAT'
            ],
            'link_imagen_bebida' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ]
            ]);

            $this->forge->addKey('id_bebida',true);
            $this->forge->createTable('bebidas');
    }

    public function down()
    {
        $this->forge->dropTable('pizzas');
    }
}
