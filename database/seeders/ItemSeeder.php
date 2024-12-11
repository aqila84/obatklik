<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'itemName'=>'Vitamin B3',
                'itemPhoto'=> 'item.svg',
                'itemDescription'=> 'test description lskjdflks',
                'itemPrice'=> 25000
            ],
            [
                'itemName'=>'Ambroxol',
                'itemPhoto'=> 'ambroxol.png',
                'itemDescription'=> 'test description lskjdflks',
                'itemPrice'=> 31000
            ],
            [
                'itemName'=>'Lactacyd Baby',
                'itemPhoto'=> 'lactacydBaby.png',
                'itemDescription'=> 'test description lskjdflks',
                'itemPrice'=> 17000
            ],
            [
                'itemName'=>'Obat Title',
                'itemPhoto'=> 'item.svg',
                'itemDescription'=> 'test description lskjdflks',
                'itemPrice'=> 15000
            ],
        ];

        DB::table('items')->insert($datas);
    }
}
