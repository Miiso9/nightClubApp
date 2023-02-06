<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tables')->delete();
        
        \DB::table('tables')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Stol Prednji 1',
                'guest_number' => 6,
                'status' => 'available',
                'location' => 'front',
                'created_at' => '2023-01-25 01:47:08',
                'updated_at' => '2023-02-05 22:24:35',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Stol Prednji 2',
                'guest_number' => 6,
                'status' => 'available',
                'location' => 'front',
                'created_at' => '2023-01-25 12:29:09',
                'updated_at' => '2023-02-05 22:24:56',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Stol Zadnji 1',
                'guest_number' => 12,
                'status' => 'available',
                'location' => 'back',
                'created_at' => '2023-01-25 12:29:22',
                'updated_at' => '2023-02-05 22:25:09',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Stol Zadnji 2',
                'guest_number' => 8,
                'status' => 'available',
                'location' => 'back',
                'created_at' => '2023-02-03 16:35:00',
                'updated_at' => '2023-02-05 22:25:26',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Stol Sredina VIP',
                'guest_number' => 8,
                'status' => 'available',
                'location' => 'middle',
                'created_at' => '2023-02-03 16:35:12',
                'updated_at' => '2023-02-05 22:25:46',
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'Stole Sredina 1',
                'guest_number' => 12,
                'status' => 'available',
                'location' => 'middle',
                'created_at' => '2023-02-04 20:00:58',
                'updated_at' => '2023-02-05 22:26:08',
            ),
        ));
        
        
    }
}