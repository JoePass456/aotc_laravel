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
       \App\Models\Post::factory(20)->create();
       \App\Models\User::factory(20)->create();
       \App\Models\Like::factory(20)->create();
    }
}
