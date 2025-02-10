<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user=User::factory()->create();
        return [
            "name"=> $this->faker->name,
            "email"=> $this->faker->safeEmail,
            "user_id"=> $user->id,
            //
        ];
    }
}
