<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert([
            "contact"=> "email",
            "name"=> "Email",
            "created_at"=>now()
        ]);
        DB::table("contacts")->insert([
            "contact"=> "sms",
            "name"=> "Sms",
            "created_at"=>now()
        ]);
    }
}
