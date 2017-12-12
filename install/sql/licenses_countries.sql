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
-- Table structure for table `licenses_countries`
--

DROP TABLE IF EXISTS `licenses_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licenses_countries` (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(44) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '',
  `iso2` varchar(2) NOT NULL DEFAULT '',
  `iso3` varchar(3) NOT NULL DEFAULT '',
  `tld` varchar(3) NOT NULL DEFAULT '',
  `hits` int(8) DEFAULT '0',
  `licenses` int(8) DEFAULT '0',
  `created` int(13) DEFAULT '0',
  `currency` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`key`,`iso2`,`iso3`,`tld`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licenses_countries`
--

LOCK TABLES `licenses_countries` WRITE;
/*!40000 ALTER TABLE `licenses_countries` DISABLE KEYS */;
INSERT INTO `licenses_countries` VALUES (1,'8766d68da7f24535f7d9d8f47c75bb9e','Albania','AL','ALB','.al',0,0,1513035948,'ALL'),(2,'5e70199fda38e20af68f6c7ffc0c95a0','Algeria','DZ','DZA','.dz',0,0,1513035948,'DZD'),(3,'d3d8ecb19725c4c38619c5297d4a2cb7','Andorra','AD','AND','.ad',0,0,1513035948,'EUR'),(4,'084666b7d859a47656c84c0da5e0a926','Angola','AO','AGO','.ao',0,0,1513035948,'AOA'),(5,'8b702c9398c1238705cebe3a1951c5d1','Anguilla','AI','AIA','.ai',0,0,1513035948,'XCD'),(6,'e3dc189d876f2c22804aab7efa4c0ea4','Antigua and Barbuda','AG','ATG','.ag',0,0,1513035948,'XCD'),(7,'459fb5a503a96758e51efcbab5751535','Argentina','AR','ARG','.ar',0,0,1513035948,'ARS'),(8,'de37864825abea5857b2a9cba7c71e9a','Armenia','AM','ARM','.am',0,0,1513035948,'AMD'),(9,'d92991a30aa99af937e0575cc4d0704f','Ashmore And Cartier Islands','','','',0,0,1513035948,''),(10,'0a45e1f1ed7e6b4cca9e3043511bd475','Australia','AU','AUS','.au',0,0,1513035948,'AUD'),(11,'6bae4a4b1b4637ffd798d70694840be4','Austria','AT','AUT','.at',0,0,1513035948,'EUR'),(12,'9b10733f2e265d67deda744b1e32d50a','Azerbaijan','AZ','AZE','.az',0,0,1513035948,'AZM'),(13,'849f68d107c963aef8185310798cc381','Bahrain','BH','BHR','.bh',0,0,1513035948,'BHD'),(14,'f2d4b2dc172a52c26fb70d377a5e4420','Bangladesh','BD','BGD','.bd',0,0,1513035948,'BDT'),(15,'9c5cf5caae686e033b88369b2d3b841f','Barbados','BB','BRB','.bb',0,0,1513035948,'BBD'),(16,'16b23d2c0c80a8a41e935e579d7ccd7c','Belarus','BY','BLR','.by',0,0,1513035948,'BYR'),(17,'9dd093ef7d6c7e77f1d165716b047475','Belgium','BE','BEL','.be',0,0,1513035948,'EUR'),(18,'860d20b8d7fa7fc8acf70c7f67d09933','Belize','BZ','BLZ','.bz',0,0,1513035948,'BZD'),(19,'8b8a4774e8f9d03100dea9a46637ff3a','Benin','BJ','BEN','.bj',0,0,1513035948,'XOF'),(20,'86ebe91aa05216842bd4e2267b940097','Bhutan','BT','BTN','.bt',0,0,1513035948,'BTN'),(21,'023dadae32c21d12ed58b25d2ffb11e5','Bolivia','BO','BOL','.bo',0,0,1513035948,'BOB'),(22,'18dc496c5d861edfc46434c701cba374','Bosnia And Herzegovina','BA','BIH','.ba',0,0,1513035948,'BAM'),(23,'0c1a7f15f81562d83cfcc6938e9264dd','Botswana','BW','BWA','.bw',0,0,1513035948,'BWP'),(24,'a4b5c8edd4222ee08f9761e09a05897d','Bouvet Island','BV','BVT','.bv',0,0,1513035948,'NOK'),(25,'28434e254f51c2015ea52e35a4266da8','Brazil','BR','BRA','.br',0,0,1513035948,'BRL'),(26,'79264611e1fc28cf55c415d4766aec7b','British Indian Ocean Territory','IO','IOT','.io',0,0,1513035948,'USD'),(27,'6729185f28bae2b717f91ce08a37bbb3','British Virgin Islands','VG','VGB','.vg',0,0,1513035948,'USD'),(28,'e87eea04dd3f65ef3c8efc3834ced634','Brunei','BN','BRN','.bn',0,0,1513035948,'BND'),(29,'232772c41a472828699547a993b8e97b','Bulgaria','BG','BGR','.bg',0,0,1513035948,'BGN'),(30,'e5384b44adfa3ae766ae317286e84ac9','Burkina Faso','BF','BFA','.bf',0,0,1513035948,'XOF'),(31,'06e8c35dbbbf61c0c0611ff2ecf215ca','Burma','BM','MMR','.mm',0,0,1513035948,''),(32,'cb17d412972a574d9127801b323d847e','Burundi','BI','BDI','.bi',0,0,1513035948,'BIF'),(33,'cec8720fe173bec37184b8ab621f4c92','Cambodia','KH','KHM','.kh',0,0,1513035948,'KHR'),(34,'07ae15e9a821795b6e861cb44ed26250','Cameroon','CM','CMR','.cm',0,0,1513035948,'XAF'),(35,'b9e85d397ab56a35efc599f9ff2133b7','Canada','CA','CAN','.ca',0,0,1513035948,'CAD'),(36,'2601a2c4f0cc298481398ab22365f65a','Cape Verde','CV','CPV','.cv',0,0,1513035948,'CVE'),(37,'4adea3a85c74bb5b3b44f9686e53cbee','Cayman Islands','KY','CYM','.ky',0,0,1513035948,'KYD'),(38,'3f50251e41b47c7eb97fc80acb959883','Central African Republic','CF','CAF','.cf',0,0,1513035948,'XAF'),(39,'5c6d33b944eed9e719b7dcdddc418904','Chad','TD','TCD','.td',0,0,1513035948,'XAF'),(40,'e1164b31d975523175870744db21f070','Chile','CL','CHL','.cl',0,0,1513035948,'CLP'),(41,'27522e8cf16bba755d0f27bfe6d439db','China','CN','CHN','.cn',0,0,1513035948,'CNY'),(42,'4a49dbb7041e8ced57e37233d79b8ea4','Clipperton Island','','','',0,0,1513035948,''),(43,'9628b297cce9f5d4a8dcac93d548af71','Cocos (Keeling) Islands','CC','CCK','.cc',0,0,1513035948,'AUD'),(44,'f745e884407a45a16b34d88b1e546d79','Colombia','CO','COL','.co',0,0,1513035948,'COP'),(45,'ac53683d4595c2a7144c423b648d22bb','Cook Islands','CK','COK','.ck',0,0,1513035948,'NZD'),(46,'75dcf04e48be22c137f17dea04cb1840','Coral Sea Islands','','','',0,0,1513035948,''),(47,'783770daeebeb0b519793b9826874ea4','Costarica','','','',0,0,1513035948,''),(48,'a4f5fdbbb09658e6147a9443edf3810f','Croatia','HR','HRV','.hr',0,0,1513035948,'HRK'),(49,'b2d3bbfa71979a7a77079186bc47f1bb','Ctedivoire','','','',0,0,1513035948,''),(50,'32a46d83d9b385cb21fa1dc763d8f9bb','Cuba','CU','CUB','.cu',0,0,1513035948,'CUP'),(51,'a2ca3124a66ef715ca1fa8db3d97d047','Cyprus','CY','CYP','.cy',0,0,1513035948,'CYP'),(52,'a2fc6c316fb8f8da06903e21b889f27e','Czech Republic','CZ','CZE','.cz',0,0,1513035948,'CZK'),(53,'1c30483bc06ef4e2018e26d89bb17e7d','Denmark','DK','DNK','.dk',0,0,1513035948,'DKK'),(54,'a9cffe96b5fa9747db5d4e6531db0051','Djibouti','DJ','DJI','.dj',0,0,1513035948,'DJF'),(55,'c77bf9bafd830be32ba0ed1419c8788b','Dominica','DM','DMA','.dm',0,0,1513035948,'XCD'),(56,'5538e6c068abff99ffdd6656645b208c','Dominican Republic','DO','DOM','.do',0,0,1513035948,'DOP'),(57,'ac80fc02b4199589d46895228c67f6ae','Ecuador','EC','ECU','.ec',0,0,1513035948,'USD'),(58,'8f6fd1ddaa84d79d5d6e0a75062b484e','Egypt','EG','EGY','.eg',0,0,1513035948,'EGP'),(59,'e6bdc751f31f4d33e9c54cb9f656fcfe','El Salvador','SV','SLV','.sv',0,0,1513035948,'SVC'),(60,'ea46f5ee1303483da71f3ff48dc62b18','Equatorial Guinea','GQ','GNQ','.gq',0,0,1513035948,'XAF'),(61,'ebca937718ee2278e5828bbb5a4dffeb','Eritrea','ER','ERI','.er',0,0,1513035948,'ERN'),(62,'caa7d8b5bc2f549b50749440184177da','Estonia','EE','EST','.ee',0,0,1513035948,'EEK'),(63,'b5712ca9e74b44886fab697a607bbdbf','Ethiop Island','','','',0,0,1513035948,''),(64,'3b4e1eeae97fc24e4097d8dd90585d7f','Ethiopia','ET','ETH','.et',0,0,1513035948,'ETB'),(65,'e143a9aa0ffaf37027f1d8cc38299e76','Falkland Islands (Islas Malvinas)','FK','FLK','.fk',0,0,1513035948,'FKP'),(66,'58d45a2f108ae40f27cc16fd755e31d5','Fiji','FJ','FJI','.fj',0,0,1513035948,'FJD'),(67,'e73c33947d09bbc669314bccb04306aa','Finland','FI','FIN','.fi',0,0,1513035948,'EUR'),(68,'e6e99a85bef81010acda410735a0a63e','France','FR','FRA','.fr',0,0,1513035948,'EUR'),(69,'9fdc75824bd8ade337cd4e25b25fe471','Gabon','GA','GAB','.ga',0,0,1513035948,'XAF'),(70,'66370f7a4dcaf32ab912d568b0d27628','Gambia, The','GM','GMB','.gm',0,0,1513035948,'GMD'),(71,'49df304113279f946168c49f39507dcd','Germany','DE','DEU','.de',0,0,1513035948,'EUR'),(72,'ac49131a44cbfb9f4d0543f078d6468a','Ghana','GH','GHA','.gh',0,0,1513035948,'GHC'),(73,'394355eaeedaa9098ae7addde16b34b8','Gibraltar','GI','GIB','.gi',0,0,1513035948,'GIP'),(74,'fd800c28313e8796f41ba71827c08339','Glorioso Islands','','','',0,0,1513035948,''),(75,'b202d86b67bdc777bdbc34478c23cb31','Greece','GR','GRC','.gr',0,0,1513035948,'EUR'),(76,'90464f7ae78d484b562bcfe81abb1dba','Grenada','GD','GRD','.gd',0,0,1513035948,'XCD'),(77,'3451a21661b4aab619131c765b26d651','Guatemala','GT','GTM','.gt',0,0,1513035948,'GTQ'),(78,'bcdf3bf3ad0eedbb99d89fd10a94c199','Guernsey','GG','','',0,0,1513035948,''),(79,'4c1b457cc984eb5ac54597bef64f391e','Guinea','GN','GIN','.gn',0,0,1513035948,'GNF'),(80,'6eafd5ccb7aa77da680976a443cc0f92','Guinea-Bissau','GW','GNB','.gw',0,0,1513035948,'XOF'),(81,'844dd28ad82da9e8093b579238e72632','Guyana','GY','GUY','.gy',0,0,1513035948,'GYD'),(82,'15301e0e870b83253b6ff57204f67f95','Haiti','HT','HTI','.ht',0,0,1513035948,'HTG'),(83,'5dd6f195f5c37b342205f8fa4a793113','Heard Island And Mcdonald Islands','HM','HMD','.hm',0,0,1513035948,'AUD'),(84,'16005826c8d6ab314d11e82f01004b16','Holy See (Vatican City)','VA','VAT','.va',0,0,1513035948,'EUR'),(85,'45998b26ff815c3771488d4c877947c4','Honduras','HN','HND','.hn',0,0,1513035948,'HNL'),(86,'296b8d89a0cd5c885dfb687f8435bc51','Hong Kong','HK','HKG','.hk',0,0,1513035948,'HKD'),(87,'222ea5c11225efe9e5f6005efbdd8cf9','Hungary','HU','HUN','.hu',0,0,1513035948,'HUF'),(88,'a522afadc7c276f2e1d47cc962506be5','Iceland','IS','ISL','.is',0,0,1513035948,'ISK'),(89,'005c847175ae3c3221c82cb8af00810d','India','IN','IND','.in',0,0,1513035948,'INR'),(90,'c336370a6002ce9a221e8e7075cf0ee3','Indonesia','ID','IDN','.id',0,0,1513035948,'IDR'),(91,'31c47e7d78f5a55bc0a78d9aac1fedc6','Iran','IR','IRN','.ir',0,0,1513035948,'IRR'),(92,'eb6bb3940e97c5d718b2039293d281cb','Iraq','IQ','IRQ','.iq',0,0,1513035948,'IQD'),(93,'c2abdf02f39a6176a62f31cc3100cec6','Ireland','IE','IRL','.ie',0,0,1513035948,'EUR'),(94,'3ae08a5fa5785f828ff8e0630381429e','Isle of Man','IM','','.im',0,0,1513035948,''),(95,'9cf54680e1806288b60d232e442e72d5','Israel','IL','ISR','.il',0,0,1513035948,'ILS'),(96,'aab77e1a27b14b133c0015056438397c','Italy','IT','ITA','.it',0,0,1513035948,'EUR'),(97,'03b0b34c2fef6a214c6c655d8c4c4044','Jamaica','JM','JAM','.jm',0,0,1513035948,'JMD'),(98,'367fe97d8c369234a152173fedf7713a','Japan','JP','JPN','.jp',0,0,1513035948,'JPY'),(99,'3ac7d99532e6351a4a0bcdf43af9e495','Jersey','JE','','.je',0,0,1513035948,''),(100,'4ade78b571f7667fa4346394b24c0133','Jordan','JO','JOR','.jo',0,0,1513035948,'JOD'),(101,'c8b3e5a24c5d70042eb4ffc010ec2c79','Juandenova Island','','','',0,0,1513035948,''),(102,'40753ee0265f1a1250feca0e341c04fa','Kazakhstan','KZ','KAZ','.kz',0,0,1513035948,'KZT'),(103,'688973b17117cb35970c075e15b785c2','Kenya','KE','KEN','.ke',0,0,1513035948,'KES'),(104,'010670104acf10020a04e646d5a58a90','Kiribati','KI','KIR','.ki',0,0,1513035948,'AUD'),(105,'78d073283b95b13c4ac0ef65a78e3718','Kuwait','KW','KWT','.kw',0,0,1513035948,'KWD'),(106,'adcfa785469719c60b2445aa7bb26262','Kyrgyzstan','KG','KGZ','.kg',0,0,1513035948,'KGS'),(107,'14f0dc9f6b9714643784ee39f51576f7','Laos','LA','LAO','.la',0,0,1513035948,'LAK'),(108,'17abaf53fa62e1daa544092029888aa5','Latvia','LV','LVA','.lv',0,0,1513035948,'LVL'),(109,'641e558d60832ea56a72e4469b3c4696','Lebanon','LB','LBN','.lb',0,0,1513035948,'LBP'),(110,'7aa637f321f462cb28f6967eceb4d163','Lesotho','LS','LSO','.ls',0,0,1513035948,'LSL'),(111,'d6ef2e9109cb7c3212a6678b11c0ee45','Liberia','LR','LBR','.lr',0,0,1513035948,'LRD'),(112,'0c67247a480241e580ff0d65c527991e','Libya','LY','LBY','.ly',0,0,1513035948,'LYD'),(113,'b67b8a532c76fb65974a8402ff1ec522','Liechtenstein','LI','LIE','.li',0,0,1513035948,'CHF'),(114,'c0d6789d09f68b75af3a30776b28c339','Lithuania','LT','LTU','.lt',0,0,1513035948,'LTL'),(115,'ebfd765912425b7e78115dfbc43ffc51','Luxembourg','LU','LUX','.lu',0,0,1513035948,'EUR'),(116,'a432dfa77af72d388eb18752a0b71303','Macau','MO','MAC','.mo',0,0,1513035948,'MOP'),(117,'c563babf32fe8e4186cb3817a8862bbe','Madagascar','MG','MDG','.mg',0,0,1513035948,'MGF'),(118,'cab127f32cfa520cb3465e63b1a9003d','Malawi','MW','MWI','.mw',0,0,1513035948,'MWK'),(119,'b518db03df84a67bfe21524d4f56862b','Malaysia','MY','MYS','.my',0,0,1513035948,'MYR'),(120,'1ed30e474e9d9b06b7e14343b6ea14de','Maldives','MV','MDV','.mv',0,0,1513035948,'MVR'),(121,'25c47e806f01797bfe8e292d057fd0c2','Mali','ML','MLI','.ml',0,0,1513035948,'XOF'),(122,'e18920bc731bf5d9d1757fe6f4c1414a','Malta','MT','MLT','.mt',0,0,1513035948,'EUR'),(123,'07f1dcc2fded338f32a809b49cc53b30','Marshall Islands','MH','MHL','.mh',0,0,1513035948,'USD'),(124,'10132ea90198ad2140a0e74baee0a01d','Mauritania','MR','MRT','.mr',0,0,1513035948,'MRO'),(125,'d69bb346243d7f17b6b2b0638236d8a3','Mauritius','MU','MUS','.mu',0,0,1513035948,'MUR'),(126,'28277df867b643a9b8abd1a0ff7146e3','Mayotte','YT','MYT','.yt',0,0,1513035948,'EUR'),(127,'7888c11d334dbb117c41d377a8acd0bd','Mexico','MX','MEX','.mx',0,0,1513035948,'MXN'),(128,'808acd419b5c76eae67a1185e8945065','Monaco','MC','MCO','.mc',0,0,1513035948,'EUR'),(129,'5ba2896f73416ffde3c0e3167616282c','Mongolia','MN','MNG','.mn',0,0,1513035948,'MNT'),(130,'dfaeae80a58b4d763d1f784e04358b54','Montenegro','ME','','.me',0,0,1513035948,''),(131,'866028b768446fdd1e014cc89d3b7136','Montserrat','MS','MSR','.ms',0,0,1513035948,'XCD'),(132,'0b1634dac58653c30c59e7a7ed3470a0','Morocco','MA','MAR','.ma',0,0,1513035948,'MAD'),(133,'cc909571697c69a515e2ba45482abd3e','Mozambique','MZ','MOZ','.mz',0,0,1513035948,'MZM'),(134,'32b019c72d0bcfb47bd17b3e08b14ccf','Namibia','NA','NAM','.na',0,0,1513035948,'NAD'),(135,'1ae9759f4c060477e36d234ff044644c','Nauru','NR','NRU','.nr',0,0,1513035948,'AUD'),(136,'6f447de1a46c98e6760c260b264f2e8f','Nepal','NP','NPL','.np',0,0,1513035948,'NPR'),(137,'a554765919b470db114cc94912d94a10','Netherlands','NL','NLD','.nl',0,0,1513035948,'EUR'),(138,'6324ca3938445c3430b9cb89e2738eac','New Zealand','NZ','NZL','.nz',0,0,1513035948,'NZD'),(139,'4a529d252d80ecd81d35bce9ef2fa957','Nicaragua','NI','NIC','.ni',0,0,1513035948,'NIO'),(140,'489900272384f501b401dc11e0191388','Niger','NE','NER','.ne',0,0,1513035948,'XOF'),(141,'e4a9704af5bb85b9faae973422033a33','Nigeria','NG','NGA','.ng',0,0,1513035948,'NGN'),(142,'8592d3ca61b3422e8fefd73fa5c337bb','Niue','NU','NIU','.nu',0,0,1513035948,'NZD'),(143,'ba1c04c3953819a653a81aff84952dd5','Norfolk Island','NF','NFK','.nf',0,0,1513035948,'AUD'),(144,'542d403b7d73ac27686a6aa1f019345f','North Korea','KP','PRK','.kp',0,0,1513035948,'KPW'),(145,'3ba6c4cc17547bcdb7486496e7505160','Norway','NO','NOR','.no',0,0,1513035948,'NOK'),(146,'192e7fe4d7b2da2567152322b13f7a2b','Oman','OM','OMN','.om',0,0,1513035948,'OMR'),(147,'e1071da899f5c08c4bebd5543438a2d2','Pakistan','PK','PAK','.pk',0,0,1513035948,'PKR'),(148,'96d90deedd3e2504e0711e4f5b880640','Panama','PA','PAN','.pa',0,0,1513035948,'PAB'),(149,'7a65a393f55c6de3f9f9695989d964db','Papua New Guinea','PG','PNG','.pg',0,0,1513035948,'PGK'),(150,'8b8d9ea5c6a6cbdcc23472fcfdb590ce','Paraguay','PY','PRY','.py',0,0,1513035948,'PYG'),(151,'ce83c32c116c2a1e907abb04464fef17','Peru','PE','PER','.pe',0,0,1513035948,'PEN'),(152,'48dec5a9375ab9dd229242a5f0a8e359','Philippines','PH','PHL','.ph',0,0,1513035948,'PHP'),(153,'b6d958441a754692399099c08c73ed25','Pitcairn Islands','PN','PCN','.pn',0,0,1513035948,'NZD'),(154,'a2fad60be555fb4afc96e963218fa52e','Poland','PL','POL','.pl',0,0,1513035948,'PLN'),(155,'d46f4ed257efdac6bfba23b09e471852','Portugal','PT','PRT','.pt',0,0,1513035948,'EUR'),(156,'654341e97a5e506846b8037f9427e071','Qatar','QA','QAT','.qa',0,0,1513035948,'QAR'),(157,'0fe8e1ac0b953c2f5c36944c093a7bec','Republic of Georgia','','','',0,0,1513035948,''),(158,'526809efb1ba2919bd84fc794a722e38','Republic of Moldova','MD','MDA','.md',0,0,1513035948,'MDL'),(159,'bab5471242775b8c93978c8f3896dece','Republic of the Congo','CG','COG','.cg',0,0,1513035948,'XAF'),(160,'8277d5f20e35bc12a5be602090e396f2','Romania','RO','ROU','.ro',0,0,1513035948,'ROL'),(161,'6b4d135f125af554cc8c0261ac69fa99','Russia','RU','RUS','.ru',0,0,1513035948,'RUB'),(162,'e9a8354587cb8b31546ef30baa5d625d','Rwanda','RW','RWA','.rw',0,0,1513035948,'RWF'),(163,'efb30cafe708138e3b27b4a0411410b4','Saint Kitts and Nevis','KN','KNA','.kn',0,0,1513035948,'XCD'),(164,'bc119600bfb18e9bee326daabed6c497','Saint Lucia','LC','LCA','.lc',0,0,1513035948,'XCD'),(165,'794ca3d8558b0aaefbe0c2580a5c61e3','Saint Vincent and the Grenadines','VC','VCT','.vc',0,0,1513035948,'XCD'),(166,'3ed00c5f181f59a41c91da6a6c3c2c01','Samoa','WS','WSM','.ws',0,0,1513035948,'WST'),(167,'c16a8f2ea69153bc720aa5b0d2343919','San Marino','SM','SMR','.sm',0,0,1513035948,'EUR'),(168,'2deece2e22be6e213eed59b87040f86d','Sao Tome and Principe','ST','STP','.st',0,0,1513035948,'STD'),(169,'e586ffe66713c53af248d5670370663f','Saudi Arabia','SA','SAU','.sa',0,0,1513035948,'SAR'),(170,'3ca5cd62e1db4274436229bb1ebc0dec','Senegal','SN','SEN','.sn',0,0,1513035948,'XOF'),(171,'c6d7126082835c9aed0c83d268c11335','Serbia','RS','','.rs',0,0,1513035948,''),(172,'a7982a5ca2091eacbedc029a722a6fa5','Seychelles','SC','SYC','.sc',0,0,1513035948,'SCR'),(173,'47aaec000c7517c31a67a0f55c68e6c5','Sierra Leone','SL','SLE','.sl',0,0,1513035948,'SLL'),(174,'53e7a9de31621e8db892f28e5aa1171c','Singapore','SG','SGP','.sg',0,0,1513035948,'SGD'),(175,'682af3882b74aae3897920db6d29ffc5','Slovakia','SK','SVK','.sk',0,0,1513035948,'EUR'),(176,'ab34815bb38c837b34daadfc960174fa','Slovenia','SI','SVN','.si',0,0,1513035948,'EUR'),(177,'30086fa01ae977ee7950f4a21e81c0d2','Solomon Islands','SB','SLB','.sb',0,0,1513035948,'SBD'),(178,'2b1bb0e5a66c4eb928695bc468211311','Somalia','SO','SOM','.so',0,0,1513035948,'SOS'),(179,'c95cb4f79a528d927c22ca0039f02fb9','South Africa','ZA','ZAF','.za',0,0,1513035948,'ZAR'),(180,'9945997e261d5b1dba3d1bf00e38f603','South Georgia and the Islands','GS','SGS','.gs',0,0,1513035948,'GBP'),(181,'14d391ef2a7b2805c6386a2d0d7d6389','South Korea','KR','KOR','.kr',0,0,1513035948,'KRW'),(182,'4253e0a3eb2b9e2238970e2f90492113','Spain','ES','ESP','.es',0,0,1513035948,'EUR'),(183,'0eaeaf847b9209c4b4feddc2dd801926','Sri Lanka','LK','LKA','.lk',0,0,1513035948,'LKR'),(184,'8bb82d7cfb2cb813bfe5f091dd45f404','Sudan','SD','SDN','.sd',0,0,1513035948,'SDD'),(185,'f080a3d79a29be8d18eaad1cecaab5d2','Suriname','SR','SUR','.sr',0,0,1513035948,'SRG'),(186,'60507da1964d56daa01de16cc0328442','Swaziland','SZ','SWZ','.sz',0,0,1513035948,'SZL'),(187,'c1538831939782cb625c4a4df27c34ac','Sweden','SE','SWE','.se',0,0,1513035948,'SEK'),(188,'15c385693c2f492e33eb5447d8546baa','Switzerland','CH','CHE','.ch',0,0,1513035948,'CHF'),(189,'dee525a8939ab9c799a8c607b3acaccf','Syrian Arab Republic','SY','SYR','.sy',0,0,1513035948,'SYP'),(190,'d7a84a27bb5b65d59f32bef0a20aebc2','Taiwan','TW','TWN','.tw',0,0,1513035948,'TWD'),(191,'834db55804ddd613c9d4eeb3e4ee588b','Tajikistan','TJ','TJK','.tj',0,0,1513035948,'TJS'),(192,'a648dcc140279441331b0a89832e9e28','Thailand','TH','THA','.th',0,0,1513035948,'THB'),(193,'c2506606f17cfb372da4683622d51544','The Bahamas','BS','BHS','.bs',0,0,1513035948,'BSD'),(194,'18f9fbc1dd4b6004f7f83a7d92d35a65','The Former Yugoslav Republic of Macedonia','MK','MKD','.mk',0,0,1513035948,'MKD'),(195,'9581bf0bd0f509058176fcd1e3534524','Togo','TG','TGO','.tg',0,0,1513035948,'XOF'),(196,'489a9be2a6c48398a2e6d3bb535a9883','Tokelau','TK','TKL','.tk',0,0,1513035948,'NZD'),(197,'3e3406d47ba0b4e6a41f24207cd90d38','Tonga','TO','TON','.to',0,0,1513035948,'TOP'),(198,'0169114618f72219c347315fd2da916d','Trinidad And Tobago','TT','TTO','.tt',0,0,1513035948,'TTD'),(199,'115be551ab3ee2efef2c6790ff1a36fd','Trist And Acunha','','','',0,0,1513035948,''),(200,'d7bf439a33f95765af649af1a072d8a4','Tromelin Island','','','',0,0,1513035948,''),(201,'10a0755146bfb7f0f7a71d6bf5d09d80','Tunisia','TN','TUN','.tn',0,0,1513035948,'TND'),(202,'bef788d19007a504c2027661005e2b1b','Turkey','TR','TUR','.tr',0,0,1513035948,'TRL'),(203,'c7849f1d9e030843e9abb13fdaad94de','Turkmenistan','TM','TKM','.tm',0,0,1513035948,'TMM'),(204,'2531ba919906cd714387170ff03eab60','Turks and Caicos Islands','TC','TCA','.tc',0,0,1513035948,'USD'),(205,'d28d46743b664ba3451f20069f698ed0','Tuvalu','TV','TUV','.tv',0,0,1513035948,'AUD'),(206,'e063fdc6e019db0392d5db73c9d0b051','Uganda','UG','UGA','.ug',0,0,1513035948,'UGX'),(207,'9db14904214937227419855f05264f11','Ukraine','UA','UKR','.ua',0,0,1513035948,'UAH'),(208,'0869c28c92e1893b539e9576c4e6e6c8','United Arab Emirates','AE','ARE','.ae',0,0,1513035948,'AED'),(209,'14c417d533ef98dc7875220b2f96bdbb','United Kingdom','GB','GBR','.uk',0,0,1513035948,'GBP'),(210,'91fd3b389bf3c51f61804234a1912666','United Republic of Tanzania','TZ','TZA','.tz',0,0,1513035948,'TZS'),(211,'3b5d7d6ff0c9f4ebacfe11fdc3d0e1b3','United States','US','USA','.us',0,0,1513035948,'USD'),(212,'3f5a39cc65e6d02514dee63877352865','Uruguay','UY','URY','.uy',0,0,1513035948,'UYU'),(213,'79cd4df9025a8f46edfad68c11446c57','Uzbekistan','UZ','UZB','.uz',0,0,1513035948,'UZS'),(214,'2e0b22787bd4e127b2d3e1c4a30836c4','Vanuatu','VU','VUT','.vu',0,0,1513035948,'VUV'),(215,'3a88d6b52b22432f59a314a2cef57498','Venezuela','VE','VEN','.ve',0,0,1513035948,'VEB'),(216,'c5da9b01074dafb06141e03163564f18','Vietnam','VN','VNM','.vn',0,0,1513035948,'VND'),(217,'ff1fbc64405989384f4e00fb02ee8fb8','Western Sahara','EH','ESH','.eh',0,0,1513035948,'MAD'),(218,'a927c17d30acf00fe2ecbb7b02ca57a9','Yemen','YE','YEM','.ye',0,0,1513035948,'YER'),(219,'b77c2ecf75572d84f6cd7eea41b76ee9','Zambia','ZM','ZWB','.zm',0,0,1513035948,'ZMK'),(220,'5e928f573bff9c88df5dfbcde7bb8f2e','Zimbabwe','ZW','ZWE','.zw',0,0,1513035948,'ZWD');
/*!40000 ALTER TABLE `licenses_countries` ENABLE KEYS */;
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
