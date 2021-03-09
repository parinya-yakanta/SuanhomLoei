-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2020 at 06:28 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nonghinherb`
--

-- --------------------------------------------------------

--
-- Table structure for table `download_data`
--

CREATE TABLE `download_data` (
  `D_ID` int(11) NOT NULL,
  `D_NAME` varchar(100) NOT NULL,
  `D_FILES` varchar(100) NOT NULL,
  `D_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `download_data`
--

INSERT INTO `download_data` (`D_ID`, `D_NAME`, `D_FILES`, `D_UPDATE`) VALUES
(1, 'ข้อมูลภาพ', '14-Thai-Fonts.zip', '2020-07-11 05:00:32'),
(2, 'ข้อมูลวิจัย', 'naruwan.pdf', '2020-07-11 05:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `herb_data`
--

CREATE TABLE `herb_data` (
  `H_ID` int(11) NOT NULL,
  `H_LNAME` varchar(200) NOT NULL,
  `H_GNAME` varchar(200) NOT NULL,
  `H_SNAME` varchar(200) NOT NULL,
  `H_PROP` varchar(500) NOT NULL,
  `H_FOOD` varchar(500) NOT NULL,
  `H_BEAUTY` varchar(500) NOT NULL,
  `H_BELIEF` varchar(500) NOT NULL,
  `H_ORNAMENTAL` varchar(500) NOT NULL,
  `H_PROPAGATION` varchar(500) NOT NULL,
  `H_SOURCE` varchar(500) NOT NULL,
  `H_TREATMETHOD` varchar(500) NOT NULL,
  `H_TREATUSED` varchar(500) NOT NULL,
  `H_LOCATION` varchar(500) NOT NULL,
  `H_IMG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `herb_data`
--

INSERT INTO `herb_data` (`H_ID`, `H_LNAME`, `H_GNAME`, `H_SNAME`, `H_PROP`, `H_FOOD`, `H_BEAUTY`, `H_BELIEF`, `H_ORNAMENTAL`, `H_PROPAGATION`, `H_SOURCE`, `H_TREATMETHOD`, `H_TREATUSED`, `H_LOCATION`, `H_IMG`) VALUES
(1, 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'ไมยราฟ7', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d488250.23355316586!2d101.76060643111802!3d17.050385000000016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDAzJzAxLjQiTiAxMDHCsDQ1JzQzLjUiRQ!5e0!3m2!1sen!2sth!4v1594621063996!5m2!1sen!2sth', 'img_5f0be17004f6c.jpg'),
(2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2.jpg\r\n'),
(3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.jpg'),
(4, '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4.jpg'),
(6, '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6.jpg'),
(7, '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7.jpg'),
(9, '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9'),
(10, '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10'),
(11, '888', '888', '888', '888', '888', '888', '888', '88', '8', '8', '8', '8', '8', 'img_5f0be53b47ee8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `km_base`
--

CREATE TABLE `km_base` (
  `KM_ID` int(11) NOT NULL,
  `KM_TOPIC` varchar(200) NOT NULL,
  `KM_ABS` varchar(300) NOT NULL,
  `KM_DATA` varchar(10000) NOT NULL,
  `KM_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KM_REF` varchar(200) NOT NULL,
  `KM_IMG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `km_base`
--

INSERT INTO `km_base` (`KM_ID`, `KM_TOPIC`, `KM_ABS`, `KM_DATA`, `KM_UPDATE`, `KM_REF`, `KM_IMG`) VALUES
(3, '8', '78', '78', '2020-07-11 04:44:27', '78', 'img_5f0943ab43da8.jpg'),
(4, '5', '555555', '5', '2020-07-11 04:44:53', '5', 'img_5f0943be9b916.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `LEVEL` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`ID`, `FNAME`, `USERNAME`, `PASSWORD`, `LEVEL`) VALUES
(1, 'ผู้ดูแลระบบ', 'admin', 'adminHerb', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_doc`
--

CREATE TABLE `medicine_doc` (
  `MED_ID` int(11) NOT NULL,
  `MED_FNAME` varchar(200) NOT NULL,
  `MED_SKILL` varchar(300) NOT NULL,
  `MED_DATA` varchar(500) NOT NULL,
  `MED_ADDR` varchar(200) NOT NULL,
  `MED_TEL` varchar(30) NOT NULL,
  `MED_IMG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_doc`
--

INSERT INTO `medicine_doc` (`MED_ID`, `MED_FNAME`, `MED_SKILL`, `MED_DATA`, `MED_ADDR`, `MED_TEL`, `MED_IMG`) VALUES
(2, '4', '4', '4', '4', '4', 'img_5f083e6bd31a3.jpg'),
(3, '7', '7', '7', '7', '7', 'img_5f083e9c5d45e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download_data`
--
ALTER TABLE `download_data`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `herb_data`
--
ALTER TABLE `herb_data`
  ADD PRIMARY KEY (`H_ID`);

--
-- Indexes for table `km_base`
--
ALTER TABLE `km_base`
  ADD PRIMARY KEY (`KM_ID`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine_doc`
--
ALTER TABLE `medicine_doc`
  ADD PRIMARY KEY (`MED_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download_data`
--
ALTER TABLE `download_data`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `herb_data`
--
ALTER TABLE `herb_data`
  MODIFY `H_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `km_base`
--
ALTER TABLE `km_base`
  MODIFY `KM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medicine_doc`
--
ALTER TABLE `medicine_doc`
  MODIFY `MED_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
