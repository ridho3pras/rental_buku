-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 11.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_rent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A001-01', 'Belajar Lavarel Untuk Pemula', '', 'belajar-lavarel-untuk-pemula', 'in stock', NULL, '2023-01-19 06:54:24', NULL),
(2, 'A001-02', 'Laskar Pelangi', '', 'laskar-pelangi', 'in stock', '2023-01-10 04:04:08', '2023-02-08 03:51:20', NULL),
(4, 'A001-03', 'HTML Dasar', '', 'html-dasar', 'in stock', '2023-01-10 04:28:21', '2023-01-19 06:50:16', NULL),
(5, 'A001-04', 'PHP Dasar', '', 'php-dasar', 'in stock', '2023-01-10 04:38:54', '2023-01-18 22:46:51', NULL),
(6, 'A001-05', 'Golang For beginner', '', 'golang-for-beginner', 'in stock', '2023-01-10 04:42:47', '2023-01-10 08:45:08', NULL),
(7, 'A001-06', 'Misteri Kehidupan', 'Misteri Kehidupan-1673359888.jpg', 'misteri-kehidupan', 'in stock', '2023-01-10 07:11:28', '2023-01-10 08:44:42', NULL),
(8, 'A001-07', 'Sejarah yang disembunyikan', '', 'sejarah-yang-disembunyikan', 'in stock', '2023-01-19 06:49:00', '2023-01-19 06:49:00', NULL),
(9, 'A001-08', 'Data Mining', '', 'data-mining', 'in stock', '2023-01-19 06:49:37', '2023-01-19 06:49:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 7, 3, NULL, NULL),
(2, 7, 5, NULL, NULL),
(3, 7, 7, NULL, NULL),
(4, 6, 3, NULL, NULL),
(5, 6, 4, NULL, NULL),
(7, 5, 4, NULL, NULL),
(8, 5, 6, NULL, NULL),
(9, 4, 7, NULL, NULL),
(10, 2, 4, NULL, NULL),
(11, 1, 3, NULL, NULL),
(12, 8, 12, NULL, NULL),
(13, 9, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Novel Dongeng', 'novel-dongeng', NULL, '2023-01-06 08:04:11', '2023-01-06 08:04:11'),
(2, 'Comic', 'comic', NULL, NULL, NULL),
(3, 'Magazine', 'magazine', NULL, '2023-01-10 08:21:43', NULL),
(4, 'Technology', 'technology', NULL, NULL, NULL),
(5, 'Mystery', 'mystery', NULL, '2023-01-10 08:21:47', NULL),
(6, 'Romance', 'romance', NULL, NULL, NULL),
(7, 'Horror', 'horror', NULL, NULL, NULL),
(8, 'Science', 'science', '2023-01-05 23:21:36', '2023-01-19 06:54:56', NULL),
(9, 'Western', 'western', '2023-01-05 23:36:34', '2023-01-06 08:04:16', '2023-01-06 08:04:16'),
(10, 'Sport', 'sport', '2023-01-05 23:37:17', '2023-01-10 08:46:14', NULL),
(12, 'Fictional History', 'fictional-history', '2023-01-06 06:44:57', '2023-01-06 06:44:57', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_28_143114_create_roles_table', 1),
(11, '2022_12_28_144606_add_role_id_column_to_users_table', 2),
(12, '2022_12_28_145529_create_categories_table', 2),
(13, '2022_12_28_145621_create_books_table', 2),
(14, '2022_12_28_150006_create_book_category_table', 2),
(15, '2022_12_28_150556_create_rent_logs_table', 3),
(16, '2023_01_06_132544_add_slug_column_to_categories_table', 4),
(17, '2023_01_06_133725_change_slug_column_into_nullable_in_categories_table', 5),
(18, '2023_01_06_141422_add_soft_delete_column_to_categories_table', 6),
(19, '2023_01_10_101542_add_slug_cover_column_to_books_table', 7),
(20, '2023_01_10_153140_add_soft_delete_to_books_table', 8),
(21, '2023_01_14_121017_add_slug_to_users_table', 9),
(22, '2023_01_14_143034_add_soffdelete_to_users_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rent_logs`
--

INSERT INTO `rent_logs` (`id`, `book_id`, `user_id`, `rent_date`, `return_date`, `actual_return_date`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-01-19', '2023-01-26', '2023-01-19', '2023-01-18 22:37:50', '2023-01-19 06:43:59'),
(2, 2, 2, '2023-01-19', '2023-01-26', '2023-01-25', '2023-01-18 22:46:45', '2023-01-18 22:46:45'),
(3, 5, 2, '2023-01-19', '2023-01-26', '2023-01-27', '2023-01-18 22:46:51', '2023-01-18 22:46:51'),
(4, 4, 3, '2023-01-19', '2023-01-26', '2023-01-19', '2023-01-19 05:40:51', '2023-01-19 06:50:16'),
(5, 1, 8, '2023-01-19', '2023-01-26', '2023-01-19', '2023-01-19 06:53:15', '2023-01-19 06:54:24'),
(6, 2, 2, '2023-02-08', '2023-02-15', '2023-02-08', '2023-02-08 03:50:46', '2023-02-08 03:51:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `role_id`, `deleted_at`) VALUES
(1, 'admin', 'admin', '$2y$10$YASwRjuKXlAYBpK3FYVCEOzDB/GBuCXWOLaAxgXCvjBrORY3xxFDW', NULL, 'toko buku', 'active', NULL, NULL, 1, NULL),
(2, 'user1', 'user1', '$2y$10$9wU4prHe2PzgzGUdbHHwjOQkp7dB/rxAYA0VwURtB0TbCQbJeTgtu', '08213364233', 'jogja 1', 'active', NULL, '2023-02-08 03:48:57', 2, NULL),
(3, 'user2', 'user2', '$2y$10$9wU4prHe2PzgzGUdbHHwjOQkp7dB/rxAYA0VwURtB0TbCQbJeTgtu', '0823243424', 'sleman', 'active', NULL, '2023-01-19 06:59:02', 2, NULL),
(4, 'user3', 'user3', '$2y$10$V.7Xbx2hKIRk51F/bmu9COqIbWQ2L1Z51wqmTkRiijad5NczQPnOa', '082143742343', 'Jl Mawar, Gg Rose, Kab. Malay', 'active', '2023-01-04 06:23:10', '2023-02-08 03:48:51', 2, NULL),
(6, 'user4', 'user4', '$2y$10$Uk1/R5lWszOjy.LcSF5/BuyzasKSDIdc8nultNrZtwjevUSFImMqG', '082323143242', 'jl budi utomo', 'inactive', '2023-01-04 06:27:40', '2023-01-04 06:27:40', 2, NULL),
(7, 'user5', 'user5', '$2y$10$R/TtthYzUvNOqxRRZ6l.y.GmnbiVoaCRZqwV0A/aAPRwpRhjUM/12', '08236263132', 'jl kamboja', 'inactive', '2023-01-04 06:43:10', '2023-01-04 06:43:10', 2, NULL),
(8, 'user6', 'user6', '$2y$10$VKsvp0i2zoOZaWju1GOV3u2A4eS7MEgI.puj1hW0JwsVhk3l4kiCC', '08232321321', 'ssss', 'active', '2023-01-04 07:41:56', '2023-01-19 06:59:20', 2, NULL),
(9, 'jokowow', 'jokowow', '$2y$10$qPAbpVU.qoLToLCvTnKDLeH0.zI.dtmis21czjGW8thTBc0sM111.', '0883232323', 'jl mawar solo', 'active', '2023-01-19 06:57:05', '2023-01-19 06:57:56', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_book_id_foreign` (`book_id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
