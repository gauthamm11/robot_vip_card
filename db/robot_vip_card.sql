-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2020 at 02:37 PM
-- Server version: 5.7.23
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
-- Database: `robot_vip_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `robot_admin_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text,
  `passcode` varchar(20) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`robot_admin_id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `robot_admin_id`, `name`, `mobile`, `email`, `address`, `passcode`, `branch`) VALUES
(1, 'chn-prr-001', 'Ajith Kumar T', '9100001123', 'ajithkumar@example.com', '#No. 5, K Apartments, Mugalivakkam, Porur 600116.', 'qwerty001', 'Porur - Chennai'),
(2, 'chn-prr-002', 'Vijay Joseph I', '9100001124', 'vijayjoseph@example.com', '#No. 7, S Apartments, Ramapuram Backside, Porur 600116.', 'qwerty002', 'Porur - Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `robot_vip_spine`
--

DROP TABLE IF EXISTS `robot_vip_spine`;
CREATE TABLE IF NOT EXISTS `robot_vip_spine` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `vip_card_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text,
  `dob` date DEFAULT NULL,
  `anniversary` date DEFAULT NULL,
  `app_by` varchar(20) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `add_date` date NOT NULL,
  `current_value` int(7) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `t_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`vip_card_no`),
  UNIQUE KEY `sno` (`sno`),
  KEY `app` (`app_by`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robot_vip_spine`
--

INSERT INTO `robot_vip_spine` (`sno`, `vip_card_no`, `name`, `email`, `mobile`, `address`, `dob`, `anniversary`, `app_by`, `branch`, `city`, `add_date`, `current_value`, `status`, `t_stamp`) VALUES
(1, '5373 4589 0001', 'Rangaraja Nambi', 'rangaraja.nambi@example.com', '9123789001', '9,(17), Visweswarapuram Street, Mylapore, Chennai, Tamil Nadu, 600004.', '1983-11-19', '2009-05-12', 'chn-prr-001', 'Porur', 'Chennai', '2020-01-14', 3450, 1, '2020-01-14 08:28:35'),
(2, '5373 4589 0002', 'Saketh Ram', 'saketh.ram@example.com', '9123400452', '73 &74, B4, Panna Plaza, Kodambakkam, Chennai, Tamil Nadu, 600024.', '1989-01-09', '2014-01-19', 'chn-prr-001', 'Porur', 'Chennai', '2020-01-14', 4200, 1, '2020-01-14 10:57:35'),
(3, '5373 4589 0003', 'Kameshwaran', 'kameshwaran@example.com', '9123432563', '804-a, Mount Road, Annasalai, Chennai, Tamil Nadu, 600002.', '1990-06-27', '2019-06-21', 'chn-prr-002', 'Porur', 'Chennai', '2020-01-14', 2800, 1, '2020-01-14 14:50:10'),
(4, '5373 4589 0004', 'Tenali Soman', 'tenali.soman@example.com', '9123056002', '112 Thyagaraya Road, T nagar, Chennai, Tamil Nadu, 600017.', '1981-12-19', '2010-12-12', 'chn-prr-002', 'Porur', 'Chennai', '2020-01-14', 3850, 1, '2020-01-14 15:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

DROP TABLE IF EXISTS `transaction_history`;
CREATE TABLE IF NOT EXISTS `transaction_history` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `vip_card_no` varchar(20) NOT NULL,
  `bill_id` varchar(20) DEFAULT NULL,
  `bill_amt` int(7) DEFAULT NULL,
  `vip_amt` int(7) DEFAULT NULL,
  `side` int(1) DEFAULT NULL,
  `app_by` varchar(20) NOT NULL,
  `t_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `sno` (`sno`),
  KEY `vip_card_no` (`vip_card_no`),
  KEY `app_by` (`app_by`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`sno`, `vip_card_no`, `bill_id`, `bill_amt`, `vip_amt`, `side`, `app_by`, `t_stamp`) VALUES
(1, '5373 4589 0001', NULL, NULL, 1500, 0, 'chn-prr-001', '2020-01-14 08:28:35'),
(2, '5373 4589 0002', NULL, NULL, 2000, 0, 'chn-prr-001', '2020-01-14 10:57:35'),
(3, '5373 4589 0003', NULL, NULL, 1250, 0, 'chn-prr-002', '2020-01-14 14:50:10'),
(4, '5373 4589 0004', NULL, NULL, 1000, 0, 'chn-prr-002', '2020-01-14 15:45:10'),
(5, '5373 4589 0001', '1101', 5000, 300, 1, 'chn-prr-001', '2020-01-18 08:28:35'),
(6, '5373 4589 0002', '1132', 3000, 500, 1, 'chn-prr-002', '2020-01-18 12:45:35'),
(7, '5373 4589 0003', '1143', 4500, 400, 1, 'chn-prr-001', '2020-01-19 10:10:35'),
(8, '5373 4589 0004', '1154', 3500, 450, 1, 'chn-prr-002', '2020-01-19 14:30:35'),
(9, '5373 4589 0001', '1175', 6000, 500, 1, 'chn-prr-001', '2020-01-25 06:40:35'),
(10, '5373 4589 0002', '1192', 2000, 200, 1, 'chn-prr-002', '2020-01-25 09:00:35'),
(11, '5373 4589 0003', '1209', 3500, 250, 1, 'chn-prr-001', '2020-01-26 14:45:35'),
(12, '5373 4589 0004', '1226', 5200, 300, 1, 'chn-prr-002', '2020-01-26 15:10:35'),
(13, '5373 4589 0001', NULL, NULL, 3000, 0, 'chn-prr-001', '2020-02-01 06:40:35'),
(14, '5373 4589 0002', NULL, NULL, 3500, 0, 'chn-prr-002', '2020-02-01 06:40:35'),
(15, '5373 4589 0003', NULL, NULL, 2500, 0, 'chn-prr-001', '2020-02-02 06:40:35'),
(16, '5373 4589 0004', NULL, NULL, 4000, 0, 'chn-prr-002', '2020-02-02 06:40:35'),
(17, '5373 4589 0001', '1311', 5450, 250, 1, 'chn-prr-001', '2020-02-08 06:40:35'),
(18, '5373 4589 0002', '1328', 3600, 600, 1, 'chn-prr-002', '2020-02-08 06:40:35'),
(19, '5373 4589 0003', '1345', 4500, 300, 1, 'chn-prr-001', '2020-02-09 06:40:35'),
(20, '5373 4589 0004', '1362', 3200, 400, 1, 'chn-prr-002', '2020-02-09 06:40:35');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `robot_vip_spine`
--
ALTER TABLE `robot_vip_spine`
  ADD CONSTRAINT `robot_vip_spine_ibfk_1` FOREIGN KEY (`app_by`) REFERENCES `admin` (`robot_admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD CONSTRAINT `transaction_history_ibfk_1` FOREIGN KEY (`vip_card_no`) REFERENCES `robot_vip_spine` (`vip_card_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaction_history_ibfk_2` FOREIGN KEY (`app_by`) REFERENCES `admin` (`robot_admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
