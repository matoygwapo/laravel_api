<?php

namespace Database\Factories;
use App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    protected $model = Posts::class;
    
    public function definition()
    {
        $title = $this->faker->word();
        $description = $this->faker->sentence();

        return [
            'title'=> $title,
            'description' => $description,
        ];
    }
}
