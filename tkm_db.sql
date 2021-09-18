-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 08:16 AM
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
-- Database: `tkm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiva`
--

CREATE TABLE `aktiva` (
  `ID_AKTIVA` int(11) NOT NULL,
  `JENIS_AKTIVA` varchar(50) NOT NULL,
  `NILAI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktiva`
--

INSERT INTO `aktiva` (`ID_AKTIVA`, `JENIS_AKTIVA`, `NILAI`) VALUES
(1110, 'KAS KECIL', 0),
(1120, 'KAS PADA BANK', 0),
(1130, 'PIUTANG OPERASIONAL', 0),
(1140, 'PIUTANG DAYA MAKARA', 0),
(1150, 'PIUTANG PROYEK', 0),
(1160, 'PIUTANG TVUI', 0),
(1170, 'JAMINAN BANK', 0),
(1180, 'PIUTANG SOLAR CAR', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arus_kas`
--

CREATE TABLE `arus_kas` (
  `ID_ARUSKAS` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NO_PERK` int(11) DEFAULT NULL,
  `ID_LABARUGI` int(11) DEFAULT NULL,
  `TOTAL_SALDO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `ID_BEBAN` int(11) NOT NULL,
  `JENIS_BEBAN` varchar(30) NOT NULL,
  `NILAI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`ID_BEBAN`, `JENIS_BEBAN`, `NILAI`) VALUES
(5100, 'BEBAN PROYEK', 0),
(5110, 'BEBAN GAJI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laba_rugi`
--

CREATE TABLE `laba_rugi` (
  `ID_BEBAN` int(11) NOT NULL,
  `ID_PENDAPATAN` int(11) NOT NULL,
  `ID_LABARUGI` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TOTAL_LABARUGI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `ID_AKTIVA` int(11) NOT NULL,
  `ID_PASIVA` int(11) NOT NULL,
  `ID_NERACA` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TOTAL_NERACA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasiva`
--

CREATE TABLE `pasiva` (
  `ID_PASIVA` int(11) NOT NULL,
  `JENIS_PASIVA` varchar(50) NOT NULL,
  `NILAI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasiva`
--

INSERT INTO `pasiva` (`ID_PASIVA`, `JENIS_PASIVA`, `NILAI`) VALUES
(2110, 'HUTANG OPERASIONAL', 0),
(2120, 'HUTANG GAJI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `ID_PENDAPATAN` int(11) NOT NULL,
  `JENIS_PENDAPATAN` varchar(30) NOT NULL,
  `NILAI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`ID_PENDAPATAN`, `JENIS_PENDAPATAN`, `NILAI`) VALUES
(4100, 'PENDAPATAN PROYEK', 0),
(4110, 'PENDAPATAN GIRO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
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
  ADD KEY `FK_REFERENCE_8` (`NO_PERK`),
  ADD KEY `FK_REFERENCE_9` (`ID_LABARUGI`);

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
  ADD KEY `FK_RELATIONSHIP_1` (`ID_BEBAN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_PENDAPATAN`);

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
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`NO_PERK`) REFERENCES `neraca` (`ID_NERACA`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`ID_LABARUGI`) REFERENCES `laba_rugi` (`ID_LABARUGI`);

--
-- Constraints for table `laba_rugi`
--
ALTER TABLE `laba_rugi`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_BEBAN`) REFERENCES `beban` (`ID_BEBAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PENDAPATAN`) REFERENCES `pendapatan` (`ID_PENDAPATAN`);

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
