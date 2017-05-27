-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 27 Mai 2017 à 17:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_scout`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `contenue` text CHARACTER SET utf8 NOT NULL,
  `langue` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`contenue`, `langue`) VALUES
('L’association a pour but de former des citoyens libres, heureux, engagés et artisans de paix. Pour aider chaque jeune à grandir dans sa relation à soi, aux autres et à Dieu, elle mise sur une pédagogie du jeu, du projet, de l’équipe, de la vie dans la nature et de la promesse, et cherche à éduquer les enfants et les jeunes à la citoyenneté, à la solidarité, au respect de l’environnement, au cheminement spirituel et à l’ouverture aux autres.</br>Concrètement, les Scouts et Guides de France proposent aux jeunes filles et garçons de 6 à 20 ans un espace de vie et des activités qui répondent à leur besoin de rêver, d’agir, de réussir leurs projets, de vivre en communauté, de donner sens à leur vie. Les équipes sont soutenues dans leurs projets et encadrées par des jeunes chefs et cheftaines bénévoles, Les Scouts et Guides de France participent à de nombreuses activités d’intérêt général dans les domaines de la solidarité, de l’environnement et de la sécurité civile. Ils misent sur la co‑éducation des garçons et des filles et accueillent des jeunes, de milieux sociaux, de cultures ou de religions différentes.', 'francais');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `adresse_mail` varchar(50) NOT NULL,
  `passe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`adresse_mail`, `passe`) VALUES
('coucou@gmail.com', '$2y$10$gusqrP6cINAiXVz/BZdeBe9QVLsE9BITMT4IcEHUMEcYOjnPZ3.ce'),
('o@gmail.com', '$2y$10$dPL6HMtIr1CXmuzH3v0Xh.T0cGoioYdT3dUiumuk.SuA/6WeJmEDi');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `contenue` text NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `langue` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `contenue`, `categorie`, `langue`) VALUES
(1, 'test', 'compagnons', 'francais');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`langue`),
  ADD UNIQUE KEY `langue` (`langue`);
ALTER TABLE `accueil` ADD FULLTEXT KEY `contenue` (`contenue`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adresse_mail`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
