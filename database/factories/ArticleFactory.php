<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 5),
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
