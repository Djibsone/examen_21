-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 22 juil. 2023 à 15:21
-- Version du serveur : 8.0.33-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examen_20`
--

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `codlocal` varchar(10) NOT NULL,
  `nomlocal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`codlocal`, `nomlocal`) VALUES
('L001', 'Kandi'),
('L002', 'Bohicon'),
('L003', 'Cotonou'),
('L004', 'Parakou');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `codprojet` varchar(10) NOT NULL,
  `nomprojet` varchar(50) NOT NULL,
  `datelance` date NOT NULL,
  `duree` varchar(20) NOT NULL,
  `codlocal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`codprojet`, `nomprojet`, `datelance`, `duree`, `codlocal`) VALUES
('P001', 'ALOGOTO', '2023-07-19', '1 mois', 'L004'),
('P002', 'Chantier de construiction d&#039;une route', '2023-07-13', '5 mois', 'L002'),
('P003', 'Amenagement', '2023-06-26', '2 ans', 'L001'),
('P004', 'Marché moderne', '2024-01-02', '5 ans', 'L003');

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `numsuivi` int NOT NULL,
  `datesuivi` date NOT NULL,
  `pourcentage` varchar(10) NOT NULL,
  `codprojet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`codlocal`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`codprojet`),
  ADD KEY `projet_localite` (`codlocal`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`numsuivi`),
  ADD KEY `suivi_projet` (`codprojet`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_localite` FOREIGN KEY (`codlocal`) REFERENCES `localite` (`codlocal`);

--
-- Contraintes pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD CONSTRAINT `suivi_projet` FOREIGN KEY (`codprojet`) REFERENCES `projet` (`codprojet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
