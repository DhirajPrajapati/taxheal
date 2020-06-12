-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 01:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax_heal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `app_form`
--

CREATE TABLE `app_form` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `Hq` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_form`
--

INSERT INTO `app_form` (`id`, `fname`, `mname`, `lname`, `mother_name`, `email`, `birth_date`, `age`, `address`, `city`, `pin_code`, `state`, `ssc`, `hsc`, `Hq`, `skills`, `work_exp`, `exp`, `company`, `department`, `position`) VALUES
(1, 'test', 'test', 'test', 'test', 'test@gmail.com', '2020-06-03', '20', 'Hii  there', 'test', 'test', 'test', '70', '70', 'graduate', 'test', 'fresher', '0', 'test', 'test', 'test'),
(2, 'test', 'test', 'test', 'test', 'test@gmail.com', '2020-06-03', '20', 'Hii  there', 'test', 'test', 'test', '70', '70', 'graduate', 'test', 'fresher', '0', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'test', 'test@gmail.com', 'hii'),
(2, 'test', 'test@gmail.com', 'hii'),
(3, 'test', 'test@gmail.com', 'hii there'),
(4, 'test1', 'test@gmail.com', 'hii'),
(5, 'test2', 'test2@gmail.com', 'hiii'),
(6, 'test3', 'test3@gmail.com', 'hiii'),
(7, 'dhiraj', 'd@gmail.com', 'hiii'),
(8, 'dhiraj', 'd2@gmail.com', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `network_form`
--

CREATE TABLE `network_form` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `Hq` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `web_form`
--

CREATE TABLE `web_form` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `Hq` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_form`
--

INSERT INTO `web_form` (`id`, `fname`, `mname`, `lname`, `mother_name`, `email`, `birth_date`, `age`, `address`, `city`, `pin_code`, `state`, `ssc`, `hsc`, `Hq`, `skills`, `work_exp`, `exp`, `company`, `department`, `position`) VALUES
(1, 'test', 'test', 'test', 'test', 'test@gmail.com', '2020-06-16', '20', 'Hii  there', 'test', 'test', 'test', '70', '70', 'ssc', 'test', 'fresher', '0', 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_form`
--
ALTER TABLE `app_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `network_form`
--
ALTER TABLE `network_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_form`
--
ALTER TABLE `web_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_form`
--
ALTER TABLE `app_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `network_form`
--
ALTER TABLE `network_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_form`
--
ALTER TABLE `web_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
