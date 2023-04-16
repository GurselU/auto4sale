<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmissionClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emission_classes')->insert([
            "class"=>"euro4D",
            "name"=>"Euro 4 Diesel"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro5D",
            "name"=>"Euro 5 Diesel"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro6D",
            "name"=>"Euro 6 Diesel"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro3E",
            "name"=>"Euro 3 Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro4E",
            "name"=>"Euro 4 Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro5E",
            "name"=>"Euro 5 Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"euro6E",
            "name"=>"Euro 6 Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"mildHybriDiesel",
            "name"=>"Mild Hybrid Diesel"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"mildHybridEssence",
            "name"=>"Mild Hybrid Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"PlugInHybridDiesel",
            "name"=>"Plug in Hybrid Diesel"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"PlugInHybridEssence",
            "name"=>"Plug in Hybrid Essence"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"electric",
            "name"=>"Electrique"
        ]);
        DB::table('emission_classes')->insert([
            "class"=>"other",
            "name"=>"Autres"
        ]);
    }
}
