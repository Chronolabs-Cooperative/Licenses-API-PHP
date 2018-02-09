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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(13) unsigned NOT NULL AUTO_INCREMENT,
  `state` enum('unvalidated','verified','invalid','banned','other') NOT NULL DEFAULT 'other',
  `type` enum('local','remote','individual','organisation','site','other') NOT NULL DEFAULT 'other',
  `organisation-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `individual-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `hive-uid` int(13) unsigned NOT NULL DEFAULT '0',
  `service-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `type-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `command-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `uname` varchar(25) NOT NULL DEFAULT '',
  `avatar` varchar(30) NOT NULL DEFAULT 'blank.gif',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  `from` varchar(100) NOT NULL DEFAULT '',
  `sig` tinytext,
  `actkey` varchar(8) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT '',
  `licenses` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `sightings` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `signings` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authkeys` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tokens` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `timezone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `last_online` int(10) unsigned NOT NULL DEFAULT '0',
  `last_authed` int(10) unsigned NOT NULL DEFAULT '0',
  `mailing` enum('Yes','No','Undelievered') NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-10  4:37:01
