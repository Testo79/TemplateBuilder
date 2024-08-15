-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 10:30 PM
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
-- Database: `zbi`
--

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
(4, '2024_06_02_084441_template', 1),
(5, '2024_06_03_120054_produit', 1);

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
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `nouveau_prix` decimal(8,2) DEFAULT NULL,
  `image_produit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`image_produit`)),
  `image_reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image_reviews`)),
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`reviews`)),
  `logo` varchar(255) NOT NULL,
  `mini_description` text NOT NULL,
  `image_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image_description`)),
  `qualite` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`qualite`)),
  `reviews_principale` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`reviews_principale`)),
  `statut` enum('APPROVED','PENDING','REJECTED','DELIVERED','DUPLICATED') NOT NULL DEFAULT 'PENDING',
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `devise` varchar(255) NOT NULL,
  `geo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`geo`)),
  `alias` varchar(255) NOT NULL,
  `stock_restant` varchar(255) NOT NULL,
  `livraison_promo` varchar(255) NOT NULL,
  `notation` varchar(255) NOT NULL,
  `livraison_gratuite` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `paiement` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `more_about` varchar(255) NOT NULL,
  `avis_clients` varchar(255) NOT NULL,
  `temporary_offer` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `confirmed_customer` text NOT NULL,
  `ratings_truspilot` text NOT NULL,
  `cta_text` varchar(255) NOT NULL,
  `cta_description` text NOT NULL,
  `termes_legaux` text NOT NULL,
  `politique` text NOT NULL,
  `garanties_retours` text NOT NULL,
  `termes_conditions` text NOT NULL,
  `pub_1` text NOT NULL,
  `pub_2` text NOT NULL,
  `pub_3` text NOT NULL,
  `pub_4` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `description`, `prix`, `nouveau_prix`, `image_produit`, `image_reviews`, `reviews`, `logo`, `mini_description`, `image_description`, `qualite`, `reviews_principale`, `statut`, `template_id`, `devise`, `geo`, `alias`, `stock_restant`, `livraison_promo`, `notation`, `livraison_gratuite`, `offer`, `paiement`, `about`, `more_about`, `avis_clients`, `temporary_offer`, `message`, `confirmed_customer`, `ratings_truspilot`, `cta_text`, `cta_description`, `termes_legaux`, `politique`, `garanties_retours`, `termes_conditions`, `pub_1`, `pub_2`, `pub_3`, `pub_4`, `created_at`, `updated_at`) VALUES
(4, 'zwin', 'had lmantouj wa3er', 12.00, 9.99, '[\"66b8e147124bd_Capture d\'\\u00e9cran 2024-05-28 021321.png\"]', '[\"66b8e14714d11_Capture d\'\\u00e9cran 2023-07-28 160730 - Copie - Copie.png\",\"66b8e147157c2_Capture d\'\\u00e9cran 2023-07-28 160730.png\"]', '[\"dsdsds\",\"dsdsds\",\"dsdsds\",\"dsdsds\",\"dsdsds\",\"dsdsds\",\"dsdsds\",\"dsdsds\"]', '66b8e147162bc_Capture d\'écran 2023-12-02 145619.png', 'eee', '[\"66b8e14716818_Capture d\'\\u00e9cran 2023-07-29 132619.png\",\"66b8e14716da3_Capture d\'\\u00e9cran 2023-07-30 001701.png\"]', '[\"dssdds\",\"dssdds\",\"dssdds\"]', '[\"sdsdds\",\"sdsdds\"]', 'APPROVED', 1, 'AFN', '\"AF\"', 'GEO-PRODUCTNAME', '12% of remaining stock', 'FREE SHIPPING: Order NOW to get it before', '4.9/5 from more than 5,000 satisfied customers on Trustpilot', 'Free delivery', 'Exclusive Limited Offer', 'Secure Payment', 'About', 'More about', 'Reviews from our customers', 'Temporary & exceptional offer!', 'We exceptionally sell our products at wholesale prices, take advantage of it!', 'Confirmed customer', '4.9/5 Rating on Trustpilot', 'Buy Now', 'Max of 1 order per household.', 'Legal terms', 'Policy', 'Waranties and returns', 'Terms and conditions', 'Free Delivery', 'on all orders placed today!', 'Free refund for 60 days after purchase', 'Only a few are left in stock', '2024-08-11 15:05:27', '2024-08-12 17:03:12'),
(5, 'Lmantouj lm9wed', 'had lmantouj wa3er', 12.00, 9.99, '[\"66b8e147124bd_Capture d\'\\u00e9cran 2024-05-28 021321.png\"]', '[\"66b8e14714d11_Capture d\'\\u00e9cran 2023-07-28 160730 - Copie - Copie.png\",\"66b8e147157c2_Capture d\'\\u00e9cran 2023-07-28 160730.png\"]', '[\"azzaza\",\"azzaza\"]', '66b8e147162bc_Capture d\'écran 2023-12-02 145619.png', 'eee', '[\"66b8e14716818_Capture d\'\\u00e9cran 2023-07-29 132619.png\",\"66b8e14716da3_Capture d\'\\u00e9cran 2023-07-30 001701.png\"]', '[\"zazza\",\"zazza\",\"zazza\"]', '[\"azz\",\"azz\"]', 'REJECTED', 1, 'AFN', '\"AF\"', 'GEO-PRODUCTNAME', '12% of remaining stock', 'FREE SHIPPING: Order NOW to get it before', '4.9/5 from more than 5,000 satisfied customers on Trustpilot', 'Free delivery', 'Exclusive Limited Offer', 'Secure Payment', 'About', 'More about', 'Reviews from our customers', 'Temporary & exceptional offer!', 'We exceptionally sell our products at wholesale prices, take advantage of it!', 'Confirmed customer', '4.9/5 Rating on Trustpilot', 'Buy Now', 'Max of 1 order per household.', 'Legal terms', 'Policy', 'Waranties and returns', 'Terms and conditions', 'Free Delivery', 'on all orders placed today!', 'Free refund for 60 days after purchase', 'Only a few are left in stock', '2024-08-11 15:05:27', '2024-08-11 19:59:36'),
(6, 'dssdds', 'dsds', 12.00, 9.99, '[\"66b8f998d5e8d_Capture d\'\\u00e9cran 2023-12-02 145619.png\"]', '[\"66b8f998d77a3_Capture d\'\\u00e9cran 2023-07-29 130423.png\",\"66b8f998d7e0f_Capture d\'\\u00e9cran 2023-07-29 132619.png\",\"66b8f998d8406_Capture d\'\\u00e9cran 2023-07-30 001701.png\"]', '[\"dssddssd\",\"dssddssd\",\"dssddssd\",\"dssddssd\",\"dssddssd\",\"dssddssd\"]', '66b8f998d88eb_Capture d\'écran 2023-10-16 165211.png', 'sdsdsd', '[\"66b8f998d8d5c_Capture d\'\\u00e9cran 2023-07-29 130423 - Copie.png\",\"66b8f998d9602_Capture d\'\\u00e9cran 2023-07-29 130423.png\"]', '[\"dsdds\",\"dsdds\",\"dsdds\"]', '[\"dsd\",\"dsd\"]', 'PENDING', 1, 'AFN', '\"AF\"', 'GEO-PRODUCTNAME', '12% of remaining stock', 'FREE SHIPPING: Order NOW to get it before', '4.9/5 from more than 5,000 satisfied customers on Trustpilot', 'Free delivery', 'Exclusive Limited Offer', 'Secure Payment', 'About', 'More about', 'Reviews from our customers', 'Temporary & exceptional offer!', 'We exceptionally sell our products at wholesale prices, take advantage of it!', 'Confirmed customer', '4.9/5 Rating on Trustpilot', 'Buy Now', 'Max of 1 order per household.', 'Legal terms', 'Policy', 'Waranties and returns', 'Terms and conditions', 'Free Delivery', 'on all orders placed today!', 'Free refund for 60 days after purchase', 'Only a few are left in stock', '2024-08-11 16:49:12', '2024-08-11 19:59:39');

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
('KN3BqNbuhJJ75LDsG2LadGGV9YepkIwOn1nAQ85C', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1Q2RllUV3EzUFhoWnNBWW9tbGw5M2h4eDZGVE05VVpQYnVNN2VzdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZW1wbGF0ZXMvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723488549),
('LGiNbuD5jjriHPIoAHTbtD7HNuY1oCyYWqXHY2xz', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOEJxV2tFWkFqbUlSaFdDSkdSTGp4MEltS05CV1dXazY5NzVaSnlSWCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdGVtcGxhdGVzL2xvZ28ucG5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1723489489),
('vWS1NBPQSfqbNd1XnDDWhHuGlraYZPIw9gBbtTFD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTZzS0dXMldBRVZMUXkzYmxQeTZUY3IyWDdVRDFpTTgyTGl4SmlrYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWl0LzQvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723485773),
('xBly7lcX855XFBzV6P9CJVDeL0R7KUFSLr3HzC6J', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmZlZDFWSWdMV3Zrd0FiZXExQlRTTm1MV3BwRldwS3N6YXQxZHgyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZW1wbGF0ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1723486454);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'template1', NULL, NULL),
(2, 'template2', NULL, NULL),
(3, 'template3', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'omar', 'craccro@gmail.com', NULL, '$2y$12$HbSI0MrdISuDgil5sRcee.iQJsRZjVFHq/JxFn2z1hk7Ed33ALLHC', NULL, '2024-08-10 19:12:41', '2024-08-10 19:12:41');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_template_id_foreign` (`template_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
