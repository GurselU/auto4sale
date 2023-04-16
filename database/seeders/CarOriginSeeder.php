<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_origins')->insert([
            "origin"=>"germany",
            "name"=>"Allemagne"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"france",
            "name"=>"France"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"italy",
            "name"=>"Italie"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"japan",
            "name"=>"Japon"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"southkorea",
            "name"=>"Corée du Sud"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"america",
            "name"=>"Amérique"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"unitedkingdom",
            "name"=>"Royaume-Uni"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"sweden",
            "name"=>"Suède"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"supercar",
            "name"=>"Super Car"
        ]);
        DB::table('car_origins')->insert([
            "origin"=>"other",
            "name"=>"Autres"
        ]);
    }
}
