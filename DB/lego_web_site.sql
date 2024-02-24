-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 24 fév. 2024 à 00:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lego_web_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_livreur` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `statut` int NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_livreur` (`id_livreur`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_livreur`, `id_utilisateur`, `statut`, `total`) VALUES
(24, 3, 7, 2, 1074.6),
(25, 5, 7, 1, 1094.5),
(26, 4, 6, 2, 99.5),
(27, 1, 6, 0, 199),
(28, 3, 9, 2, 89.79),
(29, 1, 7, 0, 99.5),
(30, 4, 11, 1, 298.5);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `region_livraison` text NOT NULL,
  `temps_livraison` text NOT NULL,
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id`, `name`, `region_livraison`, `temps_livraison`, `prix`) VALUES
(1, 'Undefined', 'N/A', 'N/A', 0),
(3, 'post', 'FRANCE', '1000 ans', 2),
(4, 'dhl', 'ALLEMAGNE', '2 semaines', 5),
(5, 'dpd', 'MONDE', '1 semaine', 8);

-- --------------------------------------------------------

--
-- Structure de la table `ordre`
--

DROP TABLE IF EXISTS `ordre`;
CREATE TABLE IF NOT EXISTS `ordre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_commande` int NOT NULL,
  `id_piece` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_commande` (`id_commande`),
  KEY `id_piece` (`id_piece`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ordre`
--

INSERT INTO `ordre` (`id`, `id_commande`, `id_piece`, `quantity`) VALUES
(124, 24, 1, 500),
(125, 24, 3, 40),
(127, 26, 4, 50),
(128, 27, 3, 50),
(129, 27, 2, 50),
(131, 28, 10, 1),
(132, 28, 2, 1),
(133, 28, 17, 25),
(134, 25, 4, 500),
(135, 25, 5, 50),
(136, 29, 4, 50),
(137, 30, 3, 100),
(138, 30, 4, 50);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `quantity` int NOT NULL,
  `format` text NOT NULL,
  `color` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id`, `name`, `quantity`, `format`, `color`, `price`) VALUES
(1, 'Brick 2x3 red', 1000, '2x3', 'red', 1.99),
(2, 'Brick 2x3 blue', 500, '2x3', 'blue', 1.99),
(3, 'Brick 2x3 green', 500, '2x3', 'green', 1.99),
(4, 'Brick 2x3 yellow', 400, '2x3', 'yellow', 1.99),
(5, 'Brick 2x3 orange', 50, '2x3', 'orange', 1.99),
(6, 'Brick 2x3 black', 4200, '2x3', 'black', 5.49),
(7, 'Brick 2x3 purple', 700, '2x3', 'purple', 3.8),
(8, 'Brick 2x3 pink', 700, '2x3', 'pink', 1.99),
(9, 'Brick 2x3 grey', 500, '2x3', 'grey', 1),
(10, 'Brick 2x3 white', 15000, '2x3', 'white', 0.3),
(11, 'Brick 2x2 red', 2500, '2x2', 'red', 0.99),
(12, 'Brick 2x2 blue', 500, '2x2', 'blue', 0.99),
(13, 'Brick 2x2 green', 500, '2x2', 'green', 0.99),
(14, 'Brick 2x2 yellow', 600, '2x2', 'yellow', 0.99),
(15, 'Brick 2x2 orange', 500, '2x2', 'orange', 0.99),
(16, 'Brick 2x2 black', 200, '2x2', 'black', 4.5),
(17, 'Brick 2x2 purple', 875, '2x2', 'purple', 3.5),
(18, 'Brick 2x2 pink', 500, '2x2', 'pink', 0.99),
(19, 'Brick 2x2 grey', 400, '2x2', 'grey', 0.5),
(20, 'Brick 2x2 white', 8500, '2x2', 'white', 0.1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `number` int NOT NULL,
  `adresse` text NOT NULL,
  `specification` text NOT NULL,
  `code_postal` int NOT NULL,
  `country` text NOT NULL,
  `statut` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `name`, `email`, `mdp`, `number`, `adresse`, `specification`, `code_postal`, `country`, `statut`) VALUES
(1, 'Dieu', 'Dieu@Paradis.world', '1234', 422521010, '13 rue de judas', 'Déposer sur le paillasson à l\'entrée', 69420, 'Paradis', 1),
(5, 'Emmanuel Macron', 'Elysee@mail.gouv', 'Explosion', 559241134, '3 Pl. Georges Clemenceau, Biarritz', 'Passer par la porte de derrière svp', 64200, 'France', 1),
(6, 'Élisabeth Borne', 'Chomage@gmail.com', '4943', 559241134, '15 rue FranceTravail', 'Faite pas attention à la fumée', 75000, 'France', 0),
(7, 'Jesus', 'Paradis@aol.com', '1020', 636304512, '13 rue de judas', 'Evitez les pommes svp', 77500, 'Paradis', 0),
(8, 'Bob', 'Bob@bricolage.fr', '5258', 780906040, '57 rue des marteaux', '', 8212, 'France', 1),
(9, 'bilbo', 'bilbo007@gmail.com', '007', 606060606, 'colline', 'sonner 2 fois', 83000, 'la comté', 0),
(10, 'Admin', 'Admin@aol.com', '1234', 6060606, '23 rue de l\'ESTIA', 'Pas de spécifications', 64210, 'France', 1),
(11, 'Client', 'Client@gmail.com', '0000', 707070707, '24 rue de l\'ESTIA', 'Attention à la marche', 64210, 'FRANCE', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_livreur`) REFERENCES `livreur` (`id`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `ordre`
--
ALTER TABLE `ordre`
  ADD CONSTRAINT `ordre_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `ordre_ibfk_2` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
