-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 09:24 AM
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
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `text`, `photo_path`, `username`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdasd', 'artikel/', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(2, 'Proposal Penawaran E-Wadul', 'asdasdasdasd', 'artikel/', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(3, 'asdf', 'asdasdasd', 'artikel/', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(4, 'asdasdasd', 'asdasdasd', 'terserah', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(5, 'asdasdasd', 'asdasdasd', 'terserah', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(6, 'asdasdasd', 'asdasdasd', 'terserah', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(7, 'coba test', 'coba coba coba', 'coba test.png', '', 0, '2018-07-09 10:00:00', '2018-07-09 10:00:00'),
(8, 'coba nambah ini', 'kenapa ya?', 'coba nambah ini.png', '', 0, '2018-07-10 10:00:00', '2018-07-10 10:00:00'),
(9, 'waka waka ee', 'zamena mena mena wakaliwa', 'waka waka ee.png', '', 0, '2018-07-10 10:00:00', '2018-07-10 10:00:00'),
(12, 'ini dicoba kawan', 'wkwkwkwkw ee', 'Screenshot (2).png', '', 0, '2018-07-10 10:00:00', '2018-07-10 10:00:00'),
(13, 'Kasus Hilangnya Domba di Hari Itu', '<b>Domba</b> hilang yang sangat merana dan kasihan dalam hidupnya.<br>\r\nkucoba untuk menerka.', 'Screenshot (2).png', '', 0, '2018-07-24 10:00:00', '2018-07-24 10:00:00'),
(14, 'Satu Dua Katak Meloncat', 'upin upin kesurupan suster ngesot keramas shampoo rejoice', '4.jpg', '', 0, '2018-07-25 10:00:00', '2018-07-25 10:00:00'),
(15, 'Upin Ipin Puasa Ramadhan', 'Pas buka eh ternyata masih siang wkwkwkwkwkwkwkwkwkwk', '5.jpg', '', 0, '2018-07-25 10:00:00', '2018-07-25 10:00:00'),
(16, 'Coba date ini (edit)', 'Artikel adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.', '3.jpg', '', 0, '2018-07-25 23:12:47', '2018-07-25 23:16:57'),
(17, 'coba urutan kali ini', 'Penulis Artikel adalah orang atau individu yang bertindak dalam pengarangan sebuah tulisan, penggabungan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat pembaca merasakan dapat mengetahui apa yang sebelumnya tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari pengalaman seseorang, imajinasi, pengetahuan umum atau penelitian ilmiah.', 'a1.jpg', '', 0, '2018-07-25 23:15:41', '2018-07-25 23:15:41'),
(18, 'Coba yang ke 3 (juwita)', 'Hampir semua pelosok Mentawai indah. Di empat kecamatan masih terdapat hutan yang masih perawan. Hutan ini menyimpan ratusan jenis flora dan fauna. Hutan Mentawai juga menyimpan anggrek aneka jenis dan fauna yang hanya terdapat di Mentawai. Siamang kerdil, lutung Mentawai dan beruk Simakobu adalah contoh primata yang menarik untuk bahan penelitian dan objek wisata.', 'asli.jpg', 'juwita', 0, '2018-07-25 23:16:14', '2018-07-26 22:27:26'),
(19, 'ini percobaan admin 1', 'Mengingat akan lebih mudah daripada melupakan, menangis adalah cara ketika kesedihan  tak layak untuk di simpan.﻿', 'babi.jpg', '', 0, '2018-07-26 21:54:04', '2018-07-26 21:54:04'),
(20, 'coba admin 2', 'ini coba semoga bisa', 'a1.jpg', 'admin', 0, '2018-07-26 22:23:56', '2018-07-26 22:23:56'),
(21, 'ini uji coba admin 2', 'wkwkwk ee', 'Capture2.PNG', 'juwita', 0, '2018-07-26 22:25:04', '2018-07-26 22:25:04'),
(22, 'ini contoh', '<p>\r\n    Peternakan merupakan inti dari masalah.\r\n</p>\r\n<br>\r\n<p>\r\n    begitulah adanya\r\n</p>\r\n<strong>hahahahahah</strong>', '2.jpg', 'admin', 0, '2018-07-31 12:46:36', '2018-07-31 12:46:36'),
(23, 'Proposal Penawaran E-Wadul', '<p><strong>fgfgdfgdfg</strong></p><p><br></p><p><em>dfgdfgdfgdf</em></p><p><s>xcgxdgxg</s></p><p><s>xdfxdfxdf</s></p>', 'babi.jpg', 'admin', 0, '2018-08-01 14:12:11', '2018-08-01 14:12:11'),
(24, 'ini buat ngecek waktu upload (edited) -done', '<p><strong>Artikel</strong> adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Karangan\" title=\"Karangan\">karangan</a> faktual secara lengkap dengan panjang tertentu yang dibuat untuk&nbsp;<a href=\"https://id.wikipedia.org/wiki/Publikasi\" title=\"Publikasi\">dipublikasikan</a> (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.</p>', '3.jpg', 'admin', 0, '2018-08-02 21:19:03', '2018-08-02 21:20:50'),
(25, 'mencoba', '<p>Penulis Artikel adalah orang atau individu yang bertindak dalam pengarangan sebuah tulisan, penggabungan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat pembaca merasakan dapat mengetahui apa yang sebelumnya tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari pengalaman seseorang,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Imajinasi\" title=\"Imajinasi\">imajinasi</a>, pengetahuan umum atau penelitian ilmiah.</p>', 'bom.jpg', 'admin', 2, '2018-08-02 21:23:00', '2018-08-09 04:26:58'),
(26, 'text waktu', '<p style=\"text-align: justify;\"><strong>Artikel</strong> adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Karangan\" title=\"Karangan\">karangan</a> faktual secara lengkap dengan panjang tertentu yang dibuat untuk&nbsp;<a href=\"https://id.wikipedia.org/wiki/Publikasi\" title=\"Publikasi\">dipublikasikan</a> (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur. </p>', '1.jpg', 'admin', 46, '2018-08-07 01:01:41', '2018-08-28 08:49:26'),
(27, 'coba baru lagi', '<p style=\"text-align: justify;\"><strong>Artikel</strong> adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur. </p>', '5.jpg', 'admin', 95, '2018-08-09 05:49:06', '2018-08-28 08:48:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
