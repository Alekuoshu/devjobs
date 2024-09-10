<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2024-08-15 20:52:16',
                'email' => 'Alekuoshu@gmail.com',
                'email_verified_at' => '2024-08-15 20:52:28',
                'id' => 2,
                'name' => 'Alejandro Villegas',
                'password' => '$2y$10$Dpu8kt6YfbX9gstEOIUICOB.spL.Kh1DtunoJwGaInP8TpZSwB80G',
                'remember_token' => NULL,
                'rol' => 2,
                'updated_at' => '2024-08-15 20:52:28',
            ),
            1 => 
            array (
                'created_at' => '2024-08-21 00:41:58',
                'email' => 'mauvk@gmail.com',
                'email_verified_at' => '2024-08-21 00:42:32',
                'id' => 3,
                'name' => 'Mauricio V',
                'password' => '$2y$10$XIr5AsBnD3GyFkhnmSnyyuviKdF40uxYvO0hY.OsWz/707PNrQ4hS',
                'remember_token' => NULL,
                'rol' => 2,
                'updated_at' => '2024-08-21 00:42:32',
            ),
            2 => 
            array (
                'created_at' => '2024-08-23 22:51:17',
                'email' => 'andres.18@test.com',
                'email_verified_at' => '2024-08-23 22:51:32',
                'id' => 4,
                'name' => 'Andres Villegas',
                'password' => '$2y$10$16HJkxYRA1ohSqMtJ5ERfO2wa5Sbg6wHWfw1N9mQjXskSmZ0gavJ.',
                'remember_token' => NULL,
                'rol' => 1,
                'updated_at' => '2024-08-23 22:51:32',
            ),
            3 => 
            array (
                'created_at' => '2024-08-27 22:26:33',
                'email' => 'developer@test.com',
                'email_verified_at' => '2024-08-27 22:26:47',
                'id' => 5,
                'name' => 'Developer 1',
                'password' => '$2y$10$Ckx.OaHvvmuQFwERz.ZpuOVyG3Y9q.7Ch3NlrmQ.LyK1UOneA/ea2',
                'remember_token' => NULL,
                'rol' => 1,
                'updated_at' => '2024-08-27 22:26:47',
            ),
            4 => 
            array (
                'created_at' => '2024-09-02 17:08:53',
                'email' => 'developer_2@test.com',
                'email_verified_at' => '2024-09-02 17:51:17',
                'id' => 6,
                'name' => 'Developer 2',
                'password' => '$2y$10$pbalgZEL.a0nfscdytoAweO9HEevTKUCkcP/6U.PZcOd7ydIJtwgG',
                'remember_token' => NULL,
                'rol' => 1,
                'updated_at' => '2024-09-02 17:51:17',
            ),
            5 => 
            array (
                'created_at' => '2024-09-02 18:49:07',
                'email' => 'developer_3@test.com',
                'email_verified_at' => '2024-09-02 18:49:15',
                'id' => 10,
                'name' => 'Developer 3',
                'password' => '$2y$10$326DwWfFvVIdCI8U/ZlOseIy/iLxisTmZdAEWEecBYjOr1miGAHi2',
                'remember_token' => NULL,
                'rol' => 1,
                'updated_at' => '2024-09-02 18:49:15',
            ),
        ));
        
        
    }
}