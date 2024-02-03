<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anime_list';

    public function scopeFilter($query, array $filters) {
        // Filter by search
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('alt_title', 'like', '%' . request('search') . '%');
        } else {    // Filter by airing season
            $airing_season = 'Winter 2024'; // Default airing season
            if($filters['season'] ?? false && $filters['year'] ?? false){
                $airing_season = $filters['season'] . " " . $filters['year'];
            }
            $query->where('airing_season', 'like', '%' . $airing_season . '%');
        }
    }
}
