-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 06:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(9) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_contact` bigint(15) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_contact`, `a_email`, `a_username`, `a_password`, `a_flag`) VALUES
(1, 'Nargide Harsh Rajesh', 7249861080, 'nargideharsh@gmail.com', 'harshnargide', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(9) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_department` text NOT NULL,
  `s_year` varchar(10) NOT NULL,
  `s_div` text NOT NULL,
  `s_roll_no` int(9) NOT NULL,
  `s_contact` bigint(15) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_is` text NOT NULL,
  `s_type` varchar(30) NOT NULL,
  `s_status` varchar(30) NOT NULL,
  `s_complaint_about` varchar(100) NOT NULL,
  `s_complaint_description` varchar(500) NOT NULL,
  `s_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_department`, `s_year`, `s_div`, `s_roll_no`, `s_contact`, `s_email`, `s_is`, `s_type`, `s_status`, `s_complaint_about`, `s_complaint_description`, `s_flag`) VALUES
(1, 'ABC DEF GHI', 'CSE', '1st', 'A', 50, 1111111111, 'a@g.com', 'Hostellite', 'Non-Acedemic Grievance', 'Completed', 'Issues related to Hostels', 'Hostels are not clean, wifi service disconnects many times,', 0),
(2, 'JKL MNO PQR', 'E&TC', '2nd', 'B', 40, 2222222222, 'b@g.com', 'Hostellite', 'Non-Acedemic Grievance', 'Under Action', 'Issues related to Canteen', 'canteen provides very low quality food & they are not clean\r\n', 0),
(3, 'STU VWX YZ', 'MECH', '3rd', 'A', 45, 33333333333, 'c@gmail.com', 'Localite', 'Acedemic Grievance', 'Completed', 'Issues related to subject teacher', 'We are unable tu understand what teachers teach us, and teaching speed is very fast', 0),
(4, 'QWE RTY UIO', 'MECH', '4th', 'B', 75, 444444444444, 'd@g.com', 'Localite', 'Acedemic Grievance', 'Rejected', 'Issues related to Sports', 'Groud is not good for practice and unavalibility of sport kits', 0),
(5, 'ASD FGH JKL', 'CIVIL', '3rd', 'B', 43, 5555555555, 'e@g.com', 'Localite', 'Requirements Grievance', '', 'Issues related to transport facility', 'College bus facility is not available for localite students, it is inconvenience for localite students\r\n', 0),
(6, 'Pradnesh', 'CSE', '3rd', 'B', 69, 1234567890, 'p@gmail.com', 'Hostellite', 'Requirements Grievance', '', 'Wifi', 'Wifi in hostel', 0),
(7, 'Harsh Rajesh Nargide', 'CIVIL', '3rd', 'A', 45, 1111111111, 'harshrnargide@coep.sveri.ac.in', 'Localite', 'Acedemic Grievance', 'Completed', 'Wifi', 'dfdgdsf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
