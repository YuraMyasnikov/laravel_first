<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Valute;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderProductTableSeeder::class);
        $this->call(CurrenciesSeeder::class);
    }
}
