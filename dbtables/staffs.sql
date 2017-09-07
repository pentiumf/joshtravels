# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: us-cdbr-iron-east-05.cleardb.net (MySQL 5.6.36-log)
# Database: heroku_40ae5fe7cb98458
# Generation Time: 2017-09-07 12:17:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table staff
# ------------------------------------------------------------

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualifications` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_record` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;

INSERT INTO `staff` (`id`, `name`, `profession`, `position`, `date_of_birth`, `years`, `membership`, `task`, `qualifications`, `education`, `emp_record`, `languages`, `certification`, `nationality`, `photo`, `created_at`, `updated_at`)
VALUES
	(1,'Frank Annin-Bonsu','Travel Consultant','Managing Director','March 13, 1977','5 years','N/A','Management of the overall day-to-day business affairs- Administration and Finance','BSc. Management with Computing','Regent University College','Starline Travel and Tours Ltd','English and Twi','BSc. Management with Computing','Ghanaian','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504511284/bosyvfrhtx4nujj3whql.jpg','2017-09-02 20:13:51','2017-09-04 07:48:04'),
	(11,'Anita Lartey','Travel consultant','Travel Consultant','August 8, 1984','1year','N/A','Ticketing and Reservation','IATA Consultancy','College of Tourism and Hospitality','Celex Travel and Travel Places','Twi and Ga','SSCE and IATA Customer Service','Ghanaian','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504511644/ywgdmysjxtchlzws4kev.jpg','2017-09-02 20:17:07','2017-09-04 07:54:04'),
	(21,'Osei-Yeboah Danso','Administrative Office','IT and system Administrator','February 5, 1986','2 years','N/A','Oversees and administers the day-to-day activities of the office, develop policies, procedures and systems which ensure productive and efficient office operation','BSc. Business Administration (Management)','Presbyterian University College, Ghana','Ministry of Finance (Biometric Section)','English and Twi','BSc. Business Administration','Ghanaian','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504511415/nhzovw4ckd3sgmfbtcn9.jpg','2017-09-02 20:20:26','2017-09-04 07:50:16'),
	(31,'Vera Osei Akoto','Travel Consultant','Travel Consultant','July 17, 1992','4 year','N/A','Issuing ticket and Reservation and Secretarial duties','IATA Consultancy and management','Koomson Aviation School, OlA Girl Secondary School','Josh Travels','English and Twi','WASSCE and IATA Consultancy and Management','Ghanaian','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504511671/wiwysrwyw3s8fkrp1rfe.jpg','2017-09-02 20:26:14','2017-09-04 07:54:31'),
	(41,'Savior Nii Aryee','Travel Consultant','Travel Consultant (Supervisor)','April 27, 1975','3 years','N/A','Issuing of ticket, replying of emails and Preparing of daily reports','IATA Consultancy','Odorgonno Secondary School','Journey max Travel, Divine Travels','English, Twi and Ga','SSCE/IATA consultancy','Ghanaian','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504511369/oyr912dqh81liq8yrz3c.jpg','2017-09-02 20:32:06','2017-09-04 07:49:30');

/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
