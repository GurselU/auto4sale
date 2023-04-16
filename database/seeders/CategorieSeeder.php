<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "categorie"=> "neuf",
            "name"=> "Neuf",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "récent",
            "name"=> "Récent",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "occasion",
            "name"=> "Occasion",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "accidenté",
            "name"=> "Accidenté",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "mecanicalProblem",
            "name"=> "Problème mécanique",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "withProblem",
            "name"=> "Avec problème",
            "created_at"=>now()
        ]);
        DB::table("categories")->insert([
            "categorie"=> "forPieces",
            "name"=> "Pour Pièces",
            "created_at"=>now()
        ]);
    }
}