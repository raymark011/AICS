CREATE DATABASE rayanadb;

USE rayanadb;

CREATE TABLE `tusers` (
    `uid` int() NOT NULL auto_increment,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `role` varchar(100) NOT NULL,
    `firstname` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `gender` varchar(30) NOT NULL,
    `contactnumber` varchar(30) NOT NULL,
    `emailaddress` varchar(100) NOT NULL,

    PRIMARY KEY (`uid`) 
);