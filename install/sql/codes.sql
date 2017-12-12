-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: licenses-localhost
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.10.1

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
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codes` (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL DEFAULT '',
  `quotes` int(8) NOT NULL DEFAULT '0',
  `licenses` int(8) NOT NULL DEFAULT '0',
  `sightings` int(8) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  `accessed` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codes`
--

LOCK TABLES `codes` WRITE;
/*!40000 ALTER TABLE `codes` DISABLE KEYS */;
INSERT INTO `codes` VALUES (1,'APL-2.0',0,1,0,1513035916,0),(2,'FDL-1.1',0,1,0,1513037077,0),(3,'FDL-1.2',0,1,0,1513037180,0),(4,'LGPL-2.0',0,1,0,1513037344,0),(5,'LGPL-2.1',0,1,0,1513037497,0),(6,'GPL-1.0',0,1,0,1513037648,0),(7,'GPL-2.0',0,1,0,1513037760,0),(8,'GPL-3.0',0,1,0,1513037867,0),(9,'CCGSL-1.1',0,1,0,1513040190,0),(10,'CCUL-1.1',0,1,0,1513040279,0),(11,'CC-3.0',0,1,0,1513040616,0),(12,'CC-4.0-A',0,1,0,1513041006,0),(13,'CC-3.0-SL',0,1,0,1513041113,0),(14,'CC-4.0-SL',0,1,0,1513041201,0),(15,'CC-3.0-D',0,1,0,1513041314,0),(16,'CC-4.0-D',0,1,0,1513041408,0),(17,'CC-3.0-NC',0,1,0,1513041508,0),(18,'CC-4.0-NC',0,1,0,1513041604,0),(19,'CC-3.0-NCSL',0,1,0,1513041740,0),(20,'CC-4.0-NCSL',0,1,0,1513041838,0),(21,'CC-3.0-NCD',0,1,0,1513041990,0),(22,'CC-4.0-NCD',0,1,0,1513042066,0);
/*!40000 ALTER TABLE `codes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-12 19:23:04