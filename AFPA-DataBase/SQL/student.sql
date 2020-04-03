-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 28, 2020 at 09:28 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(36) NOT NULL,
  `ContactName` varchar(20) NOT NULL,
  `Address` varchar(46) NOT NULL,
  `City` varchar(15) NOT NULL,
  `PostalCode` varchar(9) DEFAULT NULL,
  `Country` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `CustomerName`, `ContactName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Alfreds Futterkiste', 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo Emparedados y helados', 'Ana Trujillo', 'Avda. de la Constitución 2222', 'México D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno Taquería', 'Antonio Moreno', 'Mataderos 2312', 'México D.F.', '5023', 'Mexico'),
(4, 'Around the Horn', 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Berglunds snabbköp', 'Christina Berglund', 'Berguvsvägen 8', 'Luleå', 'S-958 22', 'Sweden'),
(6, 'Blauer See Delikatessen', 'Hanna Moos', 'Forsterstr. 57', 'Mannheim', '68306', 'Germany'),
(7, 'Blondel père et fils', 'Frédérique Citeaux', '24, place Kléber', 'Strasbourg', '67000', 'France'),
(8, 'Bólido Comidas preparadas', 'Martín Sommer', 'C/ Araquil, 67', 'Madrid', '28023', 'Spain'),
(9, 'Bon app\'', 'Laurence Lebihans', '12, rue des Bouchers', 'Marseille', '13008', 'France'),
(10, 'Bottom-Dollar Marketse', 'Elizabeth Lincoln', '23 Tsawassen Blvd.', 'Tsawassen', 'T2F 8M4', 'Canada'),
(11, 'B\'s Beverages', 'Victoria Ashworth', 'Fauntleroy Circus', 'London', 'EC2 5NT', 'UK'),
(12, 'Cactus Comidas para llevar', 'Patricio Simpson', 'Cerrito 333', 'Buenos Aires', '1010', 'Argentina'),
(13, 'Centro comercial Moctezuma', 'Francisco Chang', 'Sierras de Granada 9993', 'México D.F.', '5022', 'Mexico'),
(14, 'Chop-suey Chinese', 'Yang Wang', 'Hauptstr. 29', 'Bern', '3012', 'Switzerland'),
(15, 'Comércio Mineiro', 'Pedro Afonso', 'Av. dos Lusíadas, 23', 'São Paulo', '05432-043', 'Brazil'),
(16, 'Consolidated Holdings', 'Elizabeth Brown', 'Berkeley Gardens 12 Brewery', 'London', 'WX1 6LT', 'UK'),
(17, 'Drachenblut Delikatessend', 'Sven Ottlieb', 'Walserweg 21', 'Aachen', '52066', 'Germany'),
(18, 'Du monde entier', 'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '44000', 'France'),
(19, 'Eastern Connection', 'Ann Devon', '35 King George', 'London', 'WX3 6FW', 'UK'),
(20, 'Ernst Handel', 'Roland Mendel', 'Kirchgasse 6', 'Graz', '8010', 'Austria'),
(21, 'Familia Arquibaldo', 'Aria Cruz', 'Rua Orós, 92', 'São Paulo', '05442-030', 'Brazil'),
(22, 'FISSA Fabrica Inter. Salchichas S.A.', 'Diego Roel', 'C/ Moralzarzal, 86', 'Madrid', '28034', 'Spain'),
(23, 'Folies gourmandes', 'Martine Rancé', '184, chaussée de Tournai', 'Lille', '59000', 'France'),
(24, 'Folk och fä HB', 'Maria Larsson', 'Åkergatan 24', 'Bräcke', 'S-844 67', 'Sweden'),
(25, 'Frankenversand', 'Peter Franken', 'Berliner Platz 43', 'München', '80805', 'Germany'),
(26, 'France restauration', 'Carine Schmitt', '54, rue Royale', 'Nantes', '44000', 'France'),
(27, 'Franchi S.p.A.', 'Paolo Accorti', 'Via Monte Bianco 34', 'Torino', '10100', 'Italy'),
(28, 'Furia Bacalhau e Frutos do Mar', 'Lino Rodriguez', 'Jardim das rosas n. 32', 'Lisboa', '1675', 'Portugal'),
(29, 'Galería del gastrónomo', 'Eduardo Saavedra', 'Rambla de Cataluña, 23', 'Barcelona', '8022', 'Spain'),
(30, 'Godos Cocina Típica', 'José Pedro Freyre', 'C/ Romero, 33', 'Sevilla', '41101', 'Spain'),
(31, 'Gourmet Lanchonetes', 'André Fonseca', 'Av. Brasil, 442', 'Campinas', '04876-786', 'Brazil'),
(32, 'Great Lakes Food Market', 'Howard Snyder', '2732 Baker Blvd.', 'Eugene', '97403', 'USA'),
(33, 'GROSELLA-Restaurante', 'Manuel Pereira', '5ª Ave. Los Palos Grandes', 'Caracas', '1081', 'Venezuela'),
(34, 'Hanari Carnes', 'Mario Pontes', 'Rua do Paço, 67', 'Rio de Janeiro', '05454-876', 'Brazil'),
(35, 'HILARIÓN-Abastos', 'Carlos Hernández', 'Carrera 22 con Ave. Carlos Soublette #8-35', 'San Cristóbal', '5022', 'Venezuela'),
(36, 'Hungry Coyote Import Store', 'Yoshi Latimer', 'City Center Plaza 516 Main St.', 'Elgin', '97827', 'USA'),
(37, 'Hungry Owl All-Night Grocers', 'Patricia McKenna', '8 Johnstown Road', 'Cork', NULL, 'Ireland'),
(38, 'Island Trading', 'Helen Bennett', 'Garden House Crowther Way', 'Cowes', 'PO31 7PJ', 'UK'),
(39, 'Königlich Essen', 'Philip Cramer', 'Maubelstr. 90', 'Brandenburg', '14776', 'Germany'),
(40, 'La corne d\'abondance', 'Daniel Tonini', '67, avenue de l\'Europe', 'Versailles', '78000', 'France'),
(41, 'La maison d\'Asie', 'Annette Roulet', '1 rue Alsace-Lorraine', 'Toulouse', '31000', 'France'),
(42, 'Laughing Bacchus Wine Cellars', 'Yoshi Tannamuri', '1900 Oak St.', 'Vancouver', 'V3F 2K1', 'Canada'),
(43, 'Lazy K Kountry Store', 'John Steel', '12 Orchestra Terrace', 'Walla Walla', '99362', 'USA'),
(44, 'Lehmanns Marktstand', 'Renate Messner', 'Magazinweg 7', 'Frankfurt a.M.', '60528', 'Germany'),
(45, 'Let\'s Stop N Shop', 'Jaime Yorres', '87 Polk St. Suite 5', 'San Francisco', '94117', 'USA'),
(46, 'LILA-Supermercado', 'Carlos González', 'Carrera 52 con Ave. Bolívar #65-98 Llano Largo', 'Barquisimeto', '3508', 'Venezuela'),
(47, 'LINO-Delicateses', 'Felipe Izquierdo', 'Ave. 5 de Mayo Porlamar', 'I. de Margarita', '4980', 'Venezuela'),
(48, 'Lonesome Pine Restaurant', 'Fran Wilson', '89 Chiaroscuro Rd.', 'Portland', '97219', 'USA'),
(49, 'Magazzini Alimentari Riuniti', 'Giovanni Rovelli', 'Via Ludovico il Moro 22', 'Bergamo', '24100', 'Italy'),
(50, 'Maison Dewey', 'Catherine Dewey', 'Rue Joseph-Bens 532', 'Bruxelles', 'B-1180', 'Belgium'),
(51, 'Mère Paillarde', 'Jean Fresnière', '43 rue St. Laurent', 'Montréal', 'H1J 1C3', 'Canada'),
(52, 'Morgenstern Gesundkost', 'Alexander Feuer', 'Heerstr. 22', 'Leipzig', '4179', 'Germany'),
(53, 'North/South', 'Simon Crowther', 'South House 300 Queensbridge', 'London', 'SW7 1RZ', 'UK'),
(54, 'Océano Atlántico Ltda.', 'Yvonne Moncada', 'Ing. Gustavo Moncada 8585 Piso 20-A', 'Buenos Aires', '1010', 'Argentina'),
(55, 'Old World Delicatessen', 'Rene Phillips', '2743 Bering St.', 'Anchorage', '99508', 'USA'),
(56, 'Ottilies Käseladen', 'Henriette Pfalzheim', 'Mehrheimerstr. 369', 'Köln', '50739', 'Germany'),
(57, 'Paris spécialités', 'Marie Bertrand', '265, boulevard Charonne', 'Paris', '75012', 'France'),
(58, 'Pericles Comidas clásicas', 'Guillermo Fernández', 'Calle Dr. Jorge Cash 321', 'México D.F.', '5033', 'Mexico'),
(59, 'Piccolo und mehr', 'Georg Pipps', 'Geislweg 14', 'Salzburg', '5020', 'Austria'),
(60, 'Princesa Isabel Vinhoss', 'Isabel de Castro', 'Estrada da saúde n. 58', 'Lisboa', '1756', 'Portugal'),
(61, 'Que Delícia', 'Bernardo Batista', 'Rua da Panificadora, 12', 'Rio de Janeiro', '02389-673', 'Brazil'),
(62, 'Queen Cozinha', 'Lúcia Carvalho', 'Alameda dos Canàrios, 891', 'São Paulo', '05487-020', 'Brazil'),
(63, 'QUICK-Stop', 'Horst Kloss', 'Taucherstraße 10', 'Cunewalde', '1307', 'Germany'),
(64, 'Rancho grande', 'Sergio Gutiérrez', 'Av. del Libertador 900', 'Buenos Aires', '1010', 'Argentina'),
(65, 'Rattlesnake Canyon Grocery', 'Paula Wilson', '2817 Milton Dr.', 'Albuquerque', '87110', 'USA'),
(66, 'Reggiani Caseifici', 'Maurizio Moroni', 'Strada Provinciale 124', 'Reggio Emilia', '42100', 'Italy'),
(67, 'Ricardo Adocicados', 'Janete Limeira', 'Av. Copacabana, 267', 'Rio de Janeiro', '02389-890', 'Brazil'),
(68, 'Richter Supermarkt', 'Michael Holz', 'Grenzacherweg 237', 'Genève', '1203', 'Switzerland'),
(69, 'Romero y tomillo', 'Alejandra Camino', 'Gran Vía, 1', 'Madrid', '28001', 'Spain'),
(70, 'Santé Gourmet', 'Jonas Bergulfsen', 'Erling Skakkes gate 78', 'Stavern', '4110', 'Norway'),
(71, 'Save-a-lot Markets', 'Jose Pavarotti', '187 Suffolk Ln.', 'Boise', '83720', 'USA'),
(72, 'Seven Seas Imports', 'Hari Kumar', '90 Wadhurst Rd.', 'London', 'OX15 4NB', 'UK'),
(73, 'Simons bistro', 'Jytte Petersen', 'Vinbæltet 34', 'København', '1734', 'Denmark'),
(74, 'Spécialités du monde', 'Dominique Perrier', '25, rue Lauriston', 'Paris', '75016', 'France'),
(75, 'Split Rail Beer & Ale', 'Art Braunschweiger', 'P.O. Box 555', 'Lander', '82520', 'USA'),
(76, 'Suprêmes délices', 'Pascale Cartrain', 'Boulevard Tirou, 255', 'Charleroi', 'B-6000', 'Belgium'),
(77, 'The Big Cheese', 'Liz Nixon', '89 Jefferson Way Suite 2', 'Portland', '97201', 'USA'),
(78, 'The Cracker Box', 'Liu Wong', '55 Grizzly Peak Rd.', 'Butte', '59801', 'USA'),
(79, 'Toms Spezialitäten', 'Karin Josephs', 'Luisenstr. 48', 'Münster', '44087', 'Germany'),
(80, 'Tortuga Restaurante', 'Miguel Angel Paolino', 'Avda. Azteca 123', 'México D.F.', '5033', 'Mexico'),
(81, 'Tradição Hipermercados', 'Anabela Domingues', 'Av. Inês de Castro, 414', 'São Paulo', '05634-030', 'Brazil'),
(82, 'Trail\'s Head Gourmet Provisioners', 'Helvetius Nagy', '722 DaVinci Blvd.', 'Kirkland', '98034', 'USA'),
(83, 'Vaffeljernet', 'Palle Ibsen', 'Smagsløget 45', 'Århus', '8200', 'Denmark'),
(84, 'Victuailles en stock', 'Mary Saveley', '2, rue du Commerce', 'Lyon', '69004', 'France'),
(85, 'Vins et alcools Chevalier', 'Paul Henriot', '59 rue de l\'Abbaye', 'Reims', '51100', 'France'),
(86, 'Die Wandernde Kuh', 'Rita Müller', 'Adenauerallee 900', 'Stuttgart', '70563', 'Germany'),
(87, 'Wartian Herkku', 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(88, 'Wellington Importadora', 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(89, 'White Clover Markets', 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(90, 'Wilman Kala', 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(91, 'Wolski', 'Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ProductID` varchar(20) NOT NULL,
  `ProductName` varchar(32) DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Unit` varchar(20) DEFAULT NULL,
  `Price` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `SupplierID`, `CategoryID`, `Unit`, `Price`) VALUES
('1', 'Chais', 1, 1, '10 boxes x 20 bags', '18.00'),
('10', 'Ikura', 4, 8, '12 - 200 ml jars', '31.00'),
('11', 'Queso Cabrales', 5, 4, '1 kg pkg.', '21.00'),
('12', 'Queso Manchego La Pastora', 5, 4, '10 - 500 g pkgs.', '38.00'),
('13', 'Konbu', 6, 8, '2 kg box', '6.00'),
('14', 'Tofu', 6, 7, '40 - 100 g pkgs.', '23.25'),
('15', 'Genen Shouyu', 6, 2, '24 - 250 ml bottles', '15.50'),
('16', 'Pavlova', 7, 3, '32 - 500 g boxes', '17.45'),
('17', 'Alice Mutton', 7, 6, '20 - 1 kg tins', '39.00'),
('18', 'Carnarvon Tigers', 7, 8, '16 kg pkg.', '62.50'),
('19', 'Teatime Chocolate Biscuits', 8, 3, '10 boxes x 12 pieces', '9.20'),
('2', 'Chang', 1, 1, '24 - 12 oz bottles', '19.00'),
('20', 'Sir Rodney\'s Marmalade', 8, 3, '30 gift boxes', '81.00'),
('21', 'Sir Rodney\'s Scones', 8, 3, '24 pkgs. x 4 pieces', '10.00'),
('22', 'Gustaf\'s Knäckebröd', 9, 5, '24 - 500 g pkgs.', '21.00'),
('23', 'Tunnbröd', 9, 5, '12 - 250 g pkgs.', '9.00'),
('24', 'Guaraná Fantástica', 10, 1, '12 - 355 ml cans', '4.50'),
('25', 'NuNuCa Nuß-Nougat-Creme', 11, 3, '20 - 450 g glasses', '14.00'),
('26', 'Gumbär Gummibärchen', 11, 3, '100 - 250 g bags', '31.23'),
('27', 'Schoggi Schokolade', 11, 3, '100 - 100 g pieces', '43.90'),
('28', 'Rössle Sauerkraut', 12, 7, '25 - 825 g cans', '45.60'),
('29', 'Thüringer Rostbratwurst', 12, 6, '50 bags x 30 sausgs.', '123.79'),
('3', 'Aniseed Syrup', 1, 2, '12 - 550 ml bottles', '10.00'),
('30', 'Nord-Ost Matjeshering', 13, 8, '10 - 200 g glasses', '25.89'),
('31', 'Gorgonzola Telino', 14, 4, '12 - 100 g pkgs', '12.50'),
('32', 'Mascarpone Fabioli', 14, 4, '24 - 200 g pkgs.', '32.00'),
('33', 'Geitost', 15, 4, '500 g', '2.50'),
('34', 'Sasquatch Ale', 16, 1, '24 - 12 oz bottles', '14.00'),
('35', 'Steeleye Stout', 16, 1, '24 - 12 oz bottles', '18.00'),
('36', 'Inlagd Sill', 17, 8, '24 - 250 g jars', '19.00'),
('37', 'Gravad lax', 17, 8, '12 - 500 g pkgs.', '26.00'),
('38', 'Côte de Blaye', 18, 1, '12 - 75 cl bottles', '263.50'),
('39', 'Chartreuse verte', 18, 1, '750 cc per bottle', '18.00'),
('4', 'Chef Anton\'s Cajun Seasoning', 2, 2, '48 - 6 oz jars', '22.00'),
('40', 'Boston Crab Meat', 19, 8, '24 - 4 oz tins', '18.40'),
('41', 'Jack\'s New England Clam Chowder', 19, 8, '12 - 12 oz cans', '9.65'),
('42', 'Singaporean Hokkien Fried Mee', 20, 5, '32 - 1 kg pkgs.', '14.00'),
('43', 'Ipoh Coffee', 20, 1, '16 - 500 g tins', '46.00'),
('44', 'Gula Malacca', 20, 2, '20 - 2 kg bags', '19.45'),
('45', 'Røgede sild', 21, 8, '1k pkg.', '9.50'),
('46', 'Spegesild', 21, 8, '4 - 450 g glasses', '12.00'),
('47', 'Zaanse koeken', 22, 3, '10 - 4 oz boxes', '9.50'),
('48', 'Chocolade', 22, 3, '10 pkgs.', '12.75'),
('49', 'Maxilaku', 23, 3, '24 - 50 g pkgs.', '20.00'),
('5', 'Chef Anton\'s Gumbo Mix', 2, 2, '36 boxes', '21.35'),
('50', 'Valkoinen suklaa', 23, 3, '12 - 100 g bars', '16.25'),
('51', 'Manjimup Dried Apples', 24, 7, '50 - 300 g pkgs.', '53.00'),
('52', 'Filo Mix', 24, 5, '16 - 2 kg boxes', '7.00'),
('53', 'Perth Pasties', 24, 6, '48 pieces', '32.80'),
('54', 'Tourtière', 25, 6, '16 pies', '7.45'),
('55', 'Pâté chinois', 25, 6, '24 boxes x 2 pies', '24.00'),
('56', 'Gnocchi di nonna Alice', 26, 5, '24 - 250 g pkgs.', '38.00'),
('57', 'Ravioli Angelo', 26, 5, '24 - 250 g pkgs.', '19.50'),
('58', 'Escargots de Bourgogne', 27, 8, '24 pieces', '13.25'),
('59', 'Raclette Courdavault', 28, 4, '5 kg pkg.', '55.00'),
('6', 'Grandma\'s Boysenberry Spread', 3, 2, '12 - 8 oz jars', '25.00'),
('60', 'Camembert Pierrot', 28, 4, '15 - 300 g rounds', '34.00'),
('61', 'Sirop d\'érable', 29, 2, '24 - 500 ml bottles', '28.50'),
('62', 'Tarte au sucre', 29, 3, '48 pies', '49.30'),
('63', 'Vegie-spread', 7, 2, '15 - 625 g jars', '43.90'),
('64', 'Wimmers gute Semmelknödel', 12, 5, '20 bags x 4 pieces', '33.25'),
('65', 'Louisiana Fiery Hot Pepper Sauce', 2, 2, '32 - 8 oz bottles', '21.05'),
('66', 'Louisiana Hot Spiced Okra', 2, 2, '24 - 8 oz jars', '17.00'),
('67', 'Laughing Lumberjack Lager', 16, 1, '24 - 12 oz bottles', '14.00'),
('68', 'Scottish Longbreads', 8, 3, '10 boxes x 8 pieces', '12.50'),
('69', 'Gudbrandsdalsost', 15, 4, '10 kg pkg.', '36.00'),
('7', 'Uncle Bob\'s Organic Dried Pears', 3, 7, '12 - 1 lb pkgs.', '30.00'),
('70', 'Outback Lager', 7, 1, '24 - 355 ml bottles', '15.00'),
('71', 'Fløtemysost', 15, 4, '10 - 500 g pkgs.', '21.50'),
('72', 'Mozzarella di Giovanni', 14, 4, '24 - 200 g pkgs.', '34.80'),
('73', 'Röd Kaviar', 17, 8, '24 - 150 g jars', '15.00'),
('74', 'Longlife Tofu', 4, 7, '5 kg pkg.', '10.00'),
('75', 'Rhönbräu Klosterbier', 12, 1, '24 - 0.5 l bottles', '7.75'),
('76', 'Lakkalikööri', 23, 1, '500 ml', '18.00'),
('77', 'Original Frankfurter grüne Soße', 12, 2, '12 boxes', '13.00'),
('8', 'Northwoods Cranberry Sauce', 3, 2, '12 - 12 oz jars', '40.00'),
('9', 'Mishi Kobe Niku', 4, 6, '18 - 500 g pkgs.', '97.00'),
('at w3schools.com', NULL, NULL, NULL, NULL, NULL),
('The Try-SQL Editor ?', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(38) NOT NULL,
  `ContactName` varchar(26) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `City` varchar(13) NOT NULL,
  `PostalCode` varchar(8) NOT NULL,
  `Country` varchar(11) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SupplierID`, `SupplierName`, `ContactName`, `Address`, `City`, `PostalCode`, `Country`, `Phone`) VALUES
(1, 'Exotic Liquid', 'Charlotte Cooper', '49 Gilbert St.', 'Londona', 'EC1 4SD', 'UK', '(171) 555-2222'),
(2, 'New Orleans Cajun Delights', 'Shelley Burke', 'P.O. Box 78934', 'New Orleans', '70117', 'USA', '(100) 555-4822'),
(3, 'Grandma Kelly\'s Homestead', 'Regina Murphy', '707 Oxford Rd.', 'Ann Arbor', '48104', 'USA', '(313) 555-5735'),
(4, 'Tokyo Traders', 'Yoshi Nagase', '9-8 Sekimai Musashino-shi', 'Tokyo', '100', 'Japan', '(03) 3555-5011'),
(5, 'Cooperativa de Quesos \'Las Cabras\'', 'Antonio del Valle Saavedra', 'Calle del Rosal 4', 'Oviedo', '33007', 'Spain', '(98) 598 76 54'),
(6, 'Mayumi\'s', 'Mayumi Ohno', '92 Setsuko Chuo-ku', 'Osaka', '545', 'Japan', '(06) 431-7877'),
(7, 'Pavlova, Ltd.', 'Ian Devling', '74 Rose St. Moonie Ponds', 'Melbourne', '3058', 'Australia', '(03) 444-2343'),
(8, 'Specialty Biscuits, Ltd.', 'Peter Wilson', '29 King\'s Way', 'Manchester', 'M14 GSD', 'UK', '(161) 555-4448'),
(9, 'PB Knäckebröd AB', 'Lars Peterson', 'Kaloadagatan 13', 'Göteborg', 'S-345 67', 'Sweden', '031-987 65 43'),
(10, 'Refrescos Americanas LTDA', 'Carlos Diaz', 'Av. das Americanas 12.890', 'São Paulo', '5442', 'Brazil', '(11) 555 4640'),
(11, 'Heli Süßwaren GmbH & Co. KG', 'Petra Winkler', 'Tiergartenstraße 5', 'Berlin', '10785', 'Germany', '(010) 9984510'),
(12, 'Plutzer Lebensmittelgroßmärkte AG', 'Martin Bein', 'Bogenallee 51', 'Frankfurt', '60439', 'Germany', '(069) 992755'),
(13, 'Nord-Ost-Fisch Handelsgesellschaft mbH', 'Sven Petersen', 'Frahmredder 112a', 'Cuxhaven', '27478', 'Germany', '(04721) 8713'),
(14, 'Formaggi Fortini s.r.l.', 'Elio Rossi', 'Viale Dante, 75', 'Ravenna', '48100', 'Italy', '(0544) 60323'),
(15, 'Norske Meierier', 'Beate Vileid', 'Hatlevegen 5', 'Sandvika', '1320', 'Norway', '(0)2-953010'),
(16, 'Bigfoot Breweries', 'Cheryl Saylor', '3400 - 8th Avenue Suite 210', 'Bend', '97101', 'USA', '(503) 555-9931'),
(17, 'Svensk Sjöföda AB', 'Michael Björn', 'Brovallavägen 231', 'Stockholm', 'S-123 45', 'Sweden', '08-123 45 67'),
(18, 'Aux joyeux ecclésiastiques', 'Guylène Nodier', '203, Rue des Francs-Bourgeois', 'Paris', '75004', 'France', '(1) 03.83.00.68'),
(19, 'New England Seafood Cannery', 'Robb Merchant', 'Order Processing Dept. 2100 Paul Revere Blvd.', 'Boston', '2134', 'USA', '(617) 555-3267'),
(20, 'Leka Trading', 'Chandra Leka', '471 Serangoon Loop, Suite #402', 'Singapore', '512', 'Singapore', '555-8787'),
(21, 'Lyngbysild', 'Niels Petersen', 'Lyngbysild Fiskebakken 10', 'Lyngby', '2800', 'Denmark', '43844108'),
(22, 'Zaanse Snoepfabriek', 'Dirk Luchte', 'Verkoop Rijnweg 22', 'Zaandam', '9999 ZZ', 'Netherlands', '(12345) 1212'),
(23, 'Karkki Oy', 'Anne Heikkonen', 'Valtakatu 12', 'Lappeenranta', '53120', 'Finland', '(953) 10956'),
(24, 'G\'day, Mate', 'Wendy Mackenzie', '170 Prince Edward Parade Hunter\'s Hill', 'Sydney', '2042', 'Australia', '(02) 555-5914'),
(25, 'Ma Maison', 'Jean-Guy Lauzon', '2960 Rue St. Laurent', 'Montréal', 'H1J 1C3', 'Canada', '(514) 555-9022'),
(26, 'Pasta Buttini s.r.l.', 'Giovanni Giudici', 'Via dei Gelsomini, 153', 'Salerno', '84100', 'Italy', '(089) 6547665'),
(27, 'Escargots Nouveaux', 'Marie Delamare', '22, rue H. Voiron', 'Montceau', '71300', 'France', '85.57.00.07'),
(28, 'Gai pâturage', 'Eliane Noz', 'Bat. B 3, rue des Alpes', 'Annecy', '74000', 'France', '38.76.98.06'),
(29, 'Forêts d\'érables', 'Chantal Goulet', '148 rue Chasseur', 'Ste-Hyacinthe', 'J2S 7S8', 'Canada', '(514) 555-2955');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SupplierID`);
