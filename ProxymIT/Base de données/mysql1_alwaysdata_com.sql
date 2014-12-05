-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.alwaysdata.com
-- Generation Time: Dec 05, 2014 at 07:44 AM
-- Server version: 5.1.66-0+squeeze1
-- PHP Version: 5.3.6-11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `n2i_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `Country`
--

CREATE TABLE IF NOT EXISTS `Country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `acronym` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `Country`
--

INSERT INTO `Country` (`id`, `name`, `acronym`) VALUES
(1, 'France', 'FR'),
(2, 'Italie', 'IT'),
(3, 'Guinée', 'PG'),
(4, 'Liberia', 'LR'),
(5, 'Seria Leone', 'SL'),
(6, 'Nigeria', 'NG'),
(7, 'Senegal', 'SN'),
(8, 'USA', 'US'),
(9, 'Espagne', 'ES'),
(10, 'Mali', 'ML'),
(11, 'Belgique', 'BE'),
(12, 'Burkina Faso', 'BF'),
(13, 'Bulgarie', 'BG'),
(14, 'Bosnie', 'BA'),
(15, 'Bolivie', 'BO'),
(16, 'Japon', 'JP'),
(17, 'Burundi', 'BI'),
(18, 'Benin', 'BJ'),
(19, 'Jamaique', 'JM'),
(20, 'Botswana', 'BW'),
(21, 'Brésil', 'BR'),
(22, 'Biélorussie', 'BY'),
(23, 'Rwanda', 'RW'),
(24, 'Serbie', 'RS'),
(25, 'Lituanie', 'LT'),
(26, 'Egypte', 'EG'),
(27, 'Roumanie', 'RO'),
(28, 'Guatemala', 'GT'),
(29, 'Guyane', 'GY'),
(30, 'Géorgie', 'GE'),
(31, 'Pakistan', 'PK'),
(32, 'Gabon', 'GA'),
(33, 'Gambie', 'GM'),
(34, 'Koweit', 'KW'),
(35, 'Ghana', 'GH'),
(36, 'Oman', 'OM'),
(37, 'Somalie', '_3'),
(38, 'Haiti', 'HT'),
(39, 'Croatie', 'HR'),
(40, 'Jordanie', 'JO'),
(41, 'Kosovo', '_1'),
(42, 'Sahara', '_2'),
(43, 'Ethiopie', 'ET'),
(44, 'Angola', 'AO'),
(45, 'Afrique du Sud', 'ZA'),
(46, 'Zambie', 'ZM'),
(47, 'Papuasie Nouvelle Guinée', 'PA'),
(48, 'Royaume-unis', 'GB'),
(49, 'Honduras', 'HN'),
(50, 'Hongrie', 'HU'),
(51, 'Panama', 'PA'),
(52, 'Portugal', 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `Disease`
--

CREATE TABLE IF NOT EXISTS `Disease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `advent_year` int(11) NOT NULL,
  `country_ids` text CHARACTER SET utf8 NOT NULL,
  `number_hit` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Disease`
--

INSERT INTO `Disease` (`id`, `name`, `description`, `advent_year`, `country_ids`, `number_hit`) VALUES
(1, 'Ebola', 'Le virus Ebola, dont le taux de l&#233;talit&#233; peut atteindre 90%, est une virose aigu&#235; se caract&#233;risant par une apparition brutale de la fi&#232;vre, une faiblesse intense, des myalgies, des c&#233;phal&#233;es et une irritation de la gorge. Ces sympt&#244;mes sont suivis de vomissements, de diarrh&#233;e, d&#8217;une &#233;ruption cutan&#233;e, d&#8217;une insuffisance r&#233;nale et h&#233;patique et, dans certains cas, d&#8217;h&#233;morragies internes et externes. Les analyses de laboratoire r&#233;v&#232;lent souvent une baisse de la num&#233;ration leucocytaire et plaquettaire, ainsi qu&#8217;une &#233;l&#233;vation des enzymes h&#233;patiques.\r\n\r\n                              La dur&#233;e d&#8217;incubation, c&#8217;est-&#224;-dire le temps &#233;coul&#233; entre l&#8217;infection par le virus et l&#8217;apparition des sympt&#244;mes, varie de 2 &#224; 21 jours. Les sujets atteints restent contagieux tant que le virus est pr&#233;sent dans leur sang et leurs s&#233;cr&#233;tions, et on a &#233;tabli que cette p&#233;riode pouvait durer jusqu&#8217;&#224; 61 jours apr&#232;s le d&#233;but de la maladie.', 1976, '3;5;4;6;7;8;10;', '2134;6599;20;1;4;1;7;'),
(2, 'SIDA', 'Le VIH, ou virus de l&#8217;immunod&#233;ficience humaine, est un type de virus qui peut causer une maladie appel&#233;e SIDA (syndrome d&#8217;immunod&#233;ficience acquise). L&#8217;infection au VIH atteint le syst&#232;me immunitaire, c&#8217;est-&#224;-dire les d&#233;fenses naturelles du corps contre la maladie. Si elle n&#8217;est pas trait&#233;e, de graves maladies peuvent survenir. Des infections normalement anodines, comme une grippe ou une bronchite, peuvent s&#8217;aggraver, devenir tr&#232;s difficiles &#224; traiter ou m&#234;me entra&#238;ner le d&#233;c&#232;s. De plus, le risque de cancer est aussi accru.\r\n(chiffres approximatifs)', 1970, '1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;', '1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;'),
(3, 'Grippe H5N1', 'La grippe aviaire d&#233;signe les diff&#233;rentes formes du virus de la grippe qui infecte les oiseaux sauvages et domestiques. La maladie est &#233;galement connue sous le nom de peste aviaire.\r\n\r\nEn 2004, une souche H5N1 du virus a &#233;t&#233; m&#233;diatis&#233;e en raison de sa dangerosit&#233; et de sa transmissibilit&#233; &#224; l''homme.\r\n\r\nCette affection est transmissible entre volailles et plus rarement &#224; des mammif&#232;res (dont le porc qui est &#224; la fois r&#233;ceptif aux virus grippaux aviaires et humains), mais elle est habituellement difficilement transmissible &#224; l''homme. Certaines esp&#232;ces d''oiseaux, et en particulier certains canards sont souvent porteurs asymptomatiques.\r\n(Chiffres aleatoires)', 2004, '1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;', '1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
