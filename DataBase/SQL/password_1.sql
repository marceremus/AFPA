-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 18, 2019 at 10:35 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `password`
--

-- --------------------------------------------------------

--
-- Table structure for table `typeUsers`
--

CREATE TABLE `typeUsers` (
  `Id_typeUser` int(11) NOT NULL,
  `typeName` varchar(50) NOT NULL,
  `actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeUsers`
--

INSERT INTO `typeUsers` (`Id_typeUser`, `typeName`, `actived`) VALUES
(1, 'Admin', 1),
(2, 'Autor', 1),
(3, 'Editor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_signit` int(11) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `Id_typeUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_signit`, `email`, `password`, `Id_typeUser`) VALUES
(1, 'marc@eremus.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 1),
(2, 'papa@tata.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 2),
(3, 'robert@pierre.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typeUsers`
--
ALTER TABLE `typeUsers`
  ADD PRIMARY KEY (`Id_typeUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_signit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typeUsers`
--
ALTER TABLE `typeUsers`
  MODIFY `Id_typeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_signit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
