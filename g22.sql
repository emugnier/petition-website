-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 09:41 
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g22`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom_categorie` tinytext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `nom_categorie`, `timestamp`) VALUES
(1, 'Politique', '2017-04-17 09:36:32'),
(3, 'Santé', '2017-04-17 09:40:17'),
(4, 'Ecologie', '2017-04-17 09:40:45'),
(5, 'Société', '2017-05-19 10:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `petitions`
--

CREATE TABLE `petitions` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Titre` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ID_categorie` int(10) UNSIGNED NOT NULL,
  `ID_profil` int(10) UNSIGNED NOT NULL,
  `resume` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `decideur` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `objectif_signature` int(10) UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petitions`
--

INSERT INTO `petitions` (`ID`, `Titre`, `ID_categorie`, `ID_profil`, `resume`, `description`, `decideur`, `objectif_signature`, `timestamp`, `timestamp_update`) VALUES
(2, 'contre le rhume en cours', 5, 3, 'le rhume c\'est chiant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quam sapien, blandit vitae ipsum sit amet, molestie ornare turpis. Praesent interdum vitae justo vulputate mattis. Suspendisse ac orci purus. Curabitur tellus est, sagittis a diam at, finibus eleifend justo. Quisque eleifend vel nulla a consectetur. In dictum sed eros eget congue. Aenean at faucibus libero. Fusce tincidunt nunc diam, non cursus metus consectetur vel.\r\n\r\nAenean et odio orci. In mattis velit elit, sit amet fringilla ligula euismod a. Etiam enim elit, viverra ut aliquet nec, facilisis a nibh. Sed nec lacus justo. In hac habitasse platea dictumst. Vestibulum placerat massa lorem, in mattis sapien scelerisque id. Etiam ipsum nisl, auctor a nunc ac, posuere luctus orci. Vivamus eget bibendum diam, a luctus quam. Nunc risus massa, porta sed volutpat quis, blandit vitae erat.\r\n\r\nNunc mattis eros metus, sit amet suscipit augue convallis ut. Duis interdum viverra nibh nec semper. Sed et ante nisl. Cras vehicula purus quis efficitur eleifend. Praesent aliquam varius ex, id auctor lectus. Nunc quis neque eget velit iaculis porta. Quisque aliquam tristique arcu, nec porta ex molestie non. Mauris at magna sed diam cursus interdum.\r\n\r\nNullam vestibulum enim et aliquet maximus. Suspendisse scelerisque, sem nec sollicitudin tincidunt, nisl magna laoreet ipsum, nec maximus velit risus a quam. Vestibulum orci ligula, fermentum at mi et, efficitur auctor ligula. Mauris pellentesque bibendum ante id facilisis. Integer vulputate auctor justo. Morbi leo eros, semper non accumsan sit amet, viverra nec mi. Aenean eget feugiat erat. Aenean fringilla, diam at tincidunt fermentum, elit ex viverra tortor, a ultrices leo augue sed orci. Praesent at velit nisl. Integer pellentesque sapien id lacus eleifend venenatis. Sed fringilla felis nec elit pellentesque, placerat varius nisi aliquam. Duis quis felis ligula. Proin ultrices porttitor justo id fermentum. Mauris at erat molestie, venenatis massa in, tincidunt dui. Nullam pharetra efficitur magna, vel porta nisl consequat vel.\r\n\r\nNullam eu leo mi. Praesent vel vulputate sem. Quisque nec dictum eros. Praesent velit erat, lacinia id eleifend vel, scelerisque vel nisi. Pellentesque porttitor, risus eget sagittis congue, arcu felis ultricies dui, a congue metus metus varius libero. Donec eleifend urna ut erat tincidunt, vel porta felis ornare. Suspendisse luctus in quam id accumsan. Ut dictum aliquet nisl, vitae mattis enim finibus non. Donec imperdiet est tellus. Nam ut tempor velit. Duis non justo a nulla posuere tempus id nec mauris. Suspendisse potenti. Sed nec purus sed nisl congue pellentesque dictum eget lectus. Cras nec ipsum nec dolor ornare suscipit vel in lorem. Etiam blandit, elit vitae suscipit luctus, dui massa posuere est, vitae ornare nulla libero sit amet mauris.\r\n', 'Directeur', 5, '2017-04-17 09:50:40', '0000-00-00 00:00:00'),
(3, 'MINCE', 1, 16, 'tout une histoire', 'Ceci est la description de la pétition', 'Jean Michel', 3087794, '2017-05-04 14:46:57', '0000-00-00 00:00:00'),
(20, 'Exterminer les bébés dauphins dans l\'océan atlantique', 4, 17, '    Bonjour, étant allergique aux dauphins, lorsque je vais en vacances l\'été à l\'océan, je saigne du nez à chaque fois que je vais me baigner.', '              Bonjour, étant allergique aux dauphins, lorsque je vais en vacances l\'été à l\'océan, je saigne du nez à chaque fois que je vais me baigner. J\'ai donc besoin de votre soutien. Pour cela, il suffit de tuer les bébés dauphins pour que dans quelques année, il n\'y en ai plus du tou.', 'Jésus', 3, '2017-05-11 15:58:00', '0000-00-00 00:00:00'),
(21, 'Tuer des bébés dauphins dans l\'océan', 1, 17, '     Bonjour, étant allergique aux dauphins, lorsque je vais en vacances l\'été à l\'océan, je saigne du nez à chaque fois que je vais me baigner.', '               Bonjour, étant allergique aux dauphins, lorsque je vais en vacances l\'été à l\'océan, je saigne du nez à chaque fois que je vais me baigner.', 'Jésus', 56585, '2017-05-11 15:59:17', '0000-00-00 00:00:00'),
(22, 'Matraquer les orangs outans du zimbabwe', 4, 18, '     Chasser les orangs outans ', 'Chasser les orangs outans ', 'Jean jacques Goldmann', 15, '2017-05-11 16:27:12', '0000-00-00 00:00:00'),
(23, 'Utilité des pétitions', 1, 16, 'c\'est un essai été à fond', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quam sapien, blandit vitae ipsum sit amet, molestie ornare turpis. Praesent interdum vitae justo vulputate mattis. Suspendisse ac orci purus. Curabitur tellus est, sagittis a diam at, finibus eleifend justo. Quisque eleifend vel nulla a consectetur. In dictum sed eros eget congue. Aenean at faucibus libero. Fusce tincidunt nunc diam, non cursus metus consectetur vel.\r\n\r\nAenean et odio orci. In mattis velit elit, sit amet fringilla ligula euismod a. Etiam enim elit, viverra ut aliquet nec, facilisis a nibh. Sed nec lacus justo. In hac habitasse platea dictumst. Vestibulum placerat massa lorem, in mattis sapien scelerisque id. Etiam ipsum nisl, auctor a nunc ac, posuere luctus orci. Vivamus eget bibendum diam, a luctus quam. Nunc risus massa, porta sed volutpat quis, blandit vitae erat.\r\n\r\nNunc mattis eros metus, sit amet suscipit augue convallis ut. Duis interdum viverra nibh nec semper. Sed et ante nisl. Cras vehicula purus quis efficitur eleifend. Praesent aliquam varius ex, id auctor lectus. Nunc quis neque eget velit iaculis porta. Quisque aliquam tristique arcu, nec porta ex molestie non. Mauris at magna sed diam cursus interdum.\r\n\r\nNullam vestibulum enim et aliquet maximus. Suspendisse scelerisque, sem nec sollicitudin tincidunt, nisl magna laoreet ipsum, nec maximus velit risus a quam. Vestibulum orci ligula, fermentum at mi et, efficitur auctor ligula. Mauris pellentesque bibendum ante id facilisis. Integer vulputate auctor justo. Morbi leo eros, semper non accumsan sit amet, viverra nec mi. Aenean eget feugiat erat. Aenean fringilla, diam at tincidunt fermentum, elit ex viverra tortor, a ultrices leo augue sed orci. Praesent at velit nisl. Integer pellentesque sapien id lacus eleifend venenatis. Sed fringilla felis nec elit pellentesque, placerat varius nisi aliquam. Duis quis felis ligula. Proin ultrices porttitor justo id fermentum. Mauris at erat molestie, venenatis massa in, tincidunt dui. Nullam pharetra efficitur magna, vel porta nisl consequat vel.\r\n\r\nNullam eu leo mi. Praesent vel vulputate sem. Quisque nec dictum eros. Praesent velit erat, lacinia id eleifend vel, scelerisque vel nisi. Pellentesque porttitor, risus eget sagittis congue, arcu felis ultricies dui, a congue metus metus varius libero. Donec eleifend urna ut erat tincidunt, vel porta felis ornare. Suspendisse luctus in quam id accumsan. Ut dictum aliquet nisl, vitae mattis enim finibus non. Donec imperdiet est tellus. Nam ut tempor velit. Duis non justo a nulla posuere tempus id nec mauris. Suspendisse potenti. Sed nec purus sed nisl congue pellentesque dictum eget lectus. Cras nec ipsum nec dolor ornare suscipit vel in lorem. Etiam blandit, elit vitae suscipit luctus, dui massa posuere est, vitae ornare nulla libero sit amet mauris.\r\n', 'Trump', 10, '2017-04-17 09:50:40', '0000-00-00 00:00:00'),
(28, 'Pour que Mbappé ne quitte pas Monaco', 5, 18, 'Il y a pas de mots pour décrire Killian    ', 'Il est trop fort, si il quitte monaco, ils vont devenir nuls. \r\nEnfin bref c\'est le football\r\n', 'toto', 5, '2017-05-19 10:21:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Profils`
--

CREATE TABLE `Profils` (
  `ID` int(10) UNSIGNED NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pseudo` text NOT NULL,
  `mdp` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Profils`
--

INSERT INTO `Profils` (`ID`, `mail`, `pseudo`, `mdp`, `nom`, `prenom`, `timestamp`) VALUES
(3, 'latuile@gmail.com', 'latuile', '$2y$10$RTChqTVBu4NGN0nahR9vJeyhf387a1m2CfhyrqwaUrwPlwL8sUa3S', 't', 'caca', '2017-04-18 13:47:15'),
(16, 'safi.selma@gmail.com', 'Selma', '$2y$10$/ajsII9LRbnOtMJz7ddyEOTQfyi3aN/K3ETDPdoOZ2z6R8Zc4U/1O', 'ESSAFIR', 'safi.selma@gmail.com', '2017-05-08 12:56:47'),
(17, 'coucouille@gmail.com', 'coucouille', '$2y$10$XFsDkrmXnUstrXFhEfz1V.DvUKRkfH8qr3GxOUWVa8U.KgukXNw8y', 'Jeannette', 'coucouille@gmail.com', '2017-05-11 15:44:33'),
(18, 'ettoi@gmail.com', 'ettoi07', '$2y$10$Tk79vkJ6cKDSNBGot7jpRO3B5kvG6NOSdFsdk/G/ZBuDbs/YSZGaK', 'jacques', 'ouille', '2017-05-11 16:07:19'),
(19, 'ettoi@hotmail.fr', 'ettoi08', '$2y$10$r/I5gb282q0.yfJ2DnKmkO9DFsPNV2AnLRr0ZTALTStHlmxfLMCmm', 'Piquemoule', 'ettoi@hotmail.fr', '2017-05-11 16:28:55'),
(20, 'joseph.kangou@gmail.com', 'kangoujunior93', '$2y$10$.ciJTn7j.CdA5/JEbP15sOL3GX4dH6zANRz3AjRdpmahgzUr2rpxq', 'Kangou', 'Joseph', '2017-05-11 16:40:46'),
(21, 'lynapte@style.com', 'R', '$2y$10$UkWMLA4v.4H8ehSA0.EFkebpU/OSCGCnp9LYd1nO10A9WpMpjCRd6', 'ly', 'na', '2017-05-11 17:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ID_profil` int(10) UNSIGNED NOT NULL,
  `ID_petition` int(10) UNSIGNED NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signatures`
--

INSERT INTO `signatures` (`ID`, `ID_profil`, `ID_petition`, `Timestamp`) VALUES
(2, 1, 3, '2017-05-06 13:33:13'),
(28, 16, 2, '2017-05-10 10:39:40'),
(33, 17, 21, '2017-05-11 16:00:24'),
(34, 18, 21, '2017-05-11 16:19:19'),
(35, 3, 21, '2017-05-15 15:26:31'),
(36, 1, 22, '2017-05-18 14:29:07'),
(37, 18, 22, '2017-05-18 16:56:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `petitions`
--
ALTER TABLE `petitions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Profils`
--
ALTER TABLE `Profils`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ind_mail` (`mail`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ind_id_profil` (`ID_profil`),
  ADD KEY `ind_id_petition` (`ID_petition`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `petitions`
--
ALTER TABLE `petitions`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Profils`
--
ALTER TABLE `Profils`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
