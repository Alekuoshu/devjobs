<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('candidatos')->delete();
        
        \DB::table('candidatos')->insert(array (
            0 => 
            array (
                'created_at' => '2024-08-27 00:34:15',
                'cv' => '46G5w5Ysm9Z1Hh3NY6yay6mKj7JEbdMlDMOIbjtC.pdf',
                'id' => 2,
                'status' => 0,
                'updated_at' => '2024-08-27 00:34:15',
                'user_id' => 4,
                'vacante_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2024-08-27 14:43:47',
                'cv' => 'updZBSaXZs0NkEuFap21KsOeE82zibar5IEv4SC2.pdf',
                'id' => 3,
                'status' => 0,
                'updated_at' => '2024-08-27 14:43:47',
                'user_id' => 4,
                'vacante_id' => 3,
            ),
            2 => 
            array (
                'created_at' => '2024-08-27 22:27:42',
                'cv' => 'MhGaEvyH3prqE594W014wPr0wDq9bNZpgAGowfq8.pdf',
                'id' => 4,
                'status' => 1,
                'updated_at' => '2024-09-09 11:54:01',
                'user_id' => 5,
                'vacante_id' => 2,
            ),
            3 => 
            array (
                'created_at' => '2024-08-28 04:06:33',
                'cv' => 'TeZBAcQCCghQZdBHRxNpG91G40km6EbiHWxpYxqT.pdf',
                'id' => 5,
                'status' => 0,
                'updated_at' => '2024-08-28 04:06:33',
                'user_id' => 5,
                'vacante_id' => 3,
            ),
            4 => 
            array (
                'created_at' => '2024-08-28 04:36:48',
                'cv' => 'acL7XGQSx79LC4PXXKpc0q5HfEv9NBmdy9ttR24h.pdf',
                'id' => 6,
                'status' => 0,
                'updated_at' => '2024-08-28 04:36:48',
                'user_id' => 4,
                'vacante_id' => 8,
            ),
            5 => 
            array (
                'created_at' => '2024-09-02 16:48:53',
                'cv' => 'Nklb8pFuOtxYyy20ghGWRASW2nWc2sbbaj0AY2C7.pdf',
                'id' => 7,
                'status' => 1,
                'updated_at' => '2024-09-09 12:45:26',
                'user_id' => 5,
                'vacante_id' => 6,
            ),
            6 => 
            array (
                'created_at' => '2024-09-02 18:50:43',
                'cv' => 'D4Ro1quWEJCXc4CybFZI060noG5RWrF2AiV1QAUK.pdf',
                'id' => 9,
                'status' => 0,
                'updated_at' => '2024-09-02 18:50:43',
                'user_id' => 10,
                'vacante_id' => 7,
            ),
            7 => 
            array (
                'created_at' => '2024-09-02 19:08:03',
                'cv' => 'Nez47iGNGMeed0won3IvK3oJjMlBM6O4eZAsgCMb.pdf',
                'id' => 10,
                'status' => 0,
                'updated_at' => '2024-09-02 19:08:03',
                'user_id' => 6,
                'vacante_id' => 3,
            ),
            8 => 
            array (
                'created_at' => '2024-09-02 22:43:36',
                'cv' => 'JlWpv6AMp9GfRN0gqXSsTzQ573ObdNVv4G01IOtW.pdf',
                'id' => 11,
                'status' => 0,
                'updated_at' => '2024-09-02 22:43:36',
                'user_id' => 6,
                'vacante_id' => 2,
            ),
            9 => 
            array (
                'created_at' => '2024-09-02 23:30:27',
                'cv' => '233O99FcKYcg0k4JN3bMHbEiNsMTeegBUiBOeqh1.pdf',
                'id' => 12,
                'status' => 0,
                'updated_at' => '2024-09-02 23:30:27',
                'user_id' => 10,
                'vacante_id' => 1,
            ),
            10 => 
            array (
                'created_at' => '2024-09-03 00:13:42',
                'cv' => 'LiimgTQBimuJbLjxJI51wktVxhqSUpy3I9U7exbe.pdf',
                'id' => 13,
                'status' => 1,
                'updated_at' => '2024-09-04 23:38:26',
                'user_id' => 5,
                'vacante_id' => 1,
            ),
            11 => 
            array (
                'created_at' => '2024-09-03 00:17:07',
                'cv' => 'eU1hvmo5KpczNcai5lwqrAyCtOaJuUFJrKAz61TM.pdf',
                'id' => 14,
                'status' => 1,
                'updated_at' => '2024-09-09 12:43:25',
                'user_id' => 10,
                'vacante_id' => 2,
            ),
            12 => 
            array (
                'created_at' => '2024-09-09 12:48:33',
                'cv' => 'XmVsuf4ezCzzwW8ua2c1XEMRCEnUNPPeUbD5JF4v.pdf',
                'id' => 15,
                'status' => 1,
                'updated_at' => '2024-09-09 12:49:48',
                'user_id' => 6,
                'vacante_id' => 6,
            ),
            13 => 
            array (
                'created_at' => '2024-09-09 13:32:47',
                'cv' => '1IoH645fegpssFf7i4WmVxRyypXOdCpVnlgr1bsr.pdf',
                'id' => 16,
                'status' => 1,
                'updated_at' => '2024-09-09 13:34:42',
                'user_id' => 6,
                'vacante_id' => 8,
            ),
        ));
        
        
    }
}