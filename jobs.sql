-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2022 at 02:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE `functions` (
  `id` int(10) NOT NULL,
  `function` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`id`, `function`, `date`) VALUES
(1, 'Accounting Auditing and Finance', '11/Jan/2021'),
(2, 'Education', '11/Jan/2021'),
(3, 'Human Resource Management', '11/Jan/2021'),
(4, 'Human Resource Management', '11/Jan/2021'),
(5, 'Human Resource Management', '11/Jan/2021');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `company` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(10) NOT NULL,
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company`, `title`, `location`, `department`, `description`, `status`, `time`, `date`) VALUES
(1, 'Exploitechs Solutions', 'Web Developer', 'Lagos', 'Information Technology', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			\r\n			', 1, '10:11:04pm', '21/Nov/2020'),
(2, 'Government R A', 'Customer Care', 'Ijebu Igbo', 'Information Technology', 'lorem Ipsum pl-3 pr-3 pt-3pl-3 pr-3 pt-3pl-3 pr-3 pt-3pl-3 pr-3 pt-3pl-3 pr-3 pt-3pl-3 pr-3 pt-3pl-3 pr-3 pt-3\r\n', 1, '01:00:28am', '11/Jan/2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `employees` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `dob`, `number`, `gender`, `state`, `nationality`, `qualification`, `function`, `experience`, `availability`, `cv`, `company`, `industry`, `employees`, `type`, `website`, `phone`, `address`, `status`, `date`) VALUES
(1, 'Akeem', 'Olayiwola', 'principle@gmail.com', '9000Naira', '2020-11-06', '08145864549', 'Male', 'Oyo', 'Togo', 'HND', 'Human Resources', '0 - 5 Years', '2 Months', '', '', '', '', '', '', '', '', 2, '09:48:13pm 23/Nov/2020'),
(2, 'Adewolu', 'OBA Adegoroye', 'akeem@gmail.com', '9000Naira', '2020-10-28', '08145864549', 'Male', 'Rivers', 'Nigeria', 'Mphil/PhD', 'Food Services & Catering', '6 - 10 Years', '1 Week', 'alhikmah.pdf', '', '', '', '', '', '', '', 0, '09:50:22pm 23/Nov/2020'),
(8, 'Akeem', 'Olayiwola', 'principle1@gmail.com', '123456', '', '08145864549', '', '', 'Nigeria', '', '', '', '', '', 'Exploitechs Solutions', 'Enforcement and Securities', '5-10', 'Recruitment Agency', 'www.forjobonly.com', '2348145864549', 'Igbogbo area, Ikorodu, Lagos.', 1, '08:46:23am 28/Nov/2020'),
(9, 'Horpeyemi', 'lukman', 'hikmahlook6002@gmail.com', 'hikmanlukmah2006', '2006-05-05', '+2347086481270', 'Female', 'Kwara', 'Nigeria', 'HND', 'Health & safety', '11 - 15 Years', '2 Months', 'TOMINI.docx', '', '', '', '', '', '', '', 0, '07:23:07pm 01/Dec/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `functions`
--
ALTER TABLE `functions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
