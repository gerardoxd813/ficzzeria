<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ExtraSeeder extends Seeder
{
    public function run()
    {
        $extras = [
            [
                'nombre_extra' => 'Aderezo', //insertar datos del cliente dentro de las comillas
                'porcion_extra' => '2 onzas',
                'precio_extra' => '10',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Faderezo.jpg?alt=media&token=fa9ee18d-1073-41d2-a588-ab16ce8078a8&_gl=1*1xgwahi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDk4MS40Ny4wLjA.'
            ],
            [
                'nombre_extra' => 'Salsa',
                'porcion_extra' => '2 onzas',
                'precio_extra' => '10',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Faderezo_salsa.jpg?alt=media&token=f10cb319-92d8-4252-93d6-895a875c9609&_gl=1*1wkg906*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTI5My42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Ensalada de atún',
                'porcion_extra' => 'Personal',
                'precio_extra' => '69',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_atun.jpg?alt=media&token=cd3dbe80-98cb-4a2f-9215-638e6651c5f9&_gl=1*6jqe1y*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTQyNi4yNy4wLjA.'
            ],
            [
                'nombre_extra' => 'Ensalada de atún',
                'porcion_extra' => 'Normal',
                'precio_extra' => '119',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_atun.jpg?alt=media&token=cd3dbe80-98cb-4a2f-9215-638e6651c5f9&_gl=1*1btttbv*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTQyOC4yNS4wLjA.'
            ],
            [
                'nombre_extra' => 'Ensalada mixta',
                'porcion_extra' => 'Personal',
                'precio_extra' => '49',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_mixta.jpg?alt=media&token=7089c42d-a2f1-482c-9848-96acaee5f0a0&_gl=1*1g44yfm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTc0NS4zNy4wLjA.'
            ],
            [
                'nombre_extra' => 'Ensalada mixta',
                'porcion_extra' => 'Normal',
                'precio_extra' => '69',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_mixta.jpg?alt=media&token=7089c42d-a2f1-482c-9848-96acaee5f0a0&_gl=1*1g44yfm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTc0NS4zNy4wLjA.'
            ],
            [
                'nombre_extra' => 'Espagueti',
                'porcion_extra' => 'Personal',
                'precio_extra' => '49',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fespagueti_a_la_pizzeta.jpg?alt=media&token=2c71883e-a755-4c68-ba7b-a70764f37d14&_gl=1*gae9hz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTgwMy42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Espagueti',
                'porcion_extra' => 'Normal',
                'precio_extra' => '89',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fespagueti_a_la_pizzeta.jpg?alt=media&token=2c71883e-a755-4c68-ba7b-a70764f37d14&_gl=1*gae9hz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTgwMy42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Papas',
                'porcion_extra' => 'Normal',
                'precio_extra' => '49',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpapizzimas.jpg?alt=media&token=be9698b4-0b3a-40bf-a0fe-53c38ddd9e04&_gl=1*1ssc4x4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTg3MC42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Empanada de champiñón',
                'porcion_extra' => 'Orden de 2',
                'precio_extra' => '50',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_champi%C3%B1on.jpg?alt=media&token=cf807487-5630-4c6b-bec8-94d6b81bed4f&_gl=1*77m83u*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTk1MS42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Empanada de chilorio',
                'porcion_extra' => 'Orden de 2',
                'precio_extra' => '55',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_chilorio.jpg?alt=media&token=69b05b9c-ce5d-4f80-8976-2388e17427e0&_gl=1*19vxk2i*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjAxNS42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Empanada de chorizo',
                'porcion_extra' => 'Orden de 2',
                'precio_extra' => '55',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_chorizo.jpg?alt=media&token=3bdca0c3-2239-464e-b21a-4e1418c831e3&_gl=1*1g4kd2q*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjA1My4yMi4wLjA.'
            ],
            [
                'nombre_extra' => 'Empanada de jamón',
                'porcion_extra' => 'Orden de 2',
                'precio_extra' => '50',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_jamon.jpg?alt=media&token=05b6b85d-0f33-402a-a6c1-eaede24debcf&_gl=1*k5849n*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjA4NC42MC4wLjA.'
            ],
            [
                'nombre_extra' => 'Empanada de jamón y champiñón',
                'porcion_extra' => 'Orden de 2',
                'precio_extra' => '50',
                'link_imagen_extra' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_jamon_y_champi%C3%B1on.jpg?alt=media&token=c4b3db5c-1c14-46c0-af42-88cbc387214b&_gl=1*p4dn8t*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjExOS4yNS4wLjA.'
            ]
            /*
            [
                'nombre_extra' => '',
                'porcion_extra' => '',
                'precio_extra' => '',
                'link_imagen_extra' => ''
            ]
            */
            ];

            $this->db->table('extras')->insertBatch($extras);
    }
}
