-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 12:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agromanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `cropdb`
--

CREATE TABLE `cropdb` (
  `c_id` int(15) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `rate` int(30) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cropdb`
--

INSERT INTO `cropdb` (`c_id`, `c_name`, `rate`, `f_name`, `f_contact`) VALUES
(1, 'Maize', 80, 'Sumukha K', '9876543216'),
(2, 'Rice', 40, 'Sumukha K', '9876543216'),
(4, 'Jeera', 120, 'Sumukha K', '9887632113'),
(5, 'Jaggery', 50, 'Sumukha K', '9876543216'),
(6, 'Corn', 100, 'Sumukha K', '9876543216'),
(7, 'Bele', 180, 'Sumukha K', '9876543216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cropdb`
--
ALTER TABLE `cropdb`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cropdb`
--
ALTER TABLE `cropdb`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
