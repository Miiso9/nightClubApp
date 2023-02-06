<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Belvedere Vodka',
                'description' => 'Zemlja porijekla: Poljska
Udio alkohola: 40 %
Boja: Bistra neutralna.',
                'image' => 'public/menus/Zp0HL2ox8tOtSvALtwfSWp5pRlgWvc8AyWj0TVlA.jpg',
                'price' => '100.00',
                'created_at' => '2023-01-24 14:04:36',
                'updated_at' => '2023-01-25 17:12:12',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Jack Daniel\'s',
                'description' => 'Zemlja porijekla: US
Udio alkohola: 40 %
Boja: Whiskey dragocijenog jantara.',
                'image' => 'public/menus/86KVAW2y90sNXTPgf2fa2U2BEuzzHHqL6AKAEEB4.jpg',
                'price' => '100.00',
                'created_at' => '2023-01-25 17:13:06',
                'updated_at' => '2023-01-25 17:13:06',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Chivas Regal',
                'description' => 'Zemlja Prorijekla: Škotska
Udio alkohola: 40%
Boja: Zračeći topli jantar.',
                'image' => 'public/menus/4gWm59QUHoCwsonDM5CdlIQ50ObIosrkK3MtN6mI.jpg',
                'price' => '150.00',
                'created_at' => '2023-02-04 23:31:55',
                'updated_at' => '2023-02-04 23:33:27',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Gin Mare',
                'description' => 'Porijeklo: Španjolska
Alkohol: 42,7 %
Miris: Travnat, suhi miris mediteranskog raslinja bogat citrusima.
Okus: bogat, slankast',
                'image' => 'public/menus/ZrR7pdZ4YQ6WH4S9FR8U61cx0PgJq6wXeHAR6i8P.jpg',
                'price' => '150.00',
                'created_at' => '2023-02-04 23:35:11',
                'updated_at' => '2023-02-04 23:43:26',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Moet',
                'description' => 'Zemlja porijekla: Francuska
Udio alkohola: 12 %
Boja: Slamnato žuta sa zlatnim odsjajima.',
                'image' => 'public/menus/Bv24ENbQY88zQgpp7wpCg7nsAwm3aWbTcbNeBIHo.jpg',
                'price' => '250.00',
                'created_at' => '2023-02-04 23:36:00',
                'updated_at' => '2023-02-04 23:36:00',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Gray goose',
                'description' => 'Zemlja porijekla: Francuska
Udio alkohola: 40 %
Boja: Kristalno bistra boja.',
                'image' => 'public/menus/0Hj5JlwpW4gwOCjxo3m11pGpTA6auO29bODq4FnR.jpg',
                'price' => '100.00',
                'created_at' => '2023-02-04 23:36:57',
                'updated_at' => '2023-02-04 23:36:57',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Stock',
                'description' => 'Stock 84 Riserva postupno su poboljšavali stručnjaci za miješanje okusa inspirirani originalnom recepturom',
                'image' => 'public/menus/HCYzQt6j78FoVEdkWkrSm3Ko80LCRUYMab6UT206.jpg',
                'price' => '70.00',
                'created_at' => '2023-02-04 23:37:48',
                'updated_at' => '2023-02-04 23:43:42',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Dom Perignon',
                'description' => 'Zemlja porijekla: Francuska
Udio alkohola: 12,5 %
Boja: Slamnato žuta sa zlatnim i zelenkastim odsjajima.',
                'image' => 'public/menus/Vu621TsYOjRTIIZ5zZ9UZGAFPI9kP5ukjLVtmOXn.jpg',
                'price' => '350.00',
                'created_at' => '2023-02-04 23:38:45',
                'updated_at' => '2023-02-04 23:38:45',
            ),
        ));
        
        
    }
}