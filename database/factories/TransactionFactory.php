<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $group_user = $this->faker->randomElement(GroupUser::all('user_id', 'group_id'));

        return [
            'user_id' => $group_user['user_id'],
            'group_id' => $group_user['group_id'],
            'product_id' => $this->faker->randomElement(Product::all('id')),
            'type' => $this->faker->word,
            'amount' => $this->faker->numberBetween(1, 300000),
        ];
    }
}
