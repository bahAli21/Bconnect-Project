-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 08:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BConnectChatApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL,
  `outgoing` varchar(20) NOT NULL,
  `incoming` varchar(20) NOT NULL,
  `messages` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `outgoing`, `incoming`, `messages`) VALUES
(1, '1', '2', 'Salut je suis Bah Leo'),
(2, '1', '2', 'hy'),
(3, '1', '2', 'hy'),
(4, '1', '2', 'hy'),
(5, '1', '2', 'hy'),
(6, '1', '2', 'hy'),
(7, '1', '2', 'hy'),
(8, '1', '2', 'hy'),
(9, '1', '2', 'how are u sir'),
(10, '1', '2', 'plzz help me'),
(11, '1', '2', 'hlp me to improve my skills'),
(12, '2', '1', 'ok'),
(13, '2', '1', 'i will help u'),
(14, '1', '2', 'ok'),
(15, '1', '2', 'where are u from?'),
(16, '1', '2', 'hello'),
(17, '1', '2', 'hello code provider'),
(18, '1', '2', 'hello'),
(19, '1', '2', 'test message'),
(20, '3', '1', 'hello'),
(21, '3', '1', 'how r u?'),
(22, '3', '1', 'i need your help?'),
(23, '4', '3', 'hello sir'),
(24, '4', '3', 'how r u?'),
(25, '3', '4', 'i am fine'),
(26, '4', '3', 'i need your help'),
(27, '4', '3', 'how can i help u?'),
(28, '1', '4', 'hello'),
(29, '1', '3', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `image`, `status`) VALUES
(1, 'Golden', 'Boy', 'golden@gmail.com', 'golden12345', '3.jpg', 'Online'),
(2, 'Leo Messi', 'Messi', 'messi@gmail.com', 'messi12345', '13.jpg', 'Offline'),
(3, 'Said Balde', 'Balde', 'said@gmail.com', 'said12345', 'said.JPG', 'Offline'),
(4, 'Mamoudou', 'Diallo', 'mamoudou@gmail.com', 'mamoudou12345', '14.jpg', 'Online'),
(5, 'Fora', 'Diawara', 'fora@gmail.com', 'fora12345', '2.jpg', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
