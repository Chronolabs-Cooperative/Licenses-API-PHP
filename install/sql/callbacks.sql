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
-- Table structure for table `callbacks`
--

DROP TABLE IF EXISTS `callbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `callbacks` (
  `id` mediumint(255) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(13) unsigned NOT NULL DEFAULT '0',
  `license-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `sighting-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signing-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `authkey-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `service-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `whois-id` mediumint(100) unsigned NOT NULL DEFAULT '0',
  `event-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `typal` enum('authkey','calling','polling','validation','other') NOT NULL DEFAULT 'other',
  `uri` varchar(250) NOT NULL DEFAULT '',
  `timeout` int(4) unsigned NOT NULL DEFAULT '0',
  `connection` int(4) unsigned NOT NULL DEFAULT '0',
  `data` mediumtext NOT NULL,
  `queries` mediumtext NOT NULL,
  `files` mediumtext NOT NULL,
  `functions` mediumtext NOT NULL,
  `fails` int(3) NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `expired` int(13) unsigned NOT NULL DEFAULT '0',
  `finished` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `callbacks`
--

LOCK TABLES `callbacks` WRITE;
/*!40000 ALTER TABLE `callbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `callbacks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-10  4:37:02
