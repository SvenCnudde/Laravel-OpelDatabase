<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Carmodel;
use App\Models\Brand;
use App\Models\Part;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            User::truncate();
            Brand::truncate();
            Carmodel::truncate();
            Part::truncate();

            User::factory()->count(2)->create();
            Brand::factory()->count(10)->create();
            Carmodel::factory()->count(20)->create();
            Part::factory()->count(200)->create();



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
