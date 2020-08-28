-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 12:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mothersoftit`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Aynul', 'aynul086@gmail.com', 'dfdsf', 'yrhju erhrtrt ghuihi iojefiojsdi fgiosj fiojs fjoidj g', '2020-08-26 00:03:54', '2020-08-26 00:03:54'),
(2, 'Aynul', 'aynul086@gmail.com', 'dfdsf', 'dsgf jsjr jiiojgoiigoih;o', '2020-08-26 00:04:42', '2020-08-26 00:04:42'),
(3, 'Aynul', 'aynul086@gmail.com', 'sadasf', 'sfsfgds', '2020-08-26 00:17:24', '2020-08-26 00:17:24');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fivers`
--

CREATE TABLE `fivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fivers`
--

INSERT INTO `fivers` (`id`, `image`, `message`, `created_at`, `updated_at`) VALUES
(4, 'public/frontend/images/success/3UEiU.png', 'Allhumdulah, I\'ve just received a 100$ project from fiverr.com Batch: Web-1823 (running) Thanks to : Shawon Islam, Al-Amin, Tarique Hasan, Sujon Saha I don\'t know what to say to Creative it, But I want to mention those achievements I have had from here.', '2020-08-26 07:16:56', '2020-08-26 07:16:56'),
(5, 'public/frontend/images/success/dp0X5.png', 'আলহামদুলিল্লাহ সব আল্লাহর রহমত। আজ কিছু কথা বলতে চাই খুব সংক্ষেপে, আর কিছু ভুল বললে আগে থেকে ক্ষমা চাই। আমার লাইফ এর পুরাটা তো না, তবে টুকটাক সাকসেস আর কি। আমি CIT এর GB -1733 এর ব্যাচ, প্রথমে #Freelancer এ কাজ করতাম বেশ কয়েকটা কনটেস্ট উইন করে চলে আসি #Fiverr এ, তারপর #UPWork এ ও টুকটাক কাজ করি তবে এখন একটু #Fiverr এ বেশি সময় দিচ্ছি। তো যাই হোক একটু আগে আমার #Fiverr এ ১০০ অর্ডার কমপ্লিট হল।', '2020-08-26 07:26:35', '2020-08-26 07:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `freelances`
--

CREATE TABLE `freelances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freelances`
--

INSERT INTO `freelances` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Md.Aynul Haque', 'public/frontend/images/freelancer/lH8PQ.png', '2020-08-26 19:50:05', '2020-08-26 19:50:05'),
(3, 'Munna Haque', 'public/frontend/images/freelancer/9CYqM.png', '2020-08-26 19:50:19', '2020-08-26 19:50:19'),
(4, 'Momin Khan', 'public/frontend/images/freelancer/VLBt6.png', '2020-08-26 20:06:00', '2020-08-26 20:06:00');

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
(4, '2020_08_26_020503_create_students_table', 1),
(5, '2020_08_26_055845_create_contacts_table', 2),
(6, '2020_08_26_065603_create_sliders_table', 3),
(7, '2020_08_26_085307_create_portfolios_table', 4),
(8, '2020_08_26_124736_create_fivers_table', 5),
(9, '2020_08_27_013401_create_freelances_table', 6);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'public/frontend/images/portfolio/uQijV.jpg', 'this is bd', '2020-08-26 03:19:32', '2020-08-26 03:19:32'),
(4, 'public/frontend/images/portfolio/JZLPB.jpg', 'this is bd', '2020-08-26 03:54:46', '2020-08-26 03:54:46'),
(5, 'public/frontend/images/portfolio/VC3MC.png', 'this is bd', '2020-08-26 03:54:55', '2020-08-26 03:54:55'),
(6, 'public/frontend/images/portfolio/eyTkF.jpg', 'drdhfdh fgrfb', '2020-08-26 06:26:30', '2020-08-26 06:26:30'),
(7, 'public/frontend/images/portfolio/IDMeQ.jpg', 'drdhfdh fgrfb', '2020-08-26 06:28:20', '2020-08-26 06:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(6, 'public/frontend/images/slide/SkKRn.jpg', 'thiis is bd', '2020-08-26 02:39:24', '2020-08-26 06:27:20'),
(7, 'public/frontend/images/slide/orbxG.jpg', 'thiis is bd', '2020-08-26 02:42:21', '2020-08-26 02:42:21'),
(8, 'public/frontend/images/slide/7gJpu.jpg', 'thiis is bd', '2020-08-26 02:46:33', '2020-08-26 02:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peraddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rrelationship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fname`, `mname`, `preaddress`, `peraddress`, `office`, `nid`, `occupation`, `dob`, `nation`, `blood`, `gender`, `email`, `phone`, `gphone`, `relationship`, `school1`, `school2`, `school3`, `school4`, `board1`, `board2`, `board3`, `board4`, `year1`, `year2`, `year3`, `year4`, `cgpa1`, `cgpa2`, `cgpa3`, `cgpa4`, `rname`, `rnumber`, `batch`, `rid`, `rrelationship`, `created_at`, `updated_at`) VALUES
(1, 'd', 'df', 'dg', 'g', 'gfg', 'gd', '5', 'fg', '2020-09-02', 'Bangladeshi', 'A+', 'Male', 'aynul086@gmail.com', '5', '5', '5', 'r', NULL, NULL, NULL, 'r', NULL, NULL, NULL, 'r', NULL, NULL, NULL, 'r', NULL, NULL, NULL, 'r', '5', 'rg', '5', 'fg', '2020-08-25 22:34:56', '2020-08-25 22:34:56'),
(2, 'Aynul', 'Makbul', 'Moriom', 'Dhaka', 'Tetulia', 'Dhaka', '567567567657', 'Student', '2020-08-12', 'Bangladeshi', 'AB+', 'Male', 'aynul086@gmail.com', '454354', '23432543', 'Parents', 'Shalbahan', 'Dinajpur Polytechnic', NULL, NULL, 'Dinajpur', 'BTEB', NULL, NULL, '2013', '2017', NULL, NULL, '4.81', '3.78', NULL, NULL, 'Munna', '324324324', '3rd', '3432434', 'academic', '2020-08-25 22:37:31', '2020-08-25 22:37:31'),
(3, 'Aynul', 'Makbul', 'Moriom', 'Tetulia', 'Dhaka', 'Dhaka', '35345435', 'zdfvdv', '2020-08-19', 'Bangladeshi', 'A-', 'Male', 'aynul086@gmail.com', '34543', '435345', 'xcb', 'fdsf', NULL, 'zxvxzv', NULL, 'sff', NULL, 'zxvxz', NULL, 'zcxxzc', NULL, 'vxzv', NULL, 'zczxvczxv', NULL, 'xzvxv', NULL, 'zxcv', '34', '3532', '35', 'scfzxv', '2020-08-26 00:18:46', '2020-08-26 00:18:46'),
(4, 'Md.Aynul Haque', 'Md.Makbul Hossen', 'Mst.Moriom', 'Chandra Kaliakoir Gazipur', 'Tetulia, Panchagarh', 'Chandra kaliakoir', '6578908765', 'IT Officer', '1996-01-01', 'Bangladeshi', 'A+', 'Male', 'aynul086@gmail.com', '01781093576', '01987946546', 'Parents', 'Shalbahan High School', 'Dinajpur Polytechnic Institute', NULL, NULL, 'Dinajpur', 'BTEB', NULL, NULL, '2013', '2017', NULL, NULL, '4.81', '3.78', NULL, NULL, 'Md.Mominul Haque', '01781093577', '3rd', '565676877', 'Academic', '2020-08-26 22:45:01', '2020-08-26 22:45:01'),
(5, 'Aynul', 'Makbul', 'Moriom', 'Dhaka', 'Tetulia', 'Dhaka', '678689', 'Student', '2001-06-13', 'Bangladeshi', 'A-', 'Male', 'aynul086@gmail.com', '34545', '345435', 'Parents', 'Shalbahan', NULL, NULL, NULL, 'Dinajpur', NULL, NULL, NULL, '2013', NULL, NULL, NULL, '4.81', NULL, NULL, NULL, 'fg', '44345', 'ft', '345433', 'academic', '2020-08-26 23:16:02', '2020-08-26 23:16:02');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md.Aynul Haque', 'aynul086@gmail.com', NULL, '$2y$10$ylXGLRAfSbTsbPd.Qt0uFOdUHOQsDtYlhRsTvuM/VccYP21Sq9Tf2', NULL, '2020-08-26 09:47:04', '2020-08-26 09:47:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fivers`
--
ALTER TABLE `fivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelances`
--
ALTER TABLE `freelances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fivers`
--
ALTER TABLE `fivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `freelances`
--
ALTER TABLE `freelances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
