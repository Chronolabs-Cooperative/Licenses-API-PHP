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
-- Table structure for table `signing`
--

DROP TABLE IF EXISTS `authkeys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authkeys` (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `typal` enum('development','live','enterprise','closed') NOT NULL DEFAULT 'closed',
  `limited` enum('Yes','No') NOT NULL DEFAULT 'No',
  `banning` enum('Yes','No') NOT NULL DEFAULT 'No',
  `filings` enum('Yes','No') NOT NULL DEFAULT 'No',
  `posting` enum('Yes','No') NOT NULL DEFAULT 'No',
  `getting` enum('Yes','No') NOT NULL DEFAULT 'No',
  `queries` int(8) NOT NULL DEFAULT '0',
  `quering` int(8) NOT NULL DEFAULT '0',
  `passing` int(8) NOT NULL DEFAULT '0',
  `failing` int(8) NOT NULL DEFAULT '0',
  `requote` int(13) NOT NULL DEFAULT '0',
  `sighting-id` mediumint(20) NOT NULL DEFAULT '0',
  `signing-id` mediumint(20) NOT NULL DEFAULT '0',
  `site-id` mediumint(20) NOT NULL DEFAULT '0',
  `email-id` mediumint(20) NOT NULL DEFAULT '0',
  `field` varchar(255) NOT NULL DEFAULT 'auth_token',
  `md5` varchar(32) NOT NULL DEFAULT '',
  `sha1` varchar(44) NOT NULL DEFAULT '',
  `file` varchar(128) NOT NULL DEFAULT '',
  `bytes` int(8) NOT NULL DEFAULT '0',
  `width` int(8) NOT NULL DEFAULT '0',
  `height` int(8) NOT NULL DEFAULT '0',
  `segment` int(8) NOT NULL DEFAULT '0',
  `lengths` int(8) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  `authing` int(13) NOT NULL DEFAULT '0',
  `reissued` int(13) NOT NULL DEFAULT '0',
  `reissuing` int(13) NOT NULL DEFAULT '0',
  `recovered` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`typal`,`organisation-id`,`individual-id`,`site-id`,`email-id`,`realm`,`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signing`
--

LOCK TABLES `signing` WRITE;
/*!40000 ALTER TABLE `signing` DISABLE KEYS */;
/*!40000 ALTER TABLE `signing` ENABLE KEYS */;
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
