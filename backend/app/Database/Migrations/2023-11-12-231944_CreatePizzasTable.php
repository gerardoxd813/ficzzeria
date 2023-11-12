<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePizzasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pizza'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nombre_pizza' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'tamaño_pizza' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'precio_pizza' => [
                'type' => 'FLOAT'
            ],
            'link_imagen_pizza' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ]
            ]);

            $this->forge->addKey('id_pizza',true);
            $this->forge->createTable('pizzas');
    }

    public function down()
    {
        $this->forge->dropTable('pizzas');
    }
}
