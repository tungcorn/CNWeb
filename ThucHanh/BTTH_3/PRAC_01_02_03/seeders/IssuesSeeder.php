<?php

namespace Database\Seeders;

use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $computer_ids = Computer::pluck('id')->toArray();
        for ($i = 0; $i < 5; $i++) {
            Issue::create([
                'computer_id' => $faker->randomElement($computer_ids),
                'reported_by' => $faker->name,
                'reported_date' => $faker->date,
                'description' => $faker->text,
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
            ]);
        }
    }
}
