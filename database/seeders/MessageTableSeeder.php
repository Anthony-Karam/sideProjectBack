<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'name' => Str::random(5),
                'title' => Str::random(8),
                'content' => Str::random(50),
                'email' => Str::random(10) . '@gmail.com',

            ],
            [
                'name' => Str::random(5),
                'title' => Str::random(8),
                'content' => Str::random(50),
                'email' => Str::random(10) . '@gmail.com',

            ],
            [
                'name' => Str::random(5),
                'title' => Str::random(8),
                'content' => Str::random(50),
                'email' => Str::random(10) . '@yahoo.com',

            ],
            [
                'name' => Str::random(5),
                'title' => Str::random(8),
                'content' => Str::random(50),
                'email' => Str::random(10) . '@hotmail.com',

            ],
        ]);
    }
}
