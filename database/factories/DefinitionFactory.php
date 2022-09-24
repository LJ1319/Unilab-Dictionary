<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DefinitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'word_id' => $this->faker->randomDigitNot(0),
            'definition' => $this->faker->sentence(),
            'approved' => $this->faker->boolean(),
        ];
    }
}
