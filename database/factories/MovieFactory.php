<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase(),
            'director' =>  $this->faker->name,
            'imgUrl' => $this->faker->url,
            'duration' => $this->faker->numberBetween(50, 200),
            'releaseDate' => $this->faker->date(),
            'genre' => $this->faker->randomElement(['action', 'drama', 'horror', 'comedy']),
        ];
    }
}
