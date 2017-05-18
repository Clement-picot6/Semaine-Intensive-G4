-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 18 Mai 2017 à 18:17
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `architecte`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `architect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contributors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `architect`, `main_img`, `description`, `second_image`, `contributors`, `resume`, `slug`) VALUES
(1, 'Projet Astrale - Construction dun ensemble de bureaux au Plessis Robinson (92)', 'ABH Architectes', 'assets/img-content/img_article1.jpeg', 'Deux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\r\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\r\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\r\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. ', 'assets/img-content/img-article1b.jpeg', 'Maître d’ouvrage : PAPSO II - STARGIME\r\nMaître d’œuvre architecte : ABH - ARCHITECTES\r\nMaître d’œuvre d’éxecution : BET BEAULIEU INGENIERIE.\r\nOrdonnancement pilotage : ELITE.\r\nCoordonnateur SPS : COSSEB.\r\nBET cuisine: HLR CREATION.\r\nBET acoustique : PROMISO.\r\nBureau de contrôle : SOCOTEC.\r\nGéomètre : BLONDEAU LUCIEN GEOMETRE.\r\nSurface : 25 000 m2 Conforme RT 2005.', 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.\r\nL''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.\r\nD’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.', 'projet-astrale'),
(2, 'Construction du nouveau siège social de la C.A.F. du Gard (30)', 'MICHEL Jean-Louis', 'assets/img-content/img_article2.jpeg', 'Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au ', 'assets/img-content/img_article2b.jpeg', 'Maître d’ouvrage : CONSEIL RÉGIONAL DE BOURGOGNE.\r\nArchitecte: ERIC ARSENAULT.\r\nCoordonnateur SPS : COREEN.\r\nCoordonnateur : CIBTP.\r\nCoordonnateur SSI : MACOUIN.\r\nBE structure : PINGAT I2C.\r\nBE fluides : SARL TRAMIER.\r\nBE électricité : ECET.\r\nBureau de contrôle : NORISKO.\r\nMontant des travaux : 4 100 000 E H.T.\r\nDurée des travaux : 18 mois.\r\nSurface : 2 000 m2. ', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.', 'nouveau-siege-social'),
(3, '\r\nConstruction de la délégation régionale du CNFPT à Poitiers (86)', 'DUCLOS Architectes Associés', 'assets/img-content/img_article3.jpeg', 'Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'assets/img-content/img_article3b.jpeg', '\r\nMaître d’ouvrage : CONSEIL RÉGIONAL DE BOURGOGNE.\r\nArchitecte: ERIC ARSENAULT.\r\nCoordonnateur SPS : COREEN.\r\nCoordonnateur : CIBTP.\r\nCoordonnateur SSI : MACOUIN.\r\nBE structure : PINGAT I2C.\r\nBE fluides : SARL TRAMIER.\r\nBE électricité : ECET.\r\nBureau de contrôle : NORISKO.\r\nMontant des travaux : 4 100 000 E H.T.\r\nDurée des travaux : 18 mois.\r\nSurface : 2 000 m2', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.', 'delegation-regionale-cnfpt'),
(4, 'Aménagement du bowling Le colisée à Angers (49)', 'BIK Architecture', 'assets/img-content/img_article4.jpeg', 'Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'assets/img-content/img_article4b.jpeg', '\r\nMaître d’ouvrage : CONSEIL RÉGIONAL DE BOURGOGNE.\r\nArchitecte: ERIC ARSENAULT.\r\nCoordonnateur SPS : COREEN.\r\nCoordonnateur : CIBTP.\r\nCoordonnateur SSI : MACOUIN.\r\nBE structure : PINGAT I2C.\r\nBE fluides : SARL TRAMIER.\r\nBE électricité : ECET.\r\nBureau de contrôle : NORISKO.\r\nMontant des travaux : 4 100 000 E H.T.\r\nDurée des travaux : 18 mois.\r\nSurface : 2 000 m2', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.', 'bowling-colisee-angers'),
(5, 'Internat du lycée agricole à Château Chinon (58)', 'ARSENAULT Eric', 'assets/img-content/img_article5.jpeg', 'Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'assets/img-content/img_article5b.jpeg', '\r\nMaître d’ouvrage : CONSEIL RÉGIONAL DE BOURGOGNE.\r\nArchitecte: ERIC ARSENAULT.\r\nCoordonnateur SPS : COREEN.\r\nCoordonnateur : CIBTP.\r\nCoordonnateur SSI : MACOUIN.\r\nBE structure : PINGAT I2C.\r\nBE fluides : SARL TRAMIER.\r\nBE électricité : ECET.\r\nBureau de contrôle : NORISKO.\r\nMontant des travaux : 4 100 000 E H.T.\r\nDurée des travaux : 18 mois.\r\nSurface : 2 000 m2', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.', 'internat-lycee-chateau-chinon');

-- --------------------------------------------------------

--
-- Structure de la table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `number` int(255) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `journals`
--

INSERT INTO `journals` (`id`, `number`, `date`, `img`, `region`, `slug`, `synopsis`, `partner`, `alt`) VALUES
(1, 285, '2017', '/assets/img-content/img_martinique.jpeg', 'Martinique', '2017-Martinique', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'Aucune entreprise partenaire dans cette région.', 'Couverture de la Martinique'),
(2, 284, '2016', 'assets/img-content/img_iledefrance.jpeg', 'Île de France', '2016-Ile-de-France', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEURESCO (69)\r\nLEROUX - PACREAU (49)\r\nMPI (77)', 'Couverture de l''Île de France'),
(3, 283, '2016', 'assets/img-content/img_bretagne.jpeg', 'Bretagne-Normandie', '2016-Bretagne-Normandie', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEURESCO (69)\r\nLEROUX - PACREAU (49)', 'Couverture de la Bretagne et de la Normande'),
(4, 282, '2016', 'assets/img-content/img_rhonealpes.jpeg', 'Rhônes-Alpes', '2016-Rhones-Alpes', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEURESCO (69)', 'Couverture Rhône-Alpes'),
(5, 280, '2016', 'assets/img-content/img_guadeloupe.jpeg', 'Guadeloupe', '2016-Guadeloupe', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'Aucune entreprise partenaire dans cette région.', 'Couverture de la Guadeloupe'),
(6, 278, '2016', 'assets/img-content/img_belgique.jpeg', 'Belgique', '2016-Belgique', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'INGENIERIE, BUREAU D''ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE\r\n\r\nCORDEL ZETEL TEMSE NV ()', 'Couverture de la Belgique'),
(7, 277, '2016', 'assets/img-content/img_suisse.jpeg', 'Suisse', '2016-Suisse', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'Aucune entreprise partenaire dans cette région.', 'Couverture de la Suisse'),
(8, 276, '2016', 'assets/img-content/img_centre.jpeg', 'Centre', '2016-Centre', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEURESCO (69)\r\n\r\nESCALIETEUR\r\n\r\nHALLOU ESCALIERS (35)', 'Couverture du Centre'),
(10, 274, '2015', 'assets/img-content/img_guyane.jpeg', 'Guyane', '2015-Guyane', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'Aucune entreprise partenaire dans cette région', 'Couverture de la Guyane'),
(11, 273, '2015', 'assets/img-content/img_franchelorraine.jpeg', 'Franche-Comté - Lorraine ', '2015-Franche-Comte-Lorraine ', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nATRE ET LOGIS (57)\r\nEURESCO (69)\r\nSIMON AGENCEMENT (88)\r\n\r\n', 'Couverture de la Franche-Comté et de la Lorraine '),
(12, 272, '2015', 'assets/img-content/img_champpicnpc.jpeg', 'Champagne-Ardenne - Picardie - Nord-Pas-de-Calais ', '2015- Champagne-Ardenne-Picardie-Nord-Pas-de-Calais ', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEURESCO (69)\r\nROCHES AGENCEMENT (62)\r\nROCHES DIFFUSION (62)', 'Couverture de la Champagne-Ardenne, de la Picardie et du Nord-Pas-de-Calais '),
(13, 271, '2015', 'assets/img-content/img_reunion.jpeg', 'Réunion', '2015-Réunion', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'MÉTALLERIE, SERRURERIE, FERRONNERIE, FERMETURE\r\n\r\nCMOI ()\r\nSMF - SOCIETE MOREL FERMETURES (97)', 'Couverture de la Réunion'),
(14, 270, '2015', 'assets/img-content/img_saintmsaintb.jpeg', 'Saint-Martin - Saint-barthelemy ', '2015-Saint-Martin-Saint-barthelemy ', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'Aucune entreprise partenaire dans cette région', 'Couverture de Saint-Martin et de Saint-barthelemy '),
(15, 279, '2016', 'assets/img-content/img_alsace.jpeg', 'Alsace', '2016-Alsace', 'À l’occasion de la publication d’un livre chez Taschen, la capitale lombarde rompt la glace de ses façades parfois austères pour dévoiler le faste qu’elles dissimulent. Entre marqueterie de marbre et lustres monumentaux, signés Giò Ponti ou Luigi Caccia Dominioni. ', 'AGENCEMENT, MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES\r\n\r\nEQUIP''PLUS (68)\r\nEURESCO (67)', 'Couverture de l''Alsace');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` int(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'lolo', 'lele', 'lolo@gmail.com'),
(2, 'admin', '1234', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;