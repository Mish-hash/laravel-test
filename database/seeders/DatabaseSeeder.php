<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Episode;
use App\Models\Quote;
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
        // \App\Models\User::factory(10)->create();
        Episode::factory()->count(30)->create();
        Character::factory()->count(100)->create();
        Quote::factory()->count(500)->create();
    }
}
