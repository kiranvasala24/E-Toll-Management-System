-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 05:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `numberplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `numberplate`
--

CREATE TABLE `numberplate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `licence` varchar(255) NOT NULL,
  `car_no` varchar(255) NOT NULL,
  `balance` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberplate`
--

INSERT INTO `numberplate` (`id`, `name`, `licence`, `car_no`, `balance`, `timestamp`) VALUES
(1, 'Darshak', '1234567890', 'H12DE1433', 580, '2020-01-08 06:36:43'),
(2, 'mussi', '1234567890asbc', 'DL7CQ1939', 150, '2020-02-23 06:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminuser`
--

CREATE TABLE `tbl_adminuser` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL DEFAULT '',
  `admin_email` varchar(255) NOT NULL DEFAULT '',
  `admin_username` varchar(255) NOT NULL DEFAULT '',
  `admin_password` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL,
  `is_active` char(3) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminuser`
--

INSERT INTO `tbl_adminuser` (`admin_id`, `admin_name`, `admin_email`, `admin_username`, `admin_password`, `type`, `is_active`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'admin', '1'),
(2, 'darshak', 'darshakg81@gmail.com', 'darshak', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user', '1'),
(3, 'Test', 'test@gmail.com', 'test', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user', '1'),
(4, 'mussi', 'mustaqeem2602@gmail.com', 'mustaqeem2602', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tollamount`
--

CREATE TABLE `tollamount` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tollamount`
--

INSERT INTO `tollamount` (`id`, `user`, `amount`, `timestamp`) VALUES
(1, 'Darshak', 10, '2020-01-08 20:16:57'),
(2, 'Darshak', 10, '2020-02-09 08:51:56'),
(3, 'Darshak', 10, '2020-02-09 08:52:12'),
(4, 'Darshak', 10, '2020-02-09 08:52:54'),
(5, 'Darshak', 10, '2020-02-09 08:53:11'),
(6, 'Darshak', 10, '2020-02-09 08:54:50'),
(7, 'Darshak', 10, '2020-02-23 06:51:37'),
(8, 'Darshak', 10, '2020-02-23 09:14:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `numberplate`
--
ALTER TABLE `numberplate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_no` (`car_no`);

--
-- Indexes for table `tbl_adminuser`
--
ALTER TABLE `tbl_adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tollamount`
--
ALTER TABLE `tollamount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numberplate`
--
ALTER TABLE `numberplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_adminuser`
--
ALTER TABLE `tbl_adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tollamount`
--
ALTER TABLE `tollamount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
