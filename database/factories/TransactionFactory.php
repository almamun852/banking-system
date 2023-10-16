<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Transaction::class;


    public function definition()
    {
        return [
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'transaction_type' => $this->faker->randomElement(['Deposit', 'Withdrawal']),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'fee' => $this->faker->randomFloat(2, 0, 10),
            'date' => $this->faker->dateTimeThisMonth, // Adjust as needed
        ];
    }
}
