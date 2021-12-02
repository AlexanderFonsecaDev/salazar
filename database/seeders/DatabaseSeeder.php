<?php

namespace Database\Seeders;

use App\Models\Article;
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
        \App\Models\User::factory()->create([
            'name' => 'Dante',
            'email' => 'devalexfonseca@gmail.com',
        ]);

        Article::factory()->count(20)->create();
    }
}
