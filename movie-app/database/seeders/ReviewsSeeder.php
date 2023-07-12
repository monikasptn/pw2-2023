<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Crash Landing on You',
            'user' => 'monika',
            'rating' => 4,
            'review' => 'Cerita Crash Landing on You dimulai ketika Yoon Se-ri (Son Ye-jin), seorang pewaris perusahaan fashion terkenal, secara tak terduga mendarat di wilayah Korea Utara setelah terjebak dalam kecelakaan paralayang.',
            'tanggal_review' => '31 Desember 2019',
        ]);

        Review::create([
            'film' => 'Descendants of the Sun',
            'user' => 'zahra',
            'rating' => 4,
            'review' => 'Cerita Descendants of the Sun berpusat pada hubungan antara Kapten Yoo Si-jin (Song Joong-ki), seorang anggota pasukan penjaga perdamaian Korea Selatan yang berani, dan Dokter Kang Mo-yeon (Song Hye-kyo), seorang ahli bedah di rumah sakit besar.',
            'tanggal_review' => '01 Maret 2019',
        ]);

        Review::create([
            'film' => 'Emily in Paris',
            'user' => 'athaya',
            'rating' => 3,
            'review' => 'Cerita Emily in Paris mengikuti perjalanan Emily ketika ia menavigasi kehidupan dan pekerjaannya di Paris. Emily harus beradaptasi dengan budaya baru, bahasa yang berbeda, dan tantangan- tantangan sehari-hari dalam dunia bisnis yang kompetitif.',
            'tanggal_review' => '08 Oktober 2020',
        ]);

        Review::create([
            'film' => 'Reply 1988',
            'user' => 'refi',
            'rating' => 5,
            'review' => 'Cerita Reply 1988 mengambil latar belakang Seoul pada tahun 1988 dan mengisahkan tentang kehidupan sekelompok keluarga dan teman-teman di lingkungan sekitar mereka.',
            'tanggal_review' => '14 Februari 2016',
        ]);

        Review::create([
            'film' => 'The Glory',
            'user' => 'lia',
            'rating' => 5,
            'review' => 'Review The Glory: naskah, akting dan chemistry para bintang, sinematografi, hingga pesan di dalamnya disampaikan begitu sempurna.',
            'tanggal_review' => '06 Januari 2023',
        ]);
    }
}
