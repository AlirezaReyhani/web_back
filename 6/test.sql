-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2025 at 12:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Fname`, `Lname`, `grade`) VALUES
(1, 'Alireza', 'Reyhani', 18.52),
(2, 'asdsad', 'gfgf', 1),
(3, 'bhg', 'gfgf', 1),
(4, 'ghfghty', 'gfgf', 1),
(5, 'asddAsad', 'gfgf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `password` int(11) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `phone`) VALUES
(2, 'root', 123, ''),
(3, 'admin', 1234, '+989999999999'),
(4, 'user', 0, ''),
(5, 'AReyhani', 1234, '+98888888'),
(6, 'asdasdasd', 12345, 'asdadsasd'),
(7, 'Ghazi', 123, '+98123456789'),
(8, 'Ghazi', 123, '+98123456789'),
(9, 'Ghazi', 123, '+98123456789'),
(10, 'Ghazi', 123, '+98123456789'),
(11, 'Ghazi', 123, ''),
(12, '', 0, ''),
(13, '', 0, ''),
(14, '', 0, ''),
(15, '', 0, ''),
(16, '', 0, ''),
(17, '', 0, ''),
(18, '', 0, ''),
(19, '', 0, ''),
(20, 'Ghazi', 123, '+98123456789'),
(21, '', 0, ''),
(22, '', 0, ''),
(23, '', 0, ''),
(24, '', 0, ''),
(25, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
