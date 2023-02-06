<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Prvi Ponedjeljak',
                'description' => 'Dan: Ponedjeljak
Početak: 21:00
Gost: DJ PaVkA',
                'image' => 'public/events/LK67fjgXD0KG1jVmC4AcVmVzExzPb6AzwHQ46Xz1.jpg',
                'created_at' => '2023-01-21 19:25:58',
                'updated_at' => '2023-01-25 17:16:40',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Veseli Utorak',
                'description' => 'Dan: Utorak
Početak: 21:00
Gost: DJ Pepy',
                'image' => 'public/events/ARuFOJGi1uazzQDPYPvrO0E58WD8KcT67YZfYMzB.jpg',
                'created_at' => '2023-01-25 15:37:41',
                'updated_at' => '2023-01-25 17:17:30',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Studentska Srijeda',
                'description' => 'Dan: Srijeda
Početak: 21:00
Gost: Voyage',
                'image' => 'public/events/S7DmYcK53O8dz1HpVSaCWuS7rKUWRe52cNCuDyzo.jpg',
                'created_at' => '2023-01-25 17:17:55',
                'updated_at' => '2023-01-25 17:17:55',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Večer starih hitova',
                'description' => 'Dan: Četvrtak
Početak: 21:00
Gost: Domo & Ilko (Lulu\'sBae)',
                'image' => 'public/events/A3LB7z042jxJQmNBSRXSOHoQExPb3QQmdHITsiQa.jpg',
                'created_at' => '2023-01-25 17:18:37',
                'updated_at' => '2023-01-26 00:40:32',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Pakleni Petak',
                'description' => 'Dan: Petak
Početak: 21:00
Gost: Rasta',
                'image' => 'public/events/DtAHuNycreCAie6r3XWvXFEfeQmquVSJ84j0gedl.jpg',
                'created_at' => '2023-01-25 17:19:17',
                'updated_at' => '2023-01-25 17:22:15',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'Koncert',
                'description' => 'Dan: Utorak
Početak: 21:00
Gost: Jala Brat & Buba Corelli',
                'image' => 'public/events/o3CDRXUhCfE19DL4DoJfUZ0NjFoOfSSp9P0zPF9Z.jpg',
                'created_at' => '2023-01-25 17:20:13',
                'updated_at' => '2023-01-25 17:20:20',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Last Dance',
                'description' => 'Dan: Nedjelja
Početak: 21:00
Gost: DJ Shommy',
                'image' => 'public/events/vBkwpWbplYMX7BLJOAVi1GY3XDJR2x0I94ytUQ5n.jpg',
                'created_at' => '2023-01-25 17:21:55',
                'updated_at' => '2023-01-25 17:21:55',
            ),
        ));
        
        
    }
}