-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 14, 2020 at 08:28 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projetimmotrad`
--
CREATE DATABASE IF NOT EXISTS `projetimmotrad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetimmotrad`;

-- --------------------------------------------------------

--
-- Table structure for table `Agence`
--

DROP TABLE IF EXISTS `Agence`;
CREATE TABLE `Agence` (
  `idAgence` int(11) NOT NULL,
  `nomAgence` varchar(145) DEFAULT NULL,
  `numRueAgence` varchar(10) DEFAULT NULL,
  `nomRueAgence` varchar(245) DEFAULT NULL,
  `cpAgence` varchar(10) DEFAULT NULL,
  `villeAgence` varchar(245) DEFAULT NULL,
  `phoneAgence` varchar(15) DEFAULT NULL,
  `emailAgence` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Agence`
--

INSERT INTO `Agence` (`idAgence`, `nomAgence`, `numRueAgence`, `nomRueAgence`, `cpAgence`, `villeAgence`, `phoneAgence`, `emailAgence`) VALUES
(2, 'Damien Immobilier', '332', 'Rue Leon Blum', '62100', NULL, '0679375114', 'marceremus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Bien`
--

DROP TABLE IF EXISTS `Bien`;
CREATE TABLE `Bien` (
  `idBien` int(11) NOT NULL,
  `nomBien` varchar(245) DEFAULT NULL,
  `description` text NOT NULL,
  `prixBien` decimal(10,2) DEFAULT NULL,
  `numAdresseBien` varchar(15) DEFAULT NULL,
  `nomAdresseBien` varchar(45) DEFAULT NULL,
  `cpBien` varchar(10) DEFAULT NULL,
  `villeBien` varchar(45) DEFAULT NULL,
  `commissionBien` decimal(10,2) DEFAULT NULL,
  `photoBien` varchar(145) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT NULL,
  `surfaceBien` int(11) DEFAULT NULL,
  `sufaceTerrain` int(11) DEFAULT NULL,
  `Options_idOptions` int(11) NOT NULL,
  `Agence_idAgence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bien`
--

INSERT INTO `Bien` (`idBien`, `nomBien`, `description`, `prixBien`, `numAdresseBien`, `nomAdresseBien`, `cpBien`, `villeBien`, `commissionBien`, `photoBien`, `statut`, `surfaceBien`, `sufaceTerrain`, `Options_idOptions`, `Agence_idAgence`) VALUES
(1, 'Bien A', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', '10000.00', '14', '14 rue Jean Jaures', '62100', 'Arras', '10.00', 'https://picsum.photos/id/193/100/120', 1, 80, 1200, 3, 2),
(2, 'Bien ABC', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', '321987.00', '14', '14 rue Jean Jaures', '62100', 'Arras', '10.00', 'https://picsum.photos/id/249/100/120', 1, 80, 1200, 3, 2),
(3, 'Bien XYZ', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', '24900.00', '14', '14 rue Jean Jaures', '62100', 'Arras', '10.00', 'https://picsum.photos/id/43/100/120', 1, 80, 1200, 3, 2),
(4, 'Bien super', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', '10290.00', '14', '14 rue Jean Jaures', '62100', 'Arras', '10.00', 'https://picsum.photos/id/948/100/120', 1, 80, 1200, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Options`
--

DROP TABLE IF EXISTS `Options`;
CREATE TABLE `Options` (
  `idOptions` int(11) NOT NULL,
  `nomOption` varchar(245) DEFAULT NULL,
  `quantite` int(11) DEFAULT '1',
  `statut` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Options`
--

INSERT INTO `Options` (`idOptions`, `nomOption`, `quantite`, `statut`) VALUES
(3, 'Balcon', 1, '1'),
(4, 'Balcon 1', 2, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agence`
--
ALTER TABLE `Agence`
  ADD PRIMARY KEY (`idAgence`),
  ADD UNIQUE KEY `idAgence_UNIQUE` (`idAgence`);

--
-- Indexes for table `Bien`
--
ALTER TABLE `Bien`
  ADD PRIMARY KEY (`idBien`),
  ADD UNIQUE KEY `idBien_UNIQUE` (`idBien`),
  ADD KEY `fk_Bien_Options_idx` (`Options_idOptions`),
  ADD KEY `fk_Bien_Agence1_idx` (`Agence_idAgence`);

--
-- Indexes for table `Options`
--
ALTER TABLE `Options`
  ADD PRIMARY KEY (`idOptions`),
  ADD UNIQUE KEY `idOptions_UNIQUE` (`idOptions`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Agence`
--
ALTER TABLE `Agence`
  MODIFY `idAgence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Bien`
--
ALTER TABLE `Bien`
  MODIFY `idBien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Options`
--
ALTER TABLE `Options`
  MODIFY `idOptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bien`
--
ALTER TABLE `Bien`
  ADD CONSTRAINT `fk_Bien_Agence1` FOREIGN KEY (`Agence_idAgence`) REFERENCES `Agence` (`idAgence`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Bien_Options` FOREIGN KEY (`Options_idOptions`) REFERENCES `Options` (`idOptions`) ON DELETE CASCADE ON UPDATE CASCADE;
