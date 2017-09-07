# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: us-cdbr-iron-east-05.cleardb.net (MySQL 5.6.36-log)
# Database: heroku_40ae5fe7cb98458
# Generation Time: 2017-09-07 12:24:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bookingdetails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookingdetails`;

CREATE TABLE `bookingdetails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `passport_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bookingdetails_user_id_index` (`user_id`),
  KEY `bookingdetails_country_id_index` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `bookingdetails` WRITE;
/*!40000 ALTER TABLE `bookingdetails` DISABLE KEYS */;

INSERT INTO `bookingdetails` (`id`, `user_id`, `name`, `email`, `contact_number`, `postal_address`, `country_id`, `passport_info`, `created_at`, `updated_at`)
VALUES
	(1,1,'Nicksw','swaggarnick@gmail.com','0574825506','North Ridge',107,'0000000','2017-08-22 01:28:33','2017-08-22 01:30:50'),
	(11,11,'Kofi','kofi@gmail.com','0206389020','North Ridge',81,'367736373','2017-08-22 08:54:32','2017-08-22 08:54:32'),
	(21,NULL,'akosua serwaa','akosona@yahoo.com','0244033055','at 266 achimota',81,'g01234567','2017-08-22 09:31:10','2017-08-22 09:31:10'),
	(31,NULL,'Pakorankin','kon.vit0@yahoo.com','0206389020','North Ridge',5,'73838837','2017-08-30 16:42:47','2017-08-30 16:42:47'),
	(41,NULL,'Nicky Mattews','nicky@gmail.com','0456789065','Sakunono Yathp',73,'73838837','2017-08-30 17:44:35','2017-08-30 17:44:35');

/*!40000 ALTER TABLE `bookingdetails` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
