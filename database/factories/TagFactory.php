<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *@return array
     */
        protected $model = Tag::class;



    public function definition()
    {

        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
