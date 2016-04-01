
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2015 at 05:25 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7119001_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `Configuration`
--

CREATE TABLE `Configuration` (
  `question` int(4) NOT NULL,
  `valide` int(4) NOT NULL,
  `faux` int(4) NOT NULL,
  `combo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `jeu` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Configuration`
--

INSERT INTO `Configuration` VALUES(10, 20, -200, 'fort', 'jeu1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `envoyeur` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `receveur` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `message` text COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `question_extia`
--

CREATE TABLE `question_extia` (
  `question` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `reponse` varchar(150) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `question_extia`
--


-- --------------------------------------------------------

--
-- Table structure for table `question_utilisateur`
--

CREATE TABLE `question_utilisateur` (
  `user` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `question` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `reponse` varchar(150) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `question_utilisateur`
--

INSERT INTO `question_utilisateur` VALUES('admin_extia', '', 'reponse');
INSERT INTO `question_utilisateur` VALUES('admin_extia', '', 'reponse');
INSERT INTO `question_utilisateur` VALUES('admin_extia', '', 'reponse');
INSERT INTO `question_utilisateur` VALUES('admin_extia', 'wertyety', 'rertyertyerty');
INSERT INTO `question_utilisateur` VALUES('admin_extia', 'e4tye56y56y', 'rsdfgsdfgsdfgsdfgsdfg');
INSERT INTO `question_utilisateur` VALUES('admin_extia', 'jhh', '');

-- --------------------------------------------------------

--
-- Table structure for table `statistiques`
--

CREATE TABLE `statistiques` (
  `scores` int(11) NOT NULL,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `statistiques`
--

INSERT INTO `statistiques` VALUES(20, 'Amira', 'Syrine');
INSERT INTO `statistiques` VALUES(30, 'Abbas', 'Samir');
INSERT INTO `statistiques` VALUES(40, 'Ammani', 'Idir');
INSERT INTO `statistiques` VALUES(50, 'Annibal', 'Celine');
INSERT INTO `statistiques` VALUES(60, 'Aroumogame', 'Vinod');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(380, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(370, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(380, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(220, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(400, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(2600, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(0, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(450, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(600, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(0, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-750, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-260, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-50, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-430, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-900, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-50, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-260, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-50, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-430, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-590, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-90, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(100, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(-90, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(160, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Agbenou', 'Maxime');
INSERT INTO `statistiques` VALUES(150, 'Binczak', 'Martin');
INSERT INTO `statistiques` VALUES(3680, 'WADOUX', 'Alexandre');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `img` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sexe` int(1) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` VALUES('agbenou@gmail.com', 'agb', 'Agbenou', 'Maxime', 'agb.jpeg', 0, 1);
INSERT INTO `utilisateur` VALUES('abbas@gmail.com', 'abbas', 'Abbas', 'Samih', 'photo.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('abdul@gmail.com', 'abdul', 'Abdul', 'Jean-Roland', 'abdul.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('abou@gmail.com', 'pass', 'Abou bekr', 'Samir', 'abou.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('amarouche@gmail.com', 'amarouche', 'Amarouche', 'Ouahab Koussaila', 'amarou.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('amira@gmail.com', 'amira', 'Amira', 'Syrine', 'amira.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('ammani@gmail.com', 'ammani', 'Ammani', 'Idir', 'ammani.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('annibal@gmail.com', 'annibal', 'Annibal', 'Celine', 'annibal.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('aroumogame@gmail.com', 'aroumogame', 'Aroumogame', 'Vinod', 'vinod.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('azis@gmail.com', 'azis', 'Widad', 'Azis', 'azis.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('bayle@gmail.com', 'bayle', 'Bayle', 'Nolwenn', 'bayle.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('bedminster@gmail.com', 'bedminster', 'Bedminster', 'Joseph', 'bed.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('bequet@gmail.con', 'bequet', 'Bequet', 'Theo', 'beq.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('berbouche@gmail.com', 'berbouche', 'Berbouche', 'Aymane', 'berbouche.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('binczak@gmail.com', 'binczak', 'Binczak', 'Martin', 'binczak.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('chaho@gmail.com', 'chaho', 'CHAHO', 'Luc', 'chaho.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('sayf@gmail.com', 'sayf', 'ROUMANE', 'Sayf-Eddine', 'saif.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('marwa@gmail.com', 'marwa', 'EL BANNA', 'Marwa', 'marwa.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('velia@gmail.com', 'velia', 'VELIA', 'Kévin Mandresy', 'velia.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('wadoux@gmail.com', 'wadoux', 'WADOUX', 'Alexandre', 'wadoux.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('martin@gmail.com', 'martin', 'Martin', 'Antoine', 'martin.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('prepan@gmail.com', 'prepan', 'PREPANANTHA', 'Lavan', 'prepan.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('pichar@gmail.com', 'pichar', 'Pichard', 'Felix', 'pichar.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('charboche@gmail.com', 'charboche', 'CHABOCHE', 'Tomy', 'chaboche.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('jerrain@gmail.com', 'jerrain', 'Jerrain', 'Yohann', 'jerrain.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('boissiere@gmail.com', 'boissiere', 'Boissiere', 'Hugo', 'boissiere.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('bondie@gmail.com', 'bondie', 'Bondie', 'Salomé', 'bondie.jpeg', 1, 0);
INSERT INTO `utilisateur` VALUES('boucherifi@gmail.com', 'boucherifi', 'Boucherifi', 'Nabil', 'boucherifi.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('cerny@gmail.com', 'cerny', 'Cerny', 'Sylvain', 'cerny.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('elbouc@gmail.com', 'elbouc', 'El bouchikhi', 'Walid', 'elbouc.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('pechay@gmail.com', 'pechay', 'PECHAYRE', 'Arthur', 'pechay.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('wahbi@gmail.com', 'wahbi', 'WAHBI', 'Iliasse', 'wahbi.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('diagne@gmail.com', 'diagne', 'Diagne', 'Stephane', 'diagne.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('mesrati@gmail.com', 'mesrati', 'Mesrati', 'Nada', 'mesrati.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('lahssi@gmail.com', 'lahssi', 'LAHSSINE', 'Youssouf', 'lahssi.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('touazi@gmail.com', 'touazi', 'TOUAZI', 'Nassim', 'touazi.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('dano@gmail.com', 'dano', 'DANO', 'Fabrice', 'dano.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('chen@gmail.com', 'chen', 'CHEN', 'Christophe', 'chen.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('colas@gmail.com', 'colas', 'COLAS', 'Geoffrey', 'colas.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('coquard@gmail.com', 'coquard', 'COQUARD', 'Alexis', 'coquard.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('dia@gmail.com', 'dia', 'DIA', 'Julien', 'dia.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('derouck@gmail.com', 'derouck', 'DEROUCK', 'Clovis', 'derouc.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('dem@gmail.com', 'dem', 'DE MONTAIGNE', 'Cédric', 'demont.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('delor@gmail.com', 'delor', 'DELOR', 'Raïane', 'delor.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('defesc@gmail.com', 'defesc', 'DEFESCHE', 'Alexandre', 'defesc.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('do@gmail.com', 'do', 'DO', 'Syou-Rhoy', 'do.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('donmez@gmail.com', 'donmez', 'DONMEZ', 'Oguz', 'donmez.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('douakoutche@gmail.com', 'douakoutche', 'DOUAKOUTCHE', 'Jordan', 'douako.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('driss@gmail.com', 'driss', 'DRISS', 'Matthieu', 'driss.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('dylewski@gmail.com', 'dylewski', 'DYLEWSKI', 'Arnaud', 'dylews.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('domeng@gmail.com', 'domeng', 'DOMENGE-CHENAL', 'Tristan', 'domeng.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('forestier@gmail.com', 'forestier', 'FORESTIER', 'Guillaume', 'forest.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('florac@gmail.com', 'florac', 'FLORAC', 'Clément', 'florac.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('ferjani@gmail.com', 'ferjani', 'FERJANI', 'Ramy', 'ferjan.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('elseif@gmail.com', 'elseif', 'EL SEIFY', 'Ramy', 'elseif.jpeg', 0, 0);
INSERT INTO `utilisateur` VALUES('foyjoo@gmail.com', 'foyjoo', 'FOYJOO', 'Salman', 'foyjoo.jpeg', 0, 0);
