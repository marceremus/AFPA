-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 12, 2019 at 08:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `password`
--

-- --------------------------------------------------------

--
-- Table structure for table `signit`
--

CREATE TABLE `signit` (
  `id_signit` int(11) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signit`
--
ALTER TABLE `signit`
  ADD PRIMARY KEY (`id_signit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signit`
--
ALTER TABLE `signit`
  MODIFY `id_signit` int(11) NOT NULL AUTO_INCREMENT;
