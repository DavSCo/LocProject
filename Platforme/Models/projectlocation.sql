-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 18 jan. 2018 à 11:48
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
-- Structure de la table `commandeLocal`
--

CREATE TABLE `commandeLocal` (
  `id` int(11) NOT NULL,
  `local_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandeLocal`
--

INSERT INTO `commandeLocal` (`id`, `local_id`, `user_id`) VALUES
(1, 15, 15),
(2, 15, 15),
(3, 14, 5);

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
(14, 'azerty', '23 GHJK', '1111111', '111111', '11', 'dfghjkl', '', 3),
(15, 'zerty', '23 rue remi', '120', '123', '12', 'ghjk', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg', 3),
(18, 'david', '36 boulevard ornano', '120', '123', '12', 'ghjk', 'Views/img/upload/sun-glass-1088490_1280 (1).png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `nameSoc` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `noSiret` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `nameSoc`, `password`, `mail`, `noSiret`, `phone`, `logo`) VALUES
(1, 'Sam', 'Mre', 'SmdWeb', '$2a$07$302838711915bef2db65cOK4aHz9cmNjYc5fQX3lg/5VlygPKqsX.', 'sam@sam.fr', '1', 142524809, ''),
(2, 'Madeleine ', 'Mrejen', 'Madeleine Mrejen', '$2a$07$302838711915bef2db65cOEiSvbEe2G9KtFnD.jsuQg7YxCmPXSr.', 'mrejen.samuel@hotmail.fr', '1', 142524809, 'Views/img/upload/matelas.jpg'),
(4, 'Samuel ', 'Mrejen', 'SmdWeb', '$2a$07$302838711915bef2db65cOK4aHz9cmNjYc5fQX3lg/5VlygPKqsX.', 'sam@sam.fr', '1', 2, 'Views/img/upload/border-imagenew.png'),
(5, 'ilias', 'saouidi', 'ili', '$2a$07$302838711915bef2db65cOaaOlSiX.MGS2BdXHc/8Fyzoo4BEJ1KG', 'ilias@ilias.fr', '1', 142524809, 'Views/img/upload/sunglasses-2562647_1920.jpg'),
(7, 'cherif', 'cherif', 'cherif', '$2a$07$302838711915bef2db65cO.wJ4r3GKn5Du9HU1PVcyXe5psOs6H12', 'cherif@cherif', '1', 1, 'Views/img/upload/glasses-1145125_1280.png'),
(8, 'test', 'test', 'test', '$2a$07$302838711915bef2db65cOVl78FpEwYHlFGRuCaamrZGzTy0KCUK.', 'test@test.fr', '1', 142524809, 'Views/img/upload/sunglasses-2562647_1920.jpg'),
(15, 'test2', 'tset2', 'test2', '$2a$07$302838711915bef2db65cOVl78FpEwYHlFGRuCaamrZGzTy0KCUK.', 'test2@test2.fr', '1', 1, 'Views/img/upload/glasses-415256_1920.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `id` int(255) NOT NULL,
  `nameSociety` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `noSiret` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `nameSociety`, `phone`, `noSiret`, `mail`, `password`, `logo`) VALUES
(1, 'smdWEB', 123456, '1234567', 'dav@dav.fr', 'azerty', 'img/class'),
(3, 'richesse', 142524809, '1234', 'kinere@wanadoo.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/matelas_bultex_nano_b_b_bambin_002.jpg'),
(6, 'samSociety', 2, '1', 'sam@sam.fr', '$2a$07$302838711915bef2db65cOK4aHz9cmNjYc5fQX3lg/5VlygPKqsX.', 'Views/img/upload/'),
(7, 'remyremy', 142524809, '1', 'remy@remy.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg'),
(8, 'remyremy', 142524809, '1', 'remy@remy.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg'),
(9, 'remyremy', 142524809, '1', 'remy@remy.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg'),
(10, 'remyremy', 142524809, '1', 'remy@remy.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg'),
(11, 'remyremy', 142524809, '1', 'remy@remy.fr', '$2a$07$302838711915bef2db65cO.LrQq8IalxIFqA5SKh27SOAyqD25zUm', 'Views/img/upload/Round-Vollrandbrille-Old-Reading-Glasses-Glasses-1097864.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandeLocal`
--
ALTER TABLE `commandeLocal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `local_id` (`local_id`);

--
-- Index pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vend_id` (`vend_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandeLocal`
--
ALTER TABLE `commandeLocal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `locaux`
--
ALTER TABLE `locaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandeLocal`
--
ALTER TABLE `commandeLocal`
  ADD CONSTRAINT `commandelocal_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `commandelocal_ibfk_3` FOREIGN KEY (`local_id`) REFERENCES `locaux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD CONSTRAINT `locaux_ibfk_1` FOREIGN KEY (`vend_id`) REFERENCES `vendeur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
