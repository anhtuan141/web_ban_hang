<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('articles')->insert([
                'parent_id' => 1,
                'name' => "Article {$i}",
                'slug' => "{$i}",
                'image' => "image {$i}",
                'images' => "images {$i}",
                'image_share' => "image_share {$i}",
                'summary' => '',
                'content' => '',
                'status' => 1,
                'group_id' => 1,
                'keywords' => '',
                'description' => '',
                'title' => ''
            ]);
        }
    }
}
