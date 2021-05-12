-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 07:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictresult1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student141511`
--

CREATE TABLE `student141511` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141511gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141512`
--

CREATE TABLE `student141512` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141512gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141521`
--

CREATE TABLE `student141521` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141521gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141522`
--

CREATE TABLE `student141522` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141522gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141531`
--

CREATE TABLE `student141531` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141531gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141532`
--

CREATE TABLE `student141532` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141532gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141541`
--

CREATE TABLE `student141541` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141541gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student141542`
--

CREATE TABLE `student141542` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student141542gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student141511`
--
ALTER TABLE `student141511`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141511gp`
--
ALTER TABLE `student141511gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141512`
--
ALTER TABLE `student141512`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141512gp`
--
ALTER TABLE `student141512gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141521`
--
ALTER TABLE `student141521`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141521gp`
--
ALTER TABLE `student141521gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141522`
--
ALTER TABLE `student141522`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141522gp`
--
ALTER TABLE `student141522gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141531`
--
ALTER TABLE `student141531`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141531gp`
--
ALTER TABLE `student141531gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141532`
--
ALTER TABLE `student141532`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141532gp`
--
ALTER TABLE `student141532gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141541`
--
ALTER TABLE `student141541`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141541gp`
--
ALTER TABLE `student141541gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141542`
--
ALTER TABLE `student141542`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student141542gp`
--
ALTER TABLE `student141542gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student141511`
--
ALTER TABLE `student141511`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141511gp`
--
ALTER TABLE `student141511gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141512`
--
ALTER TABLE `student141512`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141512gp`
--
ALTER TABLE `student141512gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141521`
--
ALTER TABLE `student141521`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141521gp`
--
ALTER TABLE `student141521gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141522`
--
ALTER TABLE `student141522`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141522gp`
--
ALTER TABLE `student141522gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141531`
--
ALTER TABLE `student141531`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student141531gp`
--
ALTER TABLE `student141531gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141532`
--
ALTER TABLE `student141532`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141532gp`
--
ALTER TABLE `student141532gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141541`
--
ALTER TABLE `student141541`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student141541gp`
--
ALTER TABLE `student141541gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student141542`
--
ALTER TABLE `student141542`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student141542gp`
--
ALTER TABLE `student141542gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
