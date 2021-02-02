<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YuModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detals')->insert(['name'=>'трусы','parent_id'=>'2','brand'=>'CK','size'=>bcrypt('xxl')]);
    }
}
