-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 déc. 2023 à 10:58
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piste`
--

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique_piste`
--

CREATE TABLE `caracteristique_piste` (
  `id_caract` int(11) NOT NULL,
  `epaisseur1` decimal(10,0) NOT NULL,
  `couverture1` float NOT NULL,
  `CFL1` varchar(30) CHARACTER SET utf8 NOT NULL,
  `informations_compl1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_evaluation` date NOT NULL DEFAULT current_timestamp(),
  `heure_evaluation` time NOT NULL DEFAULT current_timestamp(),
  `id_niveau_FK1` int(11) NOT NULL,
  `epaisseur2` decimal(10,0) NOT NULL,
  `couverture2` float NOT NULL,
  `CFL2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `informations_compl2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `epaisseur3` decimal(10,0) NOT NULL,
  `couverture3` float NOT NULL,
  `CFL3` varchar(30) CHARACTER SET utf8 NOT NULL,
  `informations_compl3` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_niveau_FK2` int(11) NOT NULL,
  `id_niveau_FK3` int(11) NOT NULL,
  `distance1` varchar(40) NOT NULL,
  `distance2` varchar(40) NOT NULL,
  `distance3` varchar(40) NOT NULL,
  `airmanoeuv` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `caracteristique_piste`
--

INSERT INTO `caracteristique_piste` (`id_caract`, `epaisseur1`, `couverture1`, `CFL1`, `informations_compl1`, `date_evaluation`, `heure_evaluation`, `id_niveau_FK1`, `epaisseur2`, `couverture2`, `CFL2`, `informations_compl2`, `epaisseur3`, `couverture3`, `CFL3`, `informations_compl3`, `id_niveau_FK2`, `id_niveau_FK3`, `distance1`, `distance2`, `distance3`, `airmanoeuv`) VALUES
(84, '3', 21.7652, '0.50', 'dÃ©pot de caoutchou', '2022-09-02', '12:36:07', 1, '6', 77.1208, '0.25', 'depot', '2', 56.3839, '0.69', '', 2, 3, '254', '900', '658', ''),
(85, '3', 50.0428, '0.54', 'depot de caoutchou', '2022-09-05', '09:59:54', 1, '2', 21.5081, '', '', '5', 48.5861, '', '', 2, 3, '584', '251', '567', ''),
(86, '3', 32.9049, '0.44', 'depot caoutchou', '2022-09-05', '10:00:49', 1, '6', 77.1208, '0.78', 'RAS', '5', 48.5861, '0.60', '', 2, 3, '384', '900', '567', ''),
(87, '3', 68.5518, '0.4', 'RAS', '2022-09-05', '10:05:41', 1, '4', 68.5518, '0.7', '', '3', 68.5518, '0.7', '', 2, 3, '800', '800', '800', ''),
(88, '2', 84.4045, '0,44', 'RAS', '2022-09-05', '12:24:37', 1, '6', 77.1208, '0.60', '', '3', 68.5518, '0.55', '', 2, 3, '985', '900', '800', ''),
(89, '3', 32.9049, '0.58', '', '2022-09-05', '12:48:29', 1, '2', 71.9794, '0.44', 'Depot de caoutchou', '5', 56.3839, '0.85', '', 2, 3, '384', '840', '658', ''),
(90, '3', 0.257069, '3', '3', '2022-09-05', '13:37:59', 1, '3', 0.257069, '3', '3', '3', 0.257069, '3', '3', 2, 3, '3', '3', '3', ''),
(91, '4', 0.342759, '4', '4', '2022-09-05', '13:39:00', 1, '4', 0.342759, '4', '4', '4', 0.342759, '4', '4', 2, 3, '4', '4', '4', ''),
(92, '4', 0.342759, '4', '4', '2022-09-05', '13:39:50', 1, '4', 0.342759, '4', '4', '4', 0.342759, '4', '4', 2, 3, '4', '4', '4', ''),
(93, '5', 0.428449, '5', '5', '2022-09-05', '13:41:05', 1, '5', 0.428449, '5', '5', '5', 0.428449, '5', '5', 2, 3, '5', '5', '5', ''),
(94, '5', 50.0428, '0.2', 'RAS', '2022-09-05', '13:44:55', 1, '12', 68.5518, '0.6', '', '5', 68.5518, '0.6', '', 2, 3, '584', '800', '800', ''),
(95, '3', 84.4045, '0.44', 'RAS', '2022-09-05', '14:00:59', 1, '12', 77.1208, '0.60', '', '2', 56.3839, '0.85', '', 2, 3, '985', '900', '658', ''),
(96, '3', 32.9049, '0.69', '', '2022-09-05', '14:09:24', 1, '3', 77.1208, '025', 'depot', '7', 48.5861, '0.69', '', 2, 3, '384', '900', '567', ''),
(97, '3', 32.9049, '0.56', '', '2022-09-05', '14:17:58', 1, '3', 59.8115, '0.23', 'depot de caoutchou', '9', 56.3839, '', '', 2, 3, '384', '698', '658', ''),
(98, '3', 21.7652, '0.89', '', '2022-09-05', '14:26:00', 1, '6', 50.0428, '0.57', '', '6', 84.4045, '0.69', '', 2, 3, '254', '584', '985', ''),
(99, '7', 22.108, '0.98', '', '2022-09-05', '14:33:09', 1, '6', 84.4045, '0.69', '', '4', 59.8115, '0.95', '', 2, 3, '258', '985', '698', ''),
(100, '8', 19.2802, '55', '55', '2022-09-05', '14:35:05', 1, '5', 0.428449, '5', '5', '55', 0.428449, '5', '555', 2, 3, '225', '5', '5', ''),
(101, '5', 0, '0', '0', '2022-09-05', '14:37:52', 1, '5', 0.428449, '5', '5', '5', 0.428449, '5', '55', 2, 3, '0', '5', '5', ''),
(102, '5', 0, '0', '0', '2022-09-05', '14:39:33', 1, '0', 0, '0', '0', '0', 0, '0', '0', 2, 3, '0', '0', '0', ''),
(103, '5', 0, '0', '0', '2022-09-05', '14:47:34', 1, '0', 0, '0', '0', '0', 0, '0', '0', 2, 3, '0', '0', '0', ''),
(104, '9', 81.7481, '65', '', '2022-09-05', '14:48:29', 1, '6', 84.5758, '56', '', '4', 59.8115, '25', 'RAS', 2, 3, '954', '987', '698', ''),
(105, '6', 59.8115, '25', 'RAS', '2022-09-05', '14:55:50', 1, '9', 59.8115, '25', '', '4', 82.6907, '6', 'RAS', 2, 3, '698', '698', '965', ''),
(106, '3', 84.7472, '0.25', 'depot de caoutchou au seuil 01', '2022-09-06', '09:11:30', 1, '6', 50.0428, '1', '', '4', 56.3839, '0.45', 'Depot de caoutchou', 2, 3, '989', '584', '658', ''),
(107, '3', 32.9049, '4', '', '2022-09-06', '09:41:34', 1, '6', 77.1208, '', '', '2', 56.3839, '', '', 2, 3, '384', '900', '658', ''),
(108, '10', 32.9049, '5', '', '2022-09-06', '09:52:55', 1, '2', 50.0428, '3', '', '6', 72.0651, '1', '', 2, 3, '384', '584', '841', ''),
(109, '3', 21.7652, '1', '', '2022-09-06', '10:04:59', 1, '6', 76.6067, '1', 'RAS', '5', 84.4045, '1', '', 2, 3, '254', '894', '985', ''),
(110, '3', 32.9049, '2', '', '2022-09-07', '11:54:52', 1, '5', 6.6838, '1', '', '5', 46.8723, '2', '', 2, 3, '384', '78', '547', ''),
(111, '3', 57.8406, '1', '', '2022-09-08', '12:36:09', 1, '3', 39.0746, '1', 'Ras', '2', 57.8406, '1', 'RAS', 2, 3, '675', '456', '675', ''),
(112, '2', 46.6153, '0.4', 'ras', '2022-09-19', '11:55:48', 1, '2', 77.1208, '0.6', '', '4', 17.138, '0.8', '', 2, 3, '544', '900', '200', ''),
(113, '2', 84.4045, '0.44', 'ras', '2022-09-19', '12:08:30', 1, '3', 77.1208, '0.60', '', '4', 56.3839, '0.55', '', 2, 3, '985', '900', '658', ''),
(114, '3', 77.1208, '0.2', 'rqs', '2022-09-19', '12:10:00', 1, '4', 68.5518, '0.6', '', '3', 51.4139, '0.2', 'RAS', 2, 3, '900', '800', '600', ''),
(115, '3', 21.7652, '0.44', '', '2022-09-19', '12:53:18', 1, '3', 77.1208, '0,35', '', '4', 23.9931, '0.55', '', 2, 3, '254', '900', '280', ''),
(116, '2', 8.56898, '0.6', '', '2022-09-22', '09:57:25', 1, '5', 51.4139, '0.4', 'rubber deposit', '3', 59.9829, '0.30', 'rubber deposit', 2, 3, '100', '600', '700', ''),
(117, '2', 46.4439, '1', '', '2022-09-26', '09:53:01', 1, '3', 44.6444, '1', '', '4', 59.8115, '0.40', 'depot de caoutchou', 2, 3, '542', '521', '698', ''),
(118, '3', 25.7069, '0.65', '', '2022-09-26', '10:33:23', 1, '4', 17.138, '0.65', '', '2', 21.4225, '0.65', '', 2, 3, '300', '200', '250', ''),
(119, '3', 21.7652, '0.65', '', '2022-09-26', '14:51:43', 1, '6', 35.9897, '0.65', '', '4', 50.2999, '0.65', '', 2, 3, '254', '420', '587', ''),
(120, '3', 21.7652, '0.44', 'Depot de caoutchou', '2022-09-26', '15:48:32', 1, '6', 77.1208, '0.65', '', '2', 31.6195, '0.35', 'Depot de caoutchou', 2, 3, '254', '900', '369', ''),
(121, '3', 32.9049, '0.25', 'depot de caoutchou', '2022-09-26', '18:17:22', 1, '6', 35.9897, '0.65', '', '2', 59.8115, '0.23', 'depot de caoutchou', 2, 3, '384', '420', '698', ''),
(122, '3', 32.9049, '0.25', 'depot', '2022-09-26', '18:25:13', 1, '6', 35.9897, '0.65', '', '2', 59.8115, '0.23', 'depot', 2, 3, '384', '420', '698', ''),
(123, '3', 32.9049, '0.25', 'depot', '2022-09-26', '18:36:01', 1, '6', 35.9897, '0.65', '', '2', 56.3839, '0.23', 'depo', 2, 3, '384', '420', '658', ''),
(124, '3', 12.8535, '0.65', '', '2022-09-27', '10:23:33', 1, '7', 25.7069, '0.65', '', '4', 56.3839, '0.50', 'depot de caoutchou', 2, 3, '150', '300', '658', ''),
(125, '3', 12.8535, '0.65', '', '2022-09-27', '10:28:22', 1, '7', 25.7069, '0.65', '', '2', 56.3839, '0.50', 'depot de caoutchou', 2, 3, '150', '300', '658', ''),
(126, '3', 12.9392, '0.65', '', '2022-09-27', '11:34:27', 1, '4', 21.4225, '0.65', '', '5', 25.7069, '0.50', 'depot de caoutchou', 2, 3, '151', '250', '300', ''),
(127, '3', 32.9049, '0.65', '', '2022-09-28', '10:36:39', 1, '4', 35.9897, '0.35', 'Depot de caoutchou', '5', 56.3839, '0.45', 'Depot de caoutchou', 2, 3, '384', '420', '658', ''),
(128, '5', 53.2991, '062', '', '2022-09-28', '16:16:21', 1, '3', 59.9829, '0.7', '', '5', 51.4139, '0.8', '', 2, 3, '622', '700', '600', ''),
(129, '3', 32.9049, '0.25', 'Depot de caoutchou', '2022-09-29', '11:41:16', 1, '6', 77.1208, '0.65', '', '2', 56.3839, '0.25', 'depot de caoutchou', 2, 3, '384', '900', '658', ''),
(130, '1', 55.8698, '0.65', '', '2022-10-01', '15:07:02', 1, '3', 25.7069, '0.65', '', '3', 21.4225, '0.65', '', 2, 3, '652', '300', '250', ''),
(131, '5', 25.7069, '0.65', '', '2022-10-03', '02:45:33', 1, '3', 21.4225, 'O.50', '', '2', 56.3839, '0.50', 'STANDING WATER', 2, 3, '300', '250', '658', ''),
(132, '3', 32.9049, '0.44', 'Depot de caoutchou', '2022-10-05', '15:14:44', 1, '3', 35.9897, '0.65', '', '2', 59.8115, '0.56', '', 2, 3, '384', '420', '698', ''),
(133, '5', 13.7104, '050', '', '2022-10-13', '12:25:12', 1, '45', 21.4225, '065', '', '3', 25.7069, '070', '', 2, 3, '160', '250', '300', ''),
(134, '3', 21.7652, '0.44', 'Depot de caoutchou', '2022-11-11', '11:42:21', 1, '6', 77.1208, '0.65', '', '2', 56.3839, '0.55', '', 2, 3, '254', '900', '658', ''),
(135, '3', 32.9049, '0.25', 'depot de caoutchou', '2022-11-23', '12:37:06', 1, '6', 77.1208, '0.60', '', '2', 48.5861, '0.57', '', 2, 3, '384', '900', '567', ''),
(136, '3', 32.9049, '5', 'RAS', '2022-11-24', '10:24:09', 1, '6', 77.1208, '1', '', '2', 56.3839, '0.23', 'Depot da caoutchou', 2, 3, '384', '900', '658', ''),
(137, '3', 32.9049, '4', 'RAS', '2022-11-24', '10:51:40', 1, '6', 77.1208, '0.5', 'Depot de caoutchou', '2', 56.3839, '1', '', 2, 3, '384', '900', '658', ''),
(138, '3', 50.0428, '', 'dÃ©pÃ´t de gomme ', '2022-11-24', '11:19:08', 1, '3', 50.0428, '', '', '4', 77.1208, '', 'depot de gomme ', 2, 3, '584', '584', '900', ''),
(139, '3', 32.9049, '0.32', 'Depot de gomme', '2022-11-24', '12:03:32', 1, '6', 77.1208, '1', '', '2', 56.3839, '2', 'RAS', 2, 3, '384', '900', '658', ''),
(140, '3', 21.7652, '4', '', '2023-02-28', '09:44:47', 1, '6', 77.1208, '1', '', '3', 48.5861, '0.50', 'rebbur deposit', 2, 3, '254', '900', '567', ''),
(141, '5', 42.8449, '0.45', 'presence gomme', '2023-03-03', '10:36:26', 1, '3', 59.9829, '0.7', '', '4', 85.6898, '', '', 2, 3, '500', '700', '1000', ''),
(142, '3', 32.9049, '4', 'RAS', '2023-03-29', '09:47:41', 1, '6', 50.0428, '1', '', '2', 56.3839, '0.55', '', 2, 3, '384', '584', '658', ''),
(143, '3', 50.2999, '0.2', 'RAS', '2023-05-17', '12:48:59', 1, '1', 17.395, '1', '', '2', 13.539, '0.5', 'Depot de gomme', 2, 3, '587', '203', '158', ''),
(144, '2', 44.9015, '0.5', 'Depot de gomme', '2023-05-19', '10:40:23', 1, '1', 10.7112, '1', '', '5', 40.9597, '0.5', 'depot de gomme', 2, 3, '524', '125', '478', ''),
(145, '2', 44.9015, '0.5', 'Depot de gomme', '2023-05-25', '08:27:12', 1, '1', 10.7112, '1', 'RAs', '5', 40.9597, '0.5', 'Depot de gomme', 2, 3, '524', '125', '478', ''),
(146, '1', 8.56898, '1', 'RAS', '2023-05-25', '11:37:17', 1, '2', 10.7112, '1', 'RAS', '2', 17.138, '1', 'RAs', 2, 3, '100', '125', '200', ''),
(147, '2', 44.9015, '0.5', 'Deopt de gomme', '2023-06-13', '09:00:07', 1, '1', 10.7112, '1', 'RAS', '5', 40.9597, '0.5', 'Depot de gomme', 2, 3, '524', '125', '478', ''),
(148, '1', 8.56898, '1', 'RAS', '2023-06-13', '09:16:29', 1, '2', 10.7112, '1', 'RAS', '5', 17.138, '0.5', 'Depot de gomme', 2, 3, '100', '125', '200', ''),
(149, '2', 17.138, '1', '', '2023-06-13', '13:11:48', 1, '2', 17.138, '0.5', 'Depot de gomme', '5', 40.9597, '1', '', 2, 3, '200', '200', '478', ''),
(150, '2', 44.9015, '0.5', 'RAS', '2023-06-19', '11:27:54', 1, '1', 10.7112, '1', '', '5', 40.9597, '1', '', 2, 3, '524', '125', '478', ''),
(151, '2', 44.9015, '1', '', '2023-07-03', '09:17:20', 1, '1', 10.7112, '1', 'RAS', '5', 40.9597, '1', '', 2, 3, '524', '125', '478', ''),
(152, '2', 44.9015, '1', '', '2023-07-03', '09:29:38', 1, '2', 59.9829, '1', 'RAS', '5', 40.9597, '1', '', 2, 3, '524', '700', '478', ''),
(153, '2', 44.9015, '1', '', '2023-07-03', '09:32:32', 1, '2', 10.7112, '1', 'RAS', '5', 40.9597, '1', '', 2, 3, '524', '125', '478', ''),
(154, '1', 44.9015, '1', '', '2023-07-03', '09:41:43', 1, '1', 59.9829, '1', 'RAS', '5', 17.138, '1', '', 2, 3, '524', '700', '200', ''),
(155, '3', 107.198, '1', '', '2023-08-23', '10:30:32', 1, '4', 58.6975, '0.5', '', '5', 41.7309, '0.40', 'dÃ©pot de gomme', 2, 3, '1251', '685', '487', ''),
(156, '3', 21.7652, '1', '', '2023-09-02', '17:32:23', 1, '3', 76.6067, '1', '', '5', 84.4045, '0.40', 'DepÃ´t de caoutchou ', 2, 3, '254', '894', '985', ''),
(157, '3', 50.0428, '1', '', '2023-09-02', '22:41:29', 1, '6', 63.8389, '1', '', '5', 83.8046, '0.40', 'Depot de caoutchou', 2, 3, '584', '745', '978', ''),
(158, '3', 21.7652, '1', 'RAS', '2023-11-10', '12:56:46', 1, '3', 76.6067, '1', '', '5', 59.8115, '1', '', 2, 3, '254', '894', '698', '');

-- --------------------------------------------------------

--
-- Structure de la table `matrice_rcam`
--

CREATE TABLE `matrice_rcam` (
  `id_matrice` int(11) NOT NULL,
  `code_etat_piste` varchar(30) NOT NULL,
  `desc_surf_piste` varchar(100) NOT NULL,
  `obs_deceleration` varchar(100) NOT NULL,
  `rap_cons_eff_freinage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id_niveau` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `libelle`) VALUES
(1, 'Tiers 1'),
(2, 'Tiers 2'),
(3, ' Tiers 3');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_etat_piste_rcr`
--

CREATE TABLE `rapport_etat_piste_rcr` (
  `id_rapport` int(11) NOT NULL,
  `num_rapport` varchar(100) CHARACTER SET utf8 NOT NULL,
  `aerodrome_Rapp` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_time` varchar(30) CHARACTER SET utf8 NOT NULL,
  `rwy` varchar(30) CHARACTER SET utf8 NOT NULL,
  `rwycc` varchar(30) CHARACTER SET utf8 NOT NULL,
  `coverage` varchar(30) CHARACTER SET utf8 NOT NULL,
  `depth_in_mm` varchar(30) CHARACTER SET utf8 NOT NULL,
  `contaminent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `contaminant` varchar(40) CHARACTER SET utf8 NOT NULL,
  `situational_awar_section` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_section1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_section2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_section3` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_sectionan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_sectionan1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_sectionan2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `situational_awar_sectionan3` varchar(100) CHARACTER SET utf8 NOT NULL,
  `reducedlenghtifapplicable` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_normal` date NOT NULL,
  `heure_normal` time NOT NULL,
  `manoeuvre` varchar(200) CHARACTER SET utf8 NOT NULL,
  `manoeuvrean` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport_etat_piste_rcr`
--

INSERT INTO `rapport_etat_piste_rcr` (`id_rapport`, `num_rapport`, `aerodrome_Rapp`, `date_time`, `rwy`, `rwycc`, `coverage`, `depth_in_mm`, `contaminent`, `contaminant`, `situational_awar_section`, `situational_awar_section1`, `situational_awar_section2`, `situational_awar_section3`, `situational_awar_sectionan`, `situational_awar_sectionan1`, `situational_awar_sectionan2`, `situational_awar_sectionan3`, `reducedlenghtifapplicable`, `date_normal`, `heure_normal`, `manoeuvre`, `manoeuvrean`) VALUES
(15, '0001', 'GOBD', '09/02-12:36', '01', '6/2/5', '25/100/75', 'NR/6/NR', 'DRY/STAGNANT WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', 'TIERS1: dÃ©pot de caoutchou/ TIERS2: depot/ TIERS3: ', 'dÃ©pot de caoutchou', 'depot', '', 'TIERS1: / TIERS2: / TIERS3: ', '', '', '', '', '2022-09-02', '12:36:07', '', ''),
(16, '0002', 'GOBD', '09050959', '01', '5/6/2', '/25/50', 'NR/NR/5', 'WET/DRY/STAGNANT WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'TIERS1: depot de caoutchou/ TIERS2: / TIERS3: ', 'depot de caoutchou', '', '', 'TIERS1: / TIERS2: / TIERS3: ', '', '', '', '', '2022-09-05', '09:59:54', '', ''),
(17, '', 'GOBD', '09051000', '01', '3/2/2', '50/100/50', 'NR/6/5', 'WET/STAGNANT WATER/STAGNANT WATER', 'MOUILLEE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: SEUIL DE DÃ‰POT DE CAOUTCHOU / TIERS2: RAS/ TIERS3: ', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', 'RAS', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD / TIERS2: / TIERS3: ', 'RUBBER DEPOSIT THRESHOLD ', '', '', '', '2022-09-05', '10:00:49', '', ''),
(18, '', 'GOBD', '09051005', '01', '3/2/5', '75/75/75', 'NR/4/NR', 'WET/STAGNANT WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: SEUIL DE DÃ‰POT DE CAOUTCHOU / TIERS2: / TIERS3: ', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD / TIERS2: / TIERS3: ', 'RUBBER DEPOSIT THRESHOLD ', '', '', '', '2022-09-05', '10:05:41', '', ''),
(19, '', 'GOBD', '09051224', '01', '3/2/5', '100/100/75', 'NR/6/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: SEUIL DE DÃ‰POT DE CAOUTCHOU </br> TIERS2: </br> TIERS3: ', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD </br> TIERS2: </br> TIERS3: ', 'RUBBER DEPOSIT THRESHOLD ', '', '', '', '2022-09-05', '12:24:37', '', ''),
(20, '', 'GOBD', '09051248', '01', '5/3/2', '50/75/75', 'NR/NR/5', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: SEUIL DE DÃ‰POT DE CAOUTCHOU </br> TIERS3: ', '', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', 'TIERS1: </br> TIERS2: RUBBER DEPOSIT THRESHOLD</br> TIERS3: ', '', 'RUBBER DEPOSIT THRESHOLD', '', '', '2022-09-05', '12:48:29', '', ''),
(21, '', 'GOBD', '09051337', '01', '6/6/6', 'NR/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 3</br> TIERS2: 3</br> TIERS3: 3', '3', '3', '3', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '13:37:59', '', ''),
(22, '', 'GOBD', '09051339', '01', '6/6/6', 'NR/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 4</br> TIERS2: 4</br> TIERS3: 4', '4', '4', '4', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '13:39:00', '', ''),
(23, '', 'GOBD', '09051339', '01', '6/6/6', 'NR/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 4</br> TIERS2: 4</br> TIERS3: 4', '4', '4', '4', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '13:39:50', '', ''),
(24, '', 'GOBD', '09051341', '01', '6/6/6', 'NR/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 5</br> TIERS2: 5</br> TIERS3: 5', '5', '5', '5', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '13:41:05', '', ''),
(25, '', 'GOBD', '09051344', '01', '2/2/2', '75/75/75', '5/12/5', 'STANDING WATER/STANDING WATER/STANDING WATER', 'EAU STAGNANTE/EAU STAGNANTE/EAU STAGNANT', 'TIERS1: RAS</br> TIERS2: </br> TIERS3: ', 'RAS', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '13:44:55', '', ''),
(26, '', 'GOBD', '09051400', '01', '3/2/5', '100/100/75', 'NR/12/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: SEUIL DE DÃ‰POT DE CAOUTCHOU </br> TIERS2: </br> TIERS3: ', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD </br> TIERS2: </br> TIERS3: ', 'RUBBER DEPOSIT THRESHOLD ', '', '', '', '2022-09-05', '14:00:59', '', ''),
(27, '', 'GOBD', '09051409', '01', '5/5/2', '50/100/50', 'NR/NR/7', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: depot</br> TIERS3: ', '', 'depot', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:09:24', '', ''),
(28, '', 'GOBD', '09051417', '01', '5/3/2', '50/75/75', 'NR/NR/9', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: SEUIL DE DÃ‰POT DE CAOUTCHOU </br> TIERS3: ', '', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', 'TIERS1: </br> TIERS2: RUBBER DEPOSIT THRESHOLD</br> TIERS3: ', '', 'RUBBER DEPOSIT THRESHOLD', '', '', '2022-09-05', '14:17:58', '', ''),
(29, '', 'GOBD', '09051426', '01', '6/2/2', '25/75/100', 'NR/6/6', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:26:00', '', ''),
(30, '', 'GOBD', '09051433', '01', '6/2/2', '25/100/75', 'NR/6/4', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:33:09', '', ''),
(31, '', 'GOBD', '09051435', '01', '6/2/2', '25/100/75', 'NR/6/4', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: 55</br> TIERS2: 5</br> TIERS3: 555', '55', '5', '555', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:35:05', '', ''),
(32, '', 'GOBD', '09051437', '01', '6/2/2', '25/100/75', 'NR/6/4', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: 0</br> TIERS2: 5</br> TIERS3: 55', '0', '5', '55', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:37:52', '', ''),
(33, '', 'GOBD', '09051439', '01', '6/6/6', '25/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 0</br> TIERS2: 0</br> TIERS3: 0', '0', '0', '0', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:39:33', '', ''),
(34, '', 'GOBD', '09051447', '01', '6/6/6', '25/NR/NR', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'TIERS1: 0</br> TIERS2: 0</br> TIERS3: 0', '0', '0', '0', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:47:34', '', ''),
(35, '', 'GOBD', '09051448', '01', '2/2/2', '100/100/75', '9/6/4', 'STANDING WATER/STANDING WATER/STANDING WATER', 'EAU STAGNANTE/EAU STAGNANTE/EAU STAGNANT', 'TIERS1: </br> TIERS2: </br> TIERS3: RAS', '', '', 'RAS', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:48:29', '', ''),
(36, '', 'GOBD', '09051455', '01', '2/2/2', '75/75/100', '06/09/04', 'STANDING WATER/STANDING WATER/STANDING WATER', 'EAU STAGNANTE/EAU STAGNANTE/EAU STAGNANT', 'TIERS1: RAS</br> TIERS2: </br> TIERS3: RAS', 'RAS', '', 'RAS', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-05', '14:55:50', '', ''),
(37, '', 'GOBD', '09060911', '01', '3/2/2', '100/75/75', '0NR/06/04', 'WET/STANDING WATER/STANDING WATER', 'MOUILLEE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: SEUIL DE DÃ‰POT DE CAOUTCHOU </br> TIERS2: </br> TIERS3: Depot de caoutchou', 'SEUIL DE DÃ‰POT DE CAOUTCHOU ', '', 'Depot de caoutchou', 'TIERS1: RUBBER DEPOSIT THRESHOLD </br> TIERS2: </br> TIERS3: ', 'RUBBER DEPOSIT THRESHOLD ', '', '', '', '2022-09-06', '09:11:30', '', ''),
(38, '', 'GOBD', '09060941', '01', '5/2/3', '50/100/75', '0NR/06/0NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-06', '09:41:34', '', ''),
(39, '', 'GOBD', '09060952', '01', '2/5/2', '50/100/75', '10/NR/06', 'STANDING WATER/WET/STANDING WATER', 'EAU STAGNANTE/MOUILLEE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-06', '09:52:55', '', ''),
(40, '', 'GOBD', '09061004', '01', '6/2/2', '25/100/100', 'NR/06/05', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: RAS</br> TIERS3: ', '', 'RAS', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-06', '10:04:59', '', ''),
(41, '', 'GOBD', '09071154', '01', '5//2', '50//50', 'NR/0/05', 'WET//STANDING WATER', 'MOUILLEE//EAU STAGNANTE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-07', '11:54:52', '', ''),
(42, '', 'GOBD', '09081236', '01', '5/5/5', '75/50/75', 'NR/NR/NR', 'WET/WET/WET', 'MOUILLEE/MOUILLEE/MOUILLEE', 'TIERS1: </br> TIERS2: Ras</br> TIERS3: RAS', '', 'Ras', 'RAS', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-08', '12:36:09', '', ''),
(43, '', 'GOBD', '09191155', '01', '3/5/', '50/100/', 'NR/NR/0', 'WET/WET/', 'MOUILLEE/MOUILLEE/', 'TIERS1: DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br> TIERS2: </br> TIERS3: ', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD 01</br> TIERS2: </br> TIERS3: ', 'RUBBER DEPOSIT THRESHOLD 01', '', '', '', '2022-09-19', '11:55:48', '', ''),
(44, '', 'GOBD', '09191208', '01', '3/5/2', '100/100/75', 'NR/NR/04', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'TIERS1: DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br> TIERS2: </br> TIERS3: ', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', '', 'TIERS1: RUBBER DEPOSIT THRESHOLD 01</br> TIERS2: </br> TIERS3: ', 'RUBBER DEPOSIT THRESHOLD 01', '', '', '', '2022-09-19', '12:08:30', '', ''),
(45, '', 'GOBD', '09191210', '01', '3/2/3', '100/75/75', 'NR/04/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br> TIERS2: </br> TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'TIERS1: RUBBER DEPOSIT THRESHOLD 01</br> TIERS2: </br> TIERS3: RUBBER DEPOSIT THRESHOLD 19', 'RUBBER DEPOSIT THRESHOLD 01', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-19', '12:10:00', '', ''),
(46, '', 'GOBD', '09191253', '01', '6/3/3', '25/100/75', 'NR/NR/NR', 'DRY/WET/WET', 'SECHE/MOUILLEE/MOUILLEE', 'TIERS1: </br> TIERS2: </br> TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', '', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'TIERS1: </br> TIERS2: </br> TIERS3: RUBBER DEPOSIT THRESHOLD 19', '', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-19', '12:53:18', '', ''),
(47, '', 'GOBD', '09220957', '01', '6/2/3', 'NR/75/75', 'NR/05/NR', 'DRY/STANDING WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', 'TIERS1: </br> TIERS2: rubber deposit</br> TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', '', 'rubber deposit', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'TIERS1: </br> TIERS2: </br> TIERS3: RUBBER DEPOSIT THRESHOLD 19', '', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-22', '09:57:25', '', ''),
(48, '', 'GOBD', '09260953', '01', '5/5/2', '50/50/75', 'NR/NR/04', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'TIERS1: </br> TIERS2: </br> TIERS3: depot de caoutchou', '', '', 'depot de caoutchou', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-26', '09:53:01', '', ''),
(49, '', 'GOBD', '09261033', '01', '5/5/6', '50/50/25', 'NR/NR/NR', 'WET/WET/DRY', 'MOUILLEE/MOUILLEE/SECHE', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', 'TIERS1: </br> TIERS2: </br> TIERS3: ', '', '', '', '', '2022-09-26', '10:33:23', '', ''),
(50, '', 'GOBD', '09261451', '01', '6/2/2', '25/50/75', 'NR/06/04', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'RAS', '', '', '', 'RAS', '', '', '', '', '2022-09-26', '14:51:43', '', ''),
(51, '', 'GOBD', '09261548', '01', '6/2/3', '25/100/50', 'NR/06/NR', 'DRY/STANDING WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', ' TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> Parking degagÃ©', '', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', ' TIERS3: RUBBER DEPOSIT THRESHOLD 19</br> Parking degagÃ©', '', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-26', '15:48:32', '', ''),
(52, '', 'GOBD', '09261817', '01', '3/2/3', '50/50/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', '', 'RUBBER DEPOSIT THRESHOLD 01', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-26', '18:17:22', 'RAS', 'RAS'),
(53, '', 'GOBD', '09261825', '01', '3/2/3', '50/50/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br>  TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> ras', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'TIERS1: </br> TIERS3: RUBBER DEPOSIT THRESHOLD 19</br> ras', 'RUBBER DEPOSIT THRESHOLD 01', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-26', '18:25:13', 'ras', 'ras'),
(54, '', 'GOBD', '09261836', '01', '3/2/3', '50/50/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'TIERS1: DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br>  TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> BIEN', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'TIERS1:RUBBER DEPOSIT THRESHOLD 01</br> TIERS3: RUBBER DEPOSIT THRESHOLD 19</br> BIEN', 'RUBBER DEPOSIT THRESHOLD 01', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-26', '18:36:01', 'BIEN', 'BIEN'),
(55, '', 'GOBD', '09271028', '01', '6/2/3', '25/50/75', 'NR/07/NR', 'DRY/STANDING WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', ' TIERS3: DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> Ruissellement', '', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', ' TIERS3: RUBBER DEPOSIT THRESHOLD 19</br> Ruissellement', '', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-27', '10:28:22', 'Ruissellement', 'Ruissellement'),
(56, '', 'GOBD', '09271134', '01', '6/2/2', '25/50/50', 'NR/07/05', 'DRY/STANDING WATER/STANDING WATER', 'SECHE/EAU STAGNANTE/EAU STAGNANTE', 'flague d eau', '', '', '', 'flague d eau', '', '', '', '', '2022-09-27', '11:34:27', 'flague d eau', 'flague d eau'),
(57, '', 'GOBD', '09281036', '01', '5/2/2', '50/50/75', 'NR/04/05', 'WET/STANDING WATER/STANDING WATER', 'MOUILLEE/EAU STAGNANTE/EAU STAGNANTE', '', '', '', '', '', '', '', '', '', '2022-09-28', '10:36:39', '', ''),
(58, '', 'GOBD', '09281616', '01', '2/5/2', '75/75/75', '05/NR/05', 'STANDING WATER/WET/STANDING WATER', 'EAU STAGNANTE/MOUILLEE/EAU STAGNANTE', '', '', '', '', '', '', '', '', '', '2022-09-28', '16:16:21', '', ''),
(59, '', 'GOBD', '09291141', '01', '3/2/3', '50/100/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br>  DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> RAS', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'RUBBER DEPOSIT THRESHOLD 01</br> RUBBER DEPOSIT THRESHOLD 19</br> RAS', 'RUBBER DEPOSIT THRESHOLD 01', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-09-29', '11:41:16', 'RAS', 'RAS'),
(60, '', 'GOBD', '10011507', '01', '5/5/6', '75//25', 'NR/NR/NR', 'WET/WET/DRY', 'MOUILLEE/MOUILLEE/SECHE', '', '', '', '', '', '', '', '', '', '2022-10-01', '15:07:02', '', ''),
(61, '', 'GOBD', '10030245', '01', '2/6/3', '50/25/75', '05/NR/NR', 'STANDING WATER/DRY/WET', 'EAU STAGNANTE/SECHE/MOUILLEE', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 </br> ', '', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 19 ', 'RUBBER DEPOSIT THRESHOLD 19</br> ', '', '', 'RUBBER DEPOSIT THRESHOLD 19', '', '2022-10-03', '02:45:33', '', ''),
(62, '', 'GOBD', '10051514', '01', '3/5/5', '50/50/75', 'NR/NR/NR', 'WET/WET/WET', 'MOUILLEE/MOUILLEE/MOUILLEE', '', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', '', '', 'RUBBER DEPOSIT THRESHOLD 01', '', '', '', '2022-10-05', '15:14:44', '', ''),
(63, '', 'GOBD', '10131225', '01', '//5', '//', '0/0/NR', '//WET', '//MOUILLEE', '', '', '', '', '', '', '', '', '', '2022-10-13', '12:25:12', '', ''),
(64, '0064', 'GOBD', '11111142', '01', '6/2/5', '25/100/75', 'NR/06/NR', 'DRY/STANDING WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', '', '', '', '', '', '', '', '', '', '2022-11-11', '11:42:21', '', ''),
(70, '0001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', ''),
(71, '112312370071', 'GOBD', '11231237', '01', '3/2/5', '50/100/50', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 </br> ', 'DÃ‰POT DE CAOUTCHOU AU SEUIL 01 ', '', '', 'RUBBER DEPOSIT THRESHOLD 01</br> ', 'RUBBER DEPOSIT THRESHOLD 01', '', '', '', '2022-11-23', '12:37:06', '', ''),
(72, '112410240072', 'GOBD', '11241024', '01', '5/2/3', '50/100/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'RAS</br>  Depot da caoutchou</br> ', 'RAS', '', 'Depot da caoutchou', 'OKAY</br> Rubber deposit</br> ', 'OKAY', '', 'Rubber deposit', '', '2022-11-24', '10:24:09', '', ''),
(73, '112410510073', 'GOBD', '11241051', '01', '5/2/5', '50/100/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'RAS</br> Depot de caoutchou</br> ', 'RAS', 'Depot de caoutchou', '', 'OKAY</br> Rubber deposit</br> ', 'OKAY', 'Rubber deposit', '', '', '2022-11-24', '10:51:40', '', ''),
(74, '112412030074', 'GOBD', '11241203', '01', '3/2/5', '50/100/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'Depot de gomme</br>  RAS</br> ', 'Depot de gomme', '', 'RAS', 'Rubber deposit</br> OKAY</br> ', 'Rubber deposit', '', 'OKAY', '', '2022-11-24', '12:03:32', '', ''),
(75, '022809440075', 'GOBD', '02280944', '01', '6/2/3', '25/100/50', 'NR/06/NR', 'DRY/STANDING WATER/WET', 'SECHE/EAU STAGNANTE/MOUILLEE', 'rebbur deposit</br> ', '', '', 'rebbur deposit', '</br> ', '', '', '', '', '2023-02-28', '09:44:47', '', ''),
(76, '030310360076', 'GOBD', '03031036', '01', '2/5/2', '50/75/100', '05/NR/04', 'STANDING WATER/WET/STANDING WATER', 'EAU STAGNANTE/MOUILLEE/EAU STAGNANTE', 'presence gomme</br> ', 'presence gomme', '', '', 'rubber deposit</br> ', 'rubber deposit', '', '', '', '2023-03-03', '10:36:26', '', ''),
(77, '032909470077', 'GOBD', '03290947', '01', '5/2/5', '50/75/75', 'NR/06/NR', 'WET/STANDING WATER/WET', 'MOUILLEE/EAU STAGNANTE/MOUILLEE', 'RAS</br> ', 'RAS', '', '', 'RAS</br> ', 'RAS', '', '', '', '2023-03-29', '09:47:41', '', ''),
(78, '051712480078', 'GOBD', '05171248', '01', '3/6/6', '/25/25', 'NR/NR/NR', 'WET/DRY/DRY', 'MOUILLEE/SECHE/SECHE', 'RAS</br>  Depot de gomme</br> ', 'RAS', '', 'Depot de gomme', 'All is okay</br> Rubber deposit</br> ', 'All is okay', '', 'Rubber deposit', '', '2023-05-17', '12:48:59', '', ''),
(79, '051910400079', 'GOBD', '05191040', '01', '3/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'Depot de gomme</br>  depot de gomme</br> ', 'Depot de gomme', '', 'depot de gomme', 'rubber deposit</br> rubber deposit</br> ', 'rubber deposit', '', 'rubber deposit', '', '2023-05-19', '10:40:23', '', ''),
(80, '052508270080', 'GOBD', '05250827', '01', '3/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'Depot de gomme</br> RAs</br>Depot de gomme</br> ', 'Depot de gomme', 'RAs', 'Depot de gomme', '</br> RAs</br> Rubber deposit</br> ', 'Rubber deposit', 'RAs', 'Rubber deposit', '', '2023-05-25', '08:27:12', '', ''),
(81, '052511370081', 'GOBD', '05251137', '01', '6/6/6', 'NR/25/25', 'NR/NR/NR', 'DRY/DRY/DRY', 'SECHE/SECHE/SECHE', 'RAS</br> RAS</br>RAs</br> ', 'RAS', 'RAS', 'RAs', '</br> RAS</br> RAS</br> ', 'RAS', 'RAS', 'RAS', '', '2023-05-25', '11:37:17', '', ''),
(82, '061309000082', 'GOBD', '06130900', '01', '3/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'Deopt de gomme</br> RAS</br>Depot de gomme</br> ', 'Deopt de gomme', 'RAS', 'Depot de gomme', '</br> RAS</br> Rubber deposit</br> ', 'Rubber deposit', 'RAS', 'Rubber deposit', '', '2023-06-13', '09:00:07', '', ''),
(83, '061309160083', 'GOBD', '06130916', '01', '6/6/2', 'NR/25/50', 'NR/NR/05', 'DRY/DRY/STANDING WATER', 'SECHE/SECHE/EAU STAGNANTE', 'RAS</br> RAS</br>Depot de gomme</br> ', 'RAS', 'RAS', 'Depot de gomme', 'RAS</br> RAS</br> Rubber deposit</br> ', 'RAS', 'RAS', 'Rubber deposit', '', '2023-06-13', '09:16:29', '', ''),
(84, '061313110084', 'GOBD', '06131311', '01', '6/6/2', '25/25/50', 'NR/NR/05', 'DRY/DRY/STANDING WATER', 'SECHE/SECHE/EAU STAGNANTE', '', '', 'Depot de gomme', '', '', '', 'Rubber deposit', '', '', '2023-06-13', '13:11:48', '', ''),
(85, '061911270085', 'GOBD', '06191127', '01', '3/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'RAS</br> ', 'RAS', '', '', 'GOOD</br> ', 'GOOD', '', '', '', '2023-06-19', '11:27:54', '', ''),
(86, '070309170086', 'GOBD', '07030917', '01', '5/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', '', '', 'RAS', '', '', '', 'GOOD', '', '', '2023-07-03', '09:17:20', '', ''),
(87, '070309290087', 'GOBD', '07030929', '01', '5/5/2', '50/75/50', 'NR/NR/05', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'RAS</br>  ', '', 'RAS', '', '</br> ', '', 'GOOD', '', '', '2023-07-03', '09:29:38', '', ''),
(88, '070309320088', 'GOBD', '07030932', '01', '5/6/2', '50/25/50', 'NR/NR/05', 'WET/DRY/STANDING WATER', 'MOUILLEE/SECHE/EAU STAGNANTE', 'RAS</br>  ', '', 'RAS', '', '</br> ', '', 'GOOD', '', '', '2023-07-03', '09:32:32', '', ''),
(89, '070309410089', 'GOBD', '07030941', '01', '5/5/2', '50/75/50', 'NR/NR/05', 'WET/WET/STANDING WATER', 'MOUILLEE/MOUILLEE/EAU STAGNANTE', 'RAS</br>  ', '', 'RAS', '', 'GOOD</br> ', '', 'GOOD', '', '', '2023-07-03', '09:41:43', '', ''),
(90, '082310300090', 'GOBD', '08231030', '01', '5/2/2', '/75/50', 'NR/04/05', 'WET/STANDING WATER/STANDING WATER', 'MOUILLEE/EAU STAGNANTE/EAU STAGNANTE', 'dÃ©pot de gomme</br> ', '', '', 'dÃ©pot de gomme', 'Rubber deposit</br> ', '', '', 'Rubber deposit', '', '2023-08-23', '10:30:32', '', ''),
(91, '090217320091', 'GOBD', '09021732', '01', '6/5/2', '25/100/100', 'NR/NR/05', 'DRY/WET/STANDING WATER', 'SECHE/MOUILLEE/EAU STAGNANTE', 'DepÃ´t de caoutchou </br> ', '', '', 'DepÃ´t de caoutchou ', 'Rubber deposit</br> ', '', '', 'Rubber deposit', '', '2023-09-02', '17:32:23', '', ''),
(92, '111012560092', 'GOBD', '11101256', '01', '6/5/2', '25/100/75', 'NR/NR/05', 'DRY/WET/STANDING WATER', 'SECHE/MOUILLEE/EAU STAGNANTE', 'RAS</br> ', 'RAS', '', '', 'RAS</br> ', 'RAS', '', '', '', '2023-11-10', '12:56:46', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `service` varchar(50) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `login` varchar(40) NOT NULL,
  `passwrd` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL DEFAULT '0000',
  `profil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `signature` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `prenom`, `nom`, `service`, `departement`, `login`, `passwrd`, `pwd`, `profil`, `signature`) VALUES
(5, 'mariama', 'Diop', 'Rsx System', 'IT', 'mari.diop', '0000', 'OK', 'Administrateur', ''),
(43, 'Assane', 'Bousso', 'Duty Manager', 'Operation', 'assane.bousso', '0000', 'OK', 'simple_user', ''),
(44, 'Mamadou Nicolas ', 'Samb', 'RA', 'Operation', 'nicolas.samb', '0000', 'OK', 'simple_user', ''),
(45, 'Ousmane', 'Mbengue', 'RA', 'Operation', 'ousmane.mbengue', '0000', '0000', 'simple_user', ''),
(46, 'Bouna', 'Dieye', 'UGAT', 'Operation', 'bouna.dieye', '0000', '0000', 'simple_user', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caracteristique_piste`
--
ALTER TABLE `caracteristique_piste`
  ADD PRIMARY KEY (`id_caract`),
  ADD KEY `id_niveau_FK` (`id_niveau_FK1`);

--
-- Index pour la table `matrice_rcam`
--
ALTER TABLE `matrice_rcam`
  ADD PRIMARY KEY (`id_matrice`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id_niveau`);

--
-- Index pour la table `rapport_etat_piste_rcr`
--
ALTER TABLE `rapport_etat_piste_rcr`
  ADD PRIMARY KEY (`id_rapport`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caracteristique_piste`
--
ALTER TABLE `caracteristique_piste`
  MODIFY `id_caract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT pour la table `matrice_rcam`
--
ALTER TABLE `matrice_rcam`
  MODIFY `id_matrice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id_niveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rapport_etat_piste_rcr`
--
ALTER TABLE `rapport_etat_piste_rcr`
  MODIFY `id_rapport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
