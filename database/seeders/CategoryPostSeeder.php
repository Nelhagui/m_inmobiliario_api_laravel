<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class,20)->create()->each(function ($u) {
            $u->Applicant_skill()->associate(factory(App\Applicant_skill::class)->make());
        });
    }
}
