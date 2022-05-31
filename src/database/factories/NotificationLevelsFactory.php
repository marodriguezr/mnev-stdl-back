<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NotificationLevels>
 */
class NotificationLevelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->randomElement(['Urgente', '1', '2']),
            'color' => $this->faker->randomElement(['990000', '568956', '478596'])
        ];
    }
}
