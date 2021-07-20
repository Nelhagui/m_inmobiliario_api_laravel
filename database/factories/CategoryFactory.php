<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->text($maxNbChars = 200),
            'slug' => $this->faker->unique()->word,
            // 'parent_id' => "NULL",
            'state' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
