<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'account_type' => $this->faker->randomElement(['Individual', 'Business']),
            'balance' => $this->faker->randomFloat(2, 0, 10000),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('123Abc@'), // You can customize the password
            'remember_token' => Str::random(10),
        ];
    }


}
