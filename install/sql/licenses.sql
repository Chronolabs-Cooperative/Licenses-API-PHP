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
-- Table structure for table `licenses`
--

DROP TABLE IF EXISTS `licenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licenses` (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `code-id` mediumint(20) NOT NULL DEFAULT '0',
  `version-id` mediumint(20) NOT NULL DEFAULT '0',
  `title-id` mediumint(20) NOT NULL DEFAULT '0',
  `resource-id` mediumint(20) NOT NULL DEFAULT '0',
  `subjective-id` mediumint(20) NOT NULL,
  `image-logo` varchar(250) NOT NULL DEFAULT '',
  `source-url` varchar(250) NOT NULL DEFAULT '',
  `contact-email` varchar(250) NOT NULL DEFAULT '',
  `filename-txt` varchar(250) NOT NULL DEFAULT 'LICENSE',
  `filename-html` varchar(250) NOT NULL DEFAULT 'license.html',
  `sightings` int(8) NOT NULL DEFAULT '0',
  `quotes` int(8) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  `accessed` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`code-id`,`version-id`,`title-id`,`resource-id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licenses`
--

LOCK TABLES `licenses` WRITE;
/*!40000 ALTER TABLE `licenses` DISABLE KEYS */;
INSERT INTO `licenses` VALUES (1,1,1,1,1,0,'/uploads/2017/12/12/10-45-16-50/apl-2.0-logo.png','','','ACADEMIC','academic.html',0,0,1513035916,0),(2,2,2,2,2,0,'/uploads/2017/12/12/11-04-37-50/1200px-GFDL_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/fdl-1.1.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037077,0),(3,3,3,2,3,0,'/uploads/2017/12/12/11-06-20-50/1200px-GFDL_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/fdl-1.2.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037180,0),(4,4,1,3,4,0,'/uploads/2017/12/12/11-09-04-50/1200px-LGPLv3_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/lgpl-2.0.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037344,0),(5,5,4,4,5,0,'/uploads/2017/12/12/11-11-36-50/1200px-LGPLv3_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037497,0),(6,6,5,5,6,0,'/uploads/2017/12/12/11-14-08-50/1200px-GPLv3_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/gpl-1.0.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037648,0),(7,7,1,5,7,0,'/uploads/2017/12/12/11-16-00-50/1200px-GPLv3_Logo.svg.png','https://www.gnu.org/licenses/old-licenses/gpl-2.0.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037760,0),(8,8,6,5,8,0,'/uploads/2017/12/12/11-17-47-50/1200px-GPLv3_Logo.svg.png','https://www.gnu.org/licenses/gpl.html','gnu@gnu.org','LICENSE','license.html',0,0,1513037867,0),(9,9,2,6,9,0,'/uploads/2017/12/12/11-56-30-50/chronolabs-it.png','https://sourceforge.net/u/chronolabscoop/wiki/General%20Software%20License/','chronolabscoop@users.sourceforge.net','LICENSE','license.html',0,0,1513040190,0),(10,10,2,7,10,0,'/uploads/2017/12/12/11-57-59-50/chronolabs-it.png','https://sourceforge.net/u/chronolabscoop/wiki/End%20User%20License/','chronolabscoop@users.sourceforge.net','LICENSE','license.html',0,0,1513040279,0),(11,11,6,8,11,0,'/uploads/2017/12/12/12-03-36-50/cc.logo.large.png','https://creativecommons.org/licenses/by/3.0/au/legalcode','','LICENSE','license.html',0,0,1513040617,0),(12,12,7,8,12,1,'/uploads/2017/12/12/12-10-06-50/cc.logo.large.png','https://creativecommons.org/licenses/by/4.0/legalcode','','LICENSE','license.html',0,0,1513041006,0),(13,13,6,8,13,2,'/uploads/2017/12/12/12-11-53-50/cc.logo.large.png','https://creativecommons.org/licenses/by-sa/3.0/au/legalcode','','LICENSE','license.html',0,0,1513041113,0),(14,14,7,8,14,3,'/uploads/2017/12/12/12-13-21-50/cc.logo.large.png','https://creativecommons.org/licenses/by-sa/4.0/legalcode','','LICENSE','license.html',0,0,1513041201,0),(15,15,6,8,15,4,'/uploads/2017/12/12/12-15-13-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nd/3.0/au/legalcode','','LICENSE','license.html',0,0,1513041314,0),(16,16,7,8,16,5,'/uploads/2017/12/12/12-16-48-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nd/4.0/legalcode','','LICENSE','license.html',0,0,1513041408,0),(17,17,6,8,17,6,'/uploads/2017/12/12/12-18-28-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc/3.0/au/legalcode','','LICENSE','license.html',0,0,1513041508,0),(18,18,7,8,18,7,'/uploads/2017/12/12/12-20-04-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc/4.0/legalcode','','LICENSE','license.html',0,0,1513041604,0),(19,19,6,8,19,8,'/uploads/2017/12/12/12-22-20-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc-sa/3.0/au/legalcode','','LICENSE','license.html',0,0,1513041740,0),(20,20,7,8,20,9,'/uploads/2017/12/12/12-23-58-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode','','LICENSE','license.html',0,0,1513041838,0),(21,21,6,8,21,10,'/uploads/2017/12/12/12-26-30-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc-nd/3.0/au/legalcode','','LICENSE','license.html',0,0,1513041990,0),(22,22,7,8,22,11,'/uploads/2017/12/12/12-27-46-50/cc.logo.large.png','https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode','','LICENSE','license.html',0,0,1513042066,0);
/*!40000 ALTER TABLE `licenses` ENABLE KEYS */;
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
