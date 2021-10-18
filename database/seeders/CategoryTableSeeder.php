<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name' => Str::random(5),
            'image' => Str::random(50)
        ], [
            'name' => Str::random(5),
            'image' => Str::random(50)

        ], [
            'name' => Str::random(5),
            'image' => Str::random(50)

        ]]);
    }
}
