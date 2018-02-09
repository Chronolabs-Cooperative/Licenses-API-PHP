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
-- Table structure for table `hives`
--

DROP TABLE IF EXISTS `hives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hives` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(128) NOT NULL DEFAULT '',
  `code` varchar(16) NOT NULL DEFAULT '',
  `local` enum('Yes','No') NOT NULL DEFAULT 'No',
  `remote` enum('Yes','No') NOT NULL DEFAULT 'No',
  `master` enum('Yes','No') NOT NULL DEFAULT 'No',
  `child` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `offline` enum('Yes','No') NOT NULL DEFAULT 'No',
  `capacity` enum('Low','Medium','High','Extreme','No Relay') NOT NULL DEFAULT 'No Relay',
  `service-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `timezone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `organisation-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `realm-whois-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv4-whois-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv6-whois-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `netbios-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv4-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv6-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `uid` int(13) unsigned NOT NULL DEFAULT '0',
  `protocol` enum('http://','https://') NOT NULL DEFAULT 'http://',
  `hostname` varchar(128) NOT NULL DEFAULT '',
  `path` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(60) NOT NULL DEFAULT '',
  `licenses` int(20) unsigned NOT NULL DEFAULT '0',
  `sighting` int(20) unsigned NOT NULL DEFAULT '0',
  `signings` int(20) unsigned NOT NULL DEFAULT '0',
  `children` int(20) unsigned NOT NULL DEFAULT '0',
  `storage` int(20) unsigned NOT NULL DEFAULT '0',
  `space` int(20) unsigned NOT NULL DEFAULT '0',
  `loading` float(20,16) unsigned NOT NULL DEFAULT '0.0000000000000000',
  `dependency` float(20,16) unsigned NOT NULL DEFAULT '0.0000000000000000',
  `queries` int(20) unsigned NOT NULL DEFAULT '0',
  `queried` int(20) unsigned NOT NULL DEFAULT '0',
  `today-uptime` int(40) unsigned NOT NULL DEFAULT '0',
  `today-downtime` int(40) unsigned NOT NULL DEFAULT '0',
  `week-uptime` int(40) unsigned NOT NULL DEFAULT '0',
  `week-downtime` int(40) unsigned NOT NULL DEFAULT '0',
  `month-uptime` int(40) unsigned NOT NULL DEFAULT '0',
  `month-downtime` int(40) unsigned NOT NULL DEFAULT '0',
  `quarter-uptime` int(40) unsigned NOT NULL DEFAULT '0',
  `quarter-downtime` int(40) unsigned NOT NULL DEFAULT '0',
  `yearly-uptime` int(40) unsigned NOT NULL DEFAULT '0',
  `yearly-downtime` int(40) unsigned NOT NULL DEFAULT '0',
  `today-ups` int(10) unsigned NOT NULL DEFAULT '0',
  `today-downs` int(10) unsigned NOT NULL DEFAULT '0',
  `today-state` enum('up','down') NOT NULL DEFAULT 'up',
  `week-ups` int(10) unsigned NOT NULL DEFAULT '0',
  `week-downs` int(10) unsigned NOT NULL DEFAULT '0',
  `week-state` enum('up','down') NOT NULL DEFAULT 'up',
  `month-ups` int(10) unsigned NOT NULL DEFAULT '0',
  `month-downs` int(10) unsigned NOT NULL DEFAULT '0',
  `month-state` enum('up','down') NOT NULL DEFAULT 'up',
  `quarter-ups` int(10) unsigned NOT NULL DEFAULT '0',
  `quarter-downs` int(10) unsigned NOT NULL DEFAULT '0',
  `quarter-state` enum('up','down') NOT NULL DEFAULT 'up',
  `testing-mode` enum('checking','ignoring') NOT NULL DEFAULT 'ignoring',
  `testing-next` int(13) unsigned NOT NULL DEFAULT '0',
  `testing-last` int(13) unsigned NOT NULL DEFAULT '0',
  `testing-state` enum('up','down') NOT NULL DEFAULT 'up',
  `testing-state-last` enum('up','down') NOT NULL DEFAULT 'up',
  `testing-state-since` int(13) unsigned NOT NULL DEFAULT '0',
  `testing-state-seconds` int(13) unsigned NOT NULL DEFAULT '0',
  `testing-event-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `today-starts` int(13) unsigned NOT NULL DEFAULT '0',
  `today-ends` int(13) unsigned NOT NULL DEFAULT '0',
  `week-starts` int(13) unsigned NOT NULL DEFAULT '0',
  `week-ends` int(13) unsigned NOT NULL DEFAULT '0',
  `month-starts` int(13) unsigned NOT NULL DEFAULT '0',
  `month-ends` int(13) unsigned NOT NULL DEFAULT '0',
  `quarterly-starts` int(13) unsigned NOT NULL DEFAULT '0',
  `quarterly-ends` int(13) unsigned NOT NULL DEFAULT '0',
  `reset` int(13) unsigned NOT NULL DEFAULT '0',
  `quoted` int(13) unsigned NOT NULL DEFAULT '0',
  `called` int(13) unsigned NOT NULL DEFAULT '0',
  `polled` int(13) unsigned NOT NULL DEFAULT '0',
  `failed` int(13) unsigned NOT NULL DEFAULT '0',
  `events` int(13) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `upgraded` int(13) unsigned NOT NULL DEFAULT '0',
  `failings` int(13) unsigned NOT NULL DEFAULT '0',
  `offlined` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hives`
--

LOCK TABLES `hives` WRITE;
/*!40000 ALTER TABLE `hives` DISABLE KEYS */;
/*!40000 ALTER TABLE `hives` ENABLE KEYS */;
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
