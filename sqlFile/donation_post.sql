-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 02:14 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khullamann`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_post`
--

CREATE TABLE `donation_post` (
  `post_id` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `title` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `description` text NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `donee_id` int(11) DEFAULT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `donee_id` (`donee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_post`
--
ALTER TABLE `donation_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD CONSTRAINT `donation_post_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `userprofile` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
