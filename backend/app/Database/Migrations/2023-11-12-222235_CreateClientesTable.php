<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClientesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cliente'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nombre_cliente' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'apellido_cliente' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'telefono_cliente' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'correo_cliente' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
            ]);

            $this->forge->addKey('id_cliente',true);
            $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
