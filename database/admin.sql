-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 10:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(4) NOT NULL,
  `b_name` varchar(60) NOT NULL,
  `b_cat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_page` int(5) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_name`, `b_cat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`) VALUES
(1, 'Elephant Kingdom', '1', 'Elephants occupy a special place in the life and art of India. Since ancient times, they have been treasured and pampered as the ultimate beasts of burden, venerated as the vehicles of gods and kings and even worshipped in their own right. Their legendary attributes of strength, intelligence, nobility and longevity are eulogized in myth, epic and popular literature. In the figural and decorative arts, elephants provide an enduring fascination. Elephant Kingdom traces the myriad stories and symbolisms behind India''s much-loved animal, through its depictions in architectural sculpture. At the heart of the study is a collection of over 60 colour photographs from a diversity of antique settings-many of them in remote parts of the subcontinent. At centuries-old temples, monasteries, forts and palaces, elephants flank ceremonial entrances, enrich columns and capitals, form balustrades to stairways or stand as enigmatic sentinels of vast courtyards. Some are legendary characters in tales of dreams and salvation; others enact scenes from a faithfully observed natural history. Some transport kings and heroes into battle and the hunt; others are celestial messengers of rain, fertility and good fortune. From monumental freestanding sculptures to finely-worked narrative friezes, the warmth and energy of these depictions bear testimony to the achievements of countless anonymous artisans. ', 'Vikramjit Ram', '2006', '81-88204-6', 250, 1000, 'upload_image/ARC8.jpg'),
(4, 'Social History', '1', 'Studies in Indian architecture have been confined to those exploring the building techniques of palaces, temples, and tombs. Little attention has traditionally been paid by scholars to the patterns and influences involved in the making of domestic residences, market places, inns, community halls, courts, and other ''lesser'' buildings. The result is the emergence of a very partial picture of what constitutes architecture in India. This volume se eks to overcome this inadequacy by examining the geographical, historical, and functional aspects of architecture in India. Looking beyond the point of view of dynasties, periods or religions, the book traces the various social and historical developments in the field. Following a multi-disciplinary approach that emphasizes sociological aspects, the volume examines in detail, settlement patterns, the architecture of individual houses and chaityas, as also structural materials used for their construction, in addition to those of palaces, funerary monuments, temples, mosques, and monasteries. While examining the planning and design orientation of peoples and architectural techniques across India, the volume pays special attention to that of western India especially Gujarat and Rajasthan. The author also addresses rural and urban patterns of setlement and the linkages between the two. He explains regional and period-specific phenomena, while also quoting from ancient accounts of towns. These vary from the typical urban and rural houses to the Muslim aristocratic residences and Rajput palaces. Based on extensive fieldwork, the author also documents family histories, lifestyles and usage of space to provide a comprehensive social history of Indian architecture. Complemented by over eighty figures including photographs, plans, and detailed diagrams, this book will interest scholars of architecture, history, sociology, and the informed lay reader', 'V.S. Pramar ', '2007', '87558769 ', 300, 1000, 'upload_image/ARC10.jpg'),
(7, 'Visual Basic 2005', '6', '''VB connectivity''', 'Pearson', '2009', 'VB111', 350, 120, 'upload_image/comp8.jpg'),
(8, 'Java & Xml', '3', '''Complete Reference''', 'TATA Mcgerw Hill', '2010', 'JJ123', 1800, 500, 'upload_image/comp9.jpg'),
(9, 'Powershell ', '4', '''Learn Microsoft Windows PowerShell step by step with hands-on instruction from a leading Microsoft scripting trainer. This guide features self-paced labs, timesaving tips, and dozens of sample scripts', 'Wilson', '2006', '9788120332', 755, 295, 'upload_image/comp6.jpg'),
(10, 'C# Programming', '5', '''C# is platform independent,includes namespace,garbage collection,automatic memory management', 'Pearson', '1999', 'c#abd', 450, 300, 'upload_image/1861004877.jpg'),
(11, 'Java Server', '2', '''jsp uses  html tags and run on java platform''', 'BPB Prakashan', '2000', 'jsp123', 1800, 560, 'upload_image/1861004656.jpg'),
(12, 'Programming with Perl', '2', 'Perl is programming langauge which is not comfortable to handle.', 'Wrox', '1995', 'perl123', 560, 450, 'upload_image/0596000278.jpg'),
(13, 'HTML for world wide web', '5', 'html uses tags,it''''s  not case sensitive,work with own html tagswhich must be enclosed.', 'Elizabeth', '2005', 'htmlabc12', 560, 400, 'upload_image/0201354934.jpg'),
(14, 'ASP Server Pages 3.0', '6', 'Active server pages uses xml files ,it run on internet explorer or other browser..', 'Microsoft', '1995', 'asp123', 1150, 950, 'upload_image/1861003382.jpg'),
(30, 'Dream Team India: The Best World Cup Squad Ever !', '4', 'Are you one of those who just knows India will win the match the moment the game starts? Do you drown yourself in cricket and cricket-related trivia every four years and dream of seeing India win the World Cup? If the answer is ?yes? to any of the above, here is the team that will bring home the Cup for you. ', 'Book shop', '2007', '014333015', 147, 200, 'upload_image/c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'New Arrivals'),
(2, 'Sinhala'),
(3, 'English'),
(4, 'Adult''s'),
(5, 'Children''s'),
(6, 'Novels');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` int(4) NOT NULL,
  `con_name` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_query` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`con_id`, `con_name`, `con_email`, `con_query`) VALUES
(8784, 'erwe', 'jhgj@gmail.com', 'jgdueguwehu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
