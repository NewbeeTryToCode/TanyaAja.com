-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tanyaaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `fname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `prof` varchar(256) NOT NULL,
  `back` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `fname`, `email`, `phone`, `alamat`, `prof`, `back`) VALUES
(1, 'dede12', '1234', 'user', 'dede laksmana yuda', 'dede.laksmana.yuda@gmail.com', '0812345678', 'Jl. Gajah Duduk No.12', 'avatar.png', 'unnamed.jpg'),
(2, 'admin1', '1234', 'admin', '', '', '', '', 'avatar.png', 'unnamed.jpg'),
(3, 'usertes1', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'dede laksmana', 'usertes@gmail.com', '081234567', 'tes tes', 'avatar.png', 'unnamed.jpg'),
(4, 'usertes2', '8ff04075dc6e237757de47f916489793', 'user', '', 'usertes2@gmail.com', '', '', 'avatar.png', 'unnamed.jpg'),
(5, 'usertes3', 'c62844930b2abc18fa305afc304b2d8a', 'user', '', 'usertes3@gmail.com', '', '', 'avatar.png', 'unnamed.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
