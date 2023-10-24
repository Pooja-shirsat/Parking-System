-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 12:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `blockname` varchar(2000) NOT NULL,
  `Status` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `category`, `blockname`, `Status`) VALUES
(1, 'A', 'a1', '1'),
(2, 'B', 'B1', '1'),
(3, 'C', 'C1', '1'),
(4, 'A', 'A2', '1'),
(5, 'A', 'A3', '1'),
(6, 'B', 'B2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `Vehicle_Owner_Name` varchar(2000) NOT NULL,
  `Vehicle_Number` varchar(2000) NOT NULL,
  `Date` date NOT NULL,
  `Vehicle_In` time NOT NULL,
  `Vehicle_Out` time NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `Vehicle_Owner_Name`, `Vehicle_Number`, `Date`, `Vehicle_In`, `Vehicle_Out`, `slot_id`) VALUES
(2, 'harishchandre samruddhi janardhan', 'mh12-ab-1551', '2022-07-16', '01:35:00', '02:35:00', 1),
(3, 'wagh sakshi satyajit', 'mh16-2485', '2022-07-28', '11:00:00', '03:00:00', 1),
(4, 'pooja lahu shirsath', 'mh-14-at-3425', '2004-08-14', '11:45:00', '12:45:00', 1),
(16, 'shambhu', 'mh-14-at-1488', '2022-07-28', '13:47:00', '16:47:00', 1),
(19, 'shivshankar sonawane', 'mh-17-qw-1252', '2022-07-29', '01:24:00', '05:24:00', 1),
(20, 'khalekar bhakti pravin', 'jk-12-dt-8989', '2022-07-07', '18:25:00', '01:25:00', 1),
(21, 'shambhu', 'mh-14-at-1488', '2022-08-02', '15:17:00', '20:17:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regester_details`
--

CREATE TABLE `regester_details` (
  `ID` int(11) NOT NULL,
  `Username` varchar(2000) NOT NULL,
  `Phone_no` varchar(2000) NOT NULL,
  `Email` varchar(2000) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(2000) NOT NULL,
  `Vehicle_Owner_Name` varchar(2000) NOT NULL,
  `Vehicle_name` varchar(2000) NOT NULL,
  `Vehicle_number` varchar(2000) NOT NULL,
  `Password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regester_details`
--

INSERT INTO `regester_details` (`ID`, `Username`, `Phone_no`, `Email`, `DOB`, `Address`, `Vehicle_Owner_Name`, `Vehicle_name`, `Vehicle_number`, `Password`) VALUES
(1, 'shambhu', '9359693135', 'abc@gmail.com', '0000-00-00', 'khadambe kh tal-rahuri', 'harishchandre samruddhi janardhan', 'thar', 'mh-14-at-1488', ''),
(2, 'samruddhi harishchandre', '9359693135', 'shambhuharishchandre@gmail.com', '0000-00-00', 'rahuri', 'samruddhi', 'hero honda', 'mh-12-at-1488', ''),
(3, 'shivshankar sonawane', '7020907556', 'shivshankar@gmail.com', '0000-00-00', 'dhambori', 'shiv', 'audi', 'mh-16-qw-1252', ''),
(4, 'shivshankar sonawane', '7020907556', 'shivshankar@gmail.com', '0000-00-00', 'dhambori', 'shiv', 'audi', 'mh-16-qw-1252', ''),
(5, 'shivshankar sonawane', '7020907556', 'shivshankar@gmail.com', '0000-00-00', 'dhambori', 'shiv', 'audi', 'mh-16-qw-1252', 'shiv'),
(6, 'bhakti khalekar', '7020353497', 'bhaktikhalekar@gmail.com', '0000-00-00', 'khadambe', 'bhakti', 'audi', 'mh-14-bk-5152', 'bhakti'),
(8, 'nayan harishchandre', '9075669597', 'nayanharishchandre@gmail.com', '2002-06-04', 'khadambe', 'nayan', 'thar', 'mh-14-at-1488', 'nayan'),
(9, 'om kadam', '1234567890', 'kadamom@gmail.com', '2005-11-21', 'nevargon', 'om', 'thar', 'mh-40-gk-9667', 'omkadam'),
(10, 'om kadam', '1234567890', 'kadamom@gmail.com', '2005-11-21', 'nevargon', 'om', 'thar', 'mh-40-gk-9667', 'omkadam'),
(11, 'om kadam', '1234567890', 'kadamom@gmail.com', '2005-11-21', 'nevargon', 'om', 'thar', 'mh-40-gk-9667', 'omkadam'),
(12, 'om kadam', '1234567890', 'kadamom@gmail.com', '2005-11-21', 'nevargon', 'om', 'thar', 'mh-40-gk-9667', 'omkadam'),
(13, 'om kadam', '1234567890', 'kadamom@gmail.com', '2005-11-21', 'nevargon', 'om', 'thar', 'mh-40-gk-9667', 'omkadam'),
(14, 'nayan harishchandre', '9075669597', 'nayanharishchandre@gmail.com', '2002-06-04', 'khadambe', 'nayan', 'thar', 'mh-14-at-1488', 'nayan'),
(16, 'Harishchandre  Janardhan', '8668791988', 'harishchandrejanardhan@gmail.com', '1972-01-01', 'at-post:\r\nkhadambe kd tal:Rahuri dist:A.nagar', 'Harishchandre  Janardhan', 'Hero Honda', 'MH-14-AT-1488', '9439aec52eb100234ad0d3bf4471b575'),
(17, 'Harishchandre  Janardhan', '8668791988', 'harishchandrejanardhan@gmail.com', '1972-01-01', 'khadambe', 'Harishchandre  Janardhan', 'Hero Honda', 'MH-14-AT-1488', '9439aec52eb100234ad0d3bf4471b575'),
(18, 'Harishchandre  Janardhan', '8668791988', 'harishchandrejanardhan@gmail.com', '1972-01-01', 'khadambe', 'Harishchandre  Janardhan', 'Hero Honda', 'MH-14-AT-1488', '9439aec52eb100234ad0d3bf4471b575'),
(19, 'Harishchandre  Jyoti Janardhan', '7620087086', 'jyotiharishchandre@gmail.com', '1980-09-01', 'khadambe', 'jyoti', 'WAGNOR', 'MH-16-JD-7620', '1411a3e2bd0e7c77fd51adc1e17a834e'),
(21, 'harishchandre shambhu', '9359693135', 'shambhuharishchandre@gmail.com', '2004-07-24', 'rahuri', 'harishchandre shambhu', 'Thar', 'MH-17-1424', '332532dcfaa1cbf61e2a266bd723612c'),
(24, 'Harishchandre  shambhu Janardhan', '9359693135', 'shambhuharishchandre@gmail.com', '2004-07-24', 'khadambe kd tal:Rahuri dist:A.nagar', 'Harishchandre  shambhu Janardhan', 'Thar', 'MH-17-1424', '8157f4c374b1aed718d5c2ddea5baf3a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regester_details`
--
ALTER TABLE `regester_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `regester_details`
--
ALTER TABLE `regester_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
