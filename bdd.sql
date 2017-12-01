-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 01 Décembre 2017 à 12:00
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ProjectLocation`
--

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

CREATE TABLE `locaux` (
  `id` int(255) NOT NULL,
  `name` int(255) NOT NULL,
  `address` int(255) NOT NULL,
  `area` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `time` int(255) NOT NULL,
  `description` int(255) NOT NULL,
  `photo` int(255) NOT NULL,
  `vend_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE `payement` (
  `id` int(255) NOT NULL,
  `noCard` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  `ccv` int(255) NOT NULL,
  `loc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Index pour les tables exportées
--

--
-- Index pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vend_id` (`vend_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_id` (`loc_id`,`user_id`,`vend_id`),
  ADD KEY `user_id` (`user_id`),
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `locaux`
--
ALTER TABLE `locaux`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `payement`
--
ALTER TABLE `payement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD CONSTRAINT `locaux_ibfk_1` FOREIGN KEY (`vend_id`) REFERENCES `vendeur` (`id`),
  ADD CONSTRAINT `locaux_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `payement_ibfk_1` FOREIGN KEY (`loc_id`) REFERENCES `locaux` (`id`),
  ADD CONSTRAINT `payement_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `payement_ibfk_3` FOREIGN KEY (`vend_id`) REFERENCES `vendeur` (`id`);
