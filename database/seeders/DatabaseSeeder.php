<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Anime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Anime::create([
            'title' => 'Ore dake Level Up na Ken',
            'alt_title' => 'Solo Leveling',
            'airing_season' => 'winter 2024'
        ]);

        Anime::create([
            'title' => 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 3rd Season',
            'alt_title' => 'Solo Leveling',
            'airing_season' => 'winter 2024'
        ]);
    }
}
