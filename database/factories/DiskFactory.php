<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disk>
 */
class DiskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->sentence(3),
            'artist' => $this->faker->name(),
            'year' => $this->faker->year(),
            'genre' => $this->faker->randomElement(['Rock', 'Pop', 'Jazz', 'Metal', 'Blues']),
        ];
    }
}
