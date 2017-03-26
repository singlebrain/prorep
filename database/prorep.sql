-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 01:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
(1, 'yoo', 2016, 4, '100', '', 'telephone', 'ece', 0),
(2, 'hello', 2017, 4, '2', 'file', 'java html', 'cse', 0),
(8, '', 0, 0, '', '', '', '', 0),
(9, 'haii', 2017, 4, '3', '', 'solarpower', 'eee', 0),
(45, '', 0, 0, '', '', '', '', 0),
(58, 'yoo', 2016, 4, '100', '', 'telephone', 'ece', 0),
(78, 'prorep', 2017, 4, '67', '', 'php', 'cse', 0),
(5678, '', 0, 0, '', '', '', '', 0),
(9877, 'sdfg', 567, 5, '456', '', 'fg', 'rfg', 0),
(9878, 'kooii', 567, 5, '456', 'CS2012.pdf', 'fg', 'rfg', 0),
(9879, 'q', 0, 0, 'q', 'CS2012.pdf', 'q', 'q', 0),
(9880, 'q', 0, 0, 'q', 'ashma_mj.pdf', 'q', 'q', 0),
(9881, 'q', 0, 0, 'q', 'ashma_mj.pdf', 'q', 'q', 0),
(9882, 'qQq', 0, 0, 'q', 'krishna_priya.pdf', 'q', 'q', 0),
(9883, 'project 2', 2015, 4, '34', 'krishna_priya.pdf', 'html', 'cse', 0),
(9884, 'project 2', 2015, 4, '34', 'ashma.pdf', 'html', 'cse', 0),
(9885, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9886, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9887, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9888, 'repo', 2017, 5, '52', 'krishna_priya.pdf', 'hello', 'cse', 0),
(9889, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9890, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9891, 'project 3', 2016, 4, '456', 'CS2012.pdf', 'c ', 'cse', 0),
(9892, 'muthu', 2016, 4, '101', 'ashma_mj.pdf', 'c java php', 'cse', 0),
(9893, 'asdf', 2014, 5, '78', 'ashma.pdf', 'ghjhj', 'cse', 0),
(9894, 'dfg', 2015, 4, '44', 'ashma_mj.pdf', 'fg', 'hjj', 0),
(9895, 'ashik', 2017, 4, '78', 'krishna_priya.pdf', 'pottan', 'cse', 0),
(9896, 'ashik', 2017, 4, '55', 'krishna_priya.pdf', 'pottan', 'cse', 0),
(9897, 'ashik', 2017, 4, '42', 'krishna_priya.pdf', 'POTTAN', 'cse', 0),
(9898, 'ashik', 2017, 4, '456', 'ashma_mj.pdf', 'JAVA', 'CSE', 0),
(9899, 'ASHIK', 2017, 5, '789', 'krishna_priya.pdf', 'POTTAN', 'CSE', 0),
(9900, 'ayyoo', 2017, 4, '6546', 'krishna_priya.pdf', 'pott', 'fdg', 0),
(9901, 'james', 2017, 5, '852', 'ashma_mj.pdf', 'chakka', 'cse', 0),
(9902, 'sdfgh', 2017, 5, '34', 'krishna_priya.pdf', 'rtyu', 'cse', 0),
(9903, 'swdfg', 45, 45, '45', 'krishna_priya.pdf', 'dfg', 'df', 0),
(9904, 'ashma', 2015, 4, '85', 'krishna_priya.pdf', 'smart', 'cse', 0),
(9905, 'vani', 2015, 4, '8596', 'CS2012.pdf', 'dfgh', 'cse', 0),
(9906, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9907, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9908, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9909, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9910, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9911, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9912, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9913, 'fool', 2015, 6, '852', 'CS2012.pdf', 'xcvbn', 'cse', 0),
(9914, 'vanis', 2017, 4, '452', 'ashma_mj.pdf', 'asdfgh', 'cse', 0),
(9915, 'vanis', 2017, 4, '452', 'ashma_mj.pdf', 'asdfgh', 'cse', 0),
(9916, 'ertyu', 2345, 5, '34', 'ashma.pdf', 'fghj', 'cse', 0),
(9917, 'ertyu', 2345, 5, '34', 'ashma.pdf', 'fghj', 'cse', 0),
(9918, 'xcvbn', 2017, 5, '4', 'ashma.pdf', 'dfghj', 'cse', 0),
(9919, 'asdfg', 456, 4, '567', 'project-repository.pdf', 'gbhj', 'df', 0),
(9920, 'asdfgh', 5268, 5, '423', 'CS2012.pdf', 'hjk', 'hjm', 0),
(9921, 'asdfgh', 5268, 5, '423', 'CS2012.pdf', 'hjk', 'hjm', 0),
(9922, 'sdfghjk', 567, 5, '56', 'ashma.pdf', 'fvgh', 'cv', 0),
(9923, 'hello2', 2015, 4, '85', 'ashma.pdf', 'dfghj', 'cse', 0);

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
('', '', '', 3, '', ''),
('ashik', 'ash', 'asdfghjkl', 0, 'cs', '');

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
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9924;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
