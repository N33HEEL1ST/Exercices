-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 26 Juillet 2017 à 16:34
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webforce5`
--

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `cit_id` int(10) UNSIGNED NOT NULL,
  `cit_name` varchar(32) DEFAULT NULL,
  `cit_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country_cou_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`cit_id`, `cit_name`, `cit_inserted`, `country_cou_id`) VALUES
(1, 'Esch-sur-Alzette', '2017-06-15 07:55:43', 1),
(2, 'Differdange', '2017-06-15 07:55:43', 1),
(3, 'Petange', '2017-06-15 07:55:43', 1),
(4, 'Luxembourg', '2017-06-15 07:55:43', 1),
(5, 'Metz', '2017-06-15 07:55:43', 2),
(6, 'Verdun', '2017-06-15 07:55:43', 2),
(7, 'Arlon', '2017-06-15 07:55:43', 3),
(8, 'Berlin', '2017-06-15 07:55:43', 7),
(9, 'Nancy', '0000-00-00 00:00:00', 4),
(10, 'Walferdange', '2017-06-15 07:55:43', 1);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `cou_id` int(10) UNSIGNED NOT NULL,
  `cou_name` varchar(32) DEFAULT NULL,
  `cou_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`cou_id`, `cou_name`, `cou_inserted`) VALUES
(1, 'Luxembourg', '2017-06-15 07:55:43'),
(2, 'France', '2017-06-15 07:55:43'),
(3, 'Belgique', '2017-06-15 07:55:43'),
(4, 'Italie', '2017-06-15 07:55:43'),
(5, 'Espagne', '2017-06-15 07:55:43'),
(6, 'Pays-Bas', '2017-06-15 07:55:43'),
(7, 'Allemagne', '2017-06-15 07:55:43'),
(8, 'Chine', '2017-06-15 07:55:43'),
(9, 'Malaisie', '2017-06-27 10:19:38');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `loc_id` int(10) UNSIGNED NOT NULL,
  `loc_name` varchar(16) DEFAULT NULL,
  `loc_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country_cou_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`, `loc_inserted`, `country_cou_id`) VALUES
(1, 'Technoport Esch-', '2017-06-15 07:55:43', 1),
(2, 'Piennes', '2017-06-15 07:55:43', 2);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `ses_id` int(11) NOT NULL,
  `ses_start_date` date DEFAULT NULL,
  `ses_end_date` date DEFAULT NULL,
  `ses_number` tinyint(3) UNSIGNED DEFAULT NULL,
  `ses_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location_loc_id` int(10) UNSIGNED NOT NULL,
  `training_tra_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session`
--

INSERT INTO `session` (`ses_id`, `ses_start_date`, `ses_end_date`, `ses_number`, `ses_inserted`, `location_loc_id`, `training_tra_id`) VALUES
(1, '2015-11-30', '2016-03-27', 1, '2017-06-15 07:55:43', 1, 1),
(2, '2016-04-04', '2016-07-27', 2, '2017-06-15 07:55:43', 1, 1),
(3, '2016-08-30', '2016-12-23', 3, '2017-06-15 07:55:43', 1, 1),
(4, '2016-09-10', '2017-01-12', 3, '2017-06-15 07:55:43', 2, 2),
(5, '2017-01-03', '2017-04-26', 4, '2017-06-15 07:55:43', 1, 1),
(6, '2017-05-02', '2107-08-19', 5, '2017-06-15 08:44:12', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `session_has_trainer`
--

CREATE TABLE `session_has_trainer` (
  `session_ses_id` int(11) NOT NULL,
  `trainer_trn_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session_has_trainer`
--

INSERT INTO `session_has_trainer` (`session_ses_id`, `trainer_trn_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

CREATE TABLE `speciality` (
  `spe_id` int(10) UNSIGNED NOT NULL,
  `spe_name` varchar(16) DEFAULT NULL,
  `spe_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `speciality`
--

INSERT INTO `speciality` (`spe_id`, `spe_name`, `spe_inserted`) VALUES
(1, 'Front-end', '2017-06-15 07:55:43'),
(2, 'Back-end', '2017-06-15 07:55:43'),
(3, 'WordPress', '2017-06-15 07:55:43');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `stu_id` int(10) UNSIGNED NOT NULL,
  `stu_lastname` varchar(64) DEFAULT NULL,
  `stu_firstname` varchar(32) DEFAULT NULL,
  `stu_birthdate` date DEFAULT NULL,
  `stu_email` varchar(255) DEFAULT NULL,
  `stu_friendliness` tinyint(4) DEFAULT NULL,
  `stu_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session_ses_id` int(11) NOT NULL,
  `city_cit_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `student`
--

INSERT INTO `student` (`stu_id`, `stu_lastname`, `stu_firstname`, `stu_birthdate`, `stu_email`, `stu_friendliness`, `stu_inserted`, `session_ses_id`, `city_cit_id`) VALUES
(1, 'Ney', 'Fabien', '1984-05-05', 'fabien@progweb.fr', 2, '2017-06-15 07:55:43', 1, 9),
(2, 'Mouget', 'Brice', '1980-10-22', 'brice@progweb.fr', 5, '2017-06-15 07:55:43', 1, 3),
(3, 'Tasch', 'Philippe', '1983-04-05', 'filou@progweb.fr', 5, '2017-06-15 07:55:43', 2, 9),
(4, 'Cavro', 'Michel', '1967-12-05', 'michel@cavro.lu', 3, '2017-06-15 07:55:43', 2, 1),
(5, 'Wagemans', 'Charlotte', '1985-06-24', 'charlotte@progweb.fr', 3, '2017-06-15 07:55:43', 2, 7),
(6, 'De Melo', 'Flavio', '1978-04-18', 'flavio@demelo.fr', 4, '2017-06-15 07:55:43', 3, 2),
(7, 'Bodian', 'Salia', '1981-06-29', 'salia@progweb.fr', 4, '2017-06-15 07:55:43', 3, 1),
(8, 'Eilenbecker', 'Charles', '1985-11-23', 'charles@progweb.fr', 3, '2017-06-15 07:55:43', 3, 10),
(9, 'AHRACH', 'Hicham', '1978-01-01', 'hicham@progweb.fr', 1, '2017-06-15 07:55:43', 3, 1),
(10, 'BOUHAMID', 'Malika', '1978-03-01', 'malika@progweb.fr', 3, '2017-06-15 07:55:43', 3, 3),
(11, 'DIOGO', 'Patrick', '1978-05-01', 'patrick@progweb.fr', 5, '2017-06-15 07:55:43', 3, 1),
(12, 'DUHR', 'Christopher', '1978-06-01', 'christopher@progweb.fr', 1, '2017-06-15 07:55:43', 3, 2),
(13, 'FURFARI', 'Paul', '1978-08-01', 'paul.furfari@progweb.fr', 3, '2017-06-15 07:55:43', 3, 4),
(14, 'KAVANAGH', 'Alan', '1978-09-01', 'alan@progweb.fr', 4, '2017-06-15 07:55:43', 3, 2),
(15, 'ARANTES RIBEIRO', 'Vitor José', '1980-01-01', 'vitor.arantes@outlook.com', 2, '2017-06-15 07:55:43', 5, 1),
(16, 'BRILL', 'Christian', '1980-02-01', 'quedarme@gmail.com', 3, '2017-06-15 07:55:43', 5, 2),
(17, 'CHAUSSY', 'Jhang', '1980-03-01', 'jhangchaussy@gmail.com', 4, '2017-06-15 07:55:43', 5, 3),
(18, 'CORMAN', 'Naomi', '1980-04-01', 'naomicorman@gmail.com', 5, '2017-06-15 07:55:43', 5, 1),
(19, 'DANA', 'Richard', '1980-05-01', 'richard.dana@pt.lu', 2, '2017-06-15 07:55:43', 5, 2),
(20, 'GREGORI', 'Gatien', '1980-06-01', 'gatien.gregori@gmail.com', 3, '2017-06-15 07:55:43', 5, 3),
(21, 'GOMES BARROSO QUEIROZ', 'Pedro Henrique', '1980-07-01', 'barrosoph@gmail.com', 4, '2017-06-15 07:55:43', 5, 1),
(22, 'MEHLINGER', 'Maxim', '1980-08-01', 'maximmehlinger@hotmail.com', 5, '2017-06-15 07:55:43', 5, 2),
(23, 'MODEEN', 'Timo', '1980-09-01', 'timomodeen@yahoo.com', 2, '2017-06-15 07:55:43', 5, 3),
(24, 'SANTOS MARQUES', 'Fabio', '1980-10-01', 'magellan210@hotmail.com', 3, '2017-06-15 07:55:43', 5, 1),
(25, 'SARAT', 'Patrice', '1980-11-01', 'psc0707@gmail.com', 4, '2017-06-15 07:55:43', 5, 2),
(26, 'SPECCHIO', 'Carlo', '1980-12-01', 'carlo.specchio@vo.lu', 5, '2017-06-15 07:55:43', 5, 3),
(27, 'STOZ', 'Martin', '1981-01-01', 'martin.stoz@gmail.com', 2, '2017-06-15 07:55:43', 5, 1),
(28, 'WITRY', 'Sam', '1981-02-01', 'sam.witry@pt.lu', 3, '2017-06-15 07:55:43', 5, 2),
(29, 'BENOMAR', 'Julien', '1981-03-01', 'jb@theseeconsulting.com', 4, '2017-06-15 07:55:43', 5, 3),
(30, 'CARLONI', 'Sébastien', '1981-04-01', 'm_donovan@hotmail.fr', 5, '2017-06-15 07:55:43', 5, 1),
(31, 'BARDHI', 'Florian', '1975-05-01', 'florian@progweb.fr', 1, '2017-06-15 07:55:43', 2, 1),
(32, 'CARNEIRO AFONSO DIAS ', 'Adelino', '1975-06-01', 'adelino@progweb.fr', 2, '2017-06-15 07:55:43', 2, 2),
(33, 'COELHO', 'Patrick', '1975-07-01', 'patrick@progweb.fr', 4, '2017-06-15 07:55:43', 2, 4),
(34, 'DESWARTE', 'Fabrice', '1975-08-01', 'fabrice@progweb.fr', 5, '2017-06-15 07:55:43', 2, 1),
(35, 'FABRI', 'Paul', '1975-09-01', 'paul.fabri@progweb.fr', 1, '2017-06-15 07:55:43', 2, 2),
(36, 'IOANID ', 'Paul', '1975-10-01', 'paul.ioanid@progweb.fr', 2, '2017-06-15 07:55:43', 2, 3),
(37, 'LABIDI', 'Mondher', '1975-11-01', 'mondher@progweb.fr', 3, '2017-06-15 07:55:43', 2, 4),
(38, 'RAIMUNDO', 'Claudio', '1975-12-01', 'claudio@progweb.fr', 4, '2017-06-15 07:55:43', 2, 1),
(39, 'REUTER', 'Marc', '1976-01-01', 'marc@progweb.fr', 2, '2017-06-15 07:55:43', 2, 2),
(40, 'ROLLAND ep POTTIER', 'Marie', '1976-03-01', 'marie@progweb.fr', 3, '2017-06-15 07:55:43', 2, 3),
(41, 'SAMPAIO de FONSECA', 'Gabriela', '1976-05-01', 'gabriela@progweb.fr', 4, '2017-06-15 07:55:43', 2, 4),
(42, 'SCHMUTZ', 'Anne', '1976-06-01', 'anne@progweb.fr', 5, '2017-06-15 07:55:43', 2, 1),
(43, 'THIELLO', 'Ibrahima', '1976-07-01', 'ibrahima@progweb.fr', 2, '2017-06-15 07:55:43', 2, 3),
(44, 'VINCENTE', 'Demetrio', '1976-08-01', 'demetrio@progweb.fr', 3, '2017-06-15 07:55:43', 2, 4),
(45, 'YIM', 'Anne-Marie', '1976-09-01', 'anne-marie@progweb.fr', 5, '2017-06-15 07:55:43', 2, 4),
(100, 'ARROYO OLALLA', 'Alvaro', '1982-01-01', 'alvaro.arol@gmail.com', 2, '2017-06-15 09:19:31', 6, 1),
(101, 'FERNANDES LIMA', 'Johnny', '1982-02-01', 'mr.johnnylima@gmail.com', 3, '2017-06-15 09:19:31', 6, 2),
(102, 'JESUS PEREIRA', 'Kevin', '1982-03-01', 'jesus.kevin93@hotmail.com', 4, '2017-06-15 09:19:31', 6, 3),
(103, 'KLOKOWSKI', 'Michal', '1982-04-01', 'michal.klokowski@gmail.com', 5, '2017-06-15 09:19:31', 6, 1),
(104, 'LOPES DO NASCIMENTO', 'Dany', '1982-05-01', 'd-lo@outlook.de', 2, '2017-06-15 09:19:31', 6, 2),
(105, 'LOPEZ DONATO', 'Jonathan', '1982-06-01', 'mrshantwo@gmail.com', 3, '2017-06-15 09:19:31', 6, 3),
(106, 'MURTEIRA', 'Vitor', '1982-07-01', 'vitormurteira@netcabo.pt', 4, '2017-06-15 09:19:31', 6, 1),
(107, 'OLIVEIRA DOS SANTOS', 'André', '1982-08-01', 'anoliveiasa@hotmail.com', 5, '2017-06-15 09:19:31', 6, 2),
(108, 'RIES', 'Bryan', '1982-09-01', 'bryan-ries@hotmail.com', 2, '2017-06-15 09:19:31', 6, 3),
(109, 'SIMON', 'Vassili', '1982-10-01', 'vassili.simon@gmail.com', 3, '2017-06-15 09:19:31', 6, 1),
(110, 'VIDEIRA FERNANDES', 'Alcino Mickael', '1982-11-01', 'mickael.fernandes@outlook.fr', 4, '2017-06-15 09:19:31', 6, 2),
(111, 'BENOMAR', 'Julien', '1982-12-01', 'jb@theseeconsulting.com', 5, '2017-06-15 09:19:31', 6, 3),
(112, 'ROSSIGNOL', 'Sophie', '1983-01-01', 'sophie-rossignol@sfr.fr', 2, '2017-06-15 09:19:31', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `trainer`
--

CREATE TABLE `trainer` (
  `trn_id` int(10) UNSIGNED NOT NULL,
  `trn_lastname` varchar(64) DEFAULT NULL,
  `trn_firstname` varchar(32) DEFAULT NULL,
  `trn_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city_cit_id` int(10) UNSIGNED NOT NULL,
  `speciality_spe_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `trainer`
--

INSERT INTO `trainer` (`trn_id`, `trn_lastname`, `trn_firstname`, `trn_inserted`, `city_cit_id`, `speciality_spe_id`) VALUES
(1, 'MARTY', 'Igor', '2017-06-15 07:55:43', 5, 1),
(2, 'CORDIER', 'Benjamin', '2017-06-15 07:55:43', 6, 2),
(3, 'POSLEDNIK', 'Jérôme', '2017-06-15 07:55:43', 5, 3),
(4, 'HERMANN', 'Christophe', '2017-06-15 07:55:43', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `training`
--

CREATE TABLE `training` (
  `tra_id` int(10) UNSIGNED NOT NULL,
  `tra_name` varchar(64) DEFAULT NULL,
  `tra_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `training`
--

INSERT INTO `training` (`tra_id`, `tra_name`, `tra_inserted`) VALUES
(1, 'Fit4Coding Esch-Belval', '2017-06-15 07:55:43'),
(2, 'Webforce3-Numericall Piennes', '2017-06-15 07:55:43');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `usr_id` int(10) UNSIGNED NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_password` varchar(128) NOT NULL,
  `usr_date_creation` datetime NOT NULL,
  `usr_token` varchar(32) NOT NULL,
  `usr_role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`usr_id`, `usr_email`, `usr_password`, `usr_date_creation`, `usr_token`, `usr_role`) VALUES
(1, 'asdf@asdf.com', '$2y$10$xA1HN8cewz5kcLRSYscOq.Yu6DaUWy8drE2qGdegWO6BtQN3M9Sc2', '2017-07-06 16:57:10', '', ''),
(7, 'aaa@aaa.com', '$2y$10$fWjVkqsQieVJh60AeZAlzeZm8f3tjfadUU9BuIWsVRPs.d9cM4jna', '2017-07-07 11:52:17', 'test recover', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cit_id`),
  ADD KEY `fk_city_country1_idx` (`country_cou_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cou_id`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`),
  ADD KEY `fk_location_country1_idx` (`country_cou_id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`ses_id`),
  ADD KEY `fk_session_location1_idx` (`location_loc_id`),
  ADD KEY `fk_session_training1_idx` (`training_tra_id`);

--
-- Index pour la table `session_has_trainer`
--
ALTER TABLE `session_has_trainer`
  ADD PRIMARY KEY (`session_ses_id`,`trainer_trn_id`),
  ADD KEY `fk_session_has_trainers_trainers1_idx` (`trainer_trn_id`),
  ADD KEY `fk_session_has_trainers_session1_idx` (`session_ses_id`);

--
-- Index pour la table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`spe_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `fk_student_session_idx` (`session_ses_id`),
  ADD KEY `fk_student_city1_idx` (`city_cit_id`);

--
-- Index pour la table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trn_id`),
  ADD KEY `fk_trainers_city1_idx` (`city_cit_id`),
  ADD KEY `fk_trainer_speciality1_idx` (`speciality_spe_id`);

--
-- Index pour la table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`tra_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `cit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `cou_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `ses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `spe_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT pour la table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `training`
--
ALTER TABLE `training`
  MODIFY `tra_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
