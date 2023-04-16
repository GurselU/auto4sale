<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GearboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gearboxes')->insert([
            "gearbox"=>"manual",
            "name"=>"Manuelle"
        ]);
        DB::table('gearboxes')->insert([
            "gearbox"=>"automatique",
            "name"=>"Automatique"
        ]);
    }
}
