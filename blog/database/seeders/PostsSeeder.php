<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "title"=>'Como cuidar las Suculentas',
            "description"=>'Aprende como cuidar y como regarlas',
            "img"=>'defaul.jpg',
            "content"=>'Contenido del post',
            "likes"=>0,
            "slug"=>'Como-Cuidar-Suculentas',
            "user_id"=>1,
            "category_id"=>1,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
         DB::table('posts')->insert([
            "title"=>'Como cuidar los pinos',
            "description"=>'Aprende como cuidar y como regarlas',
            "img"=>'defaul.jpg',
            "content"=>'Contenido del post',
            "likes"=>0,
            "slug"=>'Como-Cuidar-Los-Pinos',
            "user_id"=>1,
            "category_id"=>1,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
