-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Apr 04, 2023 at 11:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL,
  `timestamp_column` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `timestamp_column`) VALUES
(1, 'first post', 'this is my first post!!!\r\nHello :)', '0000-00-00 00:00:00'),
(2, 'second post!', 'lol', '0000-00-00 00:00:00'),
(3, 'third post', 'how do you do!\r\n', '0000-00-00 00:00:00'),
(4, 'fourth post', 'hello I like pizza!', '2023-03-24 21:43:34'),
(5, 'i LOVE PHP!1', 'PHP is SOO AWSOME!!', '2023-03-24 21:55:19'),
(6, 'project is almost complete!', 'just need to add few new features\r\nbut my brain is not working anymore\r\n🧠', '2023-03-24 22:06:31'),
(7, 'gonna sleep now', 'good night\r\n\r\n\r\n\r\n\r\n\r\nP', '2023-03-24 22:13:50'),
(8, 'hello boiii', 'whats up, good morning!!', '2023-03-25 08:34:33'),
(9, 'yo yo', 'what up boii', '2023-03-25 08:38:09'),
(10, 'timezone fixed!', 'post for checking timezone fix\r\nits fixed!!', '2023-03-25 17:19:11'),
(12, 'added edit and delete feature!', 'just added new features!\r\nedit -> you can edit post using it\r\ndelete -> you can delete a certain post using it', '2023-03-25 18:42:27'),
(15, 'PROJECT COMPLETED!', 'i mean, im still thinking what to add\r\nwe will see....', '2023-03-25 18:56:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
