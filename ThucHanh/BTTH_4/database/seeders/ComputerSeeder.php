<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Computer::create([
                'computer_name' => $faker->company,
                'model' => $faker->company,
                'operating_system' => $faker->company,
                'processor' => $faker->company,
                'memory' => $faker->randomElement([16, 32, 64]),
                'available' => $faker->boolean(),
            ]);
        }
    }
}
