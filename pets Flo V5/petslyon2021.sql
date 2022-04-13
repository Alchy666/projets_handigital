-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 03:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petslyon2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `login_adm` varchar(30) NOT NULL,
  `mdp_adm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `login_adm`, `mdp_adm`) VALUES
(1, 'superadmin', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id_ani` int(11) NOT NULL,
  `nom_ani` varchar(30) NOT NULL,
  `espece_ani` varchar(30) NOT NULL,
  `race_ani` varchar(30) NOT NULL,
  `age_ani` int(11) NOT NULL,
  `sexe_ani` int(11) NOT NULL,
  `img_ani` varchar(30) DEFAULT NULL,
  `desc_ani` varchar(500) NOT NULL,
  `enfant_ani` int(11) NOT NULL,
  `dateaccueil_ani` date NOT NULL,
  `dateado_ani` date DEFAULT NULL,
  `fk_ref` int(11) DEFAULT NULL,
  `fk_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id_ani`, `nom_ani`, `espece_ani`, `race_ani`, `age_ani`, `sexe_ani`, `img_ani`, `desc_ani`, `enfant_ani`, `dateaccueil_ani`, `dateado_ani`, `fk_ref`, `fk_cli`) VALUES
(1, 'Grumpy', 'chat', 'Shorthair', 2, 0, 'grumpy.jpg', 'Grumpy est un chat aimant, désireux de voler toute votre nourriture et manger comme un gros sac.', 1, '2021-09-14', NULL, 1, NULL),
(2, 'Kipu', 'chien', 'bulldog anglais', 1, 0, 'kipu.jpg', 'Kipu est un petit toutou, plein d\'affection et d\'odeurs. Avec lui, plus besoin d\'encens.', 1, '2021-09-13', NULL, 2, NULL),
(3, 'Debilos', 'chien', 'Husky', 3, 1, 'debilos.jpg', 'Debilos est ce qu\'on appelle un surdoué parmis les chiens. Elle arrive à se gratter le derrière avec un arbre.', 0, '2021-11-23', NULL, 1, NULL),
(4, 'Ticu', 'chien', 'corgi', 3, 0, 'ticu.jpeg', 'Ticu aime bien remuer son boule et exposer toute sa fluffitude à son maître (et tout ce qui l\'entoure).', 1, '2021-11-15', NULL, 2, NULL),
(5, 'Boby', 'chat', 'Batard', 3, 0, 'boby.jpg', 'Boby aime les câlins (comme tous les chats) et les croquettes (comme tous les chats) et il est un peu con (comme tous les chats).', 0, '2021-11-19', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_cli` int(11) NOT NULL,
  `nom_cli` varchar(30) NOT NULL,
  `prenom_cli` varchar(30) NOT NULL,
  `adresse_cli` varchar(30) NOT NULL,
  `ville_cli` varchar(30) NOT NULL,
  `mail_cli` varchar(50) NOT NULL,
  `enfant_cli` int(11) NOT NULL,
  `login_cli` varchar(30) NOT NULL,
  `mdp_cli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_cli`, `nom_cli`, `prenom_cli`, `adresse_cli`, `ville_cli`, `mail_cli`, `enfant_cli`, `login_cli`, `mdp_cli`) VALUES
(1, 'Ripley', 'Ellen', 'Avenue de mars', 'Nostromo', 'Ripley@msn.com', 1, 'Eripley', '123'),
(2, 'Gaston', 'Gérard', 'Avenue de la moutarde', 'Dijon', 'Gaston@gmail.com', 0, 'GGege', '456'),
(4, 'Curtis', 'Jamie Lee', '72 boulevard des étoiles', 'Nantes', 'JLCurtis@hotmail.fr', 1, 'JLC', '456'),
(5, 'Doe', 'John', '42 rue nulle part', 'Nowhere', 'JD@oops.com', 0, 'jdoe', '789');

-- --------------------------------------------------------

--
-- Table structure for table `commenter`
--

CREATE TABLE `commenter` (
  `fk_cli` int(11) NOT NULL,
  `fk_ani` int(11) NOT NULL,
  `date_com` date NOT NULL,
  `contenu_com` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `refuge`
--

CREATE TABLE `refuge` (
  `id_ref` int(3) NOT NULL,
  `nom_ref` varchar(30) NOT NULL,
  `adresse_ref` varchar(50) NOT NULL,
  `ville_ref` varchar(30) NOT NULL,
  `cp_ref` varchar(6) NOT NULL,
  `place_ref` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refuge`
--

INSERT INTO `refuge` (`id_ref`, `nom_ref`, `adresse_ref`, `ville_ref`, `cp_ref`, `place_ref`) VALUES
(1, 'Refuge de Savoie', 'Rue des alpagas', 'Chambéry', '73800', 50),
(2, 'SPA Angers', 'Boulevard des Alobroges', 'Angers', '49000', 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_ani`),
  ADD KEY `animal_refuge_FK` (`fk_ref`),
  ADD KEY `animal_client0_FK` (`fk_cli`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indexes for table `commenter`
--
ALTER TABLE `commenter`
  ADD PRIMARY KEY (`fk_cli`,`fk_ani`),
  ADD KEY `commenter_animal0_FK` (`fk_ani`);

--
-- Indexes for table `refuge`
--
ALTER TABLE `refuge`
  ADD PRIMARY KEY (`id_ref`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_ani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `refuge`
--
ALTER TABLE `refuge`
  MODIFY `id_ref` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_client0_FK` FOREIGN KEY (`fk_cli`) REFERENCES `client` (`id_cli`),
  ADD CONSTRAINT `animal_refuge_FK` FOREIGN KEY (`fk_ref`) REFERENCES `refuge` (`id_ref`);

--
-- Constraints for table `commenter`
--
ALTER TABLE `commenter`
  ADD CONSTRAINT `commenter_animal0_FK` FOREIGN KEY (`fk_ani`) REFERENCES `animal` (`id_ani`),
  ADD CONSTRAINT `commenter_client_FK` FOREIGN KEY (`fk_cli`) REFERENCES `client` (`id_cli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
