-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 05:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `uid` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `computer_system_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `session` varchar(10) NOT NULL,
  `lab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`uid`, `student_id`, `computer_system_id`, `date`, `class`, `department`, `session`, `lab`) VALUES
(97, '927621bcs0', 32, '2023-09-03', 'CSE', 'cse-a', 'FN', 'virtusa'),
(98, '0027', 33, '2023-09-03', 'CSE', 'cse-a', 'FN', 'virtusa');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `uid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `curlab` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `complaint` mediumtext NOT NULL,
  `action` int(10) NOT NULL,
  `date` date NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`uid`, `name`, `curlab`, `type`, `complaint`, `action`, `date`, `id`) VALUES
(53, 'jegi', 'virtusa', 'Repair ', 'The A/C is not working correctly', 1, '2023-09-01', 'cse'),
(54, 'jegi', 'virtusa', 'Repair ', 'dfgfhjkl;l\'l;kjhugfdxghjkilko;lkhjughffdxghjkilk', 1, '2023-09-01', 'cse'),
(55, 'jegi', 'virtusa', 'Repair ', ';lkjhgfdccvgbhjkjhgfddfghjk', 0, '2023-09-01', 'cse'),
(57, 'jegi', 'virtusa', ' Request a new device ', 'nknm,n', 0, '2023-09-01', 'cse'),
(58, 'jegi', 'virtusa', ' Request a new device ', 'lsldldlflflflff', 0, '2023-09-01', 'cse'),
(59, 'jegi', 'virtusa', ' Request a new device ', 'dfdsdf', 0, '2023-09-01', 'cse'),
(61, 'jegi', 'virtusa', 'others ', 'asdfasdfas', 0, '2023-09-02', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `computer_systems`
--

CREATE TABLE `computer_systems` (
  `id` int(11) NOT NULL,
  `system_name` varchar(100) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `system_number` int(11) NOT NULL,
  `operating_system` varchar(50) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `last_maintenance_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer_systems`
--

INSERT INTO `computer_systems` (`id`, `system_name`, `lab_name`, `system_number`, `operating_system`, `purchase_date`, `last_maintenance_date`) VALUES
(1, 'asdfsadf', 'virtusa', 32, 'windows', '2023-09-01', '2023-09-20'),
(2, 'asdfasdfdsfsafasf', 'virtusa', 33, 'windows', '2023-09-05', '2023-09-07'),
(3, '888888888888888', 'virtusa', 85, 'windows', '2023-09-22', '2023-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `uid` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `name` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `design` varchar(30) NOT NULL,
  `doj` date NOT NULL,
  `active` int(10) NOT NULL,
  `curlab` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`uid`, `id`, `name`, `pass`, `design`, `doj`, `active`, `curlab`, `gender`, `address`, `phonenumber`, `photo`) VALUES
(1, 'cse', 'jegii', '55', 'lab incharge', '2023-09-03', 1, 'virtusa', 'Male', '6N2/202', '08072772581', 'images/profile/jegii.png'),
(2, 'admin', 'Jegan V C', '88', 'admin', '2023-09-01', 1, 'all', 'Male', '6N2/202', '08072772581', 'images/profile/Jegan V C.jpg'),
(3, 'durai', 'durai', '77', 'faculty', '2023-09-06', 1, 'faulty', 'male', 'otha', '8072772581', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `email`, `student_id`, `date_of_birth`, `enrollment_date`, `department`, `class`, `phone_number`, `address`) VALUES
(1, 'jegan', 'v c', '927621bcs046@mkce.ac.in', '927621bcs0', '2023-09-01', '2023-09-20', 'CSE', 'cse-a', '8072772584', 'ejaldfjasdkfjasd'),
(2, 'durai', 'murugan', 'adsfsadfsd', '0027', '2023-09-12', '2023-09-15', 'CSE', 'cse-a', '8072772581', 'asdfasdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `computer_system_id` (`computer_system_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `computer_systems`
--
ALTER TABLE `computer_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_system_number` (`system_number`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `computer_systems`
--
ALTER TABLE `computer_systems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD CONSTRAINT `attendance_records_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `attendance_records_ibfk_2` FOREIGN KEY (`computer_system_id`) REFERENCES `computer_systems` (`system_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
