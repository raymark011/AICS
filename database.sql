create database rayanadb;

use rayanadb;

CREATE TABLE `tusers` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  PRIMARY KEY  (`uid`)
);

CREATE TABLE `tstudentparents` (
    `spid` int(11) NOT NULL auto_increment,
    `studentname` varchar(100) NOT NULL,
    `fathersname` varchar(100) NOT NULL,
    `fathersage` int(33) NOT NULL,
    `fathersnumber` varchar(30) NOT NULL,
    `mothersname` varchar(100) NOT NULL,
    `mothersage` int(33) NOT NULL,
    `mothersnumber` varchar(30) NOT NULL,
    `guardiansname` varchar(100) NOT NULL,
    `guardiansage` int(33) NOT NULL,
    `guardiansnumber` varchar(30) NOT NULL,
    PRIMARY KEY (`spid`)
);

CREATE TABLE `tenrollment` (
    `eid` int(11) NOT NULL auto_increment,
    `year` varchar(30) NOT NULL,
    `semester` varchar(30) NOT NULL,
    PRIMARY KEY (`eid`)
);
