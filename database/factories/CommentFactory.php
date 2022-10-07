<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(50),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'post_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
