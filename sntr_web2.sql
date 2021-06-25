-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 05:33 AM
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
(0, 8, 'Antonietta', 'Suite 326', '1-644-701-1590x866'),
(1, 1, 'Jamar', 'Apt. 571', '+60(0)2011929809'),
(2, 4, 'Albina', 'Suite 878', '+32(0)2865418251'),
(3, 9, 'Shanie', 'Suite 764', '1-448-360-8245'),
(4, 3, 'Vida', 'Suite 638', '818-719-8993x587'),
(5, 6, 'Gudrun', 'Apt. 904', '(943)706-6118x263'),
(6, 7, 'Damion', 'Apt. 518', '+59(4)1016175008'),
(7, 5, 'Columbus', 'Suite 047', '1-591-043-1537x8136'),
(8, 2, 'Olen', 'Suite 858', '(851)970-8680x72662'),
(9, 0, 'Ebony', 'Suite 045', '833-279-4396x1826');

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
(0, 'DuBuque Inc', 'Apt. 050', '633-525-6277x5321', 'http://shanahan.com/', '826 Hilton Land'),
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
(0, 4, 'Flossie', 'Apt. 733', 'Landen', 'Brenna', 'Dr.'),
(1, 0, 'Carey', 'Apt. 055', 'Trent', 'Jailyn', 'Dr.'),
(2, 8, 'Itzel', 'Suite 262', 'Emmanuel', 'Carmela', 'Dr.'),
(3, 6, 'Makayla', 'Apt. 414', 'Brant', 'Judy', 'Prof.'),
(4, 5, 'Isabella', 'Apt. 681', 'Seth', 'Petra', 'Dr.'),
(5, 1, 'Fiona', 'Apt. 889', 'Nels', 'Brooklyn', 'Dr.'),
(6, 3, 'Octavia', 'Suite 609', 'Waino', 'Otilia', 'Prof.'),
(7, 7, 'Adolfo', 'Suite 594', 'Adrian', 'Alvina', 'Mr.'),
(8, 2, 'Daija', 'Suite 830', 'Braeden', 'Eula', 'Mrs.'),
(9, 9, 'Rickey', 'Apt. 882', 'Toni', 'Cali', 'Prof.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

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
