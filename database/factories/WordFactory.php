<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'word' => $this->faker->word(),
            'comment' => $this->faker->sentence(3),
            'example' => $this->faker->word(),
            'active' => $this->faker->boolean()
        ];
    }
}
