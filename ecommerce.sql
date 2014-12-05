-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Décembre 2014 à 17:11
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float(11,2) NOT NULL,
  `Date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `categorie`, `quantity`, `description`, `price`, `Date_create`, `photo`) VALUES
(1, '75048 Le Fantôme', 'Rebels', 1, 'Rejoins la résistance rebelle contre l''Empire maléfique dans le vaisseau de combat Le Fantôme, vue dans la série TV Star Wars : Rebels ! Place le jeune héros rebelle Ezra Bridger dans la cabine détachable et range son casque et son fusil dans le compartiment cargo. Place le compagnon droïde d''Ezra, Chopper, à l''arrière, à proximité du toit, déplie les ailes pour passer en mode vol et lance-toi dans le combat. Tire avec le canon à ressort bidirectionnel pour repousser les attaques depuis l''avant ou l''arrière. Après une mission réussie, place le Fantôme en sécurité sur le vaisseau Le Ghost (75053) (vendu séparément). Inclut une figurine d''Ezra Bridger avec une arme et un accessoire et une figurine de Chopper.', 29.99, '0000-00-00 00:00:00', 'prod_thumbs_retina_472x266_75048.jpg'),
(2, '75053 Le Ghost', 'Rebels', 1, 'Prépare-toi à lutter contre l''Empire avec le redoutable vaisseau des héros Rebelles – Le Ghost – vu dans la série d''animation TV Star Wars: Rebels ! Garde le cap avec les figurines Rebelles dans les deux cabines et place Zeb en patrouille dans la tourelle avec son canon qui tourne à 360 degrés. Fais atterrir le vaisseau Le Fantôme (75048) (vendu séparément) dans la zone d''atterrissage à l''arrière. Avec 2 canons à ressort et de l''espace de rangement pour un missile de rechange et un sabre laser, ce vaisseau a de nombreuses armes à bord. En cas d''urgence, fonce vers les capsules de sauvetage pour t''éjecter ! • Inclut 5 figurines inédites et des armes assorties : Ezra Bridger, Kanan Jarrus, Hera Syndulla, Zeb et un Stormtrooper™.\r\n »', 109.99, '0000-00-00 00:00:00', 'prod_thumbs_retina_472x266_75053.jpg'),
(3, '75028 Clone Turbo Tank™', 'Rebels', 1, 'Entre dans le monde des microfighters LEGO® Star Wars™ avec le Clone Turbo Tank™. Ce mini vaisseau super cool a des roues mobiles, 2 missiles, et une mini cabine sur le dessus pour que le soldat clone puisse s''asseoir. Prépare-toi à entrer dans le combat ! Inclut une figurine de soldat clone avec un fusil.', 9.99, '0000-00-00 00:00:00', 'prod_thumbs_retina_472x266_75028.jpg'),
(4, '75029 AAT™', 'Rebels', 1, 'Entre dans le monde des microfighters LEGO® Star Wars™ avec le vaisseau AAT™ de l''armée droïde. Cet amusant modèle miniature comprend une tourelle mobile, 4 missiles et une mini cabine pour que le pilote droïde de combat puisse s''asseoir. Prépare-toi à lutter contre les soldats clones ! Inclut une figurine de pilote droïde de combat avec un pistolet.', 9.99, '2014-12-04 10:25:59', 'prod_thumbs_retina_472x266_75029.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`, `register_date`, `admin`) VALUES
(8, 'kanita', 'kanita', 'kanita', '$2y$10$5OlfjV2ErOXW23AfTE4QEOmLqWg.qwwvidJijLJyLzdH7kaNzbele', '2014-12-02 09:00:24', 1),
(9, 'kathy', 'kathy', 'kathy', '$2y$10$.GA.VPzUtKJHRWNZVFErJu2w08VusX70LKqsxIUQlNT3vrQqUiiNm', '2014-12-05 08:51:43', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
