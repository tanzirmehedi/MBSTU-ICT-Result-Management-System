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
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `auto_id` int(20) NOT NULL AUTO_INCREMENT,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teacherkey` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`auto_id`, `year`, `semester`, `creationdate`, `teacherkey`) VALUES
(1, '1st', '1st', '2018-06-02 15:16:29', ''),
(2, '1st', '2nd', '2018-06-01 18:26:20', ''),
(3, '2nd', '1st', '2018-06-01 09:58:57', ''),
(4, '2nd', '2nd', '2018-06-01 09:58:52', ''),
(5, '3rd', '1st', '2018-06-01 09:59:00', ''),
(6, '3rd', '2nd', '2018-06-01 16:23:19', ''),
(7, '4th', '1st', '2018-06-01 09:59:05', ''),
(8, '4th', '2nd', '2018-06-01 09:59:07', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
