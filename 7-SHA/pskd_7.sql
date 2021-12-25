-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 06:17 PM
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
-- Database: `pskd_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `enkrip`
--

CREATE TABLE `enkrip` (
  `teks` text NOT NULL,
  `md5` varchar(255) NOT NULL,
  `sha1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enkrip`
--

INSERT INTO `enkrip` (`teks`, `md5`, `sha1`) VALUES
('SISTEM KEAMANAN DATA', '42bffe8d5f17379245989b16b13973b4', '15412f9670c5a8594f81f8dc87838f355b04106a'),
('SISTEM KEAMANAN DATA', '42bffe8d5f17379245989b16b13973b4', '15412f9670c5a8594f81f8dc87838f355b04106a'),
('SISTEM KEAMANAN DATA', '42bffe8d5f17379245989b16b13973b4', '15412f9670c5a8594f81f8dc87838f355b04106a'),
('', 'd41d8cd98f00b204e9800998ecf8427e', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('SISTEM KEAMANAN DATA', '42bffe8d5f17379245989b16b13973b4', '15412f9670c5a8594f81f8dc87838f355b04106a'),
('Inni adalah program enkripsi dari md5 dan sha1 sebagai tugas 7 praktikum sistem keamanan data ', '590f015c369d85312503f744006afb59', 'd6cb28038f04ed6969ace3c20ac1357b3c36bd69'),
('Halo, Selamat pagi', 'e1370b2650f7cf2c567c00a281b8fa5b', '118be099bf2bce07815c1a9b79b4d7e0a1cd7524'),
('Ini cuma percobaan', 'af9048d7dc351b6825c92e90eed7acd8', '062bba5df6ec764f86e128d58ab65f264d7f7f4c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `password`) VALUES
('admin', 'Administrator', 'admin@mail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
