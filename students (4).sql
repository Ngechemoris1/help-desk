-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`, `profilepic`) VALUES
(1, 'admin', '1234', 'picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, '00100 Northern Bypass Road, Intersection, Kenya', 'wenbusale383@gmail.com', '0769525570');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `dateposted` varchar(100) NOT NULL,
  `timeposted` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `dateposted`, `timeposted`, `status`) VALUES
(1, 'winslause Busale ', 'wenbusale383@gmail.com', '0769525570', 'hello', '2023-07-02', '14:29:32', 1),
(2, 'Winslause SHIOSO', 'wenbusale383@gmail.com', '769525570', 'hello', '2023-07-02', '14:40:02', 0),
(3, 'Winslause SHIOSO', 'wenbusale383@gmail.com', '769525570', 'i want to complain about something', '2023-07-02', '14:58:08', 0),
(4, 'Winslause SHIOSO', 'wenbusale383@gmail.com', '769525570', 'i want to complain about something', '2023-07-02', '14:58:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`id`, `course`) VALUES
(3, 'Information Technology'),
(4, 'COMP'),
(5, 'Science'),
(10, 'Pure and Applied Science'),
(11, 'Business'),
(12, 'health'),
(13, 'Mathmatics ');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

CREATE TABLE `tblprofile` (
  `id` int(11) NOT NULL,
  `profilepicture` varchar(200) NOT NULL,
  `emailnumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprofile`
--

INSERT INTO `tblprofile` (`id`, `profilepicture`, `emailnumber`) VALUES
(1, 'pic.jpg', 'daniel@gmail.com'),
(2, 'pic.jpg', 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `id` int(11) NOT NULL,
  `datereported` varchar(100) NOT NULL,
  `timereported` varchar(100) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `datechecked` varchar(100) NOT NULL,
  `timechecked` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `pic` varchar(120) NOT NULL,
  `problempicture` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`id`, `datereported`, `timereported`, `problem`, `datechecked`, `timechecked`, `status`, `comments`, `pic`, `problempicture`, `email`) VALUES
(6, '2023-06-17', '12:05', 'Hello, my pc broke its screen. i need help', '2023-06-18', '2023-06-18', 1, 'Your pc is now okay', '', '', 'wenbusale383@gmail.com'),
(7, '2023-06-17', '12:05', 'Can you help me set up my desktop', '2023-06-18', '2023-06-18', 1, 'hello', '', '', 'wenbusale383@gmail.com'),
(8, '2023-06-18', '18:31', 'i have another problem', '', '', 0, '', '', '', 'wenbusale383@gmail.com'),
(9, '2023-06-18', '18:31', 'i have another problem', '2023-06-29', '2023-06-29', 1, 'feufhefegfefiycve', '', '', 'wenbusale383@gmail.com'),
(12, '2023-06-30', '09:04', 'hello', '', '', 0, '', '', '', 'wenbusale383@gmail.com'),
(13, '2023-06-30', '09:06', 'hello', '2023-06-30', '23:11:29', 1, 'Last try, hope this works', '', '', 'wenbusale383@gmail.com'),
(14, '2023-06-30', '09:07', 'hello', '2023-06-30', '23:02:45', 1, 'again', '', '', 'wenbusale383@gmail.com'),
(15, '2023-06-30', '09:07', 'hello', '2023-06-30', '23:01', 1, 'iko sawa?', '', '', 'wenbusale383@gmail.com'),
(16, '2023-06-30', '09:12', 'hello', '2023-06-30', '23:00', 1, 'confirm', '', '', 'wenbusale383@gmail.com'),
(17, '2023-06-30', '09:38', 'Good morning, my laptop cant start. dispalys a black screen but light on buttons.', '2023-06-30', '2023-06-30', 1, 'Try to remove your ram and inserting it again.', '', '', 'omondi@gmail.com'),
(18, '2023-06-30', '09:53', 'hello', '2023-06-30', '22:58:37', 1, 'check this', '', '', 'omondi@gmail.com'),
(19, '2023-06-30', '09:54', 'i need ', '2023-06-30', '22:57:29', 1, 'testing for the last time', '', '', 'omondi@gmail.com'),
(20, '2023-06-30', '10:38', 'testing time', '2023-06-30', '2023-06-30', 1, 'confirm if working', '', '', 'wenbusale383@gmail.com'),
(21, '2023-06-30', '23:14:54', 'Testing time', '', '', 0, '', '', '', 'wenbusale383@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `numberid` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profilep` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `fullname`, `numberid`, `email`, `password`, `department`, `jobtitle`, `phone`, `gender`, `profilep`) VALUES
(1, 'Winslause SHIOSO', 8273653, 'kevin@gmail.com', 'f534840f6d9ad80ddf580bdaa5eccbf9', 'Computer', 'fundi', 0, 'MALE', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `anumber` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `idnumber` int(14) NOT NULL,
  `phone` int(14) NOT NULL,
  `profilep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `fname`, `anumber`, `email`, `password`, `department`, `course`, `gender`, `idnumber`, `phone`, `profilep`) VALUES
(11, 'Winslause SHIOSO', 'PA106/G/7920/19', 'wenbusale383@gmail.com', '105a700ed697d6d352fc2e22e0e60b4d', 'Information Technology', 'Computer Studies', 'MALE', 8273653, 769525570, ''),
(12, 'omosh junior', 'PA106/G/7920/19', 'omondi@gmail.com', '7840c49cc76b94a7b89d018d91597820', 'Pure and Applied Science', 'Computer', 'MALE', 8273653, 769525570, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `emailn` varchar(100) NOT NULL,
  `pdate` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `emailn`, `pdate`) VALUES
(5, 'wenbusale383@gmail.com', '2023-07-02'),
(7, 'wenbusale383@gmail.com', '2023-07-02'),
(8, 'wenbusale383@gmail.com', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `UserEmail` varchar(120) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `datereported` varchar(120) NOT NULL,
  `timereported` varchar(100) NOT NULL,
  `Testimonial` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `fullname`, `UserEmail`, `phone`, `datereported`, `timereported`, `Testimonial`, `status`) VALUES
(3, 'Winslause SHIOSO', 'wenbusale383@gmail.com', '769525570', '2023-07-02', '17:13:30', 'test again', 0),
(4, 'Winslause SHIOSO', 'wenbusale383@gmail.com', '769525570', '2023-07-02', '17:15:11', 'another', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprofile`
--
ALTER TABLE `tblprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblprofile`
--
ALTER TABLE `tblprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
