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

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwd`, `display_name`, `jam_id`) VALUES
(1, 'peter', 'xxxxx', 'Peter Cauty', '');

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

--
-- Déchargement des données de la table `banned`
--

INSERT INTO `banned` (`id`, `ip`) VALUES
(198, '103.78.141.27'),
(66, '104.168.34.149'),
(70, '104.168.34.156'),
(245, '104.194.220.184'),
(184, '109.201.138.249'),
(88, '109.201.152.19'),
(208, '110.44.133.135'),
(32, '134.90.149.146'),
(15, '134.90.149.147'),
(31, '134.90.149.149'),
(50, '149.202.86.101'),
(48, '149.202.87.162'),
(47, '151.80.47.23'),
(404, '154.57.3.137'),
(423, '163.172.242.182'),
(297, '163.172.247.149'),
(407, '163.172.247.175'),
(238, '163.172.51.37'),
(437, '165.231.84.109'),
(460, '165.231.84.140'),
(408, '165.231.84.21'),
(409, '165.231.84.226'),
(13, '185.103.110.206'),
(6, '185.103.110.209'),
(19, '185.104.184.115'),
(294, '185.104.185.113'),
(3, '185.104.187.116'),
(89, '185.128.25.158'),
(266, '185.132.177.136'),
(401, '185.191.171.1'),
(395, '185.191.171.11'),
(396, '185.191.171.17'),
(420, '185.191.171.26'),
(433, '185.191.171.34'),
(464, '185.191.171.37'),
(467, '185.191.171.6'),
(301, '185.192.69.66'),
(10, '185.206.224.210'),
(44, '185.206.224.211'),
(5, '185.206.224.213'),
(39, '185.206.224.222'),
(195, '185.210.217.56'),
(231, '185.210.219.155'),
(265, '185.210.219.156'),
(41, '185.212.171.154'),
(45, '185.212.171.170'),
(109, '185.216.34.227'),
(222, '185.216.34.229'),
(120, '185.216.34.230'),
(293, '185.216.34.232'),
(282, '185.216.34.233'),
(206, '185.216.34.237'),
(280, '185.230.125.21'),
(368, '185.230.127.229'),
(386, '185.230.127.233'),
(388, '185.230.127.239'),
(68, '185.232.22.197'),
(234, '185.244.213.185'),
(310, '185.51.134.222'),
(269, '185.85.162.242'),
(444, '188.126.94.125'),
(440, '188.126.94.176'),
(454, '188.126.94.57'),
(78, '190.2.149.159'),
(435, '191.96.15.72'),
(436, '191.96.15.74'),
(363, '193.176.86.123'),
(345, '193.9.114.182'),
(102, '194.187.249.190'),
(79, '194.187.249.37'),
(118, '194.187.249.38'),
(286, '194.59.249.73'),
(278, '194.99.104.136'),
(71, '195.154.189.205'),
(413, '195.154.19.201'),
(425, '195.154.19.209'),
(414, '195.154.19.210'),
(415, '195.154.19.222'),
(458, '195.154.21.34'),
(49, '195.181.166.145'),
(426, '196.196.37.177'),
(424, '196.240.58.101'),
(459, '196.240.58.23'),
(298, '196.245.235.116'),
(353, '196.52.84.15'),
(129, '196.52.84.20'),
(315, '196.52.84.25'),
(331, '196.52.84.26'),
(323, '196.52.84.28'),
(289, '196.52.84.29'),
(339, '196.52.84.39'),
(327, '196.52.84.44'),
(359, '196.52.84.45'),
(115, '196.52.84.46'),
(341, '196.52.84.47'),
(121, '196.52.84.9'),
(255, '198.144.154.61'),
(22, '199.217.105.237'),
(241, '199.66.92.179'),
(16, '2.58.29.24'),
(14, '206.217.139.202'),
(418, '212.102.55.100'),
(133, '212.92.105.107'),
(77, '212.92.105.227'),
(192, '212.92.106.116'),
(98, '212.92.106.146'),
(159, '212.92.106.176'),
(193, '212.92.106.96'),
(143, '212.92.107.125'),
(168, '212.92.107.145'),
(179, '212.92.108.144'),
(123, '212.92.108.4'),
(176, '212.92.108.64'),
(152, '212.92.108.94'),
(214, '212.92.112.131'),
(164, '212.92.112.31'),
(309, '212.92.114.38'),
(122, '212.92.116.6'),
(277, '212.92.117.75'),
(142, '212.92.119.83'),
(260, '212.92.120.218'),
(203, '212.92.121.187'),
(188, '212.92.122.196'),
(151, '212.92.122.226'),
(173, '212.92.122.246'),
(183, '212.92.122.66'),
(114, '212.92.123.142'),
(158, '212.92.123.15'),
(253, '212.92.124.161'),
(69, '23.83.130.181'),
(397, '31.171.152.132'),
(335, '31.171.152.136'),
(391, '31.171.152.99'),
(211, '32.140.206.210'),
(484, '37.120.133.168'),
(399, '37.120.143.166'),
(384, '37.120.143.59'),
(470, '37.120.156.16'),
(393, '37.120.156.19'),
(37, '37.120.192.25'),
(42, '37.120.192.30'),
(382, '37.120.217.51'),
(372, '37.58.58.229'),
(135, '39.137.107.98'),
(244, '39.137.69.6'),
(263, '45.132.227.184'),
(252, '45.236.104.85'),
(170, '45.64.134.198'),
(305, '45.86.203.192'),
(4, '46.166.143.114'),
(106, '46.166.190.248'),
(308, '46.229.168.130'),
(254, '46.229.168.134'),
(40, '46.229.168.137'),
(204, '46.229.168.139'),
(276, '46.229.168.144'),
(376, '46.229.168.145'),
(189, '46.229.168.147'),
(223, '46.229.168.149'),
(379, '46.229.168.153'),
(367, '46.229.168.161'),
(406, '50.7.117.88'),
(446, '51.77.53.174'),
(296, '62.4.13.160'),
(299, '62.4.13.168'),
(429, '62.4.13.173'),
(430, '62.4.7.231'),
(431, '62.4.7.239'),
(478, '77.81.139.46'),
(324, '78.138.117.191'),
(325, '78.159.113.194'),
(8, '80.79.116.138'),
(232, '81.92.206.167'),
(355, '82.102.16.198'),
(313, '82.103.128.24'),
(290, '84.17.36.19'),
(226, '84.17.47.43'),
(468, '84.17.47.68'),
(303, '84.17.47.77'),
(421, '84.17.48.108'),
(166, '84.17.48.115'),
(145, '84.17.48.185'),
(472, '84.17.48.203'),
(213, '84.17.48.63'),
(110, '84.17.48.93'),
(416, '84.17.49.186'),
(207, '84.17.49.21'),
(480, '84.17.49.7'),
(237, '84.17.51.107'),
(75, '84.17.51.12'),
(380, '84.17.51.142'),
(486, '84.17.51.143'),
(155, '84.17.51.4'),
(107, '84.17.51.65'),
(410, '84.17.51.67'),
(251, '84.17.51.74'),
(169, '84.17.51.82'),
(197, '84.17.51.96'),
(227, '84.17.60.123'),
(20, '84.17.60.17'),
(474, '84.17.60.186'),
(134, '84.17.60.79'),
(462, '84.17.61.157'),
(243, '84.17.61.201'),
(452, '84.247.48.20'),
(427, '84.247.48.8'),
(61, '84.39.112.83'),
(377, '85.206.162.222'),
(402, '89.187.168.131'),
(465, '89.187.168.133'),
(28, '89.187.168.142'),
(438, '89.187.168.151'),
(210, '89.187.168.161'),
(476, '89.187.168.179'),
(112, '89.238.150.15'),
(370, '89.238.150.174'),
(97, '89.238.154.125'),
(87, '89.238.154.169'),
(76, '89.238.154.184'),
(105, '89.238.154.24'),
(320, '94.46.167.76'),
(482, '95.154.200.141'),
(230, '95.154.200.179'),
(374, '95.154.200.181');

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

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `descr`, `url`, `image`, `ordr`) VALUES
(1, 'Qwant', 'Fullstack Engineer au sein du moteur de recherche qui respecte votre vie privée !\r\nSeptembre 2017 - Juin 2019', 'https://www.qwant.com', 'uploads/caa40a1e2598b3db9381d7fe49dfd6fd.png', 5),
(2, 'JustAuth.Me', 'Président Co-Fondateur. Connectez vous partout avec une seule application, sans mot de passe et en restant maître de vos données et de qui y a accès. Disponible maintenant !', 'https://justauth.me', 'uploads/22368ccfc84361f74c9f633175c8c703.png', 9),
(4, 'Pulseheberg', 'Freelance en développement d\'apps Android & iOS, ainsi que de modules WHMCS', 'https://pulseheberg.com', 'uploads/88fd9925e089562db638fbd83c231edf.jpeg', 7),
(5, 'Hexatom', 'Réalisation d\'une application mobile de gestion de Datacenter\r\nFévrier - Juin 2017', 'https://www.hexatom.fr/', 'uploads/6632e683c87fb371c79614649ef2bdf9.jpg', 4),
(6, 'Dreamvids', 'Président Co-Fondateur. Dreamvids était une plateforme de partage de vidéo associative, libre & open-source, par des viewers pour des vidéastes.\r\nDécembre 2013 - Décembre 2016', 'https://dreamvids.fr', 'uploads/191740c9324010985a6db7177ac8c845.png', 1),
(7, 'WinMedia', 'Freelance en développement web. Conception from scratch de la V1 du logiciel WinMam\r\nDécembre 2016 - Avril 2017', 'https://winmedia.org/fr/winmam/', 'uploads/98b17c1aaba3eff547708dbc9313c51b.png', 3),
(8, 'My Seedbox', 'Freelance en développement web. Développement de la nouvelle version du gestionnaire de fichier\r\nJanvier - Mars 2020', 'https://www.my-seedbox.com/', 'uploads/0239bdcb5355c758fc74f59e2c1442fa.png', 6),
(9, 'Snack Chez Franky', 'Freelance en développement Hybride. Réalisation d\'une app de prise de commande avec système de réception et de gestion temps réel des commandes en cuisine\r\n2016', 'http://snack-chez-franky.fr/', 'uploads/50524570bdd39fe3840950a98a1df90d.png', 2),
(10, 'L\'Odyssée Verte', 'Développement du site web de la boutique et du blog du projet', 'https://odysseeverte.fr', 'uploads/f4ea7e7b65398760b9e00bb226c299e8.png', 8),
(11, 'Restau sans contact', 'Restaurateurs, barmans, profitez du déconfinement pour opter pour la carte dématérialisée sur smartphone !', 'https://restau-sans-contact.fr', 'uploads/e5643431fa3a75d1283638e8199bdfe1.png', 10);
COMMIT;
