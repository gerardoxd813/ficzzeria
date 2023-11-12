<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetallePedidoSeeder extends Seeder
{
    public function run()
    {
        $detallePedido = [
            [
                'id_cliente' => '', //insertar datos del cliente dentro de las comillas
                'id_pizza' => '',
                'id_bebida' => '',
                'id_extra' => '',
                'precio_total' => ''
            ]
            ];

            $this->db->table('detalle_pedido')->insertBatch($detallePedido);
    }
}
