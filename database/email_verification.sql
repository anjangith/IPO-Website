-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2019 at 08:20 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_verification`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'tejaadmin', 'tejaadmin');

-- --------------------------------------------------------

--
-- Table structure for table `registered_members`
--

DROP TABLE IF EXISTS `registered_members`;
CREATE TABLE IF NOT EXISTS `registered_members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `country` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_members`
--

INSERT INTO `registered_members` (`id`, `name`, `email`, `password`, `country`) VALUES
(8, 'Anjan Saikia', 'kimsaikia66@gmail.com', 'mypassword', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `temp_members_db`
--

DROP TABLE IF EXISTS `temp_members_db`;
CREATE TABLE IF NOT EXISTS `temp_members_db` (
  `confirm_code` varchar(65) NOT NULL DEFAULT '',
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  `country` varchar(65) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_members_db`
--

INSERT INTO `temp_members_db` (`confirm_code`, `name`, `email`, `password`, `country`) VALUES
('55a7fd7ff8736b57bd85ed0b2b63e723', 'Rahul Chetri', 'saikia.anjan@yahoo.com', 'anjananjan', 'India'),
('7acac2ef3e1ace28f76bbc71fd990687', ' test', 'admin@gmail.com', 'admin@gmail.com', 'India');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
