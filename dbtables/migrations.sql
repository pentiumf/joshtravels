# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: us-cdbr-iron-east-05.cleardb.net (MySQL 5.6.36-log)
# Database: heroku_40ae5fe7cb98458
# Generation Time: 2017-09-07 12:26:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(11,'2014_10_12_100000_create_password_resets_table',1),
	(21,'2017_08_08_171609_create_roles_table',1),
	(31,'2017_08_08_171902_add_role_id_to_users_table',1),
	(41,'2017_08_14_160509_create_packages_table',1),
	(51,'2017_08_14_162401_create_packageimages_table',1),
	(61,'2017_08_15_105536_create_joshbookings_table',1),
	(71,'2017_08_15_105623_create_amadeusbookings_table',1),
	(81,'2017_08_15_105709_create_amadeuscategories_table',1),
	(91,'2017_08_15_110736_create_customers_table',1),
	(101,'2017_08_15_113357_create_countries_table',1),
	(111,'2017_08_15_134119_add_email_to_customers_table',1),
	(121,'2017_08_15_134630_add_userid_to_jsohbookings_table',1),
	(131,'2017_08_15_144449_create_bookingdetails_table',1),
	(141,'2017_08_28_140247_create_package_categories_table',2),
	(151,'2017_08_28_140800_add_package_category_id_to_package_table',2),
	(161,'2017_08_31_144939_create_staff_table',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
