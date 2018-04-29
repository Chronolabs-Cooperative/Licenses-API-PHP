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
-- Table structure for table `subjectives`
--

DROP TABLE IF EXISTS `subjectives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjectives` (
  `id` mediumint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subjects` varchar(255) NOT NULL DEFAULT '',
  `logo` mediumblob,
  `logo-mimetype` varchar(128) NOT NULL DEFAULT 'image/png',
  `quotes` int(8) unsigned NOT NULL DEFAULT '0',
  `created` int(13) unsigned NOT NULL DEFAULT '0',
  `accessed` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjectives`
--

LOCK TABLES `subjectives` WRITE;
/*!40000 ALTER TABLE `subjectives` DISABLE KEYS */;
INSERT INTO `subjectives` VALUES (1,'Universal','','',0,1518128369,0),(2,'Universal','','',0,1518128433,0),(3,'Universal','','',0,1518128839,0),(4,'Universal','','',0,1518128842,0),(5,'International','¼\0\0xœ¼Cú‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0:IDATh\Þ\íZMOGö9R,\î\\8†m•S¤ôˆP\Ô[$ª ˆTŠT	Y®¢\æ\ÐP©·&°\Æ\æ\Ã_x\rkc{\×öz!\ä\ÊO\à\'¼\Õó®\ßevYð\Î\ZF\Z±Þ™ž}\æy?fbD\Åbt_G_‰ð§ûc\'¿M{\Å]Ê•²T<(P\É(\ÑAµLFÝ #³Jõf\Z­Ym“š¶E\ÍNÓ­¶E–m’\Ùjpô­\Ô\r~V7J<V®”\ã±ñŽL6M[{)J\íh´¹½A™O\\?¥?\ÒÇ­ÿ\îLU€¾\07¯\çhÿ°H\åŠNF\íÁj´\ê`\ÛiQ\ç\Ä&\çs‡ŽO\é\ä‹[q\í|v¸\r},\Û\âgð,\Æ(WucA\Öv6=ð9\æ·ZfÖ¬\Z³ \Ô\Õ7«ôô\ç§ô0þð\ÒRÀ=´­þ¾\Ê}\Û\Çmþ(`t¥Qa6\ï\îû@Ng·(µ«¹ g6F\Æ\â—\Ë/ivvö\Òqmc² ‚`š‹Y™H&hzzºo\ÝA\ßÄŸ	~6W=‹ž\\l\ç2”\ÞsA‹“%\é\Ñ\ì#oóóó´´´\Ä\×r}\Ð7R€¡“…p›\ÌÄ…g>ð¦¦¦hqq‘VVVH\×u®¸\Æ=´©}ñl¥fP\ËqA“!®&gi·°ã—Š°xý\ß\Ç\Ý÷.,\Ð\Ù\Ù\î¡\r}\Ð7\n=€aÐ —07.À\ç\ç\çt]Y__÷\r¶\0d|0|8¼†¯P\ÎSvÏ•Šúsñ¡Õ¢Xs\ßen‘Œ\å£\Í\Å\ÒVÁ››e\ÄUÏ¨LÆ˜\Ðd¼\ãB*\ï¦H\Û\ÞJ& «\Â\Ü/§§=F&mMö\06X\Z\êlÐ ¹*¸½X\Û\È\Ðd>–ŠºAz\Åe1kq\Þ\Õb‘‰Aƒ6	\ÐW_$\03{m“¥A\Z–ºm\Û4l\È\"cÃ…\\«\Å02!-X òƒÒ\"†/€¡-§Å®˜L\nš{\Ó\"z‡\n+D´¸\Ôu\ÛT™`x\nÁUù\nž‰`Dhö‰Í¾¬°W•x\Ð-|uTü`\Û\ÚÚš\ïclh1\"¾K2‘Ë¸Þ„¢\Ãw\n`7,a	\"\Ô%\0\Ãü]€©iZh›ú¼,UŒˆRT\íºl…r½	è°¸kwR\"O8>u¼	©,c533\Ã\Æ€\ã\Z\Ë_\Ú\Ä\Ó\0\à\Ò&«›>.øÜµa\0¾\Î\È]\Å\ÞÈ|_\ädB\018\É0M\îG¯\Õ€wÀ\'>2F°\ê¦õp\än\Ú$<h !\Úi Ñ¯DÀðÁu\Ã5@U%\"\Ø•DLD¨|‘»Îõc\ä„1®‘\ëð»Fi\äT\Õd>:\æ÷«A\ÏX’=\â¦Iˆ\×*¸Ì¯r\Ó\0²\Ü¶¡€Ñª›\ÖPÜ´¼~s7m\"Ò•h¨arÐŸe q\Ø\r4º”@\ã¦	Ÿ[p¯6\ÂC\åA\âûq…\Ê°š\ìùð\Ïß£Oö$<6’=x—¤,\Õ\Äû°Éž‰\0uùÕ²—®|þ\â¹\äA’>`}hº²m\Ò\ë7¯¿\Å\Ý\å‹K¿þ\ÂnTgˆ„;\Ú\ÐGM¸?þñ1Kül|Àotû\Þ\ã·W\Ë\0d•\É\Ãl\ÜV§I\ïÞ¿‹\êBh\ì3V€=mw\Óš<ð¦gR6=­\ÈÀ\r‚v=p\Ã¹P·\íZ¯m{\ì\\ð¶=\ÎG´\Í\Èe¡WºòVH„Z¿ÿ\á;\Ò\Ò\Z»pð“m\ï\à‰£<qøžzð$•\Ñ\è\ÉOO\ÆqT\é6ICo€¥¬·¼¥b¹¨\êVj›Ü†>\ã\0vb|_GP‰\èÁ=_\ït\åÿ\Æ#43h©¬\0\0\0\0IEND®B`‚ñÑ«]','image/png',0,1518134289,0),(6,'Share A Like','¡\0\0xœ¡^ù‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0IDATh\Þ\íZ[OGös¥ \Þy(R‘•¨H«´\êK‚”þ\0ú\ÒRõ5jQ[UŠDŠH«¨U‘EE\ÓJ\àFy+Æ€/\Ø\Ûø²¶×†W\"ñ¾!~Á‰¾³ževYÛ»\ÞuZ9Œt\äõ\Ì\ìû›3ß¹\ìúˆ¨\Ç\çóÑ•x/Dø¨	G7i;¾E‘\Ä\Å÷b”H\'h/›¢t>M\Å,\åK9*”¤TŠTR*UKš¨\n)j‘Š\å\ÏÁ\ÜL>\Í÷&\Ó	\ÖIDX7\Ö\íl\Ðúö\Z­…ƒ´º¹B+¡e–\å%ZZÿ§kDú\Üh2B»ûqJe’”\Î\í3X…rž¬\Ô\ÊT=R©ö¬J‡Ç‡tô\\\\×ž\ÕxsU\á{p/t¤²I\Ö	\Ýfƒ\áUd\0Ü¥ ûŒ\àfSl9%\Ç\Ö\n\Ð\0\ê\Ì\Ãºó\Éº\Ös\í\ÒQ@\Æf~šá¹•\Ã\no\n,:SÈ°5\ï\î\ï\Z@\Þ\ØY§µ­ rh¥¥ßŸ¼OCCC—\ÖF\ÆÜ‚\Ñ	ý:À \\\0Sª*l•þ9?õõõ\Ù\æ\Ìõÿ\î\ç{A!°\æ¬r\\§‹\ÍHˆ6¶5›Yñ\Ü\ã9\Z\Z\ÔõŽŽ\Ò\Ä\Ä®E?\æ`®S:©_<	Z¸\0·Ä–8ö\é˜¼\Þ\Þ^\Z§©©)J&“,¸F\Æä¹¸7“KS¹¦K]hœ¼C[±°‘*,¬8ðt‘zzz4}cctrrB\æ†>Œa\æ:¡\Óúu€\á\ÐÀ— X®\\€ \Ï\ÎÎ¨Y ±\ë\0†\Ã\Zp|±T”vv·5ª°°bñ…ea\å&yi\Ã\ÚbM»\0X\é?==¥|.Ç‚k7úu€q|\á”À¹8\Ú2¸###–;Û¨apl\É\Ð	N\Æ\ZT!Yñ\Ö\Z7W\r4\Þ–õüø¸%Àh\Â\Ò\ìp¦•þ§Ož\Ð;o÷$\Z‰´¥\ß\0pš©!\Ï\rœ+ƒ\Û\Êj\í€N†\ãcªÈ§)™Ñ¬˜¹8ªq± 	°p8N6s…cjõ\ç\Íúa±\0ôöGÓ—ŸA\ßû²vÖ±~Àl½j‘©A84uUU©\Ý]@\'t#„V\ßÓ¬XŽ(dš\Ç\Üpœ\ÅÆ™©M8&;^\è???§Àü_\æo?ÿ¢\ëZ\\X\à¾\Ã\ï9\Öo\0üX®•9?œ\ë¶	Þ‚ „\Ã	\\œ¨‡m2M˜†\'77‹l\É\Ðp]€…~\0<00À`\ZøXXñ¿/_:\Òo\0šz¤r,+¬W¦D\à\ìD\ß<6[?N¢	+†np12¾K4	iÑ„\ÄÃ¯`´p8L\Ã\Ã\Ãü¬\0~qò¢}€\á\Üp„E!=,h\ï\Ì`0h9&\ß/Ž4t#\ãe\ë![,\ãh<,Âµÿ‚\"\Ð\à\Ì\à\ä\nù¼Þ·¼´¤\ìŠ\"PO8<®\é?\\¶B\á¬úûû™\ä8®qüÅ˜ˆ4\0¸³¢	¤\Õ%\Ç\ášp3\'\×\Èz\Ý89Á·™§YÞ½~¿?žÿÃ“Cì‹º‚ø\áò1i\Æ\ÉvøZ>X1ñAñ %Àre\àv\Ã4\Ñ\0ª9Lû\ê\Þ=\æhWa\Úÿ`§‰†\àF·‰†RT˜\Z rüÝŽ~\ÇÇ‡\Ð\r\×\0U¦ó˜[Š\èªT¹™“k\æ\È\ì89±óš“«òZvœœ‚\\ŒÁfB?ô\Ê\ÉL»ÅžN\ê¿¦‰¡•ù˜7\n\Ó\0²\è7¡Á¢\å0­ …i\Ñd\ã0­«Ê•\"Ñ\Óds<\ëe¢±_O4Pº‰F£‚OWÜ³\ëT\ÙIÀ\ëT¹«\0–‹=‹/x_\ì™ó³n{°–(YÊ…ws±§«\0†L>˜\ÔË•w?»k\0\ÙI\ÑVoY®¬iú\áô›øtù\â\Ë\Ä7_sUm£\àŽ1Ì‘\î7?¼\ÉÔ€8ø†>¾7vüð`’“€,[r;Œ\0n¹Z¢ù?\çÝ¾_`™d˜\çtb\r·z}V²ª=ô\';~\è9\'z*®Á5ƒgu\í¸v\×ô`Aòc{€\Ö\ê±=ž\\ðc{¼Q)zF­Ê•^®Ñ¨\Î\á9À÷?¸AÁ ‡pˆ“UýÅ“šô\âIû\äO\ÖBAºuû–—¯ uŒ\Z\Z­\Õq–`=úõ\ÅSq\éÕ©º\àÕ©J‘\Ç0\ÇK`_—·\âøŽ|%.„ˆÞº¢soW¾ð\×\èv“D•8\0\0\0\0IEND®B`‚ñ$3','image/png',0,1518134407,0),(7,'No Derivatives','\Z\0\0xœ\Z\åù‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0˜IDATh\Þ\íZKkW\Ö:\á½5t\ïÜ–t™\Z’\àü€/B›]Mw—˜\à#B»h\\è®‰=²\ä‡^–dK²\Þ\ZÉŽ³õOðO8\å;£3¾3ž‘\æ!¹Eñ…ƒFsïœ™ù\î¹\ßyÜ‰Q4‰Ð­Œ_ˆð3ø³—Ý¥ƒü>e\ni\Ê\å¨P.\ÐQµD\åz™NšUª·k\Ô\è4¨\ÕmR[oQ»\×6DoQKoR³\Ó\à1[©—ù\Úb¹Àº2…\ë\Æ=R\é$\í$(±§\Ñö\îm¥>°|H¾§÷;ÿL(@_›-f\èð8O¥J‘Êµc«Ñ©3€\Ý~‡zg:õ?ö\èôü”\Î>‚\ãþ\Ç>÷aLKoñ5¸:J\Õ\"\ë„n;\È\ÚÞ¶	2\0žR#Vp«%¶ÀZ«\Æ\Ö\n\Ð\0\êú«uzø\è!ÝÞ½¶p}ë¿®ó\Ø\îi—\']iTØš- \'\Ó;”\Ø\×S[#­øù\êsšŸŸ¿voœC_X0&¡\ß´ ‚`Ú½[e,£\Ù\ÙYÏ¼ƒ±±71¾k®š \çMº\ØÍ¤(y`€<ÌŠ\ã¿\Ç\é\Þü=Sÿ\â\â\"­¬¬°\àX\Îc\Æúa’úM€Á“ …+p\Ûl‰K—,\à\Í\Ì\Ì\Ðòò2­­­Q±XdÁ1Î¡O‹k+µ2uúÈ°dÐ…Á\Éi\Ú\Ï\íY©\ÂÁŠ7ÿ~G\Ñh\ÔÐ·´Ddo8‡>ŒÁX? LZ¿	0\Zø´\0Ëµƒð\0\ä\å\å%\rk››› 1\ë\0†‰\Ã=\àør¥,¥ªp°by@±,L \Ú/m¹·\Ü\Ó+\0nú\Ý\ÞÍ¯~`,_8%p.–¶\n\î\ÂÂ‚\ãÌº5L®Q-:ÁÉ¸\ÇU(V¼Ÿ mw\ÛB\à=±¬O\ç\ç#FKóÂ™\Ãô»5?ú-\0—™\Z\ê\ì\ÐÀ¹*¸£¬\Ö\È\àd8>¦Šz™ŠÃŠ™‹³MÀ\âpüL.ÆŠc\Zõò“\Öo˜­Wo25ˆC\ÃR\×u‚6€,tÐN¬8dX±\ZQ¨4!\ÇÞ°œeâœ–¶8&//o\×ÿ\åsŽD¿`ðc§\ß\áPLœ¶	oA\Âa…a›Jv€\á\É\í\Í![²4\\\ã`»þg?>s” ú-\0#C\Ó\ÏtŽe\ÅzUj@´\0þÁ\ìATð\í}–+†np12¾k4‘IÑ„\Â\ÃÿÀ^Z €\áÜ°„%‰P—\0tŠw¦¦iŽ}\êõ²¤¡¨¨:\Ùr¥G\àa	×¦’\"PO8=\ï›®Z¡8«¹¹9&y\0Žc,\é“H€KŸM ­n[x8g	\×T€‡9!7\ë\r\ë\ä~xú\ÔQB;9Ä¾¨+ÈƒDû\Ë8q²¾VW\0î˜ø¤y2`5Œò\np\Ð0\Ík¦ýö›h7N*\Ñ¢\ß7EÀñ!t\Ã1@U)\Â\Þ–\"¦*U\æ\ä†92/NNf\Þpr=¾—\'§‚ c0™\Ð½j2´\Ø3Iý\×\Â4I‘ZÙ—¹[˜å¼½\r­†i\r%L\Ë\ÝÃ´©*WJ¢¡¦\Éöxvœ‰\Æñ \Ñ@\éR\r·‚\ÏTÜ«\r\çT\ÙOž>\îTyª\0V‹=\ïþúsüÅžxŒu£Øƒ{I\ÉR-¼Û‹=S0dõÅªY®|òý\È~Š>°z\Çre·I/_½üw—¯þ¬üü‡Q½\0wôaŒZp¿ÿ\í}¦\ÄÙ˜À\Ïtû\Þz\â—«œ\0dÕ’ƒl\ÜN¯Moÿxöû\Ç$\Ã>&Œ~§ÿÃŠL6AÖMOp²\ïMÏ¸lz¶BƒkÀ\é8$\0®“7lBC,t¡n\Û´Q\ÛöØ¹\àm{|\ÑmŽF•+\Ç5n¿òõ7_‘–\Ô8„Cœ¬›žô•Oú|Nýð$‘\Ò\èÁw\Æù	\ÒD¨ÁMÿ,°^ÿöšò¥¼ò\é\Ô@ð\éT·\É}3N`oÚ‚oŒƒoeŒBDwn˜\Ü×•ÿ\É&\ìý¡\ÐW\0\0\0\0IEND®B`‚h\å\Ô','image/png',0,1518134520,0),(8,'None Commercial','­\0\0xœ­Rù‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0+IDATh\Þ\íZKOWf]\ÄQ)HU+X´‚T\é¦U‚”þ\0ºjT)›V\Ý%MÔ¨´¡ˆ$J	YDQR	¨\Ô]y0/?°\r¶ñ\ÛcCÈ–?\0ñNô\áw†ñk<F•Ã•®<ž{\çŒý\Ý\ï~\ç1\ÓFDmmmt\Ù\Ý\ïDø8ý²X¥\Ð:ùÃ›\ÚR8¦\íD”b©\íf”\Ê%)OS¶¡œ–¥\\1§w-KY-C™|š\ç`n<\ãk#±0\Ûò‡ýl÷ðm®\Ðò\Æ-­yiqu|ó\Ü\çW\æhnù¿–\é\n\Ðg\à\"~\Ú\Ú	Q4¡Xr‡ÁJ\çS`¡”§\â¾F¥\×E\Ú;Ø£ý7z\Çq\éu‰\Ç0\'«eù\Z\\\ÑD„mÂ¶d\ïÚ¢2\0nQ\Û\Ì\à&¢\ÌÀd6\Élh\0u\â\Ñ\Ýü\ê&µw´Ÿ\Û\n8‡±‰\Ç<·°W\àE£\ã\é8³ykg\Ëò\Ê\æ2-­{u}UYü`ôõõõ»7\Îa¬Q0ša\ß\0² ‚`r\Å,³\Ò3\å¡\î\î\îšus=\Ï=|-$lN ‡¹XõûheC¹‹§^NQo_¯appFFF¸\ãX\Îc\æ\ÖB3\í\0C\'!g\àæ˜‰C_™À\ë\ì\ì¤\á\áa\Z£H$\Â\Ç8‡1u.®\'c”/\é ƒÉ]“7i=¸f–\n\Ïþ;Cº½¡!:<<$k\Ã9Œa\æ\ÖB³\í\0Ã¡A/!`®\\€ ©R›5U\ÈX0,\î\ÇŒhskC—\n\ËfaÕ¦xiÓ½åžµPÎ¾gr’¾ý\æV\Ãö\r€±}á” ¹\Ø\Ú*¸ýýý¶+[®ap\ÊdØ„&\ãgR¡°x}‰¼«‹&™€\î	³\ÞTM˜V‹fŠý«ô÷\ËW&p»ºº¨ýývº÷g:::rd\ßpŒ¥!\Å\rš«‚[µµ€M†\ãc©H\Å(\×Y\ÌZÐµXdB\0‡S\Ï\âb®8¦j^\ì÷~ô1}x¥‡n|ñ%ýøý|»õ\É\ã\'|<?7\çÈ¾	`f¯–ai‡†­®i\Z9m\0Y\ä6a!œ°8´­³X(T™‡cm\ØÎ²pÖ­&Ž©–?¹÷\îÜ¥_\î\Ýg¥s­;§û&€¡ùRžC1ùñX\ÅF›\è:B8\ì\Ñ\âðiØ¦Ê„`xrk³É–L\r\×\Ô\n°j?•L2°ªm|·‚\\«}À\ÈÐ´}cYa¯*\rˆ ?X=t|\ë\Ø\ä\ä¤\é	‹aZŒŒ\ïœLø}z4¡\èðE,\r\Ì°Ÿ|j0\Z/\à÷;\Î\r[X’u\ë@»x`z½^\Û1õz\ÙÒ°ŒR”8\rÙ‚\Ñ G\Ða	\×.Z\"\ÔvrrB3\Ó\Ó|æª²!:\íH\"PO\Ø;(?\\e¡8«žžy\0Žcl“H€Ë˜L ­Î™t8h\n\×T€+9¹r\ìu\â\äTû`*€{\ÑE&\à\è~ÿu”®t\à\Ì\É!öE]A~8@´þ;M®E¯\Õ€{ &\Þ\Í\ìVX\r\Ój\ØI˜¦Ú‡<Lü1n„i\ÙÀ\ê†Ã´ÿ#Àõ&\Z¢n$\Z\Ïþü\ë\\¢\á\Ä~\ÝÇ‡\Ð\r\Ç\0U•\ëX£\ÑR©r%\'WÉ‘\Õ\â\äd\åu\'W\ä{\Õ\â\äT\ÔböaWMfœ{šiÿ\\˜&)2B+\ë6/¦d9oC£\Õ0-­„iHù0­¥Ê•’h¨i²5žu3\Ñ\Ø9M4Pº”D£\\Á§%\nî‰´}ª\\OÀ\íT¹¥\0V‹=3ÿL»_\ì™ò°m{p/)Yª…wk±§¥\0F}8j”+ow\Ûr=E°Þ¶\\Y\È\Ðø£ñwñ\éòÙ—‘;?qUtPp\Ç\æ¨÷kŸ_ci@œ|Gß›Oüöp”“€¬2\Ù\É##€›/\æ\èÅ«¾_`›dX\ç4b¿\Ü÷rE&\Ç\0 kúCOhr\Ý=§\ä¡g¶ap\íþ°õ¸A\0\Ê.^¥m`‘õ±=@«ö\ØO.ø±=Þ(d\\“…j\åJ·°Ü§«¡ö«Ÿ\rw\Å\Ë!\âd\Íxñ¤¤¼xR\âs\ê‹\'K>/]¿q\Ý\ÍWš\"\r\Õ$¡©V;Àzú\ì)…¢!\åÕ©ÓŽW§\n\Ã7½h_˜_v;½w	DóÞ®|“\Þ-ÒŠ\è\0\0\0\0IEND®B`‚F-2','image/png',0,1518134628,0),(9,'None Commercial Share a Like','`\0\0xœ`Ÿø‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0\ÞIDATh\Þ\íZ\ßKW\Þ\çR\ÅW±¡¶Y‹¶¤¥´$\ä°O-…´–\ÒÒ‡\ÐJÒ„¦\Ý\Ä$˜„4¡²˜Z\r¨µB(1qýµê®«»º®û{g\×Ä¼\Z\ÈCú&þ§|göŽwÆ\ÙU‰l¼pqö\Þ;\ß8\ß=÷;\çž;\"ªv8tX÷¾\áOþ‡\×?M³ò-\ÎQ`ižÃ‹´	Q8¦\ÕD„b©(\Å\ÓqJf”R’”Ê¦Ôª$)©$(‘ŽóŒ]‰…ù\Þ`x‘±|‹>\Æ\Æ3¦\æ&ibvœÆ½\Z›~L§q}49J£+¦JDo“\ëúha9@¡• …£\ËLV<c3¹4eŸ(”{š¥µõ5zòL­¸\Î=\Íq\Æ$•$ßƒ{Š\ØF’=\Þ1d\\¡$;ô\äFBl\Ñd”­¤Ô®]t\êô)ªª®Ú±Ð†¾®›]<6³–\áIE¯\ÄWØš–t$O\ÎM\ÐøŒG%yj›\äK®K\Ô\ØØ¸\ãhCŸÝ—;8\ZÁ™\\“\Ê&\Ù*\Ý=nª««³­;\ë¾\ç\æ{!!°\æˆFr@“‹i\ßMÎª$ÃŠÿ\ì¿G\ÎF§†sò\äI\ê\è\è\àŠkÑŽ1=}=¦/…¾ƒ‚£„,l“›bKlû¬MG^MM\rµ··\ÓÕ«W)r\Å5\Ú\Ð\'Å½+\Ñ0¥s*É°dÈ…ª\És43\ïÕ¤\âŸ\ÃT]]­\Þ\×\ÖFd,hC\Æ`l¡—\Z\Z<P8\ZÁph\ÐK\È,\×H.\È‘›››T¬\r\r\éˆ\Æ\ì‚dL&Ï€\ã›ùinaV•Š\Ù	m	b¢\ä\"yc\Ý3¶ñ…„\Åq\Ü\Ý\Ýô\å\ç_\ì\n\çÅ‹‹F¹\â\ÚŽF0–/œ4K[&·¥¥¥\àšL\î‘-˜\Ðd<c[*T+¾\Ü\é\Ò,\å\Ùúº%Á(\Ârd\r\Ä5\Ú\Þom¥û}ý:rkkk©\ê\Í*ºxþg9\Åp\äÿgdx˜\Þ>R¯«~Ÿ¯(ŽŽ\à0KCŒ\Z4W&\×\Êj\íM†\ãc©ˆ…)¸¢Z1´¸±Iµ\ÞR&c…£/#Vów™€Ÿ|J?|÷=·aõÝºy‹¯Ž\Ú\Âÿ,–ñ>ú˜¾ýúž$A2&\ÏGG0[¯’`i\rK]Q*·€d!À6B8aÅ%ÕŠ…1,O1A\Æ%\"ü2h»p\î<ýr\á¢\ÎÚ„\å\ZWH1”­­-\Z\ê½\ÏÜº£\Ý380Àm­\Í\ï™\â\è†>¦si\Å\ÄKa\Öw[„>¡\"„\Ã\nZ¼˜\Û\Ð\Ïl,vEº‚{Œ\Ä\È8°<+cà·‘\äb8 ¸¡¡\Ét::=“÷\ßË—qtc‡¦<Q8–\Ö+K¢\èf	U&\ß\Ø×_6¢+6´;>Y&ö‹`™k¤À\á	\rµ\Âñz½\Ô\Ü\Ü\Ì\ïYˆ\à\çÏ­	†s\Ã›yI¸P¼2=OÁ>ù~±Ô¤(’\Ù\æCó{.rb9£ÀrŽ\n:m…ƒ‰€“‹\ÇbZt\\`Ø’\ä\Ö\Ös\Ú\ÉV(œU}}=‹9\Ç5–¿\è‘}…d\Û\ê”N‡ç©©©\É\ÔÉ™Y¯\ç„KZ‰*d]ù\ÍEG\êÞ²\Äz‹\Úu\í:×¦£Gùw_\ï_öœb_\ä\Ä\ÉË¡˜&\Û\Ñky\àˆ‰W«\ZÁ×®ha‘]‚­\Â+y)ƒ¦Á\ëÃªK\Å†\Ñú<{VÃ²\Ó^%Á\ØpˆP\Í\ÎFCh])»¿\ßÙ±\Ñ(\'™H²\å£ÊŽ²N\ÉÇ‡\Ð\r\× U–cŸ]‰\0Á>¨\ì­r1\'WÌ‘\Ùqrb†U\'—\åg\ÉNOû§h\ä\ß]\Ö\n“\Ü/oZ¬’4 GNÒ¼Jœaš\Ø\"#´2.s³0\r$‹vc\n,Z\Ó\âR˜\æúµ\Ì\Zç‡§\Ç\è\×\Ë˜®\ry›lŒg÷r£±œ\ßh u)²j\"mYI§\ZÁ‘x\á­r)ùr·\Êrò½b	–“=ƒ\ì}²§\Ç\Í\ØHö\àY\"e)\'\Þ\Å\ÉF%i£º:]Zºò\ÌWgt$—’ô\ÕLWftý\Æõ\×ñtyûGÇ¹Ÿ8ŒÊ–‘pG\Æ\È	÷cci@œ\í\Ê\ç}_k‚Q‘\0\Çf\0$Ë–\\Î‘\ÈMgS\Ô\Û\ßk÷;‚‚›\ã;8f¿Í’I¥þO%`\ìld’õ\Ðš\\ò¡g8ôL\Ú&·\Æk»/e6I\Å&\Î\ÎD•ƒ\á0\ë€\\\È\Çö \Í\ê\Ø\'|l\ï#2‰’eÁ*]Y\êD™ý-\ç2Ë‹”M0Ÿo}\ÐJžI‡pˆ“\íÃ“œô\áIŽ\Û\äOÆ§<tü\Äñ²^f7\Ò`%	eXß®W\Ã8Èº}÷6B\éÓ©|Å§S™÷aL9\Ä\î—\ïVƒ­|Âž|XwQ‰\èC\"ö\ï\ë\Êÿ\ærŽùk\ßI\Ö\0\0\0\0IEND®B`‚ƒk|l','image/png',0,1518134739,0),(10,'None Commercial No Derivatives','\í\0\0xœ\íù‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0X\0\0\0\0\0\0c\È\n\à\0\0\0gAMA\0\0±üa\0\0\0sRGB\Ù\É,\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€\è\0\0u0\0\0\ê`\0\0:˜\0\0pœºQ<\0\0kIDATh\Þ\íZ[OG\æ¹*ˆWD¥ U­\0©´J_Z%H\é O­*¥\â!My+Jš¨i@“(m$d‘F¡\Ð	U`À\Ü|Á6\Ø\Æw¯\r!¯<ð¿\àTß¬g˜]v½»\Æ4\Èa¤ë¹œe¾9ó\Ël5544\Ðy­}%ÂŸò\åÀ­†V\È^£\ÐFÂ±0m$¢K\Åh+“ T.I\é|š²…\å”,\åŠ9µ*Y\Ê*\Ê\ä\Ól\Æ\ÆS1673Yþ°Ÿ\É\Æ;|k‹´°:Oó\Ë^š[zI/}³¬\Î.\Î\Ð\ÌÂ‹º©\ÐG\à\"~Z\ßQ4¡Xr“•Î§€…RžŠ;\n•^i{w›v^«Ï¥W%Ö‡1Y%\Ë\æ`.dD&²õ {—\ç\È\0¸NAnÐ‚›ˆ2\rLf“L[\Z@u?pÓ•/¯PcSã±£€6ô¹º\Ù\Ø\Âvm\n4:žŽ3m^\ß\\×€¼¸¶@ó+^d\ß\Èw\\w¨££\ã\Ø;Ð†>»‹;rÀ \\\0“+f™VzF=\Ô\Ú\Új›w0\Öó\Ô\Ã\æ‚B \Í	rH\ÐÅ’\ßG‹«*\È\Ð\â?ÆžR{G»\Ó\Ó\ÓC¬â™·c\Ì\èóQ\ÓE¡\ï¬\È\0ƒ\'AG\à\æ˜&ö~Õ«¯¹¹™úúúhhhˆ\"‘«xFúä±˜O\Æ(_RA†&ƒ.TN^£•à² Š¦ÿ¦¦¦&u^o/\í\íí‘¾ \r}ƒ±F‹šœš8SrÀ0h\àK\Ð4W.ÀT©LNNj€\Æ\îdl6\ï€\áF´¶¾ªR\Å\ê‚8‚\Ø(¹H\ÖXó.[¿ ®qz9ž‘úö\ëoN,\Çl\ÍfrÀ8¾0J\à\\mÜ®®.\Ã4+\ØÌ‘52Á\Éx\ÇU¨Z|w\Ð%4\åõ\î®%À(\\sd\Ä3\Ú>\é\î¦?ŸiÀmii¡\Æw\éöÍŸhß–£ÿÇ¬\É\Ñ\0cÔb\rœ+ƒk¥µv@\'\Ãð1ªH\Å(Wµ\\\ÜÑ©j¯“M\ÄXnhøbø)hÿ\àCzÿB]þü\êÿþ:k\Ã\é{ôð{ž™±%\ç¤ÿ`¦½J†Q7h8êŠ¢Pµ sº€LÈ†Çµ8´¡j17 ú‚\ã\É7\È\è¨rC#/m·nÜ¤Ÿo\Ýf ó\Ê5\×H#\Í\ä\ÈE–%\×Jr4\0ƒó¥<s\Åø¢°\ë\'-œŸP\á\Â\á„p.—\Ý6ôÁ2\ë‹AT¤)˜£F–“J&°²üÖƒl%¥ÿ‡~\ÃZIŽ`DhÊŽ\Â|Y®½25À[\0\Ï`—Peðõ}###šs-†lp1\">™&N`^ ¹\0¶û£…\æÁ\àü~Gr¬JE€a\Üp„y!I\0h\ä\ïL¯\×k\Ø\'\Ï\çG²ñŠe—-\rÖœ\"\ärxxH\ã\ã\ìš«?\â\à\éÿ…\"O\Ø\Þ-‰\ÉZÈU[[#s\0Žg\Þ\Ç=\r\0\ÎûŒhauN\Ã\ÃA\ê\ì\ì45*f\Úk\×8AS´•\ÓÝ½_]t¡õ=[r®_»fXm9ø¾\È+ðDý\"8\Ù_\Ë\'\0\ï€O¼•\Ù\0Þ¿\'\Ü\"»\0[¹W2=¸\ï7\r.´Ú©œ»io`\ÜU³hp®s <ù\í÷cF5r*qo\Å@\Ã.EÀðÁu\Ã3@•)B\ßg—\"\0ðô‹\éú•+¹J†ÌŽ‘\ã;¬\Z¹\"{—l\ä\0ðRÀGSÿNi²V\Ø4\ÈÁ|9h±J\Ò\09Ió&\ås\Óxˆ\×J\Ì\Í\Ü4€\Ì\Ûõ}(\Ðh\ÙMKKnZ ™5–^š£_\î\Öaº’\Zr˜¬÷gkhl–\r¤.yV§-\ë\évC\0œH‡\ÊN\âñjCe9ù^·\0\ËÉž‰¿\ÆkŸ\ìõ0\ÙHö\à]<e)\'\Þù\ÍF=]	€Q]ƒ.‘®¼ú\ÝU\r\ÈN’>\Ðz\Ãte!C\Ã†\ß\Æ\Û\å£7~dnT±Š„;ú0FN¸_ü\ì\"£øÙ®r\Þ÷­	p\0Y\Ö\äj®Œ\0n¾˜£gc\Ï\ì~G`d\è\ÇØ‘cö\Û,™\äDN¥¤”%ÀdE½ô\';¾ôå—žY\Û\à\Za´0\'Ui¾Ýª\ãÐ…|mÐ¬®\íqsÁ®\íñ}D!\ã˜¬Ò•N7\Ê\ìo-\åT\r0»\ßú´›¼‹^\æ\ÂÁOVÄ‡\'%\éÃ“k“?<™÷y\é\Ò\åK\Õ|jt\"j°¢„j4¸r¬ÿa€õø\Éc\nECÒ§S\åŠO§\nÖ‡1\Õ\0{Z\Z|f9ø¼Ö°\Ñ;\ç@œ\Þ×•ÿ8b\Í`w‡™œ\0\0\0\0IEND®B`‚H=','image/png',0,1518134841,0);
/*!40000 ALTER TABLE `subjectives` ENABLE KEYS */;
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
