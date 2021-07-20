<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->catchPhrase,
            'permanent_link' => $this->faker->url,
            'outstanding_image' => $this->faker->imageUrl($width = 640, $height = 480),
            'contents' => $this->faker->text($maxNbChars = 200),
            'tags' => $this->faker->text($maxNbChars = 10),
            'state' => $this->faker->numberBetween($min = 0, $max = 2),
            'published_date' => $this->faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
            'approved_by' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
