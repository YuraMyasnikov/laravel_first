<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Мобильные телефоны',
                'code'=>'mobile',
                'description'=>'В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!',
                'image'=>'category/mobile.jpg',
            ],
            [
                'name'=>'Портативная техника',
                'code'=>'portable',
                'description'=>'Раздел с портативной техникой.',
                'image'=>'category/portable.jpg',
            ],
            [
                'name'=>'Бытовая техника',
                'code'=>'technicks',
                'description'=>'Раздел с бытовой техникой',
                'image'=>'category/technicks.jpg',
            ],
        ]);
    }
}
