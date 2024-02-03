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
            'airing_season' => 'Winter 2024'
        ]);

        Anime::create([
            'title' => 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 3rd Season',
            'alt_title' => 'Classroom of the Elite III',
            'airing_season' => 'Winter 2024'
        ]);

        Anime::create([
            'title' => 'Sousou no Frieren',
            'alt_title' => "Frieren: Beyond Journey's End",
            'airing_season' => 'Fall 2023'
        ]);

        Anime::create([
            'title' => 'Spy x Family Season 2',
            'alt_title' => 'Spy x Family Season 2',
            'airing_season' => 'Fall 2023'
        ]);
    }
}
