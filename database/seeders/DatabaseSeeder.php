<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Conference;
use App\Models\Talk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()
            ->has(Talk::factory()->count(5))
            ->create([
                'name' => 'ebenezer',
                'email' => 'ebenezer@example.com',

            ]);

        Conference::factory()->count(5)->create();
    }
}
