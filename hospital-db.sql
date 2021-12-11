-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2021 at 09:31 PM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `phone`, `photo`) VALUES
(1, 'test', 'test123', '+998906225022', '../images/doctor_01.jpg'),
(2, 'Uzcoin', 'Uzcoin', 'Uzcoin', '../images/rengen/.png'),
(10, 'dasdasd', 'asd', '35345', '../images/avatar/no-photo.jpg'),
(11, 'asdasda', 'dasdasd', '998992564585', '../images/avatar/no-photo.jpg'),
(13, 'aaa', 'AAA', '123', '../images/avatar/no-photo.jpg'),
(20, '7755', 'dfgdf', '4477', '../images/avatar/7755.jpg'),
(21, 'Hayrullo', '54454', '45', '../images/avatar/no-photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `login`, `password`, `phone`, `photo`) VALUES
(1, 'test', 'test', '+998906225022', '../images/doctor_02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `sicktype` varchar(60) NOT NULL,
  `age` int(100) NOT NULL,
  `passport` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `arrivaltime` varchar(60) NOT NULL,
  `gonetime` varchar(60) NOT NULL,
  `number` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `patronymic`, `sicktype`, `age`, `passport`, `photo`, `arrivaltime`, `gonetime`, `number`) VALUES
(8, 'Siz ko\'rib', 'turgan', 'ro\'yxat', 'databazadan', 100, 'olib kelingan', '../images/avatar/Rasm-mavjud-emas', '2021-12-09', '2021-12-09', '999999'),
(9, 'Suyunbek', 'Saydazimov', 'gfh', 'gfhgf', 66, 'fghfghgf', '../images/rengen/fghfghgf.png', '2021-12-02', '2021-12-04', '54564565'),
(10, 'test', 'tester', 'testing', 'test', 3, 'tester', '../images/rengen/tester.jpg', '2021-12-04', '2021-12-18', '997854'),
(11, 'vxvc', 'xvcxvcxv', 'cxvcxv', 'xcvcxv', 56546, 'testerghjhgj', '../images/rengen/tester.png', '2021-12-09', '2021-12-10', '56565'),
(12, 'gfdfgdfgds', 'fgdfgdfg', 'fdgdfgd', 'dfgdfgdfg', 54543, '777', '../images/rengen/777.png', '2021-12-11', '2021-12-11', '6546546'),
(13, '4', 'dfgdf', 'gdfg', 'dfgdfgdf', 546456, 'gffgdfg', '../images/rengen/no-photo.jpg', '2021-12-23', '2021-12-16', '54656456'),
(14, '5', 'fsdfasdfdsf', 'sdfadsfasdf', 'dsfasdf', 4324234, 'qaz', '../images/rengen/qaz.png', '2021-12-07', '2021-12-11', '4323432'),
(22, 'Siz ko\'rib', 'turgan', 'ro\'yxat', 'databazadan', 100, 'jghjgh', '../images/avatar/Rasm-mavjud-emas', '2021-12-09', '2021-12-09', '999999'),
(23, 'Suyunbek', 'Saydazimov', 'gfh', 'gfhgf', 66, 'fghfghgfjgh', '../images/rengen/fghfghgf.png', '2021-12-02', '2021-12-04', '54564565'),
(24, 'test', 'tester', 'testing', 'test', 3, 'nmbnmbnm', '../images/rengen/tester.jpg', '2021-12-04', '2021-12-18', '997854'),
(25, 'vxvc', 'xvcxvcxv', 'cxvcxv', 'xcvcxv', 56546, 'testerghjhgjnbm', '../images/rengen/tester.png', '2021-12-09', '2021-12-10', '56565'),
(26, 'gfdfgdfgds', 'fgdfgdfg', 'fdgdfgd', 'dfgdfgdfg', 54543, '777bnmbnmbnm', '../images/rengen/777.png', '2021-12-11', '2021-12-11', '6546546'),
(27, '4', 'dfgdf', 'gdfg', 'dfgdfgdf', 546456, 'gffgdfgbnmbnmbnm', '../images/rengen/no-photo.jpg', '2021-12-23', '2021-12-16', '54656456'),
(28, '5', 'fsdfasdfdsf', 'sdfadsfasdf', 'dsfasdf', 4324234, 'qazbnmnbm', '../images/rengen/qaz.png', '2021-12-07', '2021-12-11', '4323432'),
(29, 'Siz ko\'rib', 'turgan', 'ro\'yxat', 'databazadan', 100, 'fgdfgdfg', '../images/avatar/Rasm-mavjud-emas', '2021-12-09', '2021-12-09', '999999'),
(30, 'Suyunbek', 'Saydazimov', 'gfh', 'gfhgf', 66, 'fghfghgfvbnvbn', '../images/rengen/fghfghgf.png', '2021-12-02', '2021-12-04', '54564565'),
(31, 'test', 'tester', 'testing', 'test', 3, 'testervbnvbn', '../images/rengen/tester.jpg', '2021-12-04', '2021-12-18', '997854'),
(32, 'vxvc', 'xvcxvcxv', 'cxvcxv', 'xcvcxv', 56546, 'testerghjhgjvbnvbn', '../images/rengen/tester.png', '2021-12-09', '2021-12-10', '56565'),
(33, 'gfdfgdfgds', 'fgdfgdfg', 'fdgdfgd', 'dfgdfgdfg', 54543, '777vbnvbn', '../images/rengen/777.png', '2021-12-11', '2021-12-11', '6546546'),
(34, '4', 'dfgdf', 'gdfg', 'dfgdfgdf', 546456, 'gffgdfgvbnvbn', '../images/rengen/no-photo.jpg', '2021-12-23', '2021-12-16', '54656456'),
(35, '5', 'fsdfasdfdsf', 'sdfadsfasdf', 'dsfasdf', 4324234, 'qazvbnbvn', '../images/rengen/qaz.png', '2021-12-07', '2021-12-11', '4323432'),
(36, 'Siz ko\'rib', 'turgan', 'ro\'yxat', 'databazadan', 100, 'jghjghvbnvbn', '../images/avatar/Rasm-mavjud-emas', '2021-12-09', '2021-12-09', '999999'),
(37, 'Suyunbek', 'Saydazimov', 'gfh', 'gfhgf', 66, 'fghfghgfjghvbn', '../images/rengen/fghfghgf.png', '2021-12-02', '2021-12-04', '54564565'),
(38, 'test', 'tester', 'testing', 'test', 3, 'vbcvb', '../images/rengen/tester.jpg', '2021-12-04', '2021-12-18', '997854'),
(39, 'vxvc', 'xvcxvcxv', 'cxvcxv', 'xcvcxv', 56546, 'bnmbnm', '../images/rengen/tester.png', '2021-12-09', '2021-12-10', '56565'),
(40, 'gfdfgdfgds', 'fgdfgdfg', 'fdgdfgd', 'dfgdfgdfg', 54543, 'mn,n', '../images/rengen/777.png', '2021-12-11', '2021-12-11', '6546546'),
(41, '4', 'dfgdf', 'gdfg', 'dfgdfgdf', 546456, 'nm,nm', '../images/rengen/no-photo.jpg', '2021-12-23', '2021-12-16', '54656456'),
(42, '5', 'fsdfasdfdsf', 'sdfadsfasdf', 'dsfasdf', 4324234, 'nm,nm,', '../images/rengen/qaz.png', '2021-12-07', '2021-12-11', '4323432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport` (`passport`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
