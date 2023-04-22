<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=> "Gursel Unlu",
            "role_id"=> 1,
            "email"=> "gursel_unlu@hotmail.com",
            'password' => Hash::make('molengeek'),
            "company"=> "GRS Network",
            "vat"=> "0540.859.429",
            "adres"=> "Lichtelarestraat",
            "zipcode"=> "9080",
            "country"=> "Belgie",
            "phone"=> "0471926597",
            "maxYear"=> 30,
            "maxBudget"=> 1000000,
            "created_at"=>now()
        ]);
        // DB::table("users")->insert([
        //     "name"=> "Murat",
        //     "email"=> "gursel_unluu@hotmail.com",
        //     'password' => Hash::make('molengeek'),
        //     "company"=> "Auto Direct",
        //     "vat"=> "0533.740.025",
        //     "adres"=> "Rue Rogier 224",
        //     "zipcode"=> "1030",
        //     "country"=> "Belgique",
        //     "phone"=> "0471926597",
        //     "maxYear"=> 12,
        //     "maxBudget"=> 25000,
        //     "created_at"=>now()
        // ]);
        // DB::table("users")->insert([
        //     "email"=> "hanim__yilmaz@hotmail.com",
        //     'password' => Hash::make('molengeek'),
        //     "company"=> "Cars & Services Kortenberg",
        //     "vat"=> "0761.633.310",
        //     "adres"=> "Leuvensesesteenweg 62",
        //     "zipcode"=> "3070",
        //     "country"=> "Belgique",
        //     "phone"=> "0471926597",
        //     "maxYear"=> 8,
        //     "maxBudget"=> 40000,
        //     "created_at"=>now()
        // ]);
        // DB::table("users")->insert([
        //     "email"=> "gurselunlu@gmail.com",
        //     'password' => Hash::make('molengeek'),
        //     "company"=> "Deal & Drives Motors",
        //     "vat"=> "0722.765.905",
        //     "adres"=> "Steenokkerzeelstraat 30",
        //     "zipcode"=> "1930",
        //     "country"=> "Belgique",
        //     "phone"=> "0471926597",
        //     "maxYear"=> 15,
        //     "maxBudget"=> 20000,
        //     "created_at"=>now()
        // ]);
        // DB::table("users")->insert([
        //     "email"=> "ersinevran20@gmail.com",
        //     "role_id"=> 3,
        //     'password' => Hash::make('molengeek'),
        //     "company"=> "Ersin Evran",
        //     "adres"=> "Chaussée de Jette 111",
        //     "zipcode"=> "1081",
        //     "country"=> "Belgique",
        //     "phone"=> "0497533620",
        //     "maxYear"=> 14,
        //     "maxBudget"=> 10000,
        //     "created_at"=>now()
        // ]);
    }
}