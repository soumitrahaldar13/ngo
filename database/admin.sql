-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 06:30 PM
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `GEM_NO` varchar(100) NOT NULL,
  `GEM_Date` date DEFAULT NULL,
  `VENDOR_NAME` varchar(100) NOT NULL,
  `BRAND_NAME` varchar(100) NOT NULL,
  `Serial_Number` varchar(100) NOT NULL,
  `Model_No` varchar(100) NOT NULL,
  `Delivery_Date` date DEFAULT NULL,
  `Problem` varchar(100) NOT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `Defunct` varchar(2) NOT NULL,
  `is_amc` tinyint(1) NOT NULL,
  `ewaste` tinyint(1) NOT NULL,
  `SSD_Capacity` varchar(100) NOT NULL,
  `HDD_Capacity` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `Processor_Base_Frequency` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `Optical_Drive` varchar(100) NOT NULL,
  `Graphic_Card` varchar(100) NOT NULL,
  `Wireless` varchar(100) NOT NULL,
  `OS` varchar(100) NOT NULL,
  `OS_Serial_no` varchar(100) NOT NULL,
  `ChipSet_Number` varchar(100) NOT NULL,
  `upgrade` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `select_item` varchar(100) NOT NULL,
  `monitor_size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `pin` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `Amount` varchar(111) NOT NULL,
  `status` varchar(1) NOT NULL,
  `razorpay_payment_id` varchar(1000) NOT NULL,
  `order_id` varchar(1000) NOT NULL,
  `pay_status` varchar(1000) NOT NULL,
  `PAN` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `email`, `mobile`, `address`, `pin`, `city`, `state`, `date`, `Amount`, `status`, `razorpay_payment_id`, `order_id`, `pay_status`, `PAN`) VALUES
(5, 'a', 'b', 'c', 'd', 'e', 'f', 'g', '2022-11-18 23:02:11', '31', '0', '', '', '', ''),
(6, 'a', 'b', 'c', 'd', 'e', 'f', 'g', '2022-11-18 23:03:28', '46', '0', '', '', '', ''),
(7, '1', '2', '3', '4', '5', '6', '7', '2022-11-18 23:03:41', '22', '0', '', '', '', ''),
(8, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'kolkata', '700094', 'kolkata', 'west bengal', '2022-11-19 16:10:02', '51', '0', '', '', '', ''),
(9, 'Soumitra Haldar', 's@gmail.com', '08436965592', 'Jadavpur Employees Housing Co Op Society  , Pancha Sayar', '700094', 'kolkata', 'West Bengal', '2022-11-20 22:54:00', '58', '1', '', '', '', ''),
(10, 'Soumitra Haldar111', '2222222', '08436965592', 'Jadavpur Employees Housing Co Op Society  , Pancha Sayar', '700094', 'kolkata', 'West Bengal', '2022-12-28 19:11:28', '60', '1', '', '', '', ''),
(11, 'abc', 'abc@gmail.com', '1234567890', 'abc', '123456', 'kol', 'wb', '2023-01-04 10:12:36', '288', '1', 'pay_L00cTW2brRoEow', 'order_L00bgCalMVRHZu', 'success', ''),
(12, 'sudwip', 'sudwip@gmail.com', '123456790', 'ABC', '700094', 'kolkata', 'wb', '2023-01-04 10:18:09', '88', '0', 'pay_L031p6rR8CiPyL', 'order_L031IVidkLG68A', 'success', ''),
(13, 'abc', 'abbb@gmail.com', '11111111111', 'fefefffef', '1111111', 'fefffefef', 'wb', '2023-01-04 10:25:02', '222', '1', 'pay_L03961XoGaGCZ8', 'order_L038cMyPyfVrp4', 'success', ''),
(14, 'abc', 'abbb@gmail.com', '11111111111', 'fefefffef', '1111111', 'fefffefef', 'wb', '2023-01-04 10:27:27', '222', '1', 'pay_L03Bdnk5Xranto', 'order_L03B1WDfuky7rh', 'success', ''),
(15, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'kolkata', '700094', 'kolkata', 'west bengal', '2023-01-06 17:50:50', '5555', '1', 'pay_L0xo2Pb5fbi6VL', 'order_L0xndduTHICyvM', 'success', 'ALNPH0752J'),
(16, 'bimal rang cccc', 'bimalrangcccc@gmail.com', 'vfvvvv', 'fvfv', '700094', 'kolkata', 'west bengal', '2023-01-06 18:00:36', '7', '1', 'pay_L0xyM50rl9ccfV', 'order_L0xxw7XLNzBaUo', 'success', 'abc123abc1'),
(17, 'bimal rang', 'bimalrang@gmail.com', '1234567890', 'kolkata', '700094', 'kolkata', 'west bengal', '2023-01-06 18:23:38', '9', '1', 'pay_L0yMAXy0usfFQP', 'order_L0yLtPcB2wE1ma', 'success', 'ALNPH0752J'),
(18, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'kolkataaaa', '700094', 'kolkata', 'west bengal', '2023-01-08 09:07:18', '88', '1', 'pay_L1bxQT3IMYiMpC', 'order_L1bx3zivpBiQAj', 'success', 'ALNPH0752J'),
(19, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'kolkata', '700094', 'kolkata', 'west bengal', '2023-02-06 19:02:50', '100', '1', 'pay_LDFawSqKKc0i4Z', 'order_LDFY7NvWmTMsx3', 'success', 'ALNPH0752J');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date` varchar(1111) NOT NULL,
  `status` varchar(11) NOT NULL,
  `description` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `mobile`, `comment`, `date`, `status`, `description`) VALUES
(1, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'ffffff', '2022-11-22 20:24:04', '1', 'ddddddddd'),
(2, 'bimal rang11', 'bimalrang@gmail.com', '9143631380', 'ffffff', '2022-11-22 20:26:08', '1', 'aaaccc'),
(3, 'bimal rang11111', 'bimalrang@gmail.com', '9143631380', 'ffffff', '2022-11-22 20:26:47', '1', 'abc'),
(4, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'dvvdddddv', '2022-11-22 20:34:28', '1', 'jjjjjjjjj'),
(5, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'dvvdddddv', '2022-11-22 20:35:03', '1', 'sssssssssssssssssssssss'),
(6, 'bimal rang12', 'bimalrang@gmail.com', '9143631380', 'gggbggbgb', '2022-11-22 20:36:15', '1', ''),
(7, 'bimal rang1111111', 'bimalrang@gmail.com', '9143631380', 'dgggddddg', '2022-11-22 20:37:10', '0', ''),
(8, 'bimal rang44444', 'bimalrang@gmail.com', '9143631380', 'dddddwd', '2022-11-22 20:37:46', '0', ''),
(9, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'csssdd', '2022-11-22 20:48:48', '', 'tgggg'),
(10, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'csssdd', '2022-11-22 20:49:29', '1', ''),
(11, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'csssdd', '2022-11-22 20:49:32', '0', ''),
(12, 'ddd', 'bimalrang@gmail.com', '9143631380', 'gggggggg', '2022-11-22 20:50:19', '0', ''),
(13, 'ddd', 'bimalrang@gmail.com', '9143631380', 'gggggggg', '2022-11-22 20:50:43', '0', ''),
(14, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'dfdf', '2022-11-22 20:51:49', '0', ''),
(15, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'gggggrg', '2022-11-22 20:52:10', '0', ''),
(16, 'bimal rang', 'bimalrang@gmail.com', '9143631380', 'rrgrgrgggrg', '2022-11-22 21:02:33', '0', ''),
(17, 'Soumitra Haldar', 'bimalrang@gmail.com', '8436965592', 'ssssssssssssssss', '2022-11-22 21:03:39', '0', ''),
(18, 'sss', 'sss@gmail.vom', '1111111111', 'cdcdcdcc', '2022-12-01 14:37:32', '0', ''),
(19, 'sssabc', 'sssabc@gmail.vom', '3333333333', 'cdcdcdcc', '2022-12-01 14:39:09', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `NAME`, `password`, `image`) VALUES
(2, 'so', '12345', 'bimal pp new.jpg'),
(3, 'dipu', '12345', 'dipu pass port.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `date`, `image`) VALUES
(1, 'fin in', 'wbfin in', '2022-11-30', 'wbfin.jpg'),
(4, 'aaa', 'kakdwip', '2022-12-30', 'header.jpg'),
(6, 'abc', 'name', '2022-12-28', 'favreleuba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(111) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`, `description`) VALUES
(8, 'footer.jpg', '2022-11-18 14:51:39', ''),
(9, 'img-1.jpg', '2022-11-18 14:51:52', ''),
(11, 'header.jpg', '2022-11-18 14:52:17', 'kakdwip3'),
(16, 'WhatsApp Image 2020-06-08 at 1.33.36 PM.jpeg', '2022-11-18 15:42:02', ''),
(17, 'WhatsApp Image 2020-06-08 at 1.33.02 PM.jpeg', '2022-11-18 15:47:06', ''),
(18, 'WhatsApp Image 2020-06-08 at 1.33.03 PM (1).jpeg', '2022-11-18 15:47:14', ''),
(21, 'WhatsApp Image 2020-06-08 at 1.33.43 PM.jpeg', '2022-11-18 17:08:34', ''),
(23, 'WhatsApp Image 2020-06-08 at 1.33.07 PM.jpeg', '2022-11-18 17:16:50', 'kakdwip 14 no primary school');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serial_no_usp_id` (`Serial_Number`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
