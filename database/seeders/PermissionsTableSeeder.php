<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Edit Menu',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 01:08:42',
                'updated_at' => '2023-01-21 12:55:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Create Menu',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 02:08:17',
                'updated_at' => '2023-01-21 12:55:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Delete Menu',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 12:56:22',
                'updated_at' => '2023-01-21 12:56:22',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Create Table',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 15:08:24',
                'updated_at' => '2023-01-21 15:08:24',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Edit Table',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 15:08:33',
                'updated_at' => '2023-01-21 15:08:33',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Delete Table',
                'guard_name' => 'web',
                'created_at' => '2023-01-21 15:08:41',
                'updated_at' => '2023-01-21 15:08:41',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Create Reservation',
                'guard_name' => 'web',
                'created_at' => '2023-02-04 12:40:01',
                'updated_at' => '2023-02-04 12:40:01',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Edit Reservation',
                'guard_name' => 'web',
                'created_at' => '2023-02-04 20:39:58',
                'updated_at' => '2023-02-04 20:39:58',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Delete Reservation',
                'guard_name' => 'web',
                'created_at' => '2023-02-04 20:40:08',
                'updated_at' => '2023-02-04 20:40:08',
            ),
        ));
        
        
    }
}