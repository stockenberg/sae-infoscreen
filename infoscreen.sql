-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: intern_infoscreen
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `is_announcements`
--

DROP TABLE IF EXISTS `is_announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_announcements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subheadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumni` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_announcements`
--

LOCK TABLES `is_announcements` WRITE;
/*!40000 ALTER TABLE `is_announcements` DISABLE KEYS */;
INSERT INTO `is_announcements` VALUES (1,'Diploma Abschlussfeier 416','Donnerstag 30.11.2017 ab 18:30 Uhr 4 Rooms - Täubchenweg 26',NULL,'bgBlue',0,NULL,NULL),(2,'Weihnachtsgrillen','Freitag 15.12.2017 ab 17:00 Uhr',NULL,'bgOrange',0,NULL,NULL),(3,'Praktikum Grafik-Design 2D-Animation','Picmention Video & Filmproduktion GmbH','weitere Infos bei Marten m.stockenberg@sae.edu','bgBlue',0,NULL,NULL),(11,'Web-Stammtisch','Freitag 01.12.2017 ab 21:00 Uhr im SoWieWir Karl-Liebknecht-Straße 34',NULL,'bgOrange',0,NULL,NULL);
/*!40000 ALTER TABLE `is_announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_migrations`
--

DROP TABLE IF EXISTS `is_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_migrations`
--

LOCK TABLES `is_migrations` WRITE;
/*!40000 ALTER TABLE `is_migrations` DISABLE KEYS */;
INSERT INTO `is_migrations` VALUES (2,'2017_04_26_080721_create_users_table_tdot',1),(3,'2017_11_24_101102_create_announcements_table',2);
/*!40000 ALTER TABLE `is_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_tdots`
--

DROP TABLE IF EXISTS `is_tdots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_tdots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_tdots`
--

LOCK TABLES `is_tdots` WRITE;
/*!40000 ALTER TABLE `is_tdots` DISABLE KEYS */;
INSERT INTO `is_tdots` VALUES (1,'Bildretusche mit Photoshop','In der Präsentation werden grundlegende Techniken der digitalen Bildbearbeitung in der Software Adobe Photoshop vorgestellt.','15:15','web','5','Tom Zwicker',0),(2,'Vorführung Steadicam & RED-Kamera\n','Wir zeigen das Berufsbild des Steadicam Opperators. Mit dem körpergestützen Schwebestativ können ruhige Kamerafahrten realisiert werden. \n\nZudem wird die digitale Filmkamera RED Scarlet-X vorgestellt. Der erste Kameraassistent zieht dabei die Schärfe.','13:45','film','Anbau','Steffen Bendix & Philipp Gründig',0),(3,'Gameart Pipeline','Du bekommst Einblicke in den Bereich der Computerspiele-Entwicklung und erfährst wie 3D Grafiken für Spiele erstellt werden.','14:00','game','Raum 3','Jim Düwel',1),(4,'Info-Volresung zur Crossmedia Industrie','Unser Dozent zeigt und erklärt den Umgang mit professionellen Spiegelreflexkameras. Du bekommst Einblicke in die Verwendung von Optiken und Einstellungen','15:15','cross','5','Diana Alfs',0),(5,'Sound Design für Film','Erhalten Sie einen Einblick in professionelles Sounddesign. Von der Geräuscherstellung bis zum fertigen Surround Mix.','16:00','audio','C24','André Klar',0),(6,'Quick Look Unity','In der Präsentation dreht sich alles um die Game Engine Unity. Du bekommst Einblicke in die wichtigsten Prozesse in der Benutzung der Engine.','16:00','5','5','MIchael Zöller',0),(7,'Cross-Media Production: Studiengangs-Profil','Die Präsentation bietet dir Informationen aus erster Hand zum Studiengang Cross-Media Production & Publishing. Du bekommst Einblicke in die Inhalte und den Ablauf.','16:30','2','5','Catharina Pfeffer',0),(8,'Responsive Webdesign','In der Präsentation erfährst du Wissenwertes rund um das Thema Summieren innerhalb einer Musikproduktion. Anhand einer Session wird der Unterschied zwischen analogen und digitalen Summieren erläutert.\n','13:00','1','4','Torsten Rödel',0),(9,'Kamera Assistenz','Unser Dozent Philipp Gründig gibt Einblicke in das Berufsbild des Kamera-Assistenten.','13:45','film','Anbau','Philipp Gründig',0),(10,'Computerspiel-Entwicklung','Du bekommst Einblicke in den Bereich der Computerspiel-Entwicklung. Wichtige Bestandteile dieser Disziplin sind das Prototyping und Asset Creation.','14:30','game','Raum 1','Andreas Höntsch',0),(11,'HDR Bilderstellung','High Dynamic Range ist eine Technik der Bildbearbeitung, welche die natürliche Wahrnehmung von Bildern im menschlichen Auge simuliert.','16:30','2','5','Andreas Höntsch',0),(12,'Analoger Mixdown über das Mischpult \"Neve VR\"','Hier erhältst du Einblicke in den Workflow eines analogen Mixdowns.','16:00','audio','Neve VR Studio','Leo Baron',0),(13,'Informationen Music Business','Unser Fachbereichs Leiter Music Business, Martin Schlimpert, gibt detailierte Antworten zu Fragen über unseren neuen Fachbereich Music Business. Ab September 2016 auch in Leipzig.','15:00','mubi','Raum 3','Martin Schlimpert',0),(14,'In 30 Minuten zur eigenen Webseite','Der Dozent stellt das CMS Wordpress vor und zeigt, wie man in 30 Minuten seine eigene Webseite auf die Beine stellen kann.','15:15','2','5','Marten Stockenberg',0),(15,'Bildretusche = Manipulation?!','Mit den modernen Mitteln der Bildbearbeitung kann man mit wenig Aufwand und moderaten Kenntnissen die Aussage von Bildern komplett verändern.','15:15','2','5','Tom Zwicker',0),(16,'Webdesign & Development: Vorstellung des Studiengangs','Eine kurze Einführung in das Studium und die Arbeit als Web Entwickler.','13:00','web','Raum 3','Marten Stockenberg',0),(17,'Blogging in 30 Minuten','Du erfährst, wie schnell und unkompliziert du zu deiner eigenen Website kommst - vorgestellt wird das CMS Wordpress.','13:00','2','5','Marten Stockenberg',0),(18,'Finanzierung und Förderung','Überblick über Förder- und Finanzierungsmöglichkeiten.','14:30','','Raum 4','Mike Berus',1),(19,'Digital Film Production','Hier bekommt ihr einen Überblick über die Lehrinhalte des Film Fachbereichs','13:45','film','Anbau','Philipp Gründig',1),(20,'Professionelle Musikproduktion ','In diesem Workshop erfahrt ihr den Produktions-Workflow mit zwei synchronisierten Computersystemen.   ','16:00','audio','Studio 3 - Tascam','Frank Oberländer',1);
/*!40000 ALTER TABLE `is_tdots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_users`
--

DROP TABLE IF EXISTS `is_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_users`
--

LOCK TABLES `is_users` WRITE;
/*!40000 ALTER TABLE `is_users` DISABLE KEYS */;
INSERT INTO `is_users` VALUES (1,'admin','$2y$10$U0npXw6UnxY4P164p7crpO3OQ.WwXqZ2TgdJ3yUPtoqwcYCWGUAvC','lq4PjnzpvcpFWBmKIFBXupRjGywrBXrMFYCBs8jBlNIW2WzmKI0ErbpLAxeU','2017-04-26 07:30:53','2017-04-26 07:30:53'),(2,'test','$2y$10$v4GeASHRHKMixUJsZQNqUuYvMkNaCm6Dz/52wCP/lXaehGSM5UDv.','PydJuvoYiew4kJ3WIliOlNMPPcnrgxQXaVqVfVQx8zoDq5XvqNQXXmGnldoj','2017-04-26 07:49:11','2017-04-26 07:49:11'),(3,'test2','$2y$10$Fti6fDX/z6TLBzD5d/oxwuNFAlvfEUMn5PKz.aXZpuHc5Mcu3vmOa','9YiZ0uZ6aXWlqVDmOAbEiMJI086du6hDhh0tJyJ3BK8d5grhTlYmQnVcf6K1','2017-04-26 07:57:30','2017-04-26 07:57:30'),(4,'test3','$2y$10$U.fKZMMlmm2KyKFsD7Zk/uiiXrwbEWfwuZl.i3P0QUe7NB8MMSQXa','UAwa4Ol0mUUSt3SIKpGX9t7lh97CAhCWgi8L8CNIsQDmNoEOBlPjjiUPTugy','2017-04-26 07:58:30','2017-04-26 07:58:30');
/*!40000 ALTER TABLE `is_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-28 11:12:20
