-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:32 PM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'How to get first repeated object from an array of objects?', 'Like shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an objLike shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an objLike shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an obj', 'no image', '0000-00-00', '0000-00-00', 1),
(9, 'Kenapa aku begini?', 'saya mencoba berbagai cara untuk menjadi begitu, tapi kenapa saya diabaikan menjadi begini...hmmm ini bisa menjadi salah satu kesalah yang menjadi kesalah pahaman yang dirasakan oleh masyarakat yang ga jelas', '5fd4bf35b9284.png', '2020-12-12', '2020-12-13', 1),
(14, 'Is there a way to lower HTTPS requests where I have to request a large amount of IDs', 'And I have an array of IDs that can correspond to raw JSON on the site.\r\n\r\nI can request it via example.com/&lt;name&gt;/&lt;id&gt;\r\n\r\nThing is, the amount of IDs I have is over 100. So, I have to make over 100 HTTPs requests. I don\'t think the site can let me do example.com/&lt;name&gt;?ids=[ids](plug in the array of IDs as a component). Is there a way I can optimize this?\r\n\r\nI\'m using Node.JS, the HTTPS module.', 'no image', '2020-12-13', '2020-12-13', 1),
(15, 'How to throw an error message if there is an same key and values in the dictionary in Python?', 'Let\'s imagine a student dictionary have key\'s and values and when it comes to displaying the values is there a possible way to print if there is a duplicated value or they are identical I want to throw an error message because it is supposedly one key to one value so is it possible?', 'no image', '2020-12-13', '2020-12-13', 1),
(16, 'Implode multidimensional array in PHP', 'I need to implode a multidimensional array. The require output is the value separated by commas. For example, I have the following array:I need to implode a multidimensional array. The require output is the value separated by commas. For example, I have the following array: value separated by commas. For example, I have the following array: value separated by commas. For example, I have the following array:', '5fd60ec88d5b3.png', '2020-12-13', '2020-12-13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
