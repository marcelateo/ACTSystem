-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 12:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `actsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `Admin_Name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'marcelateo', '123456'),
(2, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(50) NOT NULL,
  `event` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `type` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `datetime` datetime NOT NULL,
  `roomID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `type`, `datetime`, `roomID`, `staffID`) VALUES
(2, 'Networking', '2 year BSc', '2021-03-22 15:00:00', 10, 4),
(22, 'Talk Ted', 'Expo', '2021-03-17 10:30:00', 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomname` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `floor` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `type` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomname`, `floor`, `type`) VALUES
(2, 'Yale', '1 Floor', ''),
(10, 'Harvard', '2 floor', ''),
(15, 'Yelts', '3 floor', 'Classroom');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffName` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffName`, `email`) VALUES
(1, 'test', 'test@cct.ie'),
(4, 'Greg South', 'greg@cct.ie'),
(5, 'Mark Sullivan', 'test@cct.ie'),
(6, 'Marcela Teo', 'marcela_teo@yahoo.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomID` (`roomID`,`staffID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
