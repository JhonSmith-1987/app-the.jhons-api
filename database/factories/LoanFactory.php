<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'detail' => $this->faker->sentence(),
            'value_loan' => $this->faker->numberBetween(100, 1000),
            'percentage' => $this->faker->randomFloat(2, 0, 100),
            'total_loan' => $this->faker->numberBetween(1000, 5000),
            'payment' => $this->faker->numberBetween(100, 500),
            'provider_id' => function () {
                return \App\Models\Provider::factory()->create()->id;
            },
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
