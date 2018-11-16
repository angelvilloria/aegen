-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:34 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aegen`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `CSID` varchar(10) NOT NULL,
  `ChapNum` int(2) NOT NULL,
  `ChapName` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`CSID`, `ChapNum`, `ChapName`) VALUES
('IT102', 1, 'Introduction to PHP');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `ChoicesID` int(5) NOT NULL,
  `QuestionID` int(5) NOT NULL,
  `Choice` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursesyllabus`
--

CREATE TABLE `coursesyllabus` (
  `CSID` varchar(10) NOT NULL,
  `CSName` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursesyllabus`
--

INSERT INTO `coursesyllabus` (`CSID`, `CSName`) VALUES
('IT102', 'OOP Programming'),
('IT101', 'IT Fundamentals');

-- --------------------------------------------------------

--
-- Table structure for table `facultycsid`
--

CREATE TABLE `facultycsid` (
  `FacultyID` varchar(15) NOT NULL,
  `CSID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultycsid`
--

INSERT INTO `facultycsid` (`FacultyID`, `CSID`) VALUES
('15-037-017', 'IT102'),
('15-037-017', 'IT101');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(5) NOT NULL,
  `TopicID` int(5) NOT NULL,
  `CSID` varchar(10) NOT NULL,
  `ChoicesID` int(5) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `QuestionType` char(50) NOT NULL,
  `IsApproved` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `CSID` varchar(10) NOT NULL,
  `ChapNum` int(2) NOT NULL,
  `TopicNum` int(2) NOT NULL,
  `TopicName` varchar(55) NOT NULL,
  `Hours` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`CSID`, `ChapNum`, `TopicNum`, `TopicName`, `Hours`) VALUES
('IT102', 1, 1, 'Netbeans IDE Introduction', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FacultyID` varchar(15) NOT NULL,
  `CSID` varchar(10) NOT NULL,
  `LName` char(25) NOT NULL,
  `FName` char(25) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `College` char(30) NOT NULL,
  `Department` char(50) NOT NULL,
  `IsAdmin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FacultyID`, `CSID`, `LName`, `FName`, `Password`, `College`, `Department`, `IsAdmin`) VALUES
('15-037-018', '', 'Cueto', 'Mary Tierce', '953f0e5d387909913f49fce1729edf2f', 'COS', 'MATH', 0),
('15-037-001', '', 'Marin', 'Elvin', 'e10adc3949ba59abbe56e057f20f88', 'COS', 'MATH', 0),
('15-037-017', '', 'Villoria', 'Angel', 'e10adc3949ba59abbe56e057f20f883e', 'COS', 'MATH', 0),
('15-037-003', '', 'Mangaco', 'Aeinreb', '827ccb0eea8a706c4c34a16891f84e7b', 'COE', 'MATH', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`ChoicesID`);

--
-- Indexes for table `coursesyllabus`
--
ALTER TABLE `coursesyllabus`
  ADD PRIMARY KEY (`CSID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`FacultyID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
