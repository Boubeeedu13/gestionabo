-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 nov. 2024 à 20:43
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
-- Base de données : `gestion_abonnements`
--
CREATE DATABASE IF NOT EXISTS `gestion_abonnements` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestion_abonnements`;

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE IF NOT EXISTS `abonnements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `utilisateur_id` (`utilisateur_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `abonnement_id` int(11) DEFAULT NULL,
  `montant_original` decimal(10,2) DEFAULT NULL,
  `devise` enum('TRY','NGN','UAH','EUR') DEFAULT NULL,
  `montant_euro` decimal(10,2) DEFAULT NULL,
  `date_paiement` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abonnement_id` (`abonnement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prix_par_abonne` decimal(5,2) DEFAULT NULL,
  `max_abonnes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `prix_par_abonne`, `max_abonnes`) VALUES
(1, 'NordVPN', 1.47, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `plateforme` enum('Spliiit','Sharesub') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `plateforme`) VALUES
(1, 'Spliiit'),
(3, 'Spliiit'),
(5, 'Spliiit'),
(6, 'Spliiit'),
(7, 'Spliiit'),
(8, 'Spliiit'),
(9, 'Spliiit'),
(10, 'Spliiit'),
(11, 'Spliiit');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD CONSTRAINT `abonnements_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id_user`),
  ADD CONSTRAINT `abonnements_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_ibfk_1` FOREIGN KEY (`abonnement_id`) REFERENCES `abonnements` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
