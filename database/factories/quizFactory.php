<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quiz>
 */
class quizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // protected $fillable = ["question","choiches","answer"] ;

        return [
            "question"=>$this->faker->text(),
            "choices"=>json_encode([
                
                $this->faker->randomLetter()=>$this->faker->text(),
                 $this->faker->randomLetter()=>$this->faker->text(),
                 $this->faker->randomLetter()=>$this->faker->text(),

             
          ]),
            "answer"=>$this->faker->text(),
            //
        ];
    }
}
