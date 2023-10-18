-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 05:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week4`
--

-- --------------------------------------------------------

--
-- Table structure for table `joke`
--

CREATE TABLE `joke` (
  `id` int(11) NOT NULL,
  `joketext` text NOT NULL,
  `jokedate` date NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joke`
--

INSERT INTO `joke` (`id`, `joketext`, `jokedate`, `image`) VALUES
(1, 'matt joke 1', '2023-10-02', 'chicken.png'),
(3, 'my next joke', '2023-10-16', 'doctor.png'),
(4, 'some chicken joke', '2023-10-24', 'knocker.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `joke_pic`
--

CREATE TABLE `joke_pic` (
  `id` int(11) NOT NULL,
  `jokedate` date NOT NULL,
  `image` varchar(20) NOT NULL,
  `pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joke_pic`
--
ALTER TABLE `joke_pic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joke`
--
ALTER TABLE `joke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joke_pic`
--
ALTER TABLE `joke_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
