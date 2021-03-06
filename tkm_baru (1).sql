-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 08:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkm_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiva`
--

CREATE TABLE `aktiva` (
  `ID_AKTIVA` int(11) NOT NULL,
  `TANGGAL_MASUK` date NOT NULL,
  `KAS_KECIL` double NOT NULL,
  `KAS_PADA_BANK` double NOT NULL,
  `JAMINAN_BANK` int(11) NOT NULL,
  `PIUTANG_OPERASIONAL` double NOT NULL,
  `PIUTANG_DAYA_MAKARA` double NOT NULL,
  `PIUTANG_PROYEK` double NOT NULL,
  `PIUTANG_TVUI` double NOT NULL,
  `PIUTANG_SOLAR_CAR` double NOT NULL,
  `KOMPUTER` double NOT NULL,
  `AKUM_PENY_KOMPUTER` double NOT NULL,
  `FAX` double NOT NULL,
  `AKUM_PENY_FAX` double NOT NULL,
  `AC` double NOT NULL,
  `AKUM_PENY_AC` double NOT NULL,
  `FURNITURE` double NOT NULL,
  `AKUM_PENY_FURNITURE` double NOT NULL,
  `NOTEBOOK` double NOT NULL,
  `AKUM_PENY_NOTEBOOK` double NOT NULL,
  `KAMERA_DIGITAL` double NOT NULL,
  `AKUM_PENY_KAMERA` double NOT NULL,
  `PRINTER` double NOT NULL,
  `AKUM_PENY_PRINTER` double NOT NULL,
  `VIDEO_KAMERA` double NOT NULL,
  `AKUM_PENY_VIDEO` double NOT NULL,
  `TOTAL_AKTIVA` double NOT NULL,
  `STATUS_AKTIVA` int(11) DEFAULT 0,
  `CATATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktiva`
--

INSERT INTO `aktiva` (`ID_AKTIVA`, `TANGGAL_MASUK`, `KAS_KECIL`, `KAS_PADA_BANK`, `JAMINAN_BANK`, `PIUTANG_OPERASIONAL`, `PIUTANG_DAYA_MAKARA`, `PIUTANG_PROYEK`, `PIUTANG_TVUI`, `PIUTANG_SOLAR_CAR`, `KOMPUTER`, `AKUM_PENY_KOMPUTER`, `FAX`, `AKUM_PENY_FAX`, `AC`, `AKUM_PENY_AC`, `FURNITURE`, `AKUM_PENY_FURNITURE`, `NOTEBOOK`, `AKUM_PENY_NOTEBOOK`, `KAMERA_DIGITAL`, `AKUM_PENY_KAMERA`, `PRINTER`, `AKUM_PENY_PRINTER`, `VIDEO_KAMERA`, `AKUM_PENY_VIDEO`, `TOTAL_AKTIVA`, `STATUS_AKTIVA`, `CATATAN`) VALUES
(21, '2021-06-01', 786763, 1581124846, 24684600, 3340000, 268877760, 1079855208, 27181000, 5000000, 34427500, 5983012, 1129000, 376334, 2500000, 468750, 3150000, 578125, 22948100, 4722361, 3280000, 546666, 1620000, 101250, 7780000, 162083, 0, 1, NULL),
(25, '2021-07-01', 860765, 1721837786, 24684600, 2980000, 250000000, 898034567, 25181000, 4000000, 28689583, 1434479, 9408333, 470417, 2000000, 377654, 3150000, 787500, 15768556, 5192135, 3280000, 820000, 1620000, 101250, 680000, 162083, 0, 1, NULL),
(26, '2021-08-01', 560890, 1841667787, 24684600, 1800000, 210000000, 758900000, 15181000, 2500000, 25879677, 1293984, 8900768, 445038, 1980000, 99000, 3000000, 150000, 15000000, 750000, 3000000, 800000, 1620000, 101250, 680000, 34000, 0, 1, NULL),
(27, '2021-09-01', 560890, 1343567787, 21299600, 1800000, 210000000, 250000000, 15181000, 2500000, 24879677, 1243984, 6900768, 345038, 1980000, 99000, 3000000, 150000, 12300000, 615000, 3000000, 800000, 1620000, 101250, 680000, 34000, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arus_kas`
--

CREATE TABLE `arus_kas` (
  `ID_ARUSKAS` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_LABARUGI` int(11) DEFAULT NULL,
  `ID_NERACA` int(11) DEFAULT NULL,
  `SALDO_AKHIR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arus_kas`
--

INSERT INTO `arus_kas` (`ID_ARUSKAS`, `tanggal_masuk`, `ID_USER`, `ID_LABARUGI`, `ID_NERACA`, `SALDO_AKHIR`) VALUES
(1, '2021-08-31', NULL, NULL, NULL, 699305923);

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `ID_BEBAN` int(11) NOT NULL,
  `TANGGAL_MASUK` date NOT NULL,
  `BEBAN_PROYEK` double NOT NULL,
  `BEBAN_GAJI` double NOT NULL,
  `TUNJANGAN_HARI_RAYA` double NOT NULL,
  `BEBAN_OPERASIONAL` double NOT NULL,
  `BEBAN_SETORAN_UI` double NOT NULL,
  `BEBAN_PENYUSUTAN` double NOT NULL,
  `BEBAN_BONUS` double NOT NULL,
  `BEBAN_PERLENGKAPAN_KANTOR` double NOT NULL,
  `BEBAN_PENGELOLAAN_REK` double NOT NULL,
  `BEBAN_BUKU_CEK` double NOT NULL,
  `BEBAN_PAJAK` double NOT NULL,
  `BEBAN_LAINLAIN` double NOT NULL,
  `RUGI_PENJUALAN_ASET` double NOT NULL,
  `RUGI_SELISIH_KURS` double NOT NULL,
  `LABA_BERSIH` double NOT NULL,
  `STATUS_BEBAN` int(11) DEFAULT 0,
  `CATATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`ID_BEBAN`, `TANGGAL_MASUK`, `BEBAN_PROYEK`, `BEBAN_GAJI`, `TUNJANGAN_HARI_RAYA`, `BEBAN_OPERASIONAL`, `BEBAN_SETORAN_UI`, `BEBAN_PENYUSUTAN`, `BEBAN_BONUS`, `BEBAN_PERLENGKAPAN_KANTOR`, `BEBAN_PENGELOLAAN_REK`, `BEBAN_BUKU_CEK`, `BEBAN_PAJAK`, `BEBAN_LAINLAIN`, `RUGI_PENJUALAN_ASET`, `RUGI_SELISIH_KURS`, `LABA_BERSIH`, `STATUS_BEBAN`, `CATATAN`) VALUES
(8, '2021-06-01', 16802982673, 391230000, 48725000, 64209757, 249000000, 13929535, 57910215, 0, 549075, 720000, 361618575, 105679000, 5332500, 56619547, 0, 1, NULL),
(12, '2021-07-01', 12868482673, 381250000, 0, 61208957, 138000000, 13929535, 46910215, 0, 549075, 690000, 361618575, 98679000, 4325500, 56619547, 0, 1, NULL),
(13, '2021-08-01', 10868482673, 381250000, 0, 61208957, 138000000, 13929535, 46910215, 0, 549075, 690000, 361618575, 98679000, 56619547, 4325500, 0, 1, NULL),
(14, '2021-09-01', 8867439236, 281250000, 0, 51208957, 68000000, 13929535, 46910215, 0, 549075, 690000, 161618575, 98679000, 56619547, 4325500, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laba_rugi`
--

CREATE TABLE `laba_rugi` (
  `ID_PENDAPATAN` int(11) NOT NULL,
  `ID_BEBAN` int(11) NOT NULL,
  `ID_LABARUGI` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `LABA_BERSIH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `ID_AKTIVA` int(11) NOT NULL,
  `ID_PASIVA` int(11) NOT NULL,
  `ID_NERACA` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasiva`
--

CREATE TABLE `pasiva` (
  `ID_PASIVA` int(11) NOT NULL,
  `TANGGAL_MASUK` date NOT NULL,
  `HUTANG_OPERASIONAL` double NOT NULL,
  `HUTANG_GAJI` double NOT NULL,
  `HUTANG_PROYEK` double NOT NULL,
  `HUTANG_PADA_RTV` double NOT NULL,
  `TOTAL_KEWAJIBAN` double NOT NULL,
  `TOTAL_PASIVA` double NOT NULL,
  `TOTAL_MODAL` double NOT NULL,
  `STATUS_PASIVA` int(11) DEFAULT 0,
  `CATATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasiva`
--

INSERT INTO `pasiva` (`ID_PASIVA`, `TANGGAL_MASUK`, `HUTANG_OPERASIONAL`, `HUTANG_GAJI`, `HUTANG_PROYEK`, `HUTANG_PADA_RTV`, `TOTAL_KEWAJIBAN`, `TOTAL_PASIVA`, `TOTAL_MODAL`, `STATUS_PASIVA`, `CATATAN`) VALUES
(8, '2021-06-01', 1000000, 0, 3052307196, 1439000, 0, 0, 0, 1, NULL),
(12, '2021-07-01', 1500000, 0, 2980089672, 1240000, 0, 0, 0, 1, NULL),
(13, '2021-08-01', 3250000, 0, 2907191450, 1240000, 0, 0, 0, 1, NULL),
(14, '2021-09-01', 1250000, 6200000, 1887191450, 1240000, 0, 0, 0, 1, NULL),
(15, '2021-10-29', 800000, 0, 500000, 1200000, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `ID_PENDAPATAN` int(11) NOT NULL,
  `TANGGAL_MASUK` date NOT NULL,
  `PENDAPATAN_PROYEK` double NOT NULL,
  `PENDAPATAN_GIRO` double NOT NULL,
  `BONUS` double NOT NULL,
  `PENDAPATAN_LAINLAIN` double NOT NULL,
  `LABA_SELISIH_KURS` double NOT NULL,
  `TOTAL_PENDAPATAN` double NOT NULL,
  `STATUS_PENDAPATAN` int(11) DEFAULT 0,
  `CATATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`ID_PENDAPATAN`, `TANGGAL_MASUK`, `PENDAPATAN_PROYEK`, `PENDAPATAN_GIRO`, `BONUS`, `PENDAPATAN_LAINLAIN`, `LABA_SELISIH_KURS`, `TOTAL_PENDAPATAN`, `STATUS_PENDAPATAN`, `CATATAN`) VALUES
(6, '2021-06-06', 18642560647, 16281761, 0, 31350800, 15963166, 0, 1, NULL),
(10, '2021-07-01', 15642560647, 13281761, 0, 20350800, 13896266, 0, 1, NULL),
(11, '2021-08-01', 12634560647, 13281761, 0, 20350800, 13896266, 0, 1, NULL),
(12, '2021-09-01', 9634560647, 15281761, 0, 180350800, 13896266, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `LEVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `EMAIL`, `PASSWORD`, `LEVEL`) VALUES
('TKM001', 'jordan@tkm.com', 'jordan123', 1),
('TKM002', 'desi@tkm.com', 'desi123', 2),
('TKM003', 'mahsa@tkm.com', 'mahsa123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktiva`
--
ALTER TABLE `aktiva`
  ADD PRIMARY KEY (`ID_AKTIVA`);

--
-- Indexes for table `arus_kas`
--
ALTER TABLE `arus_kas`
  ADD PRIMARY KEY (`ID_ARUSKAS`),
  ADD KEY `FK_REFERENCE_8` (`ID_LABARUGI`),
  ADD KEY `FK_REFERENCE_9` (`ID_NERACA`);

--
-- Indexes for table `beban`
--
ALTER TABLE `beban`
  ADD PRIMARY KEY (`ID_BEBAN`);

--
-- Indexes for table `laba_rugi`
--
ALTER TABLE `laba_rugi`
  ADD PRIMARY KEY (`ID_LABARUGI`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_BEBAN`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_PENDAPATAN`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`ID_NERACA`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_AKTIVA`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_PASIVA`);

--
-- Indexes for table `pasiva`
--
ALTER TABLE `pasiva`
  ADD PRIMARY KEY (`ID_PASIVA`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`ID_PENDAPATAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktiva`
--
ALTER TABLE `aktiva`
  MODIFY `ID_AKTIVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `beban`
--
ALTER TABLE `beban`
  MODIFY `ID_BEBAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pasiva`
--
ALTER TABLE `pasiva`
  MODIFY `ID_PASIVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `ID_PENDAPATAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arus_kas`
--
ALTER TABLE `arus_kas`
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`ID_LABARUGI`) REFERENCES `laba_rugi` (`ID_LABARUGI`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`ID_NERACA`) REFERENCES `neraca` (`ID_NERACA`);

--
-- Constraints for table `laba_rugi`
--
ALTER TABLE `laba_rugi`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_PENDAPATAN`) REFERENCES `pendapatan` (`ID_PENDAPATAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_BEBAN`) REFERENCES `beban` (`ID_BEBAN`);

--
-- Constraints for table `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_AKTIVA`) REFERENCES `aktiva` (`ID_AKTIVA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_PASIVA`) REFERENCES `pasiva` (`ID_PASIVA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
