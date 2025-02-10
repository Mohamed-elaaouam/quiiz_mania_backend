<?php

namespace Database\Seeders;

use App\Models\quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class quizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        quiz::factory()->count(10)->create();
    }
}
