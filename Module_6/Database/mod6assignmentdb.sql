-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 03:11 PM
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
-- Database: `mod6assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catId`, `name`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Acer'),
(4, 'Canon');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cmrId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cmrId`, `name`, `email`, `location`) VALUES
(1, 'Shafiqul Islam', 'shafiq@yahoo.com', 'Dhaka, Bangladesh'),
(2, 'Robin Sami', 'sami@gmail.com', 'Rajshahi, Bangladesh'),
(3, 'Saiful Alam', 'saiful@gmail.com', 'Chittagong, Bangladesh'),
(4, 'Rifat Chowdhury', 'rifat@hotmail.com', 'Dhaka, Bangladesh'),
(5, 'Rafiul Ivan', 'ivan@gmail.com', 'Rongpur, Bangladesh'),
(6, 'Sharif Newaz', 'sharif@gmail.com', 'Khulna, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `itemId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`itemId`, `orderId`, `productId`, `catId`, `quantity`, `unitPrice`) VALUES
(1, 1, 1, 1, 2, 569),
(3, 2, 3, 3, 1, 453),
(4, 3, 4, 4, 1, 545),
(6, 4, 12, 4, 2, 389),
(8, 5, 7, 3, 2, 340),
(9, 6, 5, 1, 2, 640),
(10, 7, 11, 3, 3, 460),
(11, 8, 3, 3, 2, 453),
(12, 9, 6, 2, 2, 520),
(14, 10, 11, 3, 2, 460),
(15, 11, 6, 2, 2, 520),
(16, 12, 8, 4, 3, 440),
(17, 13, 10, 2, 4, 450),
(19, 14, 7, 3, 5, 340);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `totalAmount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `cmrId`, `orderDate`, `totalAmount`) VALUES
(1, 6, '2023-10-05 15:02:27', 2518),
(2, 3, '2023-10-17 15:02:27', 453),
(3, 5, '2023-10-09 15:04:24', 1825),
(4, 3, '2023-10-18 15:04:55', 1795),
(5, 4, '2023-10-09 15:04:55', 680),
(6, 5, '2023-10-01 15:05:48', 1280),
(7, 1, '2023-09-29 15:06:16', 1380),
(8, 3, '2023-10-10 15:06:39', 906),
(9, 6, '2023-11-01 15:07:05', 1040),
(10, 2, '2023-09-28 15:07:05', 2627),
(11, 4, '2023-10-03 15:07:46', 1040),
(12, 3, '2023-09-13 15:08:06', 1320),
(13, 4, '2023-11-03 15:09:02', 3080),
(14, 6, '2023-10-24 15:09:33', 1700);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `catId`, `name`, `description`, `price`) VALUES
(1, 1, 'Product-1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 569),
(2, 2, 'Product-2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 345),
(3, 3, 'Product-3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 453),
(4, 4, 'Product-4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 545),
(5, 1, 'Product-5', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 640),
(6, 2, 'Product-6', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 520),
(7, 3, 'Product-7', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 340),
(8, 4, 'Product-8', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 440),
(9, 1, 'Product-9', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 339),
(10, 2, 'Product-10', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 450),
(11, 3, 'Product-11', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 460),
(12, 4, 'Product-12', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi illum unde? Ab officiis ipsam libero impedit, numquam repellat quam, temporibus dolorum possimus fugiat mollitia est id voluptatibus quia labore.', 389);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cmrId`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `cmrId` (`cmrId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `catId` (`catId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cmrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cmrId`) REFERENCES `customers` (`cmrId`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
