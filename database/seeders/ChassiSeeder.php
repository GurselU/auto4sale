<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChassiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("chassis")->insert([
            "chassi"=> "citadine",
            "name"=> "Citadine",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "cabriolet",
            "name"=> "Cabriolet",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "coupé",
            "name"=> "Coupé",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "berline",
            "name"=> "Berline",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "break",
            "name"=> "Break",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "suv",
            "name"=> "SUV",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "pickUp",
            "name"=> "Pick-Up",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "monospace",
            "name"=> "Monospace",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "utilitaire",
            "name"=> "Utilitaire",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "camion",
            "name"=> "Camion",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "campingCar",
            "name"=> "Camping Car",
            "created_at"=>now()
        ]);
        DB::table("chassis")->insert([
            "chassi"=> "autres",
            "name"=> "Autres",
            "created_at"=>now()
        ]);
    }
}