<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\MediaUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MediaUser>
 */
class MediaUserFactory extends Factory
{
    protected $model= MediaUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username'=> $this->faker->userName(),
            'comment_id' => $this->faker->randomElement(Comment::pluck('id')),
        ];
    }
}
