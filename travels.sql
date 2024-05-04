-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 03:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `datejourny` text NOT NULL,
  `datereturn` text NOT NULL,
  `fcity` varchar(30) NOT NULL,
  `fto` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nump` int(50) NOT NULL,
  `payment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `mname`, `lname`, `gender`, `age`, `mail`, `number`, `nation`, `state`, `city`, `pin`, `datejourny`, `datereturn`, `fcity`, `fto`, `address`, `nump`, `payment`) VALUES
(18, 'Shubham', 'Atul', 'Sontakke', 'Male', 20, '85prasadjain@gmail.com', '7666740724', 'India', 'Maharashtra', 'Jalgaon', '443104', '10-05-2022', '15-05-2022', 'Jalgaon', 'Pune', 'Buldhana', 5, 'Phone-Pay'),
(19, 'Ankit', 'Prashant', 'Patil', 'Male', 19, 'ankit@gmail.com', '1234567890', 'India', 'Maharashtra', 'Jalgaon', '443342', '15-6-2022', '20-07-2022', 'Jalgaon', 'Buldhan', 'Jalgaon', 1, 'Google-pay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
