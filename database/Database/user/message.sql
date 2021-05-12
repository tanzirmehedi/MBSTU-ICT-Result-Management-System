-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 05:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ictresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `auto_id` int(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `des` longtext,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`creationdate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`auto_id`, `status`, `name`, `email`, `des`, `creationdate`) VALUES
(1, 'admin', 'Sk. tanzir Mehedi Shawon', 'tanzirmehedi.ict@gmail.com', 'fvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsvfvgsdbylsbdjhsdvbsjhvsv', '2018-06-01 08:40:23'),
(2, 'teacher', 'Shawon', 'tanzirmehedi.ict@gmail.com', 'fbvjsyjs,', '2018-06-01 08:54:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
