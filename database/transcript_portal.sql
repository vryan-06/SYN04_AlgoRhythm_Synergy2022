-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 04:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transcript_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `roll_no` int(5) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL,
  `cgpa` float NOT NULL,
  `sgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`roll_no`, `f_name`, `l_name`, `branch`, `semester`, `cgpa`, `sgpa`) VALUES
(9149, 'Meet', 'Satra', 'Artificial Intelligence', 5, 9.62, 9.45),
(9432, 'Hisbaan', 'Sayed', 'Computer Engineering', 4, 9.21, 9.43);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `roll_no` int(5) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `student_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`roll_no`, `f_name`, `l_name`, `student_password`) VALUES
(9149, 'Meet', 'Satra', '91492'),
(9348, 'Akshit', 'G', '12389'),
(9432, 'Hisbaan', 'Sayed', '94321');

-- --------------------------------------------------------

--
-- Table structure for table `tpo_details`
--

CREATE TABLE `tpo_details` (
  `tpo_id` int(10) NOT NULL,
  `tpo_email` varchar(100) NOT NULL,
  `tpo_password` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpo_details`
--

INSERT INTO `tpo_details` (`tpo_id`, `tpo_email`, `tpo_password`) VALUES
(1, 'admin@something.com', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `tpo_details`
--
ALTER TABLE `tpo_details`
  ADD PRIMARY KEY (`tpo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpo_details`
--
ALTER TABLE `tpo_details`
  MODIFY `tpo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
