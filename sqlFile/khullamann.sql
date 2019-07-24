-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 12:18 PM
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

--
-- Dumping data for table `donorprofile`
--

INSERT INTO `donorprofile` (`donor_id`, `profile_pic`, `username`, `email`, `password`, `address`, `contact_no`) VALUES
(1, '', 'cbriggs0', 'croll0@elpais.com', '7VcVgx3O8tX', '98208 Schiller Drive', 755),
(2, '', 'rmathes1', 'seddow1@cpanel.net', 'LEnNJxbJ46O', '29 Lien Lane', 320),
(3, '', 'bcoode2', 'dgurko2@devhub.com', 'B8V4r41V', '4 Cordelia Pass', 107),
(4, '', 'jstutard3', 'ljuares3@fema.gov', 'ECyvv61EJmD0', '8797 Tomscot Way', 618),
(5, '', 'bhoggan4', 'npavek4@cornell.edu', 'wLqyMNy2bcEq', '1687 Haas Alley', 419),
(6, '', 'epettiward5', 'poldam5@google.ca', '6aHjyJb', '11 Hoard Hill', 569),
(7, '', 'mfinder6', 'olumber6@tinypic.com', 'dWyqun7IRcsb', '331 Stephen Junction', 124),
(8, '', 'mgross7', 'rpires7@foxnews.com', 'sc7bIjPyg', '38 Meadow Ridge Junction', 454),
(9, '', 'cdye8', 'phovey8@is.gd', 'MOi3QBcMAWa', '9397 Monument Road', 768),
(10, '', 'cokuddyhy9', 'vfowells9@mtv.com', 'iTHRzo3Vrr14', '19278 Mayer Point', 330);

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
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
