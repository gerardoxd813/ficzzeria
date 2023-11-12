<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PizzaSeeder extends Seeder
{
    public function run()
    {
        $pizzas = [
            [
                'nombre_pizza' => '', //insertar datos del cliente dentro de las comillas
                'tamaño_pizza' => '',
                'precio_pizza' => '',
                'link_imagen_pizza' => ''
            ]
            ];

            $this->db->table('pizzas')->insertBatch($pizzas);
    }
}
