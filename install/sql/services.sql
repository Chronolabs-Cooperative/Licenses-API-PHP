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
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `state` enum('online','offline','local') NOT NULL DEFAULT 'online',
  `protocol` enum('http://','https://') NOT NULL DEFAULT 'http://',
  `host` varchar(250) NOT NULL DEFAULT '',
  `path` varchar(128) NOT NULL DEFAULT '/',
  `version` varchar(10) NOT NULL DEFAULT 'v1',
  `services` varchar(128) NOT NULL DEFAULT '/service.api',
  `realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv4-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv6-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `country-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `event-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `calls` int(8) unsigned NOT NULL DEFAULT '0',
  `success` int(8) unsigned NOT NULL DEFAULT '0',
  `failure` int(8) unsigned NOT NULL DEFAULT '0',
  `events` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `event` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
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
