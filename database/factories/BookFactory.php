<?php


class BookFactory extends Factory
{
    /**
     * define models default state
     * 
     * @return array
     */

    public function definition()
    {
        $author = Author::inRandomOrder()->first();
        return[
        // newer larabel version use fake() insead of $this->faker
        //'title' =>fake()->name
            'title'=>$this->name,
           // 'author_id' => Author::inRandomOrder()->id,
         'author_id' => $author->id,
            'publisher_id' => null
        ];
    }
}

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author = Author::inRandomOrder()->first();
        return [
            // newer laravel versions use fake() instead of $this->faker
            // 'title' => fake()->name
            'title' => $this->faker->name,
            // 'author_id' => Author::inRandomOrder()->first()->id,
            'author_id' => $author->id,
            'publisher_id' => null,
        ];
    }
}
