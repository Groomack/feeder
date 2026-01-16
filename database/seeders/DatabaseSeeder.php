<?php

namespace Database\Seeders;

use App\Models\{
    User,
    AnimalCategory,
    Animal,
    Role,
    };
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
        Role::factory()->count(3)->create();
        User::factory()->count(20)->create();
        AnimalCategory::factory()->count(5)->create();
        Animal::factory()->count(30)->create();
    }
}
