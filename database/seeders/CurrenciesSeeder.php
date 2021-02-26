<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class CurrenciesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            DB::table('currencies')->insert([
                [
                    'code' => 'RUB',
                    'symbol' => '₽',
                    'main' => '1',
                    'ratio' => '1',
                ],
                [
                    'code' => 'USA',
                    'symbol' => '$',
                    'main' => '0',
                    'ratio' => '72',
                ],
                [
                    'code' => 'EUR',
                    'symbol' => '€',
                    'main' => '0',
                    'ratio' => '90',
                ],
            ]);
        }
    }
