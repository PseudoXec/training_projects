-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 09:33 AM
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
-- Database: `dynamicwebprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_sec`
--

CREATE TABLE `com_sec` (
  `Userid` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Comment` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_sec`
--

INSERT INTO `com_sec` (`Userid`, `Name`, `Comment`) VALUES
(30, 'Iron Man', 'Kulang sa Fe~');

-- --------------------------------------------------------

--
-- Table structure for table `pet_likes`
--

CREATE TABLE `pet_likes` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `count_value` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_likes`
--

INSERT INTO `pet_likes` (`id`, `pet_name`, `count_value`) VALUES
(1, 'French Bulldog', 7),
(2, 'Golden Retriever', 4),
(3, 'German Sheperd', 8),
(4, 'Persian', 1),
(5, 'Siamese', 1),
(6, 'Maine Coon', 0),
(7, 'Cockatoos', 0),
(8, 'Parakeets', 1),
(9, 'Finch', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_sec`
--
ALTER TABLE `com_sec`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `pet_likes`
--
ALTER TABLE `pet_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_sec`
--
ALTER TABLE `com_sec`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pet_likes`
--
ALTER TABLE `pet_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
