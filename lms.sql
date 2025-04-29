-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2025 at 08:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2020-21', '2025-04-11 10:42:31', '2025-04-11 10:42:31'),
(2, '2021-22', '2025-04-11 10:42:52', '2025-04-11 10:42:52'),
(3, '2023-23', '2025-04-11 10:43:03', '2025-04-11 10:43:03'),
(4, '2023-24', '2025-04-11 10:43:16', '2025-04-11 10:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint NOT NULL,
  `message` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `statues` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `message`, `type`, `statues`, `created_at`, `updated_at`) VALUES
(1, 'today is a test', 'teacher', '1', '2025-04-12 04:30:04', '2025-04-12 05:58:35'),
(3, 'today is a holiday1', 'teacher', '1', '2025-04-12 10:15:52', '2025-04-12 10:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `assignsubjecttoclasses`
--

CREATE TABLE `assignsubjecttoclasses` (
  `id` int NOT NULL,
  `class_id` bigint NOT NULL,
  `subject_id` bigint NOT NULL,
  `status` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assignsubjecttoclasses`
--

INSERT INTO `assignsubjecttoclasses` (`id`, `class_id`, `subject_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 3, '1', '2025-04-12 23:39:35', '2025-04-13 00:32:20'),
(5, 3, 4, '1', '2025-04-12 23:39:59', '2025-04-13 00:32:30'),
(6, 4, 4, '1', '2025-04-14 03:34:09', '2025-04-14 03:34:09'),
(7, 1, 2, '1', '2025-04-16 05:29:44', '2025-04-16 05:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `assignteachertoclasses`
--

CREATE TABLE `assignteachertoclasses` (
  `id` bigint UNSIGNED NOT NULL,
  `class_id` bigint UNSIGNED NOT NULL,
  `subject_id` bigint UNSIGNED NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assignteachertoclasses`
--

INSERT INTO `assignteachertoclasses` (`id`, `class_id`, `subject_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 6, '2025-04-14 02:34:18', '2025-04-14 02:34:18'),
(4, 3, 4, 6, '2025-04-14 22:40:13', '2025-04-14 22:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', '2025-04-11 10:43:32', '2025-04-11 10:43:32'),
(2, '2', '2025-04-11 10:43:39', '2025-04-11 10:43:39'),
(3, '3', '2025-04-11 10:43:43', '2025-04-11 10:43:43'),
(4, '4', '2025-04-11 10:43:48', '2025-04-11 10:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', NULL, NULL),
(2, 'Tuesday', NULL, NULL),
(3, 'Wednesday', NULL, NULL),
(4, 'Thursday', NULL, NULL),
(5, 'Friday', NULL, NULL),
(6, 'Saturday', NULL, NULL),
(7, 'Sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feeheads`
--

CREATE TABLE `feeheads` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeheads`
--

INSERT INTO `feeheads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admission fee', '2025-04-11 10:44:00', '2025-04-11 10:44:00'),
(2, 'exam fee', '2025-04-11 10:44:06', '2025-04-11 10:44:06'),
(3, 'tution fee', '2025-04-11 10:44:13', '2025-04-11 10:44:13'),
(4, 'hostel fee', '2025-04-11 10:44:20', '2025-04-11 10:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `feestructures`
--

CREATE TABLE `feestructures` (
  `id` bigint UNSIGNED NOT NULL,
  `class_id` bigint UNSIGNED NOT NULL,
  `academic_year_id` bigint UNSIGNED NOT NULL,
  `fee_head_id` bigint UNSIGNED NOT NULL,
  `april` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `may` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `june` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `july` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `august` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `september` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `october` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `november` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `december` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `january` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `february` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `march` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feestructures`
--

INSERT INTO `feestructures` (`id`, `class_id`, `academic_year_id`, `fee_head_id`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `january`, `february`, `march`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '100', '101', '102', '103', '200', '203', '393', '403', '503', '600', '700', '800', '2025-04-11 10:45:11', '2025-04-11 10:45:11'),
(2, 3, 3, 4, '111', '111', '000', '103', '200', '203', '393', '403', '503', '600', '700', '800', '2025-04-12 21:51:12', '2025-04-16 05:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_04_095425_create_academic_years_table', 1),
(6, '2025_04_07_085120_create_classes_table', 1),
(7, '2025_04_08_045922_create_feeheads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'science', 'theory', '1', '2025-04-12 11:59:40', '2025-04-12 12:22:43'),
(3, 'web development', 'pratical', '1', '2025-04-12 12:22:23', '2025-04-12 12:22:23'),
(4, 'microprocesser', 'theory', '1', '2025-04-12 23:41:21', '2025-04-12 23:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` bigint NOT NULL,
  `class_id` bigint DEFAULT NULL,
  `day_id` bigint DEFAULT NULL,
  `subject_id` bigint DEFAULT NULL,
  `start_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `class_id`, `day_id`, `subject_id`, `start_time`, `end_time`, `room_no`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 2, '01:10', '01:40', '1', '2025-04-16 05:30:34', '2025-04-16 05:30:34'),
(4, 2, 2, 3, '02:10', '02:40', '1', '2025-04-16 05:31:05', '2025-04-16 05:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','student','teacher','parent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `academic_year_id` bigint DEFAULT NULL,
  `class_id` bigint DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `academic_year_id`, `class_id`, `father_name`, `mother_name`, `admission_date`, `dob`, `mobno`) VALUES
(3, 'mahboob', 'mahboob@gmail.com', 'student', NULL, '$2y$12$ZVf/rGHRDXNGLC3KHHEI3.v3b1tuNWMzAzedN.Dvb3ZR1sd0amFmy', NULL, '2025-04-11 11:33:13', '2025-04-11 11:33:13', 1, 1, 'mah', 'maha', '2025-04-11', '2025-04-11', '12345678'),
(4, 'vijay', 'vijay@gmail.com', 'admin', NULL, '$2y$12$5Wh2aSNG29rThSSpsT.kHO0quaSZuzN9nXesLLh3Y4ayjXW8yiqLq', NULL, '2025-04-11 11:47:50', '2025-04-11 11:48:10', 1, 2, 'Ramnayan', 'shushila', '2025-04-12', '2025-04-12', '123456789'),
(5, 'sagar', 'sagar@gmail.com', 'student', NULL, '$2y$12$lBmBsy1KYPg07CPKSp3TJ.rQAP/YSVxAu7mga1JAQBjSQKksGpz56', NULL, '2025-04-12 04:53:01', '2025-04-12 04:53:01', 3, 3, 'sfather', 'smother', '2025-04-12', '2025-04-17', '12345678'),
(6, 'teacher', 'teacher@gmail.com', 'teacher', NULL, '$2y$12$Ogl02j8LRidv1HE2K4YrXuImUr9.xGV.y49KpgHQgDUmDhOriA9V6', NULL, '2025-04-13 02:54:25', '2025-04-15 05:59:58', NULL, NULL, 'fteach', 'mteach', NULL, '2025-04-09', '00000001'),
(8, 'bijay', 'bijay@gmai.com', 'teacher', NULL, '$2y$12$2Qq2nKCI0AL9avwGKotAreIuVtzQIApsyx0Hj77nS8VLcprMoNZ3.', NULL, '2025-04-13 05:56:42', '2025-04-13 05:56:42', NULL, NULL, 'ram', 'saswat', NULL, '2025-04-16', '12345689');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignsubjecttoclasses`
--
ALTER TABLE `assignsubjecttoclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignteachertoclasses`
--
ALTER TABLE `assignteachertoclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feeheads`
--
ALTER TABLE `feeheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feestructures`
--
ALTER TABLE `feestructures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feestructures_class_id_foreign` (`class_id`),
  ADD KEY `feestructures_academic_year_id_foreign` (`academic_year_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
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
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignsubjecttoclasses`
--
ALTER TABLE `assignsubjecttoclasses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignteachertoclasses`
--
ALTER TABLE `assignteachertoclasses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeheads`
--
ALTER TABLE `feeheads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feestructures`
--
ALTER TABLE `feestructures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feestructures`
--
ALTER TABLE `feestructures`
  ADD CONSTRAINT `feestructures_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feestructures_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
