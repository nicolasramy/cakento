-- Adminer 3.3.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `milestones`;
CREATE TABLE `milestones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `due` date NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `milestones` (`id`, `name`, `due`, `project_id`, `status`, `created`, `modified`) VALUES
(1,	'Emailing',	'2011-10-23',	1,	0,	'2011-10-23 12:57:18',	'2011-10-23 12:57:18'),
(2,	'Intégration',	'2011-10-23',	1,	0,	'2011-10-23 12:57:30',	'2011-10-23 12:57:30'),
(3,	'Audit',	'2011-10-24',	1,	0,	'2011-10-23 17:35:53',	'2011-10-23 17:35:53'),
(4,	'Arborescence du site',	'2011-10-22',	2,	0,	'2011-10-23 22:12:52',	'2011-10-23 22:12:52');

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL,
  `reference` varchar(8) NOT NULL,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `due` date NOT NULL,
  `budget` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `projects` (`id`, `status`, `reference`, `name`, `title`, `due`, `budget`, `created`, `modified`) VALUES
(1,	0,	'211-102',	'211-102 : Elle Voyance',	'Elle Voyance',	'2011-10-24',	8,	'2011-10-23 12:48:07',	'2011-10-23 12:46:00'),
(2,	0,	'211-071',	'211-071 : Aide Séduction',	'Aide Séduction',	'2011-11-07',	24,	'2011-10-23 12:56:37',	'0000-00-00 00:00:00'),
(3,	0,	'211-100',	'211-100 : La Créaterie',	'La Créaterie',	'2011-10-23',	0,	'2011-10-23 13:14:00',	'2011-10-23 13:14:00');

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `due` date NOT NULL,
  `description` text NOT NULL,
  `assignation` text NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `name`, `due`, `description`, `assignation`, `milestone_id`, `status`, `created`, `modified`) VALUES
(1,	'horo-q',	'2011-10-23',	'',	'',	1,	0,	'2011-10-23 12:58:39',	'2011-10-23 12:58:00'),
(2,	'Définir la navigation',	'2011-10-22',	'',	'',	4,	0,	'2011-10-23 22:28:18',	'2011-10-23 22:28:18'),
(3,	'cons1',	'2011-10-22',	'',	'',	1,	1,	'2011-10-23 22:29:03',	'2011-10-23 22:29:03'),
(4,	'cons2',	'2011-10-22',	'',	'',	1,	1,	'2011-10-23 22:29:14',	'2011-10-23 22:29:14'),
(5,	'pres-emv',	'2011-10-22',	'',	'',	1,	1,	'2011-10-23 22:29:31',	'2011-10-23 22:29:31'),
(6,	'prop-2m',	'2011-10-22',	'',	'',	1,	1,	'2011-10-23 22:29:46',	'2011-10-23 22:29:46');

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `begin` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `password`, `email`, `status`, `created`, `modified`) VALUES
(1,	'nicolas.ramy',	'4edad94aec6935d7ed415f0c98781251',	'nicolas.ramy@darkelda.com',	1,	'2011-10-23 12:18:05',	'2011-10-23 12:21:37');

-- 2011-10-23 23:04:29
