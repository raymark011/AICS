-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:23 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tstudentparents`
--
ALTER TABLE `tstudentparents`
  ADD PRIMARY KEY (`spid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tstudentparents`
--
ALTER TABLE `tstudentparents`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
