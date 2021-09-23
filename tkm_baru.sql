-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 02:59 PM
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
  `TANGGAL_MASUK` date NOT NULL,
  `KAS_KECIL` double NOT NULL,
  `KAS_PADA_BANK` double NOT NULL,
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
  `TOTAL_AKTIVA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktiva`
--

INSERT INTO `aktiva` (`ID_AKTIVA`, `TANGGAL_MASUK`, `KAS_KECIL`, `KAS_PADA_BANK`, `PIUTANG_OPERASIONAL`, `PIUTANG_DAYA_MAKARA`, `PIUTANG_PROYEK`, `PIUTANG_TVUI`, `PIUTANG_SOLAR_CAR`, `KOMPUTER`, `AKUM_PENY_KOMPUTER`, `FAX`, `AKUM_PENY_FAX`, `AC`, `AKUM_PENY_AC`, `FURNITURE`, `AKUM_PENY_FURNITURE`, `NOTEBOOK`, `AKUM_PENY_NOTEBOOK`, `KAMERA_DIGITAL`, `AKUM_PENY_KAMERA`, `PRINTER`, `AKUM_PENY_PRINTER`, `VIDEO_KAMERA`, `AKUM_PENY_VIDEO`, `TOTAL_AKTIVA`) VALUES
(1, '2021-09-08', 12900, 400, 1282713, 17365, 7236527, 326, 723765, 23123, 1321212, 3123, 23123, 23213123, 23232, 324324, 24234, 24324, 34324, 423, 234243, 23423, 424234, 24342, 42342, 0),
(3, '2021-09-01', 12213, 31231, 132132, 123123, 3213213, 23123213, 1231231, 1323123, 123123, 1241243, 344332, 3423, 434324, 2332, 123123, 32423234, 12321213, 21331231, 13231, 123123, 122312, 1323, 1323, 0);

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
  `RUGI_PENJUALAN_ASET` double NOT NULL,
  `BEBAN_PAJAK` double NOT NULL,
  `BEBAN_LAINLAIN` double NOT NULL,
  `RUGI_SELISIH_KURS` double NOT NULL,
  `LABA_BERSIH` double NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`ID_BEBAN`, `BEBAN_PROYEK`, `BEBAN_GAJI`, `TUNJANGAN_HARI_RAYA`, `BEBAN_OPERASIONAL`, `BEBAN_SETORAN_UI`, `BEBAN_PENYUSUTAN`, `BEBAN_BONUS`, `BEBAN_PERLENGKAPAN_KANTOR`, `BEBAN_PENGELOLAAN_REK`, `BEBAN_BUKU_CEK`, `RUGI_PENJUALAN_ASET`, `BEBAN_PAJAK`, `BEBAN_LAINLAIN`, `RUGI_SELISIH_KURS`, `LABA_BERSIH`, `TANGGAL_MASUK`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00');

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
  `TOTAL_MODAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasiva`
--

INSERT INTO `pasiva` (`ID_PASIVA`, `TANGGAL_MASUK`, `HUTANG_OPERASIONAL`, `HUTANG_GAJI`, `HUTANG_PROYEK`, `HUTANG_PADA_RTV`, `TOTAL_KEWAJIBAN`, `TOTAL_PASIVA`, `TOTAL_MODAL`) VALUES
(1, '0000-00-00', 12, 123, 123, 34534, 34556, 0, 0),
(2, '2021-09-08', 123, 12323, 123123, 21313, 1231232, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `ID_PENDAPATAN` int(11) NOT NULL,
  `PENDAPATAN_PROYEK` double NOT NULL,
  `PENDAPATAN_GIRO` double NOT NULL,
  `BONUS` double NOT NULL,
  `PENDAPATAN_LAINLAIN` double NOT NULL,
  `LABA_SELISIH_KURS` double NOT NULL,
  `TOTAL_PENDAPATAN` double NOT NULL,
  `TANGGAL_MASUK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`ID_PENDAPATAN`, `PENDAPATAN_PROYEK`, `PENDAPATAN_GIRO`, `BONUS`, `PENDAPATAN_LAINLAIN`, `LABA_SELISIH_KURS`, `TOTAL_PENDAPATAN`, `TANGGAL_MASUK`) VALUES
(1, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktiva`
--
ALTER TABLE `aktiva`
  MODIFY `ID_AKTIVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasiva`
--
ALTER TABLE `pasiva`
  MODIFY `ID_PASIVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
