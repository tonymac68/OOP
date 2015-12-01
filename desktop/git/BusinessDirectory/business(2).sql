-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 04:55 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_data`
--

CREATE TABLE IF NOT EXISTS `business_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `address_no` int(5) NOT NULL,
  `address_road` varchar(255) NOT NULL,
  `address_pc` varchar(6) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `business_no` int(15) NOT NULL,
  `website` varchar(40) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file` blob NOT NULL,
  `prem` varchar(255) NOT NULL,
  `stand` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `business_data`
--

INSERT INTO `business_data` (`id`, `user_id`, `bus_name`, `address_no`, `address_road`, `address_pc`, `contact_no`, `business_no`, `website`, `description`, `file`, `prem`, `stand`) VALUES
(33, 33, 'Barry''s Skips', 95, 'Wellington Road', 'ky5 4p', 75856253, 159266532, 'www.paintsus.co.uk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', 0x76616c75652d3130, '1', '0'),
(35, 35, 'Claire,s hairdresses', 5, 'High street', 'PH12 5', 75856253, 1859256352, 'www.clairesHair.co.uk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', '', '1', ''),
(36, 36, 'Sams Shack', 32, 'Peploe Drive', 'L11 4P', 758213565, 151236569, 'www.samshack.co.uk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', '', '0', '0'),
(38, 38, 'S P K Building & Landscaping', 66, 'Glencairn Drive', 'G414PR', 141, 141, 'http://www.spkbuildscapes.com/', 'My name is Simon Kelly and I run an established small family business covering all aspects of building, landscaping, and ground works. \r\n\r\nFrom the age of 16, I learned my trade working with my father in the Midlands. In 2003, I moved to Glasgow to s', '', '1', '2'),
(39, 39, 'Bathroom services', 12, 'Miller Street', 'PL15 6', 1525215221, 1859256352, 'http://www.spkbuildscapes.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{"admin": 1}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `groups` int(11) NOT NULL,
  `joined` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `groups`, `joined`) VALUES
(1, 'Admin', '9e861941ad8bf5bcb649e5fde92d712528200a216018c2437371498e6ab7683d', 'Admin_1', 2, '0000-00-00 00:00:00'),
(33, 'Anthony ', '4e6f316903cbf828454c7c41b3cfffdd1531c6827d716fdd33ea0ec1d24a4263', 'Anthony McMillan', 1, '0000-00-00 00:00:00'),
(34, 'tonymac68', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'Tony', 1, '0000-00-00 00:00:00'),
(35, 'Claire777', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'Claire Comerford', 1, '0000-00-00 00:00:00'),
(36, 'Samuel202', '9e861941ad8bf5bcb649e5fde92d712528200a216018c2437371498e6ab7683d', 'Samuel McMillan', 1, '0000-00-00 00:00:00'),
(38, 'Simon Kelly', '9e861941ad8bf5bcb649e5fde92d712528200a216018c2437371498e6ab7683d', 'Simon Kelly', 1, '0000-00-00 00:00:00'),
(39, 'Bethany23', '9e861941ad8bf5bcb649e5fde92d712528200a216018c2437371498e6ab7683d', 'Bethany McMillan', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE IF NOT EXISTS `users_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
