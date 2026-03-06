<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD

        $this->call([
            // BookSeeder::class === Database\Seeder\BookSeeder
           AuthorSeeder::class, 
           BookSeeder::class,
            
=======
        // BookSeeder::class === Database\Seeders\BookSeeder
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
>>>>>>> 4eb84199378c43c2cbf9232d011892d07b5179b6
        ]);
    }
}
