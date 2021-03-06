-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jumlahpendaftar`
--

CREATE TABLE `jumlahpendaftar` (
  `id` int(10) NOT NULL,
  `namaDepartemen` varchar(50) NOT NULL,
  `tahun2014` int(10) NOT NULL,
  `tahun2015` int(10) NOT NULL,
  `tahun2016` int(10) NOT NULL,
  `tahun2017` int(10) NOT NULL,
  `tahun2018` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlahpendaftar`
--

INSERT INTO `jumlahpendaftar` (`id`, `namaDepartemen`, `tahun2014`, `tahun2015`, `tahun2016`, `tahun2017`, `tahun2018`) VALUES
(1, 'Informatika', 1650, 1723, 1796, 1867, 1900),
(2, 'Sistem Informasi', 1477, 1568, 1600, 1633, 1650),
(3, 'Teknologi Informasi', 1600, 1700, 1800, 1900, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'hi', 'hai', 'hello', 'hi there'),
(3, 'Kristian', 'dikandapamerang@gmail.com', 'Hai', 'From:Kristian <br />hai there'),
(4, 'adad', 'dika', 'hai', 'dika'),
(5, 'Kristian', 'dikandapamerang@gmail.com', 'dika', 'From:Kristian <br />dika'),
(7, 'hai', 'dikandapamerang2000@gmail.com', 'hi', ''),
(8, 'Abi', 'abibu@gmail.com', 'hai there', 'From:Abi <br />hahahah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jumlahpendaftar`
--
ALTER TABLE `jumlahpendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jumlahpendaftar`
--
ALTER TABLE `jumlahpendaftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
