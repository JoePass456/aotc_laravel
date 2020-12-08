<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Post::factory(10)->create();
       \App\Models\User::factory(10)->create();
       \App\Models\Like::factory(10)->create();
    }
}
