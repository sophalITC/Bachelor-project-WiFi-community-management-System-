-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 12, 2016 at 01:08 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `project_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `device`
-- 

CREATE TABLE `device` (
  `ssid_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `password` varchar(20) collate utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `device`
-- 

INSERT INTO `device` VALUES ('piyawit', '123456');
INSERT INTO `device` VALUES ('bond', 'dfg');
INSERT INTO `device` VALUES ('hhhhhh', 'jjjjjjj');
INSERT INTO `device` VALUES ('aaaaaaa', 'aaaaaa');
INSERT INTO `device` VALUES ('SSID', '12345');
INSERT INTO `device` VALUES ('dfg', 'sdfg');
INSERT INTO `device` VALUES ('vbrthbr', 'brt');
INSERT INTO `device` VALUES ('sfdgs', 'sdfg');
INSERT INTO `device` VALUES ('ggg', 'gg');
INSERT INTO `device` VALUES ('ff', 'f');
INSERT INTO `device` VALUES ('sdfsd', 'sdfsdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `location`
-- 

CREATE TABLE `location` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_latitude` varchar(255) collate utf8_unicode_ci NOT NULL,
  `user_longitude` varchar(255) collate utf8_unicode_ci NOT NULL,
  `user_zoom` varchar(64) collate utf8_unicode_ci NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

-- 
-- Dumping data for table `location`
-- 

INSERT INTO `location` VALUES (22, '6.999972100000001', '100.48015780000003', '16');
INSERT INTO `location` VALUES (21, '7.8581539000000005', '98.36502719999999', '21');
INSERT INTO `location` VALUES (1, '7.895009', '98.352687', '12');
INSERT INTO `location` VALUES (2, '7.886959', '98.374820', '11');
INSERT INTO `location` VALUES (3, '7.892187', '98.367223', '11');
INSERT INTO `location` VALUES (4, '7.894360', '98.352938', '11');
INSERT INTO `location` VALUES (23, '7.893578499999999', '98.35355890000005', '17');
INSERT INTO `location` VALUES (20, '7.858203799999999', '98.36499779999997', '14');

-- --------------------------------------------------------

-- 
-- Table structure for table `member`
-- 

CREATE TABLE `member` (
  `UserID` int(3) NOT NULL auto_increment,
  `Username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Password` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Firstname` varchar(64) collate utf8_unicode_ci NOT NULL,
  `Lastname` varchar(64) collate utf8_unicode_ci NOT NULL,
  `Email` varchar(150) collate utf8_unicode_ci NOT NULL,
  `Tel` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Status` enum('ADMIN','USER') collate utf8_unicode_ci NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `member`
-- 

INSERT INTO `member` VALUES (1, 'Forteenz', '123456', 'Piyawit', 'Na Phatthalung', 'bonthelive_clash@hotmail.com', '0910429621', 'ADMIN', 0, '2016-01-11 23:19:40');
INSERT INTO `member` VALUES (2, 'bond', '123456', 'Somchai', 'Jaidee', 'Somchai@gmail.com', '0991234542', 'USER', 0, '0000-00-00 00:00:00');
