<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SalarioSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CandidatosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(SalariosTableSeeder::class);
        $this->call(VacantesTableSeeder::class);
    }
}
