-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 08:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `created_at`, `updated_at`) VALUES
(5, 'Mobile', 'All Android and ios devices', '2020-08-20 00:39:04', '2020-08-20 00:39:04'),
(6, 'Cameras', 'Mirrorless camera, DSLR camera, SLR camera', '2020-08-20 00:39:44', '2020-08-20 00:39:44'),
(7, 'Refrigerator', 'Single door, double door, multi door', '2020-08-20 00:40:09', '2020-08-20 00:40:09'),
(8, 'Laptop', 'Gaming Laptop, Office Laptop, Macbook', '2020-08-20 00:40:42', '2020-08-20 00:40:42'),
(9, 'Televisions', 'Smart tv, Cruved tv, LED tv', '2020-08-20 00:41:46', '2020-08-20 00:41:46'),
(10, 'Earphone\'s', 'Bluetooth, Wired, Inear, Onear,', '2020-08-20 00:43:35', '2020-08-20 00:43:35'),
(11, 'Speakers', 'Wired, Bluetooth, Home theater', '2020-08-20 00:44:28', '2020-08-20 00:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 14, 5, '2020-08-20 00:46:11', '2020-08-20 00:46:11'),
(13, 15, 8, '2020-08-20 00:47:22', '2020-08-20 00:47:22'),
(14, 16, 6, '2020-08-20 00:47:53', '2020-08-20 00:47:53'),
(15, 17, 7, '2020-08-20 00:48:40', '2020-08-20 00:48:40'),
(16, 18, 9, '2020-08-20 00:49:33', '2020-08-20 00:49:33'),
(17, 19, 11, '2020-08-20 00:51:43', '2020-08-20 00:51:43'),
(18, 20, 10, '2020-08-20 00:52:47', '2020-08-20 00:52:47'),
(19, 21, 5, '2020-08-20 00:54:09', '2020-08-20 00:54:09'),
(20, 22, 5, '2020-08-20 00:54:51', '2020-08-20 00:54:51'),
(21, 23, 8, '2020-08-20 00:57:43', '2020-08-20 00:57:43'),
(22, 24, 9, '2020-08-20 00:58:56', '2020-08-20 00:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_19_055059_create_categories_table', 1),
(5, '2020_08_19_104952_create_products_table', 1),
(6, '2020_08_19_112842_create_category_product_tabel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `file_name`, `created_at`, `updated_at`) VALUES
(14, 'Asus zenfone max pro m2', 'Asus zenfone max pro m2', '15979041711.jpeg', '2020-08-20 00:46:11', '2020-08-20 00:46:11'),
(15, 'Asus vivobook 15', 'Asus vivobook 15', '15979042411.jpeg', '2020-08-20 00:47:21', '2020-08-20 00:47:21'),
(16, 'Canon eos M50', 'Canon eos M50 mirrorless camera', '15979042731.jpeg', '2020-08-20 00:47:53', '2020-08-20 00:47:53'),
(17, 'Whirlpool double door 340 l refrigerator', 'Whirlpool double door 340 l refrigerator', '15979043201.jpeg', '2020-08-20 00:48:40', '2020-08-20 00:48:40'),
(18, 'Samsung 32 inch smart tv', 'Samsung 32 inch smart led tv with tizen', '15979043731.jpeg', '2020-08-20 00:49:33', '2020-08-20 00:49:33'),
(19, 'JBL party box 300', 'JBL party box for 30,000', '15979045031.jpeg', '2020-08-20 00:51:43', '2020-08-20 00:51:43'),
(20, 'Mivi Collar Bluetooth earphone', 'Mivi Collar Bluetooth earphone for 1499', '15979045671.png', '2020-08-20 00:52:47', '2020-08-20 00:52:47'),
(21, 'Apple Iphone 11 pro', 'Apple Iphone 11 pro with 128gb storage and ios13', '15979046491.jpeg', '2020-08-20 00:54:09', '2020-08-20 00:54:09'),
(22, 'Samsung m31', 'Samsung m31 with 3 rear camera', '15979046911.jpeg', '2020-08-20 00:54:51', '2020-08-20 00:54:51'),
(23, 'asus gaming laptop', 'asus rog gaming laptop', '15979048631.jpeg', '2020-08-20 00:57:43', '2020-08-20 00:57:43'),
(24, 'Onida smart tv', 'Onida smart tv with 20w output speakers with android and 2gb of ram', '15979049361.jpeg', '2020-08-20 00:58:56', '2020-08-20 00:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
