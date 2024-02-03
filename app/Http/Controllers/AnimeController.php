<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    // Show all anime
    public function index() {
        // get title for bar
        $bar_title = 'Winter 2024'; // default title
        if(request('search') ?? false) {
            $bar_title = 'Search Results for ' . '"' . request('search') . '"';
        }
        if(request('season') ?? false && request('year') ?? false) {
            $bar_title = request('season') . ' ' . request('year');
        }

        return view('anime.index', [
            'anime_list' => Anime::filter(request(['search', 'season', 'year']))->get(),
            'bar_title' => $bar_title
        ]);
    }

    // Show single anime
    public function show(Anime $anime) {
        return view('anime.show', [
            'anime' => $anime
        ]);
    }
}
