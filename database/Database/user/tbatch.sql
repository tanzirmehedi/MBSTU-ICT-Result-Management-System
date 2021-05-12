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
-- Table structure for table `tbatch`
--

CREATE TABLE IF NOT EXISTS `tbatch` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(100) NOT NULL,
  `batchno` varchar(20) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_name` varchar(100) NOT NULL,
  `year` varchar(20) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tbatch`
--

INSERT INTO `tbatch` (`auto_id`, `session`, `batchno`, `exam`, `Creationdate`, `UpdationDate`, `user_name`, `year`, `semester`) VALUES
(44, '2013-2014', '11 th Batch', 'Undergraduate', '2018-05-31 16:42:01', '2018-06-02 15:16:29', '', '', ''),
(45, '2014-2015', '12 th Batch', 'Undergraduate', '2018-06-01 07:54:08', '2018-06-01 16:50:11', '', '', ''),
(46, '2015-2016', '13 th Batch', 'Undergraduate', '2018-06-01 07:54:21', '2018-06-01 09:58:18', '', '', ''),
(47, '2016-2017', '14 th Batch', 'Undergraduate', '2018-06-01 07:54:50', '0000-00-00 00:00:00', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
