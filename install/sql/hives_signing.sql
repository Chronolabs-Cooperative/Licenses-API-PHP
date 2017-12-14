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
-- Table structure for table `hives_signing`
--

DROP TABLE IF EXISTS `hives_signing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hives_signing` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `sighting-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signed-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `authkey-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `organisation-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `individual-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `uid` int(13) unsigned NOT NULL DEFAULT '0',
  `local` enum('Yes','No') NOT NULL DEFAULT 'No',
  `remote` enum('Yes','No') NOT NULL DEFAULT 'No',
  `master` enum('Yes','No') NOT NULL DEFAULT 'No',
  `child` enum('Yes','No') NOT NULL DEFAULT 'No',
  `issued` enum('Yes','No') NOT NULL DEFAULT 'No',
  `valid` enum('Yes','No') NOT NULL DEFAULT 'No',
  `loading` float(20,14) unsigned NOT NULL DEFAULT '0.00000000000000',
  `authing` int(20) unsigned NOT NULL DEFAULT '0',
  `tokens` int(20) unsigned NOT NULL DEFAULT '0',
  `verify` int(13) unsigned NOT NULL DEFAULT '0',
  `reauth` int(13) unsigned NOT NULL DEFAULT '0',
  `signed` int(13) unsigned NOT NULL DEFAULT '0',
  `quoted` int(13) unsigned NOT NULL DEFAULT '0',
  `called` int(13) unsigned NOT NULL DEFAULT '0',
  `polled` int(13) unsigned NOT NULL DEFAULT '0',
  `failed` int(13) unsigned NOT NULL DEFAULT '0',
  `events` int(13) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `revoked` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hives_signing`
--

LOCK TABLES `hives_signing` WRITE;
/*!40000 ALTER TABLE `hives_signing` DISABLE KEYS */;
/*!40000 ALTER TABLE `hives_signing` ENABLE KEYS */;
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
