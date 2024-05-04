-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2024 at 12:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquarium`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `order_number_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `notes` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pedding',
  `totalmount` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `purchase_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `audience` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name_event`, `audience`, `description`, `start_date`, `end_date`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Aptech aquarium ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1714630754.jpg\" width=\"1920\" height=\"1280\"></figure><p>orderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumber</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1714630775.jpg\" width=\"1920\" height=\"1280\"></figure><p>orderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumber</p>', '2024-05-07 13:19:00', '2024-06-02 13:19:00', 'Active', 'Ha Noi', '2024-05-01 23:19:39', '2024-05-01 23:19:39'),
(2, 'Quang aquarium ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1714630808.jpg\" width=\"2200\" height=\"1237\"></figure><p>orderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumberorderNumber</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1714630817.jpg\" width=\"2200\" height=\"1237\"></figure><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1714630823.jpg\" width=\"1920\" height=\"1280\"></figure><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1714630833.jpg\" width=\"2200\" height=\"1237\"></figure><figure class=\"image\"><img style=\"aspect-ratio:2880/1232;\" src=\"http://127.0.0.1:8000/news_img/bg_test_1714630850.png\" width=\"2880\" height=\"1232\"></figure><figure class=\"image\"><img style=\"aspect-ratio:2504/576;\" src=\"http://127.0.0.1:8000/news_img/bgslidernews_1714630858.png\" width=\"2504\" height=\"576\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-01 23:21:00', '2024-05-01 23:21:00');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback_text` text NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(37, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2024_04_13_131450_create_sessions_table', 1),
(41, '2024_04_27_114116_create_payments_table', 1),
(42, '2024_04_28_074300_create_order_number_table', 1),
(43, '2024_04_28_074339_create_feedback_table', 1),
(44, '2024_04_28_074510_create_customers_table', 1),
(45, '2024_04_28_074814_create_events_table', 1),
(46, '2024_04_28_075021_create_tickets_table', 1),
(47, '2024_04_28_075244_create_bookings_table', 1),
(48, '2024_04_28_161030_create_ticket_variant_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_number`
--

CREATE TABLE `order_number` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
('foTWfsHMKcOlnVTHu1xSiTNC4i6JcTcx7UqrWyzp', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQmpaVG5XWDZHUHdmNFVWYlFxNHVBRndNVWRQODZ2Z1I2dUtqbEFZTCI7czoxMToib3JkZXJOdW1iZXIiO3M6NjoiZjhHaTJEIjtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NoZWNrb3V0Ijt9czo0OiJjYXJ0IjthOjI6e2k6MjthOjExOntzOjk6InRpY2tldF9pZCI7aToyO3M6ODoiZXZlbnRfaWQiO2k6MjtzOjQ6Im5hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czo4OiJxdWFudGl0eSI7czoxOiIxIjtzOjU6ImltYWdlIjtzOjIwOiJhcXVhMV8xNzE0NjMwODA4LmpwZyI7czo1OiJwcmljZSI7aToxMDAwMDAwO3M6MTA6ImV2ZW50X25hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czoxMDoic3RhcnRfZGF0ZSI7TjtzOjg6ImVuZF9kYXRlIjtOO3M6NzoiYWRkcmVzcyI7czo2OiJIYSBOb2kiO3M6MTE6InRvdGFsX3ByaWNlIjtpOjEwMDAwMDA7fWk6MTthOjExOntzOjk6InRpY2tldF9pZCI7aToxO3M6ODoiZXZlbnRfaWQiO2k6MTtzOjQ6Im5hbWUiO3M6MTY6IkFwdGVjaCBhcXVhcml1bSAiO3M6ODoicXVhbnRpdHkiO3M6MToiNSI7czo1OiJpbWFnZSI7czo0OToiZmVsaXBlLWdhbHZhbi1oNC1BcEVZT0s1by11bnNwbGFzaF8xNzE0NjMwNzU0LmpwZyI7czo1OiJwcmljZSI7aToxMDAwMDA7czoxMDoiZXZlbnRfbmFtZSI7czoxNjoiQXB0ZWNoIGFxdWFyaXVtICI7czoxMDoic3RhcnRfZGF0ZSI7czoxOToiMjAyNC0wNS0wNyAxMzoxOTowMCI7czo4OiJlbmRfZGF0ZSI7czoxOToiMjAyNC0wNi0wMiAxMzoxOTowMCI7czo3OiJhZGRyZXNzIjtzOjY6IkhhIE5vaSI7czoxMToidG90YWxfcHJpY2UiO2k6NTAwMDAwO319fQ==', 1714634655),
('pBBbShIznecGewIAkQ5ojsCfGgivTLuU9JgZcTXK', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia2pmOHB1Njd3VDlpYTBDclYybVlrSHBqN3o4OWpkRm8ycXlEbTV3ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJjYXJ0IjthOjE6e2k6MjthOjExOntzOjk6InRpY2tldF9pZCI7aToyO3M6ODoiZXZlbnRfaWQiO2k6MjtzOjQ6Im5hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czo4OiJxdWFudGl0eSI7czoxOiIxIjtzOjU6ImltYWdlIjtzOjIwOiJhcXVhMV8xNzE0NjMwODA4LmpwZyI7czo1OiJwcmljZSI7aToxMDAwMDAwO3M6MTA6ImV2ZW50X25hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czoxMDoic3RhcnRfZGF0ZSI7TjtzOjg6ImVuZF9kYXRlIjtOO3M6NzoiYWRkcmVzcyI7czo2OiJIYSBOb2kiO3M6MTE6InRvdGFsX3ByaWNlIjtpOjEwMDAwMDA7fX19', 1714630894),
('Wt058LuTKMCwf2DK0VE626zPr5wA8pjaSHYo557B', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMFFxN0o5bU5xOHczN1ZhYzhXdVJlNmdsSWFzRHJOWXZqN0FDVzV5byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e2k6MjthOjExOntzOjk6InRpY2tldF9pZCI7aToyO3M6ODoiZXZlbnRfaWQiO2k6MjtzOjQ6Im5hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czo4OiJxdWFudGl0eSI7czoxOiIxIjtzOjU6ImltYWdlIjtzOjIwOiJhcXVhMV8xNzE0NjMwODA4LmpwZyI7czo1OiJwcmljZSI7aToxMDAwMDAwO3M6MTA6ImV2ZW50X25hbWUiO3M6MTU6IlF1YW5nIGFxdWFyaXVtICI7czoxMDoic3RhcnRfZGF0ZSI7TjtzOjg6ImVuZF9kYXRlIjtOO3M6NzoiYWRkcmVzcyI7czo2OiJIYSBOb2kiO3M6MTE6InRvdGFsX3ByaWNlIjtpOjEwMDAwMDA7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NoZWNrb3V0Ijt9fQ==', 1714632701);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `event_id`, `name`, `quantity`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aptech aquarium ', 100, 'felipe-galvan-h4-ApEYOK5o-unsplash_1714630754.jpg', 100000, '2024-05-01 23:19:39', '2024-05-01 23:19:39'),
(2, 2, 'Quang aquarium ', 200, 'aqua1_1714630808.jpg', 1000000, '2024-05-01 23:21:00', '2024-05-01 23:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_variant`
--

CREATE TABLE `ticket_variant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_variant`
--

INSERT INTO `ticket_variant` (`id`, `event_id`, `ticket_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-05-01 23:19:39', '2024-05-01 23:19:39'),
(2, 2, 2, '2024-05-01 23:21:00', '2024-05-01 23:21:00');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ngo Minh Quang', 'ngominhquang724@gmail.com', NULL, '$2y$12$lDnw5Cpu971RgqwP0dHfSO8yA53LwoEo3WtM9q8gHXrf1wvSvGFQq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-01 23:18:34', '2024-05-01 23:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `bookings_ticket_id_foreign` (`ticket_id`),
  ADD KEY `bookings_event_id_foreign` (`event_id`),
  ADD KEY `bookings_order_number_id_foreign` (`order_number_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_number`
--
ALTER TABLE `order_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_event_id_foreign` (`event_id`);

--
-- Indexes for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_variant_event_id_foreign` (`event_id`),
  ADD KEY `ticket_variant_ticket_id_foreign` (`ticket_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_number`
--
ALTER TABLE `order_number`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_order_number_id_foreign` FOREIGN KEY (`order_number_id`) REFERENCES `order_number` (`id`),
  ADD CONSTRAINT `bookings_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  ADD CONSTRAINT `ticket_variant_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_variant_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
