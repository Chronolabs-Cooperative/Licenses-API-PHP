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
-- Table structure for table `whois`
--

DROP TABLE IF EXISTS `whois`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `whois` (
  `id` mediumint(255) unsigned NOT NULL AUTO_INCREMENT,
  `typal` enum('realm','ipv4','ipv6') NOT NULL DEFAULT 'realm',
  `state` enum('current','historical') NOT NULL DEFAULT 'current',
  `realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv4-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv6-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `history-whois-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `registrar-serial` varchar(20) NOT NULL DEFAULT '0',
  `registrar-name-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `registrar-address-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `registrar-email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `registrar-phone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `registrar-fax-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `general-serial` varchar(20) NOT NULL DEFAULT '0',
  `general-name-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `general-address-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `general-email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `general-phone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `general-fax-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `admin-serial` varchar(20) NOT NULL DEFAULT '0',
  `admin-name-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `admin-address-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `admin-email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `admin-phone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `admin-fax-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `technical-serial` varchar(20) NOT NULL DEFAULT '0',
  `technical-name-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `technical-address-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `technical-email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `technical-phone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `technical-fax-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `history` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whois`
--

LOCK TABLES `whois` WRITE;
/*!40000 ALTER TABLE `whois` DISABLE KEYS */;
/*!40000 ALTER TABLE `whois` ENABLE KEYS */;
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
