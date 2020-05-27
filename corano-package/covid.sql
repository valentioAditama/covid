-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 04:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `kasus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `kasus`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'ODP', 'Orang Dalam Pengawasan', NULL, NULL),
(2, 'PDP', 'Pasien Dalam Pengawasan', NULL, NULL),
(3, 'Positif', 'Positif Covid-19', NULL, NULL),
(4, 'Sembuh', 'Sembuh dari Covid-19', NULL, NULL),
(5, 'Meninggal', 'Meninggal karena Covid-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_kasus`
--

CREATE TABLE `data_kasus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_data` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kasus`
--

INSERT INTO `data_kasus` (`id`, `nik`, `id_data`, `nama`, `jenkel`, `umur`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '3613517681871001', 1, 'Salma Fakhriya', 'Perempuan', 17, 'Jawa Barat', 'Bandung', NULL, NULL, 'Melong Asih', NULL, NULL),
(4, '3273173981721001', 1, 'Yudi Dian', 'Laki-laki', 36, 'Jawa Barat', 'Bekasi', NULL, NULL, 'Mekar Wangi', '2020-05-19 02:12:03', '2020-05-19 02:12:03'),
(5, '3273168118730001', 1, 'Uus', 'Laki-laki', 40, 'Jawa Barat', 'Bandung', NULL, NULL, 'Jl. Moch Toha', '2020-05-19 02:17:43', '2020-05-19 02:17:43'),
(6, '3262187191910001', 1, 'Asep', 'Laki-laki', 47, 'Jawa Barat', 'Bandung', NULL, NULL, 'Jl. Anggacarang', '2020-05-19 02:41:46', '2020-05-19 02:41:46'),
(7, '3263816181110001', 1, 'Rian', 'Laki-laki', 47, 'Jawa Barat', 'Bekasi', NULL, NULL, 'Jl. Nyengseret', '2020-05-21 17:18:58', '2020-05-21 17:18:58'),
(10, '3273189171180001', 1, 'Odah', 'Perempuan', 55, 'Jawa Barat', 'Bogor', NULL, NULL, 'Jl. Ciganitri', '2020-05-21 17:21:01', '2020-05-21 17:21:01'),
(11, '327197111810001', 1, 'Ita', 'Perempuan', 51, 'Jawa Barat', 'Bogor', NULL, NULL, 'Poooo', '2020-05-22 06:13:57', '2020-05-22 06:13:57'),
(13, '3127148741980011', 3, 'Arif', 'Laki-laki', 53, 'Jawa Barat', 'Bandung', NULL, NULL, 'Jl. Moch Toha', '2020-05-27 05:58:25', '2020-05-27 05:58:25'),
(15, '3273179789171001', 3, 'Udin', 'Laki-laki', 57, 'Jawa Barat', 'Bekasi', NULL, NULL, 'Mekar Raya', '2020-05-27 06:01:46', '2020-05-27 06:01:46'),
(16, '3271742171130001', 3, 'Rita', 'Perempuan', 45, 'Jawa Barat', 'Bekasi', NULL, NULL, 'Mekar Sari', '2020-05-27 06:03:17', '2020-05-27 07:31:37');

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
(1, '2020_05_17_043527_create_data', 1),
(2, '2020_05_17_150504_create_t_data', 2),
(4, '2020_05_17_163356_create_t_data', 3),
(5, '2020_05_17_163603_create_t_data_kasus', 4);

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
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kasus`
--
ALTER TABLE `data_kasus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_kasus_nik_unique` (`nik`),
  ADD KEY `data_kasus_id_data_foreign` (`id_data`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kasus`
--
ALTER TABLE `data_kasus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kasus`
--
ALTER TABLE `data_kasus`
  ADD CONSTRAINT `data_kasus_id_data_foreign` FOREIGN KEY (`id_data`) REFERENCES `data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
