<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Anime;
use App\Models\Song;
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

        Song::create([
            'anime_id' => 1,
            'title' => 'LEveL',
            'artist' => 'SawanoHiroyuki[nZk], TOMORROW X TOGETHER',
            'url' => 'https://open.spotify.com/track/0Zp9WOkXX8xZS8QOhtdQ5k?si=1662b91f9ce3437d',
            'type' => 'opening'
        ]);

        Song::create([
            'anime_id' => 1,
            'title' => 'request',
            'artist' => 'krage',
            'url' => 'https://open.spotify.com/track/63MlPFQQ7PNGiiHMnVrfw2?si=8714243d8c01457a',
            'type' => 'ending'
        ]);

        Anime::create([
            'title' => 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 3rd Season',
            'alt_title' => 'Classroom of the Elite III',
            'airing_season' => 'Winter 2024'
        ]);

        Song::create([
            'anime_id' => 2,
            'title' => 'Minor Piece',
            'artist' => 'ZAQ',
            'url' => 'https://open.spotify.com/track/43vkJIKACSolK6cbPJknEL?si=48afbfe7d6f143a4',
            'type' => 'opening'
        ]);

        Song::create([
            'anime_id' => 2,
            'title' => 'Konse Daikakumei',
            'artist' => 'Yui Ninomiya',
            'url' => 'https://open.spotify.com/track/5cDdNqff2mAutAWAM2Zs2c?si=93b846f1de994688',
            'type' => 'ending'
        ]);

        Anime::create([
            'title' => 'Sousou no Frieren',
            'alt_title' => "Frieren: Beyond Journey's End",
            'airing_season' => 'Fall 2023'
        ]);

        Song::create([
            'anime_id' => 3,
            'title' => 'Yuusha',
            'artist' => 'YOASOBI',
            'url' => 'https://open.spotify.com/track/4LjIQmt1t6NjpM0tpttzjo?si=8599692b55974936',
            'type' => 'opening'
        ]);

        Song::create([
            'anime_id' => 3,
            'title' => 'Haru',
            'artist' => 'Yorushika',
            'url' => 'https://open.spotify.com/track/5eY7692tmgHB9dbmq6wa2M?si=7888363b1d2d43ef',
            'type' => 'opening'
        ]);

        Song::create([
            'anime_id' => 3,
            'title' => 'Anytime Anywhere',
            'artist' => 'milet',
            'url' => 'https://open.spotify.com/track/7FeEiAWqWScpMFnlLSUvX2?si=f765c86468ea4b75',
            'type' => 'ending'
        ]);

        Song::create([
            'anime_id' => 3,
            'title' => 'bliss',
            'artist' => 'milet',
            'url' => 'https://open.spotify.com/track/3UMRhdJ5UDK68YiW0AqDtH?si=a7e6a0a047914342',
            'type' => 'ending'
        ]);

        Anime::create([
            'title' => 'Spy x Family Season 2',
            'alt_title' => 'Spy x Family Season 2',
            'airing_season' => 'Fall 2023'
        ]);
    }
}
