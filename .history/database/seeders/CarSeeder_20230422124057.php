<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("cars")->insert([
        //     "seller_id"=> "1",
        //     "categorie_id" => "3",
        //     "mark"=> "Mercedes",
        //     "model"=> "C200 cdi",
        //     "miniDescription"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.",
        //     "mileage"=> 75000,
        //     "power"=> 122,
        //     "engineSize"=> 2000,
        //     "created_at"=>now()
        // ]);
        // DB::table("cars")->insert([
        //     "seller_id"=> "2",
        //     "categorie_id" => "1",
        //     "mark"=> "BMW",
        //     "model"=> "320d",
        //     "miniDescription"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.",
        //     "mileage"=> 92000,
        //     "power"=> 143,
        //     "engineSize"=> 1600,
        //     "created_at"=>now()
        // ]);
        // DB::table("cars")->insert([
        //     "seller_id"=> "3",
        //     "categorie_id" => "5",
        //     "mark"=> "Audi",
        //     "model"=> "A4",
        //     "miniDescription"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.",
        //     "mileage"=> 163000,
        //     "power"=> 204,
        //     "engineSize"=> 2996,
        //     "created_at"=>now()
        // ]);
    }
}
