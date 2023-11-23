<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            [
                'nombre_cliente' => 'Gerardo', //insertar datos del cliente dentro de las comillas
                'apellido_cliente' => 'Carrillo',
                'telefono_cliente' => '6674528339',
                'correo_cliente' => 'lg.carrillo20@info.uas.edu.mx'
            ],
            [
                'nombre_cliente' => 'esto es',
                'apellido_cliente' => 'una prueba',
                'telefono_cliente' => '1234567890',
                'correo_cliente' => 'prueba@gmail.com'
            ],
            /*
            [
                'nombre_cliente' => '',
                'apellido_cliente' => '',
                'telefono_cliente' => '',
                'correo_cliente' => ''
            ]
            */
            ];

            $this->db->table('clientes')->insertBatch($clientes);
    }
}
