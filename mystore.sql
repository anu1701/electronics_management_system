-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 11:36 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', ' admin@admin.com', '$2y$10$gzHXRjp.akd6lgyxRZt6b.k9TohQ9gEFZnHCxKJ85UCVXhD8g/6ii');

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
(10, 'JBL'),
(11, 'Butterfly'),
(12, 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'washing machine'),
(9, 'Grinder');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `phone`, `message`) VALUES
(' aanch', 'shetty', 'aanchalnshetty111@gmail.com', '8789709871', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Refridgerator1', 'LG Star Double Door Convertible Refrigerator', 'LG,Double,Door,Refridgerator', 1, 5, 'ref.jpg', '26000', '2023-01-22 21:00:38', 'true'),
(2, 'Mobile Phones', 'APPLE iPhone 11 plus\r\n(Black, 64 GB)  with metal case,charger', 'APPLE,iPhone,Black', 2, 4, 'apple-iphone-11.jpg', '45000', '2023-01-09 18:54:26', 'true'),
(3, 'smart watches', 'boAt Storm 1.3\" CurvedDisplay Smartwatch  (Black Strap, Regular)', 'boAt,Smartwatch.Black', 3, 9, 'watch1.jpg', '2000', '2023-01-09 16:12:19', 'true'),
(4, 'TV', ' Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL-43W6603 (Black)', 'Sony.Bravia,LED,Smart', 4, 3, 'tv1.jpg', '40000', '2023-01-09 18:58:11', 'true'),
(5, 'headphones', 'JBL Tune 500 Powerful Bass On-Ear Headphones With Mic Black', 'JBL,Bass,Headphones,Black', 5, 10, 'el_hover_img1.jpg', '3000', '2023-01-09 19:08:26', 'true'),
(6, 'cameras', 'Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S  is STM Lens (Black)Canon EOS 200D ', 'Canon,Camera,Lens', 7, 6, 'canon-camera.jpg', '30000', '2023-01-09 19:08:39', 'true'),
(7, ' washing machine', 'Whirlpool 7.5 kg 5 Star Fully Automatic Front Load Washing Machine', 'Whirlpool,Washing,Machine,Top,Load', 8, 8, 'washmachine2.jpg', '30000', '2023-01-09 19:09:35', 'true'),
(8, 'laptops', 'HP 15 11th Gen Intel Core i5 15.6 inches Laptop (8GB/1TB HDD/m.2 Slot/Windows 10/MS Office/NVIDIA Jet Black/1.77 Kg)', 'HP,15,11th,i5', 6, 1, 'hp-laptop1.jpg', '45000', '2023-01-11 19:21:34', 'true'),
(18, 'Grinder', 'Butterfly Matchless Plus 2L Table Top Wet Grinder', 'grinder,GRINDER,Grinder,butterfly,Butterfly', 9, 11, 'grinder1.jpg', '7000', '2023-01-21 06:09:33', 'true'),
(28, 'headphone', 'JBL headphones XE1135 bass', 'sony,bass,headphones', 5, 10, 'home-img-3.jpg', '3000', '2023-02-01 23:28:34', 'true'),
(29, 'Laptop', 'Lenovo Ideapad es-109999ehf  processor i5-gen12 8gb-RAM', 'Lenovo,ideapad,i5,gen12,RAM', 6, 2, 'arrival-2.jpg', '60000', '2023-02-02 07:44:14', 'true'),
(30, 'refridgerator', '44L whirlpool refridgerator with inbuilt stabilization', '44L,whirlpool,refridgerator,inbuilt,stabilization', 1, 8, 'ref2.jpg', '35000', '2023-02-02 08:42:16', 'true'),
(31, 'Washing Machine', 'front load,44L whirlpool washing machine', 'washing,machine,load,front', 8, 8, 'washmachine2.jpg', '44500', '2023-02-02 08:43:44', 'true'),
(32, 'laptop', 'laptop,8GB RAM,360 folds,GTX.256 GB SSD', 'laptop,SSD,256,GB', 6, 1, 'arrival-2-hover.jpg', '79000', '2023-02-02 08:45:59', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'anu', 'user@gmail.com', '$2y$10$ewhMn24qC9oG9XKt1AwXvOui4jHvsk26ijretHkjlO0sXp9j4VldK', 'aanch.jpeg', '::1', 'mlore', '6362037118');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
