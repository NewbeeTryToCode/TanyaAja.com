-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 10:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `email`, `description`) VALUES
(1, 'laksmanayudha', 'anom@gmail.com', 'pesan in percobaan'),
(2, 'indro', 'indro@gmail.com', 'pesan percobaan kedua'),
(3, 'eko wiguna', 'ekowiguna@gmail.com', 'aplikasi ini sangat membantu sekali'),
(4, 'apaan', 'apaannih@gmail.com', 'wow, hanya saja masih ada beberapa bug yang ditemukan'),
(5, 'anom', 'dede@gmail.com', 'Presntasimu kali ini sangat membosankan. Harusnya latar slide yang kau gunakan saat presentasi berwarna cerah serta poin-poin yang dimasukkan hanyalah poin intinya saja.'),
(6, 'sukasukaanom', 'sukasukaanom@gmail.com', 'website inisangat bagus. Sayang, isi  masih belum banyak yang menggunakan website ini sebagai media pembelajaran yang baik'),
(7, 'yudha', 'laksmanayudha22@gmail.com', 'halo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
