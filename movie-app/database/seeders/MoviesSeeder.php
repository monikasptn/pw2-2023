<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre_id' => '1',
            'negara' => 'Korea Selatan',
            'tahun' => 2019,
            'rating' => 8.7,
        ]);

        Movie::create([
            'judul' => 'Descendants of the Sun',
            'poster' => 'image.png',
            'genre_id' => '2',
            'negara' => 'Korea Selatan',
            'tahun' => 2016,
            'rating' => 8.2,
        ]);

        Movie::create([
            'judul' => 'Emily in Paris',
            'poster' => 'image.png',
            'genre_id' => '3',
            'negara' => 'Amerika Serikat',
            'tahun' => 2020,
            'rating' => 6.9,
        ]);

        Movie::create([
            'judul' => 'Reply 1988',
            'poster' => 'image.png',
            'genre_id' => '2',
            'negara' => 'Korea Selatan',
            'tahun' => 2015,
            'rating' => 9.2,
        ]);

        Movie::create([
            'judul' => 'The Glory',
            'poster' => 'image.png',
            'genre_id' => '5',
            'negara' => 'Korea Selatan',
            'tahun' => 2022,
            'rating' => 8.1,
        ]);
    }
}
