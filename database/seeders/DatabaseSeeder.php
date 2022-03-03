<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            Product_FeatureSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);

    }
}
