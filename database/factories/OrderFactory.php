<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shipped_at' => $this->faker->dateTimeBetween('-2 years'),
            'total_price' => $this->faker->numberBetween(1000, 50000)
        ];
    }
}
