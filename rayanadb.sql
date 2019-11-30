-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayanadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tenrollment`
--

CREATE TABLE `tenrollment` (
  `eid` int(11) NOT NULL,
  `year` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenrollment`
--

INSERT INTO `tenrollment` (`eid`, `year`, `semester`) VALUES
(1, '2019-2020', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tstudentparents`
--

CREATE TABLE `tstudentparents` (
  `spid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `fathersname` varchar(100) NOT NULL,
  `fathersage` int(33) NOT NULL,
  `fathersnumber` varchar(30) NOT NULL,
  `mothersname` varchar(100) NOT NULL,
  `mothersage` int(33) NOT NULL,
  `mothersnumber` varchar(30) NOT NULL,
  `guardiansname` varchar(100) NOT NULL,
  `guardiansage` int(33) NOT NULL,
  `guardiansnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tstudentparents`
--

INSERT INTO `tstudentparents` (`spid`, `studentname`, `fathersname`, `fathersage`, `fathersnumber`, `mothersname`, `mothersage`, `mothersnumber`, `guardiansname`, `guardiansage`, `guardiansnumber`) VALUES
(1, 'raymark', 'jose', 23, '0956123132231', 'maria', 25, '096152341213', 'galaxe', 65, '09561243122331');

-- --------------------------------------------------------

--
-- Table structure for table `tusers`
--

CREATE TABLE `tusers` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tenrollment`
--
ALTER TABLE `tenrollment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tstudentparents`
--
ALTER TABLE `tstudentparents`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `tusers`
--
ALTER TABLE `tusers`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tenrollment`
--
ALTER TABLE `tenrollment`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tstudentparents`
--
ALTER TABLE `tstudentparents`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tusers`
--
ALTER TABLE `tusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
