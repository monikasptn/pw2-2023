<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;

    
    protected $fillable = ['judul', 'poster', 'genre_id', 'negara', 'tahun', 'rating'];

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'Crash Landing on You',
            'poster' => 'image.png',
            'genre' => 'Komedi romantis',
            'negara' => 'Korea Selatan',
            'tahun' => 2019,
            'rating' => 8.7,
        ],
        [
            'no' => 2,
            'judul' => 'Descendants of the Sun',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea Selatan',
            'tahun' => 2016,
            'rating' => 8.2,
        ],
        [
            'no' => 3,
            'judul' => 'Emily in Paris',
            'poster' => 'image.png',
            'genre' => 'Roman',
            'negara' => 'Amerika Serikat',
            'tahun' => 2020,
            'rating' => 6.9,
        ],
        [
            'no' => 4,
            'judul' => 'Reply 1988',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea Selatan',
            'tahun' => 2015,
            'rating' => 9.2,
        ],
        [
            'no' => 5,
            'judul' => 'The Glory',
            'poster' => 'image.png',
            'genre' => 'Thriller',
            'negara' => 'Korea Selatan',
            'tahun' => 2022,
            'rating' => 8.1,
        ],
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
