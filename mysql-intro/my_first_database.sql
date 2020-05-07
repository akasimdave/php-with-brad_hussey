-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 03:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_first_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biograpgy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `signup_date`, `biograpgy`) VALUES
(1, 'bradhussey', 'mypassword', 'my@email.com', '2018-11-20 22:09:57', 'feel free to add bio here'),
(2, 'simeon', 'yourpassword', 'simeon@gmail.com', '2018-11-20 22:49:00', 'this is simeon\'s bio'),
(3, 'jacksonsmith', 'abc123', 'jack@son.com', '2018-11-20 23:37:35', 'Hello! I\'m Jackson. This is my bio.'),
(4, 'jacksonsmith', 'abc123', 'jack@son.com', '2018-11-20 23:38:42', 'Hello! I\'m Jackson. This is my bio.'),
(5, 'root', '', '', '2018-11-21 00:29:31', 'NULL'),
(6, 'root', '', '', '2018-11-21 00:30:17', 'NULL'),
(7, 'root', '', '', '2018-11-21 00:30:51', 'NULL'),
(8, 'root', '', '', '2018-11-21 00:31:05', 'NULL'),
(9, 'root', '', '', '2018-11-21 00:31:14', 'NULL'),
(10, 'simdave', 'simdavepassword', 'simdave@gmail.com', '2018-11-21 00:51:05', 'NULL'),
(11, 'simdave2', '$2y$10$BcpkFa0GzfOpe6DHyQNA6uzzhIwrSUtRDhiHOtBWQhNngiEko4ryu', 'simdave2@gmail.com', '2018-11-21 08:45:46', 'this is simdave2\'s password');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
