-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 12:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `KAS_KECIL` varchar(50) NOT NULL,
  `KAS_PADA_BANK` varchar(50) NOT NULL,
  `PIUTANG_OPERASIONAL` varchar(50) NOT NULL,
  `PIUTANG_DAYA_MAKARA` varchar(50) NOT NULL,
  `PIUTANG_PROYEK` varchar(50) NOT NULL,
  `PIUTANG_TVUI` varchar(50) NOT NULL,
  `PIUTANG_SOLAR_CAR` varchar(50) NOT NULL,
  `TOTAL_AKTIVA` varchar(50) NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktiva`
--

INSERT INTO `aktiva` (`ID_AKTIVA`, `KAS_KECIL`, `KAS_PADA_BANK`, `PIUTANG_OPERASIONAL`, `PIUTANG_DAYA_MAKARA`, `PIUTANG_PROYEK`, `PIUTANG_TVUI`, `PIUTANG_SOLAR_CAR`, `TOTAL_AKTIVA`, `TANGGAL_MASUK`) VALUES
(1, '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `arus_kas`
--

CREATE TABLE `arus_kas` (
  `ID_ARUSKAS` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_LABARUGI` int(11) DEFAULT NULL,
  `ID_NERACA` int(11) DEFAULT NULL,
  `SALDO_AKHIR` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `ID_BEBAN` int(11) NOT NULL,
  `BEBAN_PROYEK` varchar(50) NOT NULL,
  `BEBAN_GAJI` varchar(50) NOT NULL,
  `BEBAN_OPERASIONAL` varchar(50) NOT NULL,
  `BEBAN_PENYUSUTAN` varchar(50) NOT NULL,
  `BEBAN_BONUS` varchar(50) NOT NULL,
  `BEBAN_PERLENGKAPAN_KANTOR` varchar(50) NOT NULL,
  `BEBAN_PAJAK` varchar(50) NOT NULL,
  `BEBAN_LAINLAIN` varchar(50) NOT NULL,
  `RUGI_SELISIH_KURS` varchar(50) NOT NULL,
  `LABA_BERSIH` varchar(50) NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`ID_BEBAN`, `BEBAN_PROYEK`, `BEBAN_GAJI`, `BEBAN_OPERASIONAL`, `BEBAN_PENYUSUTAN`, `BEBAN_BONUS`, `BEBAN_PERLENGKAPAN_KANTOR`, `BEBAN_PAJAK`, `BEBAN_LAINLAIN`, `RUGI_SELISIH_KURS`, `LABA_BERSIH`, `TANGGAL_MASUK`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

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
  `ID_PASIVA` datetime NOT NULL,
  `ID_NERACA` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasiva`
--

CREATE TABLE `pasiva` (
  `ID_PASIVA` datetime NOT NULL,
  `HUTANG_OPERASIONAL` varchar(50) NOT NULL,
  `HUTANG_GAJI` varchar(50) NOT NULL,
  `HUTANG_PROYEK` varchar(50) NOT NULL,
  `HUTANG_PADA_RTV` varchar(50) NOT NULL,
  `TOTAL_KEWAJIBAN` varchar(50) NOT NULL,
  `TOTAL_PASIVA` varchar(50) NOT NULL,
  `TOTAL_MODAL` varchar(50) NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `ID_PENDAPATAN` int(11) NOT NULL,
  `PENDAPATAN_PROYEK` varchar(50) NOT NULL,
  `PENDAPATAN_GIRO` varchar(50) NOT NULL,
  `PENDAPATAN_LAINLAIN` varchar(50) NOT NULL,
  `LABA_SELISIH_KURS` varchar(50) NOT NULL,
  `TOTAL_PENDAPATAN` varchar(50) NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`ID_PENDAPATAN`, `PENDAPATAN_PROYEK`, `PENDAPATAN_GIRO`, `PENDAPATAN_LAINLAIN`, `LABA_SELISIH_KURS`, `TOTAL_PENDAPATAN`, `TANGGAL_MASUK`) VALUES
(1, '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `FK_REFERENCE_7` (`ID_USER`),
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
  ADD KEY `FK_REFERENCE_5` (`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_PENDAPATAN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_BEBAN`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`ID_NERACA`),
  ADD KEY `FK_REFERENCE_6` (`ID_USER`),
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
-- Constraints for dumped tables
--

--
-- Constraints for table `arus_kas`
--
ALTER TABLE `arus_kas`
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`ID_LABARUGI`) REFERENCES `laba_rugi` (`ID_LABARUGI`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`ID_NERACA`) REFERENCES `neraca` (`ID_NERACA`);

--
-- Constraints for table `laba_rugi`
--
ALTER TABLE `laba_rugi`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_PENDAPATAN`) REFERENCES `pendapatan` (`ID_PENDAPATAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_BEBAN`) REFERENCES `beban` (`ID_BEBAN`);

--
-- Constraints for table `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_AKTIVA`) REFERENCES `aktiva` (`ID_AKTIVA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_PASIVA`) REFERENCES `pasiva` (`ID_PASIVA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
