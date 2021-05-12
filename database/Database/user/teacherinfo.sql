-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 05:26 PM
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
-- Table structure for table `teacherinfo`
--

CREATE TABLE IF NOT EXISTS `teacherinfo` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `teachername` varchar(80) DEFAULT NULL,
  `designation` varchar(40) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `teacherusername` varchar(100) NOT NULL,
  `teacherpassword` varchar(250) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`auto_id`, `teachername`, `designation`, `organization`, `status`, `phonenumber`, `email`, `CreationDate`, `UpdationDate`, `teacherusername`, `teacherpassword`) VALUES
(1, 'SK. Tanzir Mehedi Shawon', 'B. Sc Engineering', 'MBSTU, ICT', 'admin', '01521447020', 'tanzirmehedi.ict@gmail.com', '2018-05-28 16:52:33', '2018-06-02 13:36:52', 'shawon', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
