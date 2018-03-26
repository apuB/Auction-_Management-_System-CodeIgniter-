-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 08:57 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(4) NOT NULL,
  `seller_id` int(4) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `buyer_id` int(4) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `initprice` int(10) NOT NULL,
  `finalprice` int(10) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bidprice` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `seller_id`, `seller_name`, `buyer_id`, `buyer_name`, `initprice`, `finalprice`, `product_desc`, `image`, `bidprice`, `status`) VALUES
(3, 1, 'Rahul Ghosh', 1, 'Sumit Roy', 5000, 5020, 'guiter', 'pics/719-6lz3SxL._SL1500_.jpg', 5020, '1'),
(4, 1, 'Rahul Ghosh', 5, 'Rohan Joshi', 5000, 0, 'guiter', 'pics/p1_utfnziflp_ss.jpg', 7000, '0'),
(5, 1, 'Rahul Ghosh', 1, 'Sumit Roy', 100000, 100005, 'royal enfield', 'pics/17.JPG', 100005, '1'),
(6, 2, 'Priyam Sengupta', 2, 'Ajay Sinha', 6000000, 7005000, 'lamborgini', 'pics/2014-lamborghini-aventador37.jpg', 7005000, '1'),
(7, 2, 'Priyam Sengupta', 4, 'Soumik Biswas', 8000000, 8800000, 'bugatti', 'pics/Bugatti-Veyron-Grand-Sport-wallpaper3.jpg', 8800000, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
