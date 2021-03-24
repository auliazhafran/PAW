-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 11:23 AM
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
-- Database: `talkthetalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `talkthetalk_chats`
--

CREATE TABLE `talkthetalk_chats` (
  `id` int(5) NOT NULL,
  `secretcode` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talkthetalk_chats`
--

INSERT INTO `talkthetalk_chats` (`id`, `secretcode`, `username`, `message`, `time`) VALUES
(1, 'a', 'unch', 'dasd', '2021-03-24 13:22:00'),
(2, 'ssad', 'unch', 'ha', '2021-03-24 13:40:44'),
(3, '', 'unch', 'djfsdbfds', '2021-03-24 13:45:33'),
(4, 'sdfdsf', 'unch', 'sdfdsfdsf', '2021-03-24 13:45:37'),
(5, 'sdfdsfHOLLLL', 'unch', 'HOLL', '2021-03-24 13:45:44'),
(6, '', 'unch', 'sdfds', '2021-03-24 14:07:49'),
(7, '', 'unch', 'bsdfds', '2021-03-24 14:09:07'),
(8, '', 'unch', 'gj', '2021-03-24 16:01:57'),
(9, '0', 'Cuycuy', 'Oy', '2021-03-24 16:03:11'),
(10, 'as', 'unch', 'sdasd', '2021-03-24 17:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `talkthetalk_users`
--

CREATE TABLE `talkthetalk_users` (
  `id` int(3) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talkthetalk_users`
--

INSERT INTO `talkthetalk_users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'aceng', 'fikri', 'f@gmail.com', 'fik', '$2y$10$ah6Q8V6d7pVkPsMFajZGP.vECmFVakRC11hfyQISZVCjA2jLwlbAa'),
(2, 'unch', 'unch', 'u@gmail.com', 'unch', '$2y$10$R8Wsiq9ux4agVvOWkrFru.3JgUMRYtPzmYD./vtQdgZiGrK85pIzO'),
(3, 'Fikri', 'Miftah', 'fikri.droid16@gmail.com', 'PisangBenyek', '$2y$10$2zUtTYUZRRR0optaHwDEbeTKKJvzmAtfE4NvAH9Uub5pvf4uzRI5S'),
(4, 'u', 's', 'us@gmai.com', 'a', '$2y$10$SrVPmeFdu6JBN3RZkzsWOeecPX.Kwrxu6vWOt4k3BYVDEcGuR25dy'),
(5, 'Cuy', 'Cay', 'ah@kfhd', 'Cuycuy', '$2y$10$W1rZRd8Biah9ttAKpGQXIOBUizxnddL9/0bXdzX6EEDL8MmbB5vNm'),
(6, 'g', 'g', 'gsda@dsa', 'ga', '$2y$10$H9FEenIrKzzi39ydcazZ9OMxbtQ/KjVE/wSU7Ztp1TUKWGlw8MOy.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talkthetalk_chats`
--
ALTER TABLE `talkthetalk_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talkthetalk_users`
--
ALTER TABLE `talkthetalk_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talkthetalk_chats`
--
ALTER TABLE `talkthetalk_chats`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `talkthetalk_users`
--
ALTER TABLE `talkthetalk_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
