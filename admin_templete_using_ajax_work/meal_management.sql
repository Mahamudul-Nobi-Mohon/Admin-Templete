-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 01:43 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meal_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_members`
--

CREATE TABLE IF NOT EXISTS `add_members` (
`id` int(11) NOT NULL,
  `member_name` varchar(80) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mass_name` varchar(80) NOT NULL,
  `date` int(11) NOT NULL,
  `status` varchar(2) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `add_members`
--

INSERT INTO `add_members` (`id`, `member_name`, `picture`, `email`, `password`, `mass_name`, `date`, `status`, `admin_id`) VALUES
(1, 'shifat', '', 'shifat@yahoo.com', '', 'mizan', 2147483647, '0', 1),
(2, 'shihab', '', 'shihab@yahooq.com', '', 'mizan', 2147483647, '1', 1),
(3, 'sumon 2', '', 'sumon@yahoo.com', '', 'mizan', 2147483647, '1', 1),
(4, 'ishan', 'k.jpg', 'ishan@gmail.com', '', 'harun', 2147483647, '1', 1),
(5, 'karim', 'karim.jpg', 'karim@yahoo.com', '', 'mohon', 2147483647, '1', 1),
(6, 'mojahar', 'fbInjection.jpg', 'mojahar@yahoo.com', '', 'io', 2147483647, '1', 1),
(7, 'mohon', '21569573c34b4bd34711949400_975165929208148_1293990032501475478_n.jpg', 'mn.mohonwdf@gmail.com', '12345', '', 0, '1', 1),
(8, 'shojib', '4807573c3674d1add11918934_974855695905838_8679700854877942884_n.jpg', 'sho@gmail.com', '12345', '', 0, '1', 1),
(9, 'hjkiyyyy', '30308573c3dab2fa0611951837_977186872339387_7646867192719337084_n.jpg', 'mn.mohondfqq@gmail.com', '12345', '', 0, '1', 1),
(10, 'hasan', '20724573c70d6dbd6211911347_975164942541580_2592802436252531396_n.jpg', 'hasan@yahoo.com', '13457', '', 0, '1', 1),
(11, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(12, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(13, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(14, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(15, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(16, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(17, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(18, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(19, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(20, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(21, 'shifat', '', 'shifat@gmail.com', '', 'mizan', 2147483647, '1', 1),
(22, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(23, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(24, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(25, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(26, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(27, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(28, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(29, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(30, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(31, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(32, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(33, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(34, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(35, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(36, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(37, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(38, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1),
(39, 'shifat', '', '', '', 'mizan', 2147483647, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `input_meals`
--

CREATE TABLE IF NOT EXISTS `input_meals` (
`id` int(11) NOT NULL,
  `member_name` varchar(80) NOT NULL,
  `daily_meal` float NOT NULL,
  `bazar_tk` float NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `input_meals`
--

INSERT INTO `input_meals` (`id`, `member_name`, `daily_meal`, `bazar_tk`, `picture`, `date`, `status`) VALUES
(1, 'sumon', 2, 1000, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '1'),
(2, 'shihab', 3, 1000, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '1'),
(3, 'shifat', 6, 3000, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '1'),
(4, 'hera', 2.5, 0, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '1'),
(5, 'hiron', 3.5, 0, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '0'),
(6, 'i', 7, 7, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '0'),
(7, 'imazul', 6, 7000, '105457349d13ad4f9sample-img-1.jpg', 2147483647, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`, `status`, `date`) VALUES
(28, 'harun', 'harun@gmail.com', '43c26f4be30bfcdeb5d7587b93a33e59ec559d7a', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(27, 'ismail', 'ismail@gmail.com', '28eaee99174ceb018a31a090371aa05210ca41d2', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(1, 'mohon', 'mn.mohon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(26, 'mohon3', 'ag@a.com', '0a28cb7ca924dd6d98244aee82bcbed617990170', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(30, 'niloy', 'niloy@yahoo.com', '6aaf556f1ed11ff1fd0298e79e7a2fb3d0de8913', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(29, 'r', 'rRt@r.com', '7bbbac781189e58b254def8410ed69cf5d8b4b14', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647),
(31, 'shopon', 'shopon@yahoo.com', '519f6c70cc478e43613f69bfa46b641bc07fd923', 'Mohon_Photo_For_CV2.jpg', '1', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_members`
--
ALTER TABLE `add_members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_meals`
--
ALTER TABLE `input_meals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_members`
--
ALTER TABLE `add_members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `input_meals`
--
ALTER TABLE `input_meals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
