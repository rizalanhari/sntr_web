-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 02:45 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sntr_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `idpengajar` int(11) NOT NULL,
  `pondok_idpondok` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`idpengajar`, `pondok_idpondok`, `nama`, `alamat`, `no_telp`) VALUES
(1, 1, 'Jamar', 'Apt. 571', '+60(0)2011929809'),
(2, 4, 'Albina', 'Suite 878', '+32(0)2865418251'),
(3, 9, 'Shanie', 'Suite 764', '1-448-360-8245'),
(4, 3, 'Vida', 'Suite 638', '818-719-8993x587'),
(5, 6, 'Gudrun', 'Apt. 904', '(943)706-6118x263'),
(6, 7, 'Damion', 'Apt. 518', '+59(4)1016175008'),
(7, 5, 'Columbus', 'Suite 047', '1-591-043-1537x8136'),
(8, 2, 'Olen', 'Suite 858', '(851)970-8680x72662'),
(9, 8, 'Ebony', 'Suite 045', '833-279-4396x1826');

-- --------------------------------------------------------

--
-- Table structure for table `pondok`
--

CREATE TABLE `pondok` (
  `idpondok` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `coordinat_pos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pondok`
--

INSERT INTO `pondok` (`idpondok`, `nama`, `alamat`, `no_telp`, `web`, `coordinat_pos`) VALUES
(1, 'Kunze and Sons', 'Apt. 539', '(261)884-1528x098', 'http://www.gulgowskistroman.com/', '61213 Mills Ford'),
(2, 'Zulauf-Brown', 'Apt. 807', '075.579.2627', 'http://www.crooks.com/', '1744 Margaret Estate'),
(3, 'Weissnat Inc', 'Apt. 741', '(015)241-2876x9930', 'http://www.harberbrown.com/', '289 Percy Trail Apt. 819'),
(4, 'Hammes LLC', 'Suite 670', '401.251.5594', 'http://www.nitzscheferry.biz/', '32946 Oberbrunner Camp Suite 412'),
(5, 'Anderson-Vandervort', 'Apt. 315', '(317)102-5997x5597', 'http://www.hermiston.biz/', '428 Sabryna Unions'),
(6, 'Brakus Inc', 'Suite 731', '809.612.9284x5753', 'http://mcdermott.org/', '013 Alene Canyon'),
(7, 'Wolf, Halvorson and Shields', 'Apt. 446', '1-511-056-5304x6518', 'http://schuppe.net/', '0705 Boyle Forest Apt. 272'),
(8, 'Nikolaus PLC', 'Suite 624', '(325)015-4555', 'http://kunze.net/', '1928 Norene Dale Suite 639'),
(9, 'Gorczany Inc', 'Apt. 940', '09596089192', 'http://collier.com/', '74343 Halvorson Throughway Suite 777');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `idsantri` int(11) NOT NULL,
  `pondok_idpondok` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nama_ayah` varchar(45) DEFAULT NULL,
  `nama_ibu` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`idsantri`, `pondok_idpondok`, `nama`, `alamat`, `nama_ayah`, `nama_ibu`, `jenis_kelamin`) VALUES
(1, 4, 'Carey', 'Apt. 055', 'Trent', 'Jailyn', 'Dr.'),
(2, 8, 'Itzel', 'Suite 262', 'Emmanuel', 'Carmela', 'Dr.'),
(3, 6, 'Makayla', 'Apt. 414', 'Brant', 'Judy', 'Prof.'),
(4, 5, 'Isabella', 'Apt. 681', 'Seth', 'Petra', 'Dr.'),
(5, 1, 'Fiona', 'Apt. 889', 'Nels', 'Brooklyn', 'Dr.'),
(6, 3, 'Octavia', 'Suite 609', 'Waino', 'Otilia', 'Prof.'),
(7, 7, 'Adolfo', 'Suite 594', 'Adrian', 'Alvina', 'Mr.'),
(8, 2, 'Daija', 'Suite 830', 'Braeden', 'Eula', 'Mrs.'),
(9, 9, 'Rickey', 'Apt. 882', 'Toni', 'Cali', 'Prof.'),
(10, 1, 'Nemanja MATIC', 'jombang', 'budi', 'susi', 'Male');

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
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizal Anhari', 'zanha@gmail.com', '2021-06-27 20:16:14', '$2y$10$dMe83WBrZJ0uePn6gXIq9OBWEgS6HzgbgbFMldsVGBCJ17tYkhnvC', NULL, NULL, '2021-06-27 20:16:14', '2021-06-27 20:16:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`idpengajar`),
  ADD KEY `fk_kyai_pondok_idx` (`pondok_idpondok`);

--
-- Indexes for table `pondok`
--
ALTER TABLE `pondok`
  ADD PRIMARY KEY (`idpondok`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`idsantri`),
  ADD KEY `fk_murid_pondok1_idx` (`pondok_idpondok`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `idpengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pondok`
--
ALTER TABLE `pondok`
  MODIFY `idpondok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `idsantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `fk_kyai_pondok` FOREIGN KEY (`pondok_idpondok`) REFERENCES `pondok` (`idpondok`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `fk_murid_pondok1` FOREIGN KEY (`pondok_idpondok`) REFERENCES `pondok` (`idpondok`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
