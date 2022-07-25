-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 10:09 AM
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
  `kelas_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `nama`, `nominal`, `tahun`, `deskripsi`, `kelas_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'SPP Menjahit', 150000, 2022, NULL, 4, 1, '2022-05-31 05:23:00', '2022-07-21 14:03:47'),
(3, 'SPP Fashion Design', 100000, 2022, NULL, 5, 1, '2022-05-31 05:41:51', '2022-07-21 14:03:36');

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
  `detail` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `tagihan_id` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibayar_oleh` varchar(255) NOT NULL,
  `diterima_oleh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tagihan_id`, `jumlah`, `tanggal`, `dibayar_oleh`, `diterima_oleh`, `created_at`, `updated_at`) VALUES
(1, 29, 130000, '2022-07-25 00:00:00', 'Siswa', 'Surya Maulana Saputra', '2022-07-25 15:05:04', '2022-07-25 15:05:04'),
(2, 5, 190000, '2022-07-25 00:00:00', 'Siswa', 'Surya Maulana Saputra', '2022-07-25 15:05:14', '2022-07-25 15:05:14');

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
  `alamat` varchar(255) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `durasi` varchar(15) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `gambar`, `nis`, `email`, `jk`, `alamat`, `kelas_id`, `durasi`, `jumlah_tagihan`, `tgl_masuk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Surya Maulana Saputra', NULL, 7777, 'surya@mail.com', 'Laki-Laki', 'jambi', 5, '3 bulan', 0, '2022-07-25', 4, '2022-07-25 14:25:58', '2022-07-25 14:49:48'),
(2, 'Aldi Taher', NULL, 8010, 'alditaher@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(3, 'Ananda Ali Taher', NULL, 8011, 'anandaalitaher@gmail.com', 'Laki-Laki', 'Jambi', 5, '6 bulan', 4, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(4, 'Ardan Badarudin', NULL, 8012, 'ardanbadarudin@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(5, 'Arial Hunaiku', NULL, 8013, 'arialhunaiku@gmail.com', 'Laki-Laki', 'Jambi', 5, '6 bulan', 4, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(6, 'Cristina Marsionova', NULL, 8014, 'cristinamarsionova@gmail.com', 'Perempuan', 'Jambi', 5, '12 bulan', 10, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(7, 'Gustixa', NULL, 8015, 'gustixa@gmail.com', 'Laki-Laki', 'Jambi', 5, '6 bulan', 4, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(8, 'Irsandi', NULL, 8016, 'irsandi@gmail.com', 'Perempuan', 'Jambi', 5, '3 bulan', 1, '2022-05-29', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(9, 'Ismail', NULL, 8017, 'ismail@gmail.com', 'Laki-Laki', 'Jambi', 5, '3 bulan', 1, '2022-05-30', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:22'),
(10, 'Junaidi', NULL, 8018, 'junaidi@gmail.com', 'Laki-Laki', 'Jambi', 4, '12 bulan', 9, '2022-05-30', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(11, 'Lord Rangga Sasana', NULL, 8019, 'lordranggasasana@gmail.com', 'Laki-Laki', 'Jambi', 4, '3 bulan', 0, '2022-05-30', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(12, 'Muh Irsank', NULL, 8020, 'muhirsank@gmail.com', 'Laki-Laki', 'Jambi', 4, '12 bulan', 9, '2022-05-30', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(13, 'Muhammad Rizkhal Lamaau', NULL, 8021, 'muhammadrizkhallamaau@gmail.com', 'Laki-Laki', 'Jambi', 4, '3 bulan', 0, '2022-05-30', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(14, 'Rony Marteen', NULL, 8022, 'ronymarteen@gmail.com', 'Laki-Laki', 'Jambi', 4, '3 bulan', 0, '2022-05-31', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(15, 'Slamet', NULL, 8023, 'slamet@gmail.com', 'Perempuan', 'Jambi', 4, '6 bulan', 3, '2022-05-31', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(16, 'Tretan Bukan Muslim', NULL, 8024, 'tretanbukanmuslim@gmail.com', 'Laki-Laki', 'Jambi', 4, '12 bulan', 9, '2022-05-31', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44'),
(17, 'Tretan Muslim', NULL, 8025, 'tretanmuslim@gmail.com', 'Laki-Laki', 'Jambi', 4, '6 bulan', 3, '2022-05-31', 4, '2022-07-25 14:58:52', '2022-07-25 15:01:44');

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
  `jumlah_bayar` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `dibuat_oleh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa_id`, `tanggal_tagihan`, `tanggal_jatuh_tempo`, `nama`, `jumlah`, `keterangan`, `denda`, `jumlah_bayar`, `status`, `dibuat_oleh`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-02', '2022-08-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:30:54', '2022-07-25 14:30:54'),
(2, 1, '2022-09-01', '2022-09-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:34:37', '2022-07-25 14:34:37'),
(4, 1, '2022-10-01', '2022-10-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:49:48', '2022-07-25 14:49:48'),
(5, 2, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 90000, 190000, 'Lunas', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 15:05:14'),
(6, 3, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(7, 4, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(8, 5, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(9, 6, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(10, 7, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(11, 8, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(12, 9, '2022-06-01', '2022-06-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 14:59:49', '2022-07-25 14:59:49'),
(13, 10, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(14, 11, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(15, 12, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(16, 13, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(17, 14, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(18, 15, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(19, 16, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(20, 17, '2022-06-01', '2022-06-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:00:41', '2022-07-25 15:00:41'),
(21, 10, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(22, 11, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(23, 12, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(24, 13, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(25, 14, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(26, 15, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(27, 16, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(28, 17, '2022-07-01', '2022-07-10', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:10', '2022-07-25 15:01:10'),
(29, 2, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 30000, 130000, 'Lunas', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:05:04'),
(30, 3, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(31, 4, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(32, 5, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(33, 6, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(34, 7, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(35, 8, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(36, 9, '2022-07-01', '2022-07-10', 'SPP Fashion Design', 100000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:22', '2022-07-25 15:01:22'),
(37, 10, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(38, 11, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(39, 12, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(40, 13, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(41, 14, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(42, 15, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(43, 16, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44'),
(44, 17, '2022-08-01', '2022-07-17', 'SPP Menjahit', 150000, NULL, 0, NULL, 'Belum Bayar', 'Surya Maulana Saputra', '2022-07-25 15:01:44', '2022-07-25 15:01:44');

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
(4, 'Surya Maulana Saputra', 'surya@mail.com', NULL, '$2a$12$CNMhP2acLAtAevgHMPfARuizR14spzFE1Jn2/qrBL05exj4W04T8a', 'operator', '2022-05-30 08:44:43', '2022-06-18 10:38:37'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
