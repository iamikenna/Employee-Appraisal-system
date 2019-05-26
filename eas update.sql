-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2019 at 04:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jposition` varchar(30) NOT NULL,
  `companyid` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `boss` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `jposition`, `companyid`, `department`, `firstname`, `lastname`, `phoneno`, `dob`, `gender`, `address`, `boss`) VALUES
(2, 'bata@gmail.com', 'bata', 'hr', '19ek14', 'hr', 'Bata', 'lata', '7484847827848', '2019-02-01', 'male', 'california, United states of America', ''),
(3, 'ikenna@gmail.com', 'ikenna', 'Director', '19ek14', 'Dstv', 'Ikenna', 'Ibezim', '6154401379', '2019-03-04', 'male', '5160 Rice Road\r\n243', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `adminsetgoal`
--

CREATE TABLE `adminsetgoal` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `accepted` varchar(30) NOT NULL DEFAULT 'FALSE',
  `admin_id` int(50) NOT NULL,
  `boss` varchar(30) NOT NULL,
  `jposition` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `goal1` varchar(100) NOT NULL,
  `goal2` varchar(100) NOT NULL,
  `goal3` varchar(100) NOT NULL,
  `sog` varchar(30) NOT NULL,
  `eog` varchar(30) NOT NULL,
  `companyid` varchar(30) NOT NULL,
  `appraisal` varchar(20) NOT NULL DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsetgoal`
--

INSERT INTO `adminsetgoal` (`id`, `firstname`, `lastname`, `accepted`, `admin_id`, `boss`, `jposition`, `department`, `goal1`, `goal2`, `goal3`, `sog`, `eog`, `companyid`, `appraisal`) VALUES
(4, 'Ikenna', 'Ibezim', 'TRUE', 3, 'hr', 'Director', 'Dstv', '000', '999', '000', '90', '000', '19ek14', 'FALSE'),
(5, 'Ikenna', 'Ibezim', 'TRUE', 3, 'hr', 'Director', 'Dstv', 'tat', 'tg', 'gt', 't', 't', '19ek14', 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `appraisalone`
--

CREATE TABLE `appraisalone` (
  `id` int(11) NOT NULL,
  `rsign` varchar(20) NOT NULL,
  `hrsign` varchar(20) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `jposition` varchar(30) NOT NULL,
  `boss` varchar(30) NOT NULL,
  `companyid` varchar(8) NOT NULL,
  `sog` varchar(30) NOT NULL,
  `eog` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `goal` varchar(100) NOT NULL,
  `qualityofwork` varchar(10) NOT NULL,
  `creativity` varchar(10) NOT NULL,
  `skills` varchar(10) NOT NULL,
  `punctuality` varchar(10) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `productivity` varchar(10) NOT NULL,
  `communication` varchar(10) NOT NULL,
  `groupwork` varchar(10) NOT NULL,
  `honesty` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `staff_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appraisalone`
--

INSERT INTO `appraisalone` (`id`, `rsign`, `hrsign`, `firstname`, `lastname`, `department`, `jposition`, `boss`, `companyid`, `sog`, `eog`, `date`, `goal`, `qualityofwork`, `creativity`, `skills`, `punctuality`, `attendance`, `productivity`, `communication`, `groupwork`, `honesty`, `comment`, `grade`, `staff_id`) VALUES
(2, 'SIGNED', 'SIGNED', 'Chuka ', 'Ibezim', 'Dstv', 'secretary', 'Director', '19ek14', '2019-03-22', '2019-03-06', '74575', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'sacked', '30', '1'),
(5, 'SIGNED', 'SIGNED', 'Ikenna', 'Ibezim', 'Dstv', 'Director', 'hr', '19ek14', '90', '000', '2019-04-03', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'very bad', '40', '4');

-- --------------------------------------------------------

--
-- Table structure for table `companysignup`
--

CREATE TABLE `companysignup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `officeno` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `companyid` varchar(20) NOT NULL,
  `about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companysignup`
--

INSERT INTO `companysignup` (`id`, `fullname`, `officeno`, `service`, `address`, `password`, `email`, `photo`, `companyid`, `about`) VALUES
(1, 'Windox', '07036296579', 'Fares', 'Kado estate plot 365', 'ikenna', 'ikennaibezim90@gmail', '', 'ax1tcz', 'We manage transportation'),
(2, 'FIFA', '08058023133', 'Business', 'Across Europe', 'fifa', 'fifa@gmail.com', '', '19ek14', 'We organise soccer competitions');

-- --------------------------------------------------------

--
-- Table structure for table `staffsetgoal`
--

CREATE TABLE `staffsetgoal` (
  `id` int(11) NOT NULL,
  `companyid` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `boss` varchar(30) NOT NULL,
  `jposition` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `eog` varchar(30) NOT NULL,
  `sog` varchar(30) NOT NULL,
  `goal1` varchar(30) NOT NULL,
  `goal2` varchar(30) NOT NULL,
  `goal3` varchar(30) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `accepted` varchar(30) NOT NULL DEFAULT 'FALSE',
  `appraisal` varchar(10) NOT NULL DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffsetgoal`
--

INSERT INTO `staffsetgoal` (`id`, `companyid`, `firstname`, `lastname`, `boss`, `jposition`, `department`, `eog`, `sog`, `goal1`, `goal2`, `goal3`, `staff_id`, `accepted`, `appraisal`) VALUES
(1, '19ek14', 'Chuka ', 'Ibezim', 'Director', 'secretary', 'Dstv', '2019-03-06', '2019-03-22', 'sell the products', 'market\r\n', 'bring customers', 1, 'TRUE', 'FALSE'),
(2, '19ek14', 'Chuka ', 'Ibezim', 'Director', 'secretary', 'Dstv', 'fekjf', 'efnje', 'jn', 'ejkfef', 'efjkef', 1, 'TRUE', 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `staffsignup`
--

CREATE TABLE `staffsignup` (
  `id` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jposition` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `companyid` varchar(10) NOT NULL,
  `boss` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffsignup`
--

INSERT INTO `staffsignup` (`id`, `lastname`, `email`, `firstname`, `phoneno`, `address`, `password`, `jposition`, `dob`, `gender`, `companyid`, `boss`, `department`) VALUES
(1, 'Ibezim', 'chuka@gmail.com', 'Chuka ', '89499494', 'Kado', 'chuka', 'secretary', '10/89/4555', 'male', '19ek14', 'Director', 'Dstv');

-- --------------------------------------------------------

--
-- Table structure for table `sudo`
--

CREATE TABLE `sudo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sudo`
--

INSERT INTO `sudo` (`id`, `name`, `password`) VALUES
(1, 'emem', 'bete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsetgoal`
--
ALTER TABLE `adminsetgoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appraisalone`
--
ALTER TABLE `appraisalone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companysignup`
--
ALTER TABLE `companysignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffsetgoal`
--
ALTER TABLE `staffsetgoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffsignup`
--
ALTER TABLE `staffsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sudo`
--
ALTER TABLE `sudo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminsetgoal`
--
ALTER TABLE `adminsetgoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appraisalone`
--
ALTER TABLE `appraisalone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companysignup`
--
ALTER TABLE `companysignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffsetgoal`
--
ALTER TABLE `staffsetgoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffsignup`
--
ALTER TABLE `staffsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sudo`
--
ALTER TABLE `sudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
