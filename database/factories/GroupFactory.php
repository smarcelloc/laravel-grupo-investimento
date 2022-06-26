<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'amount' => $this->faker->numberBetween(1, 300000),
            'institution_id' => $this->faker->randomElement(Institution::all('id')),
        ];
    }
}
