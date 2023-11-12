<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PedidoSeeder extends Seeder
{
    public function run()
    {
        $pedidos = [
            [
                'id_detalle_pedido' => '', //insertar datos del cliente dentro de las comillas
                'fecha_pedido' => ''
            ]
            ];

            $this->db->table('pedidos')->insertBatch($pedidos);
    }
}
