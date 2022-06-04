-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 06:40 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ic` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ic`, `password`) VALUES
('111', '111'),
('123', 'admin'),
('123123', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `covidreport`
--

CREATE TABLE `covidreport` (
  `report_id` int(11) NOT NULL,
  `reporter_unit` varchar(20) NOT NULL,
  `report_type` varchar(20) NOT NULL,
  `report_for_status` varchar(30) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreport`
--

INSERT INTO `covidreport` (`report_id`, `reporter_unit`, `report_type`, `report_for_status`, `evidence`, `date`) VALUES
(2, '', 'covid', 'Close Contact', 'evidence', '2022-06-03'),
(3, '', 'covid', 'Negative', 'evidence', '2022-06-10'),
(4, '', 'covid', 'Positive', 'evidence', '2022-06-09'),
(5, '', 'covid', 'Close Contact', 'evidence', '2022-06-03'),
(6, 'A-1-01', 'covid', 'Positive', 'evidence', '2022-05-31'),
(7, '', 'covid', 'Close Contact', 'evidence', '2022-07-09'),
(8, '', 'covid', 'Close Contact', 'evidence', '2022-06-17'),
(9, 'A-1-01', 'covid', 'Close Contact', 'evidence', '0000-00-00'),
(10, '', 'covid', 'Close Contact', 'evidence', '2022-05-01'),
(11, 'A-1-01', 'covid', 'Positive', 'evidence', '2022-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `ic` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `race` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `emergency_contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `check_in_date` datetime NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `covid_status` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vaccine_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`ic`, `name`, `dob`, `gender`, `race`, `contact`, `emergency_contact`, `email`, `check_in_date`, `profile_pic`, `covid_status`, `password`, `vaccine_status`) VALUES
('010616-14-1303', 'Lei Zhi Guang', '2001-06-16', 'Female', 'Chinese', '0136247251', '0166030616', 'leizhiguang1@gmail.com', '2022-05-09 04:45:14', 'assets/images/profile-image.png', 'Negative', 'letmein', '1st Dose'),
('1', 'Miss Five', '2022-08-02', 'Other', 'Malay', '0123456789', '0135462722', 'missfive@gmail.com', '2022-06-02 00:07:48', 'assets/images/profile-image.png', 'Positive', '1', '2nd Dose'),
('2', 'Kobe Bryant', '2022-05-28', 'Male', 'Other', '011111', '1', 'kobe@lakers.com', '2022-05-28 08:48:04', 'assets/images/kobe.jpg', 'Negative', '2', '3rd Dose (Booster)'),
('3', 'Kudou Shinyii', '2022-05-28', 'Male', 'Other', '48694869', '1', 'shinyi@conan.com', '2022-05-28 08:48:04', 'assets/images/conan.jpg', 'Negative', '3', 'Not Vaccinated At All'),
('4', 'Zhang Ji Ke', '2022-05-28', 'Male', 'Chinese', '66666', '1', 'zhangjike@butterfly.com', '2022-05-28 08:48:04', 'assets/images/zhangjike.png', 'Close Contact', '4', '3rd Dose (Booster)');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_no` varchar(10) NOT NULL,
  `rental` varchar(20) NOT NULL,
  `owner_ic` varchar(20) NOT NULL,
  `car_park_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_no`, `rental`, `owner_ic`, `car_park_id`) VALUES
('A-1-01', '1000', '1', '101'),
('A-2-02', '2000', '010616-14-1303', '202'),
('A-3-03', '500', '2', '303'),
('A-4-04', 'rent', '3', '404'),
('A-5-05', 'rent', '505', '505'),
('B-1-11', 'rent', '4', '111'),
('B-2-12', 'rent', '6', '212'),
('B-3-13', 'pause', '010205-07-0520', '313'),
('B-4-14', 'rent', '010304-12-1232', '414'),
('B-5-15', 'rent', '515', '515'),
('C-1-21', 'rent', '5', '121'),
('C-2-22', 'rent', '222', '222'),
('C-3-23', 'rent', '', '323'),
('C-4-24', 'rent', '', '424'),
('C-5-25', 'rent', '525', '525'),
('D-1-31', 'rent', '131', '131'),
('D-2-32', 'rent', '', ''),
('D-3-33', 'rent', '333', '333'),
('D-4-34', 'rent', '434', '434'),
('D-5-35', 'rent', '535', '535');

-- --------------------------------------------------------

--
-- Table structure for table `visitorpass`
--

CREATE TABLE `visitorpass` (
  `pass_id` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `visitor_name` varchar(50) NOT NULL,
  `visitor_ic` varchar(20) NOT NULL,
  `visitor_contact` varchar(20) NOT NULL,
  `car_details` varchar(50) NOT NULL,
  `car_plate` varchar(15) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `visitor_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitorpass`
--

INSERT INTO `visitorpass` (`pass_id`, `unit`, `visitor_name`, `visitor_ic`, `visitor_contact`, `car_details`, `car_plate`, `start_time`, `end_time`, `visitor_num`) VALUES
(1, 'A-1-01', 'Elon Musk', '111111-22-3333', '013-1231333', 'Perodua Axia Red', 'MUSK1234', '2022-06-04 09:00:00', '2022-06-04 13:00:00', 1),
(2, 'A-1-01', 'Bill Gate', '1', '123', 'carr', '123', '2022-06-05 11:27:34', '2022-06-06 11:27:34', 2),
(3, 'A-1-01', 'Steve Job', '12123', '3123', 'Honda Jazz', '123abc', '2022-06-01 11:27:34', '2022-06-01 13:27:34', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ic`);

--
-- Indexes for table `covidreport`
--
ALTER TABLE `covidreport`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`ic`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_no`);

--
-- Indexes for table `visitorpass`
--
ALTER TABLE `visitorpass`
  ADD PRIMARY KEY (`pass_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covidreport`
--
ALTER TABLE `covidreport`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitorpass`
--
ALTER TABLE `visitorpass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
