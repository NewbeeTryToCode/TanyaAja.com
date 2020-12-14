-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 02:50 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `description`, `image`, `created_at`, `updated_at`, `user_id`, `question_id`) VALUES
(2, 'Your regex pattern is going to fail if you have a word with two capital letters but the rest are lowercase. This might help.', '5fd6e1c6bea0e.png', '2020-12-14', '2020-12-14', 1, 16),
(3, 'Lets Try extract first two capital letters, find where there is no NaN returned and convert it into an interger.\r\n\r\ndf[\'Class\']=df.TEST.str.extract(\'(^[A-Z]{2})\').notna().astype(int)', 'no image', '2020-12-14', '2020-12-14', 1, 16),
(4, 'You can use a simple if condition to check whether the onBlock is false and then use delete operator to delete a specific JSON Key.', '5fd6e4d7885b4.png', '2020-12-14', '2020-12-14', 1, 17),
(5, 'I think..', 'no image', '2020-12-14', '2020-12-14', 1, 16),
(7, 'I think..', '5fd6ea4b38bce.png', '2020-12-14', '2020-12-14', 1, 16),
(8, 'I Don\'t Know', 'no image', '2020-12-14', '2020-12-14', 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
