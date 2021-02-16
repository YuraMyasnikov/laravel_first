<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'status'  => 1,
                'name'    => 'Юра',
                'phone'   => '89501850053',
                'user_id' => '3',
                'created_at' => '2021-02-16 14:10:25'
            ],[
                'status'  => 1,
                'name'    => 'Юра',
                'phone'   => '89501850053',
                'user_id' => '3',
                'created_at' => '2021-02-16 14:10:25'
            ],[
                'status'  => 1,
                'name'    => 'Юра',
                'phone'   => '89501850053',
                'user_id' => '3',
                'created_at' => '2021-02-16 14:10:25'
            ],
        ]);
    }

}
