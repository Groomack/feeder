<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AnimalCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(20)->create();
        AnimalCategory::factory()->count(5)->create();
    }
}
