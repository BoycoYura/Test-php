-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2017 at 07:20 PM
-- Server version: 5.5.50
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `My_TODO`
--

-- --------------------------------------------------------

--
-- Table structure for table `TO_DO`
--

CREATE TABLE IF NOT EXISTS `TO_DO` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `completed` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TO_DO`
--

INSERT INTO `TO_DO` (`id`, `description`, `completed`) VALUES
(1, 'Go to the store', 1),
(2, 'Create a big work', 1),
(3, 'Create a small work', 0),
(4, 'Create a middle work', 1),
(5, 'Create a great work', 1),
(6, 'Create a little work', 1),
(7, 'Oh my god', 0),
(8, 'Good things create', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TO_DO`
--
ALTER TABLE `TO_DO`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TO_DO`
--
ALTER TABLE `TO_DO`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
