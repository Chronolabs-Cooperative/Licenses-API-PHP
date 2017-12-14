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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(128) NOT NULL DEFAULT '',
  `typal` enum('individual','home','office','headoffice','diplomatic','government','facility','educational','whois-ipv4','whois-ipv6','whois-realm','other') NOT NULL DEFAULT 'other',
  `mode` enum('populating','places-regional','places-suburb','complete') NOT NULL DEFAULT 'populating',
  `prefix` varchar(128) NOT NULL DEFAULT '',
  `unit` varchar(10) NOT NULL DEFAULT '',
  `number` varchar(10) NOT NULL DEFAULT '',
  `street` varchar(128) NOT NULL DEFAULT '',
  `careof` varchar(128) NOT NULL DEFAULT '',
  `type` varchar(32) NOT NULL DEFAULT '',
  `suburb` varchar(128) NOT NULL DEFAULT '',
  `region` varchar(128) NOT NULL DEFAULT '',
  `state` varchar(128) NOT NULL DEFAULT '',
  `country-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `postcode` varchar(10) NOT NULL DEFAULT '',
  `vercinity` varchar(128) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `longitude` float(44,30) NOT NULL DEFAULT '0.000000000000000000000000000000',
  `latitude` float(44,30) NOT NULL DEFAULT '0.000000000000000000000000000000',
  `places-region` blob,
  `places-suburb` blob,
  `ignoring-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `quanity` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `event` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-14 22:57:17
