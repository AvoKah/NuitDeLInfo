-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Décembre 2014 à 01:16
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ndi`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `users` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `post_date`, `location`, `users`) VALUES
(1, 'Amet Dapibus Corp.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', '2015-08-22 07:18:27', 'Senegal', ''),
(2, 'Vel Corporation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque', '2015-04-12 04:06:20', 'Saint Lucia', ''),
(3, 'Non Lorem Corporation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '2014-08-06 01:21:56', 'Isle of Man', ''),
(4, 'Vulputate LLC', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada', '2015-07-25 12:02:06', 'Guam', ''),
(5, 'Eget Industries', 'Lorem ipsum', '2015-03-02 14:01:40', 'France', ''),
(6, 'Nec Enim Nunc Corporation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '2014-05-14 06:29:44', 'United Arab Emirates', ''),
(7, 'Ligula Corp.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', '2014-03-21 19:48:37', 'French Southern Territories', ''),
(8, 'Id Blandit At Associates', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '2014-08-18 15:43:13', 'Paraguay', ''),
(9, 'In Tincidunt Corp.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', '2014-01-25 17:43:18', 'Swaziland', ''),
(10, 'Bibendum LLC', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '2015-11-12 14:21:14', 'Norfolk Island', ''),
(11, 'Morbi LLC', 'Lorem ipsum dolor', '2014-02-24 11:39:35', 'Australia', ''),
(12, 'A Feugiat PC', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.', '2014-09-05 21:23:33', 'Lithuania', ''),
(13, 'Ullamcorper Duis At PC', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.', '2014-04-20 20:31:11', 'New Caledonia', ''),
(14, 'Dui Cum Corporation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', '2014-10-02 10:28:12', 'Chile', ''),
(15, 'Sed Tortor Corporation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum', '2014-01-26 21:06:49', 'Slovenia', ''),
(16, 'Velit Institute', 'Lorem ipsum', '2015-04-23 07:13:57', 'Latvia', ''),
(17, 'Lobortis Class Aptent Industries', 'Lorem ipsum dolor', '2015-06-26 04:58:48', 'Armenia', ''),
(18, 'Elit A Feugiat Corp.', 'Lorem ipsum dolor', '2014-04-29 15:52:37', 'Ireland', ''),
(19, 'Id Sapien Incorporated', 'Lorem ipsum', '2014-07-01 23:37:26', 'Timor-Leste', ''),
(20, 'Eget Ltd', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', '2015-06-11 03:13:24', 'Ireland', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
