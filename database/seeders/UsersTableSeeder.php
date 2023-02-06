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
                'id' => 1,
                'name' => 'admin',
                'email' => 'mihael@gmail.com',
                'email_verified_at' => '2023-01-20 21:38:32',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Lht5qevbPzt0O0Jj5O3aKAS25RqGzCCh41Jm1Lm9eEmtpws5wgL4UNOg0yZz',
                'created_at' => '2023-01-20 21:38:32',
                'updated_at' => '2023-01-20 21:38:32',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Zmaj',
                'email' => 'zmaj@zmaj.zmaj',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0jpymgq0.HejfJQCIL5nTO8L2qNHj1pjC8Gbnu5L.nbHFM/MQcX/y',
                'remember_token' => NULL,
                'created_at' => '2023-02-03 18:09:45',
                'updated_at' => '2023-02-03 18:09:45',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Korisnik',
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WWv6XKy40YY0be6aQFUM7.XPsnoB8/EWbH.r8kzsdUpVZ45e82Aqe',
                'remember_token' => NULL,
                'created_at' => '2023-02-04 18:05:47',
                'updated_at' => '2023-02-04 18:05:47',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Konobar',
                'email' => 'moderator@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HEQWSTbUZNJK.vdWs/k5H.p74mv7i3CwtzA4uCieuDXbLiHqTMj.6',
                'remember_token' => NULL,
                'created_at' => '2023-02-04 19:24:49',
                'updated_at' => '2023-02-04 19:24:49',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Korisnik2',
                'email' => 'user2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eTX9bBcyY2u/R2qTxOAkJOYCZ8/H.zT1GMLgc.inDSXTLtvJBfzFW',
                'remember_token' => NULL,
                'created_at' => '2023-02-04 20:21:08',
                'updated_at' => '2023-02-04 20:21:08',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Pepi',
                'email' => 'pepi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PgrLQNz6o1skcZpPoLXbKeKSUOjZ0shj2S4fCxfQnMsAaGzLddJTy',
                'remember_token' => NULL,
                'created_at' => '2023-02-05 15:06:31',
                'updated_at' => '2023-02-05 15:06:31',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'asdsf',
                'email' => 'asdg@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rc9oYv//YXvb/CjiQ/056.maDIpTocduyogFnwCbF0t1STxLSxAqS',
                'remember_token' => NULL,
                'created_at' => '2023-02-06 16:29:52',
                'updated_at' => '2023-02-06 16:29:52',
            ),
        ));
        
        
    }
}