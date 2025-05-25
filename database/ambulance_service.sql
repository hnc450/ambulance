-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 16 Mars 2025 à 18:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ambulance_service`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--
DROP DATABASE IF EXISTS `ambulance`;
CREATE DATABASE IF NOT EXISTS `ambulance`;
USE `ambulance`

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ambulances`
--

CREATE TABLE IF NOT EXISTS `ambulances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `immatriculation` varchar(50) DEFAULT NULL,
  `modele` varchar(100) DEFAULT NULL,
  `etat` enum('disponible','en intervention','maintenance') DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `immatriculation` (`immatriculation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ambulances`
--

INSERT INTO `ambulances` (`id`, `immatriculation`, `modele`, `etat`, `localisation`, `date_ajout`) VALUES
(1, 'ABC123', 'Toyota Hiace', 'disponible', 'Centre-ville, Kinshasa', '2025-03-16 13:34:43'),
(2, 'XYZ789', 'Mercedes Sprinter', 'maintenance', 'Garage central', '2025-03-16 13:34:43');

-- --------------------------------------------------------

--
-- Structure de la table `assignations`
--

CREATE TABLE IF NOT EXISTS `assignations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demande_id` int(11) DEFAULT NULL,
  `ambulance_id` int(11) DEFAULT NULL,
  `hopital_id` int(11) DEFAULT NULL,
  `statut` enum('envoyée','arrivée','annulée') DEFAULT NULL,
  `date_assignation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `demande_id` (`demande_id`),
  KEY `ambulance_id` (`ambulance_id`),
  KEY `hopital_id` (`hopital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `assignations`
--

INSERT INTO `assignations` (`id`, `demande_id`, `ambulance_id`, `hopital_id`, `statut`, `date_assignation`) VALUES
(1, 1, 1, 1, 'envoyée', '2025-03-16 13:36:13'),
(2, 2, 2, 2, 'annulée', '2025-03-16 13:36:13');

-- --------------------------------------------------------

--
-- Structure de la table `callcenter`
--

CREATE TABLE IF NOT EXISTS `callcenter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demande_id` int(11) DEFAULT NULL,
  `operateur` varchar(100) DEFAULT NULL,
  `disponibilite_ambulance` enum('disponible','indisponible') DEFAULT NULL,
  `disponibilite_hopital` enum('disponible','plein') DEFAULT NULL,
  `commentaire` text,
  `statut` enum('en cours','validé','annulé') DEFAULT NULL,
  `date_traitement` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `demande_id` (`demande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `type` enum('Individuel','Hôpital','Entreprise') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `statut` enum('Actif','Inactif') DEFAULT 'Actif',
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `nom`, `type`, `email`, `telephone`, `adresse`, `statut`, `date_inscription`) VALUES
(1, 3, 'Laurent Mbala', 'Individuel', 'laurent.mbala@email.com', '+243810000001', 'Avenue Kasa-Vubu, Kinshasa', 'Actif', '2025-03-16 13:33:03'),
(2, 4, 'Merveille Kabasele', 'Individuel', 'merveille.kabasele@email.com', '+243810000002', 'Avenue de la Paix, Gombe', 'Actif', '2025-03-16 13:33:03');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE IF NOT EXISTS `demandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `urgence_id` int(11) DEFAULT NULL,
  `description` text,
  `statut` enum('en attente','traitée','rejetée') DEFAULT NULL,
  `date_demande` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  KEY `urgence_id` (`urgence_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `demandes`
--

INSERT INTO `demandes` (`id`, `client_id`, `urgence_id`, `description`, `statut`, `date_demande`) VALUES
(1, 1, 1, 'Douleur thoracique aiguë', 'en attente', '2025-03-16 13:34:13'),
(2, 2, 2, 'Victime d’un accident de voiture', 'en attente', '2025-03-16 13:34:13');

-- --------------------------------------------------------

--
-- Structure de la table `hopitaux`
--

CREATE TABLE IF NOT EXISTS `hopitaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `disponibilite` enum('disponible','plein','urgence') DEFAULT NULL,
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `hopitaux`
--

INSERT INTO `hopitaux` (`id`, `nom`, `adresse`, `capacite`, `disponibilite`, `date_ajout`) VALUES
(1, 'Hôpital Général de Kinshasa', 'Boulevard du 30 Juin, Kinshasa', 100, 'disponible', '2025-03-16 13:35:12'),
(2, 'Clinique Ngaliema', 'Avenue Ngaliema, Gombe', 50, 'plein', '2025-03-16 13:35:12');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `date_admission` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `hopital_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`),
  KEY `hopital_id` (`hopital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id`, `client_id`, `date_admission`, `hopital_id`) VALUES
(1, 1, '2025-03-16 13:35:46', 1),
(2, 2, '2025-03-16 13:35:46', 2);

-- --------------------------------------------------------

--
-- Structure de la table `urgences`
--

CREATE TABLE IF NOT EXISTS `urgences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_urgence` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_urgence` (`type_urgence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `urgences`
--

INSERT INTO `urgences` (`id`, `type_urgence`, `description`) VALUES
(1, 'Crise cardiaque', 'Douleur thoracique intense et difficulté respiratoire.'),
(2, 'Accident de la route', 'Blessures graves suite à une collision.'),
(3, 'Brûlure grave', 'Brûlures profondes nécessitant une prise en charge urgente.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `role` enum('admin','utilisateur') DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `mot_de_passe`, `role`, `date_creation`) VALUES
(1, 'Admin1', 'laury@email.com', 'password1', 'admin', '2025-03-16 13:31:49'),
(2, 'Admin2', 'hk@email.com', 'password2', 'admin', '2025-03-16 13:31:49'),
(3, 'Utilisateur1', 'user1@email.com', 'password3', 'utilisateur', '2025-03-16 13:31:49'),
(4, 'Utilisateur2', 'user2@email.com', 'password4', 'utilisateur', '2025-03-16 13:31:49');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD CONSTRAINT `administrateurs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `assignations`
--
ALTER TABLE `assignations`
  ADD CONSTRAINT `assignations_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignations_ibfk_2` FOREIGN KEY (`ambulance_id`) REFERENCES `ambulances` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `assignations_ibfk_3` FOREIGN KEY (`hopital_id`) REFERENCES `hopitaux` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `callcenter`
--
ALTER TABLE `callcenter`
  ADD CONSTRAINT `callcenter_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `demandes_ibfk_2` FOREIGN KEY (`urgence_id`) REFERENCES `urgences` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`hopital_id`) REFERENCES `hopitaux` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
