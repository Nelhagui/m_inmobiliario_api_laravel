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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(147)->create();
        \App\Models\Category::factory(30)->create();
        \App\Models\Comment::factory(150)->create();
        \App\Models\CategoryPost::factory(150)->create();
        // $this->call(FirstDataSeeder::class);
    }
}
