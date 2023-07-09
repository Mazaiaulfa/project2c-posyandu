-- --------------------------------------------------------
-- Host:                         mazaia.tipnl.com
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tipn3594_mazaia
CREATE DATABASE IF NOT EXISTS `tipn3594_mazaia` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `tipn3594_mazaia`;

-- Dumping structure for table tipn3594_mazaia.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.admins: ~0 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.anaks
CREATE TABLE IF NOT EXISTS `anaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `berat` decimal(8,2) NOT NULL,
  `tinggi_badan` decimal(8,2) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.anaks: ~3 rows (approximately)
/*!40000 ALTER TABLE `anaks` DISABLE KEYS */;
INSERT INTO `anaks` (`id`, `nama`, `tempat_lahir`, `alamat`, `nama_ortu`, `berat`, `tinggi_badan`, `umur`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
	(1, 'Mazaia ulfa', 'Rheum,13 September 2023', 'Rheum timu', 'Erni Hatta', 45.00, 60.00, '24 bulan', 'Perempuan', '2023-07-08 10:55:19', '2023-07-08 11:01:40'),
	(2, 'Zulfikar', 'Rheum,06 desember 2022', 'Samalanga', 'Erni', 45.00, 60.00, '24 bulan', 'Laki-Laki', '2023-07-08 10:55:53', '2023-07-08 10:55:53'),
	(3, 'Wahyu', 'Samalanga,20 januari 2021', 'Samalanga', 'Murni', 25.00, 50.00, '27 bulan', 'Laki Laki', '2023-07-09 06:38:09', '2023-07-09 06:38:09');
/*!40000 ALTER TABLE `anaks` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.data_anaks
CREATE TABLE IF NOT EXISTS `data_anaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.data_anaks: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_anaks` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_anaks` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.ibudatas
CREATE TABLE IF NOT EXISTS `ibudatas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.ibudatas: ~0 rows (approximately)
/*!40000 ALTER TABLE `ibudatas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ibudatas` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.ibus
CREATE TABLE IF NOT EXISTS `ibus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `no_kk` bigint(20) unsigned NOT NULL,
  `no_bpjs` bigint(20) unsigned NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.ibus: ~2 rows (approximately)
/*!40000 ALTER TABLE `ibus` DISABLE KEYS */;
INSERT INTO `ibus` (`id`, `nama`, `tempat_lahir`, `alamat`, `status`, `no_kk`, `no_bpjs`, `no_hp`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Erni', 'Rheum,06 desember1982', 'Rheum timu', 'Menikah', 111111090909, 10101010101, '081260215001', 'Tidak ada', '2023-07-08 10:54:28', '2023-07-08 10:54:28'),
	(2, 'Murni', 'Samalanga,20 januari 1990', 'Samalanga', 'Menikah', 10111010100, 101110011, '082345456767', 'Tidak ada', '2023-07-09 06:39:25', '2023-07-09 06:39:25');
/*!40000 ALTER TABLE `ibus` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.imunisasis
CREATE TABLE IF NOT EXISTS `imunisasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `nama_imunisasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.imunisasis: ~2 rows (approximately)
/*!40000 ALTER TABLE `imunisasis` DISABLE KEYS */;
INSERT INTO `imunisasis` (`id`, `nama`, `umur`, `tanggal`, `nama_imunisasi`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Mazaia ulfa', '24 bulan', '24 juni 2023', 'Imunisasi Campak', 'Tidak ada', '2023-07-08 10:56:21', '2023-07-08 11:10:26'),
	(3, 'Wahyu', '27 bulan', '12 Juli 2023', 'Imunisasi Campak', 'Tidak ada', '2023-07-09 06:40:15', '2023-07-09 06:40:15');
/*!40000 ALTER TABLE `imunisasis` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.jadwallls
CREATE TABLE IF NOT EXISTS `jadwallls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.jadwallls: ~2 rows (approximately)
/*!40000 ALTER TABLE `jadwallls` DISABLE KEYS */;
INSERT INTO `jadwallls` (`id`, `tahun`, `bulan`, `tanggal`, `tema`, `created_at`, `updated_at`) VALUES
	(1, '2023', 'Januari', '22', 'Posyandu Anak Anak', '2023-07-08 11:00:26', '2023-07-08 11:12:07'),
	(3, '2023', 'Juli', '18', 'Posyandu Ibu ibu', '2023-07-09 06:42:37', '2023-07-09 06:42:37');
/*!40000 ALTER TABLE `jadwallls` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.jadwallls_tables
CREATE TABLE IF NOT EXISTS `jadwallls_tables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.jadwallls_tables: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwallls_tables` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwallls_tables` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.jadwals
CREATE TABLE IF NOT EXISTS `jadwals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.jadwals: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwals` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwals` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.kegiatans
CREATE TABLE IF NOT EXISTS `kegiatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(255) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.kegiatans: ~0 rows (approximately)
/*!40000 ALTER TABLE `kegiatans` DISABLE KEYS */;
/*!40000 ALTER TABLE `kegiatans` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.migrations: ~18 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(77, '2023_07_03_182624_create_jadwallls_tables', 5),
	(147, '2014_10_12_000000_create_users_table', 6),
	(148, '2014_10_12_100000_create_password_reset_tokens_table', 6),
	(149, '2014_10_12_100000_create_password_resets_table', 6),
	(150, '2019_08_19_000000_create_failed_jobs_table', 6),
	(151, '2019_12_14_000001_create_personal_access_tokens_table', 6),
	(152, '2023_06_11_110411_create_ibudatas_table', 6),
	(153, '2023_06_11_165745_create_data_anaks_table', 6),
	(154, '2023_06_11_174252_create_admins_table', 6),
	(155, '2023_06_18_083034_create_anaks_table', 6),
	(156, '2023_06_20_100004_create_ibus_table', 6),
	(157, '2023_07_01_163216_create_imunisasis_table', 6),
	(158, '2023_07_01_163418_create_petugasdatas_table', 6),
	(159, '2023_07_01_163433_create_kegiatans_table', 6),
	(160, '2023_07_01_163446_create_jadwals_table', 6),
	(161, '2023_07_01_163509_create_timbangans_table', 6),
	(162, '2023_07_01_191853_create_timbangdatas_table', 6),
	(163, '2023_07_03_182647_create_jadwallls_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.password_reset_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.petugasdatas
CREATE TABLE IF NOT EXISTS `petugasdatas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.petugasdatas: ~2 rows (approximately)
/*!40000 ALTER TABLE `petugasdatas` DISABLE KEYS */;
INSERT INTO `petugasdatas` (`id`, `nama`, `email`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
	(1, 'Naura Adella', 'naura@gmail.com', 'Aceh Utara', '081260215001', '2023-07-08 10:57:10', '2023-07-08 11:10:11'),
	(3, 'Fadilla suhaila', 'fadila@gmail.com', 'Samalanga', '082345450987', '2023-07-09 06:40:58', '2023-07-09 06:40:58');
/*!40000 ALTER TABLE `petugasdatas` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.timbangans
CREATE TABLE IF NOT EXISTS `timbangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `hasil_timbangan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.timbangans: ~0 rows (approximately)
/*!40000 ALTER TABLE `timbangans` DISABLE KEYS */;
/*!40000 ALTER TABLE `timbangans` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.timbangdatas
CREATE TABLE IF NOT EXISTS `timbangdatas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `hasil_timbangan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.timbangdatas: ~2 rows (approximately)
/*!40000 ALTER TABLE `timbangdatas` DISABLE KEYS */;
INSERT INTO `timbangdatas` (`id`, `nama`, `umur`, `tanggal`, `hasil_timbangan`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Mazaia ulfa', '24 bulan', '20 juni 2023', '29 kg', 'Tidak ada', '2023-07-08 10:59:33', '2023-07-08 11:11:40'),
	(3, 'Wahyu', '27 bulan', '12 Juli 2023', '25 kg', 'Tidak ada', '2023-07-09 06:41:50', '2023-07-09 06:41:50');
/*!40000 ALTER TABLE `timbangdatas` ENABLE KEYS */;

-- Dumping structure for table tipn3594_mazaia.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_mazaia.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Mazaia', 'mazaia@gmail.com', NULL, '$2y$10$BABc5uVCh/j4RNsmFJO1JueLBC.TsQBZk8L1sOQoR6qc7xzdEmFA2', 'admin', NULL, '2023-07-08 10:20:51', '2023-07-08 10:20:51'),
	(3, 'Admin', 'admin@admin.com', NULL, '$2y$10$Mc2BrSzCmJ2wPWxMFYKNa.sYR3QVjwx3cVSMyDLaA8mt54fPQxv9i', 'admin', NULL, '2023-07-08 12:01:36', '2023-07-08 12:01:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
