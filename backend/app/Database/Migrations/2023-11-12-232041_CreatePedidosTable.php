<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pedido'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'id_detalle_pedido' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'fecha_pedido' => [
                'type' => 'DATETIME'
            ]
            ]);

            $this->forge->addKey('id_pedido',true);
            $this->forge->createTable('pedidos');
    }

    public function down()
    {
        $this->forge->dropTable('pedidos');
    }
}
