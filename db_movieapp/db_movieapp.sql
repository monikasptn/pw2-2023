-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 01:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movieapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Komedi romantis', 'Genre komedi romantis menggabungkan unsur-unsur komedi yang menggelitik hati dan romantisme yang menghangatkan jiwa.', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(2, 'Drama', 'Genre drama adalah genre yang mengeksplorasi emosi manusia, konflik internal, dan situasi kehidupan yang penuh dengan ketegangan.', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(3, 'Roman', 'Genre roman adalah genre sastra yang berfokus pada cerita percintaan dan hubungan antarmanusia.', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(4, 'Komedi', 'Genre komedi adalah genre yang bertujuan untuk menghibur dan mengundang tawa para penonton atau pembaca.', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(5, 'Thriller', 'Genre sastra, film, dan acara televisi yang memiliki banyak subtipe di dalamnya.', '2023-07-12 02:47:54', '2023-07-12 02:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_12_091346_create_genres_table', 1),
(6, '2023_07_12_091748_create_movies_table', 1),
(7, '2023_07_12_091903_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `negara` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `judul`, `poster`, `genre_id`, `negara`, `tahun`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'The Shawshank Redemption', 'image.png', 1, 'Korea Selatan', 2019, 8.70, '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(2, 'Descendants of the Sun', 'image.png', 2, 'Korea Selatan', 2016, 8.20, '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(3, 'Emily in Paris', 'image.png', 3, 'Amerika Serikat', 2020, 6.90, '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(4, 'Reply 1988', 'image.png', 2, 'Korea Selatan', 2015, 9.20, '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(5, 'The Glory', 'image.png', 5, 'Korea Selatan', 2022, 8.10, '2023-07-12 02:47:54', '2023-07-12 02:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `tanggal_review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `film`, `user`, `rating`, `review`, `tanggal_review`, `created_at`, `updated_at`) VALUES
(1, 'Crash Landing on You', 'monika', 4, 'Cerita Crash Landing on You dimulai ketika Yoon Se-ri (Son Ye-jin), seorang pewaris perusahaan fashion terkenal, secara tak terduga mendarat di wilayah Korea Utara setelah terjebak dalam kecelakaan paralayang.', '31 Desember 2019', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(2, 'Descendants of the Sun', 'zahra', 4, 'Cerita Descendants of the Sun berpusat pada hubungan antara Kapten Yoo Si-jin (Song Joong-ki), seorang anggota pasukan penjaga perdamaian Korea Selatan yang berani, dan Dokter Kang Mo-yeon (Song Hye-kyo), seorang ahli bedah di rumah sakit besar.', '01 Maret 2019', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(3, 'Emily in Paris', 'athaya', 3, 'Cerita Emily in Paris mengikuti perjalanan Emily ketika ia menavigasi kehidupan dan pekerjaannya di Paris. Emily harus beradaptasi dengan budaya baru, bahasa yang berbeda, dan tantangan- tantangan sehari-hari dalam dunia bisnis yang kompetitif.', '08 Oktober 2020', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(4, 'Reply 1988', 'refi', 5, 'Cerita Reply 1988 mengambil latar belakang Seoul pada tahun 1988 dan mengisahkan tentang kehidupan sekelompok keluarga dan teman-teman di lingkungan sekitar mereka.', '14 Februari 2016', '2023-07-12 02:47:54', '2023-07-12 02:47:54'),
(5, 'The Glory', 'lia', 5, 'Review The Glory: naskah, akting dan chemistry para bintang, sinematografi, hingga pesan di dalamnya disampaikan begitu sempurna.', '06 Januari 2023', '2023-07-12 02:47:54', '2023-07-12 02:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
