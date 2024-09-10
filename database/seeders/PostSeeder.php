<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = File::get(path:'database/json/new.json');
        // $posts = collect(json_decode($data));

        // $posts->each(function($data){
        //     post::create([
        //         'name'   => $data->name,
        //         'email'  => $data->email,
        //         'age'    => $data->age,
        //         'address'=> $data->address
        //     ]);
        // });

        // post::create([
            // 'name'   => 'Mehboob Ali',
            // 'email'  => 'mehboob@gmail.com',
            // 'age'    => 30,
            // 'address'=> 'Badin'
        // ]);
    }
}
