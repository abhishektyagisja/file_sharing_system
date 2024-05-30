-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tra`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(303, 'abhishek.tyagi', '2024-04-12 16:59:47', 'logged In'),
(304, 'abhishek.tyagi', '2024-04-12 17:00:02', 'logged out'),
(305, 'abhishek.tyagi', '2024-04-12 17:41:25', 'logged In'),
(306, 'abhishek.tyagi', '2024-04-12 17:42:26', 'logged out'),
(307, 'mayank.sir', '2024-04-12 17:42:33', 'logged In'),
(308, 'mayank.sir', '2024-04-12 17:45:14', 'Registered new normal user - jugal.kishore  () Region'),
(309, 'mayank.sir', '2024-04-12 17:45:18', 'logged out'),
(310, 'abhishek.tyagi', '2024-04-12 17:45:36', 'logged In'),
(311, 'abhishek.tyagi', '2024-04-12 17:46:10', 'logged out'),
(312, 'jugal.kishore', '2024-04-12 17:47:50', 'logged In');

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` int(11) NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `dept`) VALUES
(1, 'computer'),
(2, 'science'),
(3, 'arts');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `filetype` varchar(100) NOT NULL,
  `sender` varchar(16) NOT NULL,
  `department` varchar(16) NOT NULL,
  `destination` varchar(16) NOT NULL,
  `dest_department` varchar(16) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp(),
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file2`
--

CREATE TABLE `file2` (
  `id` int(16) NOT NULL,
  `filetype` varchar(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `dest_department` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `emplnumber` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `online` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `username`, `password`, `firstname`, `lastname`, `emplnumber`, `status`, `department`, `dept_id`, `online`) VALUES
(81, 'mayank.sir', '123', 'mayank ', 'sir', '111111', 'administrator', '', 0, 'no'),
(82, 'jugal.kishore', '123', 'jugal', 'kishore', '111111', 'normal', 'arts', 3, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file2`
--
ALTER TABLE `file2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `file2`
--
ALTER TABLE `file2`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
