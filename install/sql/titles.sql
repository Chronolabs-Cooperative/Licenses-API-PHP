-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: licenses-localhost
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.17.10.1

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
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titles` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `quotes` int(8) unsigned NOT NULL DEFAULT '0',
  `licenses` int(8) unsigned NOT NULL DEFAULT '0',
  `sightings` int(8) unsigned NOT NULL DEFAULT '0',
  `signings` int(8) unsigned NOT NULL DEFAULT '0',
  `versions` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(12) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titles`
--

LOCK TABLES `titles` WRITE;
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` VALUES (1,'Chronolabs Coop General Software License',0,1,0,0,0,1518125325),(2,'Chronolabs Coop End User License',0,1,0,0,0,1518125435),(3,'Academic Public License',0,1,0,0,0,1518125589),(4,'General Public License',0,2,0,0,0,1518126105),(5,'Lesser General Public License',0,2,0,0,0,1518126465),(6,'Affero General Public License',0,1,0,0,0,1518126777),(7,'Apache License',0,3,0,0,0,1518127027),(8,'The Artistic License',0,2,0,0,0,1518127505),(9,'Boost Software License',0,1,0,0,0,1518127912),(10,'XFree86 Project Licence',0,0,0,0,0,1518128083),(11,'Creative Common Zero (CC0)',0,0,0,0,0,1518128369),(12,'CeCILL',0,3,0,0,0,1518128819),(13,'Cryptix General License',0,1,0,0,0,1518129407),(14,'The eCos license',0,1,0,0,0,1518129534),(15,'Eiffel Forum License',0,1,0,0,0,1518129647),(16,'Massachusetts Institute of Technology License',0,1,0,0,0,1518130051),(17,'The Independent JPEG Group\'s JPEG software license ',0,1,0,0,0,1518130391),(18,' Intel ACPI Software License Agreement',0,1,0,0,0,1518130504),(19,'Internet Systems Consortium (ISC) License',0,0,0,0,0,1518130623),(20,'Mozilla Public License',0,1,0,0,0,1518130770),(21,'OpenLDAP Public License',0,1,0,0,0,1518130868),(22,'Python License ',0,1,0,0,0,1518130982),(23,'Ruby License',0,1,0,0,0,1518132383),(24,'Standard ML of New Jersey License',0,1,0,0,0,1518132589),(25,'Unicode, Inc. License Agreement for Data Files and Software ',0,0,0,0,0,1518132737),(26,'The Universal Permissive License',0,1,0,0,0,1518132900),(27,'The Unlicense',0,1,0,0,0,1518133016),(28,'VIM License',0,1,0,0,0,1518133105),(29,'W3C Software Notice and License',0,1,0,0,0,1518133229),(30,'Do What the Fuck You Want to Public License',0,1,0,0,0,1518133564),(31,'xFree86 License',0,0,0,0,0,1518133794),(32,'Zlib License',0,1,0,0,0,1518133914),(33,'Creative Commons',0,6,0,0,0,1518134289);
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-10  4:37:03
