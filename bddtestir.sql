-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 20, 2020 at 06:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd testir`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administrateur` int(11) NOT NULL,
  `prénom` text NOT NULL,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `mot de passe` text NOT NULL,
  `nombreMessages` int(11) NOT NULL,
  `nombreTickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `nom` text NOT NULL,
  `image` text NOT NULL,
  `fonctionnalité` text NOT NULL,
  `programme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `nom`, `image`, `fonctionnalité`, `programme`) VALUES
(0, 'Fréquence Cardiaque', 'C:\\Users\\paulb\\Pictures\\images personelles\\195.png', 'Permet de mesurer la fréquence cardiaque d\'un utilisateur', 'Fref= 80;\r\nTempsCalcul = 60;\r\n…\r\n…\r\n'),
(1, 'Température', 'C:\\Users\\paulb\\Pictures\\images personelles\\pokemon fond.jpg', 'Permet de mesurer la température d\'un utilisateur', 'T = 20;\r\n…\r\n…\r\n…');

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `id_cgu` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `prenom` text,
  `nom` text,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `mot de passe` text NOT NULL,
  `âge` int(120) NOT NULL,
  `nombrePouceRouge` int(11) NOT NULL,
  `nombrePouceBleu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `prenom`, `nom`, `email`, `type`, `mot de passe`, `âge`, `nombrePouceRouge`, `nombrePouceBleu`) VALUES
(3, 'paul', 'besrest', 'paul.besrest@gmail.com', 'administrateur', 'motdepassedu92', 20, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `examinateur`
--

CREATE TABLE `examinateur` (
  `id_examinateur` int(11) NOT NULL,
  `prénom` text NOT NULL,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `mot de passe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_FAQ` int(11) NOT NULL,
  `sujet` text NOT NULL,
  `nombreVues` int(11) NOT NULL,
  `question` text NOT NULL,
  `réponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `sujet` varchar(300) NOT NULL,
  `contenu` text NOT NULL,
  `nombreVues` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentions legales`
--

CREATE TABLE `mentions legales` (
  `id_mention légales` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagerie`
--

CREATE TABLE `messagerie` (
  `id_messagerie` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_examinateur` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultats`
--

CREATE TABLE `resultats` (
  `id_résultats` int(11) NOT NULL,
  `id_examinateur` int(11) NOT NULL,
  `id_client` int(255) NOT NULL,
  `date du rdv` int(255) NOT NULL,
  `battement` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `vue` int(11) NOT NULL,
  `son` int(11) NOT NULL,
  `personnalité` int(11) NOT NULL,
  `scoreTemp` int(11) NOT NULL,
  `scoreBatt` int(11) NOT NULL,
  `scoreVue` int(11) NOT NULL,
  `scoreSon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultats`
--

INSERT INTO `resultats` (`id_résultats`, `id_examinateur`, `id_client`, `date du rdv`, `battement`, `temperature`, `vue`, `son`, `personnalité`, `scoreTemp`, `scoreBatt`, `scoreVue`, `scoreSon`) VALUES
(1, 2, 3, 2020, 72, 38, 350, 10, 75, 75, 93, 62, 58);

-- --------------------------------------------------------

--
-- Table structure for table `statistiques`
--

CREATE TABLE `statistiques` (
  `id_statistiques site` int(11) NOT NULL,
  `annonce` text NOT NULL,
  `nombreUtilisateurAnnuel` int(11) NOT NULL,
  `nombreUtilisateurConnectés` int(9) NOT NULL,
  `nombre de rdv` int(9) NOT NULL,
  `nombreTest` int(11) NOT NULL,
  `Satisfaction` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prénom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `nom`, `prénom`) VALUES
(1, 'bader', 'félix');

-- --------------------------------------------------------

--
-- Table structure for table `test personnalite`
--

CREATE TABLE `test personnalite` (
  `id_test personnalité` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `réponse 1` text NOT NULL,
  `réponse 2` text NOT NULL,
  `réponse 3` text NOT NULL,
  `réponse 4` text NOT NULL,
  `réponse 5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Indexes for table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`id_cgu`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `examinateur`
--
ALTER TABLE `examinateur`
  ADD PRIMARY KEY (`id_examinateur`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_FAQ`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `mentions legales`
--
ALTER TABLE `mentions legales`
  ADD PRIMARY KEY (`id_mention légales`);

--
-- Indexes for table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id_messagerie`),
  ADD UNIQUE KEY `id_auteur` (`id_auteur`),
  ADD UNIQUE KEY `id_destinataire` (`id_destinataire`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD UNIQUE KEY `id_client` (`id_client`),
  ADD UNIQUE KEY `id_examinateur` (`id_examinateur`);

--
-- Indexes for table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id_résultats`),
  ADD UNIQUE KEY `id_examinateur` (`id_examinateur`),
  ADD UNIQUE KEY `id_client` (`id_client`);

--
-- Indexes for table `statistiques`
--
ALTER TABLE `statistiques`
  ADD PRIMARY KEY (`id_statistiques site`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test personnalite`
--
ALTER TABLE `test personnalite`
  ADD PRIMARY KEY (`id_test personnalité`),
  ADD UNIQUE KEY `id_client` (`id_client`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD UNIQUE KEY `id_auteur` (`id_auteur`),
  ADD UNIQUE KEY `id_destinataire` (`id_destinataire`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `id_cgu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examinateur`
--
ALTER TABLE `examinateur`
  MODIFY `id_examinateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_FAQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentions legales`
--
ALTER TABLE `mentions legales`
  MODIFY `id_mention légales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id_messagerie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id_résultats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistiques`
--
ALTER TABLE `statistiques`
  MODIFY `id_statistiques site` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test personnalite`
--
ALTER TABLE `test personnalite`
  MODIFY `id_test personnalité` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id_administrateur`) REFERENCES `client` (`id_client`);

--
-- Constraints for table `cgu`
--
ALTER TABLE `cgu`
  ADD CONSTRAINT `cgu_ibfk_1` FOREIGN KEY (`id_cgu`) REFERENCES `client` (`id_client`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
