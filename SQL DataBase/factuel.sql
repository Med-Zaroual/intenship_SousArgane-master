-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 06:28 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `factuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) NOT NULL,
  `name_client` varchar(128) DEFAULT NULL,
  `client_address` varchar(500) DEFAULT NULL,
  `email_client` varchar(50) NOT NULL,
  `numbre_client` int(10) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `name_client`, `client_address`, `email_client`, `numbre_client`) VALUES
(0, 'oussama', 'yoho change gang', '0', 694122880),
(1, 'yeah boy', 'hollla holla', 'nadranisama@gmail.com', 694122880),
(2, 'zerwal zwiml??', 'heyhey how are you', 'notMymail@gmaiol.com', 98980889),
(3, 'hib', 'hib adress', 'nadranisama@gmail.com', 79978),
(4, 'cheap', 'cheap adress', 'hello@gmail.com', 77987),
(5, 'hobo', 'jhfhgkf', 'hfjgh@hfgfhgkj.com', 958498),
(6, 'holla', 'dlhfhj', 'djgfj@fkdhf.hjfd', 38457487),
(7, 'holla1', 'fnfnh', 'djgfj@fkdhf.hjfd', 38457487),
(8, 'holla12', 'skudkyu', 'djgfj@fkdhf.hjfd', 38457487),
(9, 'holla14', 'jliykgfyftuk', 'djgfj@fkdhf.hjfd', 038457487),
(10, 'holla145', 'kgukdjdtyj', 'djgfj@fkdhf.hjfd', 38457487),
(11, 'hey hey', 'hfhgkfjh', 'jf@jfj.fdh', 7594759),
(12, 'hoho', 'new adress', 'fhgfhkdjgh@hgf.fgkdfhkj', 2147483647),
(13, 'hehehey', 'hghkgh', 'fgkhfk@dhfj.jff', 749357),
(14, 'hey hey hey', 'ohghfkh', 'jf@jfj.fdh', 7594759),
(15, 'zerwal chehadchi', 'htykdu', 'sfdjkhf@hgkf.nfhfg', 74957),
(16, 'my body tel', 'dhgjf', 'dfnjkfg@fhfjdh.fdjhf', 89484);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `NUM` int(3) DEFAULT NULL,
  `INTITULE` varchar(49) DEFAULT NULL,
  `Réf` varchar(12) DEFAULT NULL,
  `Nature d'emballage` varchar(25) DEFAULT NULL,
  `prix` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`NUM`, `INTITULE`, `Réf`, `Nature d'emballage`, `prix`) VALUES
(101, 'Arganti Huile d''Argane Cos 30 ml PET', 'ARHAC30P', 'PET 30 ml Spray', 45),
(102, 'Arganti Huile d''Argane Cos 30 ml FF', 'ARHAC30F', 'Flacon Farma 30 ml', 60),
(103, 'Arganti Huile d''Argane Cos 30 ml Laura', 'ARHAC30L', 'Laura 30 ml ', 65),
(104, 'Arganti Huile d''Argane Cos 30 ml Oeuve', 'ARHAC30O', 'La oeuve 30 ml ', 70 ),
(105, 'Arganti Huile d''Argane Cos 40 ml Galonne', 'ARHAC40G', 'Galonne 40 ml ', 80),
(106, 'Arganti Huile d''Argane Cos 50 ml Oeuve', 'ARHAC50O', 'Oeuve 50 ml ', 90),
(107, 'Arganti Huile d''Argane Cos 50 ml Laura', 'ARHAC50L', 'Laura 50 ml ', 90),
(108, 'Arganti Huile d''Argane Cos 50 ml Mérinva', 'ARHAC60M', 'Mérinva 50 ml ', 90),
(109, 'Arganti Huile d''Argane Cos 60 ml PET', 'ARHAC60P', 'PET 60 ml', 90),
(110, 'Arganti Huile d''Argane Cos 60 ml FF', 'ARHAC60F', 'Flacon Farma 60 ml', 100),
(111, 'Arganti Huile d''Argane Cos 60 ml Marasca', 'ARHAC60MR', 'Marasca 60 ml ', 100),
(112, 'Arganti Huile d''Argane Cos 100 ml PET', 'ARHAC100P', 'PET 100 ml Spray', 95),
(113, 'Arganti Huile d''Argane Cos 100 ml Marasca', 'ARHAC100MR', 'Marasca 100 ml ', 20),
(114, 'Arganti Huile d''Argane Cos 100 ml Laura', 'ARHAC100L', 'Laura 100 ml', 100),
(115, 'Arganti Huile d''Argane Cos 100 ml Oeuve', 'ARHAC100O', 'Oeuve 100 ml', 110),
(116, 'Arganti Huile d''Argane Cos 250 ml Marasca', 'ARHAC250MR', 'Marasca 250 ml', 120),
(117, 'Arganti Huile d''Argane Cos 250 ml Marasca Fumé', 'ARHAC250MRF', 'Marasca fumé 250 ml', 170),
(118, 'Arganti Huile d''Argane Cos 250 ml Matisse', 'ARHAC250M', 'Matisse 250 ml', 120),
(119, 'Arganti Huile d''Argane Cos 500 ml Marasca', 'ARHAC500MR', 'Marasca 500 ml', 125),
(120, 'Arganti Huile d''Argane Cos 500 ml Marasca Fumé', 'ARHAC500MRF', 'Marasca fumé 500 ml', 128),
(121, 'Arganti Huile d''Argane Cos 500 ml Matisse', 'ARHAC500M', 'Matisse 500 ml', 190),
(122, 'Arganti Huile d''Argane Cos 1 L PET', 'ARHAC1P', 'PET 1 L', 120),
(123, 'Arganti Huile d''Argane Alim 100 ml Marasca', 'ARHAT100MR', 'Marasca 100 ml', 120),
(124, 'Arganti Huile d''Argane Alim 250 ml Marasca', 'ARHAT250MR', 'Marasca 250 ml', 110),
(125, 'Arganti Huile d''Argane Alim 250 ml Marasca Fumé', 'ARHAT250MR', 'Marasca fumé 250 ml', 111),
(126, 'Arganti Huile d''Argane Alim 250 ml Matisse', 'ARHAT250M', 'Matisse 250 ml', 190),
(127, 'Arganti Huile d''Argane Alim 250 ml Dorica', 'ARHAT250D', 'Dorica 250 ml', 170),
(128, 'Arganti Huile d''Argane Alim 500 ml Marasca', 'ARHAT500MR', 'Marasca 500 ml', 120),
(129, 'Arganti Huile d''Argane Alim 500 ml Marasca Fumé', 'ARHAT500MRF', 'Marasca fumé 500 ml', 120),
(130, 'Arganti Huile d''Argane Alim 500 ml Matisse', 'ARHAT500M', 'Matisse 500 ml', 120),
(131, 'Arganti Amlou 250 gr', 'ARAMLO250', 'Pot en verre 250 g ', 190),
(132, 'Arganti Savon  Dur avec Sachet 150 gr', 'ARSAVD150S', 'Sachet 150 g ', 120),
(133, 'Arganti Savon  Dur avec étui 150 gr', 'ARSAVD150E', 'Etui 150 g ', 250),
(134, 'Arganti Kess à visage Blanc', 'ARKESVBLANC', 'Sachet ', 180),
(135, 'Arganti Kess à visage Vert', 'ARKESVVERT', 'Sachet ', 180),
(136, 'Arganti Kess à visage Rouge', 'ARKESVROUGE', 'Sachet ', 180),
(137, 'Arganti Kess à visage Bleu', 'ARKESVBLEU', 'Sachet ', 180),
(138, 'Arganti Kess à visage Mauve', 'ARKESVMAUVE', 'Sachet ', 180),
(139, 'Arganti Kess à Corp Blanc', 'ARKESCBLANC', 'Sachet ', 190),
(140, 'Arganti Kess à Corp Vert', 'ARKESCVERT', 'Sachet ', 190),
(141, 'Arganti Kess à Corp Rouge', 'ARKESCROUGE', 'Sachet ', 190),
(142, 'Arganti Kess à Corp Bleu', 'ARKESCBLEU', 'Sachet ', 190),
(143, 'Arganti Kess à Corp Mauve', 'ARKESCMAUVE', 'Sachet ', 190),
(144, 'Arganti Kess à Dos Blanc', 'ARKESDBLANC', 'Sachet ', 170),
(145, 'Arganti Kess à Dos Vert', 'ARKESDVERT', 'Sachet ', 170),
(146, 'Arganti Kess à Dos Rouge', 'ARKESDROUGE', 'Sachet ', 170),
(147, 'Arganti Kess à Dos Bleu', 'ARKESDBLEU', 'Sachet ', 170),
(148, 'Arganti Kess à Dos Mauve', 'ARKESDMAUVE', 'Sachet ', 170),
(201, 'Naturelle Huile d''Argane Cos 30 ml PET', 'NATHAC30P', 'PET 30 ml Spray', 70),
(202, 'Naturelle Huile d''Argane Cos 30 ml FF', 'NAHAC30F', 'Flacon Farma 30 ml', 70),
(203, 'Naturelle Huile d''Argane Cos 30 ml Laura', 'NAHAC30L', 'Laura 30 ml ', 70),
(204, 'Naturelle Huile d''Argane Cos 30 ml Oeuve', 'NAHAC30O', 'La oeuve 30 ml ', 70),
(205, 'Naturelle Huile d''Argane Cos 40 ml Galonne', 'NAHAC40G', 'Galonne 40 ml ', 90),
(206, 'Naturelle Huile d''Argane Cos 50 ml Oeuve', 'NAHAC50O', 'Oeuve 50 ml ', 120),
(207, 'Naturelle Huile d''Argane Cos 50 ml Laura', 'NAHAC50L', 'Laura 50 ml ', 120),
(208, 'Naturelle Huile d''Argane Cos 50 ml Mérinva', 'NAHAC60M', 'Mérinva 50 ml ', 120),
(209, 'Naturelle Huile d''Argane Cos 60 ml PET', 'NAHAC60P', 'PET 60 ml Spray', 150),
(210, 'Naturelle Huile d''Argane Cos 60 ml FF', 'NAHAC60F', 'Flacon Farma 60 ml', 150),
(211, 'Naturelle Huile d''Argane Cos 60 ml Marasca', 'NAHAC60MR', 'Marasca 60 ml ', 150),
(212, 'Naturelle Huile d''Argane Cos 100 ml PET', 'NAHAC100P', 'PET 100 ml Spray', 200),
(213, 'Naturelle Huile d''Argane Cos 100 ml Marasca', 'NAHAC100MR', 'Marasca 100 ml ', 200),
(214, 'Naturelle Huile d''Argane Cos 100 ml Laura', 'NAHAC100L', 'Laura 100 ml', 200),
(215, 'Naturelle Huile d''Argane Cos 100 ml Oeuve', 'NAHAC100O', 'Oeuve 100 ml', 200),
(216, 'Naturelle Huile d''Argane Cos 250 ml Marasca', 'NAHAC250MR', 'Marasca 250 ml', 350),
(217, 'Naturelle Huile d''Argane Cos 250 ml Marasca Fumé', 'NAHAC250MRF', 'Marasca fumé 250 ml', 350),
(218, 'Naturelle Huile d''Argane Cos 250 ml Matisse', 'NAHAC250M', 'Matisse 250 ml', 350),
(219, 'Naturelle Huile d''Argane Cos 500 ml Marasca', 'NAHAC500MR', 'Marasca 500 ml', 450),
(220, 'Naturelle Huile d''Argane Cos 500 ml Marasca Fumé', 'NAHAC500MRF', 'Marasca fumé 500 ml', 450),
(221, 'Naturelle Huile d''Argane Cos 500 ml Matisse', 'NAHAC500M', 'Matisse 500 ml', 450),
(222, 'Naturelle Huile d''Argane Cos 1 L PET', 'NAHAC1P', 'PET 1 L', 800),
(223, 'Naturelle Nigelle 60 ml PET', 'NANIG60P', 'PET 60 ml Spray', 70),
(224, 'Naturelle Nigelle 60 ml FF', 'NANIG60F', 'Flacon Farma 60 ml', 70),
(225, 'Naturelle Amande Douce 60 ml PET', 'NAAMD60P', 'PET 60 ml Spray', 70),
(226, 'Naturelle Amande Amére 60 ml PET', 'NAAMA60P', 'PET 60 ml Spray', 70),
(227, 'Naturelle Avocat 60 ml PET', 'NAAV60P', 'PET 60 ml Spray', 70),
(228, 'Naturelle Sesame 60 ml PET', 'NASE60P', 'PET 60 ml Spray', 70),
(229, 'Naturelle Ricin 60 ml PET', 'NARI60P', 'PET 60 ml Spray', 70),
(230, 'Naturelle Germe de Blé 60 ml PET', 'NAGE60P', 'PET 60 ml Spray', 70),
(231, 'Naturelle Cactus 60 ml PET', 'NACAC60P', 'PET 60 ml Spray', 70),
(232, 'Naturelle Cactus 60 ml FF', 'NACAC60F', 'Flacon Farma 60 ml', 70),
(233, 'Naturelle Cactus Pur 15 ml laura', 'NACACP15L', 'Laura 15 ml Spray ', 15),
(234, 'Naturelle Cactus Pur 30 ml laura', 'NACACP30L', 'Laura 30 ml Spray ', 40),
(235, 'Naturelle Cactus Pur 50 ml laura', 'NACACP50L', 'Laura 50 ml Spray', 50),
(236, 'Naturelle Cactus Pur 100 ml laura', 'NACACP100L', 'Laura 100 ml Spray', 120),
(237, 'Naturelle Eau de Rose 125ml', 'NAER125', 'Flacon en plastique Spray', 240 ),
(238, 'Naturelle Eau de Rose 130 ml', 'NAER130', 'Flacon en plastique Spray', 190),
(239, 'Naturelle Savon Noir d''Argane 200 gr', 'NASAVNP200', 'Pot en plastique 200 gr', 250),
(240, 'Naturelle Savon Noir à la Lavande 200 gr', 'NASAVNL200', 'Pot en plastique 200 gr', 250),
(241, 'Naturelle Savon Noir Eucalyptus 200 gr', 'NASAVNE200', 'Pot en plastique 200 gr', 250),
(242, 'Naturelle Savon Noir aux Fleur d''oranger 200 gr', 'NASAVNF200', 'Pot en plastique 200 gr', 250),
(243, 'Naturelle Henna 200 gr', 'NAHENA200', 'Pot en plastique 200 gr', 250),
(244, 'Naturelle Pierre d''Alun 150 gr', 'NAPIER150', 'Sachet', 250),
(245, 'Naturelle Savon Etui 150 gr', 'NASAV150E', 'Etui 150 g ', 200),
(246, 'Naturelle Savon Sachet 150 gr', 'NASAVON150S', 'Sachet', 200),
(247, 'Naturelle Shampoing d''Argane 200 ml', 'NASHAMP200', 'Flacon shampoing 200ml', 250),
(248, 'Naturelle Ghassoul 200 gr', 'NAGHAS200', 'Pot en plastique 200 gr', 250),
(249, 'Naturelle Argile Vert 200 gr', 'NAARGV200', 'Pot en plastique 200 gr', 250),
(250, 'Naturelle Argile Blanche 200 gr', 'NAARGB200', 'Pot en plastique 200 gr', 250),
(251, 'Naturelle Kess à visage Blanc', 'NAKESVBLANC', 'Sachet', 250),
(252, 'Naturelle Kess à visage Vert', 'NATKESVVERT', 'Sachet', 50),
(253, 'Naturelle Kess à visage Rouge', 'NAKESVROUGE', 'Sachet', 50),
(254, 'Naturelle Kess à visage Bleu', 'NAKESVBLEU', 'Sachet', 50),
(255, 'Naturelle Kess à visage Mauve', 'NAKESVMAUVE', 'Sachet', 50),
(256, 'Naturelle Kess à Corp Blanc', 'NAKESCBLANC', 'Sachet', 50),
(257, 'Naturelle Kess à Corp Vert', 'NAKESCVERT', 'Sachet', 50),
(258, 'Naturelle Kess à Corp Rouge', 'NAKESCROUGE', 'Sachet', 50),
(259, 'Naturelle Kess à Corp Bleu', 'NAKESCBLEU', 'Sachet', 50),
(260, 'Naturelle Kess à Corp Mauve', 'NAKESCMAUVE', 'Sachet', 50),
(261, 'Naturelle Kess à Dos Blanc', 'NAKESDBLANC', 'Sachet', 50),
(262, 'Naturelle Kess à Dos Vert', 'NAKESDVERT', 'Sachet', 50),
(263, 'Naturelle Kess à Dos Rouge', 'NAKESDROUGE', 'Sachet', 50),
(264, 'Naturelle Kess à Dos Bleu', 'NAKESDBLEU', 'Sachet', 50),
(265, 'Naturelle Kess à Dos Mauve', 'NAKESDMAUVE', 'Sachet', 50),
(301, 'Vrac Huile d''Argane Cos 1 L PET', 'VRACHAC1P', 'PET 1 L', 400),
(302, 'Vrac Huile d''Argane Cos 1/2 L PET', 'VRACHAC1/2P', 'PET 1/2L', 200),
(303, 'Vrac Huile d''Argane Cos 1/4 L PET', 'VRACHAC1/4P', 'PET 1/4L', 100),
(304, 'Vrac Huile d''Argane Cos  5 L ', 'VRACHAC5B', 'Bidon 5L', 2000),
(305, 'Vrac Huile d''Argane Cos 10 L ', 'VRACHAC10B', 'Bidon 10L', 3500),
(306, 'Vrac Huile d''Argane Cos 25 L ', 'VRACHAC25B', 'Bidon 25L', 10000),
(307, 'Vrac Huile d''Argane Cos 50 L ', 'VRACHAC50B', 'Bidon 50L', 20000),
(308, 'Vrac Huile d''Argane Cos 200 L ', 'VRACHAC200B', 'Bidon 200L', 800000),
(309, 'Vrac Huile d''Argane Cos 1000 L ', 'VRACHAC1000C', 'Citerne 1000 L ', 400000),
(310, 'Vrac Huile d''Argane Alimentaire  1 L PET', 'VRACHAA1P', 'PET 1 L', 400),
(311, 'Vrac Huile d''Argane Alimentaire  1/2 L PET', 'VRACHAA1/2P', 'PET 1/2L', 200),
(312, 'Vrac Huile d''Argane AlimentaireCos 1/4 L PET', 'VRACHAA1/4P', 'PET 1/4L', 100),
(313, 'Vrac Huile d''Argane Alimentaire Cos  5 L ', 'VRACHAA5B', 'Bidon 5L', 2000),
(314, 'Vrac Huile d''Argane Alimentaire Cos 10 L ', 'VRACHAA10B', 'Bidon 10L', 4000),
(315, 'Vrac Huile d''Argane Alimentaire Cos 25 L ', 'VRACHAA25B', 'Bidon 25L', 10000),
(316, 'Vrac Huile d''Argane Alimentaire Cos 50 L ', 'VRACHAA50B', 'Bidon 50L', 20000),
(317, 'Vrac Huile d''Argane Alimentaire Cos 200 L ', 'VRACHAA200B', 'Bidon 200L', 80000),
(318, 'Vrac Huile d''Argane Alimentaire Cos 1000 L ', 'VRACHAA1000C', 'Citerne 1000 L ', 400000),
(319, 'Vrac Amlou  1 Kg', 'VRACAMLO1', 'PET 1kg', 60),
(320, 'Vrac Amlou  1/2 Kg', 'VRACAMLO1/2', 'PET 1/2 kg', 30),
(321, 'Vrac Amlou  1/4 Kg', 'VRACAMLO1/4', 'PET 1/4 kg', 15),
(322, 'Vrac Cactus 250 ml Marasca', 'VRACCAC250M', 'Marasca 250 ml', 100),
(323, 'Vrac Cactus 500 ml Marasca', 'VRACCAC500M', 'Marasca 500 ml', 200),
(324, 'Vrac Cactus 1 L PET', 'VRACCAC1P', 'PET 1 L', 400),
(325, 'Vrac Cactus 1/2 L PET', 'VRACCAC1/2P', 'PET 1/2 L', 200),
(326, 'Vrac Cactus 1/4 L PET', 'VRACCAC1/4P', 'PET 1/4 L', 100),
(327, 'Vrac Nigelle 1L PET', 'VRACNIG1P', 'PET 1 L', 400),
(328, 'Vrac Nigelle 1/2L PET', 'VRACNIG1/2P', 'PET 1/2 L', 200),
(329, 'Vrac Nigelle 1/4L PET', 'VRACNIG1/4P', 'PET 1/4 L', 100),
(330, 'Vrac Nigelle 5L PET', 'VRACNIG5P', 'PET 5 L', 2000),
(331, 'Vrac Nigelle 10L PET', 'VRACNIG10P', 'PET 10 L', 4000),
(332, 'Vrac Nigelle 25L PET', 'VRACNIG25P', 'PET 25 L', 10000),
(333, 'Vrac Nigelle 50L PET', 'VRACNIG50P', 'PET 50 L', 20000),
(334, 'Vrac Nigelle 200L PET', 'VRACNIG200P', 'PET 200 L', 80000),
(335, 'Vrac Amande Douce 1L PET', 'VRACAMD1P', 'PET 1 L', 400),
(336, 'Vrac Amande Douce 1/2L PET', 'VRACAMD1/2P', 'PET 1/2 L', 200),
(337, 'Vrac Amande Douce 1/4L PET', 'VRACAMD1/4P', 'PET 1/4 L', 100),
(338, 'Vrac Amande Douce 5L PET', 'VRACAMD5P', 'PET 5 L', 2000),
(339, 'Vrac Amande Douce 10L PET', 'VRACAMD10P', 'PET 10 L', 4000),
(340, 'Vrac Amande Douce 25L PET', 'VRACAMD25P', 'PET 25 L', 10000),
(341, 'Vrac Amande Douce 50L PET', 'VRACAMD50P', 'PET 50 L', 20000),
(342, 'Vrac Amande Douce 200L PET', 'VRACAMD200P', 'PET 200 L', 80000),
(343, 'Vrac Amande Amére 1L PET', 'VRACAMA1P', 'PET 1 L', 400),
(344, 'Vrac Amande Amére 1/2L PET', 'VRACAMA1/2P', 'PET 1/2 L', 200),
(345, 'Vrac Amande Amére 1/4L PET', 'VRACAMA1/4P', 'PET 1/4 L', 100),
(346, 'Vrac Amande Amére 5L PET', 'VRACAMA5P', 'PET 5 L', 2000),
(347, 'Vrac Amande Amére 10L PET', 'VRACAMA10P', 'PET 10 L', 4000),
(348, 'Vrac Amande Amére 25L PET', 'VRACAMA25P', 'PET 25 L', 10000),
(349, 'Vrac Amande Amére 50L PET', 'VRACAMA50P', 'PET 50 L', 20000),
(350, 'Vrac Amande Amére 200L PET', 'VRACAMA200P', 'PET 200 L', 80000),
(351, 'Vrac Avocat 1L PET', 'VRACAV1P', 'PET 1 L', 400),
(352, 'Vrac Avocat 1/2L PET', 'VRACAV1/2P', 'PET 1/2 L', 200),
(353, 'Vrac Avocat 1/4L PET', 'VRACAV1/4P', 'PET 1/4 L', 100),
(354, 'Vrac Avocat 5L PET', 'VRACAV5P', 'PET 5 L', 2000),
(355, 'Vrac Avocat 10L PET', 'VRACAV10P', 'PET 10 L', 4000),
(356, 'Vrac Avocat 25L PET', 'VRACAV25P', 'PET 25 L', 10000),
(357, 'Vrac Avocat 50L PET', 'VRACAV50P', 'PET 50 L', 20000),
(358, 'Vrac Avocat 200L PET', 'VRACAV200P', 'PET 200 L', 80000),
(359, 'Vrac Sesame 1L PET', 'VRACSE1P', 'PET 1 L', 400),
(360, 'Vrac Sesame 1/2L PET', 'VRACSE1/2P', 'PET 1/2 L', 200),
(361, 'Vrac Sesame 1/4L PET', 'VRACSE1/4P', 'PET 1/4 L', 100),
(362, 'Vrac Sesame 5L PET', 'VRACSE5P', 'PET 5 L', 2000),
(363, 'Vrac Sesame 25L PET', 'VRACSE25P', 'PET 25 L', 10000),
(364, 'Vrac Sesame 50L PET', 'VRACSE50P', 'PET 50 L', 20000),
(365, 'Vrac Sesame 200L PET', 'VRACSE200P', 'PET 200 L', 80000),
(366, 'Vrac Ricin 1L PET', 'VRACRI1P', 'PET 1 L', 400),
(367, 'Vrac Ricin 1/2L PET', 'VRACRI1/2P', 'PET 1/2 L', 200),
(368, 'Vrac Ricin 1/4L PET', 'VRACRI1/4P', 'PET 1/4 L', 100),
(369, 'Vrac Ricin 5L PET', 'VRACRI5P', 'PET 5 L', 2000),
(370, 'Vrac Ricin 10L PET', 'VRACRI10P', 'PET 10 L', 4000),
(371, 'Vrac Ricin 25L PET', 'VRACRI25P', 'PET 25 L', 10000),
(372, 'Vrac Ricin 50L PET', 'VRACRI50P', 'PET 50 L', 20000),
(373, 'Vrac Ricin 200L PET', 'VRACRI200P', 'PET 200 L', 80000),
(374, 'Vrac Germe de Blé 1L PET', 'VRACGE1P', 'PET 1 L', 400),
(375, 'Vrac Germe de Blé 1/2L PET', 'VRACGE1/2P', 'PET 1/2 L',200),
(376, 'Vrac Germe de Blé 1/4L PET', 'VRACGE1/4P', 'PET 1/4 L', 100),
(377, 'Vrac Germe de Blé 5L PET', 'VRACGE5P', 'PET 5 L', 2000),
(378, 'Vrac Germe de Blé 10L PET', 'VRACGE10P', 'PET 10 L', 4000),
(379, 'Vrac Germe de Blé 25L PET', 'VRACGE25P', 'PET 25 L', 10000),
(380, 'Vrac Germe de Blé 50L PET', 'VRACGE50P', 'PET 50 L', 20000),
(381, 'Vrac Germe de Blé 200L PET', 'VRACGE200P', 'PET 200 L', 80000),
(382, 'Vrac Eau de Rose 1L PET', 'VRACEA1P', 'PET 1L', 350),
(383, 'Vrac Eau de Rose 5L PET', 'VRACEA5P', 'PET 5L', 1750),
(384, 'Vrac Savon Noir d''Argane 1KG SOT ', 'VRACSA1S', 'SOT 1 KG', 500),
(385, 'Vrac Savon Noir à la Lavande 1KG SOT', 'VRACSA1S', 'SOT 1 KG', 500),
(386, 'Vrac Savon Noir Eucalyptus 1KG SOT', 'VRACSA1S', 'SOT 1 KG', 500),
(387, 'Vrac Savon Noir aux Fleur d''oranger 1KG SOT ', 'VRACSA1S', 'SOT 1 KG', 500),
(388, 'Vrac Shampoing d''Argane 5KG SOT', 'VRACSH5S', 'SOT 5 KG', 1000),
(389, 'Vrac Ghassoul 5KG SAC', 'VRACGH5S', 'SAC 5 KG', 1000),
(390, 'Vrac Ghassoul 10KG SAC', 'VRACGH10S', 'SAC 10 KG', 2000),
(391, 'Vrac Argile Vert 5KG SAC', 'VRACAR5S', 'SAC 5 KG', 1000),
(392, 'Vrac Argile Vert 10KG SAC', 'VRACAR10S', 'SAC 10 KG', 2000),
(393, 'Vrac Argile Blanche 5KG SAC', 'VRACAR5S', 'SAC 5 KG', 1000),
(394, 'Vrac Argile Blanche 10KG SAC', 'VRACAR10S', 'SAC 10 KG', 2000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
