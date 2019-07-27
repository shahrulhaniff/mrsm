-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 10:43 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
  `nomak` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `hr` varchar(25) NOT NULL,
  `namapenjaga` varchar(200) NOT NULL,
  `notel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`nomak`, `nama`, `kelas`, `hr`, `namapenjaga`, `notel`) VALUES
('1', 'muhammad satu', '1', 'SATU', '12', '123'),
('12345', '12345', '12345', '12345', '12345', '12345'),
('TT170410', 'ELSA SOFIA BINTI MAZLI', '4 AL BIRUNI', 'PATRIOTIK 4', 'MAZLI B ABDUL MUTALIB', '0132815592');

-- --------------------------------------------------------

--
-- Table structure for table `pengurusan`
--

CREATE TABLE IF NOT EXISTS `pengurusan` (
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurusan`
--

INSERT INTO `pengurusan` (`nama`, `username`, `pwd`) VALUES
('Tcer Wan', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE IF NOT EXISTS `permohonan` (
  `id` int(9) NOT NULL,
  `nomak` varchar(10) NOT NULL,
  `sebab` varchar(300) NOT NULL,
  `tarikhkeluar` date NOT NULL,
  `tarikhmasuk` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `nomak`, `sebab`, `tarikhkeluar`, `tarikhmasuk`, `status`) VALUES
(16, 'TT170410', 'pulang', '2019-07-03', '2019-07-24', 'L'),
(17, '12345', '12345', '2019-07-05', '2019-07-05', 'T'),
(22, '1', '1', '2019-07-01', '2019-07-31', 'N'),
(23, 'TT170410', 'cuti', '2019-07-23', '2019-07-24', 'T'),
(24, 'TT170410', 'PP222', '2019-07-30', '2019-07-24', 'N'),
(25, '1', '', '0000-00-00', '0000-00-00', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`nomak`);

--
-- Indexes for table `pengurusan`
--
ALTER TABLE `pengurusan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
