-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 11:17 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `text`, `photo_path`, `updated_at`, `created_at`, `username`) VALUES
(1, 'asdasd', 'asdasd', 'artikel/', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(2, 'Proposal Penawaran E-Wadul', 'asdasdasdasd', 'artikel/', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(3, 'asdf', 'asdasdasd', 'artikel/', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(4, 'asdasdasd', 'asdasdasd', 'terserah', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(5, 'asdasdasd', 'asdasdasd', 'terserah', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(6, 'asdasdasd', 'asdasdasd', 'terserah', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(7, 'coba test', 'coba coba coba', 'coba test.png', '2018-07-09 17:00:00', '2018-07-09 17:00:00', ''),
(8, 'coba nambah ini', 'kenapa ya?', 'coba nambah ini.png', '2018-07-10 17:00:00', '2018-07-10 17:00:00', ''),
(9, 'waka waka ee', 'zamena mena mena wakaliwa', 'waka waka ee.png', '2018-07-10 17:00:00', '2018-07-10 17:00:00', ''),
(12, 'ini dicoba kawan', 'wkwkwkwkw ee', 'Screenshot (2).png', '2018-07-10 17:00:00', '2018-07-10 17:00:00', ''),
(13, 'Kasus Hilangnya Domba di Hari Itu', '<b>Domba</b> hilang yang sangat merana dan kasihan dalam hidupnya.<br>\r\nkucoba untuk menerka.', 'Screenshot (2).png', '2018-07-24 17:00:00', '2018-07-24 17:00:00', ''),
(14, 'Satu Dua Katak Meloncat', 'upin upin kesurupan suster ngesot keramas shampoo rejoice', '4.jpg', '2018-07-25 17:00:00', '2018-07-25 17:00:00', ''),
(15, 'Upin Ipin Puasa Ramadhan', 'Pas buka eh ternyata masih siang wkwkwkwkwkwkwkwkwkwk', '5.jpg', '2018-07-25 17:00:00', '2018-07-25 17:00:00', ''),
(16, 'Coba date ini (edit)', 'Artikel adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.', '3.jpg', '2018-07-26 06:16:57', '2018-07-26 06:12:47', ''),
(17, 'coba urutan kali ini', 'Penulis Artikel adalah orang atau individu yang bertindak dalam pengarangan sebuah tulisan, penggabungan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat pembaca merasakan dapat mengetahui apa yang sebelumnya tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari pengalaman seseorang, imajinasi, pengetahuan umum atau penelitian ilmiah.', 'a1.jpg', '2018-07-26 06:15:41', '2018-07-26 06:15:41', ''),
(18, 'Coba yang ke 3 (juwita)', 'Hampir semua pelosok Mentawai indah. Di empat kecamatan masih terdapat hutan yang masih perawan. Hutan ini menyimpan ratusan jenis flora dan fauna. Hutan Mentawai juga menyimpan anggrek aneka jenis dan fauna yang hanya terdapat di Mentawai. Siamang kerdil, lutung Mentawai dan beruk Simakobu adalah contoh primata yang menarik untuk bahan penelitian dan objek wisata.', 'asli.jpg', '2018-07-27 05:27:26', '2018-07-26 06:16:14', 'juwita'),
(19, 'ini percobaan admin 1', 'Mengingat akan lebih mudah daripada melupakan, menangis adalah cara ketika kesedihan  tak layak untuk di simpan.﻿', 'babi.jpg', '2018-07-27 04:54:04', '2018-07-27 04:54:04', ''),
(20, 'coba admin 2', 'ini coba semoga bisa', 'a1.jpg', '2018-07-27 05:23:56', '2018-07-27 05:23:56', 'admin'),
(21, 'ini uji coba admin 2', 'wkwkwk ee', 'Capture2.PNG', '2018-07-27 05:25:04', '2018-07-27 05:25:04', 'juwita'),
(22, 'ini contoh', '<p>\r\n    Peternakan merupakan inti dari masalah.\r\n</p>\r\n<br>\r\n<p>\r\n    begitulah adanya\r\n</p>\r\n<strong>hahahahahah</strong>', '2.jpg', '2018-07-31 19:46:36', '2018-07-31 19:46:36', 'admin'),
(23, 'Proposal Penawaran E-Wadul', '<p><strong>fgfgdfgdfg</strong></p><p><br></p><p><em>dfgdfgdfgdf</em></p><p><s>xcgxdgxg</s></p><p><s>xdfxdfxdf</s></p>', 'babi.jpg', '2018-08-01 21:12:11', '2018-08-01 21:12:11', 'admin'),
(24, 'ini buat ngecek waktu upload (edited) -done', '<p><strong>Artikel</strong> adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Karangan\" title=\"Karangan\">karangan</a> faktual secara lengkap dengan panjang tertentu yang dibuat untuk&nbsp;<a href=\"https://id.wikipedia.org/wiki/Publikasi\" title=\"Publikasi\">dipublikasikan</a> (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.</p>', '3.jpg', '2018-08-03 04:20:50', '2018-08-03 04:19:03', 'admin'),
(25, 'mencoba', '<p>Penulis Artikel adalah orang atau individu yang bertindak dalam pengarangan sebuah tulisan, penggabungan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat pembaca merasakan dapat mengetahui apa yang sebelumnya tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari pengalaman seseorang,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Imajinasi\" title=\"Imajinasi\">imajinasi</a>, pengetahuan umum atau penelitian ilmiah.</p>', 'bom.jpg', '2018-08-03 04:29:05', '2018-08-03 04:23:00', 'admin'),
(26, 'text waktu', '<p style=\"text-align: justify;\"><strong>Artikel</strong> adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Karangan\" title=\"Karangan\">karangan</a> faktual secara lengkap dengan panjang tertentu yang dibuat untuk&nbsp;<a href=\"https://id.wikipedia.org/wiki/Publikasi\" title=\"Publikasi\">dipublikasikan</a> (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur. </p>', '1.jpg', '2018-08-07 08:01:41', '2018-08-07 08:01:41', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cobas`
--

CREATE TABLE `cobas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cobas`
--

INSERT INTO `cobas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'COba', '2018-07-05 21:37:14', '2018-07-05 21:37:14'),
(2, 'coba', '2018-07-05 21:37:19', '2018-07-05 21:37:19'),
(3, 'Ana', '2018-07-05 21:37:51', '2018-07-05 21:37:51'),
(4, 'ads', '2018-07-05 22:01:12', '2018-07-05 22:01:12'),
(5, 'wkwkwk', '2018-07-05 22:26:54', '2018-07-05 22:26:54');

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
(3, '2018_07_05_230059_create_blogs_table', 1),
(4, '2018_07_06_034637_create_cobas_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andrean Januar Priatmojo', 'an.jp29@gmail.com', '$2y$10$Vaz2Mle.dklBr6cDMbI0R.oHaML.BWZAQBV1EQuuijcugsMQwOtjq', 'E26SsTHcWAhcPsqCwgcau7av7mzBwiGO8ffGWYejhy9Ke8frDu9UOLxcDdla', '2018-07-05 20:30:00', '2018-07-05 20:30:00'),
(2, 'admin', 'admin@gmail.com', '$2y$10$7sc1.jBqQDHek9NWR/HPPO5QHEwIv2B1KjFLvWr2y6PyXr/dNoQru', 'nkuO8ge3N0sxu3VpYX4Oce1uLIq7Nndp88H363Q7tg3wA8nsg7mg41EJCgxh', '2018-07-05 21:46:12', '2018-07-05 21:46:12'),
(3, 'juwita', 'juwita@gmail.com', '$2y$10$oXJn4iwcbjcJLy9DBYAbmOZb0Z5gnsqMYy3v1jLeV6DTqIK.8nAza', 'sAx7vKPCPRRenA8rIIVQt92prXmoxaDeWW8BuKPegupHiMZhEtTvLQFqZGSo', '2018-07-12 05:09:38', '2018-07-12 05:09:38'),
(4, 'Andrean Januar Priatmojo', 'tian@gmail.com', '$2y$10$KHodzVxUjlpz0B/ncdVQXOt2/zYDvC.EDiA4qt4ezNQbFpqJYKS3a', 'LMB8ZXv0ImU3l0PeBGXqehgX3rHjhuApEplgss3DU0u56aCQF3TSJTc2jzQE', '2018-07-12 21:13:51', '2018-07-12 21:13:51'),
(5, 'admin', 'admin@admin.com', '$2y$10$A72gPUJBb93QoTa23o8lbuDppCute.HpjzsFm9kZnLsoGUSHin3oS', 'BJyFH2L905n8udMCaoAjSuRsAKB0nySmZVN2cMysIDbRPwBRDCwNyOqZXW3f', '2018-07-24 19:34:59', '2018-07-24 19:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cobas`
--
ALTER TABLE `cobas`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cobas`
--
ALTER TABLE `cobas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
