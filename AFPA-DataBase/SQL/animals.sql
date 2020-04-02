-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2020 at 10:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `animals`
--
CREATE DATABASE IF NOT EXISTS `animals` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `animals`;

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE `adresse` (
  `idadresse` int(11) NOT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `code_postal` varchar(6) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`idadresse`, `adresse`, `code_postal`, `ville`) VALUES
(1, '25 RUE JEAN JAURES', '62100', 'CALAIS'),
(2, '12 RUE PAUL ', '62110', 'ARRAS');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE `animals` (
  `idAnimals` int(11) NOT NULL,
  `nom_animal` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `Proprios_idProprios` int(11) NOT NULL,
  `race_idrace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`idAnimals`, `nom_animal`, `date_naissance`, `Proprios_idProprios`, `race_idrace`) VALUES
(1, 'TATO', '2000-02-20', 1, 1),
(2, 'TUTU', '2001-12-12', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `proprios`
--

DROP TABLE IF EXISTS `proprios`;
CREATE TABLE `proprios` (
  `idProprios` int(11) NOT NULL,
  `nom_proprio` varchar(45) DEFAULT NULL,
  `prenom_proprio` varchar(45) DEFAULT NULL,
  `adresse_idadresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proprios`
--

INSERT INTO `proprios` (`idProprios`, `nom_proprio`, `prenom_proprio`, `adresse_idadresse`) VALUES
(1, 'TATA', 'TOTO', 1),
(2, 'CACA', 'CA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
CREATE TABLE `race` (
  `idrace` int(11) NOT NULL,
  `nom_race` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`idrace`, `nom_race`) VALUES
(1, 'Croisé'),
(2, 'Bâtard'),
(3, 'Corniaud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`idadresse`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`idAnimals`),
  ADD KEY `fk_Animals_Proprios1_idx` (`Proprios_idProprios`),
  ADD KEY `fk_Animals_race1_idx` (`race_idrace`);

--
-- Indexes for table `proprios`
--
ALTER TABLE `proprios`
  ADD PRIMARY KEY (`idProprios`),
  ADD KEY `fk_Proprios_adresse1_idx` (`adresse_idadresse`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`idrace`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `idadresse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `idAnimals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proprios`
--
ALTER TABLE `proprios`
  MODIFY `idProprios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `idrace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
