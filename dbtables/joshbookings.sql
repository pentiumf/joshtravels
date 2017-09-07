# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: us-cdbr-iron-east-05.cleardb.net (MySQL 5.6.36-log)
# Database: heroku_40ae5fe7cb98458
# Generation Time: 2017-09-07 12:22:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table joshbookings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `joshbookings`;

CREATE TABLE `joshbookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` int(10) unsigned NOT NULL,
  `bookingdetail_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `joshbookings_bookingdetail_id_index` (`bookingdetail_id`),
  KEY `joshbookings_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `joshbookings` WRITE;
/*!40000 ALTER TABLE `joshbookings` DISABLE KEYS */;

INSERT INTO `joshbookings` (`id`, `package_id`, `bookingdetail_id`, `created_at`, `updated_at`, `user_id`)
VALUES
	(1,1,1,'2017-08-22 01:28:33','2017-08-22 01:28:33',1),
	(11,11,11,'2017-08-22 08:54:32','2017-08-22 08:54:32',11),
	(21,11,21,'2017-08-22 09:31:10','2017-08-22 09:31:10',NULL),
	(31,11,31,'2017-08-30 16:42:47','2017-08-30 16:42:47',NULL),
	(41,11,41,'2017-08-30 17:44:36','2017-08-30 17:44:36',NULL);

/*!40000 ALTER TABLE `joshbookings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
