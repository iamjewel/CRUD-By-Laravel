-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 11:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_by_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `department_id`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSE-1', '2019-08-15 00:21:51', '2019-08-15 00:21:51'),
(2, 3, 'ETE-1', '2019-08-15 00:22:13', '2019-08-15 00:30:53'),
(3, 2, 'EEE-1', '2019-08-15 00:22:28', '2019-08-15 00:31:19'),
(4, 4, 'BANGLA-1', '2019-08-15 00:22:35', '2019-08-15 00:22:35'),
(5, 5, 'MATH-1', '2019-08-15 00:22:40', '2019-08-15 00:22:40'),
(6, 6, 'BIOLOGY-1', '2019-08-15 00:22:50', '2019-08-15 00:22:50'),
(7, 8, 'CHE-1', '2019-08-15 00:22:58', '2019-08-15 00:22:58'),
(9, 9, 'PHY-1', '2019-08-15 02:45:27', '2019-08-15 02:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_routine` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_code`, `department_routine`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science & Engineering', 'CSE', 'routines\\1565846649.pdf', '2019-08-14 23:24:09', '2019-08-14 23:24:09'),
(2, 'Electrical Engineering', 'EEE', 'routines\\1565846706.pdf', '2019-08-14 23:25:06', '2019-08-14 23:25:06'),
(3, 'Electrical & Telecommunication Engineering', 'ETE', 'routines\\1565846714.pdf', '2019-08-14 23:25:14', '2019-08-14 23:25:14'),
(4, 'Department of Bangla', 'Bangla', 'routines\\1565846722.pdf', '2019-08-14 23:25:22', '2019-08-14 23:25:22'),
(5, 'Department of Math', 'Math', 'routines\\1565846730.pdf', '2019-08-14 23:25:30', '2019-08-14 23:25:30'),
(6, 'Department of Biology', 'Biology', 'routines\\1565846767.pdf', '2019-08-14 23:26:07', '2019-08-14 23:26:07'),
(8, 'Department of Chemistry', 'Chemistry', 'routines\\1565847881.pdf', '2019-08-14 23:44:41', '2019-08-14 23:50:48'),
(9, 'Department of Physics', 'Physics', 'routines\\1565858713.pdf', '2019-08-15 02:45:13', '2019-08-15 02:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_15_051107_create_departments_table', 2),
(4, '2019_08_15_055412_create_courses_table', 3),
(5, '2019_08_15_083016_create_students_table', 4),
(6, '2019_08_15_083521_create_semesters_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_name`, `created_at`, `updated_at`) VALUES
(1, '1st', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(2, '2nd', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(3, '3rd', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(4, '4th', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(5, '5th', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(6, '6th', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(7, '7th', '2019-08-15 02:38:19', '2019-08-15 02:38:19'),
(8, '8th', '2019-08-15 02:38:19', '2019-08-15 02:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `image`, `department_id`, `semester_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Leo Jewel', 'images\\1565859193.jpg', 1, '8', 'Chittagong', '2019-08-15 02:53:13', '2019-08-15 02:53:13'),
(2, 'Leo Messi', 'images\\1565859472.jpg', 4, '5', 'Barcelona', '2019-08-15 02:57:52', '2019-08-15 02:57:52'),
(3, 'Ronaldo', 'images\\1565859512.jpg', 8, '4', 'Italy', '2019-08-15 02:58:32', '2019-08-15 02:58:32'),
(4, 'Shakib', 'images\\1565859555.jpg', 5, '6', 'Dhaka', '2019-08-15 02:59:15', '2019-08-15 02:59:15'),
(7, 'Tamim', 'images\\1565860100.jpg', 6, '6', 'Chittagong', '2019-08-15 03:08:20', '2019-08-15 03:08:20'),
(9, 'Mashrafee', 'images\\1565860314.jpg', 6, '4', 'Dhaka', '2019-08-15 03:11:54', '2019-08-15 03:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jewel', 'jewel@gmail.com', NULL, '$2y$10$9CbxEvOqmrUQSapkgYJyJuInhRbME.AqzIlxBCiD93Rc78sTY.79a', NULL, '2019-08-14 22:44:59', '2019-08-14 22:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_name_unique` (`course_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`department_name`),
  ADD UNIQUE KEY `departments_department_code_unique` (`department_code`);

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
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
