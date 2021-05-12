-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 09:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictresult2425`
--

-- --------------------------------------------------------

--
-- Table structure for table `student242511`
--

CREATE TABLE `student242511` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242511`
--

INSERT INTO `student242511` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1101', 'Basic Electrical Circuit', '3.00', '2018-06-02 07:59:30', '11'),
(2, 'ICT-1102', 'Basic Electrical Circuit Lab', '1.00', '2018-06-02 07:59:36', '11'),
(3, 'ICT-1103', 'Computer Programming', '3.00', '2018-06-02 07:59:40', '11'),
(4, 'ICT-1104', ' Computer Programming Lab', '1.00', '2018-06-02 07:59:44', '11'),
(5, 'ICT-1105', 'Physics ', '3.00', '2018-06-02 07:59:49', '11'),
(6, 'ICT-1107', 'Differential and Integral Calculus ', '3.00', '2018-06-02 07:59:53', '11'),
(7, 'ICT-1109', 'Technical Communicative English', '2.00', '2018-06-02 07:59:57', '11'),
(8, 'ICT-1110', 'Technical Communicative English Lab', '1.00', '2018-06-02 08:00:04', '11'),
(9, 'ICT-1111', ' Technology, Environment and Society', '2.00', '2018-06-02 08:00:09', '11'),
(10, 'ICT-1114', ' Introduction to Information Technology  Lab', '1.00', '2018-06-02 08:00:16', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student242511gp`
--

CREATE TABLE `student242511gp` (
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
  `ICT_1112` varchar(10) NOT NULL,
  `ICT_1113` varchar(10) NOT NULL,
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242512`
--

CREATE TABLE `student242512` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242512`
--

INSERT INTO `student242512` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-1201', 'Electronic Devices and Circuit Theory', '3.00', '2018-06-02 08:01:34', '12'),
(2, 'ICT-1202', 'Electronic Devices and Circuit Theory Lab', '1.00', '2018-06-02 08:01:40', '12'),
(3, 'ICT-1203', 'Programming with C++', '3.00', '2018-06-02 08:01:43', '12'),
(4, 'ICT-1204', 'Programming with C++ Lab', '1.00', '2018-06-02 08:01:47', '12'),
(5, 'ICT-1205', ' Data Structure', '3.00', '2018-06-02 08:04:50', '12'),
(6, 'ICT-1206', 'Data Structure Lab', '1.00', '2018-06-02 08:04:56', '12'),
(7, 'ICT-1207', ' Discrete Mathematics', '3.00', '2018-06-02 08:05:22', '12'),
(8, 'ICT-1209', 'Matrices and Coordinate Geometry ', '3.00', '2018-06-02 08:05:28', '12'),
(9, 'ICT-1210', 'Software Development Project-I', '1.00', '2018-06-02 08:05:34', '12'),
(10, 'ICT-1213', 'Bangladesh Studies ', '0.00', '2018-06-02 08:05:42', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student242512gp`
--

CREATE TABLE `student242512gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242521`
--

CREATE TABLE `student242521` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242521`
--

INSERT INTO `student242521` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2101', 'Operational Amplifier and Integrated Circuits', '3.00', '2018-06-02 08:07:46', '21'),
(2, 'ICT-2102', 'Operational Amplifier and Integrated Circuits Lab ', '1.00', '2018-06-02 08:07:50', '21'),
(3, 'ICT-2103 ', 'Digital Logic Design', '3.00', '2018-06-02 08:07:55', '21'),
(4, 'ICT-2104', 'Digital Logic Design Lab', '1.00', '2018-06-02 08:07:58', '21'),
(5, 'ICT-2105', 'Object Oriented Programming with Java ', '3.00', '2018-06-02 08:08:03', '21'),
(6, 'ICT-2106', 'Object Oriented Programming with Java Lab', '1.00', '2018-06-02 08:08:07', '21'),
(7, 'ICT-2107', ' Algorithm Design and Analysis', '3.00', '2018-06-02 08:08:10', '21'),
(8, 'ICT-2108', ' Algorithm Design and Analysis Lab', '1.00', '2018-06-02 08:08:14', '21'),
(9, 'ICT-2109 ', 'Differential Equation and Vector Calculus ', '3.00', '2018-06-02 08:08:23', '21'),
(10, 'ICT-2111', 'Economics ', '3.00', '2018-06-02 08:08:28', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student242521gp`
--

CREATE TABLE `student242521gp` (
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242522`
--

CREATE TABLE `student242522` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242522`
--

INSERT INTO `student242522` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-2201', 'Computer Organization and Architecture', '3.00', '2018-06-02 08:09:56', '22'),
(2, 'ICT-2203 ', 'Computer Based Numerical Methods', '3.00', '2018-06-02 08:10:00', '22'),
(3, 'ICT-2204', 'Computer Based Numerical Methods Lab', '1.00', '2018-06-02 08:10:04', '22'),
(4, 'ICT-2205', 'Advanced  Java and Mobile Application', '3.00', '2018-06-02 08:10:09', '22'),
(5, 'ICT-2206', 'Advanced  Java and Mobile Application Lab', '1.00', '2018-06-02 08:10:13', '22'),
(6, 'ICT-2207', 'Database Management Systems', '3.00', '2018-06-02 08:10:17', '22'),
(7, 'ICT-2208', 'Database Management Systems Lab', '1.00', '2018-06-02 08:10:21', '22'),
(8, 'ICT-2209', 'Complex Variables and Fourier Analysis ', '3.00', '2018-06-02 08:10:25', '22'),
(9, 'ICT-2211', 'Statistics', '3.00', '2018-06-02 08:10:52', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student242522gp`
--

CREATE TABLE `student242522gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242531`
--

CREATE TABLE `student242531` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242531`
--

INSERT INTO `student242531` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3101', 'Analog and Digital Communication', '3.00', '2018-06-02 08:12:07', '31'),
(2, 'ICT-3102', 'Analog and Digital Communication Lab', '1.00', '2018-06-02 08:12:11', '31'),
(3, 'ICT-3103', 'Microprocessor and Assembly Language', '3.00', '2018-06-02 08:12:40', '31'),
(4, 'ICT-3104', 'Microprocessor and Assembly Language Lab', '1.00', '2018-06-02 08:12:16', '31'),
(5, 'ICT-3105', 'Object Oriented Analysis and Design', '3.00', '2018-06-02 08:12:20', '31'),
(6, 'ICT-3107', 'Operating Systems ', '3.00', '2018-06-02 08:12:24', '31'),
(7, 'ICT-3108', 'Operating Systems Lab', '1.00', '2018-06-02 08:12:28', '31'),
(8, 'ICT-3109', 'Financial and Managerial Accounting', '3.00', '2018-06-02 08:12:33', '31'),
(9, 'ICT-3110', 'Software Development Project-II', '1.00', '2018-06-02 08:12:46', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student242531gp`
--

CREATE TABLE `student242531gp` (
  `auto_id` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `ICT_3101` varchar(10) NOT NULL,
  `ICT_3102` varchar(10) NOT NULL,
  `ICT_3103` varchar(10) NOT NULL,
  `ICT_3105` varchar(10) NOT NULL,
  `ICT_3106` varchar(10) NOT NULL,
  `ICT_3107` varchar(10) NOT NULL,
  `ICT_3108` varchar(10) NOT NULL,
  `ICT_3109` varchar(10) NOT NULL,
  `ICT-3111` varchar(10) NOT NULL,
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242532`
--

CREATE TABLE `student242532` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242532`
--

INSERT INTO `student242532` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Engineering', '3.00', '2018-06-02 08:14:50', '32'),
(2, 'ICT-3203', 'Bio-informatics', '3.00', '2018-06-02 08:14:55', '32'),
(3, 'ICT-3205', 'Computer Peripheral and Interfacing', '3.00', '2018-06-02 08:14:59', '32'),
(4, 'ICT-3206', 'Computer Peripheral and Interfacing Lab', '1.00', '2018-06-02 08:15:02', '32'),
(5, 'ICT-3207', 'Computer Networks', '3.00', '2018-06-02 08:15:06', '32'),
(6, 'ICT-3208', 'Network Planning and Designing Lab', '1.00', '2018-06-02 08:15:11', '32'),
(7, 'ICT-3209', 'Software Engineering', '3.00', '2018-06-02 08:15:15', '32'),
(8, 'ICT-3210', 'Software Engineering Lab', '1.00', '2018-06-02 08:15:21', '32'),
(9, 'ICT-3211', 'Data Mining ', '3.00', '2018-06-02 08:15:25', '32');

-- --------------------------------------------------------

--
-- Table structure for table `student242532gp`
--

CREATE TABLE `student242532gp` (
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242541`
--

CREATE TABLE `student242541` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242541`
--

INSERT INTO `student242541` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:16:22', '41'),
(2, 'ICT-4101', 'Telecommunication Engineering', '3.00', '2018-06-02 08:16:27', '41'),
(3, 'ICT-4103', 'Simulation and Modeling', '3.00', '2018-06-02 08:16:30', '41'),
(4, 'ICT-4105', 'Network Security and Cyber Law', '3.00', '2018-06-02 08:16:34', '41'),
(5, 'ICT-4107', 'E-Commerce and Web Programming', '3.00', '2018-06-02 08:16:40', '41'),
(6, 'ICT-4108', 'E-Commerce and Web Programming Lab', '1.00', '2018-06-02 08:16:44', '41'),
(7, 'ICT-4110', 'Research Methodology', '1.00', '2018-06-02 08:16:47', '41'),
(8, 'ICT-4111', 'Digital Image Processing', '3.00', '2018-06-02 08:16:52', '41'),
(9, 'ICT-4112', 'Digital Image Processing Lab', '1.00', '2018-06-02 08:16:59', '41');

-- --------------------------------------------------------

--
-- Table structure for table `student242541gp`
--

CREATE TABLE `student242541gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student242542`
--

CREATE TABLE `student242542` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student242542`
--

INSERT INTO `student242542` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-4000', 'Research Thesis/Project', '2.00', '2018-06-02 08:18:26', '42'),
(2, 'ICT-4201', 'Wireless and Mobile Communication', '3.00', '2018-06-02 08:18:30', '42'),
(3, 'ICT-4202', 'Wireless and Mobile Communication Lab', '1.00', '2018-06-02 08:18:35', '42'),
(4, 'ICT-4203', 'Optical Communication', '3.00', '2018-06-02 08:18:39', '42'),
(5, 'ICT-4204', 'Optical Communication Lab', '1.00', '2018-06-02 08:18:45', '42'),
(6, 'ICT-4205', 'Digital Signal Processing', '3.00', '2018-06-02 08:18:49', '42'),
(7, 'ICT-4206', 'Digital Signal Processing Lab', '1.00', '2018-06-02 08:18:53', '42'),
(8, 'ICT-4211', 'Artificial Intelligence', '3.00', '2018-06-02 08:18:57', '42'),
(9, 'ICT-4212', 'Artificial Intelligence Lab', '1.00', '2018-06-02 08:19:06', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student242542gp`
--

CREATE TABLE `student242542gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student242511`
--
ALTER TABLE `student242511`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242511gp`
--
ALTER TABLE `student242511gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242512`
--
ALTER TABLE `student242512`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242512gp`
--
ALTER TABLE `student242512gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242521`
--
ALTER TABLE `student242521`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242521gp`
--
ALTER TABLE `student242521gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242522`
--
ALTER TABLE `student242522`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242522gp`
--
ALTER TABLE `student242522gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242531`
--
ALTER TABLE `student242531`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242531gp`
--
ALTER TABLE `student242531gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242532`
--
ALTER TABLE `student242532`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242532gp`
--
ALTER TABLE `student242532gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242541`
--
ALTER TABLE `student242541`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242541gp`
--
ALTER TABLE `student242541gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242542`
--
ALTER TABLE `student242542`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student242542gp`
--
ALTER TABLE `student242542gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student242511`
--
ALTER TABLE `student242511`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student242511gp`
--
ALTER TABLE `student242511gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242512`
--
ALTER TABLE `student242512`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student242512gp`
--
ALTER TABLE `student242512gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242521`
--
ALTER TABLE `student242521`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student242521gp`
--
ALTER TABLE `student242521gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242522`
--
ALTER TABLE `student242522`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student242522gp`
--
ALTER TABLE `student242522gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242531`
--
ALTER TABLE `student242531`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student242531gp`
--
ALTER TABLE `student242531gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242532`
--
ALTER TABLE `student242532`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student242532gp`
--
ALTER TABLE `student242532gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242541`
--
ALTER TABLE `student242541`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student242541gp`
--
ALTER TABLE `student242541gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student242542`
--
ALTER TABLE `student242542`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student242542gp`
--
ALTER TABLE `student242542gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
