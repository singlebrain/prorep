-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 07:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prorep`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`, `pass`, `dept`, `email`) VALUES
('asd', 'asd', 'asd', 'cs', ''),
('okm', 'okm', 'okm', 'cs', ''),
('qwe', 'asdfghjkl', 'qwertyuiop', 'cs', ''),
('zxc', 'zxc', 'zxc', 'cs', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `members` int(5) NOT NULL,
  `cor_id` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `year`, `members`, `cor_id`, `file`, `tags`, `dept`, `rating`) VALUES
(0, 'veepu', 2015, 4, '23456', 'ashik.pdf', 'chakka', 'cse', 0),
(1, 'ashuik', 2017, 4, '678', 'android_certificate.pdf', 'pottan', 'cse', 0),
(1234, 'pro name', 2017, 4, 'asd', 'ashma_mj', 'php html', 'cse', 8),
(1235, 'project', 2017, 4, 'asd', 'krishna_priya', 'html python django', 'cse', 9),
(1236, 'named', 2016, 3, 'asd', 'qwe', '', 'cse', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `sid` char(9) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `up_right` int(50) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `sid`, `pass`, `up_right`, `dept`, `email`) VALUES
('ashik', 'ash', 'asdfghjkl', 1, 'cs', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `file` (`file`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
