-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 03:15 PM
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
-- Table structure for table `ct`
--

CREATE TABLE IF NOT EXISTS `ct` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `ct1` varchar(20) DEFAULT NULL,
  `ct2` varchar(20) DEFAULT NULL,
  `ct3` varchar(20) DEFAULT NULL,
  `ct4` varchar(20) DEFAULT NULL,
  `id` varchar(20) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `code` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `yearsem` varchar(10) NOT NULL,
  `publish` varchar(20) DEFAULT NULL,
  `pct1` varchar(20) NOT NULL,
  `pct2` varchar(20) NOT NULL,
  `pct3` varchar(20) NOT NULL,
  `pct4` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ctregistration`
--

CREATE TABLE IF NOT EXISTS `ctregistration` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `session` varchar(20) NOT NULL,
  `coursecode` varchar(20) NOT NULL,
  `yearsem` varchar(10) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `finish`
--

CREATE TABLE IF NOT EXISTS `finish` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `auto_id` int(100) NOT NULL AUTO_INCREMENT,
  `address` char(16) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=181 ;

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
(1, '1st', '1st', '2018-07-25 13:12:53', ''),
(2, '1st', '2nd', '2018-06-05 14:21:49', ''),
(3, '2nd', '1st', '2018-06-01 09:58:57', ''),
(4, '2nd', '2nd', '2018-06-01 09:58:52', ''),
(5, '3rd', '1st', '2018-06-17 08:13:02', ''),
(6, '3rd', '2nd', '2018-06-01 16:23:19', ''),
(7, '4th', '1st', '2018-06-01 09:59:05', ''),
(8, '4th', '2nd', '2018-06-01 09:59:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `student131411`
--

CREATE TABLE IF NOT EXISTS `student131411` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131411`
--

INSERT INTO `student131411` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1101', 'Basic Electrical Circuit', '3.00', '2018-06-02 06:19:04', '11'),
(2, 'ICT-1102', 'Basic Electrical Circuit Lab', '1.00', '2018-06-02 06:19:08', '11'),
(3, 'ICT-1103', 'Computer Programming', '3.00', '2018-06-02 06:19:11', '11'),
(4, 'ICT-1104', 'Computer Programming Lab', '1.00', '2018-06-02 06:19:15', '11'),
(5, 'ICT-1105', 'Discrete Mathematics', '3.00', '2018-06-02 06:19:18', '11'),
(6, 'ICT-1107', 'Differential and Integral Calculus', '3.00', '2018-06-02 06:19:21', '11'),
(7, 'ICT-1109', 'Technical English', '2.00', '2018-06-02 06:19:24', '11'),
(8, 'ICT-1110', 'Technical English Lab', '1.00', '2018-06-02 06:19:27', '11'),
(9, 'ICT-1112', 'Engineering Drawing', '1.00', '2018-06-02 06:19:30', '11'),
(10, 'ICT-1113', 'Technology, Environment and Society', '2.00', '2018-06-02 06:19:34', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student131411gp`
--

CREATE TABLE IF NOT EXISTS `student131411gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1101` varchar(10) NOT NULL,
  `ICT_1102` varchar(10) NOT NULL,
  `ICT_1103` varchar(10) NOT NULL,
  `ICT_1104` varchar(10) NOT NULL,
  `ICT_1105` varchar(10) NOT NULL,
  `ICT_1107` varchar(10) NOT NULL,
  `ICT_1109` varchar(10) NOT NULL,
  `ICT_1110` varchar(10) NOT NULL,
  `ICT_1112` varchar(10) NOT NULL,
  `ICT_1113` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131412`
--

CREATE TABLE IF NOT EXISTS `student131412` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131412`
--

INSERT INTO `student131412` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1201', 'Electronics-I', '3.00', '2018-06-02 06:20:43', '12'),
(2, 'ICT-1202', 'Electronics-I Lab', '1.00', '2018-06-02 06:20:51', '12'),
(3, 'ICT-1203', 'Object Oriented Programming', '3.00', '2018-06-02 06:20:56', '12'),
(4, 'ICT-1204', 'Object Oriented Programming Lab', '1.00', '2018-06-02 06:21:00', '12'),
(5, 'ICT-1207', 'Geometry and Linear Algebra', '3.00', '2018-06-02 06:21:04', '12'),
(6, 'ICT-1209', 'Data Structure', '3.00', '2018-06-02 06:21:07', '12'),
(7, 'ICT-1210', 'Data Structure Lab', '1.00', '2018-06-02 06:21:11', '12'),
(8, 'ICT-1211', 'Physics', '3.00', '2018-06-02 06:21:14', '12'),
(9, 'ICT-1213', 'Chemistry', '2.00', '2018-06-02 06:21:19', '12'),
(10, 'ICT-1215', 'Bhashani Studies', '0.00', '2018-06-02 06:21:21', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student131412gp`
--

CREATE TABLE IF NOT EXISTS `student131412gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1201` varchar(10) NOT NULL,
  `ICT_1202` varchar(10) NOT NULL,
  `ICT_1203` varchar(10) NOT NULL,
  `ICT_1204` varchar(10) NOT NULL,
  `ICT_1207` varchar(10) NOT NULL,
  `ICT_1209` varchar(10) NOT NULL,
  `ICT_1210` varchar(10) NOT NULL,
  `ICT_1211` varchar(10) NOT NULL,
  `ICT_1213` varchar(10) NOT NULL,
  `ICT_1215` varchar(20) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131421`
--

CREATE TABLE IF NOT EXISTS `student131421` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131421`
--

INSERT INTO `student131421` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2101', 'Electronics-II', '3.00', '2018-06-02 06:24:38', '21'),
(2, 'ICT-2102', 'Electronics-II Lab', '1.00', '2018-06-02 06:24:45', '21'),
(3, 'ICT-2103', 'Programming  with Java', '2.00', '2018-06-02 06:24:48', '21'),
(4, 'ICT-2104', 'Programming  with Java Lab', '1.00', '2018-06-02 06:24:51', '21'),
(5, 'ICT-2105', 'Algorithm Design and Analysis', '3.00', '2018-06-02 06:24:55', '21'),
(6, 'ICT-2106', 'Algorithm Design and Analysis Lab', '1.00', '2018-06-02 06:24:58', '21'),
(7, 'ICT-2107', 'Digital Logic Design', '3.00', '2018-06-02 06:25:02', '21'),
(8, 'ICT-2108', 'Digital Logic Design Lab', '1.00', '2018-06-02 06:25:07', '21'),
(9, 'ICT-2109', 'Differential Equation and Vector Calculus', '3.00', '2018-06-02 06:25:10', '21'),
(10, 'ICT-2111', 'Financial and Managerial Accounting', '3.00', '2018-06-02 06:25:14', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student131421gp`
--

CREATE TABLE IF NOT EXISTS `student131421gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2101` varchar(10) NOT NULL,
  `ICT_2102` varchar(10) NOT NULL,
  `ICT_2103` varchar(10) NOT NULL,
  `ICT_2104` varchar(10) NOT NULL,
  `ICT_2105` varchar(10) NOT NULL,
  `ICT_2106` varchar(10) NOT NULL,
  `ICT_2107` varchar(10) NOT NULL,
  `ICT_2108` varchar(10) NOT NULL,
  `ICT_2109` varchar(10) NOT NULL,
  `ICT_2111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131422`
--

CREATE TABLE IF NOT EXISTS `student131422` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131422`
--

INSERT INTO `student131422` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2201', 'Electromagnetic Fields and Waves', '2.00', '2018-06-02 06:26:46', '22'),
(2, 'ICT-2203', 'Advanced Java', '3.00', '2018-06-02 06:26:51', '22'),
(3, 'ICT-2204', 'Advanced Java Lab', '1.00', '2018-06-02 06:26:55', '22'),
(4, 'ICT-2205', 'Relational Database Management Systems', '3.00', '2018-06-02 06:27:01', '22'),
(5, 'ICT-2206', 'Relational Database Management Systems Lab', '1.00', '2018-06-02 06:27:05', '22'),
(6, 'ICT-2207', 'Computer Organization and  Architecture', '3.00', '2018-06-02 06:27:09', '22'),
(7, 'ICT-2209', 'Complex Variables and Fourier Analysis', '3.00', '2018-06-02 06:27:13', '22'),
(8, 'ICT-2211', 'Statistics', '2.00', '2018-06-02 06:27:29', '22'),
(9, 'ICT-2212', 'Statistics Lab', '1.00', '2018-06-02 06:27:32', '22'),
(10, 'ICT-2213', 'Economics', '2.00', '2018-06-02 06:27:36', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student131422gp`
--

CREATE TABLE IF NOT EXISTS `student131422gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2201` varchar(10) NOT NULL,
  `ICT_2203` varchar(10) NOT NULL,
  `ICT_2204` varchar(10) NOT NULL,
  `ICT_2205` varchar(10) NOT NULL,
  `ICT_2206` varchar(10) NOT NULL,
  `ICT_2207` varchar(10) NOT NULL,
  `ICT_2209` varchar(10) NOT NULL,
  `ICT_2211` varchar(10) NOT NULL,
  `ICT_2212` varchar(10) NOT NULL,
  `ICT_2213` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131431`
--

CREATE TABLE IF NOT EXISTS `student131431` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student131431`
--

INSERT INTO `student131431` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3101', 'Analog Communication', '3.00', '2018-06-02 06:33:16', '31'),
(2, 'ICT-3102', 'Analog Communication Lab', '1.00', '2018-06-02 06:33:21', '31'),
(3, 'ICT-3103', 'Data Communication', '3.00', '2018-06-02 06:33:35', '31'),
(4, 'ICT-3105', 'Microprocessor and Assembly Language', '3.00', '2018-06-02 06:33:40', '31'),
(5, 'ICT-3106', 'Microprocessor and Assembly Language Lab', '1.00', '2018-06-02 06:33:45', '31'),
(6, 'ICT-3107', 'Distributed Database Management System', '2.00', '2018-06-02 06:33:49', '31'),
(7, 'ICT-3108', 'Distributed Database Management S. Lab', '1.00', '2018-06-04 20:49:49', '31'),
(8, 'ICT-3109', 'System Analysis and Design', '3.00', '2018-06-02 06:33:58', '31'),
(9, 'ICT-3111', 'Numerical Methods', '3.00', '2018-06-02 06:34:01', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student131431gp`
--

CREATE TABLE IF NOT EXISTS `student131431gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3101` varchar(10) NOT NULL,
  `ICT_3102` varchar(10) NOT NULL,
  `ICT_3103` varchar(10) NOT NULL,
  `ICT_3105` varchar(10) NOT NULL,
  `ICT_3106` varchar(10) NOT NULL,
  `ICT_3107` varchar(10) NOT NULL,
  `ICT_3108` varchar(10) NOT NULL,
  `ICT_3109` varchar(10) NOT NULL,
  `ICT_3111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131432`
--

CREATE TABLE IF NOT EXISTS `student131432` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131432`
--

INSERT INTO `student131432` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Engineering', '3.00', '2018-06-02 06:35:39', '32'),
(2, 'ICT-3202', 'Microwave Engineering Lab', '1.00', '2018-06-02 06:35:43', '32'),
(3, 'ICT-3203', 'Peripheral Interfacing and E. System', '3.00', '2018-06-05 10:39:38', '32'),
(4, 'ICT-3204', 'Peripheral Interfacing and Embedded S.Lab', '1.00', '2018-06-02 06:35:51', '32'),
(5, 'ICT-3205', 'Computer Network', '3.00', '2018-06-02 06:35:56', '32'),
(6, 'ICT-3206', 'Network Planning and Designing Lab', '1.00', '2018-06-02 06:36:01', '32'),
(7, 'ICT-3207', 'Signals and Systems', '3.00', '2018-06-02 06:36:05', '32'),
(8, 'ICT-3208', 'Signals and Systems Lab', '1.00', '2018-06-02 06:36:12', '32'),
(9, 'ICT-3209', 'Operating System', '3.00', '2018-06-02 06:36:15', '32'),
(10, 'ICT-3210', 'Operating System Lab', '1.00', '2018-06-02 06:36:19', '32');

-- --------------------------------------------------------

--
-- Table structure for table `student131432gp`
--

CREATE TABLE IF NOT EXISTS `student131432gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3201` varchar(10) NOT NULL,
  `ICT_3202` varchar(10) NOT NULL,
  `ICT_3203` varchar(10) NOT NULL,
  `ICT_3204` varchar(10) NOT NULL,
  `ICT_3205` varchar(10) NOT NULL,
  `ICT_3206` varchar(10) NOT NULL,
  `ICT_3207` varchar(10) NOT NULL,
  `ICT_3208` varchar(10) NOT NULL,
  `ICT_3209` varchar(10) NOT NULL,
  `ICT_3210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131441`
--

CREATE TABLE IF NOT EXISTS `student131441` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student131441`
--

INSERT INTO `student131441` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4101', 'Software Engineering', '3.00', '2018-06-02 06:39:04', '41'),
(2, 'ICT-4102', 'Software Engineering Lab', '1.00', '2018-06-02 06:39:09', '41'),
(3, 'ICT-4103', 'Artificial Intelligence', '3.00', '2018-06-02 06:39:12', '41'),
(4, 'ICT-4104', 'Artificial Intelligence Lab', '1.00', '2018-06-02 06:39:17', '41'),
(5, 'ICT-4105', 'Digital Signal Processing', '3.00', '2018-06-02 06:39:32', '41'),
(6, 'ICT-4106', 'Digital Signal Processing Lab', '1.00', '2018-06-02 06:39:41', '41'),
(7, 'ICT-4107', 'Network Security and Cyber Law', '3.00', '2018-06-02 06:39:50', '41'),
(8, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 06:39:57', '41'),
(9, 'ICT-4109', 'Internet and Web Programming', '3.00', '2018-06-02 06:40:03', '41'),
(10, 'ICT-4110', 'Internet and Web Programming Lab', '1.00', '2018-06-02 06:40:10', '41');

-- --------------------------------------------------------

--
-- Table structure for table `student131441gp`
--

CREATE TABLE IF NOT EXISTS `student131441gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4101` varchar(10) NOT NULL,
  `ICT_4102` varchar(10) NOT NULL,
  `ICT_4103` varchar(10) NOT NULL,
  `ICT_4104` varchar(10) NOT NULL,
  `ICT_4105` varchar(10) NOT NULL,
  `ICT_4106` varchar(10) NOT NULL,
  `ICT_4107` varchar(10) NOT NULL,
  `ICT_4000` varchar(20) NOT NULL,
  `ICT_4109` varchar(10) NOT NULL,
  `ICT_4110` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student131442`
--

CREATE TABLE IF NOT EXISTS `student131442` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student131442`
--

INSERT INTO `student131442` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4201', 'Wireless and Mobile Communication', '3.00', '2018-06-02 06:41:23', '42'),
(2, 'ICT-4202', 'Wireless and Mobile Communication Lab', '1.00', '2018-06-02 06:41:28', '42'),
(3, 'ICT-4203', 'Optical Communication', '3.00', '2018-06-02 06:41:32', '42'),
(4, 'ICT-4204', 'Optical Communication Lab', '1.00', '2018-06-02 06:41:36', '42'),
(5, 'ICT-4205', 'Simulation and Modeling', '3.00', '2018-06-02 06:41:40', '42'),
(6, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 06:41:45', '42'),
(7, 'ICT-4207', 'Digital Image Processing', '3.00', '2018-06-02 06:41:48', '42'),
(8, 'ICT-4208', 'Digital Image Processing Lab', '1.00', '2018-06-02 06:41:52', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student131442gp`
--

CREATE TABLE IF NOT EXISTS `student131442gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4201` varchar(10) NOT NULL,
  `ICT_4202` varchar(10) NOT NULL,
  `ICT_4203` varchar(10) NOT NULL,
  `ICT_4204` varchar(10) NOT NULL,
  `ICT_4205` varchar(10) NOT NULL,
  `ICT_4000` varchar(20) NOT NULL,
  `ICT_4207` varchar(10) NOT NULL,
  `ICT_4208` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141511`
--

CREATE TABLE IF NOT EXISTS `student141511` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141511`
--

INSERT INTO `student141511` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1101', 'Basic Electrical Circuit', '3.00', '2018-06-02 07:26:00', '11'),
(2, 'ICT-1102', 'Basic Electrical Circuit Lab', '1.00', '2018-06-02 07:26:04', '11'),
(3, 'ICT-1103', 'Computer Programming', '3.00', '2018-06-02 07:26:08', '11'),
(4, 'ICT-1104', 'Computer Programming Lab', '1.00', '2018-06-02 07:26:11', '11'),
(5, 'ICT-1105', 'Physics', '3.00', '2018-06-02 07:26:14', '11'),
(6, 'ICT-1107', 'Differential and Integral Calculus', '3.00', '2018-06-02 07:26:18', '11'),
(7, 'ICT-1109', 'Technical Communicative English', '2.00', '2018-06-02 07:26:21', '11'),
(8, 'ICT-1110', 'Technical Communicative English Lab', '1.00', '2018-06-02 07:26:25', '11'),
(9, 'ICT-1111', 'Technology, Environment and Society', '2.00', '2018-06-02 07:26:28', '11'),
(10, 'ICT-1114', 'Introduction to Information Technology Lab', '1.00', '2018-06-02 07:26:31', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student141511gp`
--

CREATE TABLE IF NOT EXISTS `student141511gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1101` varchar(10) NOT NULL,
  `ICT_1102` varchar(10) NOT NULL,
  `ICT_1103` varchar(10) NOT NULL,
  `ICT_1104` varchar(10) NOT NULL,
  `ICT_1105` varchar(10) NOT NULL,
  `ICT_1107` varchar(10) NOT NULL,
  `ICT_1109` varchar(10) NOT NULL,
  `ICT_1110` varchar(10) NOT NULL,
  `ICT_1111` varchar(10) NOT NULL,
  `ICT_1114` varchar(255) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141512`
--

CREATE TABLE IF NOT EXISTS `student141512` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141512`
--

INSERT INTO `student141512` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1201', 'Electronic Devices and Circuit Theory', '3.00', '2018-06-02 07:29:49', '12'),
(2, 'ICT-1202', 'Electronic Devices and Circuit Theory Lab', '1.00', '2018-06-02 07:30:02', '12'),
(3, 'ICT-1203', 'Programming with c++', '3.00', '2018-06-02 07:30:06', '12'),
(4, 'ICT-1204', 'Programming with c++ Lab', '1.00', '2018-06-02 07:30:09', '12'),
(5, 'ICT-1205', 'Data Structure', '3.00', '2018-06-02 07:30:13', '12'),
(6, 'ICT-1206', 'Data Structure Lab', '1.00', '2018-06-02 07:30:17', '12'),
(7, 'ICT-1207', 'Discrete Mathematics', '3.00', '2018-06-02 07:30:20', '12'),
(8, 'ICT-1209', 'Geometry and Linear Algebra', '3.00', '2018-06-02 07:30:23', '12'),
(9, 'ICT-1210', 'Project', '1.00', '2018-06-02 07:30:26', '12'),
(10, 'ICT-1211', 'Bhashani Studies ', '0.00', '2018-06-02 07:30:30', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student141512gp`
--

CREATE TABLE IF NOT EXISTS `student141512gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1201` varchar(10) NOT NULL,
  `ICT_1202` varchar(10) NOT NULL,
  `ICT_1203` varchar(10) NOT NULL,
  `ICT_1204` varchar(10) NOT NULL,
  `ICT_1205` varchar(255) NOT NULL,
  `ICT_1206` varchar(255) NOT NULL,
  `ICT_1207` varchar(10) NOT NULL,
  `ICT_1209` varchar(10) NOT NULL,
  `ICT_1210` varchar(10) NOT NULL,
  `ICT_1211` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141521`
--

CREATE TABLE IF NOT EXISTS `student141521` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141521`
--

INSERT INTO `student141521` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2101', 'Operational Amplifier and Timer Circuits', '3.00', '2018-06-02 07:47:27', '21'),
(2, 'ICT-2102', 'Operational Amplifier and Timer Circuits Lab', '1.00', '2018-06-02 07:47:31', '21'),
(3, 'ICT-2103', 'Digital Logic Design', '3.00', '2018-06-02 07:47:34', '21'),
(4, 'ICT-2104', 'Digital Logic Design Lab', '1.00', '2018-06-02 07:47:37', '21'),
(5, 'ICT-2105', 'Object Oriented Programming with Java', '3.00', '2018-06-02 07:47:41', '21'),
(6, 'ICT-2106', 'Object Oriented Programming with Java Lab', '1.00', '2018-06-02 07:47:46', '21'),
(7, 'ICT-2107', 'Algorithm Design and Analysis', '3.00', '2018-06-02 07:47:49', '21'),
(8, 'ICT-2108', 'Algorithm Design and Analysis Lab', '1.00', '2018-06-02 07:47:53', '21'),
(9, 'ICT-2109', 'Differential Equation and Vector Calculus', '3.00', '2018-06-02 07:47:56', '21'),
(10, 'ICT-2111', 'Economics', '2.00', '2018-06-02 07:48:00', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student141521gp`
--

CREATE TABLE IF NOT EXISTS `student141521gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2101` varchar(10) NOT NULL,
  `ICT_2102` varchar(10) NOT NULL,
  `ICT_2103` varchar(10) NOT NULL,
  `ICT_2104` varchar(10) NOT NULL,
  `ICT_2105` varchar(10) NOT NULL,
  `ICT_2106` varchar(10) NOT NULL,
  `ICT_2107` varchar(10) NOT NULL,
  `ICT_2108` varchar(10) NOT NULL,
  `ICT_2109` varchar(10) NOT NULL,
  `ICT_2111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141522`
--

CREATE TABLE IF NOT EXISTS `student141522` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141522`
--

INSERT INTO `student141522` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2201', 'Signals and Systems', '3.00', '2018-06-02 07:49:55', '22'),
(2, 'ICT-2202', 'Signals and Systems Lab', '1.00', '2018-06-02 07:49:59', '22'),
(3, 'ICT-2203', 'Numerical Methods', '3.00', '2018-06-02 07:50:03', '22'),
(4, 'ICT-2204', 'Numerical Methods Lab', '1.00', '2018-06-02 07:50:06', '22'),
(5, 'ICT-2205', 'Advanced Java and Mobile Application', '2.00', '2018-06-02 07:50:11', '22'),
(6, 'ICT-2206', 'Advanced Java and Mobile Application Lab', '1.00', '2018-06-02 07:50:18', '22'),
(7, 'ICT-2207', 'Database Management Systems', '3.00', '2018-06-02 07:50:26', '22'),
(8, 'ICT-2208', 'Database Management Systems Lab', '1.00', '2018-06-02 07:50:30', '22'),
(9, 'ICT-2209', 'Complex Variables and Fourier Analysis', '3.00', '2018-06-02 07:50:34', '22'),
(10, 'ICT-2211', 'Statistics', '2.00', '2018-06-02 07:50:40', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student141522gp`
--

CREATE TABLE IF NOT EXISTS `student141522gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2201` varchar(10) NOT NULL,
  `ICT_2202` varchar(255) NOT NULL,
  `ICT_2203` varchar(10) NOT NULL,
  `ICT_2204` varchar(10) NOT NULL,
  `ICT_2205` varchar(10) NOT NULL,
  `ICT_2206` varchar(10) NOT NULL,
  `ICT_2207` varchar(10) NOT NULL,
  `ICT_2208` varchar(255) NOT NULL,
  `ICT_2209` varchar(10) NOT NULL,
  `ICT_2211` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141531`
--

CREATE TABLE IF NOT EXISTS `student141531` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student141531`
--

INSERT INTO `student141531` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3101', 'Electromagnetic Fields and Waves', '3.00', '2018-06-02 07:52:42', '31'),
(2, 'ICT-3103', 'Analog Communication', '3.00', '2018-06-02 07:52:46', '31'),
(3, 'ICT-3104', 'Analog Communication Lab', '1.00', '2018-06-02 07:52:50', '31'),
(4, 'ICT-3105', 'Microprocessor and Assembly Language', '3.00', '2018-06-02 07:52:53', '31'),
(5, 'ICT-3106', 'Microprocessor and Assembly Language Lab', '1.00', '2018-06-02 07:52:56', '31'),
(6, 'ICT-3107', 'Computer Organization and Architecture', '3.00', '2018-06-02 07:53:08', '31'),
(7, 'ICT-3109', 'Operating Systems', '3.00', '2018-06-02 07:53:15', '31'),
(8, 'ICT-3110', 'Operating Systems Lab', '1.00', '2018-06-02 07:53:22', '31'),
(9, 'ICT-3111', 'Financial and Managerial Accounting', '2.00', '2018-06-02 07:53:26', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student141531gp`
--

CREATE TABLE IF NOT EXISTS `student141531gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3101` varchar(10) NOT NULL,
  `ICT_3103` varchar(10) NOT NULL,
  `ICT_3104` varchar(10) NOT NULL,
  `ICT_3105` varchar(10) NOT NULL,
  `ICT_3106` varchar(10) NOT NULL,
  `ICT_3107` varchar(10) NOT NULL,
  `ICT_3109` varchar(10) NOT NULL,
  `ICT_3110` varchar(10) NOT NULL,
  `ICT_3111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141532`
--

CREATE TABLE IF NOT EXISTS `student141532` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141532`
--

INSERT INTO `student141532` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Communication and Radar', '3.00', '2018-06-02 07:59:01', '32'),
(2, 'ICT-3202', 'Microwave Communication and Radar Lab', '1.00', '2018-06-02 07:59:12', '32'),
(3, 'ICT-3203', 'Digital Communication', '3.00', '2018-06-02 07:59:16', '32'),
(4, 'ICT-3204', 'Digital Communication Lab', '1.00', '2018-06-02 07:59:19', '32'),
(5, 'ICT-3205', 'Computer Peripheral and Interfacing', '3.00', '2018-06-02 07:59:22', '32'),
(6, 'ICT-3206', 'Computer Peripheral and Interfacing Lab', '1.00', '2018-06-02 07:59:26', '32'),
(7, 'ICT-3207', 'Computer Networks', '3.00', '2018-06-02 07:59:29', '32'),
(8, 'ICT-3208', 'Network Planning and Designing Lab', '1.00', '2018-06-02 07:59:33', '32'),
(9, 'ICT-3209', 'Software Engineering ', '3.00', '2018-06-02 07:59:37', '32'),
(10, 'ICT-3210', 'Software Engineering Lab', '1.00', '2018-06-02 07:59:41', '32');

-- --------------------------------------------------------

--
-- Table structure for table `student141532gp`
--

CREATE TABLE IF NOT EXISTS `student141532gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3201` varchar(10) NOT NULL,
  `ICT_3202` varchar(10) NOT NULL,
  `ICT_3203` varchar(10) NOT NULL,
  `ICT_3204` varchar(10) NOT NULL,
  `ICT_3205` varchar(10) NOT NULL,
  `ICT_3206` varchar(10) NOT NULL,
  `ICT_3207` varchar(10) NOT NULL,
  `ICT_3208` varchar(10) NOT NULL,
  `ICT_3209` varchar(10) NOT NULL,
  `ICT_3210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141541`
--

CREATE TABLE IF NOT EXISTS `student141541` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student141541`
--

INSERT INTO `student141541` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:01:29', '41'),
(2, 'ICT-4101', 'Telecommunication Engineering ', '2.00', '2018-06-02 08:01:33', '41'),
(3, 'ICT-4103', 'Digital Signal Processing', '3.00', '2018-06-02 08:01:38', '41'),
(4, 'ICT-4104', 'Digital Signal Processing Lab', '1.00', '2018-06-02 08:01:43', '41'),
(5, 'ICT-4105', 'Network Security and Cyber Law', '3.00', '2018-06-02 08:01:46', '41'),
(6, 'ICT-4107', 'Internet and Web Programming', '3.00', '2018-06-02 08:01:53', '41'),
(7, 'ICT-4108', 'Internet and Web Programming Lab', '1.00', '2018-06-02 08:01:59', '41'),
(8, 'ICT-4110', 'Research Methodology', '1.00', '2018-06-02 08:02:04', '41'),
(9, 'ICT-4119', 'Artificial Intelligence', '3.00', '2018-06-02 08:02:10', '41'),
(10, 'ICT-4120', 'Artificial Intelligence Lab', '1.00', '2018-06-02 08:02:14', '41');

-- --------------------------------------------------------

--
-- Table structure for table `student141541gp`
--

CREATE TABLE IF NOT EXISTS `student141541gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4000` varchar(255) NOT NULL,
  `ICT_4101` varchar(10) NOT NULL,
  `ICT_4103` varchar(10) NOT NULL,
  `ICT_4104` varchar(10) NOT NULL,
  `ICT_4105` varchar(10) NOT NULL,
  `ICT_4107` varchar(10) NOT NULL,
  `ICT_4108` varchar(10) NOT NULL,
  `ICT_4110` varchar(10) NOT NULL,
  `ICT_4119` varchar(255) NOT NULL,
  `ICT_4120` varchar(255) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student141542`
--

CREATE TABLE IF NOT EXISTS `student141542` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student141542`
--

INSERT INTO `student141542` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:05:26', '42'),
(2, 'ICT-4201', 'Wireless and Mobile Communication', '3.00', '2018-06-02 08:05:33', '42'),
(3, 'ICT-4202', 'Wireless and Mobile Communication Lab', '1.00', '2018-06-02 08:06:06', '42'),
(4, 'ICT-4203', 'Optical Communication ', '3.00', '2018-06-02 08:06:12', '42'),
(5, 'ICT-4204', 'Optical Communication Lab', '1.00', '2018-06-02 08:06:19', '42'),
(6, 'ICT-4205', 'Simulation and Modeling', '3.00', '2018-06-02 08:06:25', '42'),
(7, 'ICT-4207', 'Data Mining', '3.00', '2018-06-02 08:06:29', '42'),
(8, 'ICT-4209', 'Digital Image Processing', '3.00', '2018-06-02 08:06:32', '42'),
(9, 'ICT-4210', 'Digital Image Processing Lab', '1.00', '2018-06-02 08:06:38', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student141542gp`
--

CREATE TABLE IF NOT EXISTS `student141542gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4000` varchar(10) NOT NULL,
  `ICT_4201` varchar(10) NOT NULL,
  `ICT_4202` varchar(10) NOT NULL,
  `ICT_4203` varchar(10) NOT NULL,
  `ICT_4204` varchar(10) NOT NULL,
  `ICT_4205` varchar(10) NOT NULL,
  `ICT_4207` varchar(10) NOT NULL,
  `ICT_4209` varchar(10) NOT NULL,
  `ICT_4210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151611`
--

CREATE TABLE IF NOT EXISTS `student151611` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151611`
--

INSERT INTO `student151611` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1101', 'Basic Electrical Circuit', '3.00', '2018-06-02 08:17:27', '11'),
(2, 'ICT-1102', 'Basic Electrical Circuit Lab', '1.00', '2018-06-02 08:17:31', '11'),
(3, 'ICT-1103', 'Computer Programming ', '3.00', '2018-06-02 08:17:35', '11'),
(4, 'ICT-1104', 'Computer Programming Lab', '1.00', '2018-06-02 08:17:38', '11'),
(5, 'ICT-1105', 'Physics ', '3.00', '2018-06-02 08:17:42', '11'),
(6, 'ICT-1107', 'Differential and Integral Calculus', '3.00', '2018-06-02 08:17:47', '11'),
(7, 'ICT-1109', 'Technical Communicative English', '2.00', '2018-06-02 08:17:51', '11'),
(8, 'ICT-1110', 'Technical Communicative English Lab', '1.00', '2018-06-02 08:17:54', '11'),
(9, 'ICT-1114', 'Introduction to Information Technology Lab', '1.00', '2018-06-02 08:17:57', '11'),
(10, 'ICT-1115', 'Legal Issues and Management for Engineers', '2.00', '2018-06-02 08:18:01', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student151611gp`
--

CREATE TABLE IF NOT EXISTS `student151611gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1101` varchar(10) NOT NULL,
  `ICT_1102` varchar(10) NOT NULL,
  `ICT_1103` varchar(10) NOT NULL,
  `ICT_1104` varchar(10) NOT NULL,
  `ICT_1105` varchar(10) NOT NULL,
  `ICT_1107` varchar(10) NOT NULL,
  `ICT_1109` varchar(10) NOT NULL,
  `ICT_1110` varchar(10) NOT NULL,
  `ICT_1114` varchar(10) NOT NULL,
  `ICT_1115` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151612`
--

CREATE TABLE IF NOT EXISTS `student151612` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151612`
--

INSERT INTO `student151612` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1201	', 'Electronic Devices and Circuit Theory', '3.00', '2018-06-02 08:20:55', '12'),
(2, 'ICT-1202', 'Electronic Devices and Circuit Theory Lab', '1.00', '2018-06-02 08:21:00', '12'),
(3, 'ICT-1203', 'Programming with C++', '3.00', '2018-06-02 08:21:03', '12'),
(4, 'ICT-1204', 'Programming with C++ Lab', '1.00', '2018-06-02 08:21:06', '12'),
(5, 'ICT-1205', 'Data Structure', '3.00', '2018-06-02 08:21:12', '12'),
(6, 'ICT-1206', 'Data Structure Lab', '1.00', '2018-06-02 08:21:15', '12'),
(7, 'ICT-1207', 'Discrete Mathematics', '3.00', '2018-06-02 08:21:24', '12'),
(8, 'ICT-1209', 'Geometry and Linear Algebra', '3.00', '2018-06-02 08:21:28', '12'),
(9, 'ICT-1210', 'Project', '1.00', '2018-06-02 08:21:33', '12'),
(10, 'ICT-1211', 'Bhashani Studies', '0.00', '2018-06-02 08:21:37', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student151612gp`
--

CREATE TABLE IF NOT EXISTS `student151612gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1201` varchar(10) NOT NULL,
  `ICT_1202` varchar(10) NOT NULL,
  `ICT_1203` varchar(10) NOT NULL,
  `ICT_1204` varchar(10) NOT NULL,
  `ICT_1205` varchar(10) NOT NULL,
  `ICT_1206` varchar(10) NOT NULL,
  `ICT_1207` varchar(10) NOT NULL,
  `ICT_1209` varchar(10) NOT NULL,
  `ICT_1210` varchar(10) NOT NULL,
  `ICT_1211` varchar(20) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151621`
--

CREATE TABLE IF NOT EXISTS `student151621` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151621`
--

INSERT INTO `student151621` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2101', 'Operational Amplifier and Timer Circuits', '3.00', '2018-06-02 08:24:00', '21'),
(2, 'ICT-2102', 'Operational Amplifier and Timer Circuits Lab', '1.00', '2018-06-02 08:24:04', '21'),
(3, 'ICT-2103', 'Digital Logic Design', '3.00', '2018-06-02 08:24:07', '21'),
(4, 'ICT-2104', 'Digital Logic Design Lab', '1.00', '2018-06-02 08:24:10', '21'),
(5, 'ICT-2105', 'Object Oriented Programming with Java', '3.00', '2018-06-02 08:24:15', '21'),
(6, 'ICT-2106', 'Object Oriented Programming with Java Lab', '1.00', '2018-06-02 08:24:18', '21'),
(7, 'ICT-2107', 'Algorithm Design and Analysis', '3.00', '2018-06-02 08:24:21', '21'),
(8, 'ICT-2108', 'Algorithm Design and Analysis Lab', '1.00', '2018-06-02 08:24:43', '21'),
(9, 'ICT-2109', 'Differential Equation and Vector Calculus', '3.00', '2018-06-02 08:24:46', '21'),
(10, 'ICT-2111', 'Economics', '2.00', '2018-06-02 08:24:49', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student151621gp`
--

CREATE TABLE IF NOT EXISTS `student151621gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2101` varchar(10) NOT NULL,
  `ICT_2102` varchar(10) NOT NULL,
  `ICT_2103` varchar(10) NOT NULL,
  `ICT_2104` varchar(10) NOT NULL,
  `ICT_2105` varchar(10) NOT NULL,
  `ICT_2106` varchar(10) NOT NULL,
  `ICT_2107` varchar(10) NOT NULL,
  `ICT_2108` varchar(10) NOT NULL,
  `ICT_2109` varchar(10) NOT NULL,
  `ICT_2111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151622`
--

CREATE TABLE IF NOT EXISTS `student151622` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151622`
--

INSERT INTO `student151622` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2201', 'Signals and Systems', '3.00', '2018-06-02 08:26:37', '22'),
(2, 'ICT-2202', 'Signals and Systems Lab', '1.00', '2018-06-02 08:26:43', '22'),
(3, 'ICT-2203', 'Numerical Methods', '3.00', '2018-06-02 08:26:48', '22'),
(4, 'ICT-2204', 'Numerical Methods Lab', '1.00', '2018-06-02 08:26:59', '22'),
(5, 'ICT-2205', 'Advanced Java and Mobile Application', '2.00', '2018-06-02 08:27:03', '22'),
(6, 'ICT-2206', 'Advanced Java and Mobile Application Lab', '1.00', '2018-06-02 08:27:09', '22'),
(7, 'ICT-2207', 'Database Management Systems', '3.00', '2018-06-02 08:27:15', '22'),
(8, 'ICT-2208', 'Database Management Systems Lab', '1.00', '2018-06-02 08:27:18', '22'),
(9, 'ICT-2209', 'Complex Variables and Fourier Analysis', '3.00', '2018-06-02 08:27:23', '22'),
(10, 'ICT-2211', 'Statistics', '2.00', '2018-06-02 08:27:27', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student151622gp`
--

CREATE TABLE IF NOT EXISTS `student151622gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2201` varchar(10) NOT NULL,
  `ICT_2202` varchar(10) NOT NULL,
  `ICT_2203` varchar(10) NOT NULL,
  `ICT_2204` varchar(10) NOT NULL,
  `ICT_2205` varchar(10) NOT NULL,
  `ICT_2206` varchar(10) NOT NULL,
  `ICT_2207` varchar(10) NOT NULL,
  `ICT_2208` varchar(10) NOT NULL,
  `ICT_2209` varchar(10) NOT NULL,
  `ICT_2211` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151631`
--

CREATE TABLE IF NOT EXISTS `student151631` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student151631`
--

INSERT INTO `student151631` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3101', 'Electromagnetic Fields and Waves', '3.00', '2018-06-02 08:28:47', '31'),
(2, 'ICT-3103', 'Analog Communication', '3.00', '2018-06-02 08:28:51', '31'),
(3, 'ICT-3104', 'Analog Communication Lab', '1.00', '2018-06-02 08:28:58', '31'),
(4, 'ICT-3105', 'Microprocessor and Assembly Language', '3.00', '2018-06-02 08:29:03', '31'),
(5, 'ICT-3106', 'Microprocessor and Assembly Language Lab', '1.00', '2018-06-02 08:29:06', '31'),
(6, 'ICT-3107', 'Computer Organization and Architecture', '3.00', '2018-06-02 08:29:10', '31'),
(7, 'ICT-3109', 'Operating Systems ', '3.00', '2018-06-02 08:29:13', '31'),
(8, 'ICT-3110', 'Operating Systems Lab', '1.00', '2018-06-02 08:29:17', '31'),
(9, 'ICT-3111', 'Financial and Managerial Accounting', '2.00', '2018-06-02 08:29:23', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student151631gp`
--

CREATE TABLE IF NOT EXISTS `student151631gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3101` varchar(10) NOT NULL,
  `ICT_3103` varchar(10) NOT NULL,
  `ICT_3104` varchar(10) NOT NULL,
  `ICT_3105` varchar(10) NOT NULL,
  `ICT_3106` varchar(10) NOT NULL,
  `ICT_3107` varchar(10) NOT NULL,
  `ICT_3109` varchar(10) NOT NULL,
  `ICT_3110` varchar(10) NOT NULL,
  `ICT_3111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151632`
--

CREATE TABLE IF NOT EXISTS `student151632` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151632`
--

INSERT INTO `student151632` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Communication and Radar ', '3.00', '2018-06-02 08:38:01', '32'),
(2, 'ICT-3202', 'Microwave Communication and Radar Lab', '1.00', '2018-06-02 08:38:04', '32'),
(3, 'ICT-3203', 'Digital Communication ', '3.00', '2018-06-02 08:38:06', '32'),
(4, 'ICT-3204', 'Digital Communication Lab ', '1.00', '2018-06-02 08:38:08', '32'),
(5, 'ICT-3205', 'Computer Peripheral and Interfacing ', '3.00', '2018-06-02 08:38:11', '32'),
(6, 'ICT-3206', 'Computer Peripheral and Interfacing Lab', '1.00', '2018-06-02 08:38:13', '32'),
(7, 'ICT-3207', 'Computer Networks', '3.00', '2018-06-02 08:38:15', '32'),
(8, 'ICT-3208', 'Network Planning and Designing Lab', '1.00', '2018-06-02 08:38:17', '32'),
(9, 'ICT-3209', 'Software Engineering', '3.00', '2018-06-02 08:38:20', '32'),
(10, 'ICT-3210', 'Software Engineering Lab', '1.00', '2018-06-02 08:38:23', '32');

-- --------------------------------------------------------

--
-- Table structure for table `student151632gp`
--

CREATE TABLE IF NOT EXISTS `student151632gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3201` varchar(10) NOT NULL,
  `ICT_3202` varchar(10) NOT NULL,
  `ICT_3203` varchar(10) NOT NULL,
  `ICT_3204` varchar(10) NOT NULL,
  `ICT_3205` varchar(10) NOT NULL,
  `ICT_3206` varchar(10) NOT NULL,
  `ICT_3207` varchar(10) NOT NULL,
  `ICT_3208` varchar(10) NOT NULL,
  `ICT_3209` varchar(10) NOT NULL,
  `ICT_3210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151641`
--

CREATE TABLE IF NOT EXISTS `student151641` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student151641`
--

INSERT INTO `student151641` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:32:29', '41'),
(2, 'ICT-4101', 'Telecommunication Engineering', '2.00', '2018-06-02 08:32:33', '41'),
(3, 'ICT-4103', 'Digital Signal Processing', '3.00', '2018-06-02 08:32:37', '41'),
(4, 'ICT-4104', 'Digital Signal Processing Lab', '1.00', '2018-06-02 08:32:40', '41'),
(5, 'ICT-4105', 'Network Security and Cyber Law', '3.00', '2018-06-02 08:32:43', '41'),
(6, 'ICT-4107', 'Internet and Web Programming', '3.00', '2018-06-02 08:32:46', '41'),
(7, 'ICT-4108', 'Internet and Web Programming Lab', '1.00', '2018-06-02 08:32:50', '41'),
(8, 'ICT-4110', 'Research Methodology', '1.00', '2018-06-02 08:33:11', '41'),
(9, 'ICT-4119', 'Artificial Intelligence ', '3.00', '2018-06-02 08:33:15', '41'),
(10, 'ICT-4120', 'Artificial Intelligence Lab ', '1.00', '2018-06-02 08:33:19', '41');

-- --------------------------------------------------------

--
-- Table structure for table `student151641gp`
--

CREATE TABLE IF NOT EXISTS `student151641gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4000` varchar(10) NOT NULL,
  `ICT_4101` varchar(10) NOT NULL,
  `ICT_4103` varchar(10) NOT NULL,
  `ICT_4104` varchar(10) NOT NULL,
  `ICT_4105` varchar(10) NOT NULL,
  `ICT_4107` varchar(10) NOT NULL,
  `ICT_4108` varchar(10) NOT NULL,
  `ICT_4110` varchar(10) NOT NULL,
  `ICT_4119` varchar(10) NOT NULL,
  `ICT_4120` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student151642`
--

CREATE TABLE IF NOT EXISTS `student151642` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student151642`
--

INSERT INTO `student151642` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:35:57', '42'),
(2, 'ICT-4201', 'Wireless and Mobile Communication', '3.00', '2018-06-02 08:36:01', '42'),
(3, 'ICT-4202', 'Wireless and Mobile Communication Lab', '1.00', '2018-06-02 08:36:05', '42'),
(4, 'ICT-4203', 'Optical Communication', '3.00', '2018-06-02 08:36:17', '42'),
(5, 'ICT-4204', 'Optical Communication Lab', '1.00', '2018-06-02 08:36:22', '42'),
(6, 'ICT-4205', 'Simulation and Modeling', '3.00', '2018-06-02 08:36:25', '42'),
(7, 'ICT-4207', 'Data Mining', '3.00', '2018-06-02 08:36:31', '42'),
(8, 'ICT-4209', 'Digital Image Processing', '3.00', '2018-06-02 08:36:34', '42'),
(9, 'ICT-4210', 'Digital Image Processing Lab', '1.00', '2018-06-02 08:36:39', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student151642gp`
--

CREATE TABLE IF NOT EXISTS `student151642gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4000` varchar(10) NOT NULL,
  `ICT_4201` varchar(10) NOT NULL,
  `ICT_4202` varchar(10) NOT NULL,
  `ICT_4203` varchar(10) NOT NULL,
  `ICT_4204` varchar(10) NOT NULL,
  `ICT_4205` varchar(10) NOT NULL,
  `ICT_4207` varchar(10) NOT NULL,
  `ICT_4209` varchar(10) NOT NULL,
  `ICT_4210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161711`
--

CREATE TABLE IF NOT EXISTS `student161711` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student161711`
--

INSERT INTO `student161711` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1101', 'Basic Electrical Circuit', '3.00', '2018-06-02 09:30:02', '11'),
(2, 'ICT-1102', 'Basic Electrical Circuit Lab', '1.00', '2018-06-02 09:30:04', '11'),
(3, 'ICT-1103', 'Computer Programming', '3.00', '2018-06-02 09:30:08', '11'),
(4, 'ICT-1104', 'Computer Programming Lab', '1.00', '2018-06-02 09:30:10', '11'),
(5, 'ICT-1105', 'Physics', '3.00', '2018-06-02 09:30:16', '11'),
(6, 'ICT-1107', 'Mathematics-I (Differential and Integral Calculus)', '3.00', '2018-06-02 09:30:26', '11'),
(7, 'ICT-1109', 'Technical Communicative English', '2.00', '2018-06-02 09:30:31', '11'),
(8, 'ICT-1110', 'Technical Communicative English Lab', '1.00', '2018-06-02 09:30:35', '11'),
(9, 'ICT-1111', 'Technology, Environment and Society', '2.00', '2018-06-02 09:30:38', '11'),
(10, 'ICT-1112', 'Engineering Drawing Lab', '1.00', '2018-06-02 09:30:40', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student161711gp`
--

CREATE TABLE IF NOT EXISTS `student161711gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1101` varchar(10) NOT NULL,
  `ICT_1102` varchar(10) NOT NULL,
  `ICT_1103` varchar(10) NOT NULL,
  `ICT_1104` varchar(10) NOT NULL,
  `ICT_1105` varchar(10) NOT NULL,
  `ICT_1107` varchar(10) NOT NULL,
  `ICT_1109` varchar(10) NOT NULL,
  `ICT_1110` varchar(10) NOT NULL,
  `ICT_1112` varchar(10) NOT NULL,
  `ICT_1113` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161712`
--

CREATE TABLE IF NOT EXISTS `student161712` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student161712`
--

INSERT INTO `student161712` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1201', 'Electronics-I (Electronic Devices and Circuit Theory)', '3.00', '2018-06-02 09:33:26', '12'),
(2, 'ICT-1202', 'Electronics-I (Electronic Devices and Circuit Theory) Lab', '1.00', '2018-06-02 09:33:28', '12'),
(3, 'ICT-1203', 'Programming with C++', '3.00', '2018-06-02 09:33:30', '12'),
(4, 'ICT-1204', 'Programming with C++ Lab', '1.00', '2018-06-02 09:33:32', '12'),
(5, 'ICT-1205', 'Data Structure', '3.00', '2018-06-02 09:33:35', '12'),
(6, 'ICT-1206', 'Data Structure Lab', '1.00', '2018-06-02 09:33:37', '12'),
(7, 'ICT-1207', 'Discrete Mathematics', '3.00', '2018-06-02 09:33:39', '12'),
(8, 'ICT-1209', 'Mathematics-II (Matrices and Co-ordinate Geometry )', '3.00', '2018-06-02 09:33:42', '12'),
(9, 'ICT-1210', 'Software Development Project-I', '1.00', '2018-06-02 09:33:45', '12'),
(10, 'ICT-1211', 'Bhashani Studies', '0.00', '2018-06-02 09:33:47', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student161712gp`
--

CREATE TABLE IF NOT EXISTS `student161712gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_1201` varchar(10) NOT NULL,
  `ICT_1202` varchar(10) NOT NULL,
  `ICT_1203` varchar(10) NOT NULL,
  `ICT_1204` varchar(10) NOT NULL,
  `ICT_1207` varchar(10) NOT NULL,
  `ICT_1209` varchar(10) NOT NULL,
  `ICT_1210` varchar(10) NOT NULL,
  `ICT_1211` varchar(10) NOT NULL,
  `ICT_1213` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161721`
--

CREATE TABLE IF NOT EXISTS `student161721` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student161721`
--

INSERT INTO `student161721` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2101', 'Electronics-II(Operational Amplifier and Integrated Circuits)', '3.00', '2018-06-02 09:35:35', '21'),
(2, 'ICT-2102', 'Electronics-II(Operational Amplifier and Integrated Circuits) Lab', '1.00', '2018-06-02 09:35:38', '21'),
(3, 'ICT-2103', 'Digital Logic Design', '3.00', '2018-06-02 09:35:40', '21'),
(4, 'ICT-2104', 'Digital Logic Design Lab', '1.00', '2018-06-02 09:35:41', '21'),
(5, 'ICT-2105', 'Object Oriented Programming with Java', '3.00', '2018-06-02 09:35:46', '21'),
(6, 'ICT-2106', 'Object Oriented Programming with Java Lab', '1.00', '2018-06-02 09:35:48', '21'),
(7, 'ICT-2107', 'Algorithm Design and Analysis', '3.00', '2018-06-02 09:35:50', '21'),
(8, 'ICT-2108', 'Algorithm Design and Analysis Lab', '1.00', '2018-06-02 09:35:53', '21'),
(9, 'ICT-2109', 'Mathematics-III (Differential Equation and Vector Calculus)', '3.00', '2018-06-02 09:35:55', '21'),
(10, 'ICT-2111', 'Economics', '3.00', '2018-06-02 09:35:57', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student161721gp`
--

CREATE TABLE IF NOT EXISTS `student161721gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2101` varchar(10) NOT NULL,
  `ICT_2102` varchar(10) NOT NULL,
  `ICT_2103` varchar(10) NOT NULL,
  `ICT_2104` varchar(10) NOT NULL,
  `ICT_2105` varchar(10) NOT NULL,
  `ICT_2106` varchar(10) NOT NULL,
  `ICT_2107` varchar(10) NOT NULL,
  `ICT_2108` varchar(10) NOT NULL,
  `ICT_2109` varchar(10) NOT NULL,
  `ICT_2111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161722`
--

CREATE TABLE IF NOT EXISTS `student161722` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student161722`
--

INSERT INTO `student161722` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2201', 'Computer Organization and Architecture', '3.00', '2018-06-02 09:37:21', '22'),
(2, 'ICT-2203', 'Computer Based Numerical Methods', '3.00', '2018-06-02 09:37:23', '22'),
(3, 'ICT-2204', 'Computer Based Numerical Methods Lab', '1.00', '2018-06-02 09:37:25', '22'),
(4, 'ICT-2205', 'Advanced Java and Mobile Application', '3.00', '2018-06-02 09:37:27', '22'),
(5, 'ICT-2206', 'Advanced Java and Mobile Application Lab', '1.00', '2018-06-02 09:37:29', '22'),
(6, 'ICT-2207', 'Database Management Systems', '3.00', '2018-06-02 09:37:34', '22'),
(7, 'ICT-2208', 'Database Management Systems Lab', '1.00', '2018-06-02 09:37:36', '22'),
(8, 'ICT-2209', 'Mathematics-IV (Complex Variables and Fourier Analysis)', '3.00', '2018-06-02 09:37:38', '22'),
(9, 'ICT-2211', 'Statistics', '3.00', '2018-06-02 09:37:40', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student161722gp`
--

CREATE TABLE IF NOT EXISTS `student161722gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_2201` varchar(10) NOT NULL,
  `ICT_2203` varchar(10) NOT NULL,
  `ICT_2204` varchar(10) NOT NULL,
  `ICT_2205` varchar(10) NOT NULL,
  `ICT_2206` varchar(10) NOT NULL,
  `ICT_2207` varchar(10) NOT NULL,
  `ICT_2209` varchar(10) NOT NULL,
  `ICT_2211` varchar(10) NOT NULL,
  `ICT_2212` varchar(10) NOT NULL,
  `ICT_2213` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161731`
--

CREATE TABLE IF NOT EXISTS `student161731` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student161731`
--

INSERT INTO `student161731` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3101', 'Analog and Digital Communication', '3.00', '2018-06-02 09:41:13', '31'),
(2, 'ICT-3102', 'Analog and Digital Communication Lab', '1.00', '2018-06-02 09:41:15', '31'),
(3, 'ICT-3103', 'Microprocessor and Assembly Language', '3.00', '2018-06-02 09:41:17', '31'),
(4, 'ICT-3104', 'Microprocessor and Assembly Language Lab', '1.00', '2018-06-02 09:41:19', '31'),
(5, 'ICT-3105', 'Object Oriented Analysis and Design', '3.00', '2018-06-02 09:41:23', '31'),
(6, 'ICT-3107', 'Operating Systems', '3.00', '2018-06-02 09:41:26', '31'),
(7, 'ICT-3108', 'Operating Systems Lab', '1.00', '2018-06-02 09:41:28', '31'),
(8, 'ICT-3109', 'Financial and Managerial Accounting', '3.00', '2018-06-02 09:41:30', '31'),
(9, 'ICT-3110', 'Software Development Project-II', '1.00', '2018-06-02 09:41:32', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student161731gp`
--

CREATE TABLE IF NOT EXISTS `student161731gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3101` varchar(10) NOT NULL,
  `ICT_3102` varchar(10) NOT NULL,
  `ICT_3103` varchar(10) NOT NULL,
  `ICT_3105` varchar(10) NOT NULL,
  `ICT_3106` varchar(10) NOT NULL,
  `ICT_3107` varchar(10) NOT NULL,
  `ICT_3108` varchar(10) NOT NULL,
  `ICT_3109` varchar(10) NOT NULL,
  `ICT_3111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161732`
--

CREATE TABLE IF NOT EXISTS `student161732` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student161732`
--

INSERT INTO `student161732` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Engineering', '3.00', '2018-06-02 09:45:10', '32'),
(2, 'ICT-203', 'Bio-informatics', '3.00', '2018-06-02 09:45:13', '32'),
(3, 'ICT-3205', 'Computer Peripheral and Interfacing', '3.00', '2018-06-02 09:45:15', '32'),
(4, 'ICT-3206', 'Computer Peripheral and Interfacing Lab', '1.00', '2018-06-02 09:45:17', '32'),
(5, 'ICT-3207', 'Computer Networks', '3.00', '2018-06-02 09:45:19', '32'),
(6, 'ICT-3208', 'Network Planning and Designing Lab', '1.00', '2018-06-02 09:45:20', '32'),
(7, 'ICT-3209', 'Software Engineering', '3.00', '2018-06-02 09:45:24', '32'),
(8, 'ICT-3210', 'Software Engineering Lab', '1.00', '2018-06-02 09:45:26', '32'),
(9, 'ICT-3211', 'Data Mining', '3.00', '2018-06-02 09:45:28', '32');

-- --------------------------------------------------------

--
-- Table structure for table `student161732gp`
--

CREATE TABLE IF NOT EXISTS `student161732gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_3201` varchar(10) NOT NULL,
  `ICT_3202` varchar(10) NOT NULL,
  `ICT_3203` varchar(10) NOT NULL,
  `ICT_3204` varchar(10) NOT NULL,
  `ICT_3205` varchar(10) NOT NULL,
  `ICT_3206` varchar(10) NOT NULL,
  `ICT_3207` varchar(10) NOT NULL,
  `ICT_3208` varchar(10) NOT NULL,
  `ICT_3209` varchar(10) NOT NULL,
  `ICT_3210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161741`
--

CREATE TABLE IF NOT EXISTS `student161741` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student161741`
--

INSERT INTO `student161741` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 09:51:31', '41'),
(2, 'ICT-4101', 'Telecommunication Engineering', '3.00', '2018-06-02 09:51:43', '41'),
(3, 'ICT-4103', 'Simulation and Modeling', '3.00', '2018-06-02 09:51:36', '41'),
(4, 'ICT-4105', 'Network Security and Cyber Law', '3.00', '2018-06-02 09:51:48', '41'),
(5, 'ICT-4107', 'E-Commerce and Web Programming', '3.00', '2018-06-02 09:51:59', '41'),
(6, 'ICT-4108', 'E-Commerce and Web Programming Lab', '1.00', '2018-06-02 09:51:54', '41'),
(7, 'ICT-4110', 'Research Methodology', '1.00', '2018-06-02 09:52:05', '41'),
(8, 'ICT-4111', 'Digital Image Processing', '3.00', '2018-06-02 09:52:11', '41'),
(9, 'ICT-4112', 'Digital Image Processing Lab', '1.00', '2018-06-02 09:52:16', '41');

-- --------------------------------------------------------

--
-- Table structure for table `student161741gp`
--

CREATE TABLE IF NOT EXISTS `student161741gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4101` varchar(10) NOT NULL,
  `ICT_4102` varchar(10) NOT NULL,
  `ICT_4103` varchar(10) NOT NULL,
  `ICT_4104` varchar(10) NOT NULL,
  `ICT_4105` varchar(10) NOT NULL,
  `ICT_4106` varchar(10) NOT NULL,
  `ICT_4107` varchar(10) NOT NULL,
  `ICT_4108` varchar(10) NOT NULL,
  `ICT_4109` varchar(10) NOT NULL,
  `ICT_4110` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student161742`
--

CREATE TABLE IF NOT EXISTS `student161742` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student161742`
--

INSERT INTO `student161742` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 09:49:16', '42'),
(2, 'ICT-4201', 'Wireless and Mobile Communication', '3.00', '2018-06-02 09:49:19', '42'),
(3, 'ICT-4202', 'Wireless and Mobile Communication Lab', '1.00', '2018-06-02 09:49:22', '42'),
(4, 'ICT-4203', 'Optical Communication', '3.00', '2018-06-02 09:49:24', '42'),
(5, 'ICT-4204', 'Optical Communication Lab', '1.00', '2018-06-02 09:49:26', '42'),
(6, 'ICT-4205', 'Digital Signal Processing', '3.00', '2018-06-02 09:49:28', '42'),
(7, 'ICT-4206', 'Digital Signal Processing Lab', '1.00', '2018-06-02 09:49:30', '42'),
(8, 'ICT-4211', 'Artificial Intelligence', '3.00', '2018-06-02 09:49:33', '42'),
(9, 'ICT-4212', 'Artificial Intelligence Lab', '1.00', '2018-06-02 09:49:40', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student161742gp`
--

CREATE TABLE IF NOT EXISTS `student161742gp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `ICT_4201` varchar(10) NOT NULL,
  `ICT_4202` varchar(10) NOT NULL,
  `ICT_4203` varchar(10) NOT NULL,
  `ICT_4204` varchar(10) NOT NULL,
  `ICT_4205` varchar(10) NOT NULL,
  `ICT_4206` varchar(10) NOT NULL,
  `ICT_4207` varchar(10) NOT NULL,
  `ICT_4208` varchar(10) NOT NULL,
  `ICT_4209` varchar(10) NOT NULL,
  `ICT_4210` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `exam` varchar(30) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `sscboard` varchar(20) NOT NULL,
  `sscgpa` varchar(20) NOT NULL,
  `sscyear` varchar(20) NOT NULL,
  `hscboard` varchar(20) NOT NULL,
  `hscgpa` varchar(20) NOT NULL,
  `hscyear` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`auto_id`,`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`auto_id`, `id`, `name`, `user_name`, `status`, `session`, `batch`, `exam`, `blood`, `father`, `mother`, `home`, `phone`, `email`, `password`, `updatetime`, `sscboard`, `sscgpa`, `sscyear`, `hscboard`, `hscgpa`, `hscyear`, `image`) VALUES
(1, '', 'DR.RASHED MAZUMDER', 'ict_teacher', 'teacher', '', '', '', '', 'Associate Professor', 'Dept. of ICT, MBSTU, 1902, Santosh, Tangail, Bangladesh', '', '01521447020', 'rakhu345@yahoo.com', '202cb962ac59075b964b07152d234b70', '2018-07-25 12:55:27', '', '', '', '', '', '', 'user.png'),
(2, '', 'DR.RASHED MAZUMDER', 'ict_admin', 'admin', '', '', '', '', 'Associate Professor', 'Dept. of ICT, MBSTU, 1902, Santosh, Tangail, Bangladesh', '', '01521447020', 'rakhu345@yahoo.com', '202cb962ac59075b964b07152d234b70', '2018-07-25 13:01:49', '', '', '', '', '', '', 'user.png'),
(3, '', 'Md. Ataur Rahaman Khan', 'ict_register', 'register', '', '', '', '', 'Deputy Registrar', 'Dept. of ICT, MBSTU, 1902, Santosh, Tangail, Bangladesh', '', '01521447020', 'md.arripon@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-07-25 13:01:44', '', '', '', '', '', '', 'user.png'),
(4, 'IT-14012', 'Tanzir Mehedi Shawon', 'Shawon', 'student', '2013-2014', '11 th Batch', 'Undergraduate', 'AB+', 'SK. SHOHIDUL ISLAM', 'MST TANZIRA BEGUM', 'Satkhira', '01750058729', 'tanzirmehedi.ict@gmail.com', '96cb42e4d756440079000157ec9532f3', '2018-07-25 13:07:59', 'Jessore', '5.00', '2010', 'Madrasah', '5.00', '2010', 'user.png'),
(5, 'IT-14040', 'Abdur Rahman', 'a_rahman', 'student', '2013-2014', '11 th Batch', 'Undergraduate', 'A+', 'Md. Suruj Mia', 'Minara Begum', 'Narsingdi', '01743931288', 'abdur6175@gmail.com', '8b291fe2a29971d31114e26ba6fa4ae0', '2018-07-25 13:08:04', 'Dhaka', '5', '2010', 'Dhaka', '5', '2010', 'user.png'),
(6, 'IT-14002', 'Abdul Momen', 'abmomin', 'student', '2013-2014', '11 th Batch', 'Undergraduate', 'O+', 'Abdul Gaffer', 'Ferdousi Begum', 'Rajshahi', '01750557751', 'abdulmomen130@gmail.com', 'be938661c8f34949dd9cbcf686e13732', '2018-07-25 13:08:06', 'Madrasah', '5.00', '2010', 'Rajshahi', '5.00', '2010', 'user.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
