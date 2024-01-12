-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 05:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_replenishment`
--

-- --------------------------------------------------------

--
-- Table structure for table `lines_`
--

CREATE TABLE `lines_` (
  `line_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `line_name` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lines_`
--

INSERT INTO `lines_` (`line_id`, `plant_id`, `line_name`, `status`) VALUES
(1, 9, 'Line 1', '1'),
(2, 9, 'Line 2', '1'),
(3, 11, 'Line 1', '1'),
(4, 9, 'Line 3', '1'),
(5, 10, 'Line 1', '1'),
(6, 11, 'Line 2', '1'),
(7, 10, 'Line 2', '1'),
(8, 9, 'Line 4', '1'),
(9, 9, 'Line 5', '1'),
(10, 17, 'Line 1', '1'),
(11, 18, 'Line 1', '1'),
(12, 18, 'Line 2', '1'),
(13, 19, 'Line 1', '1'),
(14, 19, 'Line 2', '1'),
(15, 9, 'Line 6', '1'),
(16, 20, 'Line 1', '1'),
(17, 20, 'Line 2', '1'),
(18, 22, 'Line 1', '1'),
(19, 22, 'Line 2', '1'),
(20, 23, '777', '1'),
(21, 24, 'Line 1', '1'),
(22, 26, 'Line 1', '1'),
(23, 35, 'line 1', '1'),
(24, 24, 'Line 2', '1'),
(26, 38, 'line 1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `machine_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `machine_number` varchar(50) NOT NULL,
  `part_number` varchar(100) NOT NULL DEFAULT '2W000000000000259',
  `part_name` varchar(50) NOT NULL DEFAULT 'O Ring-027',
  `machine_hexnumber` varchar(30) NOT NULL,
  `machine_status` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`machine_id`, `plant_id`, `line_id`, `machine_number`, `part_number`, `part_name`, `machine_hexnumber`, `machine_status`, `status`) VALUES
(1, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(2, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(3, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(4, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(5, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(6, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(7, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(8, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(9, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(10, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(11, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(12, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(13, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(14, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(15, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(16, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(17, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(18, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(19, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(20, 10, 7, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(21, 10, 7, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(22, 10, 7, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(23, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(24, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(25, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(26, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(27, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(28, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(29, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(30, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(31, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(32, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(33, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(34, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(35, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(36, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(37, 9, 8, 'CM 01 (250T)777', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(38, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(39, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(40, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(41, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(42, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(43, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(44, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(45, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(46, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(47, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(48, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(49, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(50, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(51, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(52, 9, 8, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(53, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(54, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(55, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(56, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(57, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(58, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(59, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(60, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(61, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(62, 17, 10, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(63, 17, 10, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(64, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(65, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(66, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(67, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(68, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(69, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(70, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(71, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(72, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(73, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(74, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(75, 18, 11, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(76, 19, 13, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(77, 19, 13, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(78, 19, 13, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(79, 19, 14, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(80, 19, 14, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(81, 19, 13, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(82, 19, 13, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#EF2B2B8C', 'EMPTY', '1'),
(83, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(84, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(85, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(86, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(87, 20, 17, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(88, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(89, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(90, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(91, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(92, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(93, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(94, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(95, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(96, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(97, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(98, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(99, 20, 16, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#d7ec6f', 'HOLD', '1'),
(100, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(101, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(102, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(103, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(104, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(105, 22, 18, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(106, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(107, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(108, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(109, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(110, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(111, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(112, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(113, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(114, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(115, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(116, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(117, 22, 19, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'LOADED', '1'),
(118, 23, 20, '77777', '2W000000000000259', 'O Ring-027', '#955b5b', 'HOLD', '1'),
(119, 23, 20, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#955b5b', 'HOLD', '1'),
(120, 23, 20, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#955b5b', 'HOLD', '1'),
(121, 23, 20, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#955b5b', 'HOLD', '1'),
(122, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(123, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(124, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(125, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(126, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(127, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(128, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(129, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(130, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(131, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(132, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(133, 24, 21, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#FAFF7E8C', 'HOLD', '1'),
(134, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(135, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(136, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(137, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(138, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(139, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(140, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(141, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(142, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(143, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(144, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(145, 9, 15, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(146, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(147, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(148, 9, 4, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(149, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(150, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(151, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(152, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(153, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(154, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(155, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(156, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(157, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(158, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(159, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(160, 9, 9, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(161, 0, 0, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '', '', '1'),
(162, 0, 0, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '', '', '1'),
(163, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(164, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(165, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(166, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(167, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(168, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(169, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(170, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(171, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(172, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(173, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(174, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(175, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(176, 11, 3, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(177, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(178, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(179, 10, 5, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(180, 9, 2, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(181, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '0'),
(182, 11, 6, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(183, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(184, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(185, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(186, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(187, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(188, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(189, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(190, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(191, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(192, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(193, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '1'),
(194, 26, 22, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#8c4545', 'HOLD', '0'),
(195, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(196, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(197, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(198, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(199, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(200, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(201, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(202, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(203, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(204, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(205, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(206, 35, 23, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#4b2020', 'LOADED', '1'),
(207, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(208, 9, 1, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(209, 10, 7, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#3BFC2E66', 'LOADED', '1'),
(210, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(211, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(212, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(213, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(214, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(215, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(216, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(217, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(218, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(219, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1'),
(220, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '0'),
(221, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '0'),
(222, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '0'),
(223, 38, 26, 'CM 01 (250T)', '2W000000000000259', 'O Ring-027', '#5eb083', 'HOLD', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `plant_id` int(11) NOT NULL,
  `plant_name` varchar(100) NOT NULL,
  `plant_status` varchar(30) NOT NULL,
  `hex_number` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `modify_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`plant_id`, `plant_name`, `plant_status`, `hex_number`, `status`, `created_by`, `modified_by`, `created_date_time`, `modify_date_time`) VALUES
(9, 'RPL/CHE/PROD', 'LOADED', '#3BFC2E66', '1', 0, 0, '0000-00-00 00:00:00', '2023-12-25 08:14:28'),
(10, 'RPL/CHE/PROD 1', 'LOADED', '#3BFC2E66', '1', 0, 0, '0000-00-00 00:00:00', '2023-12-25 08:14:46'),
(11, 'RPL/CHE/PROD 2', 'LOADED', '#3BFC2E66', '1', 0, 0, '0000-00-00 00:00:00', '2023-12-25 08:14:52'),
(24, 'RPL/CHE/PROD 3', 'HOLD', '#FAFF7E8C', '1', 0, 0, '0000-00-00 00:00:00', '2023-12-27 13:28:21'),
(34, 'pabaa', 'HOLD', '#0d0a24', '0', 0, 0, '0000-00-00 00:00:00', '2023-12-29 07:24:13'),
(35, 'plant 1', 'LOADED', '#4b2020', '0', 0, 0, '0000-00-00 00:00:00', '2023-12-29 10:05:28'),
(36, 'pabaa', 'EMPTY', '#5f246a', '0', 0, 0, '0000-00-00 00:00:00', '2023-12-29 10:06:38'),
(37, 'pabaa', 'LOADED', '#8fee7c', '0', 0, 0, '0000-00-00 00:00:00', '2023-12-29 12:12:38'),
(38, 'plant 1', 'HOLD', '#5eb083', '0', 0, 0, '0000-00-00 00:00:00', '2023-12-31 05:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `plant_status`
--

CREATE TABLE `plant_status` (
  `plant_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `hex_number` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `modify_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_status`
--

INSERT INTO `plant_status` (`plant_status_id`, `status_name`, `hex_number`, `status`, `modify_date_time`) VALUES
(1, 'LOADED', '#8fee7c', '1', '2023-12-29 12:12:38'),
(2, 'HOLD', '#5eb083', '1', '2023-12-31 05:10:01'),
(3, 'EMPTY', '#5f246a', '1', '2023-12-29 10:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `dashboard_access` enum('0','1') NOT NULL DEFAULT '0',
  `line_access` enum('0','1') NOT NULL DEFAULT '0',
  `machine_access` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `plant_id`, `dashboard_access`, `line_access`, `machine_access`, `status`) VALUES
(4, 'Mixing Manager', 9, '0', '0', '1', '1'),
(5, 'Line Manager', 9, '0', '0', '0', '1'),
(6, 'Branch Manager', 10, '0', '0', '0', '1'),
(7, 'Mixing Manager', 11, '0', '0', '0', '1'),
(12, 'Branch Manager', 17, '0', '0', '0', '1'),
(13, 'Mixing Manager', 18, '0', '0', '0', '1'),
(14, 'Civil Engineer', 20, '0', '0', '0', '1'),
(15, 'Mixing Manager', 22, '0', '0', '0', '1'),
(16, 'Branch Manager', 22, '0', '0', '0', '1'),
(17, 'Branch Managerr', 26, '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_status` varchar(30) NOT NULL DEFAULT 'Active',
  `plant_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `user_role` enum('u','sa') NOT NULL DEFAULT 'u',
  `dashboard_access` enum('0','1') NOT NULL DEFAULT '0',
  `line_access` enum('0','1') NOT NULL DEFAULT '0',
  `machine_access` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_status`, `plant_id`, `role_id`, `otp`, `user_role`, `dashboard_access`, `line_access`, `machine_access`, `status`) VALUES
(1, 'pavankumar', 'pavankumarsidagam1@gmail.com', 'Pavan@2001', 'Active', 0, 0, 740769, 'sa', '1', '1', '1', '1'),
(2, 'pavani', 'pavani@gmail.com', 'Pavani@2002', 'Active', 9, 4, 0, 'u', '0', '0', '1', '1'),
(3, 'Ali', 'Ali@gmail.com', 'Ali', 'Active', 20, 14, 0, 'u', '0', '0', '0', '1'),
(4, 'Ali', 'Ali@gmail.com', 'Ali', 'Active', 22, 15, 0, 'u', '0', '0', '0', '1'),
(5, 'Ali', 'ali@gmail.com', 'Ali', 'Active', 9, 4, 0, 'u', '0', '0', '1', '1'),
(6, 'Dinesh', 'dinesh@gmail.com', 'Dinesh', 'Active', 10, 6, 0, 'u', '0', '0', '0', '1'),
(7, 'Mohan', 'mohan@gmail.com', 'Mohan', 'Active', 26, 17, 0, 'u', '0', '0', '0', '1'),
(8, 'Jagadesh', 'jagadesh@gmail.com', 'aaa', 'Active', 38, 18, 0, 'u', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lines_`
--
ALTER TABLE `lines_`
  ADD PRIMARY KEY (`line_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `plant_status`
--
ALTER TABLE `plant_status`
  ADD PRIMARY KEY (`plant_status_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lines_`
--
ALTER TABLE `lines_`
  MODIFY `line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `plant_status`
--
ALTER TABLE `plant_status`
  MODIFY `plant_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
