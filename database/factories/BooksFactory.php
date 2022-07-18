<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Book '.$this->faker->name(),
            'author_id'=> $this->faker->numberBetween(1,5)
        ];
    }
}
