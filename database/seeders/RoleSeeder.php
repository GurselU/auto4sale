<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "role"=> "admin",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "worker",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "premium",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "verified",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "buyer",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "waiting",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "redList",
            "created_at"=>now()
        ]);
    }
}
