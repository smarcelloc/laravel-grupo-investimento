<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::all('id')),
            'group_id' => $this->faker->randomElement(Group::all('id')),
            'permission' => $this->faker->randomElement(['admin', 'user']),
        ];
    }
}
