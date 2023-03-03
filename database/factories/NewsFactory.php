<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = News::class;

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
//        $image = 'https://thechive.com/wp-content/uploads/2019/12/person-hilariously-photoshops-animals-onto-random-things-xx-photos-8.jpg?attachment_cache_bust=3136470&quality=85&strip=info&w=400';

        return [
            'title' => $this->faker->title.' '.$this->faker->name,
            'content' => $this->faker->text,
            'views' => random_int(0, 1000),
            'likes' => random_int(0, 1000),
            'image' => $this->faker->image,
        ];
    }
}
