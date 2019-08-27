-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 11:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advertisename` text COLLATE utf8mb4_unicode_ci,
  `category` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `advertisename`, `category`, `position`, `img`, `created_at`, `updated_at`) VALUES
(1, 'rty', '1', 6789, NULL, '2019-07-13 03:17:33', '2019-07-13 03:17:33'),
(2, 'rty', '1', 6789, NULL, '2019-07-13 03:18:03', '2019-07-13 03:18:03'),
(3, 'rty', '1', 6789, NULL, '2019-07-13 03:18:29', '2019-07-13 03:18:29'),
(4, 'rty', '1', 6789, NULL, '2019-07-13 03:18:47', '2019-07-13 03:18:47'),
(5, 'rty', '1', 6789, NULL, '2019-07-13 03:19:41', '2019-07-13 03:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `designation` text COLLATE utf8mb4_unicode_ci,
  `cardvalidity` text COLLATE utf8mb4_unicode_ci,
  `phonenumber` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `cardvalidity`, `phonenumber`, `img`, `created_at`, `updated_at`) VALUES
(32, 'Sifat', 'Gm', '2019-2020', '01798113191', '5d144683017e2WIN_20180506_08_53_38_Pro.jpg', '2019-06-26 22:30:59', '2019-06-26 22:30:59'),
(33, 'Mahmudullah Riyad', 'CEO', '2019-2020', '01838251718', '5d145c16d8384mizan.jpg', '2019-06-27 00:03:02', '2019-06-27 00:03:02');

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
(3, '2019_06_17_085327_create_news_table', 1),
(4, '2019_06_22_071941_create_members_table', 1),
(5, '2019_06_23_062553_create_videos_table', 2),
(6, '2019_06_23_063352_create_videos_table', 3),
(7, '2019_07_13_054645_create_advertise_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heilight` text COLLATE utf8mb4_unicode_ci,
  `main_head` text COLLATE utf8mb4_unicode_ci,
  `slider` text COLLATE utf8mb4_unicode_ci,
  `category` text COLLATE utf8mb4_unicode_ci,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci,
  `publisher` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `highlights` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heilight`, `main_head`, `slider`, `category`, `headline`, `news`, `date`, `img`, `publisher`, `created_at`, `updated_at`, `highlights`) VALUES
(9, NULL, NULL, NULL, '6', 'fghjk', '<p>fghjk dfghjf fghj</p>', NULL, '5d217ff71f12f2017-08-23-10-50-51-881.jpg', 'dfghjk hjkl', '2019-07-06 23:15:35', '2019-07-06 23:15:35', NULL),
(10, NULL, NULL, '1', '5', 'his is jatio', '<p>News Details</p>', NULL, '5d2aa0e3f1103flower2.jpg', 'Mizan', '2019-07-13 21:26:28', '2019-07-13 21:26:28', NULL),
(11, NULL, NULL, '1', '4', 'sdfghjk jhghjfgj jhvjgvhjgv jhvjg gj h gjv hgvhgvhgvhgvhgvg', '<p>sdfghjklhjkl</p>', NULL, '5d2acd68431d8flower.jpg', 'ali', '2019-07-14 00:36:24', '2019-07-14 00:36:24', 1),
(12, NULL, NULL, NULL, '4', 'abcd', '<p>abcdefg</p>', NULL, '5d2acdffcd827flower.jpg', 'ali', '2019-07-14 00:38:55', '2019-07-14 00:38:55', NULL),
(13, NULL, NULL, '1', '6', 'sfdghjkl', '<p>sdfghjk xfhvbnm,</p>', NULL, '5d2ae83b58ef3watch.jpg', 'sxdfghjk', '2019-07-14 02:30:51', '2019-07-14 02:30:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photoname` text COLLATE utf8mb4_unicode_ci,
  `photoview` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photoname`, `photoview`, `created_at`, `updated_at`) VALUES
(16, 'fghjkl', '5d145723daf5aWIN_20180506_08_53_41_Pro.jpg', '2019-06-26 23:41:55', '2019-06-26 23:41:55'),
(17, 'flower', '5d14578e9b57dflower.jpg', '2019-06-26 23:43:42', '2019-06-26 23:43:42'),
(18, 'Rifat Abdullah', '5d14586ab9537islam2.jpg', '2019-06-26 23:47:22', '2019-06-26 23:47:22'),
(19, 'Mujammil Vhai', '5d145dbf6f69dIslam.jpg', '2019-06-27 00:10:07', '2019-06-27 00:10:07'),
(20, 'anarul', '5d20959291f3f2016-09-03-17-29-53-977.jpg', '2019-07-06 06:35:30', '2019-07-06 06:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mizanur Rahman', 'mizan@gmail.com', NULL, '$2y$10$1ESFPfE14xD5smhaGe23ueX2Gp3aEDuyB5S75dNYPS3Dy8s6EE5xK', NULL, '2019-06-22 09:34:31', '2019-06-22 09:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_name`, `video_link`, `created_at`, `updated_at`) VALUES
(5, 'riyad', 'https:ghdfhjkh.com', '2019-06-23 01:14:11', '2019-06-26 20:53:17'),
(6, 'hgfioj', 'https://jkhjkhhkj.vhvh', '2019-06-23 01:14:50', '2019-06-26 05:11:46'),
(7, 'hgfioj', 'https://dsfdgfdg.com', '2019-06-23 01:15:47', '2019-06-26 05:07:44'),
(8, 'sddfgh', 'sdfgh', '2019-06-23 01:19:17', '2019-06-23 01:19:17'),
(9, 'ashjkl', 'sdfghj', '2019-06-23 01:19:52', '2019-06-23 01:19:52'),
(10, 'fsdsfd', 'ghdfjty', '2019-06-23 03:06:02', '2019-06-23 03:06:02'),
(11, 'test', 'https://lkdfm.com', '2019-06-26 05:09:19', '2019-06-26 05:09:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
