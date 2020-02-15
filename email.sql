-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 06:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL,
  `content` varchar(2500) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `email_date_created` datetime DEFAULT NULL,
  `is_read` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `from_id`, `to_id`, `subject`, `content`, `active`, `email_date_created`, `is_read`) VALUES
(1, 3, 3, 'hgcvhghjb', 'ujvhbjn', 1, '2020-02-14 13:13:22', 1),
(2, 3, 3, 'yvgbjhgvtfvyghbj', 'tcyvgubhinjkl', 1, '2020-02-14 13:17:40', 1),
(3, 3, 3, 'trytvuybnj', 'rctrfvgybuhnijkml', 1, '2020-02-14 13:26:37', 1),
(4, 3, 3, 'ygvjhbkjn', 'tyvubhjklnm', 1, '2020-02-14 13:30:16', 1),
(5, 3, 3, 'fvtygbhunjmkl', 'tfvygbhunjikm', 1, '2020-02-14 13:35:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `middle_name`, `bdate`, `email`, `password`, `active`, `date_created`, `date_modified`) VALUES
(1, 'Siang', 'Somerset', 'Rigonan', '2020-02-13', 'somerset@umindanao.edu.ph', '0cc175b9c0f1b6a831c399e269772661', 1, NULL, NULL),
(2, 'Pajota', 'Efhrain Louis', 'P', '2020-02-06', 'pajota@umindanao.edu.ph', '0cc175b9c0f1b6a831c399e269772661', 1, NULL, NULL),
(3, 'Inciso', 'Don', 'Retardo', '1997-10-21', 'don@um.com', '33f5a7e8f4f310f9774894d807728e3c', 1, NULL, NULL),
(4, 'Velasquez', 'Paul John', 'Gwapo', '1997-01-14', 'paul@um.com', '6c63212ab48e8401eaf6b59b95d816a9', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
