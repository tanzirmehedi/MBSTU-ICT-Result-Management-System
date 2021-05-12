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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`auto_id`, `id`, `name`, `user_name`, `status`, `session`, `batch`, `exam`, `blood`, `father`, `mother`, `home`, `phone`, `email`, `password`, `updatetime`, `sscboard`, `sscgpa`, `sscyear`, `hscboard`, `hscgpa`, `hscyear`, `image`) VALUES
(1, '', 'SK. Tanzir Mehedi Shawon', 'shawon', 'admin', '', '', '', '', 'B. Sc Engineering', 'MBSTU, ICT', '', '01521447020', 'tanzirmehedi.ict@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-06-02 15:21:58', '', '', '', '', '', '', 'user.png'),
(20, 'IT-14031', 'Md. Khairum  Monir', 'shakib', 'student', '2013-2014', '11 th Batch', 'Undergraduate', 'O+', 'Md. Kubbad Ali', 'Khudeja Begum', 'Jamalpur', '01750557751', 'shakibictmbstu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', 'Dhaka', '5.00', '2011', 'Dhaka', '5.00', '2011', 'user.png'),
(21, 'IT-14014', 'MD. AL AMIN', 'alamin', 'teacher', '2013-2014', '11 th Batch', 'Undergraduate', 'AB+', 'MD.ROISUDDIN', 'NAZMA AKTER', 'Dhaka', '01521212826', 'alamin.ict14014@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2018-06-02 07:01:58', 'Dhaka', '5.00', '2010', 'Dhaka', '5.00', '2010', 'user.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
