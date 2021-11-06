-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 24 jan. 2021 à 14:48
-- Version du serveur :  10.1.47-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `peter_cauty`
--
CREATE DATABASE IF NOT EXISTS `peter_cauty` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `peter_cauty`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `jam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `banned`
--

CREATE TABLE IF NOT EXISTS `banned` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB AUTO_INCREMENT=488 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `descr` text COLLATE utf8_unicode_ci NOT NULL,
    `url` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
    `image` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
    `ordr` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;
