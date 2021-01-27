-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2020 at 04:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bikeProduct`
--
CREATE DATABASE IF NOT EXISTS `bikeProduct` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bikeProduct`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Electra'),
(2, 'Haro'),
(3, 'Heller'),
(4, 'Pure Cycles'),
(5, 'Ritchey'),
(6, 'Strider'),
(7, 'Sun Bicycles'),
(8, 'Surly'),
(9, 'Trek');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `idCat` int(11) NOT NULL,
  `nameCat` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCat`, `nameCat`) VALUES
(1, 'Children Bicycles'),
(2, 'Comfort Bicycles'),
(3, 'Cruisers Bicycles'),
(4, 'Cyclocross Bicycles'),
(5, 'Electric Bikes'),
(6, 'Mountain Bikes'),
(7, 'Road Bikes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` varchar(2) NOT NULL,
  `name` varchar(95) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `model_year` int(11) NOT NULL,
  `price` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `model_year`, `price`) VALUES
('1', 'Trek 820 - 2016', 9, 6, 2016, '379.99'),
('10', 'Surly Straggler - 2016', 9, 5, 2016, '3999.99'),
('11', 'Surly Straggler 6S0b - 2016', 9, 4, 2016, '1799.99'),
('12', 'Electra Townie Original 210 -2016', 8, 4, 2016, '2999.99'),
('13', 'Electra Cruiser l (24-lnch); - 2016', 8, 4, 2016, '1S49.00'),
('14', 'Electra Girt\'s Hawaii l (16-inch); - 201S/2016', 1, 3, 2016, '1680.99'),
('2', 'Ritchey Timberwolf Frameset - 2016 3 Surly Wednesday Frameset - 2016 4 Trek Fuel EX 8 29 - 2016', 5, 6, 2016, '749.99'),
('6', 'Surty lce Cream Truck Frameset -2016', 9, 6, 2016, '2899.99'),
('7', 'Trek Slash 8 27.S - 2016', 3, 6, 2016, '1320.99'),
('8', 'Trek Remedy 29 Carbon Frameset - 2016 9 Trek Conduit+ - 2016', 8, 6, 2016, '469.99'),
('S', 'Heller Shagamaw Frame - 201', 8, 6, 2016, '999.99');

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
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
