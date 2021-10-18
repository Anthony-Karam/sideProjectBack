<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('items')->insert([
            [
                'name' => Str::random(5),
                'price' => $faker->numerify('###'),
                'description' => Str::random(50),
                'image' => Str::random(50),
                'category_id' => '3'
            ], [
                'name' => Str::random(5),
                'price' => $faker->numerify('###'),
                'description' => Str::random(50),
                'image' => Str::random(50),
                'category_id' => '1'
            ], [
                'name' => Str::random(5),
                'price' => $faker->numerify('###'),
                'description' => Str::random(50),
                'image' => Str::random(50),
                'category_id' => '2'
            ],


            [
                'name' => Str::random(5),
                'price' => $faker->numerify('###'),
                'description' => Str::random(50),
                'image' => Str::random(50),
                'category_id' => '2'

            ]
        ]);
    }
}
