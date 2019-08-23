<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Bread',
                'price' => 3,
            ],
            [
                'name' => 'Cereal',
                'price' => 6,
            ],
            [
                'name' => 'Candy',
                'price' => 10,
            ]
        ]);
    }
}
