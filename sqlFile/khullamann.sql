-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 08:23 AM
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
-- Database: `khullamann`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_post`
--

CREATE TABLE `donation_post` (
  `post_id` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `bio` text NOT NULL,
  `description` text NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `donee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doneeprofile`
--

CREATE TABLE `doneeprofile` (
  `donee_id` int(11) NOT NULL,
  `profile_pic` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `document` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donorprofile`
--

CREATE TABLE `donorprofile` (
  `donor_id` int(11) NOT NULL,
  `profile_pic` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_email` text NOT NULL,
  `subject` text NOT NULL,
  `feeback_content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
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
-- Indexes for table `doneeprofile`
--
ALTER TABLE `doneeprofile`
  ADD PRIMARY KEY (`donee_id`);

--
-- Indexes for table `donorprofile`
--
ALTER TABLE `donorprofile`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_post`
--
ALTER TABLE `donation_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doneeprofile`
--
ALTER TABLE `doneeprofile`
  MODIFY `donee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donorprofile`
--
ALTER TABLE `donorprofile`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD CONSTRAINT `donation_post_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `doneeprofile` (`donee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
