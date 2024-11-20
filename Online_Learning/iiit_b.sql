-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 11:10 AM
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
-- Database: `iiit_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve_user`
--

CREATE TABLE `approve_user` (
  `username` varchar(50) NOT NULL,
  `mrms` text NOT NULL,
  `schno` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `jeerank` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `year` int(5) NOT NULL,
  `semester` int(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `section` int(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approve_user`
--

INSERT INTO `approve_user` (`username`, `mrms`, `schno`, `name`, `father`, `address`, `gender`, `jeerank`, `email`, `phone`, `department`, `branch`, `year`, `semester`, `course`, `section`, `password`) VALUES
('', 'Mr', 118, 'Krishna', 'kabir ', 'UP', 'Male', 10000, 'krishna@gmail.com', 1234, 'IT', 'IT', 0, 1, 'B.tech', 2, '1234'),
('', 'Mr', 121, 'Mukul', 'Pramod', 'UP', 'Male', 1234, 'mukuliiitb@gmail.com', 12345, 'CSE', 'CSE', 0, 6, 'B.tech', 1, '1234'),
('', 'Ms', 123, 'Ashi', 'anil', 'Luknow', 'Male', 462, 'ashi@gmail.com', 1234, 'CSE', 'CSE', 0, 1, 'B.tech', 2, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `subcode` varchar(50) NOT NULL,
  `subname` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `semester` int(50) DEFAULT NULL,
  `facname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`subcode`, `subname`, `department`, `course`, `section`, `semester`, `facname`) VALUES
('CSE111', 'EP', 'CSE', 'B.tech', '1', 1, 'Dr. Deepika'),
('CSE322', 'DWDN', 'CSE', 'B.tech', '2', 7, 'Dr. RK'),
('CSE324', 'AI', 'CSE', 'MCA', '3', 6, 'Dr. RK'),
('CSE329', 'CIS', 'CSE', 'B.tech', '2', 7, 'Dr. Dheerendra Mishra'),
('CSE501', 'ADBMS', 'CSE', 'M.tech', '3', 7, 'Dr. A Bhagat'),
('IT303', 'IOT', 'IT', 'B.tech', '1', 7, 'Dr. Vijay Bhaskar Sir');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `schno` int(50) NOT NULL,
  `facname` varchar(50) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` int(10) NOT NULL,
  `q7` int(10) NOT NULL,
  `q8` int(10) NOT NULL,
  `q9` int(10) NOT NULL,
  `q10` int(10) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`schno`, `facname`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `comments`) VALUES
(11, 'Dr. RK', 4, 7, 5, 9, 8, 6, 6, 7, 5, 8, 'Good'),
(94, 'Dr. A Bhagat', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ''),
(94, 'Dr. RK', 5, 7, 5, 9, 7, 6, 6, 7, 5, 8, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `std_result`
--

CREATE TABLE `std_result` (
  `subname` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `schno` int(50) NOT NULL,
  `mini` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `end_term` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_result`
--

INSERT INTO `std_result` (`subname`, `subcode`, `schno`, `mini`, `mid`, `assignment`, `end_term`, `grade`) VALUES
('DWDN', 'CSE322', 94, 10, 20, 10, 60, 'A+'),
('DWDN', 'CSE322', 125, 10, 20, 10, 60, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(50) NOT NULL,
  `id` int(20) NOT NULL,
  `name` varchar(38) DEFAULT NULL,
  `email` varchar(38) NOT NULL,
  `phone` int(38) DEFAULT NULL,
  `department` varchar(38) DEFAULT NULL,
  `webpage` varchar(10000) NOT NULL,
  `description` varchar(38) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `id`, `name`, `email`, `phone`, `department`, `webpage`, `description`, `image`, `password`) VALUES
('rahuliiitb', 14, 'Dr. RK', 'rkiiitb@gmail.com', 563612, 'CSE', 'https://pramod-tejra-portfolio.netlify.app/', '', '', '1234'),
('', 17, 'Dr. Dheendra', 'dheendraiiitb@gmail.com', 2147483647, 'CSE', 'https://pramod-tejra-portfolio.netlify.app/', 'very good', './image/pngegg (2).png', '1234'),
('', 20, 'Dr. NK', 'nkiiitb@gmail.com', 123456, 'CSE', 'https://pramod-tejra-portfolio.netlify.app/', 'very good', './image/pngegg (2).png', '1234'),
('', 22, 'Dr. Yatendra Sahu', 'yatednraiiitb@gmail.com', 12345, 'CSE', 'https://pramod-tejra-portfolio.netlify.app/', 'very good', './image/pngegg (2).png', '1234'),
('', 23, 'Dr. NKS', 'nksiiitb@gmail.com', 1234567, 'CSE', 'https://pramod-tejra-portfolio.netlify.app/', 'very good', './image/pngegg (2).png', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 12345678, 'admin@gmail.com', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_std`
--

CREATE TABLE `user_std` (
  `username` varchar(50) NOT NULL,
  `mrms` text NOT NULL,
  `schno` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `jeerank` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `year` int(5) NOT NULL,
  `semester` int(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve_user`
--
ALTER TABLE `approve_user`
  ADD PRIMARY KEY (`schno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`schno`,`facname`);

--
-- Indexes for table `std_result`
--
ALTER TABLE `std_result`
  ADD PRIMARY KEY (`subcode`,`schno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_std`
--
ALTER TABLE `user_std`
  ADD PRIMARY KEY (`schno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve_user`
--
ALTER TABLE `approve_user`
  MODIFY `schno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_std`
--
ALTER TABLE `user_std`
  MODIFY `schno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
