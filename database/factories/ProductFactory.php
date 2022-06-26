<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'description' => $this->faker->text,
            'interest_rate' => $this->faker->numberBetween(0, 1000000),
            'indexer' => $this->faker->word,
            'institution_id' => $this->faker->randomElement(Institution::all('id')),
        ];
    }
}
