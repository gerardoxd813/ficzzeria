<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            [
                'nombre_cliente' => 'esto es', //insertar datos del cliente dentro de las comillas
                'apellido_cliente' => 'una prueba',
                'telefono_cliente' => '1234567890',
                'correo_cliente' => 'prueba@gmail.com'
            ]
            ];

            $this->db->table('clientes')->insertBatch($clientes);
    }
}
