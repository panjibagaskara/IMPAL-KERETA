-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2018 at 02:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `divisi`) VALUES
('admin', 'admin', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `email`) VALUES
('panjibgskr', '12345678', 'panjibagaskara89@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gerbong`
--

CREATE TABLE `gerbong` (
  `idgerbong` varchar(10) NOT NULL,
  `idkereta` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jumkursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gerbong`
--

INSERT INTO `gerbong` (`idgerbong`, `idkereta`, `kelas`, `jumkursi`) VALUES
('gerbong1', 'kereta1', 'Eksekutif', 80),
('gerbong2', 'kereta1', 'Ekonomi', 80);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idjadwal` int(11) NOT NULL,
  `idkereta` varchar(10) NOT NULL,
  `idstasiun` varchar(10) NOT NULL,
  `jamberangkat` time NOT NULL,
  `jamtiba` time NOT NULL,
  `tanggalberangkat` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idjadwal`, `idkereta`, `idstasiun`, `jamberangkat`, `jamtiba`, `tanggalberangkat`, `harga`) VALUES
(3, 'kereta1', 'stasiun1', '10:00:00', '13:00:00', '2018-12-02', 80000),
(4, 'kereta1', 'stasiun2', '19:00:00', '22:00:00', '2018-12-02', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `idkereta` varchar(10) NOT NULL,
  `namakereta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`idkereta`, `namakereta`) VALUES
('kereta1', 'Argo Parahyangan'),
('kereta2', 'Sawunggalih Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `idriwayat` varchar(10) NOT NULL,
  `idtiket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `idstasiun` varchar(10) NOT NULL,
  `sta_awal` varchar(20) NOT NULL,
  `sta_akhir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`idstasiun`, `sta_awal`, `sta_akhir`) VALUES
('stasiun1', 'Bandung', 'Bekasi'),
('stasiun2', 'Bekasi', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idtiket` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `idjadwal` int(11) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `penumpang` varchar(100) NOT NULL,
  `jk` varchar(6) NOT NULL,
  `kursi` varchar(3) NOT NULL,
  `statusbayar` int(11) NOT NULL,
  `statuscheckin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`idtiket`, `username`, `idjadwal`, `noktp`, `penumpang`, `jk`, `kursi`, `statusbayar`, `statuscheckin`) VALUES
('3365647010', 'panjibgskr', 3, '082216645842', 'Panji Bagaskara', 'pria', 'A1', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD PRIMARY KEY (`idgerbong`),
  ADD KEY `idkereta` (`idkereta`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idjadwal`),
  ADD KEY `idstasiun` (`idstasiun`),
  ADD KEY `idkereta` (`idkereta`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`idkereta`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`idriwayat`),
  ADD KEY `idtiket` (`idtiket`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`idstasiun`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idtiket`),
  ADD KEY `idjadwal` (`idjadwal`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD CONSTRAINT `gerbong_ibfk_1` FOREIGN KEY (`idkereta`) REFERENCES `kereta` (`idkereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`idstasiun`) REFERENCES `stasiun` (`idstasiun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`idkereta`) REFERENCES `kereta` (`idkereta`);

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`idtiket`) REFERENCES `tiket` (`idtiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`idjadwal`) REFERENCES `jadwal` (`idjadwal`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
