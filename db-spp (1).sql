-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2022 at 02:17 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` double NOT NULL,
  `tahun` int NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `nama`, `nominal`, `tahun`, `deskripsi`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'SPP  Industri Garmen', 650000, 2022, NULL, 1, '2022-08-17 09:07:46', '2022-08-17 16:42:33'),
(4, 'SPP Fashion Design', 700000, 2022, NULL, 1, '2022-08-17 16:43:00', '2022-08-17 16:43:00'),
(5, 'SPP Tata Busana Butik', 600000, 2022, NULL, 1, '2022-08-17 16:43:16', '2022-08-17 16:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_id` int NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `biaya_id`, `detail`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tata Busana Butik', 5, NULL, 2, '2022-08-12 06:55:48', '2022-08-17 16:46:13'),
(2, 'Fashion Design', 4, NULL, 2, '2022-08-12 06:56:03', '2022-08-17 16:46:06'),
(3, 'Industri Garmen', 3, NULL, 2, '2022-08-12 06:56:18', '2022-08-17 16:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_07_002643_create_biaya_table', 1),
(5, '2022_08_07_003220_create_kelas_table', 1),
(6, '2022_08_07_003336_create_pembayaran_table', 1),
(7, '2022_08_07_003556_create_tagihan_table', 1),
(8, '2022_08_07_004357_create_siswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int UNSIGNED NOT NULL,
  `tagihan_id` int NOT NULL,
  `kelas_id` int DEFAULT NULL,
  `jumlah` double NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibayar_oleh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diterima_oleh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tagihan_id`, `kelas_id`, `jumlah`, `tanggal`, `dibayar_oleh`, `diterima_oleh`, `created_at`, `updated_at`) VALUES
(1, 22, 3, 650000, '2022-08-26 00:00:00', 'Siswa', 'Operator', '2022-08-26 05:23:57', '2022-08-26 05:23:57'),
(2, 15, 2, 700000, '2022-08-26 00:00:00', 'Siswa', 'Operator', '2022-08-26 05:38:11', '2022-08-26 05:38:11'),
(3, 1, 1, 600000, '2022-08-26 00:00:00', 'Siswa', 'Operator', '2022-08-26 05:38:28', '2022-08-26 05:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int DEFAULT NULL,
  `durasi` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tagihan` int NOT NULL,
  `tgl_masuk` date NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `gambar`, `nis`, `email`, `jk`, `alamat`, `kelas_id`, `durasi`, `jumlah_tagihan`, `tgl_masuk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Putri Septiani', NULL, 8010, 'putri.s@gmail.com', 'Perempuan', 'Jambi', 3, '3 bulan', 2, '2022-06-11', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(2, 'Ali Taher', NULL, 8011, 'ali.taher@gmail.com', 'Laki-Laki', 'Jambi', 1, '6 bulan', 5, '2022-06-12', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(3, 'Ardan ', NULL, 8012, 'aaardan@gmail.com', 'Laki-Laki', 'Jambi', 2, '3 bulan', 2, '2022-06-12', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(4, 'Ariani', NULL, 8013, 'ariani.00@gmail.com', 'Perempuan', 'Jambi', 2, '6 bulan', 5, '2022-06-15', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(5, 'Cristina', NULL, 8014, 'ths.cristina@gmail.com', 'Perempuan', 'Jambi', 1, '12 bulan', 11, '2022-06-18', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(6, 'Gustika', NULL, 8015, 'gustixa@gmail.com', 'Laki-Laki', 'Jambi', 2, '6 bulan', 5, '2022-06-22', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(7, 'Irsandi', NULL, 8016, 'irsandi@gmail.com', 'Laki-Laki', 'Jambi', 2, '3 bulan', 2, '2022-06-24', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(8, 'Islamia', NULL, 8017, 'islmiahh@gmail.com', 'Perempuan', 'Jambi', 3, '3 bulan', 2, '2022-06-25', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(9, 'Junaidi', NULL, 8018, 'junaidi@gmail.com', 'Laki-Laki', 'Jambi', 3, '12 bulan', 11, '2022-06-27', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(10, 'Azizah', NULL, 8019, 'azh.2019@gmail.com', 'Perempuan', 'Jambi', 2, '3 bulan', 2, '2022-06-28', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(11, 'Muh Irsank', NULL, 8020, 'muhirsank@gmail.com', 'Laki-Laki', 'Jambi', 1, '6 bulan', 5, '2022-06-30', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(12, 'M Taufik', NULL, 8021, 'taufik.m@gmail.com', 'Laki-Laki', 'Jambi', 1, '3 bulan', 2, '2022-07-01', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(13, 'Rismawati', NULL, 8022, 'rsmawti@gmail.com', 'Perempuan', 'Jambi', 2, '3 bulan', 2, '2022-07-01', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(14, 'Slamet', NULL, 8023, 'slamet@gmail.com', 'Laki-Laki', 'Jambi', 1, '6 bulan', 5, '2022-07-02', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(15, 'Beby Ayunda', NULL, 8024, 'bby.aynda@gmail.com', 'Perempuan', 'Jambi', 3, '12 bulan', 11, '2022-07-03', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(16, 'Caca Ayuni', NULL, 8025, 'ccayuni@gmail.com', 'Perempuan', 'Jambi', 2, '6 bulan', 5, '2022-07-05', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(17, 'Febrilita', NULL, 8026, 'fbrlta@yahoo.com', 'Perempuan', 'Jambi', 1, '6 bulan', 5, '2022-07-06', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(18, 'Wildansyah', NULL, 8027, 'wldansyh@gmail.com', 'Laki-Laki', 'Jambi', 3, '3 bulan', 2, '2022-07-06', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(19, 'Sheilla ', NULL, 8028, 'shllaa@gmail.com', 'Perempuan', 'Jambi', 1, '3 bulan', 2, '2022-07-07', 2, '2022-08-26 05:04:04', '2022-08-26 05:06:04'),
(20, 'Rony M', NULL, 8029, 'rony.m@gmail.com', 'Laki-Laki', 'Jambi', 2, '6 bulan', 5, '2022-07-09', 2, '2022-08-26 05:04:04', '2022-08-26 05:07:37'),
(21, 'Leni Aprilia', NULL, 8030, 'aprilia.leni@gmail.com', 'Perempuan', 'Jambi', 3, '3 bulan', 2, '2022-07-09', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20'),
(22, 'Tri Septi', NULL, 8031, '3Septi@gmail.com', 'Perempuan', 'Jambi', 3, '6 bulan', 5, '2022-07-09', 2, '2022-08-26 05:04:04', '2022-08-26 05:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_id` int NOT NULL,
  `kelas_id` int NOT NULL,
  `tanggal_tagihan` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `jumlah` double NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denda` double NOT NULL DEFAULT '0',
  `jumlah_bayar` double DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibuat_oleh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `nama`, `siswa_id`, `kelas_id`, `tanggal_tagihan`, `tanggal_jatuh_tempo`, `jumlah`, `keterangan`, `denda`, `jumlah_bayar`, `status`, `dibuat_oleh`, `created_at`, `updated_at`) VALUES
(1, 'SPP Tata Busana Butik', 2, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, 600000, 'Lunas', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:38:28'),
(2, 'SPP Tata Busana Butik', 5, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(3, 'SPP Tata Busana Butik', 11, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(4, 'SPP Tata Busana Butik', 12, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(5, 'SPP Tata Busana Butik', 14, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(6, 'SPP Tata Busana Butik', 17, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(7, 'SPP Tata Busana Butik', 19, 1, '2022-09-01', '2022-09-10', 600000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:06:04', '2022-08-26 05:06:04'),
(8, 'SPP Fashion Design', 3, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(9, 'SPP Fashion Design', 4, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(10, 'SPP Fashion Design', 6, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(11, 'SPP Fashion Design', 7, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(12, 'SPP Fashion Design', 10, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(13, 'SPP Fashion Design', 13, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(14, 'SPP Fashion Design', 16, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:07:37'),
(15, 'SPP Fashion Design', 20, 2, '2022-09-01', '2022-09-10', 700000, NULL, 0, 700000, 'Lunas', 'Operator', '2022-08-26 05:07:37', '2022-08-26 05:38:11'),
(16, 'SPP  Industri Garmen', 1, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(17, 'SPP  Industri Garmen', 8, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(18, 'SPP  Industri Garmen', 9, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(19, 'SPP  Industri Garmen', 15, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(20, 'SPP  Industri Garmen', 18, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(21, 'SPP  Industri Garmen', 21, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, NULL, 'Belum Bayar', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:08:20'),
(22, 'SPP  Industri Garmen', 22, 3, '2022-09-01', '2022-09-10', 650000, NULL, 0, 650000, 'Lunas', 'Operator', '2022-08-26 05:08:20', '2022-08-26 05:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', 'admin@mail.com', NULL, '$2y$10$UIMomq8xrlZ6uisey5dK9.DCaR5MOD.qU9q.N0T6RcSb.4CBWB7Wa', 'admin', NULL, '2022-08-10 12:55:03', '2022-08-10 12:55:03'),
(2, 'Operator', 'operator@mail.com', NULL, '$2y$10$gTrIn4Tyl9AhNA7vFQM0iuZ98SRdFbTVKrFiSYbhswkuixfVKt4WG', 'operator', NULL, '2022-08-10 12:55:03', '2022-08-10 12:55:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_email_unique` (`email`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
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
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
