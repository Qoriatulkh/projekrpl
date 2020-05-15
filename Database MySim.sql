-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 08:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysim`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `ID Cabang` varchar(25) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor Telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID Bayar` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Nominal` int(11) NOT NULL,
  `Cara Pemabayaran` int(11) NOT NULL,
  `ID Pendaftar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `ID Pendaftar` int(255) NOT NULL,
  `NIK` int(255) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Kota` varchar(25) NOT NULL,
  `Kode Pos` int(12) NOT NULL,
  `Golongan Darah` varchar(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `ID Petugas` int(11) NOT NULL,
  `ID Cabang` varchar(255) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Cabang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `ID Test` int(16) NOT NULL,
  `Lokasi Tes` varchar(255) NOT NULL,
  `Jadwal` date NOT NULL,
  `Hasil` int(11) NOT NULL,
  `ID Pendaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tes praktek`
--

CREATE TABLE `tes praktek` (
  `Tes Praktek ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tes tulis`
--

CREATE TABLE `tes tulis` (
  `Tes Tulis ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`ID Cabang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID Bayar`),
  ADD KEY `ID Pembayaran Pendaftar` (`ID Pendaftar`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`ID Pendaftar`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID Petugas`),
  ADD KEY `ID Cabang` (`ID Cabang`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`ID Test`),
  ADD KEY `ID Pendaftar` (`ID Pendaftar`);

--
-- Indexes for table `tes praktek`
--
ALTER TABLE `tes praktek`
  ADD KEY `Tes Praktek ID` (`Tes Praktek ID`);

--
-- Indexes for table `tes tulis`
--
ALTER TABLE `tes tulis`
  ADD KEY `Tes Tulis ID` (`Tes Tulis ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `ID Pendaftar` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `ID Petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `ID Test` int(16) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `ID Pembayaran Pendaftar` FOREIGN KEY (`ID Pendaftar`) REFERENCES `pendaftar` (`ID Pendaftar`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `ID Cabang` FOREIGN KEY (`ID Cabang`) REFERENCES `cabang` (`ID Cabang`);

--
-- Constraints for table `tes`
--
ALTER TABLE `tes`
  ADD CONSTRAINT `ID Pendaftar` FOREIGN KEY (`ID Pendaftar`) REFERENCES `pendaftar` (`ID Pendaftar`);

--
-- Constraints for table `tes praktek`
--
ALTER TABLE `tes praktek`
  ADD CONSTRAINT `Tes Praktek ID` FOREIGN KEY (`Tes Praktek ID`) REFERENCES `tes` (`ID Test`);

--
-- Constraints for table `tes tulis`
--
ALTER TABLE `tes tulis`
  ADD CONSTRAINT `Tes Tulis ID` FOREIGN KEY (`Tes Tulis ID`) REFERENCES `tes` (`ID Test`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
