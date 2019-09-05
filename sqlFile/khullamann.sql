-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 12:42 PM
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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `post_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `Gotit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Dumping data for table `donation_post`
--

INSERT INTO `donation_post` (`post_id`, `file_path`, `title`, `bio`, `description`, `post_date`, `post_time`, `donee_id`, `flag`) VALUES
(1, 'upload\\images\\post\\donate1.png', 'Donate1', 'Thank you very much for your interest in donating to Wichita’s Music Theatre for Young People.', 'MTYP is incredibly grateful for all of our donors. Each and every contribution, however large or small, makes an impact on this organization and the youth involved.\r\n\r\nAs a 501(c)3 not-for-profit organization, MTYP relies on the generosity of our community to support our mission.\r\n\r\nWe greatly appreciate your donation at whatever level is comfortable for you.', '2019-08-21', '10:45:10', 2, 1),
(2, 'upload\\images\\post\\donate2.png', 'Donate2', 'credit card donation', 'The Kids & Clays foundation will utilize these donations from generous National Sponsors and Donors, just like you, for Ronald McDonald House Charities. Your donation will help children and families in communities across America.\r\nIf this donation is anonymous then ONLY your donation amount and city will appear on our supporters page. Example: $1 Anonymous Donation from Chicago, IL. Otherwise your donation and message will appear.', '2019-08-22', '12:45:10', 7, 1),
(3, 'upload\\images\\post\\donate3.jpg', 'Donate3', 'donate for good cause', 'To donate more than $10, please increase the quantity of $10 until you reach the desired amount. Then add to cart.\r\n\r\nThank you.\r\n\r\n', '2019-08-23', '11:20:05', 10, 1),
(4, 'upload\\images\\post\\donate4.png', 'Donate4', 'make a donation', 'Make a valuable donation to the much needed KZNPride.org\r\n\r\n', '2019-08-21', '06:55:18', 12, 1),
(5, 'upload\\images\\post\\donate5.png', 'Donate5', 'Brand pomegranate kitchen snap', 'Make a donation to help us out with ingredients, salaries and equipment for the kitchen', '2019-08-25', '05:25:05', 13, 1),
(6, 'upload\\images\\post\\donate6.jpg', 'Donate6', 'JAN\r\n29\r\nThe True Story Behind A $1M Donation… in Bitcoin', 'Last month, I noticed a few people on my Facebook feed sharing a link to a Reddit post that announced the launch of something called the Pineapple Fund. The person behind it wrote that they’d been an early investor in Bitcoin and felt as though at a certain point, enough money is enough, and he or she now wanted to donate $86M in Bitcoin to charities.\r\n\r\nAlthough I stepped out of the active CEO role at Pencils of Promise at the end of 2015 to launch MissionU, I’m still involved as Founder & Board Emeritus and constantly look for ways that I can support our work. I immediately sent the link to the team and said that we should fill out an application form for a donation through the Pineapple Fund website, which the team submitted right away.', '2019-08-20', '08:40:58', 15, 1),
(7, 'upload\\images\\post\\donate7.png', 'Donate7', 'Mission: To create a climate for the arts through the presentation and promotion of cultural and educational events for the Carson Valley Youth and community and the greater Western Nevada/Lake Tahoe Region.\r\n\r\n', 'Purpose: The purpose of the Carson Valley Arts Council shall be to create an environmentally healthy, multifunctional visual and performing arts center dedicated to presenting and promoting cultural events and providing educational and experiential opportunities in our community in the five disciplines: visual, literary, music, dance, and performance.', '2019-08-15', '11:23:55', 17, 1),
(8, 'upload\\images\\post\\donate8.jpg', 'Donate8', 'Welcome to Max Online Store', ' Max Gift Cards\r\n Cooper Gift Cards\r\n MAX Special Events\r\n Max Dining Packages\r\n Max Family Cuvee\r\n Make a Donation\r\n Max Gift Card Shipping Information', '2019-08-24', '11:45:20', 18, 1),
(9, 'upload\\images\\post\\donate9.jpg', 'Donate9', 'LOS ANGELES COMMUNITY HOSPITALS MAKE CHARITABLE DONATIONS TO COMMUNITY ORGANIZATIONS', 'Los Angeles Community Hospital donated to both the East LA Women’s Center and the Eastman School Student Affair. The $250 donation to the Eastman School Student Affair will allow the organization to continue providing opportunities for student-focused extracurricular activities, diversity, leadership, events and civic engagement for students.\r\n\r\nThe hospital also donated $1000 to the East LA Women’s Center. The women’s center founding organization, the East Los Angeles Rape and Battery Hotline, opened its telephone lines to the community of the Greater East Los Angeles area on February 13, 1976. Since then, the center has grown into a safe haven for those affected by rape, sexual and domestic abuse and homelessness throughout Greater Los Angeles, with an emphasis on the Latina community.', '2019-08-27', '05:05:55', 21, 1),
(10, 'upload\\images\\post\\donate10.jpg', 'Donate10', 'Donations by cheque\r\nMake your donation payable to: Bodhichitta Buddhist Centre, 970 Blanshard Street, Victoria BC V8W 2H3\r\n\r\nCash Donations\r\nWe welcome cash donations at the Centre.  If you wish to receive a receipt for tax purposes, be sure to write your full name and address on the envelope.', 'Giving to a Dharma Centre brings hope, joy and peace into the world.\r\n\r\nThe spiritual program at Bodhichitta Buddhist Centre provides practical methods for improving our human nature and qualities and solving our daily problems.  We offer weekly meditation classes, Foundation and Teacher Training Programs, day courses and retreats in Victoria and Vancouver Island.  We are also planning to make our Centre in downtown Victoria more beautiful and comfortable for students.\r\n\r\nBodhichitta Buddhist Centre is a Canadian Registered Charity, Number: 85542 6755 RR0001.  Every donation of $15 or more will receive a tax-deductible receipt.', '2019-08-02', '10:45:18', 22, 1),
(11, 'upload\\images\\post\\donate11.jpg', 'Donate11', 'Donation Requests\r\n \r\nGELSON\'S MARKETS IS PROUD TO SUPPORT THE COMMUNITIES WE SERVE', 'We consider it a privilege to be able to serve you. It’s your home, after all, and you have welcomed us in.\r\n\r\nRequests for donations must be submitted in writing on the organization\'s letterhead (letterhead to include: address, organization\'s federal non-profit ID number, deadline, solicitor\'s name and telephone number). \r\n\r\nIn order for the request to enter the admission process it must be received by our Donations Department 45 days prior to the deadline.  Please, contact us with any requests you have. It will be our pleasure to consider them and do our best to help.  ', '2019-08-12', '11:23:24', 24, 1),
(12, 'upload\\images\\post\\donate12.png', 'Donate12', 'Did you know that SFWA is considered a public charity under its 501(c)3 status? Did you know a monetary gift can help us with our ongoing mission to support, defend, advocate, educate, and promote both within our organization and the SFF community-at-large? ', 'If the family of the deceased as requests a memorial donation to a specific cause or charity in lieu of flowers, you can choose whether or not to make such a donation. If you do, you need to do this in a timely fashion (within 10 days of the funeral service) so that the family can include you when writing thank you notes after the funeral. Make sure the charity knows the name and address of the bereaved family so they can be notified of your kindness; even if you wish to remain anonymous. The family should be made aware that a memorial donation has been received to commemorate their loved one.', '2019-08-14', '10:45:39', 29, 1),
(13, 'upload\\images\\post\\donate13.jpg', 'Donate13', 'New Programs– Register for Cherokee Culture, Joe Penland Music & Storytelling\r\nOur newest film GUARDIANS OF OUR TROUBLED WATERS\r\nOur Appalachian Music Film -A Great American Tapestry: Screenings, DVD, Oral Histories & more here. \r\n Flood of 1916 Film & Sea Turtle Film on PBS! Find a screening/Buy the DVD.', 'America is filled with numerous untold stories, from family stories to folktales, that makes us all richer. However our consumer world often blinds us to the value of our traditions and heritage and replaces them with \"things\". What we lose is access to wealth of our collective cultural tapestry.\r\n\r\nThe Center for Cultural Preservation is a 501(c)3 nonprofit organization dedicated to sharing our cultural treasures through oral history projects, documentary film, public programs, books, education and more. As we connect to our cultural heritage, we also become better stewards of our natural inheritance to insure our land is protected for many generations to come.\r\n\r\nPlease join us, support us and work with us to make the invisible visible once more.', '2019-08-13', '03:27:30', 30, 1),
(14, 'upload\\images\\post\\donate14.png', 'Donate14', 'We offer amazing and exclusive deals for web professionals', 'ACCOUNT\r\nMy Account\r\nCreate Account\r\nPLAN & PRICING\r\nPricing\r\nOpen a Store\r\nHELP & SUPPORT\r\nAbout us\r\nSupport\r\nFaq\r\nPrivacy Policy\r\nReturn and Refund Policy\r\nDMCA Takedown Policy', '2019-08-30', '10:45:37', 31, 1),
(15, 'upload\\images\\post\\donate15.jpg', 'Donate15', 'DONATE\r\nWHAT WE DO\r\nPROGRAMS\r\nNEWS\r\nWHY SPORTS\r\n', 'RECENT POSTS\r\nColumbus Alive: Community feature: Bobby Ferguson builds on African American tennis legacy\r\n22nd Foundation Release New Promotional Video “EVERY CHILD”\r\nBrentnell Recreation Tennis Program Launch\r\nWHY TENNIS\r\nDEVIN BOYER Places 3rd in USTA Midwest Level 3 Tournament', '2019-08-26', '11:20:38', 32, 1),
(16, 'upload\\images\\post\\donate16.jpg', 'Donate16', 'Founded in 1976, the Norfolk Task Force on Aging, a 501(c)3 nonprofit organization, began as a community planning service offering help to agencies providing services to older citizens.  Still fulfilling that purpose today, our members come together to share ideas in order to meet the ever-changing needs of our community\'s elderly population.  ', 'Due to the limitations of this website builder, we can only accept online donations to the Norfolk Task Force on Aging (NTFA) in $10 increments.  For example, if you wish to donate $10, you would choose \"1\" for quantity at checkout.  If you wish to donate $50, you would choose \"5\" for quantity at checkout.  Every dollar counts toward helping Norfolk seniors in need!  All donations are tax deductible.  NTFA is a 501 c 3 nonprofit organization.\r\nFacebook\r\n \r\nTwitter\r\n \r\nPinterest\r\n \r\nGoogle+', '2019-08-16', '06:35:10', 33, 1),
(17, 'upload\\images\\post\\donate17.jpg', 'Donate17', '142 Berkeley Street • Boston\r\n\r\nRoom to Grow offers low-income and homeless families assistance right from the start with coaching, community connections, and material goods. Donations of infant and toddler items are accepted at the Boston location Monday through Friday between 10 a.m. and 2 p.m. and on the first Saturday of each month from 10 a.m. to 2 p.m. Please call 617-859-4545 for curbside pickup of your donations.\r\n\r\nOther donation locations can be located here.', 'Kids grow out of everything! From clothes to shoes to toys, it is an ever-revolving door of STUFF! So what to do with the things they’ve outgrown?\r\n\r\nDonation is a great answer! \r\n\r\nHere is a list of places that will gladly accept donations of the things your children no longer use:\r\n\r\nCradles to Crayons\r\nMultiple donation locations throughout the Boston area\r\n\r\nCradles to Crayons is a nonprofit organization that provides homeless and low-income children with the essentials they require in order to thrive. They accept donations of clothing, shoes, books, baby supplies and diapers, equipment, batteries, and infant gear (especially strollers, and car seats within five years old). They are also in need of hygiene products for older children. They do not accept stuffed animals, ride-on toys, or play ', '2019-08-31', '03:27:35', 34, 1),
(18, 'upload\\images\\post\\donate18.jpg', 'Donate18', 'Alzheimer’s & Dementia\r\n\r\n*Consumer Fraud\r\n\r\n*Elder Abuse Prevention\r\n\r\n*Financial & Legal Topics:  Life Insurance, Long Term Care, Reverse Mortgage, Wills & Trusts\r\n\r\n*Funeral, Cremation and Cemetery Information & Advance Planning\r\n\r\n*Health & Wellness\r\n\r\n*Caregiving Topics:  Home Care, Hospice, Skilled Nursing, Respite Care\r\n\r\n*Senior Housing Choices\r\n\r\n*Transportation Concerns', 'Do you want to create a nonprofit donation form in WordPress? With just a little effort, you can quickly start accepting donations on your own WordPress site.\r\n\r\nIn this article, we’ll show you how to create a nonprofit donation form in WordPress.\r\n\r\nHaving an online donation form on your own WordPress site has many benefits:\r\n\r\nEasy to give – Your supporters are more likely to donate if it’s easy and quick.\r\nSimple to transfer – Payment solutions easily integrate into your site so you can accept donations.\r\nSeamless to connect – Easily customize form fields so you can get more details from your donors to stay in touch.\r\nSo, let’s get started.\r\n\r\nWPForms is the best WordPress Form Builder plugin. Get it for free!\r\nDid you know that we offer a WPForms Nonprofit Discount?', '2019-08-10', '10:46:50', 35, 1),
(19, 'upload\\images\\post\\donate19.png', 'Donate19', 'Our stores and donation centers will observe regular hours this summer. Happy shopping!\r\n\r\nOur career centers will observe special hours through September 3, 2019:\r\nMonday-Wednesday: 9a.m. – 5p.m.\r\nThursday: 9a.m. – 7p.m.\r\nFriday: 9a.m. – 5p.m.\r\nSaturday and Sunday: Closed\r\nThe center will also be closed on Monday, September 2 in observance of Labor day.', 'East Athens Goodwill Thrift Store in Athens (30605)\r\nNo matter what your favorite day to shop is, we’ve got you covered. The Goodwill of North Georgia East Athens Thrift Store in Athens (30605) is open seven days a week. Our staff restocks items on the racks and shelves throughout the day, and merchandise on the entire sales floor is refreshed every 21 days. Come visit our Athens East Athens Store for the thrill of a thrifting treasure hunt. You never know what you’ll find.\r\n\r\nEast Athens Goodwill Donation Center in Athens\r\nNeed room for new furniture? More space for a new television or computer? A place to unload clothes you haven’t worn in years, or toys the kids have outgrown? If so, bring them to Goodwill of North Georgia’s East Athens Donation Center in Athens (30605). You’ll get rid of some clutter and support our mission to put people to work. The Goodwill East Athens Donation Center accepts gently used clothing, books, furniture, computers, and all kinds of other household items. Proceeds from your generous donations helps us generate the revenue to fulfill our mission.', '2019-08-18', '11:14:19', 37, 1),
(20, 'upload\\images\\post\\donate7.png', 'focus', 'hcbhbwch', 'dnakjcnkjscnkjsncsjknscjkscnjsnfsjkdsnv', '2019-08-23', '10:21:27', 17, 1);

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_email` text NOT NULL,
  `subject` text NOT NULL,
  `feedback_content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_email`, `subject`, `feedback_content`, `user_id`) VALUES
(1, 'abc@abc.com', 'bscakjncskjascn', 'bckjsancklcsn', 2),
(2, '123@123.com', '2181652qq6s1wqd', 'whdguybwdkudnwd', 6);

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
  `role` char(5) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`user_id`, `profile_pic`, `username`, `email`, `password`, `address`, `contact_no`, `create_date`, `create_time`, `role`, `flag`) VALUES
(1, '', 'pfomichkin0', 'emarten0@uol.com.br', 'BPZJMw', '5 Dakota Lane', 16720923, '2015-04-02', '20:48:48', 'Donor', 1),
(2, '', 'frodell1', 'jgarbert1@sphinn.com', '8hXTjONhh25f', '6904 John Wall Way', 16690908, '2019-04-28', '18:14:46', 'Donee', 1),
(3, '', 'gzoellner2', 'konele2@wisc.edu', 'ZVQVhsB', '63 Elmside Circle', 16160507, '2014-12-25', '07:46:53', 'Donor', 1),
(4, '', 'lgolsby3', 'mduval3@photobucket.com', 'DukXmt6WRGSn', '2987 Raven Avenue', 16960924, '2016-10-08', '06:34:37', 'Donor', 1),
(5, '', 'vmarian4', 'vizaks4@ucoz.com', 'Kky4bM', '08 Kennedy Street', 16850306, '2018-03-20', '13:53:53', 'Donor', 1),
(6, '', 'klenton5', 'rfawthorpe5@arstechnica.com', 'Oc6pFVc5', '773 Village Court', 16480303, '2015-05-04', '17:46:04', 'Donor', 1),
(7, '', 'cfinneran6', 'cmccafferty6@bing.com', 'ppHd9uabc9Yz', '19 Miller Parkway', 16120419, '2016-05-04', '13:22:57', 'Donee', 1),
(8, '', 'nmessage7', 'tcrowdy7@java.com', 'gnCqjl0DghC', '9863 Knutson Trail', 16531120, '2019-01-19', '16:18:11', 'Donor', 1),
(9, '', 'jebbett8', 'breggio8@marriott.com', 'n8ewQsL1Ez', '14012 Larry Pass', 16060423, '2018-11-06', '14:55:13', 'Donor', 1),
(10, '', 'bfrontczak9', 'fdoddemeade9@sina.com.cn', 'wsNaPPjWQ', '40 8th Center', 16550515, '2015-08-11', '02:28:13', 'Donee', 1),
(11, '', 'sknocka', 'gdevennya@amazon.com', '0ykXgkzdty4Y', '8134 Kingsford Junction', 16361215, '2016-11-27', '20:56:38', 'Donor', 1),
(12, '', 'cmckeeb', 'krollingsonb@networksolutions.com', 'AwFGy5uoCjD', '79757 Sloan Place', 16560317, '2018-12-30', '08:04:53', 'Donee', 1),
(13, '', 'smatherc', 'tcrothersc@un.org', 'fyO4aXK5IxXj', '93733 Namekagon Drive', 16750903, '2017-08-04', '15:01:43', 'Donee', 1),
(14, '', 'sdickensond', 'kdracod@home.pl', 'qzf87gH', '1 Elmside Trail', 16960326, '2014-09-01', '04:03:58', 'Donor', 1),
(15, '', 'csmoutene', 'bblounte@google.nl', 'ttt56oiMuV', '99 Lillian Street', 16640113, '2017-10-29', '20:41:40', 'Donee', 1),
(16, '', 'dcorneliusf', 'bthreadkellf@cyberchimps.com', 'lIqxSYqpl', '6326 Nancy Lane', 16831125, '2016-11-16', '02:13:17', 'Donor', 1),
(17, '', 'rferrullig', 'cdugdaleg@blog.com', 'iyEQVS', '0379 Delaware Place', 16571003, '2017-01-06', '23:41:45', 'Donee', 1),
(18, '', 'rmacgillicuddyh', 'crawsenh@imdb.com', '5qOA6mnOC3Rq', '6 Lukken Point', 16560501, '2017-10-18', '01:01:19', 'Donee', 1),
(19, '', 'iroweni', 'ptropmani@netlog.com', 'muKLm3guDg', '03 Lakewood Gardens Pass', 16411107, '2018-08-02', '21:35:55', 'Donor', 1),
(20, '', 'dgooderj', 'rsandwithj@wired.com', 'jqq7OT', '7 Hanson Park', 16950120, '2014-10-26', '06:03:10', 'Donor', 1),
(21, '', 'cbecarrak', 'vaxtellk@bandcamp.com', 'qPy6XUr', '41732 Prairie Rose Crossing', 16960805, '2016-03-13', '19:42:51', 'Donee', 1),
(22, '', 'oglandfieldl', 'dovizel@nytimes.com', 'HceGVYjebNCI', '96496 Corben Drive', 16260904, '2017-11-01', '08:13:36', 'Donee', 1),
(23, '', 'adudderidgem', 'ecromptonm@indiatimes.com', 'Mjlshl', '3 Lukken Road', 16140629, '2017-05-09', '05:55:47', 'Donor', 1),
(24, '', 'mrocksn', 'nkeetsn@dot.gov', '7xgX4JBl', '5 Dennis Lane', 16440515, '2018-09-19', '10:45:01', 'Donee', 1),
(25, '', 'ffuzzardo', 'jgimleto@edublogs.org', 'rgalRRN', '9037 Weeping Birch Plaza', 16210526, '2015-06-24', '17:52:07', 'Donor', 1),
(26, '', 'dmctrustiep', 'tleetep@google.pl', '0iOYrZY', '4128 Gerald Circle', 16000825, '2016-10-10', '00:09:22', 'Donor', 1),
(27, '', 'ihabbinq', 'hpondjonesq@hud.gov', '6CQNw0Y', '80 Mallory Crossing', 16370528, '2016-08-28', '05:19:36', 'Donor', 1),
(28, '', 'mcosgraver', 'bivanuschkar@gizmodo.com', 'LN3gXoaL4D', '1 Claremont Court', 16110909, '2018-04-23', '13:24:24', 'Donor', 1),
(29, '', 'fpeas', 'lquidenhams@wikispaces.com', 'kAH50Y', '16756 Sage Circle', 16030808, '2017-10-10', '12:19:19', 'Donee', 1),
(30, '', 'gabelt', 'cwolstenholmet@ihg.com', '1UzosIyv5', '0 Summer Ridge Park', 16560426, '2018-02-06', '21:02:15', 'Donee', 1),
(31, '', 'kgranhamu', 'khaskeyu@eepurl.com', 'xarmLo', '9417 Maple Wood Hill', 16280325, '2014-11-14', '23:48:43', 'Donee', 1),
(32, '', 'afaulconbridgev', 'zelnaughv@ucoz.com', 'NsCh6ji', '203 Fulton Plaza', 16740412, '2016-01-30', '16:03:39', 'Donee', 1),
(33, '', 'tingarfieldw', 'pgilbertsonw@scientificamerican.com', 'sUMqNz', '9 Cardinal Alley', 16630127, '2016-09-03', '05:18:09', 'Donee', 1),
(34, '', 'polivarix', 'barnaultx@oracle.com', 'zkjDg3XJjq8', '3076 Lillian Terrace', 16370708, '2016-01-19', '05:56:17', 'Donee', 1),
(35, '', 'rstichely', 'vearneyy@mapy.cz', '2zgmREPTDg', '6 Cottonwood Street', 16790228, '2018-03-02', '09:04:57', 'Donee', 1),
(36, '', 'dscrivensz', 'boriginz@mozilla.com', 'QEFKfFOK6TvF', '747 Maple Crossing', 16600311, '2018-12-13', '23:20:01', 'Donor', 1),
(37, '', 'pcram10', 'valen10@japanpost.jp', 'o8jyaMG', '43754 Loftsgordon Junction', 16430523, '2018-06-04', '23:34:01', 'Donee', 1),
(38, '', 'wisakov11', 'jfeltham11@topsy.com', 'DOf9I0ISQkH', '6 Loftsgordon Hill', 16880927, '2017-06-27', '16:21:33', 'Donor', 1),
(39, '', 'wbushel12', 'pdeblasio12@t-online.de', 'u4l2nld6l', '69 Mitchell Circle', 16820801, '2015-05-16', '21:27:52', 'Donor', 1),
(40, '', 'vchristopher13', 'kjenkison13@imgur.com', 'lJucNz8Zp', '05260 Oak Valley Road', 16760123, '2016-10-27', '08:40:42', 'Donor', 1);

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofile` (`user_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
