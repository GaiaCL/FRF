-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 avr. 2023 à 14:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `islensktsumarhus`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` text,
  `description_cat` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom_cat`, `description_cat`) VALUES
(1, 'Torfbaeir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla, laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae.'),
(2, 'Loges Panoramiques', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla, laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae.'),
(3, 'Chalets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla, laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae.');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_images` text,
  `description_images` text,
  `chemin_images` text,
  `id_categories` int(11) DEFAULT NULL,
  `id_logements` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categories` (`id_categories`),
  KEY `id_logements` (`id_logements`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `nom_images`, `description_images`, `chemin_images`, `id_categories`, `id_logements`) VALUES
(1, 'Torfbaeir 1', NULL, '../src/assets/Image/torfbaeir1.webp', 1, 1),
(2, 'Torfbaeir 2', NULL, '../src/assets/Image/torfbaeir2.webp', 1, 2),
(3, 'Torfbaeir 3', NULL, '../src/assets/Image/torfbaeir3.webp', 1, 3),
(4, 'Torfbaeir 4', NULL, '../src/assets/Image/torfbaeir4.webp', 1, 4),
(5, 'Torfbaeir 5', NULL, '../src/assets/Image/torfbaeir5.webp', 1, 5),
(6, 'Torfhouse 1', NULL, '../src/assets/Image/torfhouse.webp', 1, NULL),
(7, 'Torfhouse 2', NULL, '../src/assets/Image/torfhouse2.webp', 1, NULL),
(8, 'Torfhouse 3', NULL, '../src/assets/Image/torfhouse3.webp', 1, NULL),
(9, 'Torfhouse 4', NULL, '../src/assets/Image/torfhouse4.webp', 1, NULL),
(10, 'Torfhouse 5', NULL, '../src/assets/Image/torfhouse5.webp', 1, NULL),
(11, 'Torfhouse 6', NULL, '../src/assets/Image/torfhouse6.webp', 1, NULL),
(12, 'Torfhouse 7', NULL, '../src/assets/Image/torfhouse7.webp', 1, NULL),
(13, 'Torfhouse 8', NULL, '../src/assets/Image/torfhouse8.webp', 1, NULL),
(14, 'Torfhouse 9', NULL, '../src/assets/Image/torfhouse9.webp', 1, NULL),
(15, 'Piscine chaude en pierre de basalte.', 'Que ce soit sous les constellations lumineuses, les aurores boréales dansantes ou la neige qui tombe doucement en hiver ou pendant les journées chaudes et les nuits blanches de l\'été, votre piscine chaude en pierre de basalte est l\'endroit ultime pour la détente. Réglez la température à votre guise (36-42 degrés Celsius), détendez-vous et retirez-vous dans la nature islandaise authentique, quelle que soit la saison ou la météo.', '../src/assets/Image/pool.webp', 1, NULL),
(16, 'Loge 1', NULL, '../src/assets/Image/loge1.webp', 2, 6),
(17, 'Loge 2', NULL, '../src/assets/Image/loge2.webp', 2, 7),
(18, 'Loge 3', NULL, '../src/assets/Image/loge3.webp', 2, 8),
(19, 'Loge 4', NULL, '../src/assets/Image/loge4.webp', 2, 9),
(20, 'Loge 5', NULL, '../src/assets/Image/loge5.webp', 2, 10),
(21, 'Loge carousel 1', NULL, '../src/assets/Image/loges1.webp', 2, NULL),
(22, 'Loge carousel 2', NULL, '../src/assets/Image/loges2.webp', 2, NULL),
(23, 'Loge carousel 3', NULL, '../src/assets/Image/loges3.webp', 2, NULL),
(24, 'Loge carousel 4', NULL, '../src/assets/Image/loges4.webp', 2, NULL),
(25, 'Loge carousel 5', NULL, '../src/assets/Image/loges5.webp', 2, NULL),
(26, 'En dormant sous les étoiles', 'Igloo à cabine de verre scandinave de style viking avec ce petit plus de luxe.\r\nDes paysages magnifiques et des vues panoramiques depuis votre lit super confortable ou\r\nvotre bain à remous privé.', '../src/assets/Image/bannerLoges.webp', 2, NULL),
(27, 'Chalet 1', NULL, '../src/assets/Image/chaletdispo1.webp', 3, 11),
(28, 'Chalet 2', NULL, '../src/assets/Image/chaletdispo2.webp', 3, 12),
(29, 'Chalet 3\r\n', NULL, '../src/assets/Image/chaletdispo3.webp', 3, 13),
(30, 'A la découverte de l\'Islande', 'Quoi de mieux pour une découverte de cette magnifique Terre de Feu et de Glace\r\nqu\'un chalais perdu au milieu des campagnes enneigées Islandaises.\r\nProfitez d\'un instant pur en immersion dans la nature profonde de notre magnifique pays.', '../src/assets/Image/bannerCottage.webp', 3, NULL),
(31, 'Chalet carousel 1', NULL, '../src/assets/Image/chalet.webp', 3, NULL),
(32, 'Chalet carousel 2', NULL, '../src/assets/Image/chalet2.webp', 3, NULL),
(33, 'Chalet carousel 3', NULL, '../src/assets/Image/chalet3.webp', 3, NULL),
(34, 'Chalet carousel 4', NULL, '../src/assets/Image/chalet4.webp', 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `logements`
--

DROP TABLE IF EXISTS `logements`;
CREATE TABLE IF NOT EXISTS `logements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_logements` text,
  `prix_jour` int(11) DEFAULT NULL,
  `prix_semaine` int(11) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `chambres` int(11) DEFAULT NULL,
  `description_logements` text,
  `pays` text,
  `region` text,
  `id_categories` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categories` (`id_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logements`
--

INSERT INTO `logements` (`id`, `nom_logements`, `prix_jour`, `prix_semaine`, `capacite`, `chambres`, `description_logements`, `pays`, `region`, `id_categories`) VALUES
(1, 'FREYJA', 100, 550, 2, 1, 'Salle de bain avec bain à remous, Espace de vie confortable et véranda privée, Véranda commune chauffée par géothermie et privée, Piscine chaude en pierre de basalte chauffée par géothermie, Machine à café Nespresso et tisanes, Minibar réapprovisionné quotidiennement. Lit Queen Size.', 'Islande', 'Vesturland', 1),
(2, 'NJÖRÐUR', 57, 350, 1, 1, 'Salle de bain avec douche Italienne, Espace de vie munis d\'un sofa, Cuisine équipée, Chambre avec Lit simple. Machine à café Nespresso et tisanes, Minibar réapprovisionné quotidiennement. Lit 90x190cm.', 'Islande', 'Vesturland', 1),
(3, 'MAGNI', 250, 1100, 4, 2, 'Salle de bain avec bain à remous Véranda commune chauffée par géothermie et privée, Piscine et Jacousie en pierre de basalte chauffés par géothermie, Cuisine équipée et Jardin équipé de Dômes d\'observation. Machine à café Nespresso et tisanes, Minibar réapprovisionné quotidiennement.\r\nDeux Lits King Size.', 'Islande', 'Vesturland', 1),
(4, 'FRIGG', 120, 600, 2, 2, 'Salle de bain avec baignoire, Cuisine équipée, Salle de jeux avec Billard, Petite Véranda Commune, Machine à café Nespresso et tisanes,Espace de vie munit d\'un sofa et de fauteuils. Minibar réapprovisionné quotidiennement. Deux lits 90x190cm.', 'Islande', 'Vesturland', 1),
(5, 'FREYR', 110, 560, 2, 1, 'Salle de bain avec bain à remous, Espace de vie confortable et véranda privée, Véranda commune chauffée par géothermie et privée, Piscine chaude en pierre de basalte chauffée par géothermie, Machine à café Nespresso et tisanes, Minibar réapprovisionné quotidiennement. Un Lit King Size.', 'Islande', 'Vesturland', 1),
(6, 'NJORD', 599, 4000, 2, 1, 'Loge en verre dans l\'ouest de l\'Islande, située près de Borgarnes. A 55 minutes en voiture de Reykjavík.\r\nPoint de départ idéal pour découvrir la côte ouest - à proximité du cercle d\'or, de Snæfellsnes, du parc national de Þingvellir et du glacier Langjökull. Avec une vue directe sur l\'océan, la chaîne de montagnes de la péninsule de Snæfellsnes et la ville pittoresque de Borgarnes.\r\nLa Loge porte le nom de Njord, dieu du vent, des océans et des marées. (mythologie nordique)', 'Islande', 'Borgarnes', 2),
(7, 'HEIMDALL', 599, 4000, 2, 1, 'Loge en verre dans l\'ouest de l\'Islande, située près de Borgarnes. A 55 minutes en voiture de Reykjavík.\r\nPoint de départ idéal pour découvrir la côte ouest - à proximité du cercle d\'or, de Snæfellsnes, du parc national de Þingvellir et du glacier Langjökull. Avec une vue directe sur l\'océan, la chaîne de montagnes de la péninsule de Snæfellsnes et la ville pittoresque de Borgarnes.\r\nLa Loge porte le nom de Heimdall, gardien des dieux. Il était appelé le \"dieu brillant\" (mythologie nordique).', 'Islande', 'Borgarnes', 2),
(8, 'FRIGG', 930, 6000, 5, 3, 'Loge en verre dans l\'ouest de l\'Islande, située près de Borgarnes. A 55 minutes en voiture de Reykjavík.\r\nPoint de départ idéal pour découvrir la côte ouest - à proximité du cercle d\'or, de Snæfellsnes, du parc national de Þingvellir et du glacier Langjökull. Avec une vue directe sur l\'océan, la chaîne de montagnes de la péninsule de Snæfellsnes et la ville pittoresque de Borgarnes.\r\nLa loge porte le nom de la déesse du mariage, Frigg. Elle était la reine des déesses et aussi la reine d\'Asgard (mythologie nordique).', 'Islande', 'Borgarnes', 2),
(9, 'ALVA', 599, 4000, 2, 1, 'Loge en verre dans l\'ouest de l\'Islande, située près de Borgarnes. A 55 minutes en voiture de Reykjavík.\r\nPoint de départ idéal pour découvrir la côte ouest - à proximité du cercle d\'or, de Snæfellsnes, du parc national de Þingvellir et du glacier Langjökull. Avec une vue directe sur l\'océan, la chaîne de montagnes de la péninsule de Snæfellsnes et la ville pittoresque de Borgarnes.\r\nLa Loge s\'appelle Alva, ce qui signifie « elfe » en vieux nordique.', 'Islande', 'Borgarnes', 2),
(10, 'FREYA', 599, 4000, 2, 1, 'Loge en verre dans l\'ouest de l\'Islande, située près de Borgarnes. A 55 minutes en voiture de Reykjavík.\r\nPoint de départ idéal pour découvrir la côte ouest - à proximité du cercle d\'or, de Snæfellsnes, du parc national de Þingvellir et du glacier Langjökull. Avec une vue directe sur l\'océan, la chaîne de montagnes de la péninsule de Snæfellsnes et la ville pittoresque de Borgarnes.\r\nLa Loge porte le nom de la déesse de l\'amour et de la fertilité, Freya. (mythologie nordique)', 'Islande', 'Borgarnes', 2),
(11, 'FREYJA', 250, 600, 5, 2, 'Chalet Rustique au milieu de la campagne Islandaise, entouré des montagnes enneigées. Ce chalet contient une cuisine aménagée, une salle de bain avec douche à l\'italienne et de 2 chambres.', 'Islande', 'Reykjavick', 3),
(12, 'NJÖRÐUR', 300, 800, 8, 3, 'Chalet forestier. Parfait pour un gros groupe d\'amis ou une grande famille, comprend 3 chambres, 2 salles de bains avec baignoires, une cuisine américaine et un salon accompagné de sa cheminée.', 'Islande', 'Reykjavick', 3),
(13, 'MAGNI', 400, 1200, 3, 2, 'Chalet hivernal 100% eco-responsable. Munis de panneau-solaire, d\'une salle de bain alimentée en eau thermale souterraine et d\'une veranda.', 'Islande', 'Reykjavick', 3);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_videos` text,
  `chemin_videos` text,
  `id_categories` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categories` (`id_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `nom_videos`, `chemin_videos`, `id_categories`) VALUES
(1, 'Torfbaeir', '../src/assets/video/renttrim.mp4', 1),
(2, 'Loges', '../src/assets/video/guesthouse.mp4', 2),
(3, 'Chalets', '../src/assets/video/cottage.mp4', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`id_logements`) REFERENCES `logements` (`id`);

--
-- Contraintes pour la table `logements`
--
ALTER TABLE `logements`
  ADD CONSTRAINT `logements_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
