-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 11:58 AM
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
  `evidence` blob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreport`
--

INSERT INTO `covidreport` (`report_id`, `reporter_unit`, `report_type`, `report_for_status`, `evidence`, `date`) VALUES
(16, 'A-1-01', 'covid', 'Close Contact', 0x433a557365727341434552446f63756d656e747358414d5050096d70706870314537412e746d70, '2022-06-20'),
(17, 'A-1-01', 'covid', 'Close Contact', 0x65766964656e6365, '2022-06-05'),
(18, 'A-1-01', 'covid', 'Negative', 0x65766964656e6365, '2022-06-05');

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
('010616-14-1303', 'Lei Zhi Guang', '2001-06-16', 'Female', 'Chinese', '0136247251', '0166030616', 'leizhiguang1@gmail.com', '2022-05-09 04:45:14', 'assets/images/profile-image.png', 'Negative', 'letmein', '1st Dose', 'renting'),
('1', 'Miss Five', '2022-08-02', 'Other', 'Malay', '0123456789', '0135462722', 'missfive@gmail.com', '2022-06-02 00:07:48', 'assets/images/profile-image.png', 'Positive', '1', '2nd Dose', 'renting'),
('2', 'Kobe Bryant', '2022-05-28', 'Male', 'Other', '011111', '1', 'kobe@lakers.com', '2022-05-28 08:48:04', 'assets/images/kobe.jpg', 'Negative', '2', '3rd Dose (Booster)', 'renting'),
('3', 'Kudou Shinyii', '2022-05-28', 'Male', 'Other', '48694869', '1', 'shinyi@conan.com', '2022-05-28 08:48:04', 'assets/images/conan.jpg', 'Negative', '3', 'Not Vaccinated At All', 'request to stop'),
('4', 'Zhang Ji Ke', '2022-05-28', 'Male', 'Chinese', '66666', '1', 'zhangjike@butterfly.com', '2022-05-28 08:48:04', 'assets/images/zhangjike.png', 'Close Contact', '4', '3rd Dose (Booster)', 'request to stop');

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
('A-3-03', '2', '303'),
('A-4-04', '3', '404'),
('A-5-05', '505', '505'),
('B-1-11', '4', '111'),
('B-2-12', '6', '212'),
('B-3-13', '010205-07-0520', '313'),
('B-4-14', '010304-12-1232', '414'),
('B-5-15', '515', '515'),
('C-1-21', '5', '121'),
('C-2-22', '222', '222'),
('C-3-23', '', '323'),
('C-4-24', '', '424'),
('C-5-25', '525', '525'),
('D-1-31', '131', '131'),
('D-2-32', '', ''),
('D-3-33', '333', '333'),
('D-4-34', '434', '434'),
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
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `visitorpass`
--
ALTER TABLE `visitorpass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
