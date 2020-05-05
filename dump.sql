-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: planner
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.19.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_09_28_063446_create_simple_users_table',1),(2,'2019_09_28_141639_create_tasks_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simple_users`
--

DROP TABLE IF EXISTS `simple_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simple_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simple_users`
--

LOCK TABLES `simple_users` WRITE;
/*!40000 ALTER TABLE `simple_users` DISABLE KEYS */;
INSERT INTO `simple_users` VALUES (13,'Olimjon','2019-10-07 10:50:03','2019-10-07 10:50:03'),(14,'Iskandar','2019-10-07 10:50:10','2019-10-07 10:50:10'),(15,'Izzatullo','2019-10-07 10:50:17','2019-10-07 10:50:17'),(16,'AbdulMalik','2019-10-07 10:50:23','2019-10-07 10:50:23'),(17,'Oybek','2019-10-07 10:50:30','2019-10-07 10:50:30'),(18,'Behruzjon','2019-10-07 10:50:35','2019-10-07 10:50:35'),(19,'Shamsiddin','2019-10-07 10:50:39','2019-10-07 10:50:39'),(20,'Abbos','2019-10-07 10:50:42','2019-10-07 10:50:42');
/*!40000 ALTER TABLE `simple_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `start_time_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `simple_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (28,'Logo design',16,1,5,0,1,'2019-10-12 12:15:35','2019-10-13 08:28:15'),(29,'Medin Admin Crud',18,3,8,0,0,'2019-10-12 12:20:25','2019-10-12 12:36:59'),(31,'Temp.Int Medin',14,1,0,4,0,'2019-10-12 12:27:08','2019-10-12 13:43:20'),(32,'Feedback Medin',18,1,2,6,0,'2019-10-12 12:29:30','2019-10-12 12:37:08'),(33,'Slider Medim',18,1,3,8,0,'2019-10-12 12:30:33','2019-10-12 12:30:33'),(34,'Sl.Uslugi Medin',18,1,12,10,0,'2019-10-12 12:31:17','2019-10-12 12:37:16'),(37,'Temp.Int Medin',18,1,0,4,0,'2019-10-12 12:32:37','2019-10-12 13:43:33'),(38,'CMS',13,3,3,0,0,'2019-10-12 12:33:58','2019-10-12 13:42:51'),(39,'A4/A5 Testtoday',15,3,7,0,0,'2019-10-12 13:27:41','2019-10-12 13:32:49'),(40,'Reklama Testtoday',17,3,14,0,0,'2019-10-12 13:32:06','2019-10-12 13:51:45'),(41,'Articles-Search Testtoday',17,3,13,4,0,'2019-10-12 13:34:12','2019-10-12 13:51:34'),(42,'Nav Mobile Design',13,1,4,4,0,'2019-10-12 13:39:47','2019-10-12 13:42:37'),(43,'Day off',19,3,1,0,1,'2019-10-12 13:40:22','2019-10-13 08:29:02'),(44,'Template Int. Test',14,1,9,2,1,'2019-10-12 13:41:44','2019-10-13 08:28:52'),(45,'Design Temp Sayti.uz',15,1,5,4,0,'2019-10-12 13:47:36','2019-10-12 13:47:45'),(46,'Build +Top Nav(desktop/mobile) ishlar',15,5,3,6,0,'2019-10-12 13:48:31','2019-10-12 13:48:48'),(47,'Nav Mobile Des Figma',16,1,11,2,0,'2019-10-12 13:50:17','2019-10-12 13:50:17'),(48,'Ru version Testtoday',17,3,3,8,0,'2019-10-12 13:52:25','2019-10-12 13:52:25'),(49,'CMS Integrate Sayti.uz',19,3,10,4,0,'2019-10-12 13:59:57','2019-10-12 14:17:22'),(50,'Excel by filters Testtoday',14,3,1,6,0,'2019-10-12 14:02:36','2019-10-12 14:02:36'),(51,'manage access to show results TT',16,1,9,4,0,'2019-10-12 14:05:09','2019-10-13 08:27:29'),(52,'Qabul:result by limit TT',16,1,14,6,0,'2019-10-12 14:06:40','2019-10-12 14:06:40'),(53,'in A5 generate QRcode TT',14,1,0,10,0,'2019-10-12 14:07:12','2019-10-12 14:08:09'),(54,'Order Upgrade Testtoday',16,3,9,8,0,'2019-10-12 14:07:56','2019-10-12 14:07:56'),(55,'RBAC-profile init Medin',13,1,9,6,0,'2019-10-12 14:10:21','2019-10-12 14:10:21'),(56,'DB migrations TT',20,1,4,2,1,'2019-10-12 14:15:39','2019-10-13 08:28:07'),(57,'Integrate Blog Sayti.uz',19,1,0,8,0,'2019-10-12 14:17:45','2019-10-12 14:17:45'),(58,'Integ_Article Sayti.uz',19,1,12,10,0,'2019-10-12 14:18:29','2019-10-12 14:18:41'),(59,'online test migrations',20,1,1,4,0,'2019-10-13 08:44:09','2019-10-13 08:44:09'),(60,'onl-test conf form-saving',20,3,0,6,0,'2019-10-13 08:44:40','2019-10-13 08:44:40'),(61,'find JS testing library',20,1,11,10,0,'2019-10-13 08:45:17','2019-10-13 08:45:25'),(62,'ish design mob. Index',13,1,10,8,0,'2019-10-13 08:46:56','2019-10-13 08:47:11'),(63,'ish design mob. listing-search',13,1,11,10,0,'2019-10-13 08:47:36','2019-10-13 08:47:36');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-13 18:53:00
