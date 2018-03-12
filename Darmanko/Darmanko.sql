-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 15 Février 2018 à 08:48
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Darmanko`
--

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

CREATE TABLE `bien` (
  `id` int(11) NOT NULL,
  `nomBien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `localite_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `bien_id` int(11) DEFAULT NULL,
  `prixLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `bien`
--

INSERT INTO `bien` (`id`, `nomBien`, `etat`, `description`, `localite_id`, `type_id`, `bien_id`, `prixLocation`) VALUES
(2, 'Immeuble grand Standing', 1, 'L\'immeuble du 28 rue VDN se situe dans le 18e arrondissement de Mermoz, dans le quartier de la Goutte d\'or. Dans ce quartier (71e quartier administratif de Dakar), il occupe dans l\'ilot 23 le lot 88 sur une parcelle de 243 m2.Constitue de 50 etages.', 4, 2, NULL, '900000FCFA'),
(3, 'Une grande maison', 1, 'La maison est très bien située dans la médina , au calme au fond d\'un "derb" ( ruelle), dans le quartier très animé de la Kasbah , près de la mosquée et des tombeaux saadiens.', 1, 1, NULL, '500000FCFA');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `numpiece` int(20) DEFAULT NULL,
  `nomComplet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motdepasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `numpiece`, `nomComplet`, `tel`, `adress`, `email`, `motdepasse`) VALUES
(10, 176619960, 'Saliou GNING', '781025004', 'Hamo 6', 'sindidi777@gmail.com', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `dateContrat` datetime NOT NULL,
  `caution` int(11) NOT NULL,
  `duree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `bien_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bien_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `image`, `bien_id`) VALUES
(1, 'immeuble1.jpeg', 2),
(2, '20.jpeg', 2),
(3, 'dak2.jpeg', 3),
(4, 'dak3.jpeg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `localite`
--

INSERT INTO `localite` (`id`, `libelle`) VALUES
(1, 'Dakar'),
(2, 'Thies'),
(3, 'Diamniadio'),
(4, 'Mermoz');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `datePaiement` datetime NOT NULL,
  `montant` int(11) NOT NULL,
  `periode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contrat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id` int(11) NOT NULL,
  `numpiece` int(11) DEFAULT NULL,
  `nomComplet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codeBanque` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire_bien`
--

CREATE TABLE `proprietaire_bien` (
  `id` int(11) NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proprietaire_id` int(11) DEFAULT NULL,
  `bien_id` int(11) DEFAULT NULL,
  `prixLocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `dateReservation` datetime NOT NULL,
  `etat` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `bien_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `dateReservation`, `etat`, `client_id`, `bien_id`) VALUES
(2, '2018-02-15 08:39:33', 0, 10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `type_bien`
--

CREATE TABLE `type_bien` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `type_bien`
--

INSERT INTO `type_bien` (`id`, `libelle`, `niveau`) VALUES
(1, 'Maison', 1),
(2, 'Immeuble', 1),
(3, 'Appartement', 0),
(4, 'Chambre', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_45EDC386924DD2B5` (`localite_id`),
  ADD KEY `IDX_45EDC386C54C8C93` (`type_id`),
  ADD KEY `IDX_45EDC386BD95B80F` (`bien_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C7440455289172D6` (`numpiece`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6034999319EB6921` (`client_id`),
  ADD KEY `IDX_60349993BD95B80F` (`bien_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045FBD95B80F` (`bien_id`);

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B1DC7A1E1823061F` (`contrat_id`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_69E399D6E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_69E399D6D0373BDA` (`codeBanque`),
  ADD UNIQUE KEY `UNIQ_69E399D6289172D6` (`numpiece`);

--
-- Index pour la table `proprietaire_bien`
--
ALTER TABLE `proprietaire_bien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1AE295D76C50E4A` (`proprietaire_id`),
  ADD KEY `IDX_C1AE295DBD95B80F` (`bien_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495519EB6921` (`client_id`),
  ADD KEY `IDX_42C84955BD95B80F` (`bien_id`);

--
-- Index pour la table `type_bien`
--
ALTER TABLE `type_bien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `proprietaire_bien`
--
ALTER TABLE `proprietaire_bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_bien`
--
ALTER TABLE `type_bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `FK_45EDC386924DD2B5` FOREIGN KEY (`localite_id`) REFERENCES `localite` (`id`),
  ADD CONSTRAINT `FK_45EDC386BD95B80F` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`),
  ADD CONSTRAINT `FK_45EDC386C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type_bien` (`id`);

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `FK_6034999319EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_60349993BD95B80F` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045FBD95B80F` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `FK_B1DC7A1E1823061F` FOREIGN KEY (`contrat_id`) REFERENCES `contrat` (`id`);

--
-- Contraintes pour la table `proprietaire_bien`
--
ALTER TABLE `proprietaire_bien`
  ADD CONSTRAINT `FK_C1AE295D76C50E4A` FOREIGN KEY (`proprietaire_id`) REFERENCES `proprietaire` (`id`),
  ADD CONSTRAINT `FK_C1AE295DBD95B80F` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_42C84955BD95B80F` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
