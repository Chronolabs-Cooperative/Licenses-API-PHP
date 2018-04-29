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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` mediumint(255) unsigned NOT NULL AUTO_INCREMENT,
  `state` enum('callback','license','sighting','signed','authkey','authkey-token','organisation','individual','site','site-pool','realm','netbios','hive','service','service-type','address','email','phone','user','whois','other') NOT NULL DEFAULT 'other',
  `action` enum('executing','syndicate','retrieve','calling','class','function','eval','revoke','verify','issue','reissue','aligning','population','deleting','email-verify','email-sending','email-checking','migration','upgrading','seal-check','sealing','other') NOT NULL DEFAULT 'other',
  `callback-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `license-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `sighting-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signed-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `authkey-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `authkey-token-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `organisation-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `individual-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `service-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `service-type-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `address-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `phone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `whois-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `identity` mediumtext,
  `identity_fields` varchar(255) NOT NULL DEFAULT '',
  `uid` int(13) unsigned NOT NULL DEFAULT '0',
  `site` int(8) unsigned NOT NULL DEFAULT '0',
  `code` varchar(16) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `include` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `function` varchar(255) NOT NULL DEFAULT '',
  `variable` varchar(32) NOT NULL DEFAULT '',
  `variables` varchar(255) NOT NULL DEFAULT '',
  `eval` blob,
  `again` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `execute` int(13) unsigned NOT NULL DEFAULT '0',
  `failing` int(13) unsigned NOT NULL DEFAULT '0',
  `deleted` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
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
