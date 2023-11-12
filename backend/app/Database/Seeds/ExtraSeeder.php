<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ExtraSeeder extends Seeder
{
    public function run()
    {
        $extras = [
            [
                'nombre_extra' => '', //insertar datos del cliente dentro de las comillas
                'porcion_extra' => '',
                'precio_extra' => '',
                'link_imagen_extra' => ''
            ]
            ];

            $this->db->table('extras')->insertBatch($extras);
    }
}
