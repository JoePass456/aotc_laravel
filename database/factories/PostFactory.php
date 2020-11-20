<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'ref_user_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'post' => $this->faker->sentence($nbWords = 6),
            'ref_parent_post' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
