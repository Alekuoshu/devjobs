<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salarios')->delete();
        
        \DB::table('salarios')->insert(array (
            0 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 1,
                'salario' => '$0 - $499',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            1 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 2,
                'salario' => '$500 - $749',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            2 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 3,
                'salario' => '$750 - $999',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            3 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 4,
                'salario' => '$1000 - $1499',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            4 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 5,
                'salario' => '$1500 - $1999',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            5 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 6,
                'salario' => '$2000 - $2499',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            6 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 7,
                'salario' => '$2500 - $2999',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            7 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 8,
                'salario' => '$3000 - $4999',
                'updated_at' => '2024-08-19 23:16:55',
            ),
            8 => 
            array (
                'created_at' => '2024-08-19 23:16:55',
                'id' => 9,
                'salario' => '+$5000',
                'updated_at' => '2024-08-19 23:16:55',
            ),
        ));
        
        
    }
}