-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 04:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictresult3`
--

-- --------------------------------------------------------

--
-- Table structure for table `student161711`
--

CREATE TABLE `student161711` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161711gp` (
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161712`
--

CREATE TABLE `student161712` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161712gp` (
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161721`
--

CREATE TABLE `student161721` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161721gp` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161722`
--

CREATE TABLE `student161722` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161722gp` (
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161731`
--

CREATE TABLE `student161731` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161731gp` (
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
  `ICT_3111` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161732`
--

CREATE TABLE `student161732` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161732gp` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161741`
--

CREATE TABLE `student161741` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161741gp` (
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student161742`
--

CREATE TABLE `student161742` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student161742gp` (
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student161711`
--
ALTER TABLE `student161711`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161711gp`
--
ALTER TABLE `student161711gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161712`
--
ALTER TABLE `student161712`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161712gp`
--
ALTER TABLE `student161712gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161721`
--
ALTER TABLE `student161721`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161721gp`
--
ALTER TABLE `student161721gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161722`
--
ALTER TABLE `student161722`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161722gp`
--
ALTER TABLE `student161722gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161731`
--
ALTER TABLE `student161731`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161731gp`
--
ALTER TABLE `student161731gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161732`
--
ALTER TABLE `student161732`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161732gp`
--
ALTER TABLE `student161732gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161741`
--
ALTER TABLE `student161741`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161741gp`
--
ALTER TABLE `student161741gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161742`
--
ALTER TABLE `student161742`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student161742gp`
--
ALTER TABLE `student161742gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student161711`
--
ALTER TABLE `student161711`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student161711gp`
--
ALTER TABLE `student161711gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161712`
--
ALTER TABLE `student161712`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student161712gp`
--
ALTER TABLE `student161712gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161721`
--
ALTER TABLE `student161721`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student161721gp`
--
ALTER TABLE `student161721gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161722`
--
ALTER TABLE `student161722`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student161722gp`
--
ALTER TABLE `student161722gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161731`
--
ALTER TABLE `student161731`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student161731gp`
--
ALTER TABLE `student161731gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161732`
--
ALTER TABLE `student161732`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student161732gp`
--
ALTER TABLE `student161732gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161741`
--
ALTER TABLE `student161741`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student161741gp`
--
ALTER TABLE `student161741gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student161742`
--
ALTER TABLE `student161742`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student161742gp`
--
ALTER TABLE `student161742gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
