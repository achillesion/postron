-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 06:55 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tajtron`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

CREATE TABLE IF NOT EXISTS `basicinfo` (
  `infoid` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `costing` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `jobno` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicinfo`
--

INSERT INTO `basicinfo` (`infoid`, `serial`, `description`, `costing`, `qty`, `jobno`) VALUES
(33, '2016_144', 'jia', 200, 3, 909),
(34, '2016_144', 'kia', 100, 2, 909),
(36, '2016_9099', 'yubyuyv', 90, 1, 90900),
(37, '2016_111', 'mmmkk', 89, 88, 909),
(38, '2016_111', '90', 99, 99, 909),
(39, '2016_90', 'kmk', 4445, 333, 445),
(40, '2016_007', 'mug', 90, 12, 420),
(41, '2016_007', 'iphone', 60000, 2, 420),
(42, '2016_007', 'head phone', 500, 2, 420);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `billid` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `dpo` varchar(255) DEFAULT NULL,
  `dpodate` varchar(255) DEFAULT NULL,
  `do` varchar(255) DEFAULT NULL,
  `srno` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `dateofbill` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`billid`, `job`, `dpo`, `dpodate`, `do`, `srno`, `customername`, `dateofbill`) VALUES
(44, 909, 'sd', '09-10-2016 ', ' ad', '2016_144', 'njk', ' 09-10-2016 /09:43 pm '),
(46, 90900, 'jnnhb', '09-10-2016 ', ' ', '2016_9099', 'hash', ' 09-10-2016 /09:54 pm '),
(48, 445, 'er3', '15-10-2016 ', ' sses', '2016_90', 'xxxwww', ' 15-10-2016 /04:25 pm '),
(49, 420, 'oka', '15-10-2016 ', ' isokay', '2016_007', 'Daud', ' 15-10-2016 /08:15 pm ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(1, 'ammad', 'samar', 'Ammadsamar@gmail.com', 'admin', 'password'),
(2, 'ammad', 'samar', 'ammadsamar11@gmail.com', 'ammad', 'ammadas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`billid`), ADD UNIQUE KEY `job` (`job`), ADD UNIQUE KEY `srno` (`srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicinfo`
--
ALTER TABLE `basicinfo`
  MODIFY `infoid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `billid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
