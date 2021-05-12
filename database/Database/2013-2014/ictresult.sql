-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 06:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `student131411`
--

CREATE TABLE `student131411` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student131411gp` (
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
-- Table structure for table `student131412`
--

CREATE TABLE `student131412` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student131412gp` (
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
  `ICT_1215` varchar(20) NOT NULL,
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student131421`
--

CREATE TABLE `student131421` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student131421gp` (
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
-- Table structure for table `student131422`
--

CREATE TABLE `student131422` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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

CREATE TABLE `student131422gp` (
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
-- Table structure for table `student131431`
--

CREATE TABLE `student131431` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
(7, 'ICT-3108', 'Distributed Database Management System Lab', '1.00', '2018-06-02 06:33:53', '31'),
(8, 'ICT-3109', 'System Analysis and Design', '3.00', '2018-06-02 06:33:58', '31'),
(9, 'ICT-3111', 'Numerical Methods', '3.00', '2018-06-02 06:34:01', '31');

-- --------------------------------------------------------

--
-- Table structure for table `student131431gp`
--

CREATE TABLE `student131431gp` (
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
-- Table structure for table `student131432`
--

CREATE TABLE `student131432` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student131432`
--

INSERT INTO `student131432` (`auto_id`, `code`, `title`, `credit`, `updatetime`, `ident`) VALUES
(1, 'ICT-3201', 'Microwave Engineering', '3.00', '2018-06-02 06:35:39', '32'),
(2, 'ICT-3202', 'Microwave Engineering Lab', '1.00', '2018-06-02 06:35:43', '32'),
(3, 'ICT-3203', 'Peripheral Interfacing and Embedded System', '3.00', '2018-06-02 06:35:47', '32'),
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

CREATE TABLE `student131432gp` (
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
-- Table structure for table `student131441`
--

CREATE TABLE `student131441` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student131441gp` (
  `auto_id` int(11) NOT NULL,
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
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `student131442`
--

CREATE TABLE `student131442` (
  `auto_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student131442gp` (
  `auto_id` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `ICT_4201` varchar(10) NOT NULL,
  `ICT_4202` varchar(10) NOT NULL,
  `ICT_4203` varchar(10) NOT NULL,
  `ICT_4204` varchar(10) NOT NULL,
  `ICT_4205` varchar(10) NOT NULL,
  `ICT_4000` varchar(20) NOT NULL,
  `ICT_4207` varchar(10) NOT NULL,
  `ICT_4208` varchar(10) NOT NULL,
  `publish` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student131411`
--
ALTER TABLE `student131411`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131411gp`
--
ALTER TABLE `student131411gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131412`
--
ALTER TABLE `student131412`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131412gp`
--
ALTER TABLE `student131412gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131421`
--
ALTER TABLE `student131421`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131421gp`
--
ALTER TABLE `student131421gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131422`
--
ALTER TABLE `student131422`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131422gp`
--
ALTER TABLE `student131422gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131431`
--
ALTER TABLE `student131431`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131431gp`
--
ALTER TABLE `student131431gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131432`
--
ALTER TABLE `student131432`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131432gp`
--
ALTER TABLE `student131432gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131441`
--
ALTER TABLE `student131441`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131441gp`
--
ALTER TABLE `student131441gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131442`
--
ALTER TABLE `student131442`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `student131442gp`
--
ALTER TABLE `student131442gp`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student131411`
--
ALTER TABLE `student131411`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131411gp`
--
ALTER TABLE `student131411gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131412`
--
ALTER TABLE `student131412`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131412gp`
--
ALTER TABLE `student131412gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131421`
--
ALTER TABLE `student131421`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131421gp`
--
ALTER TABLE `student131421gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131422`
--
ALTER TABLE `student131422`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131422gp`
--
ALTER TABLE `student131422gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131431`
--
ALTER TABLE `student131431`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student131431gp`
--
ALTER TABLE `student131431gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131432`
--
ALTER TABLE `student131432`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131432gp`
--
ALTER TABLE `student131432gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131441`
--
ALTER TABLE `student131441`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student131441gp`
--
ALTER TABLE `student131441gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student131442`
--
ALTER TABLE `student131442`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student131442gp`
--
ALTER TABLE `student131442gp`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
