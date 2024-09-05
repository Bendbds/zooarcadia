-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 sep. 2024 à 20:52
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
-- Base de données : `arcadia1`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal_data`
--

CREATE TABLE `animal_data` (
  `id` int(11) NOT NULL,
  `animal` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkup_date` date NOT NULL,
  `health` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animal_data`
--

INSERT INTO `animal_data` (`id`, `animal`, `quantity`, `checkup_date`, `health`, `user_id`) VALUES
(1, 'Tigrou', 1230, '2024-08-22', '', 2),
(2, 'Pandaroux', 100, '2024-08-07', '', 2),
(3, 'Tigrou', 450, '2024-08-22', 'excellent', 3),
(4, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(5, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(6, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(7, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(8, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(9, 'Fifi', 1005, '2024-08-21', 'bon', 1),
(10, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(11, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(12, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(13, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(14, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(15, 'Alphonse', 852, '2024-08-15', 'moyen', 1),
(16, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(17, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(18, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(19, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(20, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(21, 'Loulou', 789456, '2024-08-23', 'bon', 1),
(22, 'Pandaroux', 10, '2024-08-29', 'excellent', 1),
(23, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(24, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(25, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(26, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(27, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(28, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(29, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(30, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(31, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(32, 'Fifi', 100, '2024-08-30', 'moyen', 1),
(33, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(34, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(35, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(36, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(37, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(38, 'Pandaroux', 450, '2024-08-31', 'excellent', 1),
(39, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(40, 'Alphonse', 10000, '2024-09-07', '', 2),
(41, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(42, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(43, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(44, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(45, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(46, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(47, 'Pandaroux', 75852, '2024-09-03', 'excellent', 1),
(48, 'Pandaroux', 123, '2024-09-04', 'excellent', 1),
(49, 'Tigrou', 55555, '2024-09-08', 'bon', 1),
(50, 'Pandaroux', 789654123, '2024-09-07', 'bon', 1),
(51, 'Pandaroux', 789654123, '2024-09-07', 'bon', 1),
(52, 'Tigrou', 55555, '2024-09-08', 'bon', 1),
(53, 'Tigrou', 7896, '2024-09-19', 'bon', 1),
(54, 'Pandaroux', 1, '2024-08-06', 'excellent', 1),
(55, 'Pandaroux', 1, '2024-08-06', 'excellent', 1),
(56, 'Fifi', 456, '2024-08-15', 'excellent', 1),
(57, 'Riri', 1, '2024-09-29', 'excellent', 1),
(58, 'Loulou', 789, '2024-10-06', 'excellent', 1),
(59, 'Fifi', 500, '2024-10-04', 'très bon', 1),
(60, 'Loulou', 12321, '2024-12-06', 'bon', 1),
(61, 'Pandaroux', 7896654, '2024-09-02', 'moyen', 1),
(62, 'Tigrou', 1111111, '2024-12-06', 'excellent', 1),
(63, 'Riri', 777777, '2025-01-05', '', 2),
(64, 'Riri', 777777, '2025-01-05', '', 2),
(65, 'Riri', 777777, '2025-01-05', '', 2),
(66, 'Riri', 777777, '2025-01-05', '', 2),
(67, 'Riri', 777777, '2025-01-05', '', 2),
(68, 'Riri', 777777, '2025-01-05', '', 2),
(69, 'Pandaroux', 0, '2025-06-28', '', 2),
(70, 'Alphonse', 11, '2027-06-28', 'excellent', 3),
(71, 'Loulou', 101010, '2025-09-28', 'bon', 1),
(72, 'Pandaroux', 1477888787, '2028-06-29', 'excellent', 1),
(73, 'Pandaroux', 2147483647, '2026-07-02', 'excellent', 1);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `pseudo`, `texte`, `date`) VALUES
(55, 'panda', 'Ce zoo est top!', '2024-08-28 19:07:05'),
(62, 'Girafou', 'Nous reviendrons visiter le zoo!', '2024-08-28 19:36:08'),
(63, 'Azerty', 'Tout simplement génial!', '2024-08-28 19:49:26'),
(64, 'Pseudo', 'Il faut agrandir ce zoo! Il est superbe.', '2024-08-28 19:50:06'),
(65, 'Donald', 'Le zoo est vraiment sympa dans l\'ensemble, bien organisé et orienté, de grands espaces pour les animaux, propres, bien conçu, une variété d\'animaux donc une visite très agréable et conseillée pour adultes comme pour enfants.', '2024-08-28 19:51:05');

-- --------------------------------------------------------

--
-- Structure de la table `habitat_clicks`
--

CREATE TABLE `habitat_clicks` (
  `id` int(11) NOT NULL,
  `habitat` varchar(255) NOT NULL,
  `clicks` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `habitat_clicks`
--

INSERT INTO `habitat_clicks` (`id`, `habitat`, `clicks`) VALUES
(1, 'La forêt tropicale', 0),
(2, 'La savane Africaine', 0),
(3, 'La forêt montagneuse', 0),
(4, 'Le continent Antarctique', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employe','veterinaire') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'adminpass', 'admin'),
(2, 'employe', '$2y$10$exemplehash2', 'employe'),
(3, 'veterinaire', '$2y$10$exemplehash3', 'veterinaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal_data`
--
ALTER TABLE `animal_data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `habitat_clicks`
--
ALTER TABLE `habitat_clicks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `habitat` (`habitat`);

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
-- AUTO_INCREMENT pour la table `animal_data`
--
ALTER TABLE `animal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `habitat_clicks`
--
ALTER TABLE `habitat_clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
