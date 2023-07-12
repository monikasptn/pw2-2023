<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi'];
    
    protected $genres = [
        [
            'no' => 1,
            'genre' => 'Komedi romantis',
            'deskripsi' => 'Genre komedi romantis menggabungkan unsur-unsur komedi yang menggelitik hati dan romantisme yang menghangatkan jiwa.',
        ],
        [
            'no' => 2,
            'genre' => 'Drama',
            'deskripsi' => 'Genre drama adalah genre yang mengeksplorasi emosi manusia, konflik internal, dan situasi kehidupan yang penuh dengan ketegangan.',
        ],
        [
            'no' => 3,
            'genre' => 'Roman',
            'deskripsi' => 'Genre roman adalah genre sastra yang berfokus pada cerita percintaan dan hubungan antarmanusia.',
        ],
        [
            'no' => 4,
            'genre' => 'Komedi',
            'deskripsi' => 'Genre komedi adalah genre yang bertujuan untuk menghibur dan mengundang tawa para penonton atau pembaca.',
        ],
        [
            'no' => 5,
            'genre' => 'Thriller',
            'deskripsi' => 'Genre sastra, film, dan acara televisi yang memiliki banyak subtipe di dalamnya.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
