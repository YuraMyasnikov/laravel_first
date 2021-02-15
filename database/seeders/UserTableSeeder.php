<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'admin',
                'email'    => 'admin@mail.ru',
                'password' => bcrypt('admin@mail.ru'),
                'is_admin' => 1,
            ],
            [
                'name'     => 'user',
                'email'    => 'user@mail.ru',
                'password' => bcrypt('user@mail.ru'),
                'is_admin' => 0,
            ],
        ]);
    }
}
