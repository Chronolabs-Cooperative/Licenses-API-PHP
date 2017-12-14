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

DROP TABLE IF EXISTS `signing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signing` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `typal` enum('individual','organisation','site') NOT NULL DEFAULT 'site',
  `dirname` varchar(128) NOT NULL DEFAULT '',
  `callback-url-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `seal` varchar(44) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `blowfish` tinytext,
  `event-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `sighting-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `payment` enum('Subscription','Required','No Required','Donation Required','Donation Prompted') NOT NULL DEFAULT 'No Required',
  `subscription-days` int(8) unsigned NOT NULL DEFAULT '0',
  `subscription-weeks` int(8) unsigned NOT NULL DEFAULT '0',
  `subscription-months` int(8) unsigned NOT NULL DEFAULT '0',
  `gateway` enum('Yes','No','Cancelled','Errors','Waiting','Refunding','Refunded') NOT NULL DEFAULT 'No',
  `gateway-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `gateway-event-id` mediumint(255) unsigned NOT NULL DEFAULT '0',
  `gateway-amount` float(20,2) unsigned NOT NULL DEFAULT '0.00',
  `gateway-currency` varchar(3) NOT NULL DEFAULT 'USD',
  `gateway-account-identity` varchar(128) NOT NULL DEFAULT '',
  `gateway-account-token` varchar(128) NOT NULL DEFAULT '',
  `gateway-token-failure` varchar(128) NOT NULL DEFAULT '',
  `gateway-token-cancelled` varchar(128) NOT NULL DEFAULT '',
  `gateway-payer-uid` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `gateway-payee-uid` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `gateway-transaction-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `certificate-issued` enum('Yes','No','Emailed','Waiting') NOT NULL DEFAULT 'Waiting',
  `certificate-verified` enum('Validating','Verified','Reissuing','Failed','Waiting') NOT NULL DEFAULT 'Waiting',
  `authkey-issued` enum('Yes','No','Emailed','Waiting') NOT NULL DEFAULT 'Waiting',
  `authkey-verified` enum('Validating','Verified','Reissuing','Failed','Waiting') NOT NULL DEFAULT 'Waiting',
  `organisation-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `individual-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `email-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-netbios-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-ipv4-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-ipv6-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-timezone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signee-uid` int(13) unsigned NOT NULL DEFAULT '0',
  `signer-hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signer-site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signer-timezone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `signer-uid` int(13) unsigned NOT NULL DEFAULT '0',
  `master-hive-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `master-site-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `master-timezone-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `master-uid` int(13) unsigned NOT NULL DEFAULT '0',
  `signer-children-site-ids` tinytext,
  `signer-children-hive-ids` tinytext,
  `signer-children-timezone-ids` tinytext,
  `signer-children-uids` tinytext,
  `netbios-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `realm-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv4-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `ipv6-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `site` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `issued` int(13) unsigned NOT NULL DEFAULT '0',
  `revoked` int(13) unsigned NOT NULL DEFAULT '0',
  `recovery` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
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

-- Dump completed on 2017-12-14 22:57:16
