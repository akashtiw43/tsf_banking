-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:58 PM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `account_no` int(20) NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `account_no`, `balance`) VALUES
(1, 'Rohit Sharma', 'ro45@gmail.com', 1111, 16500),
(2, 'Virat Kohli', 'vk18@gmail.com', 2222, 25822),
(3, 'Shikhar Dhawan', 'gabbar@gmail.com', 3333, 9700),
(4, 'Kl Rahul', 'kl@gmail.com', 4444, 8500),
(5, 'Shreyas Iyer', 'iyer@gmail.com', 5555, 7030),
(6, 'Jasprit Bumrah', 'boom@gmail.com', 6666, 6049),
(7, 'Yuzi Chahal', 'teeli@gmail.com', 7777, 6610),
(8, 'Hardik Pandya', 'hard@gmail.com', 8888, 7020),
(9, 'Ravi Jadeja', 'sir@gmail.com', 9999, 9455),
(10, 'Prithvi Shaw', 'shaw@gmail.com', 1234, 5430);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(20) NOT NULL,
  `sender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `sender`, `receiver`, `amount`, `time`) VALUES
(1, 'Rohit Sharma', 'Virat Kohli', 1000, '2021-10-10 00:00:00'),
(2, 'Shreyas Iyer', 'Shikhar Dhawan', 500, '2021-10-10 00:00:00'),
(4, 'Yuzi Chahal', 'Kl Rahul', 700, '2021-10-10 17:06:35'),
(5, 'Yuzi Chahal', 'Hardik Pandya', 300, '2021-10-10 17:49:54'),
(6, 'Hardik Pandya', 'Yuzi Chahal', 250, '2021-10-10 17:51:44'),
(7, 'Shreyas Iyer', 'Hardik Pandya', 900, '2021-10-10 17:52:57'),
(8, 'Rohit Sharma', 'Ravi Jadeja', 355, '2021-10-10 18:04:30'),
(9, 'Yuzi Chahal', 'Jasprit Bumrah', 440, '2021-10-10 18:06:26'),
(10, 'Shikhar Dhawan', 'Hardik Pandya', 300, '2021-10-10 18:12:48'),
(15, 'Hardik Pandya', 'Prithvi Shaw', 230, '2021-10-10 18:22:23'),
(16, 'Shreyas Iyer', 'Yuzi Chahal', 200, '2021-10-10 18:24:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
