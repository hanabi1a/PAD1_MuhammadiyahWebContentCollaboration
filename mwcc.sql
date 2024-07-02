-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2024 at 01:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `document_templates`
--

CREATE TABLE `document_templates` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `editable_templates`
--

CREATE TABLE `editable_templates` (
  `id` int UNSIGNED NOT NULL,
  `document_template_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_downloads`
--

CREATE TABLE `history_downloads` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `kajian_id` bigint UNSIGNED NOT NULL,
  `downloaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_downloads`
--

INSERT INTO `history_downloads` (`id`, `user_id`, `kajian_id`, `downloaded_at`, `created_at`, `updated_at`) VALUES
(1, 1, 16, '2024-06-06 22:26:20', '2024-06-06 22:26:20', '2024-06-06 22:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `history_login`
--

CREATE TABLE `history_login` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_login`
--

INSERT INTO `history_login` (`id`, `user_id`, `timestamp`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-06-02 06:54:27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-02 06:54:27', '2024-06-02 06:54:27'),
(2, 1, '2024-06-04 23:47:08', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-04 23:47:08', '2024-06-04 23:47:08'),
(3, 1, '2024-06-05 23:18:29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-05 23:18:29', '2024-06-05 23:18:29'),
(4, 1, '2024-06-06 20:04:18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-06 20:04:18', '2024-06-06 20:04:18'),
(5, 2, '2024-06-07 03:51:30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-07 03:51:30', '2024-06-07 03:51:30'),
(6, 1, '2024-06-07 04:14:02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-07 04:14:02', '2024-06-07 04:14:02'),
(7, 2, '2024-06-09 20:21:06', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-09 20:21:06', '2024-06-09 20:21:06'),
(8, 2, '2024-06-09 20:47:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-09 20:47:32', '2024-06-09 20:47:32'),
(9, 2, '2024-06-12 04:19:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 04:19:32', '2024-06-12 04:19:32'),
(10, 3, '2024-06-12 04:38:16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 04:38:16', '2024-06-12 04:38:16'),
(11, 2, '2024-06-12 06:45:19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 06:45:19', '2024-06-12 06:45:19'),
(12, 1, '2024-06-12 06:47:51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 06:47:51', '2024-06-12 06:47:51'),
(13, 2, '2024-06-12 06:56:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 06:56:54', '2024-06-12 06:56:54'),
(14, 1, '2024-06-12 09:41:12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', '2024-06-12 09:41:12', '2024-06-12 09:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `kajian`
--

CREATE TABLE `kajian` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_file_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemateri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_kajian` text COLLATE utf8mb4_unicode_ci,
  `tanggal_postingan` date DEFAULT NULL,
  `lokasi_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kajian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kajian`
--

INSERT INTO `kajian` (`id`, `slug`, `id_user`, `id_file_kajian`, `pemateri`, `judul_kajian`, `file_kajian`, `deskripsi_kajian`, `tanggal_postingan`, `lokasi_kajian`, `keyword_kajian`, `foto_kajian`, `created_at`, `updated_at`) VALUES
(1, 'kajian-perdana-1', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Abc</p>', '2024-06-07', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734318.png', '2024-06-06 21:25:19', '2024-06-06 21:25:19'),
(2, 'kajian-perdana-2', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Abc</p>', '2024-06-07', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734405.png', '2024-06-06 21:26:45', '2024-06-06 21:26:45'),
(3, 'kajian-perdana-3', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Abc</p>', '2024-06-07', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734460.png', '2024-06-06 21:27:40', '2024-06-06 21:27:40'),
(4, 'kajian-perdana-4', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Halo</p>', '2024-06-05', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734800.png', '2024-06-06 21:33:20', '2024-06-06 21:33:20'),
(5, 'kajian-perdana-5', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Halo</p>', '2024-06-05', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734876.png', '2024-06-06 21:34:36', '2024-06-06 21:34:36'),
(6, 'kajian-perdana-6', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Halo</p>', '2024-06-05', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734912.png', '2024-06-06 21:35:12', '2024-06-06 21:35:12'),
(7, 'kajian-perdana-7', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Halo</p>', '2024-06-05', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717734924.png', '2024-06-06 21:35:24', '2024-06-06 21:35:24'),
(8, 'kajian-perdana-8', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>ASd</p>', '2024-06-07', 'Baciro', NULL, 'kajian/FIB_1717734984.png', '2024-06-06 21:36:24', '2024-06-06 21:36:24'),
(9, 'kajian-perdana-9', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Asd</p>', '2024-06-07', 'Baciro', NULL, 'kajian/FIB_1717735157.png', '2024-06-06 21:39:17', '2024-06-06 21:39:17'),
(10, 'kajian-perdana-10', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Hari Ini Ku <b>Sampaikan</b></p>', '2024-06-14', 'Baciro', NULL, 'kajian/FIB_1717736674.png', '2024-06-06 22:04:34', '2024-06-06 22:04:34'),
(11, 'kajian-perdana-11', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Hari Ini Ku <b>Sampaikan</b></p>', '2024-06-14', 'Baciro', NULL, 'kajian/FIB_1717736702.png', '2024-06-06 22:05:02', '2024-06-06 22:05:02'),
(12, 'kajian-perdana-12', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Halo <b>abang</b></p>', '2024-06-14', 'Baciro', NULL, 'kajian/RAW_1717736843.png', '2024-06-06 22:07:23', '2024-06-06 22:07:23'),
(13, 'kajian-perdana-sampeyan-13', 1, NULL, 'Joko Anwar', 'Kajian Perdana Sampeyan', NULL, '<p>Halo Budi</p>', '2024-06-14', 'Baciro', NULL, 'kajian/Merge_1717737326.png', '2024-06-06 22:15:26', '2024-06-06 22:15:26'),
(14, 'kajian-perdana-sampeyan-pradana-14', 1, NULL, 'Joko Anwar 2', 'Kajian Perdana Sampeyan Pradana', NULL, '<p>Halo <b>bang </b>messi</p>', '2024-06-14', 'Baciro', NULL, 'kajian/RAW_1717737491.png', '2024-06-06 22:18:11', '2024-06-06 22:18:11'),
(15, 'kajian-perdana-kusuma-15', 1, NULL, 'Joko Anwar', 'Kajian Perdana Kusuma', NULL, '<p>Halo <b>abang</b></p>', '2024-06-13', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717737735.png', '2024-06-06 22:22:15', '2024-06-06 22:22:15'),
(16, 'kajian-biji-tunggal-16', 1, NULL, 'Mark Lee', 'Kajian Biji Tunggal', 'documents/kajian-biji-tunggal-16_1717737974.blade.php', '<p><b>Manusia </b>kuat</p>', '2024-06-13', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717737958.png', '2024-06-06 22:25:58', '2024-06-06 22:26:14'),
(17, 'ini-adalah-kajian-yang-benar-ya-17', 1, NULL, 'Joko Anwar', 'Ini adalah Kajian Yang Benar Ya', NULL, '<p>Halo <b>abangku </b>sayang</p>', '2024-06-07', 'Auditorium MHJBS', NULL, 'kajian/FIB_1717738118.png', '2024-06-06 22:28:38', '2024-06-06 22:50:39'),
(18, 'kajian-perdana-18', 1, NULL, 'Joko Anwar', 'Kajian Perdana', NULL, '<p>Abc</p>', '2024-06-07', 'Auditorium MHJBS', NULL, NULL, '2024-06-12 09:41:56', '2024-06-12 09:41:57'),
(19, 'track-changes-must-working-19', 1, NULL, 'Joko Anwar', 'Track Changes Must Working', NULL, '<p>Abc</p>', '2024-06-07', 'Auditorium MHJBS', NULL, NULL, '2024-06-12 09:48:18', '2024-06-12 09:48:18'),
(20, 'kajian-perdana-versi-baru-20', 1, NULL, 'Joko Anwar', 'Kajian Perdana Versi Baru', NULL, '<p>Aku anak sehat <b>tubuhku </b>kuat</p>', '2024-06-07', 'Auditorium MHJBS', NULL, NULL, '2024-06-12 10:06:20', '2024-06-12 10:06:20'),
(21, 'kajian-asli-mas-bro-21', 1, NULL, 'Joko Anwar', 'Kajian Asli Mas Bro', 'documents/_21.blade.php', 'Halo udin, nama saya <b>Joko</b>', '2024-06-13', 'Baciro', NULL, 'kajian/Merge_1718212525.png', '2024-06-12 10:15:25', '2024-06-12 10:17:20'),
(22, 'kajian-versi-baru-mas-bro-22', 1, NULL, 'Joko Anwar', 'Kajian Versi Baru Mas Bro', 'documents/_22_diff.txt', 'Halo udin, nama saya <b>Joko</b>', '2024-06-13', 'Baciro', NULL, NULL, '2024-06-12 10:17:43', '2024-06-12 10:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_03_021035_add_picture_to_users', 1),
(6, '2023_11_15_115623_kajian', 1),
(7, '2023_11_24_031546_history_login', 1),
(8, '2023_11_29_131843_tb_history_downloads', 1),
(9, '2023_12_10_064212_versionhistory', 1),
(10, '2024_03_01_101829_add_role_to_user_table', 1),
(11, '2024_03_26_142719_topik_kajian', 1),
(12, '2024_03_26_143045_relasi_topik_kajian', 1),
(13, '2024_03_26_143413_personalize_topik_kajian', 1),
(14, '2024_05_04_143744_add_slug_to_kajian_table', 1),
(15, '2019_03_19_000000_create_document_templates_table', 2),
(16, '2019_03_20_000000_create_editable_templates_table', 2),
(17, '2019_06_13_104114_add_subject_field_to_document_templates_table', 2),
(18, '2019_06_14_000000_change_editable_template_content_field_type', 2),
(19, '2024_06_12_142849_add_kajian_id_to_version_histories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personalize_topik_kajian`
--

CREATE TABLE `personalize_topik_kajian` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `topik_kajian_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personalize_topik_kajian`
--

INSERT INTO `personalize_topik_kajian` (`id`, `user_id`, `topik_kajian_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2024-06-07 09:10:29', '2024-06-07 09:10:29'),
(2, 3, 4, '2024-06-07 09:10:29', '2024-06-07 09:10:29'),
(3, 3, 6, '2024-06-07 09:10:29', '2024-06-07 09:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relasi_topik_kajian`
--

CREATE TABLE `relasi_topik_kajian` (
  `id` bigint UNSIGNED NOT NULL,
  `kajian_id` bigint UNSIGNED NOT NULL,
  `topik_kajian_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topik_kajian`
--

CREATE TABLE `topik_kajian` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topik_kajian`
--

INSERT INTO `topik_kajian` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Al-Qur\'an', '2024-05-31 08:27:23', '2024-05-31 08:27:23'),
(3, 'Hadist', '2024-05-31 08:27:36', '2024-05-31 08:27:36'),
(4, 'Aqidah', '2024-05-31 08:27:50', '2024-05-31 08:27:50'),
(5, 'Fiqih', '2024-05-31 08:28:03', '2024-05-31 08:28:03'),
(6, 'Sejarah', '2024-05-31 08:28:19', '2024-06-02 06:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_keanggotaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email_verified_at`, `role`, `nama`, `nomor_keanggotaan`, `foto_kta`, `foto_profile`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `cabang`, `daerah`, `wilayah`, `created_at`, `updated_at`) VALUES
(1, 'registered', '$2y$10$vYQ/5qpMv1Sf0wNTpDxS8OvXtxUlFyZ5Tg590KdvQbYbRZgRw85Qa', 'registered@mail.com', NULL, 'registered', 'Nama Registered', 'KTM/213/SDA/12323455', NULL, 'kta/_e6fe3eb5-8147-4c84-b1f1-9a719381d95a_17167805661.jpg', 'Tulungagung', '2024-05-20', 'P', 'Administrasi IT', 'Bulaksumur Yogyakarta 55281', 'Tarag', 'Daerah Istimewa Yogykarata', 'Sleman', '2024-05-26 20:05:29', '2024-05-26 20:29:26'),
(2, 'admin', '$2y$10$ktj0dBrIvPLsucaIqe8hrugLE8jVDBC6KXg5l9myxpb4XsLp1UfUy', 'admin@mail.com', NULL, 'admin', 'This is Admin Speaking Frequently', 'KTM/213/SDA/12323455', 'ktp/SolutionChallenge_2024_VirtualBackground_Top100_17170346642.png', 'profile/_e6fe3eb5-8147-4c84-b1f1-9a719381d95a_17170773442.jpg', 'Manokwari', '2000-08-18', 'L', 'Staff Ahli IT', 'Bulaksumur Yogyakarta 55281', 'Taragakadung', 'Daerah Istimewa Yogykarata', 'Sleman', '2024-05-29 18:40:07', '2024-05-30 07:19:02'),
(3, 'tesreg', '$2y$10$orfgU/Ic3HB13ps1oQR8HewR06oAUiPNOCPRMsBALGDJDMeyeyKAm', 'tes1@mail.com', NULL, 'user', 'Testing Register', 'KTM/213/SDA/12323455', 'ktp/DALL·E 2024-06-05 18.58.13 - A bustling urban scene with a modern university building in a tropical setting. The building is large, multi-storied, and features a prominent white f_17177711573.webp', 'profile/RAW_17177711563.png', 'Tulungagung', '2024-06-06', 'P', 'Administrasi IT', 'Bulaksumur Yogyakarta 55281', 'Taragakadung', 'Daerah Istimewa Yogykarata', 'Sleman', '2024-06-07 07:38:27', '2024-06-12 05:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `version_history`
--

CREATE TABLE `version_history` (
  `id` bigint UNSIGNED NOT NULL,
  `kajian_id` bigint UNSIGNED NOT NULL,
  `old_kajian_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `version_number` int DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commit_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `version_history`
--

INSERT INTO `version_history` (`id`, `kajian_id`, `old_kajian_id`, `user_id`, `version_number`, `file_path`, `commit_message`, `created_at`, `updated_at`) VALUES
(4, 22, 21, 1, 1, NULL, 'documents/_22_diff.txt', '2024-06-12 10:17:43', '2024-06-12 10:23:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document_templates`
--
ALTER TABLE `document_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editable_templates`
--
ALTER TABLE `editable_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history_downloads`
--
ALTER TABLE `history_downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_downloads_user_id_foreign` (`user_id`),
  ADD KEY `history_downloads_kajian_id_foreign` (`kajian_id`);

--
-- Indexes for table `history_login`
--
ALTER TABLE `history_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_login_user_id_foreign` (`user_id`);

--
-- Indexes for table `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kajian_slug_unique` (`slug`),
  ADD KEY `kajian_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personalize_topik_kajian`
--
ALTER TABLE `personalize_topik_kajian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personalize_topik_kajian_user_id_foreign` (`user_id`),
  ADD KEY `personalize_topik_kajian_topik_kajian_id_foreign` (`topik_kajian_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `relasi_topik_kajian`
--
ALTER TABLE `relasi_topik_kajian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relasi_topik_kajian_kajian_id_foreign` (`kajian_id`),
  ADD KEY `relasi_topik_kajian_topik_kajian_id_foreign` (`topik_kajian_id`);

--
-- Indexes for table `topik_kajian`
--
ALTER TABLE `topik_kajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `version_history`
--
ALTER TABLE `version_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `version_history_kajian_id_foreign` (`kajian_id`),
  ADD KEY `version_history_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document_templates`
--
ALTER TABLE `document_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editable_templates`
--
ALTER TABLE `editable_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_downloads`
--
ALTER TABLE `history_downloads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_login`
--
ALTER TABLE `history_login`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personalize_topik_kajian`
--
ALTER TABLE `personalize_topik_kajian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relasi_topik_kajian`
--
ALTER TABLE `relasi_topik_kajian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topik_kajian`
--
ALTER TABLE `topik_kajian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `version_history`
--
ALTER TABLE `version_history`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_downloads`
--
ALTER TABLE `history_downloads`
  ADD CONSTRAINT `history_downloads_kajian_id_foreign` FOREIGN KEY (`kajian_id`) REFERENCES `kajian` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_downloads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `history_login`
--
ALTER TABLE `history_login`
  ADD CONSTRAINT `history_login_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kajian`
--
ALTER TABLE `kajian`
  ADD CONSTRAINT `kajian_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personalize_topik_kajian`
--
ALTER TABLE `personalize_topik_kajian`
  ADD CONSTRAINT `personalize_topik_kajian_topik_kajian_id_foreign` FOREIGN KEY (`topik_kajian_id`) REFERENCES `topik_kajian` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `personalize_topik_kajian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `relasi_topik_kajian`
--
ALTER TABLE `relasi_topik_kajian`
  ADD CONSTRAINT `relasi_topik_kajian_kajian_id_foreign` FOREIGN KEY (`kajian_id`) REFERENCES `kajian` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relasi_topik_kajian_topik_kajian_id_foreign` FOREIGN KEY (`topik_kajian_id`) REFERENCES `topik_kajian` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `version_history`
--
ALTER TABLE `version_history`
  ADD CONSTRAINT `version_history_kajian_id_foreign` FOREIGN KEY (`kajian_id`) REFERENCES `kajian` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `version_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
