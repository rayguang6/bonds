-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:38 AM
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `title`, `description`, `date_time`) VALUES
(1, 'Electric Maintenance on 16 Jun', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nulla. Magnam, tenetur quae nemo nobis cumque, corrupti dolores totam qui consequatur iusto quibusdam? Neque, ratione eius, sit officiis laborum sequi repudiandae mollitia blanditiis inventore maiores est ullam quasi deleniti itaque modi, aspernatur pariatur hic! Perferendis quaerat exercitationem incidunt. Reprehenderit, dolor!\r\n\r\n', '2022-06-04 10:27:43'),
(2, 'Announcement Title\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nulla. Magnam, tenetur quae nemo nobis cumque, corrupti dolores totam qui consequatur iusto quibusdam? Neque, ratione eius, sit officiis laborum sequi repudiandae mollitia blanditiis inventore maiores est ullam quasi deleniti itaque modi, aspernatur pariatur hic! Perferendis quaerat exercitationem incidunt. Reprehenderit, dolor!\r\n\r\n', '2022-05-01 16:27:43'),
(3, 'New Announce', 'body', '2022-06-20 10:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `covidreport`
--

CREATE TABLE `covidreport` (
  `report_id` int(11) NOT NULL,
  `reporter_unit` varchar(20) NOT NULL,
  `report_type` varchar(20) NOT NULL,
  `report_for_status` varchar(30) NOT NULL,
  `evidence` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `active_cases` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreport`
--

INSERT INTO `covidreport` (`report_id`, `reporter_unit`, `report_type`, `report_for_status`, `evidence`, `date`, `active_cases`) VALUES
(101, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-01', 1),
(102, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-02', 2),
(103, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-02', 3),
(105, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-02', 4),
(106, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-03', 3),
(107, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-03', 2),
(108, 'D-4-04', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-03', 1),
(109, 'A-1-01', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-04', 0),
(110, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-04', 1),
(111, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-05', 2),
(112, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-05', 3),
(113, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-05', 3),
(114, 'D-4-04', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-06', 2),
(115, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-06', 3),
(116, 'B-2-02', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-06', 2),
(117, 'C-3-03', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-07', 1),
(118, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-07', 2),
(119, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-07', 3),
(120, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-08', 2),
(121, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-08', 1),
(122, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-09', 2),
(123, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-09', 1),
(124, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-10', 2),
(125, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-10', 3),
(201, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-11', 1),
(202, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-12', 2),
(203, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-12', 3),
(205, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-12', 4),
(206, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-13', 3),
(207, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-13', 2),
(208, 'D-4-04', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-13', 1),
(209, 'A-1-01', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-14', 0),
(210, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-14', 1),
(211, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-15', 2),
(212, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-15', 3),
(213, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-15', 3),
(214, 'D-4-04', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-16', 2),
(215, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-16', 3),
(216, 'B-2-02', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-16', 2),
(217, 'C-3-03', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-17', 1),
(218, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-17', 2),
(219, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-17', 3),
(220, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-18', 2),
(221, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-18', 1),
(222, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-19', 2),
(223, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-19', 1),
(224, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-20', 2),
(225, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-20', 3),
(301, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-21', 1),
(302, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-22', 2),
(303, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-22', 3),
(305, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-22', 4),
(306, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-23', 3),
(307, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-23', 2),
(308, 'D-4-04', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-23', 1),
(309, 'A-1-01', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-24', 0),
(310, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-24', 1),
(311, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-25', 2),
(312, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-25', 3),
(313, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-25', 3),
(314, 'D-4-04', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-26', 2),
(315, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-26', 3),
(316, 'B-2-02', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-26', 2),
(317, 'C-3-03', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-27', 1),
(318, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-27', 2),
(319, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-27', 3),
(320, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-28', 2),
(321, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-05-28', 1),
(322, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-29', 2),
(323, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-05-29', 1),
(324, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-30', 2),
(325, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-05-30', 3),
(1001, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-05', 1),
(1002, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-05', 2),
(1003, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-05', 3),
(1005, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-06', 4),
(1006, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-06', 3),
(1007, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-06-06', 2),
(1008, 'D-4-04', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-06', 1),
(1009, 'A-1-01', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-06-06', 0),
(1010, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-07', 1),
(1011, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-07', 2),
(1012, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-07', 3),
(1013, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-08', 3),
(1014, 'D-4-04', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-06-08', 2),
(1015, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-09', 3),
(1016, 'B-2-02', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-06-09', 2),
(1017, 'C-3-03', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-09', 1),
(1018, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-09', 2),
(1019, 'A-1-01', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-10', 3),
(1020, 'B-2-02', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-10', 2),
(1021, 'C-3-03', 'covid', 'Close Contact', 'assets/images/pcrtest.jpg', '2022-06-11', 1),
(1022, 'D-4-04', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-11', 2),
(1023, 'A-1-01', 'covid', 'Negative', 'assets/images/pcrtest.jpg', '2022-06-12', 1),
(1024, 'B-2-02', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-12', 2),
(1025, 'C-3-03', 'covid', 'Positive', 'assets/images/pcrtest.jpg', '2022-06-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE `explore` (
  `facility_addr` varchar(30) NOT NULL,
  `facility_name` varchar(50) NOT NULL,
  `facility_type` varchar(30) NOT NULL,
  `operating_time` varchar(30) NOT NULL,
  `operating_day` varchar(50) NOT NULL,
  `facility_status` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`facility_addr`, `facility_name`, `facility_type`, `operating_time`, `operating_day`, `facility_status`, `image`) VALUES
('A-03-G1', 'Gymnasium', 'sports', '10am - 11pm', 'Monday to Friday', 'Under Maintenance', 'https://media.istockphoto.com/photos/modern-gym-picture-id492061477?k=20&m=492061477&s=612x612&w=0&h=b_r1Ydu6FolOFQjV7INSIM0fOqO7HCQfUJx-Zb1QXP4='),
('A-03-P1', 'Park', 'leisure', '10am - 11pm', 'Monday to Friday', 'Opened', 'https://media.istockphoto.com/photos/the-parks-meadows-and-thick-woods-under-the-clear-sky-in-spring-picture-id1211975936?k=20&m=1211975936&s=612x612&w=0&h=DvSUQJ_ZI9yw8c0VN9FxRv73RIZ6v1RBqrlM6Uctf2c='),
('A-03-R1', 'Party Room', 'others', '10am - 11pm', 'Saturday to Sunday', 'Closed', 'https://media.istockphoto.com/photos/halloween-food-table-picture-id1183577476?k=20&m=1183577476&s=612x612&w=0&h=30lji704Yivz_72Uq0syZ7MNP8UQBVN53SJt1ageaUg='),
('A-03-S1', 'Swimming Pool', 'sports', '10am - 11pm', 'Saturday to Sunday', 'Opened', 'https://media.istockphoto.com/photos/swimming-pool-accented-with-a-waterfall-picture-id134108091?k=20&m=134108091&s=612x612&w=0&h=It4OD29epLpx3glQlVAckdezTu7dmdt-Ei3XoHfeFVw='),
('B-03-C1', 'Community Hall', 'others', '10am - 11pm', 'Saturday to Sunday', 'Under Maintenance', 'https://media.istockphoto.com/photos/committee-chairperson-presents-plan-for-beautification-at-homeowners-picture-id1158889642?k=20&m=1158889642&s=612x612&w=0&h=W62gu5jCoJuF_sH8agmN9o-6xQS273MtDmG0MKZCiWw='),
('C-03-A1', 'Playground', 'leisure', '10am - 11pm', 'Saturday to Sunday', 'Under Maintenance', 'https://media.istockphoto.com/photos/colorful-playground-equipment-picture-id898182848?k=20&m=898182848&s=612x612&w=0&h=LR0SnWTuQrEJGMaipiC8MP6dhF6GHpO3vOrQlquZnQE=');

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
  `vaccine_status` varchar(30) NOT NULL,
  `rental_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`ic`, `name`, `dob`, `gender`, `race`, `contact`, `emergency_contact`, `email`, `check_in_date`, `profile_pic`, `covid_status`, `password`, `vaccine_status`, `rental_status`) VALUES
('010616-14-1303', 'Lei Zhi Guanggg', '2001-06-16', 'Female', 'Chinese', '0136247251', '0166030616', 'leizhiguang1@gmail.com', '2022-05-09 04:45:14', 'assets/images/profile-image.png', 'Negative', 'password', '1st Dose', 'request to stop'),
('1', 'Miss Five', '2022-08-02', 'Other', 'Malay', '0123456789', '0135462722', 'missfive@gmail.com', '2022-06-02 00:07:48', 'assets/images/meColloseum.png', 'Negative', '1', '2nd Dose', 'renting'),
('2', 'Kobe Bryant', '2022-05-28', 'Male', 'Other', '011111', '1', 'kobe@lakers.com', '2022-05-28 08:48:04', 'assets/images/kobe.jpg', 'Positive', '2', '3rd Dose (Booster)', 'renting'),
('3', 'Kudou Shinyii', '2022-05-28', 'Male', 'Other', '48694869', '1', 'shinyi@conan.com', '2022-05-28 08:48:04', 'assets/images/conan.jpg', 'Positive', '3', 'Not Vaccinated At All', 'request to stop'),
('4', 'Zhang Ji Ke', '2022-05-28', 'Male', 'Chinese', '66666', '1', 'zhangjike@butterfly.com', '2022-05-28 08:48:04', 'assets/images/zhangjike.png', 'Positive', '4', '3rd Dose (Booster)', 'request to stop');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_no` varchar(10) NOT NULL,
  `owner_ic` varchar(20) NOT NULL,
  `car_park_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_no`, `owner_ic`, `car_park_id`) VALUES
('A-1-01', '1', '101'),
('A-2-02', '010616-14-1303', '202'),
('A-3-03', '', '303'),
('A-4-04', '', '404'),
('A-5-05', '505', '505'),
('B-2-02', '2', '111'),
('B-2-12', '6', '212'),
('B-3-13', '010205-07-0520', '313'),
('B-4-14', '010304-12-1232', '414'),
('B-5-15', '515', '515'),
('C-1-21', '5', '121'),
('C-2-22', '222', '222'),
('C-3-03', '3', '323'),
('C-4-24', '', '424'),
('C-5-25', '525', '525'),
('D-1-31', '131', '131'),
('D-2-32', '', '436'),
('D-3-33', '333', '333'),
('D-4-04', '4', '434'),
('D-5-35', '535', '535');

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
(3, 'A-1-01', 'Steve Job', '12123', '3123', 'Honda Jazz', '123abc', '2022-06-01 11:27:34', '2022-06-01 13:27:34', 5),
(5, 'A-1-01', 'aaaa', '123', '123', 'car', '12312', '2022-06-05 17:02:00', '2022-06-05 23:57:00', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ic`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `covidreport`
--
ALTER TABLE `covidreport`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`facility_addr`);

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
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `covidreport`
--
ALTER TABLE `covidreport`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;

--
-- AUTO_INCREMENT for table `visitorpass`
--
ALTER TABLE `visitorpass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
