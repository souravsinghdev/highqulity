-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2026 at 06:01 PM
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
-- Database: `highqualitypet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'sourav', 'souravsingh@123gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_img` varchar(200) DEFAULT NULL,
  `category_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_img`, `category_slug`) VALUES
(2, 'Dogs', 'img2.webp', 'dogs'),
(3, 'Birds', 'img3.webp', 'birds'),
(4, 'Cats', 'img1.webp', 'cats');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `contact_name`, `address`, `city`, `postal_code`, `country`) VALUES
(1, 'Alfreds Futterkiste', 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo Emparedados y helados', 'Ana Trujillo', 'Avda. de la Constitución 2222', 'México D.F.', '05021', 'Mexico'),
(3, 'Antonio Moreno Taquería', 'Antonio Moreno', 'Mataderos 2312', 'México D.F.', '05023', 'Mexico'),
(4, 'Around the Horn', 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Berglunds snabbköp', 'Christina Berglund', 'Berguvsvägen 8', 'Luleå', 'S-958 22', 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_slug` varchar(200) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `desriptions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_slug`, `product_img`, `product_price`, `desriptions`) VALUES
(13, 2, 'Retriever', 'retriever', 'img1.webp', 1000, ''),
(14, 2, 'Beagle', 'beagle', 'img2.webp', 2000, ''),
(15, 2, 'Pomeranian', 'pomeranian', 'img3.webp', 3000, ''),
(16, 2, 'Shih Tzu', 'shih-tzu', 'img4.webp', 4000, ''),
(17, 2, 'Husky', 'husky', 'img5.webp', 5000, ''),
(18, 2, 'German Shepherd', 'german-shepherd', 'img6.webp', 6000, ''),
(19, 2, 'golden-retriever', 'golden-retriever', 'img7.webp', 7000, ''),
(20, 2, 'pug', 'pug', 'img8.webp', 8000, ''),
(21, 2, 'pekingese', 'pekingese', 'img9.webp', 9000, ''),
(22, 2, 'Papillon', 'papillon', 'img10.webp', 10000, ''),
(23, 2, 'Chow Chow', 'chow-chow', 'img11.webp', 11000, ''),
(24, 3, 'Parrot', 'parrot', 'img1.webp', 1000, ''),
(25, 3, 'Lovebirds', 'lovebirds', 'img2.webp', 2000, ''),
(26, 3, 'Cockatie', 'cockatie', 'img3.webp', 3000, ''),
(27, 3, 'finches', 'finches', 'img4.webp', 4000, ''),
(28, 3, 'Macaw Parrot', 'macaw-parrot', 'img5.webp', 5000, ''),
(31, 2, 'Coco', 'coco', 'bichone-frise.jpg', 5000, 'he is cute'),
(32, 4, 'Bengol Cat', 'bengol-cat', 'img1.webp', 500, 'she is beautiful'),
(33, 4, 'Black White', 'Black-white', 'img2.webp', 1997, 'This is beutiful cat'),
(34, 4, 'Gray Cat', 'gray-cat', 'img3.webp', 3000, 'This is beutiful cat'),
(35, 4, 'White Cat', 'white-cat', 'img4.webp', 4001, 'This is beautiful and cute cat.'),
(36, 4, 'White blue cat', 'white-blue-cat', 'img5.webp', 4000, 'This is cute cat'),
(37, 4, 'White blue eyes cate', 'white-blue-eyes-cat', 'img6.webp', 4998, 'This is beutiful cat '),
(38, 4, 'Gray yound cat', 'gray-yound-cat', 'img7.webp', 4000, ''),
(39, 4, 'black cat', 'black-cat', 'img8.webp', 3000, 'This is beutiful'),
(40, 4, 'White Brown Cat', 'white-brown-cat', 'img9.webp', 4999, 'This is beautiful'),
(41, 4, 'Mini Brown Cat', 'Mini-brown-cat', 'img10.webp', 3998, 'This is beautiful cat'),
(42, 4, 'Mini White Brown Cat', 'mini-white-brown-cat', 'img11.webp', 2, 'This is beautiful cat.'),
(43, 4, 'Mixed breed cats', 'mixed-breed-cats', 'img12.webp', 2000, 'This is beautiful cat'),
(44, 4, 'New Cat', 'new-cat', 'side-banner-01.webp', 3000, 'This is beautiful cat'),
(45, 2, 'puppy', 'puppy', 'pexels-sudhirsangwan-29382272.jpg', 149, 'this orange');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `address`, `create_at`) VALUES
(1, 'sourav', 'singh', 'sourav@', 'souravsingh99@gmail.com', '9876543210', '123', 'kh-149/1 Gali-number=5,Ajit Vihar, burari ', '2026-04-19 14:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
