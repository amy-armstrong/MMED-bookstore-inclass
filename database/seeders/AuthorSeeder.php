<?php

namespace Database\Seeders;


use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory6()->count(10)->create();
        Author::factory()
            ->count(10)
            ->create();
    }
}
