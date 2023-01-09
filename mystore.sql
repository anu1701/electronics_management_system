-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 08:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Lenovo'),
(3, 'Samsung'),
(4, 'IPhone'),
(5, 'LG'),
(6, 'Canon'),
(7, 'Nikon'),
(8, 'whirlpool'),
(9, 'boAt'),
(10, 'JBL');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Refridgerator'),
(2, 'Mobile Phones'),
(3, 'smart watches'),
(4, 'TV'),
(5, 'headphones'),
(6, 'laptops'),
(7, 'cameras'),
(8, 'washing machine');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_price`, `date`, `status`) VALUES
(1, 'Refridgerator', 'LG Star Double Door Convertible Refrigerator', 'LG,Double,Door,Refridgerator', 1, 5, 'ref.jpg', '26000', '2023-01-09 18:24:37', 'true'),
(2, 'Mobile Phones', 'APPLE iPhone 11 plus\r\n(Black, 64 GB)  with metal case,charger', 'APPLE,iPhone,Black', 2, 4, 'apple-iphone-11.jpg', '45000', '2023-01-09 18:54:26', 'true'),
(3, 'smart watches', 'boAt Storm 1.3\" CurvedDisplay Smartwatch  (Black Strap, Regular)', 'boAt,Smartwatch.Black', 3, 9, 'watch1.jpg', '2000', '2023-01-09 16:12:19', 'true'),
(4, 'TV', ' Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL-43W6603 (Black)', 'Sony.Bravia,LED,Smart', 4, 3, 'tv1.jpg', '40000', '2023-01-09 18:58:11', 'true'),
(5, 'headphones', 'JBL Tune 500 Powerful Bass On-Ear Headphones With Mic Black', 'JBL,Bass,Headphones,Black', 5, 10, 'el_hover_img1.jpg', '3000', '2023-01-09 19:08:26', 'true'),
(6, 'cameras', 'Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S  is STM Lens (Black)Canon EOS 200D ', 'Canon,Camera,Lens', 7, 6, 'canon-camera.jpg', '30000', '2023-01-09 19:08:39', 'true'),
(7, ' washing machine', 'Whirlpool 7.5 kg 5 Star Fully Automatic Front Load Washing Machine', 'Whirlpool,Washing,Machine,Top,Load', 8, 8, 'washmachine2.jpg', '30000', '2023-01-09 19:09:35', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
