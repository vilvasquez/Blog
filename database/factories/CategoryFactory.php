<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'slug' =>Str::slug($name)
        ];
    }
}
