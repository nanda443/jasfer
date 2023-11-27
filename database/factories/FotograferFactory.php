<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fotografer>
 */
class FotograferFactory extends Factory
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
            'nama' => fake()->name(),
            'provider_id' => fake()->numberBetween(1, 5),
            'deskripsi' => fake()->sentence(10),
            'harga' => fake()->randomNumber(6, true),
            'foto' => 'https://source.unsplash.com/500x500/?Photographer'
        ];
    }
}
