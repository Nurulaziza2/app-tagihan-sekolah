-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2022 at 12:22 PM
-- Server version: 8.0.29-0ubuntu0.22.04.3
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
-- Database: `db-app-pembayaran-spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nominal` double NOT NULL,
  `tahun` int NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `nama`, `nominal`, `tahun`, `deskripsi`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'SPP Menjahit', 150000, 2022, NULL, 1, '2022-05-31 05:23:00', '2022-07-21 14:03:47'),
(3, 'SPP Fashion Design', 100000, 2022, NULL, 1, '2022-05-31 05:41:51', '2022-07-21 14:03:36');

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
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `detail`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Menjahit', NULL, 1, '2022-06-01 07:11:02', '2022-06-01 07:11:02'),
(5, 'Fashion Design', NULL, 1, '2022-06-01 07:11:13', '2022-06-01 07:11:13');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `id` int NOT NULL,
  `tagihan_id` int NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibayar_oleh` varchar(255) NOT NULL,
  `diterima_oleh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tagihan_id`, `jumlah`, `tanggal`, `dibayar_oleh`, `diterima_oleh`, `created_at`, `updated_at`) VALUES
(1, 28, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:08:41', '2022-07-27 12:08:41'),
(2, 36, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:08:56', '2022-07-27 12:08:56'),
(3, 35, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:09:16', '2022-07-27 12:09:16'),
(4, 34, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:11:41', '2022-07-27 12:11:41'),
(5, 33, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:11:49', '2022-07-27 12:11:49'),
(6, 32, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:11:56', '2022-07-27 12:11:56'),
(7, 31, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:12:03', '2022-07-27 12:12:03'),
(8, 30, 134000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:12:13', '2022-07-27 12:12:13'),
(9, 18, 150000, '2022-07-27 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:21:22', '2022-07-27 12:21:22'),
(10, 17, 150000, '2022-08-01 00:00:00', 'Siswa', 'Surya Maulana', '2022-07-27 12:22:06', '2022-07-27 12:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nis` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelas_id` int DEFAULT NULL,
  `durasi` varchar(15) NOT NULL,
  `jumlah_tagihan` int NOT NULL,
  `tgl_masuk` date NOT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `gambar`, `nis`, `email`, `jk`, `alamat`, `kelas_id`, `durasi`, `jumlah_tagihan`, `tgl_masuk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Putri Septiani', NULL, 8010, 'putri.s@gmail.com', 'Perempuan', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(2, 'Ali Taher', NULL, 8011, 'ali.taher@gmail.com', 'Laki-Laki', 'Jambi', 4, '6 bulan', 4, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(3, 'Ardan ', NULL, 8012, 'aaardan@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(4, 'Ariani', NULL, 8013, 'ariani.00@gmail.com', 'Perempuan', 'Jambi', 5, '6 bulan', 4, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(5, 'Cristina', NULL, 8014, 'ths.cristina@gmail.com', 'Perempuan', 'Jambi', 4, '12 bulan', 10, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(6, 'Gustika', NULL, 8015, 'gustixa@gmail.com', 'Laki-Laki', 'Jambi', 5, '6 bulan', 4, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(7, 'Irsandi', NULL, 8016, 'irsandi@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(8, 'Ismail', NULL, 8017, 'ismail@gmail.com', 'Laki-Laki', 'Jambi', 4, '3 bulan', 1, '2022-05-30', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(9, 'Junaidi', NULL, 8018, 'junaidi@gmail.com', 'Laki-Laki', 'Jambi', 4, '12 bulan', 10, '2022-05-30', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(10, 'Azizah', NULL, 8019, 'azh.2019@gmail.com', 'Perempuan', 'Jambi', 5, '3 bulan', 1, '2022-05-30', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(11, 'Muh Irsank', NULL, 8020, 'muhirsank@gmail.com', 'Laki-Laki', 'Jambi', 4, '12 bulan', 10, '2022-05-30', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(12, 'M Taufik', NULL, 8021, 'taufik.m@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-30', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(13, 'Rony M', NULL, 8022, 'rony.m@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-31', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(14, 'Slamet', NULL, 8023, 'slamet@gmail.com', 'Laki-Laki', 'Jambi', 4, '6 bulan', 4, '2022-05-31', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(15, 'Tri Septi', NULL, 8024, '3Septi@gmail.com', 'Perempuan', 'Jambi', 4, '12 bulan', 10, '2022-05-31', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03'),
(16, 'Caca Ayuni', NULL, 8025, 'ccayuni@gmail.com', 'Perempuan', 'Jambi', 5, '6 bulan', 4, '2022-05-31', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(17, 'Febrilita', NULL, 8026, 'fbrlta@yahoo.com', 'Perempuan', 'Jambi', 5, '6 bulan', 4, '2022-06-01', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:22'),
(18, 'Wildansyah', NULL, 8027, 'wldansyh@gmail.com', 'Laki-Laki', 'Jambi', 4, '3 bulan', 1, '2022-06-01', 4, '2022-07-27 06:48:47', '2022-07-27 11:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `tanggal_tagihan` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `denda` int NOT NULL DEFAULT '0',
  `jumlah_bayar` int DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `dibuat_oleh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa_id`, `tanggal_tagihan`, `tanggal_jatuh_tempo`, `nama`, `jumlah`, `keterangan`, `denda`, `jumlah_bayar`, `status`, `dibuat_oleh`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(2, 3, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(3, 4, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(4, 6, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(5, 7, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(6, 10, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(7, 12, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(8, 13, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(9, 16, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(10, 17, '2022-08-01', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:29', '2022-07-27 11:02:29'),
(11, 2, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:48', '2022-07-27 11:02:48'),
(12, 5, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:48', '2022-07-27 11:02:48'),
(13, 8, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:48', '2022-07-27 11:02:48'),
(14, 9, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:49', '2022-07-27 11:02:49'),
(15, 11, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:49', '2022-07-27 11:02:49'),
(16, 14, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:02:49', '2022-07-27 11:02:49'),
(17, 15, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, 150000, 'Lunas', 'Surya Maulana', '2022-07-27 11:02:49', '2022-07-27 12:22:06'),
(18, 18, '2022-08-01', '2022-08-10', 'SPP Menjahit', 150000, NULL, 0, 150000, 'Lunas', 'Surya Maulana', '2022-07-27 11:02:49', '2022-07-27 12:21:22'),
(19, 2, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(20, 5, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(21, 8, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(22, 9, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(23, 11, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(24, 14, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(25, 15, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(26, 18, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:03', '2022-07-27 11:16:03'),
(27, 1, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 11:16:22'),
(28, 3, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:08:41'),
(29, 4, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 11:16:22'),
(30, 6, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:12:13'),
(31, 7, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:12:03'),
(32, 10, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:11:56'),
(33, 12, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:11:49'),
(34, 13, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:11:41'),
(35, 16, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:09:16'),
(36, 17, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 34000, 134000, 'Lunas', 'Surya Maulana', '2022-07-27 11:16:22', '2022-07-27 12:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', 'admin@mail.com', NULL, '$2y$10$GUOdLZZj3c4KF6p5j4PLiOpbHvaEJ7Te2DU.1F3hkOBOXOKZlevGm', 'admin', '2022-05-25 08:03:41', '2022-06-02 02:43:47'),
(4, 'Surya Maulana', 'surya@mail.com', NULL, '$2a$12$CNMhP2acLAtAevgHMPfARuizR14spzFE1Jn2/qrBL05exj4W04T8a', 'operator', '2022-05-30 08:44:43', '2022-07-26 14:27:17'),
(5, 'Yuda Anugrah', 'yuda@gmail.com', NULL, '$2y$10$2pIC6vBItutmEd0ElYBNcOGFGAe3ynuCn0QNVYgIU1N8Ry9WmDWPK', 'operator', '2022-06-30 08:26:51', '2022-06-30 08:29:49');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
