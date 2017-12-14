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
-- Table structure for table `sightings`
--

DROP TABLE IF EXISTS `sightings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sightings` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(128) NOT NULL DEFAULT '',
  `seal` varchar(44) NOT NULL DEFAULT '',
  `type` enum('core','application','module','extension','plugin','3rd party','audio','video','image','images','media','artwork','other') NOT NULL DEFAULT 'other',
  `download-url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `support-url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `repo-url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `callback-url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `version` varchar(16) NOT NULL DEFAULT '',
  `framework` varchar(128) NOT NULL DEFAULT '',
  `framework-version` varchar(16) NOT NULL DEFAULT '',
  `segments` int(8) unsigned NOT NULL DEFAULT '6',
  `lengths` int(8) unsigned NOT NULL DEFAULT '6',
  `gateway` enum('Yes Required','Not Required','Donation Required','Donation Prompted') NOT NULL DEFAULT 'Not Required',
  `gateway-amount` float(20,2) unsigned NOT NULL DEFAULT '0.00',
  `gateway-currency` varchar(3) NOT NULL DEFAULT 'USD',
  `description` tinytext,
  `authors` longtext,
  `logo` blob,
  `logo-mimetype` varchar(128) NOT NULL DEFAULT 'image/png',
  `quotes` int(8) unsigned NOT NULL DEFAULT '0',
  `signings` int(8) unsigned NOT NULL DEFAULT '0',
  `revoked` int(8) unsigned NOT NULL DEFAULT '0',
  `regraded` int(8) unsigned NOT NULL DEFAULT '0',
  `recovery` int(8) unsigned NOT NULL DEFAULT '0',
  `rejections` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `accessed` int(13) unsigned NOT NULL DEFAULT '0',
  `rejected` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`key`,`seal`,`type`,`name`,`version`,`framework`,`framework-version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sightings`
--

LOCK TABLES `sightings` WRITE;
/*!40000 ALTER TABLE `sightings` DISABLE KEYS */;
/*!40000 ALTER TABLE `sightings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-14 22:57:18
