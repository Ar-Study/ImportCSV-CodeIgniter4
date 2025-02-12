-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2025 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `eskul` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id`, `id_siswa`, `eskul`) VALUES
(1, 57, 'Bola Basket'),
(2, 168, 'Olahraga'),
(3, 169, 'Basket'),
(4, 0, 'Olahraga'),
(5, 0, 'wqe'),
(6, 0, 'Mainan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(2) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `kelas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `umur`, `kelas`) VALUES
(168, 'Agus', '21', '2'),
(169, 'Farrel', '12', '2'),
(170, 'Agus', '21', '2'),
(171, 'asd', '21', '2'),
(172, 'asd', '21', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
