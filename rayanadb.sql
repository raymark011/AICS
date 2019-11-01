create database rayanadb;

use rayanadb;

CREATE TABLE `student_tbl` (
    `id` int(255) NOT NULL auto_increment,
    `firstName` varchar(100) NOT NULL,
    `lastName` varchar(100) NOT NULL,
    `gradeLevel` varchar(100) NOT NULL,
    `strand` varchar(100) NOT NULL,
    `section` varchar(100) NOT NULL,
    `emailAddress` varchar(100) NOT NULL,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);