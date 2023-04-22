<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorieSeeder::class,
            ChassiSeeder::class,
            ContactSeeder::class,
            // SellerSeeder::class,
            CarSeeder::class,
            RoleSeeder::class,
            CounterSeeder::class,
            GearboxSeeder::class,
            EmissionClassSeeder::class,
            CarOriginSeeder::class,
            ]);
    }
}
