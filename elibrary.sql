-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 09:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `filebuku` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `deskripsi`, `kategori`, `jumlah`, `filebuku`, `gambar`, `user`, `created_at`, `updated_at`) VALUES
(6, 'The Search for Wondla', 'The Search for WondLa is a children\'s science fiction fantasy novel by Tony DiTerlizzi published in 2010. It is the first book of the WondLa series.', 'Fiksi', 50, 'books/files/lWoi16DNYgyAXcSgPTo9tX7MuakMUo902Hwg0irY.pdf', 'books/images/OvdE3VWRMXpwy0dPKkTlxm6YNeP3gCUQKIVuSbLd.jpg', 2, '2024-08-10 06:35:02', '2024-08-10 22:10:05'),
(7, 'Le Petit Prince', 'The story follows a young prince who visits various planets, including Earth, and addresses themes of loneliness, friendship, love, and loss.', 'Fiksi', 20, 'books/files/Z2E9k8tMsAPTRgbSVBlSE8M8BYJ0jsPRFeFQqilq.pdf', 'books/images/1ed9jqkY5XYy9XUyOw9mb8tIfu8D4BvzAuqDpTkP.jpg', 2, '2024-08-10 06:36:15', '2024-08-10 06:36:15'),
(8, 'UTBK 2023 KINGS', 'Buku ini dilengkapi dengan soal prediksi dan try out SBMPTN yang akurat sehingga dapat memberikan gambaran kepada siswa tentang soal yang akan diujikan.', 'Sains', 100, 'books/files/dVvP2Lj86mZ6PQUdhKcPqeEpBZCmcKYrNgyo7kE3.pdf', 'books/images/9dr2B1BBPfbXTwj4hP6yvO2naXhWfLvP9795lPCW.jpg', 2, '2024-08-10 06:38:17', '2024-08-10 06:38:17'),
(9, 'The Theory of Everything: The Origin and Fate of the Universe', 'Based on a series of lectures given at Cambridge University, Professor Hawking\'s work introduced the history of ideas about the universe as well as today\'s most important scientific theories about time, space, and the cosmos in a clear, easy-to-understand way.', 'Biografi', 15, 'books/files/335vb2WTLIrpjU5ifQKL3Rg2XgjtjlhT2mGL6LQW.pdf', 'books/images/7VKAXkC6Ud3x0IqFFr22hNTaLP5xUFNLN4SIJh3z.jpg', 2, '2024-08-10 06:39:38', '2024-08-10 06:39:38'),
(10, 'What If I Had Never Tried It: Valentino Rossi The Autobiography', 'Arguably the world’s all-time greatest motorcycle road racing champion, Valentino Rossi is without a doubt the best--and the best-loved--in modern times. In What If I Had Never Tried It he tells his remarkable story for the first time. And as might be expected, the story he tells is fast-paced, full of surprises, action-packed, and always entertaining.', 'Biografi', 46, 'books/files/8geKXCfQ4LUaOb9Nn0IJeZ2vgWAhLnVfWeBHzWHa.pdf', 'books/images/sEQcknhCgcV0Xa7ToHFlqbTtMFyZasF030N5bYSe.jpg', 2, '2024-08-10 06:40:50', '2024-08-10 06:40:50'),
(12, 'Schindler\'s List', 'stunning novel based on the true story of how German war profiteer and factory director Oskar Schindler came to save more Jews from the gas chambers than any other single person during World War II. In this milestone of Holocaust literature, Thomas Keneally, author of Daughter of Mars, uses the actual testimony of the Schindlerjuden—Schindler’s Jews—to brilliantly portray the courage and cunning of a good man in the midst of unspeakable evil.', 'Fiksi', 99, 'books/files/lSIJjxNtSq8IICiwS9lpj6AbDidLGFlV8fpZ9Psg.pdf', 'books/images/AcnLQ8WvwSsbsdAfHLB3qVPMb8ogXjWeLR8OP0Bv.jpg', 1, '2024-08-10 20:02:23', '2024-08-10 20:02:23'),
(13, 'A Short History of Nearly Everything', 'In A Sunburned Country, he confronted some of the most lethal wildlife Australia has to offer. Now, in his biggest book, he confronts his greatest challenge: to understand—and, if possible, answer—the oldest, biggest questions we have posed about the universe and ourselves. Taking as territory everything from the Big Bang to the rise of civilization, Bryson seeks to understand how we got from there being nothing at all to there being us.', 'Fiksi', 25, 'books/files/9DtYElW6jq6Yj0ti4EGWGMhNYZCuG2hXPQHxNnpW.pdf', 'books/images/q4trjlDl7Xk2W3HIpw2PxpovRsEMCqGlAt50WGkQ.jpg', 2, '2024-08-10 22:04:43', '2024-08-10 22:04:43'),
(15, 'Murder on the Orient Express', 'Just after midnight, a snowdrift stops the famous Orient Express in its tracks as it travels through the mountainous Balkans. The luxurious train is surprisingly full for the time of the year but, by the morning, it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.', 'Fiksi', 8, 'books/files/iPZOL08dDAOclIuOaYHlkzEmcuBeJJMSJ611m1Zh.pdf', 'books/images/jSDzC6tPOEBnB3bbketOa8n5oG8Ky1IJkMZLTAKU.jpg', 1, '2024-08-10 23:12:58', '2024-08-10 23:12:58'),
(17, 'Don Quixote', 'The adventures of a member of the lowest nobility, an hidalgo[d] from La Mancha named Alonso Quijano, who reads so many chivalric romances that he loses his mind and decides to become a knight-errant (caballero andante) to revive chivalry and serve his nation, under the name Don Quixote de la Mancha.', 'Novel', 3, 'books/files/1OWkPgJmGhw5Mmpw2CYcYGtFLyaa05CeMXdIrhit.pdf', 'books/images/IN9cDZevgIY5DOAyAjM5ZZiFmRJM0ZSnI87rrEZO.jpg', 2, '2024-08-10 23:59:34', '2024-08-10 23:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_10_000000_create_books_table', 2);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UCEP3W1d3UpCMZG6B4kiTaTFXSKMdkIprC1M3fD5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWxTeGxDRk9iaEg4dHdqUWxhdmF1VkN4MFlrT05wbDZna2tQaTFodiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1723359887);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Gabriel Maheswara Santoso', 'gab@gmail.com', NULL, '$2y$12$L0CKQUWqMorzVoD26IemSOgE911MMHsrjYBV0ksCDOkGvbPKPAQ46', NULL, '2024-08-10 00:28:31', '2024-08-10 00:28:31', 'user'),
(2, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$12$qpZMvHOn7J.zSSSctjfdmunRHtcd3kcZitZ3/mPE4uMC3sBDbcxEK', NULL, NULL, '2024-08-10 01:23:56', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
