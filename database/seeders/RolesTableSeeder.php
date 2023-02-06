<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2023-01-20 21:38:32',
                'updated_at' => '2023-01-20 21:38:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Moderator',
                'guard_name' => 'web',
                'created_at' => '2023-01-20 21:38:32',
                'updated_at' => '2023-01-21 12:54:34',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'User',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 12:03:37',
                'updated_at' => '2023-01-21 12:54:43',
            ),
        ));
        
        
    }
}