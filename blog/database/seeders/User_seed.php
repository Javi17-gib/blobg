<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Javier',
            'email' => 'Javier@gmail.com',
            'password' =>Hash::make('123'),
            'nickname' => 'admin',
            'img'=> 'defaul.jpg',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
        for($i=0;$i<50;$i++){
           DB::table('Users')->insert([
            'name' => 'Admin'.$i,
            'email' => 'admin'.$i.'@gmail.com',
            'password' =>Hash::make('123'),
            'nickname' => 'admin'.$i,
            'img'=> 'defaul.jpg',
            "created_at"=>date('Y-m-d h:m:s')
        ]);  
        }
       
    }
}
