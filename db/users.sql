-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2022 at 12:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passoward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `passoward`) VALUES
(1, 'admin', 'salman@gmail.com', 0),
(2, 'admin', 'salman@gmail.com', 0),
(3, 'admin', 'salman@gmail.com', 0),
(4, 's', 'salmann.hosain@gmail.com', 0),
(5, 's', 'salmann.hosain@gmail.com', 0),
(10, 'm', 'm@gmail.com', 0),
(11, 'm', 'm@gmail.com', 0),
(12, 'm', 'm@gmail.com', 0),
(13, 'dis', 'dis@gmail.com', 202),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, '', '', 0),
(18, '', '', 0),
(19, '', '', 0),
(20, '', '', 0),
(21, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `passoward` (`passoward`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
