-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 août 2024 à 09:50
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arcadia`
--
CREATE DATABASE IF NOT EXISTS `arcadia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arcadia`;

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE `animals` (
  `animal_id` int(11) NOT NULL,
  `name & species` varchar(50) NOT NULL,
  `health_status` varchar(100) DEFAULT NULL,
  `checkup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONS POUR LA TABLE `animals`:
--

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`animal_id`, `name & species`, `health_status`, `checkup_date`) VALUES
(1, 'Tigre Tigrou', 'Excellent', '0000-00-00'),
(2, 'Girafe Riri', 'Bon', '0000-00-00'),
(3, 'Girafe Fifi', 'Moyen', '0000-00-00'),
(4, 'Girafe Loulou', 'Très Bon', '0000-00-00'),
(5, 'Manchot Alphonse', 'À soigner', '0000-00-00'),
(6, 'Panda Pandaroux', 'Excellent', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `health`
--

DROP TABLE IF EXISTS `health`;
CREATE TABLE `health` (
  `record_id` int(11) NOT NULL,
  `animal_id` int(11) DEFAULT NULL,
  `checkup_date` date NOT NULL,
  `health` enum('À soigner','Moyen','Bon','Très Bon','Excellent') NOT NULL,
  `veterinaire_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONS POUR LA TABLE `health`:
--   `animal_id`
--       `animals` -> `animal_id`
--   `veterinaire_id`
--       `users` -> `user_id`
--

-- --------------------------------------------------------

--
-- Structure de la table `meals`
--

DROP TABLE IF EXISTS `meals`;
CREATE TABLE `meals` (
  `meal_id` int(11) NOT NULL,
  `animal_id` int(11) DEFAULT NULL,
  `food` varchar(100) NOT NULL,
  `meal_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONS POUR LA TABLE `meals`:
--   `animal_id`
--       `animals` -> `animal_id`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employe','veterinaire') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONS POUR LA TABLE `users`:
--

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin1', 'password_hash1', 'admin'),
(2, 'employee1', 'password_hash2', 'employe'),
(3, 'veterinaire1', 'password_hash3', 'veterinaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

--
-- Index pour la table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `animal_id` (`animal_id`),
  ADD KEY `veterinaire_id` (`veterinaire_id`);

--
-- Index pour la table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`meal_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `health`
--
ALTER TABLE `health`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `meals`
--
ALTER TABLE `meals`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `health`
--
ALTER TABLE `health`
  ADD CONSTRAINT `health_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`animal_id`),
  ADD CONSTRAINT `health_ibfk_2` FOREIGN KEY (`veterinaire_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`animal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
