<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VacantesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vacantes')->delete();
        
        \DB::table('vacantes')->insert(array (
            0 => 
            array (
                'categoria_id' => 1,
                'created_at' => '2024-08-20 19:58:14',
                'descripcion' => 'Esto es una prueba de vacantes, vamos a ver que pasa despues de esto, se edita esta vaina',
                'empresa' => 'Farmalisto LATAM',
                'id' => 1,
                'imagen' => 'Uj5KrRTce479qDolDd0bduWSCTbYwdP2mpUea74D.jpg',
                'publicado' => 1,
                'salario_id' => 5,
                'titulo' => 'Php Developer',
                'ultimo_dia' => '2024-09-19',
                'updated_at' => '2024-08-21 17:36:17',
                'user_id' => 2,
            ),
            1 => 
            array (
                'categoria_id' => 2,
                'created_at' => '2024-08-20 20:03:22',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                'empresa' => 'Candyinmakeup',
                'id' => 2,
                'imagen' => 'nNtWR5X2ZAegPcEHwI37qi2G3EVc5n0O6PMtkbCo.jpg',
                'publicado' => 1,
                'salario_id' => 6,
                'titulo' => 'React Profesional',
                'ultimo_dia' => '2024-09-29',
                'updated_at' => '2024-09-09 14:28:18',
                'user_id' => 2,
            ),
            2 => 
            array (
                'categoria_id' => 3,
                'created_at' => '2024-08-20 20:11:12',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                'empresa' => 'JosueMayus',
                'id' => 3,
                'imagen' => 'iLXLUkRQ72oo1wXwiXUkY0nMOsB9zje2snOUIwwW.jpg',
                'publicado' => 1,
                'salario_id' => 8,
                'titulo' => 'React Native Developer',
                'ultimo_dia' => '2024-09-08',
                'updated_at' => '2024-09-09 13:57:14',
                'user_id' => 2,
            ),
            3 => 
            array (
                'categoria_id' => 1,
                'created_at' => '2024-08-22 00:33:24',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ',
                'empresa' => 'Capa 8',
                'id' => 6,
                'imagen' => 'dSZxT2UhHTiCmdiRDWcJCvbV3dSFrLWLkh2CHoJy.png',
                'publicado' => 1,
                'salario_id' => 9,
                'titulo' => 'Java Developer',
                'ultimo_dia' => '2024-09-20',
                'updated_at' => '2024-08-22 00:33:24',
                'user_id' => 2,
            ),
            4 => 
            array (
                'categoria_id' => 2,
                'created_at' => '2024-08-22 00:42:23',
                'descripcion' => 'probando esta vaina, debe de quedar muy bien, vamos a ver que pasa entonces',
                'empresa' => 'Apple',
                'id' => 7,
                'imagen' => 'pb5qlUW5qgYubupoCyp7geQfvmeQbwwuWl0wtiBg.jpg',
                'publicado' => 1,
                'salario_id' => 6,
                'titulo' => 'Frontend Developer',
                'ultimo_dia' => '2024-09-19',
                'updated_at' => '2024-08-22 00:42:23',
                'user_id' => 3,
            ),
            5 => 
            array (
                'categoria_id' => 7,
                'created_at' => '2024-08-28 04:35:17',
                'descripcion' => 'Se necesita un devops con experiencia minima de 2 años para soportar las tecnologias y herramientas que ofrece la empresa Sena.',
                'empresa' => 'Sena',
                'id' => 8,
                'imagen' => 'afT5WlKn6Uiaug9rIZFXY9GNzZIaqALvwW4btTCs.png',
                'publicado' => 1,
                'salario_id' => 3,
                'titulo' => 'Devops Junior',
                'ultimo_dia' => '2024-11-27',
                'updated_at' => '2024-08-28 04:35:17',
                'user_id' => 3,
            ),
        ));
        
        
    }
}