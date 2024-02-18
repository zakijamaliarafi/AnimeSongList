<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnimeController extends Controller
{
    // Show All Anime
    public function index() {
        // get title for bar, future change note: combine with filter method to avoid DRY
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

    // Show Single Anime
    public function show(Anime $anime) {
        return view('anime.show', [
            'anime' => $anime,
            'op_themes' => DB::table('songs')->where('anime_id', $anime->id)->where('type', 'opening')->get(),
            'ed_themes' => DB::table('songs')->where('anime_id', $anime->id)->where('type', 'ending')->get()
        ]);
    }

    // Show Anime List by Season
    public function seasonAnimeList(string $year, string $period) {
        $airing_season = $period . " " . $year;

        return view('dashboard.show', [
            'anime_list' => DB::table('anime_list')->where('airing_season', $airing_season)->get(),
            'bar_title' => $airing_season
        ]);
    }

    // Show Create Form
    public function create() {
        return view('dashboard.create');
    }

    // Store Anime Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'airing_season' => 'required',
            'poster' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],

        $messages = [
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
        ]);

        $formFields['alt_title'] = $request->input('alt_title');

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('posters', 'public');
        }

        Anime::create($formFields);

        // TODO : return back to dashboard.show (/dashboard/season/{period}/{year})
        return redirect('/dashboard');
    }

    // Show Edit Form
    public function edit(Anime $anime) {
        return view('dashboard.edit', ['anime' => $anime]);
    }

    // Update Anime Data
    public function update(Request $request, Anime $anime) {

        $formFields = $request->validate([
            'title' => 'required',
            'airing_season' => 'required',
            'poster' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],

        $messages = [
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
        ]);

        $formFields['alt_title'] = $request->input('alt_title');

        if($request->hasFile('poster')) {
            if(is_null($anime->poster)){
                $formFields['poster'] = $request->file('poster')->store('posters', 'public');
            } else {
                Storage::disk('public')->delete($anime->poster);
                $formFields['poster'] = $request->file('poster')->store('posters', 'public');
            }
        }

        $anime->update($formFields);

        // TODO : return back to dashboard.show (/dashboard/season/{period}/{year})
        return redirect('/dashboard');
    }

    // Delete Anime
    public function destroy(Anime $anime) {
        Storage::disk('public')->delete($anime->poster);
        $anime->delete();
        return redirect('/dashboard');
    }
}
