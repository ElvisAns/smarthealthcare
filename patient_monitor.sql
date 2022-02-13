-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Mars 2020 à 02:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `patient_monitor`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `Registration date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `Telephone` varchar(14) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Photo` varchar(40) NOT NULL,
  `Birth date` date NOT NULL,
  `Place of birth` varchar(10) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Age` int(3) NOT NULL,
  `Weight` int(3) NOT NULL,
  `Tutor Names` varchar(50) NOT NULL,
  `Tutor phone` varchar(14) NOT NULL,
  `Device_id` varchar(20) NOT NULL,
  `Nurse observation` varchar(300) NOT NULL,
  `hopital name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`,`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `Names`, `type`, `Registration date`, `status`, `Telephone`, `Adress`, `Photo`, `Birth date`, `Place of birth`, `Nationality`, `Age`, `Weight`, `Tutor Names`, `Tutor phone`, `Device_id`, `Nurse observation`, `hopital name`) VALUES
(1, 'ansimapersic@gmail.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', 'Elvis Ansima', 'admin', '0000-00-00', 'active', '+250786093098', 'Kigali/ Gisozi', 'assets/img/faces/+250786093098.jpg', '2000-07-24', 'Bukavu', 'Congolese', 19, 59, '', '', '20620190790', '', ''),
(3, 'ansj@vodo.com', '', 'kernel persic', 'patient', '0000-00-00', 'active', '+250785676003', '', 'assets/img/faces/+250785676003.jpg', '0000-00-00', '', '', 0, 0, '', '', '20620190728', '', ''),
(4, 'kerenvictoire@gmail.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', 'Keren Victoire', 'patient', '2019-12-10', 'active', '+243971774989', 'Gisozi', 'assets/img/faces/+243971774989.jpg', '2019-10-14', 'Kigali', 'Conglolese', 33, 60, '', '', '22201960998', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` varchar(12) NOT NULL,
  `noms` text NOT NULL,
  `bpm` int(3) NOT NULL,
  `SPO2` int(3) NOT NULL,
  `BodyTemperature` decimal(10,2) NOT NULL,
  `Room Temperature` int(3) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  PRIMARY KEY (`Time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logs`
--

INSERT INTO `logs` (`id`, `noms`, `bpm`, `SPO2`, `BodyTemperature`, `Room Temperature`, `Date`, `Time`) VALUES
('20620190790', 'Elvis Ansima', 70, 99, '33.90', 23, '2019-12-04', '01:06:21'),
('20620190790', 'Elvis Ansima', 70, 99, '33.90', 23, '2019-12-05', '12:26:25'),
('20620190790', 'Elvis Ansima', 70, 99, '33.90', 27, '2019-12-05', '12:36:12'),
('20620190790', 'Elvis Ansima', 70, 30, '33.90', 27, '2019-12-05', '12:37:02'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:24:06'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:24:27'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:24:41'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:28:06'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:28:17'),
('20620190790', 'Elvis Ansima', 0, 0, '45.70', 0, '2019-12-07', '14:29:01'),
('20620190790', 'Elvis Ansima', 0, 0, '45.70', 0, '2019-12-07', '14:29:40'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:30:22'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:30:34'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:31:33'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:31:53'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:32:00'),
('20620190790', 'Elvis Ansima', 0, 0, '0.00', 0, '2019-12-07', '14:33:44'),
('20620190728', 'kernel persic', 90, 99, '35.90', 25, '2019-12-03', '22:54:12'),
('20620190728', 'kernel persic', 90, 99, '35.90', 25, '2019-12-03', '22:56:27'),
('20620190728', 'kernel persic', 90, 99, '35.90', 25, '2019-12-03', '22:57:05'),
('20620190728', 'kernel persic', 90, 99, '35.90', 25, '2019-12-03', '23:00:05'),
('20620190728', 'kernel persic', 90, 99, '39.90', 25, '2019-12-03', '23:08:23'),
('20620190790', 'Elvis Ansima', 70, 99, '36.90', 20, '2019-12-03', '23:13:56'),
('20620190790', 'Elvis Ansima', 70, 99, '36.90', 21, '2019-12-03', '23:21:20'),
('20620190790', 'Elvis Ansima', 70, 99, '33.90', 21, '2019-12-03', '23:21:48');

-- --------------------------------------------------------

--
-- Structure de la table `patient ids records`
--

CREATE TABLE IF NOT EXISTS `patient ids records` (
  `patient1` varchar(12) NOT NULL,
  `patient2` varchar(12) NOT NULL,
  `patient3` varchar(12) NOT NULL,
  `patient4` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient ids records`
--

INSERT INTO `patient ids records` (`patient1`, `patient2`, `patient3`, `patient4`) VALUES
('20620190728', '86577908679', '976755766890', '867564689776'),
('76768878976', '877089768978', '787870877077', '88689089688');

-- --------------------------------------------------------

--
-- Structure de la table `real time patient state`
--

CREATE TABLE IF NOT EXISTS `real time patient state` (
  `id` varchar(12) NOT NULL,
  `noms` text NOT NULL,
  `ecgStream` int(3) NOT NULL,
  `bpm` varchar(3) NOT NULL,
  `SPO2` varchar(3) NOT NULL,
  `BodyTemperature` varchar(4) NOT NULL,
  `Room Temperature` varchar(3) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `real time patient state`
--

INSERT INTO `real time patient state` (`id`, `noms`, `ecgStream`, `bpm`, `SPO2`, `BodyTemperature`, `Room Temperature`, `Date`, `Time`) VALUES
('20620190728', 'kernel persic', 200, '90', '99', '39.9', '25', '2019-12-03', '23:08:23'),
('20620190790', 'Elvis Ansima', 380, '...', '...', '...', '...', '2019-12-07', '14:33:44'),
('22201960998', 'keren victoire', 400, '89', '98', '36.0', '29', '2019-12-02', '00:44:00');

-- --------------------------------------------------------

--
-- Structure de la table `room_id`
--

CREATE TABLE IF NOT EXISTS `room_id` (
  `id` bigint(20) DEFAULT NULL,
  `Photo` varchar(30) DEFAULT NULL,
  `Noms` varchar(30) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `room_id`
--

INSERT INTO `room_id` (`id`, `Photo`, `Noms`) VALUES
(20620190728, '\\image\\patient\\hakuze.png', 'Hakuze Christian'),
(20620190731, '\\image\\patient\\uwase.png', 'Uwase Judith');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
