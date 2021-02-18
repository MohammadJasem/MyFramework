-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2021 at 09:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `create_date`) VALUES
(1, 'Muhammad', 'Jassem', 'mohammajasemmzj@gmail.com', '2021-01-04 23:41:00'),
(2, 'Rami', 'Haj', 'djvdhgjgjdjb', '2021-01-08 23:42:00'),
(3, 'Ramid', 'Hadj', 'djvdhgjgjddjb', '2021-01-07 23:42:00'),
(4, 'Rachel', 'Randi', 'rachel@hotmail.com', '2020-08-19 21:34:29'),
(5, 'Sam', 'Jay', 'samjay@hotmail.com', '2020-08-12 21:35:36'),
(6, 'Rami', 'Malek', 'ramimalek@outlook.com', '2021-01-09 21:36:14'),
(7, 'Salem', 'Hayek', 'salemhayek@randstad.com', '2020-09-07 21:36:53'),
(8, 'Muhammad', 'Jassem', 'muhammad.jassem@test.com', '2021-01-09 21:37:33'),
(9, 'George', 'Kalajyie', 'georg1999@outlook.com', '2020-05-15 21:38:34'),
(10, 'Vivi', 'Vida', 'vivi.vida@in.elte.hu', '2019-09-12 21:39:24'),
(11, 'Tibor', 'Agotai', 'tibor.agotai@hotmail.com', '2020-08-11 21:40:16'),
(12, 'Naruto', 'Uzumaki', 'narutouzumaki@konoha.jp', '2019-08-22 21:40:56'),
(13, 'Sasuke', 'Autchiha', 'sasuke.autchiha@konoha.com', '2020-01-15 21:46:23'),
(14, 'Minato', 'Namezaki', 'minato.namezaki@konoha.jp', '2020-08-06 21:47:19'),
(15, 'Gara', 'Sand', 'gara.sand@wind.jp', '2020-08-19 21:34:02'),
(16, 'Sakura', 'Haruno', 'sakura.haruno@konoha.jp', '2020-08-19 21:34:02'),
(17, 'Asuma', 'Sarutobi', 'asuma.sarutobi@konoha.com', '2020-09-07 21:36:53'),
(18, 'Kilua', 'Zodiak', 'kilua.zodiak@hunter.jp', '2020-09-07 21:36:53'),
(19, 'Gon', 'Kun', 'gon.kun@hunter.jp', '2020-09-07 21:36:53'),
(20, 'Hisuka', 'Joker', 'hisuka.joker@hunter.jp', '2020-09-07 21:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `purchase_date`, `country`, `device`) VALUES
(1, 1, '2021-01-08 23:41:00', 'SYR', 1213),
(2, 2, '2021-01-08 23:41:00', 'SYR', 1213),
(3, 3, '2021-01-07 23:41:00', 'SYR', 1213),
(4, 17, '2021-01-07 23:41:00', 'JP', 12442),
(5, 8, '2020-10-16 22:01:27', 'DK', 1234),
(6, 5, '2020-10-16 22:01:27', 'DK', 1347),
(7, 18, '2020-09-09 22:01:27', 'JP', 1234),
(8, 12, '2020-02-11 22:01:27', 'JP', 1234),
(9, 8, '2020-02-11 22:01:27', 'SYR', 1234),
(10, 5, '2020-02-11 22:01:27', 'NO', 4789),
(11, 4, '2020-02-11 22:01:27', 'HU', 98743),
(12, 3, '2019-10-17 22:01:27', 'IN', 4787),
(13, 11, '2019-10-17 22:01:27', 'HU', 98743),
(14, 10, '2019-10-17 22:01:27', 'HU', 743234);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `ean` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `ean`, `quantity`, `price`, `create_date`) VALUES
(1, 1, '12233331', 222, 4, '2021-01-08 23:41:00'),
(2, 1, '12233331', 333, 2, '2021-01-08 23:41:00'),
(3, 13, '1234789123478', 4, 444, '2020-09-07 21:36:53'),
(4, 3, '1234789123478', 333, 124, '2020-09-07 21:36:53'),
(5, 4, '1234789123478', 2243, 178, '2020-06-15 22:09:58'),
(6, 6, '1234789123478', 2447, 78, '2019-09-17 22:09:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F52993989395C3F3` (`customer_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_52EA1F09CFFE9AD6` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F52993989395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `FK_52EA1F09CFFE9AD6` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
