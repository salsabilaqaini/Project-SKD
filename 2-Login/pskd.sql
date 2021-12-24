-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 06:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pskd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `token` varchar(255) NOT NULL,
  `aktif` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `alamat`, `password`, `role`, `token`, `aktif`) VALUES
(6, 'Yulis', 'Yuli Susilastutik', 'yulisusilastutik@gmail.com', 'Sidoharjo, Polanharjo, Klaten, Jawa Tengah', '$2y$10$hlBaZmZP8OXks7c8RFRMA.DD1TMHQJ2HFT9iYYNuQg48KZl/a03Eq', 'Mahasiswa', '01af80965b3e8df5b9af4ec605e2e70f80962e9dec3a1f3698f8c64af5349567', '1'),
(7, 'aacollection', 'Adibah Aida', 'adibahaida212@gmail.com', 'Sidoharjo, Polanharjo, Klaten, Jawa Tengah', '$2y$10$UR0RQKRmJULJCa9i7Jhf5ukV4UAGt.6BSxBOH9nALzX3WgszaVnDO', 'Mahasiswa', 'c50a0b64ae874f3a2325777bcbe9f934915b20237859948bf3b7a2c83978a90d', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
