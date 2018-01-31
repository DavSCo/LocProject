-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 31 jan. 2018 à 17:45
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projectlocation`
--

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

CREATE TABLE `locaux` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `vend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `locaux`
--

INSERT INTO `locaux` (`id`, `name`, `address`, `area`, `price`, `time`, `description`, `photo`, `vend_id`) VALUES
(14, 'Groupama Bordeaux', 'paris', '11', '22', '22', 'local sur bordeaux', 'Views/img/upload/top-location-bureau-la-rochelle.jpg', 3),
(15, 'Ynov Campus Nanterre', 'paris', '1000', '7890', '24', 'Local sur paris', 'Views/img/upload/location-bureau-coworking.jpg', 3),
(18, 'Paris Attitudes', '15 rue vauvenargues ', '11', '22', '22', 'Local Paris', 'Views/img/upload/location-bureau-la-rochelle.jpg', 6),
(19, 'Air BnB Paris', '21 jump Street', '11', '22', '22', 'Local New York', 'Views/img/upload/location-bureau-4-postes-lyon-1446546452.jpg', 3),
(20, 'Sinai', 'Rue tristan Tzara', '1000', '3000', '12', 'Ecole a Loue', 'Views/img/upload/top-location-bureau-la-rochelle.jpg', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vend_id` (`vend_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `locaux`
--
ALTER TABLE `locaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD CONSTRAINT `locaux_ibfk_1` FOREIGN KEY (`vend_id`) REFERENCES `vendeur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
