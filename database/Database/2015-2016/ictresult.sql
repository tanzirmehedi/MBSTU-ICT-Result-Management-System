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
-- Database: `ictresult2`
--

-- --------------------------------------------------------

--
-- Table structure for table `student151611`
--

CREATE TABLE `student151611` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151611gp` (
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
  `ICT_1114` varchar(10) NOT NULL,
  `ICT_1115` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student151612`
--

CREATE TABLE `student151612` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151612gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student151621`
--

CREATE TABLE `student151621` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151621gp` (
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
-- Table structure for table `student151622`
--

CREATE TABLE `student151622` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151622gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student151631`
--

CREATE TABLE `student151631` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151631gp` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student151632`
--

CREATE TABLE `student151632` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151632gp` (
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
-- Table structure for table `student151641`
--

CREATE TABLE `student151641` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151641gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student151642`
--

CREATE TABLE `student151642` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student151642gp` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student151611`
--
ALTER TABLE `student151611`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151611gp`
--
ALTER TABLE `student151611gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151612`
--
ALTER TABLE `student151612`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151612gp`
--
ALTER TABLE `student151612gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151621`
--
ALTER TABLE `student151621`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151621gp`
--
ALTER TABLE `student151621gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151622`
--
ALTER TABLE `student151622`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151622gp`
--
ALTER TABLE `student151622gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151631`
--
ALTER TABLE `student151631`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151631gp`
--
ALTER TABLE `student151631gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151632`
--
ALTER TABLE `student151632`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151632gp`
--
ALTER TABLE `student151632gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151641`
--
ALTER TABLE `student151641`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151641gp`
--
ALTER TABLE `student151641gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151642`
--
ALTER TABLE `student151642`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student151642gp`
--
ALTER TABLE `student151642gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student151611`
--
ALTER TABLE `student151611`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151611gp`
--
ALTER TABLE `student151611gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151612`
--
ALTER TABLE `student151612`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151612gp`
--
ALTER TABLE `student151612gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151621`
--
ALTER TABLE `student151621`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151621gp`
--
ALTER TABLE `student151621gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151622`
--
ALTER TABLE `student151622`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151622gp`
--
ALTER TABLE `student151622gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151631`
--
ALTER TABLE `student151631`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student151631gp`
--
ALTER TABLE `student151631gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151632`
--
ALTER TABLE `student151632`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151632gp`
--
ALTER TABLE `student151632gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151641`
--
ALTER TABLE `student151641`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student151641gp`
--
ALTER TABLE `student151641gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student151642`
--
ALTER TABLE `student151642`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student151642gp`
--
ALTER TABLE `student151642gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
