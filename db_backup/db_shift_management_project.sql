-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 02:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shift_management_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocated_shifts`
--

CREATE TABLE `allocated_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shiftdate` date NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allocated_shifts`
--

INSERT INTO `allocated_shifts` (`id`, `shiftdate`, `shift`, `empid`, `empname`, `role`, `created_at`, `updated_at`) VALUES
(1, '2023-07-28', '09:00am - 05:00pm', 'E001', 'Ravneet Kaur', 'Chef', NULL, NULL),
(2, '2023-07-29', '09AM - 05PM', 'E0002', 'Mohinder Singh', 'Cook', '2023-07-28 23:28:06', '2023-07-28 23:28:06'),
(3, '2023-07-28', '09AM - 05PM', 'E0002', 'Mohinder Singh', 'Cook', '2023-07-28 23:30:11', '2023-07-28 23:30:11'),
(4, '2023-08-01', '09AM - 05PM', 'E0002', 'Mohinder Singh', 'Cook', '2023-07-28 23:58:42', '2023-07-28 23:58:42'),
(5, '2023-07-31', '09AM - 05PM', 'E0001', 'Ravneet Kaur', 'Chef', '2023-07-29 00:51:46', '2023-07-29 00:51:46'),
(6, '2023-08-02', '11AM - 07PM', 'E0001', 'Ravneet Kaur', 'Chef', '2023-07-29 02:22:46', '2023-07-29 02:22:46'),
(8, '2023-08-05', '10:00 PM - 12:00 AM', 'E0007', 'Kulwinder Singh', 'Cook', '2023-08-05 06:09:31', '2023-08-05 06:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empfname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emplname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `empid`, `empfname`, `emplname`, `mobileno`, `address`, `province`, `postalcode`, `designation`, `email`, `password`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'E0001', 'Ravneet', 'Kaur', '604-234-8889', 'Street No.10,Kitchener', 'Ontario', 'N2G', 'Web developer', 'ravneet@gmail.com', '1234', 'Chef', NULL, NULL),
(2, 'E0002', 'Mohinder', 'Singh', '89898', 'Toronto', 'Toronto', '7878787', 'Cook', 'mohinder@gmail.com', '1234', 'Cook', '2023-07-28 23:27:40', '2023-07-28 23:27:40'),
(7, 'E0007', 'Kulwinder', 'Singh', '898988', 'Street No.2', 'Toronto', '676676', 'Chef', 'kulwinder@gmail.com', '1234', 'Cook', '2023-07-31 07:29:03', '2023-07-31 07:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_08_041116_employee', 1),
(6, '2023_07_08_094149_shifts_master', 1),
(7, '2023_07_16_043249_roles', 1),
(8, '2023_07_16_063757_allocated_shifts', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Chef', NULL, NULL),
(2, 'Cook', NULL, NULL),
(3, 'Housekeeping Supervisor', NULL, NULL),
(4, 'Supervisor', NULL, NULL),
(5, 'Bar tender', NULL, NULL),
(6, 'Waiter', NULL, NULL),
(7, 'Receptionist', NULL, NULL),
(8, 'Dishwasher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` date DEFAULT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shiftfrom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiftto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `day`, `role`, `shiftfrom`, `shiftto`, `created_at`, `updated_at`) VALUES
(4, '2023-08-05', 'Chef', '09:00', '18:00', '2023-08-05 05:26:51', '2023-08-05 05:26:51'),
(5, '2023-08-07', 'Cook', '09:00', '19:00', '2023-08-05 05:40:07', '2023-08-05 05:40:07'),
(6, '2023-08-07', 'Supervisor', '09:00', '17:00', '2023-08-05 05:40:29', '2023-08-05 05:40:29'),
(7, '2023-08-07', 'Chef', '22:00', '00:00', '2023-08-05 06:07:58', '2023-08-05 06:07:58');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `empid` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `empid`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Vt27JJcEfU1BIw9KD.Vureeor6kRE1avWgZRxMifdXPS65lX6lbai', NULL, NULL, NULL, NULL),
(2, 'Ravneet', 'ravneet@gmail.com', NULL, '$2y$10$Vt27JJcEfU1BIw9KD.Vureeor6kRE1avWgZRxMifdXPS65lX6lbai', NULL, NULL, NULL, 'E0001'),
(4, 'Kulwinder Singh', 'kulwinder@gmail.com', NULL, '$2y$10$NLLGZyJmg7Wi/JpyCARp2evTL0suIX9ExjXS7nknMMHnwnRd4hv7u', NULL, '2023-07-31 07:29:03', '2023-07-31 07:29:03', NULL),
(5, 'a a', 'a@gmail.com', NULL, '$2y$10$MAy0jrH6b3.H2aTsfvfZu.QUPY48mlQSQ9qtPQ4g5LhNlGqRDPZZa', NULL, '2023-08-05 04:55:47', '2023-08-05 04:55:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocated_shifts`
--
ALTER TABLE `allocated_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
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
-- AUTO_INCREMENT for table `allocated_shifts`
--
ALTER TABLE `allocated_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
