# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: us-cdbr-iron-east-05.cleardb.net (MySQL 5.6.36-log)
# Database: heroku_40ae5fe7cb98458
# Generation Time: 2017-09-07 12:21:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table packages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `packages`;

CREATE TABLE `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depature_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `package_category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `packages_package_category_id_index` (`package_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;

INSERT INTO `packages` (`id`, `name`, `price`, `destination`, `overview`, `description`, `duration`, `depature_date`, `end_date`, `photo`, `created_at`, `updated_at`, `package_category_id`)
VALUES
	(1,'Statue of Liberty','$500','United States','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','30 Days','10th may 2017','30th may 2017','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504605029/mzbqblqftrnuwon5bdzy.jpg','2017-08-22 01:20:00','2017-09-05 09:50:30',1),
	(11,'Dubai Tour','$9000','Dubai','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','22 days','20th April 2018','1st November 2017','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504604828/d7rdsb9komycssemkhoz.jpg','2017-08-22 08:49:42','2017-09-05 09:47:08',1),
	(21,'Aburi Gardens / Boti Falls','None','Aburi Botanical Gardens','The tour begins at 7:30 am with departure from the lobby of your hotel. You will arrive at Boti Falls at approximately 9:00 am. The tour proceeds on to Aburi Botanical Gardens where you will tour the gardens. You will take your lunch in the Garden’s restaurant.   After lunch, there will be an opportunity to purchase woodcarvings from the Aburi wood carvers along the return road.  The expected time of return to the hotel is 16:00.','Boti Falls\r\nThis spectacular waterfall is situated in the Eastern Region of Ghana, embedded at the heart of the forest reserve at Huhunya, which is about 17km North-East of Koforidua, the regional capital. It is seasonal with cascades in the immediate surrounding areas. It is fed by the River Pawnpawn and is best enjoyed between June - August, during the rainy season. In the immediate vicinity of the falls are caves, cascades, and an \"umbrella\" rock worth exploring.\r\n\r\nAburi Botanical Gardens\r\nThe Aburi Botanical Gardens is one of the most beautiful, peaceful and fascinating places in Ghana. Opened in March, 1890, and covering 64.8 hectares and overlooking the Accra coastal plain from an elevation of 370 to 460 meters above sea level, the Aburi Botanical Gardens is a must experience for every Ghanaian as well as visitors to Ghana. Situated in the town of Aburi, which is well-known for its healthy climate, the gardens also have pleasant indoor-outdoor restaurants and facilities for staying overnight.\r\n\r\nPrice and Registration\r\nThe cost for this full day Tour inclusive of air-conditioned transportation, guide and lunch is:  $150 per person minimum 5 persons; $130 for 10 persons or more.\r\n\r\nJosh Travels Tours reserve the right to make necessary changes to the itinerary or services, to substitute vehicles, or to cancel any tour at its own discretion.  Tour price is based on prices and currency rates at time of printing.  If subsequent changes occur in any of the above, Josh Travels Tours reserve the right to modify the price of the tour accordingly.','1 Day','TBA','TBA','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504136851/svytxespfxrxlwhvr5zz.jpg','2017-08-30 23:47:32','2017-08-30 23:47:32',2),
	(31,'Cape Coast Castle and Kakum Park','none','Cape Coast','The tour begins at approximately 7:00 am with a departure from the lobby of your hotel with an arrival at Kakum National Park at approximately 10:30 am. The visit to Kakum National Park is followed by lunch at a restaurant overlooking the ocean and fishing boats of the area.  After lunch, there will be a two hour tour of the Coast Castle and the West African Historical Museum that includes a film and gift shop experience.  You can expect to return back to the hotel at approximately 19:00.','Cape Coast Castle : \r\nCape Coast Castle is a UNESCO World Heritage site, as are the two forts in neighbouring Elmina.  While constructed by the Swedes in 1653, and fought over by several European powers during the slave trade era, the Castle and its dungeons became the centre of English administration of the Gold Coast until the capital moved to Accra in 1877, and only changed hands again at Ghana\'s independence in 1957.\r\n\r\nKakum Park:\r\nLocated in Kakum National Park in the Central Region of Ghana is Africa\'s only canopy walkway suspended 100 feet above the ground, offering you what is truly a bird\'s eye view of the rainforest. At this height, you don\'t have to be an expert to identify the colorful patterns of tropical birds as they glide through the forest below you. \r\nYou don\'t even have to climb to get onto the walkway. It starts at ground level, and as you walk along, the land below you slopes into a valley, and you find yourself twelve stories up in the forest canopy. The horseshoe-like pattern of bridges — made of steel cable, netting, and narrow wooden planks — are connected by tree platforms that serve as observation points for viewing the rainforest. You circle back to complete your tour on \r\nAmong other species, more than 300 kinds of birds and about 550 types of butterflies make their home in the forest canopy, and many of the canopy\'s inhabitants have never set foot on the forest floor. You can hear the distant rustling of leaves as a troop of monkeys travel through the canopy, but don\'t expect to see them. Kakum\'s mammals are known to be extremely elusive.\r\nThe cost the all day Tour inclusive of air-conditioned transportation, guide and lunch is:  $150per person minimum 5 persons.  $130 for 10 persons or more.','1 Day','TBA','TBA','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504161343/ceeota6khmf5qtfjuaid.jpg','2017-08-31 06:35:44','2017-08-31 06:35:44',2),
	(41,'Specialty Shopping Tour','None','Accra, Ghana','The tour begins after breakfast at approximately 8:30 with a departure from the lobby of your hotel and a visit to the Arts Center Bazaar in the Center for National Culture for a general gift shopping experience.   You see on display the popular “Kente clothe, fabrics, carvings, leather goods and jewelry, as well as a host of other souvenir items.','The Art Center Visit will be followed by fabric shopping at Woodin and Mercy Ocansey’s shops in Osu, the shopping, restaurant and nightlife center of Accra.  Woodin is famous for its beautiful print fabrics and Mercy Ocansey is famous for her tie and dye patterns.  While in Osu, there is also the opportunity to purchase gold jewelry and choose from a selection of other designer specialty shops in the area.\r\nThe morning shopping will be followed by lunch as the group will choose from several good restaurants in Osu.\r\nAfter lunch, the shopping continues at Mawuli Okujeto’s (MKOGH), one of Accra’s premier designers for clothing items that can be purchased off the rack.  If there is interest, this portion of the trip will also include Sun Trade Beads designer beads jewelry), Blazing Gear (specialty t-shirts and jerseys) and Asha Fabrics (clothing and fabric).\r\nThe final stop of the tour is Wild Gecko gift shopping for slightly upscale gift items from Ghana and various parts of Africa.  Depending on time there will be an opportunity to relax for a drink or additional shopping at Accra’s newest shopping mall that includes Game, Shop rite and other specialty stores.\r\nPrice and Registration :\r\nThe cost the all day “Specialty Shopping Tour” inclusive of air-conditioned transportation, guide and lunch is:  $50 per person minimum 5 persons.  $40 per person for 10 persons or more.','1 Day','TBA','TBA','https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504161913/yyudrawjoho6ryxhkznh.jpg','2017-08-31 06:45:14','2017-08-31 06:45:14',2);

/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
