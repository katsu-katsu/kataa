-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 04:25 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `c_id` varchar(20) NOT NULL,
  `c_date` date NOT NULL,
  `p_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`c_id`, `c_date`, `p_id`) VALUES
('c001', '2023-02-21', '500'),
('c002', '2023-02-20', '600');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` varchar(20) NOT NULL,
  `ct_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`) VALUES
('c1', 'ไอติมถ้วย'),
('c2', 'ไอติมถัง');

-- --------------------------------------------------------

--
-- Table structure for table `deliverly`
--

CREATE TABLE `deliverly` (
  `d_id` varchar(20) NOT NULL,
  `pay_id` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `t_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliverly`
--

INSERT INTO `deliverly` (`d_id`, `pay_id`, `d_date`, `t_id`) VALUES
('ER545', '11', '24-02-2023', 'jwd'),
('ER859465A', '1', '2023-02-03', 'it'),
('Fg5656dsf', '8', '2023-02-21', 'it'),
('TH420201TT', '2', '2023-02-08', 'jwd'),
('TR4546456O', '3', '2023-02-20', 'scg');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Number` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Number`, `o_id`, `p_id`, `o_qty`, `o_sum`) VALUES
(1, 1, '500', 4, 220),
(2, 1, '600', 2, 110),
(4, 3, '100', 2, 110),
(5, 3, '300', 2, 110),
(6, 3, '400', 2, 110),
(7, 3, '500', 2, 110),
(8, 4, '600', 4, 220),
(9, 5, '300', 2, 110),
(10, 5, '500', 10, 550),
(11, 9, '100', 2, 170),
(12, 9, '600', 1, 200),
(13, 9, '300', 1, 85),
(14, 10, '600', 1, 200),
(15, 10, '300', 2, 170),
(16, 10, '100', 1, 85),
(27, 17, '300', 3, 255),
(28, 17, '400', 2, 170),
(29, 19, '500', 5, 1000),
(30, 19, '700', 5, 1295),
(31, 21, '400', 4, 340),
(32, 21, '300', 2, 170),
(33, 23, '500', 10, 2000),
(34, 25, '400', 4, 340),
(35, 25, '700', 8, 2072),
(36, 26, '300', 4, 340),
(37, 26, '400', 3, 255),
(38, 27, '400', 2, 170),
(39, 27, '700', 5, 1295),
(40, 28, '100', 3, 255),
(41, 29, '600', 1, 200),
(42, 30, '300', 2, 170),
(43, 31, '500', 3, 600),
(44, 31, '300', 5, 425),
(45, 32, '400', 1, 85),
(46, 33, '400', 4, 340),
(47, 34, '500', 2, 400),
(48, 35, '300', 4, 340),
(49, 35, '700', 2, 518),
(50, 36, '300', 5, 425),
(51, 38, '100', 1, 85),
(52, 39, '400', 1, 85),
(53, 40, '400', 2, 170),
(54, 41, '400', 3, 255),
(55, 41, '600', 2, 400),
(56, 42, '300', 2, 170),
(57, 42, '700', 1, 259),
(58, 43, '300', 13, 1105);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(11) NOT NULL,
  `o_date` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `s_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `o_date`, `username`, `s_id`) VALUES
(1, '1-2-2023', 'Ake', 'DY'),
(3, '5-2-2023', 'Ladybow', 'DY'),
(4, '5-2-2023', 'Ake', 'DY'),
(5, '10-2-2023', 'Ladybow', 'CN'),
(9, '17-02-2023', 'Ake', 'DY'),
(10, '19-02-2023', 'Bowpinkky', 'PY'),
(17, '20-02-2023', 'Ake', 'DY'),
(18, '20-02-2023', 'lady', 'NP'),
(19, '20-02-2023', 'lady', 'NP'),
(20, '20-02-2023', 'lady', 'NP'),
(21, '20-02-2023', 'lady', 'NP'),
(22, '20-02-2023', 'ladybow', 'NP'),
(23, '20-02-2023', 'ladybow', 'NP'),
(24, '20-02-2023', 'residentevil', 'NP'),
(25, '20-02-2023', 'residentevil', 'NP'),
(26, '21-02-2023', 'Ake', 'ND'),
(27, '21-02-2023', 'bb', 'NP'),
(28, '21-02-2023', 'Bowpinkky', 'NP'),
(29, '21-02-2023', 'Bowpinkky', 'NP'),
(30, '24-02-2023', 'Ake', 'NP'),
(31, '24-02-2023', 'bb', 'NP'),
(32, '24-02-2023', 'bb', 'NP'),
(33, '24-02-2023', 'bb', 'NP'),
(34, '24-02-2023', 'bb', 'NP'),
(35, '24-02-2023', 'Ake', 'NP'),
(36, '24-02-2023', 'Bowpinkky', 'NP'),
(38, '24-02-2023', 'Bowpinkky', 'NP'),
(39, '24-02-2023', 'Bowpinkky', 'NP'),
(40, '24-02-2023', 'Bowpinkky', 'NP'),
(41, '24-02-2023', 'asd', 'DY'),
(42, '24-02-2023', 'qwe', 'ND'),
(43, '24-02-2023', 'Bowpinkky', 'NP');

-- --------------------------------------------------------

--
-- Table structure for table `payb`
--

CREATE TABLE `payb` (
  `pay_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `pay_date` varchar(20) NOT NULL,
  `pay_time` varchar(20) NOT NULL,
  `pay_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payb`
--

INSERT INTO `payb` (`pay_id`, `o_id`, `pay_date`, `pay_time`, `pay_img`) VALUES
(1, 1, '2023-02-03', '08:15', '01.jpg'),
(2, 3, '2023-02-06', '12:30', '02.jpg'),
(3, 4, '2023-02-06', '10:20', '03.jpg'),
(8, 9, '2023-02-20', '13:19', '01.jpg'),
(9, 17, '2023-02-21', '14:30', '03.jpg'),
(10, 26, '2023-02-24', '20:29', '01.jpg'),
(11, 41, '2023-02-24', '20:46', '01.jpg'),
(12, 42, '2023-02-24', '20:54', '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` varchar(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_detail` text NOT NULL,
  `p_cost` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_num` text NOT NULL,
  `ct_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_cost`, `p_price`, `p_img`, `p_num`, `ct_id`) VALUES
('100', 'Cookie & Cream', 'ไอศกรีมคุ้กกี้ & ครีม', 55, 85, '100.png', '4', 'c1'),
('200', 'Chocolate & Brownie Cake Fudge', 'ไอศกรีมนมสดช็อคโกแลตบราวนี่', 55, 85, '200.png', '25', 'c1'),
('300', 'Vanilla Milky', 'ไอศกรีมวานิลลานมสด', 55, 85, '300.png', '160', 'c1'),
('400', 'Magic Tea Cake', 'ไอศกรีมเมจิค ที เค้ก (ชาไทยผสมเนื้อบราวนี่)', 55, 85, '400.png', '174', 'c1'),
('500', 'Strawberry Milky', 'ไอศกรีมสตรอว์เบอร์รี่นมสด', 100, 200, '500.png', '180', 'c2'),
('600', 'Chocolate Milky', 'ไอศกรีมช็อคโกแลตนมสด', 100, 200, '600.png', '120', 'c2'),
('700', 'Magic Tea Cake', 'ชาไทยผสมเนื้อบราวนี่', 120, 259, '400.png', '179', 'c2');

-- --------------------------------------------------------

--
-- Table structure for table `sta`
--

CREATE TABLE `sta` (
  `s_id` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sta`
--

INSERT INTO `sta` (`s_id`, `s_name`) VALUES
('CN', 'ยกเลิก'),
('DY', 'จัดส่งแล้ว'),
('ND', 'รอจัดส่ง'),
('NP', 'ยังไม่ชำระ'),
('PY', 'ชำระแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `typed`
--

CREATE TABLE `typed` (
  `t_id` varchar(20) NOT NULL,
  `t_name` text NOT NULL,
  `t_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typed`
--

INSERT INTO `typed` (`t_id`, `t_name`, `t_price`) VALUES
('it', 'Inter Express Chilled & Frozen', 150),
('jwd', 'JWD Express', 170),
('scg', 'SCG Express', 130);

-- --------------------------------------------------------

--
-- Table structure for table `user_dt`
--

CREATE TABLE `user_dt` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `ad` text NOT NULL,
  `tel` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_dt`
--

INSERT INTO `user_dt` (`username`, `password`, `name`, `lastname`, `email`, `ad`, `tel`, `level`) VALUES
('9', '1234', 'Pongsopon', 'Ubonbarn', '-', '-', '-', 'Admin'),
('Kate', '1234', 'Ketsinee', 'Tonket', '-', '-', '-', 'Admin');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `deliverly`
--
ALTER TABLE `deliverly`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `payb`
--
ALTER TABLE `payb`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sta`
--
ALTER TABLE `sta`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `typed`
--
ALTER TABLE `typed`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user_dt`
--
ALTER TABLE `user_dt`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `payb`
--
ALTER TABLE `payb`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `order_head` (`o_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
