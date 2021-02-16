<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            [
                'order_id'   => 1,
                'product_id' => 1,
                'count'      => 1,
                'created_at' => '2021-02-16 14:10:25'
            ],
        ]);
    }
}
