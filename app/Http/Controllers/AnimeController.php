<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    // Show all anime
    public function index() {
        return view('anime.index', [
            'anime_list' => Anime::all()
        ]);
    }

    // Show single anime
    public function show(Anime $anime) {
        return view('anime.show', [
            'anime' => $anime
        ]);
    }
}
