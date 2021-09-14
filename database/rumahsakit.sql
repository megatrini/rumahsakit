-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 04:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `no_antrian` int(10) UNSIGNED NOT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasien_id_pas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`no_antrian`, `tgl`, `keluhan`, `no_kamar`, `nama_kamar`, `pasien_id_pas`, `created_at`, `updated_at`) VALUES
(1, '12/01/2019', 'pusing, batuk', '3', 'Anggrek', '1', '2020-05-21 07:08:29', '2020-05-21 07:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(10) UNSIGNED NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_praktek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dok`, `nama_dokter`, `jadwal_praktek`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Suprapto', '', '2020-05-23 00:58:01', '2020-05-23 02:03:42'),
(2, 'Dr. Heri Heryawan', '', '2020-05-23 01:13:52', '2020-05-23 01:13:52'),
(3, 'Dr. Yani Nuraeni', 'sabtu', '2020-05-23 01:14:42', '2020-05-23 01:14:42'),
(4, 'Dr. Endang', '', '2020-05-23 01:19:08', '2020-05-23 01:19:08'),
(5, 'Dr. Surendah', '', '2020-05-23 01:28:16', '2020-05-23 01:28:16'),
(6, 'Dr.Edi Junaedi', '', '2020-05-23 01:39:41', '2020-05-23 01:39:41'),
(7, 'Dr. Mulyadi', '', '2020-05-23 02:02:02', '2020-05-23 02:03:15'),
(8, 'Dr. Ita', 'kamis', '2020-05-23 02:08:37', '2020-05-25 06:02:10');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_14_133001_create_pasien_table', 1),
(4, '2020_05_18_041325_create_administrasi_table', 1),
(5, '2020_05_21_091146_create_rekam_medis_table', 1),
(6, '2020_05_21_130600_add_diagnosa_on_rekam_medis_table', 1),
(7, '2020_05_23_070922_create_dokter_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pas` int(10) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pas`, `nama_pasien`, `jk`, `tgl_lahir`, `alamat`, `kota_asal`, `goldar`, `nama_wali`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Gumilar', 'L', '02/20/2001', 'jl. cicaheum no.67', 'Bandung', 'B', 'asep sunendar sukiman', '2020-05-21 07:07:52', '2020-05-21 07:08:00'),
(2, 'Indah Sukmawati', 'P', '06/17/1998', 'Jl. bale endah 89', 'Bandung', 'AB', 'Rukmiati', '2020-05-23 01:23:03', '2020-05-23 01:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_diagnosa` int(10) UNSIGNED NOT NULL,
  `administrasi_no_antrian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasien_id_pas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_id_dok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_rujukan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_diagnosa`, `administrasi_no_antrian`, `pasien_id_pas`, `dokter_id_dok`, `diagnosa`, `ket_rujukan`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'demam', 'dari rumah sakit', '2020-05-21 07:17:36', '2020-05-21 22:30:01'),
(2, '2', '2', '2', 'asma', 'tidak ada', '2020-05-21 07:19:34', '2020-05-21 07:19:34');

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
(1, 'Mega Trini', 'megatrini@gmail.com', NULL, '$2y$10$OySvXD9U3/RS/GwLRV/zY.mT4IPFGKcqZry3qArPxUJYQkyaqK9nK', '6ruU16OBfzLMckLx1NjKuvyipxZeOugK2IFFjJj48mtiOZ32SdCtQxAQyAmq', '2020-05-21 07:07:05', '2020-05-21 07:07:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`no_antrian`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dok`);

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
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_diagnosa`);

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
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `no_antrian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `no_diagnosa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
