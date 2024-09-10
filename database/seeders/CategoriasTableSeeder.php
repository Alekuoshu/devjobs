<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorias')->delete();
        
        \DB::table('categorias')->insert(array (
            0 => 
            array (
                'categoria' => 'Backend Developer',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 1,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            1 => 
            array (
                'categoria' => 'Front end Developer',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 2,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            2 => 
            array (
                'categoria' => 'Mobile Developer',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 3,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            3 => 
            array (
                'categoria' => 'Techlead',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 4,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            4 => 
            array (
                'categoria' => 'UX / UI Design',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 5,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            5 => 
            array (
                'categoria' => 'Software Architecture',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 6,
                'updated_at' => '2024-08-19 23:16:55',
            ),
            6 => 
            array (
                'categoria' => 'Devops',
                'created_at' => '2024-08-19 23:16:55',
                'id' => 7,
                'updated_at' => '2024-08-19 23:16:55',
            ),
        ));
        
        
    }
}