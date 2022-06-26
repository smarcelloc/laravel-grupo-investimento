<?php

namespace Database\Factories;

use App\Helpers\Sanitize;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'cpf' => $this->faker->unique()->cpf(false),
            'phone' => Sanitize::onlyNumber($this->faker->areaCode . $this->faker->phone),
            'birth_date' => $this->faker->dateTimeBetween('-100 years', '-10 years'),
            'genro' => $this->faker->boolean(85) ? $this->faker->randomElement(['m', 'f']) : null,
            'status' => $this->faker->boolean(90),
            'permission' => $this->faker->randomElement(['admin', 'user']),
            'notes' => $this->faker->paragraphs($this->faker->numberBetween(1, 5), true),
            'remember_token' => Str::random(10),
        ];
    }
}
