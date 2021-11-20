-- MySQL dump 10.13  Distrib 5.7.35, for Linux (x86_64)
--
-- Host: localhost    Database: stronghold
-- ------------------------------------------------------
-- Server version	5.7.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (17,'Огнезащитные плиты','fire-retardant-plates','Огнезащитные плиты для любых решений конструктивной огнезащиты: промышленное строительство и частное домостроение.','categories/2021-11-14-17:44:44-1636911884.jpg','2021-11-14 15:10:50','2021-11-14 17:44:44'),(18,'Сыпучие материалы','bulk-materials','Сыпучие материалы минерального происхождения (неорганические), добываемые из горных пород различными методами и применяемые практически во всех областях строительной отрасли.','categories/2021-11-14-17:45:12-1636911912.png','2021-11-14 15:11:42','2021-11-14 17:45:12'),(19,'Жидкие составы','liquid-formulations','Жидкие составы - Конструктивная огнезащита. Огнезащитные материалы. Огнезащитная краска. Огнезащитный лист Tehstrong','categories/2021-11-14-17:45:17-1636911917.png','2021-11-14 15:12:39','2021-11-14 17:45:17'),(20,'Сопутствующие материалы','related-materials','Сопутствующие материалы - Конструктивная огнезащита. Огнезащитные материалы. Огнезащитная краска.','categories/2021-11-14-17:45:22-1636911922.jpeg','2021-11-14 15:13:18','2021-11-14 17:45:22');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2019_12_14_000001_create_personal_access_tokens_table',1),(3,'2021_11_01_101501_create_products_table',1),(4,'2021_11_01_102529_create_categories_table',1),(5,'2021_11_03_145821_create_orders_table',1),(6,'2021_11_03_151511_create_order_product_table',1),(7,'2021_11_03_180734_update_order_product_table',1),(8,'2021_11_05_141405_alter_table_users',1),(9,'2021_11_06_084626_alter_table_orders',1),(11,'2021_11_07_140244_alter_table_products',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL DEFAULT '1',
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (4,2,2,2,'2021-11-07 11:20:38','2021-11-07 11:21:01'),(5,1,3,2,'2021-11-07 12:10:51','2021-11-07 12:10:51'),(6,1,4,2,'2021-11-08 20:59:32','2021-11-08 20:59:32'),(7,2,5,3,'2021-11-09 17:10:29','2021-11-09 17:30:43'),(13,1,8,6,'2021-11-14 18:38:14','2021-11-14 18:38:14'),(14,1,9,6,'2021-11-14 18:40:08','2021-11-14 18:40:08'),(16,1,10,7,'2021-11-14 18:43:11','2021-11-14 18:43:11'),(18,1,11,7,'2021-11-14 18:56:37','2021-11-14 18:56:37'),(20,2,12,11,'2021-11-14 18:58:29','2021-11-14 18:58:32'),(21,1,12,6,'2021-11-14 18:58:37','2021-11-14 18:58:37'),(22,1,13,7,'2021-11-14 19:00:55','2021-11-14 19:00:55'),(24,1,14,7,'2021-11-20 07:54:21','2021-11-20 07:54:21');
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (10,1,'Кирилл','8 (977) 252-91-85','2021-11-14 18:42:44','2021-11-14 18:43:18',NULL),(11,1,'Kirill Sasyk','89772529185','2021-11-14 18:56:13','2021-11-14 18:56:43',NULL),(12,1,'Kirill Sasyk','89772529185','2021-11-14 18:58:09','2021-11-14 18:58:45',NULL),(13,1,'Kirill Sasyk','89772529185','2021-11-14 19:00:55','2021-11-14 19:01:01',6),(14,0,NULL,NULL,'2021-11-20 07:54:05','2021-11-20 07:54:05',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '0',
  `hit` tinyint(4) NOT NULL DEFAULT '0',
  `recommend` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,'GB-Panel','gb-panel',17,'products/2021-11-14-17:48:21-1636912101.png','Плита огнезащитная GB-P (Италия) используется для производства огнестойких проходок.\r\n\r\nОгнестойкие плиты GB-P используются при монтаже огнестойких проходок в местах проложения кабельной продукции или шинопроводов через перегородки и перекрытия.\r\n\r\nПлита GB-P состоит из минерального волокна высокой плотности (~80 кг/м3) с нанесенным на обе стороны огнестойким покрытием.\r\n\r\nПрименение огнестойких проходок позволяет замедлить распространение пожара и обеспечивает стабильную работу систем пожаротушения, других инженерных систем, а также время, необходимое для эвакуации из здания.',1900,'2021-11-14 15:28:49','2021-11-14 18:15:42',1,0,0),(6,'FirePlat','plita-ognezashchitnaya-tehstrong-fireplat',17,'products/2021-11-14-17:48:27-1636912107.png','Крупноформатная и самонесущая минеральная плита, изготавливается на основе силиката кальция с целевыми добавками. Не содержит асбест.\r\nПлита «TEHSTRONG FirePlat» имеет светло-серый цвет, одна сторона фактурная.\r\nУстойчива к воздействию влаги, может применяться в сухих и влажных помещениях, но не в помещениях с постоянной сыростью. Качество продукции контролируется на всех этапах производства.',5403,'2021-11-14 16:01:43','2021-11-14 17:48:27',0,0,0),(7,'FireSTOP H','FireSTOP H',17,'products/2021-11-14-17:48:32-1636912112.jpeg','Крупноформатная и самонесущая минеральная плита на магнезиальном вяжущем, с наполнителем из минеральных компонентов, перлита и микросферы алюмосиликатной с целевыми добавками, улучшающими технические характеристики.\r\nОгнезащитная плита “TEHSTRONG FIRESTOP H” обладает высокой прочностью, влагостойкостью. Имеет твердую лицевую поверхность.\r\nКачество продукции контролируется на всех этапах производства.',6373,'2021-11-14 16:02:52','2021-11-14 17:48:32',0,0,1),(8,'Огнезащитный напыляемый состав F62 SPRAY','ognezashchitnyy-napylyaemyy-sostav-f62-spray',19,'products/2021-11-14-17:48:50-1636912130.png','Огнезащитный состав «F62 SPRAY» представляет собой сухую строительную штукатурную смесь заводского изготовления, выпускаемую на гипсовом вяжущем с модифицирующими добавками, заполнителями и наполнителями (вермикулит, перлит). Затворяется водопроводной водой.',3420,'2021-11-14 16:09:15','2021-11-14 17:49:26',0,0,1),(10,'Адгезионный грунт F62 PRIMER','adgezionnyy-grunt-f62-primer',18,'products/2021-11-14-17:50:30-1636912230.png','Адгезионный грунт (праймер) «F62 PRIMER» представляет собой лакокрасочный материал на основе водной дисперсии акриловых смол с пластификаторами, катализаторами и другими добавками, не содержит алкилфенолэтоксилатов (АРЕО). Грунт готов к применению.',178,'2021-11-14 16:13:40','2021-11-14 18:14:34',0,1,0),(11,'Кожух огнезащитный Tehstrong KO','kozhukh-ognezashchitnyy-tehstrong-ko',20,'products/2021-11-14-17:49:37-1636912177.jpg','Кожух огнезащитный Tehstrong KO применяется в решениях компании Техстронг для огнезащиты открытой части шпилек.',350,'2021-11-14 16:15:07','2021-11-14 17:49:37',0,0,1),(12,'Панель ТЕХСТРОНГ C','panel-tekhstrong-c',20,'products/2021-11-14-18:23:25-1636914205.png','Панель «ТЕХСТРОНГ С» – конструкция типа «сэндвич», состоящая из стального П-образного профиля, обшитого с обеих сторон огнезащитными плитами «FIREGUARD», полость заполнена базальтовой ватой.',6599,'2021-11-14 18:23:25','2021-11-14 18:23:25',0,0,0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Kirill Sasyk','unknownlurk@yandex.ru',NULL,'$2y$10$MquXTVjPvgA4t8GsSCb5OuuBqIulfBjWBopSeC/2R2i2V5GHzn5YC',NULL,'2021-11-06 12:46:31','2021-11-06 12:46:31'),(3,1,'Администратор','admin@admin.com',NULL,'$2y$10$R6BpqmsUh5xIKPU5z.yicOBurVwC26nq50ZV1qhgfI5y2TJn7NwyS',NULL,NULL,NULL),(6,0,'Kirill Sasyk','unknownsomebody@yandex.ru',NULL,'$2y$10$2AYVQWLg.X3FjMDaNjhu/eQAgTym7RR0uf3sNBcB96rbwGScjbYsO',NULL,'2021-11-14 19:00:46','2021-11-14 19:00:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-20  8:08:10
