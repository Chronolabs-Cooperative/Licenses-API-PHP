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
-- Table structure for table `licenses`
--

DROP TABLE IF EXISTS `licenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licenses` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `version-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `title-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `resource-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `subjective-id` mediumint(20) unsigned NOT NULL DEFAULT '0',
  `image-logo` varchar(250) NOT NULL DEFAULT '',
  `source-url` varchar(250) NOT NULL DEFAULT '',
  `contact-email` varchar(250) NOT NULL DEFAULT '',
  `filename-txt` varchar(250) NOT NULL DEFAULT 'LICENSE',
  `filename-html` varchar(250) NOT NULL DEFAULT 'license.html',
  `sightings` int(8) unsigned NOT NULL DEFAULT '0',
  `signings` int(8) unsigned NOT NULL DEFAULT '0',
  `revokions` int(8) unsigned NOT NULL DEFAULT '0',
  `quotes` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `accessed` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`code-id`,`version-id`,`title-id`,`resource-id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licenses`
--

LOCK TABLES `licenses` WRITE;
/*!40000 ALTER TABLE `licenses` DISABLE KEYS */;
INSERT INTO `licenses` VALUES (1,1,1,1,1,0,'/uploads/06/2018/02/09/0828/ChronolabsCoop-IT-Blue-Logo.png','https://sourceforge.net/u/chronolabscoop/wiki/General%20Software%20License/','chronolabscoop@users.sourceforge.net','LICENSE','license.html',0,0,0,0,1518125325,0),(2,2,1,2,2,0,'/uploads/06/2018/02/09/0830/chronolabs-quantum.png','https://sourceforge.net/u/chronolabscoop/wiki/End%20User%20License/','chronolabscoop@users.sourceforge.net','LICENSE','license.html',0,0,0,0,1518125435,0),(3,3,2,3,3,0,'/uploads/06/2018/02/09/0833/apl-2.0-logo.png','https://sourceforge.net/u/chronolabscoop/wiki/Academic%20Public%20License%2C%20version%202.0/','chronolabscoop@users.sourceforge.net','ACADEMIC','academic.html',0,0,0,0,1518125589,0),(4,4,3,4,4,0,'/uploads/06/2018/02/09/0841/gpl-v3-logo.svg','https://www.gnu.org/licenses/gpl.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518126105,0),(5,5,2,4,5,0,'/uploads/06/2018/02/09/0844/256px-License_icon-gpl-2.svg_.png','https://www.gnu.org/licenses/old-licenses/gpl-2.0.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518126257,0),(6,6,3,5,6,0,'/uploads/06/2018/02/09/0847/lgplv3-147x51.png','https://www.gnu.org/licenses/lgpl.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518126465,0),(7,7,4,5,7,0,'/uploads/06/2018/02/09/0850/License_icon-lgpl.svg.png','https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518126658,0),(8,8,3,6,8,0,'/uploads/06/2018/02/09/0852/1200px-AGPLv3_Logo.svg.png','https://www.gnu.org/licenses/agpl.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518126777,0),(9,9,2,7,9,0,'/uploads/06/2018/02/09/0857/Apache_Software_Foundation_Logo_(2016).svg.png','http://www.apache.org/licenses/LICENSE-2.0','webmaster@apache.org','LICENSE','license.html',0,0,0,0,1518127027,0),(10,10,5,7,10,0,'/uploads/06/2018/02/09/0858/Apache_Software_Foundation_Logo_(2016).svg.png','http://www.apache.org/licenses/LICENSE-1.1','webmaster@apache.org','LICENSE','license.html',0,0,0,0,1518127133,0),(11,11,1,7,11,0,'/uploads/06/2018/02/09/0900/Apache_Software_Foundation_Logo_(2016).svg.png','http://www.apache.org/licenses/LICENSE-1.0','webmaster@apache.org','LICENSE','license.html',0,0,0,0,1518127220,0),(12,9,2,8,12,0,'/uploads/06/2018/02/09/0905/perl.svg','http://www.perlfoundation.org/artistic_license_2_0','webmaster@perlfoundation.org','LICENSE','license.html',0,0,0,0,1518127505,0),(13,11,1,8,13,0,'/uploads/06/2018/02/09/0906/perl.svg','http://www.perlfoundation.org/artistic_license_1_0','webmaster@perlfoundation.org','LICENSE','license.html',0,0,0,0,1518127584,0),(14,12,1,9,14,0,'/uploads/06/2018/02/09/0911/900-Boost.png','http://www.boost.org/LICENSE_1_0.txt','webmaster@boost.org','LICENSE','license.html',0,0,0,0,1518127912,0),(15,13,4,12,17,0,'/uploads/06/2018/02/09/0926/logo-osi_vignette.png','http://www.cecill.info/licences.fr.html','webmaster@cecill.info','LICENSE','license.html',0,0,0,0,1518128819,0),(16,14,2,12,18,0,'/uploads/06/2018/02/09/0930/logo-osi_vignette.png','http://www.cecill.info/licences.fr.html','webmaster@cecill.info','LICENSE','license.html',0,0,0,0,1518129059,0),(17,15,1,12,19,0,'/uploads/06/2018/02/09/0932/logo-osi_vignette.png','http://www.cecill.info/licences.fr.html','webmaster@cecill.info','LICENSE','license.html',0,0,0,0,1518129156,0),(18,16,1,13,20,0,'/uploads/06/2018/02/09/0936/maxresdefault (2).jpg','http://www.cryptix.org/LICENSE.TXT','webmaster@cryptix.org','LICENSE','license.html',0,0,0,0,1518129407,0),(19,17,2,14,21,0,'/uploads/06/2018/02/09/0938/ecos-old-logo-new-color-retina.png','https://www.gnu.org/licenses/ecos-license.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518129534,0),(20,18,2,15,22,0,'/uploads/06/2018/02/09/0940/e35b2c9e3f7daecb779ef480ab8eb58f.jpg','https://www.gnu.org/licenses/eiffel-forum-license-2.html','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518129647,0),(21,19,1,16,23,0,'/uploads/06/2018/02/09/0947/256px-License_icon-mit-2.svg.png','https://en.wikipedia.org/wiki/MIT_License','webmaster@wikipedia.org','LICENSE','license.html',0,0,0,0,1518130051,0),(22,20,6,17,24,0,'/uploads/06/2018/02/09/0953/jpeg-logo-plain.png','https://dev.w3.org/cvsweb/Amaya/libjpeg/Attic/README?rev=1.2','webmaster@w3.org','LICENSE','license.html',0,0,0,0,1518130391,0),(23,21,1,18,25,0,'/uploads/06/2018/02/09/0955/fedorawiki_logo.png','https://fedoraproject.org/wiki/Licensing/Intel_ACPI_Software_License_Agreement','','LICENSE','license.html',0,0,0,0,1518130504,0),(24,22,2,20,27,0,'/uploads/06/2018/02/09/0959/Mozilla_Firefox_3.5_logo_256.png','https://www.mozilla.org/en-US/MPL/2.0/','webmaster@mozilla.org','LICENSE','license.html',0,0,0,0,1518130770,0),(25,23,7,21,28,0,'/uploads/06/2018/02/09/1001/LDAPlogo.gif','http://www.openldap.org/doc/admin21/license.html','webmaster@openldap.org','LICENSE','license.html',0,0,0,0,1518130868,0),(26,24,8,22,29,0,'/uploads/06/2018/02/09/1003/python-logo.png','https://www.python.org/download/releases/2.0.1/license/','','LICENSE','license.html',0,0,0,0,1518130982,0),(27,25,1,23,30,0,'/uploads/06/2018/02/09/1026/ruby-logo-lockup-final.jpg','http://www.ruby-lang.org/en/about/license.txt','matz@netlab.jp','LICENSE','license.html',0,0,0,0,1518132383,0),(28,26,1,24,31,0,'/uploads/06/2018/02/09/1029/1103379.png','http://www.smlnj.org/license.html','smlnj-dev-list@mailman.cs.uchicago.edu','LICENSE','license.html',0,0,0,0,1518132589,0),(29,27,1,26,33,0,'/uploads/06/2018/02/09/1035/Oracle-Logo.png','https://oss.oracle.com/licenses/upl/','webmaster@oracle.com','LICENSE','license.html',0,0,0,0,1518132900,0),(30,28,1,27,34,0,'/uploads/06/2018/02/09/1036/pd-icon.png','http://unlicense.org/','webmaster@unlicense.org','UNLICENSE','unlicense.html',0,0,0,0,1518133016,0),(31,29,1,28,35,0,'/uploads/06/2018/02/09/1038/Vimlogo.svg.png','https://www.gnu.org/licenses/vim-license.txt','gnu@gnu.org','LICENSE','license.html',0,0,0,0,1518133105,0),(32,30,1,29,36,0,'/uploads/06/2018/02/09/1040/w3c_home_nb-v.svg','https://www.w3.org/Consortium/Legal/2002/copyright-software-20021231','webmaster@w3.org','LICENSE','license.html',0,0,0,0,1518133229,0),(33,31,1,30,37,0,'/uploads/06/2018/02/09/1046/wtfpl.svg','http://www.wtfpl.net/','webmaster@wtfpl.net','LICENSE','license.html',0,0,0,0,1518133564,0),(34,32,9,32,38,0,'/uploads/06/2018/02/09/1051/zlib3d-b1.png','http://www.gzip.org/zlib/zlib_license.html','zlib@gzip.org','LICENSE','license.html',0,0,0,0,1518133914,0),(35,33,10,33,39,5,'/uploads/06/2018/02/09/1058/cc.logo.large (1).png','https://creativecommons.org/licenses/by/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134289,0),(36,34,10,33,40,6,'/uploads/06/2018/02/09/1100/cc.logo.large (1).png','https://creativecommons.org/licenses/by-sa/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134407,0),(37,35,10,33,41,7,'/uploads/06/2018/02/09/1102/cc.logo.large (1).png','https://creativecommons.org/licenses/by-nd/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134520,0),(38,36,10,33,42,8,'/uploads/06/2018/02/09/1103/cc.logo.large (1).png','https://creativecommons.org/licenses/by-nc/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134628,0),(39,37,10,33,43,9,'/uploads/06/2018/02/09/1105/cc.logo.large (1).png','https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134739,0),(40,38,10,33,44,10,'/uploads/06/2018/02/09/1107/cc.logo.large (1).png','https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode','webmaster@creativecommons.org','LICENSE','license.html',0,0,0,0,1518134841,0);
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

-- Dump completed on 2018-02-10  4:37:02
