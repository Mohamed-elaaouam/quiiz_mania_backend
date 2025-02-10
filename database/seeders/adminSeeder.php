<?php

namespace Database\Seeders;

use App\Models\admin;
use Database\Factories\adminFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::factory()->create();
}
}