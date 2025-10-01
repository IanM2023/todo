<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
            ->has(Todo::factory()->count(1000))
            ->create([
            'name' => 'SuperTips',
            'email' => 'supertips@todo.test',
        ]);
        
        User::factory()
            ->count(1000)
            ->has(Todo::factory()->count(10))
            ->create();
    }
}
