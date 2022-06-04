-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 12:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-app-pembayaran-spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nominal` double NOT NULL,
  `tahun` int(4) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `nama`, `nominal`, `tahun`, `deskripsi`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'SPP DESAIN 2022', 100000, 2022, NULL, 1, '2022-05-31 05:23:00', '2022-05-31 05:23:00'),
(3, 'SPP Fashion', 100000, 2022, NULL, 1, '2022-05-31 05:41:51', '2022-05-31 05:41:51');

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
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `durasi_kursus` varchar(20) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `durasi_kursus`, `detail`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Menjahit', '3 Bulan', NULL, 1, '2022-06-01 07:11:02', '2022-06-01 07:11:02'),
(5, 'Fashion Design', '3 Bulan', NULL, 1, '2022-06-01 07:11:13', '2022-06-01 07:11:13'),
(6, 'Menjahit', '6 Bulan', NULL, 1, '2022-06-01 07:11:23', '2022-06-01 07:11:23'),
(7, 'Fashion Design', '6 Bulan', NULL, 1, '2022-06-01 07:15:38', '2022-06-01 07:15:38'),
(9, 'Menjahit', '12 Bulan', NULL, 1, '2022-06-01 07:16:31', '2022-06-01 07:16:31'),
(10, 'Fashion Design', '12 Bulan', NULL, 1, '2022-06-01 07:16:39', '2022-06-01 07:16:39'),
(11, 'Fashion Design & Menjahit', '12 Bulan', NULL, 1, '2022-06-01 07:29:27', '2022-06-01 07:29:27');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nis` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `gambar`, `nis`, `email`, `jk`, `tgl_masuk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Aldi Taher', '', 8010, 'alditaher@gmail.com', 'Pria', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(2, 'Ananda Ali Taher', '', 8011, 'anandaalitaher@gmail.com', 'Pria', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(3, 'Ardan Badarudin', '', 8012, 'ardanbadarudin@gmail.com', 'Pria', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(4, 'Arial Hunaiku', '', 8013, 'arialhunaiku@gmail.com', 'Pria', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(5, 'Cristina Marsionova', '', 8014, 'cristinamarsionova@gmail.com', 'Wanita', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(6, 'Gustixa', '', 8015, 'gustixa@gmail.com', 'Pria', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(7, 'Irsandi', '', 8016, 'irsandi@gmail.com', 'Wanita', '2022-05-29', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(8, 'Ismail', '', 8017, 'ismail@gmail.com', 'Pria', '2022-05-30', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(9, 'Junaidi', '', 8018, 'junaidi@gmail.com', 'Pria', '2022-05-30', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(10, 'Lord Rangga Sasana', '', 8019, 'lordranggasasana@gmail.com', 'Pria', '2022-05-30', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(11, 'Muh Irsank', '', 8020, 'muhirsank@gmail.com', 'Pria', '2022-05-30', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(12, 'Muhammad Rizkhal Lamaau', '', 8021, 'muhammadrizkhallamaau@gmail.com', 'Pria', '2022-05-30', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(13, 'Rony Marteen', '', 8022, 'ronymarteen@gmail.com', 'Pria', '2022-05-31', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(14, 'Slamet', '', 8023, 'slamet@gmail.com', 'Wanita', '2022-05-31', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(15, 'Tretan Bukan Muslim', '', 8024, 'tretanbukanmuslim@gmail.com', 'Pria', '2022-05-31', 1, '2022-06-02 02:15:10', '2022-06-02 02:15:10'),
(16, 'Tretan Muslim', '', 8025, 'tretanmuslim1@gmail.com', 'Laki-laki', '2022-05-31', 1, '2022-06-02 02:15:10', '2022-06-03 02:22:54'),
(17, 'tretan', 'public/images/agYrazlrBRahbMM6NptJxAkovr2plmUd17q8e4jC.jpg', 7009, 'treaten@gmail.com', 'Laki-laki', '2022-06-01', 1, '2022-06-03 02:24:15', '2022-06-03 02:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `tanggal_tagihan` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `denda` int(11) NOT NULL DEFAULT 0,
  `status` varchar(20) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `dibayar_oleh` varchar(255) NOT NULL,
  `dibuat_oleh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', 'admin@mail.com', NULL, '$2y$10$GUOdLZZj3c4KF6p5j4PLiOpbHvaEJ7Te2DU.1F3hkOBOXOKZlevGm', 'admin', '2022-05-25 08:03:41', '2022-06-02 02:43:47'),
(4, 'Surya Maulana Saputra', 'surya@mail.com', NULL, '$2a$12$CNMhP2acLAtAevgHMPfARuizR14spzFE1Jn2/qrBL05exj4W04T8a', 'operator', '2022-05-30 08:44:43', '2022-06-02 02:47:30');

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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
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
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
