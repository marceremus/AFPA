-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 13 nov. 2019 à 11:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `products`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Fashion', '2014-06-01 00:35:07', '2014-05-30 15:34:33'),
(2, 'Electronics', '2014-06-01 00:35:07', '2014-05-30 15:34:33'),
(3, 'Motors', '2014-06-01 00:35:07', '2014-05-30 15:34:54');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `created`, `modified`) VALUES
(42, 'Sony Smart Watch', 'Wal-mart Shirt', 24, 1, 'image.jpeg', '2019-09-16 21:02:31', '2019-09-16 19:02:31'),
(2, 'Google Nexus 4', 'The most awesome phone ', 29, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2019-09-13 16:09:42'),
(3, 'Samsung Galaxy S4', 'How about no? 123', 69, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2019-09-13 16:22:27'),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-05-31 00:13:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-05-31 00:14:08'),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, 'telechargement.jpeg', '2014-06-01 01:18:36', '2014-05-31 00:18:31'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-06-05 16:09:51'),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-06-05 16:10:54'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, 'telechargement.jpeg', '2014-06-06 17:12:21', '2014-06-05 16:12:11'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, 'telechargement.jpeg', '2014-06-06 17:12:59', '2014-06-05 16:12:49'),
(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, 'telechargement.jpeg', '2014-11-22 18:42:13', '2014-11-21 18:42:13'),
(26, 'Another product', 'Awesome product!', 555, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-11-21 19:07:34'),
(28, 'Wallet', 'You can absolutely use this one!', 799, 1, 'telechargement.jpeg', '2014-12-04 21:12:03', '2014-12-03 21:12:03'),
(30, 'Wal-mart Shirt', 'Wal-mart Shirt', 555, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2014-12-12 00:52:29'),
(39, 'name', 'description', 10, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2019-09-13 20:10:43'),
(40, 'name 1', 'Description 123', 22, 1, 'telechargement.jpeg', '2019-09-13 22:15:00', '2019-09-13 20:15:00'),
(38, 'name', 'description', 10, 2, 'telechargement.jpeg', '2019-09-16 20:46:01', '2019-09-13 20:10:05'),
(41, 'Sony Smart Watch', 'Wal-mart Shirt', 24, 2, '', '2019-09-16 21:00:17', '2019-09-16 19:00:17'),
(43, 'Smart Watch', 'Wal-Shirt', 124, 1, 'image1.jpeg', '2019-09-16 21:03:52', '2019-09-16 19:03:52');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
