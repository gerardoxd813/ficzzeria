<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PizzaSeeder extends Seeder
{
    public function run()
    {
        $pizzas = [
            [
                'nombre_pizza' => 'Alemana', //insertar datos del cliente dentro de las comillas
                'tamaño_pizza' => 'Pequeña',
                'precio_pizza' => '100',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'
            ],
            [
                'nombre_pizza' => 'Alemana',
                'tamaño_pizza' => 'Mediana',
                'precio_pizza' => '149',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'
            ],
            [
                'nombre_pizza' => 'Alemana',
                'tamaño_pizza' => 'Grande',
                'precio_pizza' => '229',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'
            ],
            [
                'nombre_pizza' => 'Americana',
                'tamaño_pizza' => 'Pequeña',
                'precio_pizza' => '100',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Americana',
                'tamaño_pizza' => 'Mediana',
                'precio_pizza' => '149',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Americana',
                'tamaño_pizza' => 'grande',
                'precio_pizza' => '229',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'California',
                'tamaño_pizza' => 'Pequeña',
                'precio_pizza' => '100',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'California',
                'tamaño_pizza' => 'Mediana',
                'precio_pizza' => '149',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'California',
                'tamaño_pizza' => 'Grande',
                'precio_pizza' => '229',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Champiñón',
                'tamaño_pizza' => 'Pequeña',
                'precio_pizza' => '100',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Champiñón',
                'tamaño_pizza' => 'Mediana',
                'precio_pizza' => '149',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Champiñón',
                'tamaño_pizza' => 'Grande',
                'precio_pizza' => '229',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Jamón',
                'tamaño_pizza' => 'Pequeña',
                'precio_pizza' => '100',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Jamón',
                'tamaño_pizza' => 'Mediana',
                'precio_pizza' => '149',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.'
            ],
            [
                'nombre_pizza' => 'Jamón',
                'tamaño_pizza' => 'Grande',
                'precio_pizza' => '229',
                'link_imagen_pizza' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.'
            ]
            /*
            [
                'nombre_pizza' => '',
                'tamaño_pizza' => '',
                'precio_pizza' => '',
                'link_imagen_pizza' => ''
            ]
            */
            ];

            $this->db->table('pizzas')->insertBatch($pizzas);
    }
}
