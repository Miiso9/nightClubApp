<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'user@gmail.com',
                'token' => '$2y$10$XXTaBpEoI3iKdU.Ku4YNZeu.cOTK0v7lcbD4a/sFBph9ofGXyHg2m',
                'created_at' => '2023-02-06 12:55:03',
            ),
        ));
        
        
    }
}