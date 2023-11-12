<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetallePedidoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detalle_pedido'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'id_cliente' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_pizza' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_bebida' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_extra' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'precio_total' => [
                'type' => 'FLOAT'
            ]
            ]);

            $this->forge->addKey('id_detalle_pedido',true);
            $this->forge->createTable('detalle_pedido');
    }

    public function down()
    {
        $this->forge->dropTable('detalle_pedido');
    }
}
