<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BebidaSeeder extends Seeder
{
    public function run()
    {
        $bebidas = [
            [
                'nombre_bebida' => 'Coca Cola', //insertar datos del cliente dentro de las comillas
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fcocacola_2l.jpg?alt=media&token=664f23ed-5382-42e5-836c-1536bcaba712&_gl=1*18bbloj*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU1NC40Ny4wLjA.'
            ],
            [
                'nombre_bebida' => 'Coca Cola',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fcocacola_2l.jpg?alt=media&token=664f23ed-5382-42e5-836c-1536bcaba712&_gl=1*18bbloj*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU1NC40Ny4wLjA.'
            ],
            [
                'nombre_bebida' => 'Fanta',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffanta2.jpg?alt=media&token=4d42cc9c-db7d-4f75-93de-4813eaa6816c&_gl=1*1k646yj*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU2Ni4zNS4wLjA.'
            ],
            [
                'nombre_bebida' => 'Fanta',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffanta600.jpg?alt=media&token=7575b224-fc7d-4ec0-9d91-eb8e7ca3cb5c&_gl=1*1yujeoe*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU4Mi4xOS4wLjA.'
            ],
            [
                'nombre_bebida' => 'Fanta Fresa',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffantafresa2l.jpg?alt=media&token=13a9da39-f698-4c73-8dcb-84f8b9ca02f5&_gl=1*bawkqu*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU5NS42LjAuMA..'
            ],
            [
                'nombre_bebida' => 'Fanta Fresa',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffantafresa600.jpg?alt=media&token=b5e3940b-7dc3-4496-860a-69eca1c2bf2d&_gl=1*ec31y8*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYwOC42MC4wLjA.'
            ],
            [
                'nombre_bebida' => 'Fresca',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffresca2l.jpg?alt=media&token=3e670b27-f001-4d42-a342-5c638c41c891&_gl=1*cno97y*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYyMC40OC4wLjA.'
            ],
            [
                'nombre_bebida' => 'Fresca',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffresca600.jpg?alt=media&token=5e7ccfcd-91cc-4c44-aba0-7919f7e86cf3&_gl=1*6v2okm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYzMi4zNi4wLjA.'
            ],
            [
                'nombre_bebida' => 'Lift',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Flift600.jpg?alt=media&token=51ad7aae-5d2a-4e93-bdbb-fd255dae1453&_gl=1*147wxl*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY0My4yNS4wLjA.'
            ],
            [
                'nombre_bebida' => 'Sidral Mundet',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsidralmundet2l.jpg?alt=media&token=49736226-bd9b-4ae2-8e04-dbc15e8567bb&_gl=1*1leuhtr*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY1My4xNS4wLjA.'
            ],
            [
                'nombre_bebida' => 'Sidral Mundet',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsidralmundet600.jpg?alt=media&token=c68408cf-e552-4d48-8013-2ca7b06f4764&_gl=1*ownfux*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY2OS42MC4wLjA.'
            ],
            [
                'nombre_bebida' => 'Sprite',
                'tamaño_bebida' => '2L',
                'precio_bebida' => '34',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsprite2l.jpg?alt=media&token=50be9b28-26a0-430f-a854-7367f790e8a3&_gl=1*1k6ilkq*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY4My40Ni4wLjA.'
            ],
            [
                'nombre_bebida' => 'Sprite',
                'tamaño_bebida' => '600ML',
                'precio_bebida' => '16',
                'link_imagen_bebida' => 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsprite600.jpg?alt=media&token=9bf9821b-0bf7-4e67-82af-507d4b453e4d&_gl=1*19uovcl*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY5Ny4zMi4wLjA.'
            ]
            /*
            [
                'nombre_bebida' => '',
                'tamaño_bebida' => '',
                'precio_bebida' => '',
                'link_imagen_bebida' => ''
            ]
            */
            ];

            $this->db->table('bebidas')->insertBatch($bebidas);
    }
}
