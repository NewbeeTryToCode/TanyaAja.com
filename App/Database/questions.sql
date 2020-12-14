-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 02:48 PM
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
(1, 'How to get first repeated object from an array of objects?', 'Like shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an objLike shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an objLike shown above, there might be duplicates in the array (but it\'s not a must). That\'s why I\'d like to:\r\nLoop over every element (you can ignore the last), and for every element check all elements that come after it (needs a second loop) if there\'s an obj', 'no image', '2020-12-10', '2020-12-10', 1),
(9, 'Kenapa aku begini?', 'saya mencoba berbagai cara untuk menjadi begitu, tapi kenapa saya diabaikan menjadi begini...hmmm ini bisa menjadi salah satu kesalah yang menjadi kesalah pahaman yang dirasakan oleh masyarakat yang ga jelas', '5fd756c484545.png', '2020-12-12', '2020-12-14', 1),
(14, 'Is there a way to lower HTTPS requests where I have to request a large amount of IDs', 'And I have an array of IDs that can correspond to raw JSON on the site.\r\n\r\nI can request it via example.com/&lt;name&gt;/&lt;id&gt;\r\n\r\nThing is, the amount of IDs I have is over 100. So, I have to make over 100 HTTPs requests. I don\'t think the site can let me do example.com/&lt;name&gt;?ids=[ids](plug in the array of IDs as a component). Is there a way I can optimize this?\r\n\r\nI\'m using Node.JS, the HTTPS module.', 'no image', '2020-12-13', '2020-12-13', 1),
(15, 'How to throw an error message if there is an same key and values in the dictionary in Python?', 'Let\'s imagine a student dictionary have key\'s and values and when it comes to displaying the values is there a possible way to print if there is a duplicated value or they are identical I want to throw an error message because it is supposedly one key to one value so is it possible?', 'no image', '2020-12-13', '2020-12-13', 1),
(16, 'Implode multidimensional array in PHP', 'I need to implode a multidimensional array. The require output is the value separated by commas. For example, I have the following array:I need to implode a multidimensional array. The require output is the value separated by commas. For example, I have the following array: value separated by commas. For example, I have the following array: value separated by commas. For example, I have the following array:', '5fd60ec88d5b3.png', '2020-12-13', '2020-12-13', 1),
(17, 'How to Delete an object from a JSON file in Javascript', 'So I am trying to delete an Object from a json file in JavaScript and it is proving to be harder than once thought.\r\n\r\nThis is an example of my JSON file:', '5fd6e4c238b29.png', '2020-12-14', '2020-12-14', 1),
(18, 'Counting number of rows by class starting with an upper case word', 'I would need to count the rows which starts with an upper case word (e.g. STACKOVERFLOW) by class.\r\nTo find an upper case word I am using the following line of code: numbers in one way and non-numbers in another. It returns true or false.', '5fd70a8772585.png', '2020-12-14', '2020-12-14', 1),
(19, 'Zero populating array in python', 'I was trying to figure out how to populate an array with zeros and came across this solution that confused me .\r\ncol = 3\r\nrow = 3\r\nA = [[0 for column in range(col)] for row in range(row)]\r\nHow come you can put a number next to a for loop and python will know to repeat that value within it? ', 'no image', '2020-12-14', '2020-12-14', 1),
(20, 'Problem with matrix product definition inside class', 'I\'m trying to make a basic matrix class without numpy. Every operation works just fine, except for the matrix multiplication. I can\'t see what exactly is wrong with it. Any ideas?', '5fd70b0d113e0.png', '2020-12-14', '2020-12-14', 1),
(21, 'Is there a way to lower HTTPS requests where I have to request a large amount of IDs', 'Is there a way to lower HTTPS requests where I have to request a large amount of IDsIs there a way to lower HTTPS requests where I have to request a large amount of IDsIs there a way to lower HTTPS requests where I have to request a large amount of IDsIs there a way to lower HTTPS requests where I have to request a large amount of IDsIs there a way to lower HTTPS requests where I have to request a large amount of IDs', 'no image', '2020-12-14', '2020-12-14', 1),
(22, 'Can I print in Haskell the type of a polymorphic function as it would become if I passed to it an entity of a concrete type?', 'which means that (.) was &quot;instantiated&quot; (I\'m not sure this is the correct term; as a C++ programmer, I\'d call it so) with b === Char and c === Int, so the signature of the (.) that gets applied to digitToInt is the following', '5fd70b6e705b0.png', '2020-12-14', '2020-12-14', 1),
(23, 'My question is: is there a way to have this signature printed on screen, given (.), digitToInt and the &quot;information&quot; that I want to apply the former to the latter?', 'Other answers require the help of functions that have been defined with artificially restricted types, such as the asTypeOf function in the answer from HTNW. This is not necessary, as the following interaction shows:', 'no image', '2020-12-14', '2020-12-14', 1),
(37, 'how to remove outline of html button', 'I have button on my html page, when i click on that button it show me outer line to button shown as below image.', '5fd7538536fdc.png', '2020-12-14', '2020-12-14', 1),
(38, 'How To Remove Outline Border From Input Button?', 'when click somewhere else the border disappears, tried onfocus none, but didn\'t help, how to make ugly button border disappear when click on?', '5fd753e286c78.png', '2020-12-14', '2020-12-14', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
