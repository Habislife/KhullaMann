-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 12:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

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
-- Table structure for table `doneeinfo`
--

CREATE TABLE `doneeinfo` (
  `donee_id` int(11) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doneeinfo`
--

INSERT INTO `doneeinfo` (`donee_id`, `account_no`, `document`) VALUES
(2, 3579985016228782, ''),
(30, 5560615377224379, ''),
(7, 3541203050647924, ''),
(10, 3531752373870060, ''),
(12, 201599309349510, ''),
(13, 4844528528947304, ''),
(15, 3589970931284464, ''),
(17, 201933465476124, ''),
(18, 30394460547228, ''),
(21, 3556247768573437, ''),
(22, 4405733214246281, ''),
(24, 3531956384703547, ''),
(29, 201956319484630, ''),
(31, 633477868495047211, ''),
(32, 5146874879744409, ''),
(33, 3570324036334702, ''),
(34, 5010120504803910, ''),
(35, 4017954672753481, ''),
(37, 3584541598282110, '');

-- --------------------------------------------------------

--
-- Table structure for table `doneeverify`
--

CREATE TABLE `doneeverify` (
  `user_id` int(11) NOT NULL,
  `profile_pic` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `role` char(5) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_email` text NOT NULL,
  `subject` text NOT NULL,
  `feedback_content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `user_id` int(11) NOT NULL,
  `profile_pic` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `role` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`user_id`, `profile_pic`, `username`, `email`, `password`, `address`, `contact_no`, `create_date`, `create_time`, `role`) VALUES
(1, '', 'pfomichkin0', 'emarten0@uol.com.br', 'BPZJMw', '5 Dakota Lane', 9171561316516, '2015-04-02', '20:48:48', 'Donor'),
(2, '', 'frodell1', 'jgarbert1@sphinn.com', '8hXTjONhh25f', '6904 John Wall Way', 674351531, '2019-04-28', '18:14:46', 'Donee'),
(3, '', 'gzoellner2', 'konele2@wisc.edu', 'ZVQVhsB', '63 Elmside Circle', 800, '2014-12-25', '07:46:53', 'Donor'),
(4, '', 'lgolsby3', 'mduval3@photobucket.com', 'DukXmt6WRGSn', '2987 Raven Avenue', 912, '2016-10-08', '06:34:37', 'Donor'),
(5, '', 'vmarian4', 'vizaks4@ucoz.com', 'Kky4bM', '08 Kennedy Street', 988, '2018-03-20', '13:53:53', 'Donor'),
(6, '', 'klenton5', 'rfawthorpe5@arstechnica.com', 'Oc6pFVc5', '773 Village Court', 646, '2015-05-04', '17:46:04', 'Donor'),
(7, '', 'cfinneran6', 'cmccafferty6@bing.com', 'ppHd9uabc9Yz', '19 Miller Parkway', 567, '2016-05-04', '13:22:57', 'Donee'),
(8, '', 'nmessage7', 'tcrowdy7@java.com', 'gnCqjl0DghC', '9863 Knutson Trail', 863, '2019-01-19', '16:18:11', 'Donor'),
(9, '', 'jebbett8', 'breggio8@marriott.com', 'n8ewQsL1Ez', '14012 Larry Pass', 922, '2018-11-06', '14:55:13', 'Donor'),
(10, '', 'bfrontczak9', 'fdoddemeade9@sina.com.cn', 'wsNaPPjWQ', '40 8th Center', 517, '2015-08-11', '02:28:13', 'Donee'),
(11, '', 'sknocka', 'gdevennya@amazon.com', '0ykXgkzdty4Y', '8134 Kingsford Junction', 879, '2016-11-27', '20:56:38', 'Donor'),
(12, '', 'cmckeeb', 'krollingsonb@networksolutions.com', 'AwFGy5uoCjD', '79757 Sloan Place', 326, '2018-12-30', '08:04:53', 'Donee'),
(13, '', 'smatherc', 'tcrothersc@un.org', 'fyO4aXK5IxXj', '93733 Namekagon Drive', 986, '2017-08-04', '15:01:43', 'Donee'),
(14, '', 'sdickensond', 'kdracod@home.pl', 'qzf87gH', '1 Elmside Trail', 752, '2014-09-01', '04:03:58', 'Donor'),
(15, '', 'csmoutene', 'bblounte@google.nl', 'ttt56oiMuV', '99 Lillian Street', 357, '2017-10-29', '20:41:40', 'Donee'),
(16, '', 'dcorneliusf', 'bthreadkellf@cyberchimps.com', 'lIqxSYqpl', '6326 Nancy Lane', 354, '2016-11-16', '02:13:17', 'Donor'),
(17, '', 'rferrullig', 'cdugdaleg@blog.com', 'iyEQVS', '0379 Delaware Place', 342, '2017-01-06', '23:41:45', 'Donee'),
(18, '', 'rmacgillicuddyh', 'crawsenh@imdb.com', '5qOA6mnOC3Rq', '6 Lukken Point', 468, '2017-10-18', '01:01:19', 'Donee'),
(19, '', 'iroweni', 'ptropmani@netlog.com', 'muKLm3guDg', '03 Lakewood Gardens Pass', 779, '2018-08-02', '21:35:55', 'Donor'),
(20, '', 'dgooderj', 'rsandwithj@wired.com', 'jqq7OT', '7 Hanson Park', 571, '2014-10-26', '06:03:10', 'Donor'),
(21, '', 'cbecarrak', 'vaxtellk@bandcamp.com', 'qPy6XUr', '41732 Prairie Rose Crossing', 912, '2016-03-13', '19:42:51', 'Donee'),
(22, '', 'oglandfieldl', 'dovizel@nytimes.com', 'HceGVYjebNCI', '96496 Corben Drive', 895, '2017-11-01', '08:13:36', 'Donee'),
(23, '', 'adudderidgem', 'ecromptonm@indiatimes.com', 'Mjlshl', '3 Lukken Road', 657, '2017-05-09', '05:55:47', 'Donor'),
(24, '', 'mrocksn', 'nkeetsn@dot.gov', '7xgX4JBl', '5 Dennis Lane', 792, '2018-09-19', '10:45:01', 'Donee'),
(25, '', 'ffuzzardo', 'jgimleto@edublogs.org', 'rgalRRN', '9037 Weeping Birch Plaza', 188, '2015-06-24', '17:52:07', 'Donor'),
(26, '', 'dmctrustiep', 'tleetep@google.pl', '0iOYrZY', '4128 Gerald Circle', 929, '2016-10-10', '00:09:22', 'Donor'),
(27, '', 'ihabbinq', 'hpondjonesq@hud.gov', '6CQNw0Y', '80 Mallory Crossing', 501, '2016-08-28', '05:19:36', 'Donor'),
(28, '', 'mcosgraver', 'bivanuschkar@gizmodo.com', 'LN3gXoaL4D', '1 Claremont Court', 169, '2018-04-23', '13:24:24', 'Donor'),
(29, '', 'fpeas', 'lquidenhams@wikispaces.com', 'kAH50Y', '16756 Sage Circle', 864, '2017-10-10', '12:19:19', 'Donee'),
(30, '', 'gabelt', 'cwolstenholmet@ihg.com', '1UzosIyv5', '0 Summer Ridge Park', 839, '2018-02-06', '21:02:15', 'Donee'),
(31, '', 'kgranhamu', 'khaskeyu@eepurl.com', 'xarmLo', '9417 Maple Wood Hill', 200, '2014-11-14', '23:48:43', 'Donee'),
(32, '', 'afaulconbridgev', 'zelnaughv@ucoz.com', 'NsCh6ji', '203 Fulton Plaza', 336, '2016-01-30', '16:03:39', 'Donee'),
(33, '', 'tingarfieldw', 'pgilbertsonw@scientificamerican.com', 'sUMqNz', '9 Cardinal Alley', 497, '2016-09-03', '05:18:09', 'Donee'),
(34, '', 'polivarix', 'barnaultx@oracle.com', 'zkjDg3XJjq8', '3076 Lillian Terrace', 268, '2016-01-19', '05:56:17', 'Donee'),
(35, '', 'rstichely', 'vearneyy@mapy.cz', '2zgmREPTDg', '6 Cottonwood Street', 937, '2018-03-02', '09:04:57', 'Donee'),
(36, '', 'dscrivensz', 'boriginz@mozilla.com', 'QEFKfFOK6TvF', '747 Maple Crossing', 757, '2018-12-13', '23:20:01', 'Donor'),
(37, '', 'pcram10', 'valen10@japanpost.jp', 'o8jyaMG', '43754 Loftsgordon Junction', 112, '2018-06-04', '23:34:01', 'Donee'),
(38, '', 'wisakov11', 'jfeltham11@topsy.com', 'DOf9I0ISQkH', '6 Loftsgordon Hill', 904, '2017-06-27', '16:21:33', 'Donor'),
(39, '', 'wbushel12', 'pdeblasio12@t-online.de', 'u4l2nld6l', '69 Mitchell Circle', 377, '2015-05-16', '21:27:52', 'Donor'),
(40, '', 'vchristopher13', 'kjenkison13@imgur.com', 'lJucNz8Zp', '05260 Oak Valley Road', 846, '2016-10-27', '08:40:42', 'Donor');

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
-- Indexes for table `doneeinfo`
--
ALTER TABLE `doneeinfo`
  ADD KEY `donee_id` (`donee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_post`
--
ALTER TABLE `donation_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD CONSTRAINT `donation_post_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `userprofile` (`user_id`);

--
-- Constraints for table `doneeinfo`
--
ALTER TABLE `doneeinfo`
  ADD CONSTRAINT `doneeinfo_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `userprofile` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
