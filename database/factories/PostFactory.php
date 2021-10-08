<?php

namespace Database\Factories;

use App\Models\Post;
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
            "title" => "talentql pipeline program is top notch",
            "excerpt" => "Building on the success of its technical outsourcing and recruitment service",
            "content" => "The program, which is focused on training and upskilling mid-level software engineers across the continent to Senior Software Engineers",
        ];
    }
}
