-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 déc. 2021 à 13:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mythologie`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) NOT NULL,
  `desc_article` text NOT NULL,
  `date_article` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text_article` text NOT NULL,
  `img_article` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `article_user_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `desc_article`, `date_article`, `text_article`, `img_article`, `id_user`) VALUES
(47, 'Zeus', 'Zeus est le roi des dieux dans la mythologie grecque. Il est le frère de Hadès, de Poséidon, de Déméter, de Hestia et de Héra qui est également sa femme. C\'est aussi le fils de Cronos et de Rhéa. Il est l\'un des trois maîtres de l\'Univers, avec ses frères Poséidon et Hadès. Il a le pouvoir de lancer des éclairs sur les hommes qui ne se montrent pas convenables envers les dieux.', '2021-12-17 13:52:41', '<h3><span id=\"La_Naissance_et_l.27enfance_de_Zeus\" class=\"mw-headline\">La Naissance et l\'enfance de Zeus</span></h3>\r\n<p>Zeus est le fils de <a title=\"Rhéa\" href=\"https://fr.vikidia.org/wiki/Rh%C3%A9a\">Rhéa</a> et de <a class=\"mw-redirect\" title=\"Cronos\" href=\"https://fr.vikidia.org/wiki/Cronos\">Cronos</a> (deux titans). Cronos dévorait tous ses enfants dès qu\'ils naissaient car son père (Ouranos) lui avait prédit que l\'un de ses enfants le chasserait de son trône (comme lui-même l\'avait détrôné).</p>\r\n<div class=\"thumb tleft\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://fr.vikidia.org/wiki/Fichier:Enfance-de-Jupiter.jpg\"><img class=\"thumbimage\" src=\"https://download.vikidia.org/vikidia/fr/images/thumb/c/cc/Enfance-de-Jupiter.jpg/200px-Enfance-de-Jupiter.jpg\" srcset=\"//download.vikidia.org/vikidia/fr/images/thumb/c/cc/Enfance-de-Jupiter.jpg/300px-Enfance-de-Jupiter.jpg 1.5x, //download.vikidia.org/vikidia/fr/images/thumb/c/cc/Enfance-de-Jupiter.jpg/400px-Enfance-de-Jupiter.jpg 2x\" alt=\"\" width=\"200\" height=\"158\" data-file-width=\"1700\" data-file-height=\"1341\" /></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\"> </div>\r\nL\'enfance de Zeus sur l\'île de Crète.</div>\r\n</div>\r\n</div>\r\n<p>Arrivée au sixième enfant, Rhéa en eut assez et voulut sauver son nouveau-né Zeus, elle le mit au monde en secret. Rhéa, au lieu de donner le jeune Zeus à son mari, lui donne une pierre enveloppée de langes et cache son enfant sur l\'île de Crète où les <a title=\"Nymphe (mythologie)\" href=\"https://fr.vikidia.org/wiki/Nymphe_(mythologie)\">nymphes</a> Ida et Adrastée s\'occupent de lui. Zeus fait tellement de bruit en pleurant que les Curètes font continuellement du bruit pour cacher ses pleurs à son père.</p>\r\n<p>Il grandit dans un berceau suspendu à un arbre : il n\'est ainsi ni sur terre, ni sur mer, ni dans l\'air, toujours pour que son père ne se doute de rien. Il se nourrit du lait de la chèvre <a title=\"Amalthée (mythologie)\" href=\"https://fr.vikidia.org/wiki/Amalth%C3%A9e_(mythologie)\">Amalthée</a>. Un jour, en chahutant avec elle, Zeus lui casse une corne. Pour se faire pardonner, il lui promet que de sa corne jaillira de la nourriture sans aucun arrêt : c\'est la <a title=\"Corne d\'abondance\" href=\"https://fr.vikidia.org/wiki/Corne_d%27abondance\">corne d\'abondance</a>.</p>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://fr.vikidia.org/wiki/Fichier:Atlas.jpg\"><img class=\"thumbimage\" src=\"https://download.vikidia.org/vikidia/fr/images/thumb/3/32/Atlas.jpg/200px-Atlas.jpg\" srcset=\"//download.vikidia.org/vikidia/fr/images/thumb/3/32/Atlas.jpg/300px-Atlas.jpg 1.5x, //download.vikidia.org/vikidia/fr/images/3/32/Atlas.jpg 2x\" alt=\"\" width=\"200\" height=\"410\" data-file-width=\"358\" data-file-height=\"734\" /></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\"> </div>\r\n<a title=\"Atlas (mythologie)\" href=\"https://fr.vikidia.org/wiki/Atlas_(mythologie)\">Atlas</a>, l\'un des titans, vaincu par Zeus et ses alliés a dû, comme punition, porter éternellement la voûte céleste sur ses épaules.</div>\r\n</div>\r\n</div>\r\n<p>Devenu adolescent, il veut prendre le trône de son père. Sur les conseils de <a title=\"Métis (mythologie)\" href=\"https://fr.vikidia.org/wiki/M%C3%A9tis_(mythologie)\">Métis</a> il fait boire à son père Cronos une drogue magique, qui lui fait vomir la pierre qu\'il avait avalée ainsi que ses frères et sœurs dévorés avant lui qui sont, dans l\'ordre, <a title=\"Hestia\" href=\"https://fr.vikidia.org/wiki/Hestia\">Hestia</a>, <a title=\"Déméter\" href=\"https://fr.vikidia.org/wiki/D%C3%A9m%C3%A9ter\">Déméter</a>, <a title=\"Héra\" href=\"https://fr.vikidia.org/wiki/H%C3%A9ra\">Héra</a>, <a class=\"mw-redirect\" title=\"Hadès\" href=\"https://fr.vikidia.org/wiki/Had%C3%A8s\">Hadès</a> et <a title=\"Poséidon\" href=\"https://fr.vikidia.org/wiki/Pos%C3%A9idon\">Poséidon</a>.</p>\r\n<p>Puis, les <a title=\"Cyclope\" href=\"https://fr.vikidia.org/wiki/Cyclope\">Cyclopes</a> s\'allient avec Zeus et lui donnent la Foudre qu\'ils forgent. Ils donnent à Poséidon son trident et à Hadès le kunée (un casque qui rend invisible celui qui le porte). Les <a title=\"Hécatonchires\" href=\"https://fr.vikidia.org/wiki/H%C3%A9catonchires\">Hécatonchires</a>, des créatures possédant 50 têtes crachant du feu et 100 bras viennent à son aide. Cronos les avait enfermées dans le <a class=\"mw-redirect\" title=\"Tartare (mythologie)\" href=\"https://fr.vikidia.org/wiki/Tartare_(mythologie)\">Tartare</a>, mais Zeus les libère. Il fait la guerre à son père et aux autres <a title=\"Titan (mythologie)\" href=\"https://fr.vikidia.org/wiki/Titan_(mythologie)\">Titans</a>. C\'est la titanomachie. Après les avoir vaincus, il les envoie tous en exil au Tartare, la prison de tous les criminels aux <a class=\"mw-redirect\" title=\"Enfers (Grèce)\" href=\"https://fr.vikidia.org/wiki/Enfers_(Gr%C3%A8ce)\">Enfers</a>. Pour remercier les Hécatonchires, Zeus les nomme gardiens des Enfers.</p>\r\n<p>Mais, cette victoire lui est disputée par les Géants. <a class=\"mw-redirect\" title=\"Gaiä\" href=\"https://fr.vikidia.org/wiki/Gai%C3%A4\">Gaiä</a>, pour se venger de l\'emprisonnement des Titans, ses fils, dans le Tartare, poussa les géants à se battre contre les dieux Olympiens. Il dut se battre contre ceux-ci|Typhon]], un être monstrueux, fils de Gaïa et du Tartare, que Zeus dut combattre et emprisonner, le mutila et lui enleva les tendons des bras et des jambes. <a title=\"Hermès\" href=\"https://fr.vikidia.org/wiki/Herm%C3%A8s\">Hermès</a> et Ægipan, par une ruse, volèrent les tendons, puis Zeus fut libéré et nommé vainqueur.</p>\r\n<p>À la suite, Zeus prend la tête d\'une nouvelle génération de dieux. Il confie à ses frères deux royaumes : Poséidon régnera sur les mers et Hadès sur les Enfers. La plupart des nouveaux dieux siègent au <a title=\"Mont Olympe\" href=\"https://fr.vikidia.org/wiki/Mont_Olympe\">mont Olympe</a>.</p>\r\n<h3><span id=\"Zeus_et_Métis\"></span><span id=\"Zeus_et_M.C3.A9tis\" class=\"mw-headline\">Zeus et Métis</span></h3>\r\n<p>Avant d\'épouser <a title=\"Héra\" href=\"https://fr.vikidia.org/wiki/H%C3%A9ra\">Héra</a> sa sœur, Zeus avait épousé Métis, la déesse de la sagesse et de la ruse, elle-même fille d\'<a class=\"mw-redirect\" title=\"Océan (mythologie)\" href=\"https://fr.vikidia.org/wiki/Oc%C3%A9an_(mythologie)\">Océan</a>. Cependant, Gaïa lui avait prédit que si Métis et lui avaient un enfant, il le détrônerait comme il l\'avait fait pour son père Cronos. Or, Métis attendait un enfant.</p>\r\n<p>Mais Zeus voulait faire régner l’ordre chez des Olympiens et ne voulait pas échouer à cause d’un descendant, alors il mit en place une ruse, inspirée par Métis. Il avala Métis pour mettre lui-même au monde son enfant.</p>\r\n<h3><span id=\"Alcmène,_mère_d’Héraclès\"></span><span id=\"Alcm.C3.A8ne.2C_m.C3.A8re_d.E2.80.99H.C3.A9racl.C3.A8s\" class=\"mw-headline\">Alcmène, mère d’Héraclès</span></h3>\r\n<p>Entre toutes les aventures qu’il eut avec les mortelles, celle qu’il eut avec <a title=\"Alcmène\" href=\"https://fr.vikidia.org/wiki/Alcm%C3%A8ne\">Alcmène</a> est la plus célèbre : Alcmène vivait avec son mari <a title=\"Amphitryon\" href=\"https://fr.vikidia.org/wiki/Amphitryon\">Amphitryon</a>, à <a title=\"Thèbes (Grèce)\" href=\"https://fr.vikidia.org/wiki/Th%C3%A8bes_(Gr%C3%A8ce)\">Thèbes</a>. Amphitryon était le petit-fils de <a title=\"Persée\" href=\"https://fr.vikidia.org/wiki/Pers%C3%A9e\">Persée</a>.</p>\r\n<p>Zeus vit Alcmène, la trouva comme la plus belle des mortelles et voulait d’elle un fils. Lorsque Amphitryon fut absent pour cause de guerre il alla voir la jeune femme chez elle en prenant l’apparence de son mari. Elle, croyant que c’était son époux, passa la nuit avec le dieu. Quelques mois plus tard Alcmène eut un fils : <a title=\"Héraclès\" href=\"https://fr.vikidia.org/wiki/H%C3%A9racl%C3%A8s\">Héraclès</a>.</p>\r\n<h3><span id=\"L’enlèvement_d’Europe\"></span><span id=\"L.E2.80.99enl.C3.A8vement_d.E2.80.99Europe\" class=\"mw-headline\">L’enlèvement d’Europe</span></h3>\r\n<p><a title=\"Europe (mythologie)\" href=\"https://fr.vikidia.org/wiki/Europe_(mythologie)\">Europe</a> était la fille d\'un roi de <a class=\"mw-redirect\" title=\"Phénicie\" href=\"https://fr.vikidia.org/wiki/Ph%C3%A9nicie\">Phénicie</a>, elle était très belle et Zeus l’avait remarqué. Alors qu’elle se promenait dans les prairies où les troupeaux de son père mangeaient, elle vit un beau <a class=\"mw-redirect\" title=\"Taureau\" href=\"https://fr.vikidia.org/wiki/Taureau\">taureau</a> blanc, peu sauvage.</p>\r\n<p>Zeus avait préparé la ruse, il s’était transformé en taureau pour l’approcher et quand elle fut près de lui, l’enleva en bondissant vers la mer d’où des dieux et des déesses surgissaient et les accompagnèrent jusqu\'en <a title=\"Crète\" href=\"https://fr.vikidia.org/wiki/Cr%C3%A8te\">Crète</a>.</p>\r\n<p>Arrivé en Crète, il reprit sa forme humaine et de leur union naîtront <a title=\"Minos\" href=\"https://fr.vikidia.org/wiki/Minos\">Minos</a> et <a title=\"Rhadamanthe\" href=\"https://fr.vikidia.org/wiki/Rhadamanthe\">Rhadamanthe</a>, les juges qui étaient en <a title=\"Enfers\" href=\"https://fr.vikidia.org/wiki/Enfers\">Enfers</a>. Mais aussi Sarpédon qui deviendra le roi de Crète.</p>\r\n<h3><span id=\"Ganymède\"></span><span id=\"Ganym.C3.A8de\" class=\"mw-headline\">Ganymède</span></h3>\r\n<p>Zeus ne tomba pas uniquement amoureux de déesses ou de mortelles, mais aussi de beaux jeunes hommes, dont un qui s’appelait <a title=\"Ganymède (mythologie)\" href=\"https://fr.vikidia.org/wiki/Ganym%C3%A8de_(mythologie)\">Ganymède</a>, prince de la famille royale de <a title=\"Troie\" href=\"https://fr.vikidia.org/wiki/Troie\">Troie</a>. Il surveillait son troupeau sur une montagne près de Troie, Zeus était dans les parages et en le voyant tomba amoureux de lui. Zeus se transforma en aigle, puis enleva Ganymède. Celui-ci fut admis dans l\'Olympe où il servit d\'<span title=\"celui qui sert les boissons.\"><a title=\"Échanson\" href=\"https://fr.vikidia.org/wiki/%C3%89chanson\">échanson</a><img src=\"https://download.vikidia.org/vikidia/fr/images/thumb/9/9f/Interrogation.svg/12px-Interrogation.svg.png\" srcset=\"//download.vikidia.org/vikidia/fr/images/thumb/9/9f/Interrogation.svg/18px-Interrogation.svg.png 1.5x, //download.vikidia.org/vikidia/fr/images/thumb/9/9f/Interrogation.svg/24px-Interrogation.svg.png 2x\" alt=\"\" width=\"12\" height=\"12\" data-file-width=\"233\" data-file-height=\"233\" /></span> aux dieux.</p>', 'Zeus.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `text_com` text NOT NULL,
  `date_com` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_article` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_com`),
  KEY `commentaire_article_FK` (`id_article`),
  KEY `commentaire_user0_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_com`, `text_com`, `date_com`, `id_article`, `id_user`) VALUES
(21, 'Ceci es un commentaire !', '2021-12-17 14:06:25', 47, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(100) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `mail_user` varchar(100) NOT NULL,
  `admin_user` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `pass_user`, `mail_user`, `admin_user`) VALUES
(2, 'Zastax', '$2y$10$0AP7Kuln/CR8RdXcN8Q.ROfgXzUmDPiCgDq0T/UffLn0/WNquSOOK', 'geoffrey.delarue26@gmail.com', 1),
(3, 'Admin', '$2y$10$bDQAjOlqDr98xoNEabKyq.72AwmPg6nZDMi84qLUTLOIPANTrsZIC', 'geoffrey@gmail.com', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_article_FK` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `commentaire_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
