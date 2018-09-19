-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 07:04 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_by_tgl_lahir` ()  NO SQL
select * from peserta order by tanggal_lahir asc$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skema_sertifikasi` varchar(50) NOT NULL,
  `tempat_uji_kompetensi` varchar(50) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL,
  `tanggal_terbit_sertifikat` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `organisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `nik`, `hp`, `email`, `skema_sertifikasi`, `tempat_uji_kompetensi`, `rekomendasi`, `tanggal_terbit_sertifikat`, `tanggal_lahir`, `organisasi`) VALUES
(1, 'Kelvin Wijaya', '7171110703930001', '082296160246', 'kelvin.hwijaya@gmail.com', 'Pemrograman', 'Manado', 'Kompeten', '2018-09-18', '1993-03-07', 'Kominfo Manado'),
(2, 'Test', '123', '234234', 'asdf@gadfdfs.com', '1', 'asdfasdf', '', '2018-09-14', '2018-09-29', 'asdfasdf'),
(3, 'Test2', '123123', '23423400', 'asdf@gadfsdfadfs.com', '2', 'asdf', '', '2018-09-14', '2018-09-29', 'asdfasdf'),
(4, 'Test3', '123901', '12093129', 'oippoip@ikmok.com', '2', 'asdfasdf', '', '2018-09-28', '2018-09-14', 'poasmpf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
