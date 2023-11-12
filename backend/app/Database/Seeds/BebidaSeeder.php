<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BebidaSeeder extends Seeder
{
    public function run()
    {
        $bebidas = [
            [
                'nombre_bebida' => '', //insertar datos del cliente dentro de las comillas
                'tamaño_bebida' => '',
                'precio_bebida' => '',
                'link_imagen_bebida' => ''
            ]
            ];

            $this->db->table('bebidas')->insertBatch($bebidas);
    }
}
