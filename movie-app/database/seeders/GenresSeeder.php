<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Genre::create([
                'nama' => 'Komedi romantis',
                'deskripsi' => 'Genre komedi romantis menggabungkan unsur-unsur komedi yang menggelitik hati dan romantisme yang menghangatkan jiwa.',
            ]);
    
            Genre::create([
                'nama' => 'Drama',
                'deskripsi' => 'Genre drama adalah genre yang mengeksplorasi emosi manusia, konflik internal, dan situasi kehidupan yang penuh dengan ketegangan.',
            ]);
    
            Genre::create([
                'nama' => 'Roman',
                'deskripsi' => 'Genre roman adalah genre sastra yang berfokus pada cerita percintaan dan hubungan antarmanusia.',
            ]);

            Genre::create([
                'nama' => 'Komedi',
                'deskripsi' => 'Genre komedi adalah genre yang bertujuan untuk menghibur dan mengundang tawa para penonton atau pembaca.',
            ]);

            Genre::create([
                'nama' => 'Thriller',
                'deskripsi' => 'Genre sastra, film, dan acara televisi yang memiliki banyak subtipe di dalamnya.',
            ]);
        }
    }
}