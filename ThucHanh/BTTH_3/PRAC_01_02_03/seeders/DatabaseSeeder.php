<?php

namespace Database\Seeders;

use App\Models\Computer;
use App\Models\User;
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
        $this->call(
            [
                MedicinesSeeder::class,
                SalesSeeder::class,
                ClassesSeeder::class,
                StudentSeeder::class,
                ComputersSeeder::class,
                IssuesSeeder::class,
            ]
        );
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
