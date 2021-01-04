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
            'uuid'      => $this->faker->uuid,
            'user_id'   => User::factory(),
            'title'     => $this->faker->text(50),
            'caption'   => $this->faker->realText(500)
        ];
    }
}
