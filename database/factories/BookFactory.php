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
           'author_id' => $author->id;
            'publisher_id' => null
        ];
    }
}