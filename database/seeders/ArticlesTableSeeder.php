<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
             'user_id' => 1,
             'category_id' => 1,
             'title' => 'hoge',
             'content' => 'test'
            ],
            [
             'user_id' => 1,
             'category_id' => 1,
             'title' => 'hoge',
             'content' => 'test2'
            ],
            [
             'user_id' => 1,
             'category_id' => 1,
             'title' => 'hoge',
             'content' => 'test3'
            ]
        ]);
    }
}
