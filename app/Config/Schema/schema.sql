

DROP TABLE IF EXISTS `cake_test`.`posts`;
DROP TABLE IF EXISTS `cake_test`.`users`;


CREATE TABLE `cake_test`.`posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`user_id` int(11) DEFAULT NULL,
	`slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cake_test`.`users` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

