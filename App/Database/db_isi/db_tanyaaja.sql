-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 09:11 AM
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
(8, 'I Don\'t Know', 'no image', '2020-12-14', '2020-12-14', 1, 15),
(12, 'halo', 'no image', '2020-12-15', '2020-12-15', 1, 38);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `question_id`) VALUES
(13, 'json', 14),
(14, 'array', 14),
(33, 'python', 16),
(34, 'java', 16),
(38, 'json', 17),
(39, 'javascript', 17),
(40, 'python', 18),
(41, 'python', 19),
(42, 'array', 19),
(43, 'python', 20),
(44, 'matrix', 20),
(45, 'Haskell', 22),
(46, 'C++', 22),
(50, 'html', 37),
(51, 'button', 37),
(52, 'remove', 37),
(53, 'input', 38),
(54, 'button', 38),
(55, 'html', 38),
(56, 'border', 38),
(57, 'remove', 38),
(73, 'jangan dijawab', 9),
(74, 'random', 9),
(75, 'gajelas', 9),
(76, 'python', 40),
(77, 'selenium', 40),
(78, 'selenium', 40),
(79, 'sqlite', 41),
(80, 'sqlite', 41);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `question_id`) VALUES
(9, 1, 38),
(10, 1, 37),
(12, 2, 41),
(13, 1, 41);

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

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `b_image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(37, 'how to remove outline of html button', 'I have button on my html page, when i click on that button it show me outer line to button shown as below image.', '5fd7538536fdc.png', '2020-12-14', '2020-12-14', 1),
(38, 'How To Remove Outline Border From Input Button?', 'when click somewhere else the border disappears, tried onfocus none, but didn\'t help, how to make ugly button border disappear when click on?', '5fd753e286c78.png', '2020-12-14', '2020-12-14', 1),
(40, 'With Selenium python, do I need to refresh the page when waiting for hidden btn to appear and be clickable?', 'I\'m trying to make a small program that looks at a web page at a hidden button (uses hide in the class) and waits for it to be clickable before clicking it. The code is below. I\'m wondering if the WebDriverWait and element_to_be_clickable functions will already by refreshing things or if I would have to manually refresh the page.', 'no image', '2020-12-15', '2020-12-15', 2),
(41, 'optimized way to check if table is empty SQLite', 'CI am working over a project that in which the database has multiple tables. Some of these tables are empty and some contain a few million rows. I need to check if a table is empty. This is the piece of code(extracted needed part):ould anyone help to get desired output like mentioned below?', 'no image', '2020-12-15', '2020-12-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `description`, `created_at`, `updated_at`, `user_id`, `answer_id`) VALUES
(1, 'thank you, sir!', '2020-12-14', '2020-12-14', 1, 7),
(2, 'very nice !', '2020-12-14', '2020-12-14', 1, 7),
(3, 'What ?', '2020-12-14', '2020-12-14', 1, 5),
(4, 'lol', '2020-12-14', '2020-12-14', 1, 8),
(5, 'Thanks a lot Chris. If I wanted to have instead of True/False, the word which is upper, may I use df[\'Upper\'] = df[\'TEST\'].str.findall(r\'([A-Z]{2,})\')? I think I should add something that selects at this point only the first word within the row (as you m', '2020-12-14', '2020-12-14', 1, 2),
(6, 'Just remove the .isupper() part. it\'s already only looking at the first word per row. This will of course break the final calculation', '2020-12-14', '2020-12-14', 1, 4);

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
  `prof` varchar(150) NOT NULL,
  `back` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `fname`, `email`, `phone`, `alamat`, `prof`, `back`) VALUES
(1, 'dede12', '1234', 'user', 'dede laksmana', 'dede.laksmana.yuda@gmail.com', '0812345678', 'Jl. Gajah Duduk No.12', 'Array', 'Array'),
(2, 'admin1', '1234', 'admin', '', '', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `user_id`, `question_id`) VALUES
(1, 2, 38),
(2, 2, 37),
(3, 2, 16),
(4, 2, 19),
(5, 1, 38),
(6, 1, 37),
(8, 2, 41),
(9, 1, 41),
(11, 2, 15),
(12, 2, 18),
(13, 2, 20),
(15, 2, 40),
(16, 1, 9),
(17, 1, 40),
(18, 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
