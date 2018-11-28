-- MySQL dump 10.13  Distrib 5.6.42, for Linux (x86_64)
--
-- Host: localhost    Database: www_ling_li_cn
-- ------------------------------------------------------
-- Server version	5.6.42-log

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
-- Table structure for table `nobita_comment`
--

DROP TABLE IF EXISTS `nobita_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nobita_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `content` text,
  `create_time` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nobita_comment`
--

LOCK TABLES `nobita_comment` WRITE;
/*!40000 ALTER TABLE `nobita_comment` DISABLE KEYS */;
INSERT INTO `nobita_comment` VALUES (1,0,'article','大雄','4020426@qq.com','17620978090','你们的产品很好，我很喜欢。','1540658396'),(2,0,'article','大雄','4020426@qq.com','17620978090','很喜欢你的产品，多多支持。','1542868186'),(3,0,'article','大雄','4020426@qq.com','17620978090','我会一直支持你们的产品的。','1542868238'),(4,0,'article','大雄','4020426@qq.com','17620978090','你们的产品真的超级好。','1542868984');
/*!40000 ALTER TABLE `nobita_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nobita_content`
--

DROP TABLE IF EXISTS `nobita_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nobita_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `links` varchar(255) NOT NULL DEFAULT '1',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nobita_content`
--

LOCK TABLES `nobita_content` WRITE;
/*!40000 ALTER TABLE `nobita_content` DISABLE KEYS */;
INSERT INTO `nobita_content` VALUES (1,0,'凌力碱性电池特点',0,'<p><img src=\"/upload/image/20181116/1542348545385622.jpg\" title=\"1542348545385622.jpg\" alt=\"凌力碱性电池特点01.jpg\"/></p><p><br/></p><p>凌力绿能量：一粒等于普通电池7粒，持久耐用，5年超长保质期！ 还为电池漏液损坏电器而烦恼吗？绿能量不漏液！ 绿能量执行欧盟标准，可随生活垃圾丢弃！ 绿能量质量超越国外品牌，价格比其他国外品牌便宜！ 绿能量为中国质造做出贡献！ 绿能量！六大优势！用电池要用质量好的性价比高的中国人自己的电池！ 中国人！爱上中国造！</p>','凌力绿能量：一粒等于普通电池7粒，持久耐用，5年超长保质期！ 还为电池漏液损坏电器而烦恼吗？','凌力,电池',1540313985,1542348510,'1',0,0,0),(2,0,'凌力电池销售团队参观连州碱性项目',0,'<p><span style=\"color: rgb(51, 51, 51); font-family: \"><img src=\"/upload/image/20181116/1542348613890451.jpg\" title=\"1542348613890451.jpg\" alt=\"_DSC0520.JPG\"/></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: \">2015年10月份凌力电池销售团队到连州凌力电池参观学习，凌力电池销售团队对于新厂房建设和车间生产 环境等表示高度认可，对于目前碱性销售可谓信心百倍。</span></p>','','',1540314517,1542348605,'1',0,0,0),(3,0,'碱性车间顺利投产',0,'<p><img src=\"/upload/image/20181116/1542348644639614.jpg\" title=\"1542348644639614.jpg\" alt=\"碱性车间顺利投产01.jpg\"/></p><p>凌力电池连州厂区碱性项目于2015年7月份正式运行，本公司所使用的是国际上最先进碱锰高速生产线。</p>','','',1540314534,1542348629,'1',0,0,0),(4,0,'凌力超强碱性',0,'<p><img src=\"/upload/image/20181116/1542348661672428.jpg\" title=\"1542348661672428.jpg\" alt=\"凌力超强碱性01.jpg\"/></p><p><span style=\"color: rgb(51, 51, 51); font-family: \">连州市凌力电池配件有限公司碱性生产车间于2014年9月建设完成，预计碱性正式生产于2015年7-8月。目前凌力电池所采用的 是国内一流的碱性生产线，所采用的是日本东芝技术工艺。</span></p>','','',1540314545,1542348653,'1',0,0,0),(5,0,'碱性车间',0,'<p><img src=\"/upload/image/20181116/1542348677309145.jpg\" title=\"1542348677309145.jpg\" alt=\"碱性车间01.jpg\"/></p><p>凌力电池碱性项目由2014年6月份正式启动，碱性车间基础建设由珠海东艺建设工程设计，无论从美学方面还是实用性方面 都设计得非常完美，一层使用整体幕墙使透光性达到最理想状态，生产线车间全封闭恒温恒湿无尘，既保证了产品质量又 给到员工一个良好的生产环境。凌力电池碱性项目预计2015年6月份正式投产。<br/></p>','','',1540314565,1542348668,'1',0,0,0);
/*!40000 ALTER TABLE `nobita_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nobita_product`
--

DROP TABLE IF EXISTS `nobita_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nobita_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `thumb` text NOT NULL,
  `product_info` longtext NOT NULL,
  `create_time` int(11) NOT NULL,
  `updat_time` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nobita_product`
--

LOCK TABLES `nobita_product` WRITE;
/*!40000 ALTER TABLE `nobita_product` DISABLE KEYS */;
INSERT INTO `nobita_product` VALUES (5,'碱性电池力量王','凌力电池新型碱性电池力量王，全新形象，全面升级，全能碱性','碱性电池 凌力电池 5号电池 7号电池','/upload/product/201811/bb972de10c64accb5852aa0ac8445076.jpg','{\"thumb\":\"\\/upload\\/product\\/201811\\/bb972de10c64accb5852aa0ac8445076.jpg\",\"id\":\"5\",\"title\":\"\\u78b1\\u6027\\u7535\\u6c60\\u529b\\u91cf\\u738b\",\"description\":\"\\u51cc\\u529b\\u7535\\u6c60\\u65b0\\u578b\\u78b1\\u6027\\u7535\\u6c60\\u529b\\u91cf\\u738b\\uff0c\\u5168\\u65b0\\u5f62\\u8c61\\uff0c\\u5168\\u9762\\u5347\\u7ea7\\uff0c\\u5168\\u80fd\\u78b1\\u6027\",\"keywords\":\"\\u78b1\\u6027\\u7535\\u6c60 \\u51cc\\u529b\\u7535\\u6c60 5\\u53f7\\u7535\\u6c60 7\\u53f7\\u7535\\u6c60\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u529b\\u91cf\\u738b\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"\\u78b1\\u6027\\u7535\\u6c60\",\"5\":\"\\u6709\\u65e0\\u6c5e\",\"6\":\"\\u65e0\",\"7\":\"\\u7535\\u538b\",\"8\":\"1.5V\"}}',1542343749,0),(6,'碳性电池（P型 / 绿色）','凌力高性能碳性电池，超大功率，无汞环保，经济实用','凌力电池,碳性电池,5号电池,7号电池','/upload/product/201811/1f779d1b03ac9def929b195dd06aaa67.jpg','{\"thumb\":\"\\/upload\\/product\\/201811\\/1f779d1b03ac9def929b195dd06aaa67.jpg\",\"id\":\"6\",\"title\":\"\\u78b3\\u6027\\u7535\\u6c60\\uff08P\\u578b \\/ \\u7eff\\u8272\\uff09\",\"description\":\"\\u51cc\\u529b\\u9ad8\\u6027\\u80fd\\u78b3\\u6027\\u7535\\u6c60\\uff0c\\u8d85\\u5927\\u529f\\u7387\\uff0c\\u65e0\\u6c5e\\u73af\\u4fdd\\uff0c\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"keywords\":\"\\u51cc\\u529b\\u7535\\u6c60,\\u78b3\\u6027\\u7535\\u6c60,5\\u53f7\\u7535\\u6c60,7\\u53f7\\u7535\\u6c60\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u51cc\\u529b\\u78b3\\u6027\\u7535\\u6c60\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"P\\u578b\\/\\u65e0\\u6c5e\",\"5\":\"\\u5916\\u58f3\",\"6\":\"\\u94dd\\u7b94\\u8d34\\u6807\",\"11\":\"\\u6807\\u51c6\\u7535\\u538b\",\"12\":\"1.5V\"}}',1542343738,0),(7,'碳性电池（P型 / 红色）','凌力高性能碳性电池，超大功率，无汞环保，经济实用','碳性电池,凌力电池,5号电池,7号电池','/upload/product/201811/da0d1bfbf754b1dbddb87a73a0003e56.jpg','{\"thumb\":\"\\/upload\\/product\\/201811\\/da0d1bfbf754b1dbddb87a73a0003e56.jpg\",\"id\":\"7\",\"title\":\"\\u78b3\\u6027\\u7535\\u6c60\\uff08P\\u578b \\/ \\u7ea2\\u8272\\uff09\",\"description\":\"\\u51cc\\u529b\\u9ad8\\u6027\\u80fd\\u78b3\\u6027\\u7535\\u6c60\\uff0c\\u8d85\\u5927\\u529f\\u7387\\uff0c\\u65e0\\u6c5e\\u73af\\u4fdd\\uff0c\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"keywords\":\"\\u78b3\\u6027\\u7535\\u6c60,\\u51cc\\u529b\\u7535\\u6c60,5\\u53f7\\u7535\\u6c60,7\\u53f7\\u7535\\u6c60\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u51cc\\u529b\\u78b3\\u6027\\u7535\\u6c60\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"P\\u578b\\/\\u65e0\\u6c5e\",\"5\":\"\\u5916\\u58f3\",\"6\":\"\\u94dd\\u7b94\\u8d34\\u6807\",\"7\":\"\\u6807\\u51c6\\u7535\\u538b\",\"8\":\"1.5V\"}}',1542343707,0),(8,'碳性电池（P型 / 紫色）','凌力高性能碳性电池，超大功率，无汞环保，经济实用','凌力电池,碳性电池，5号电池，7号电池','/upload/product/201811/ea8bbff4b9b4c69dbd3d283f7229aa61.jpg','{\"thumb\":\"\\/upload\\/product\\/201811\\/ea8bbff4b9b4c69dbd3d283f7229aa61.jpg\",\"id\":\"8\",\"title\":\"\\u78b3\\u6027\\u7535\\u6c60\\uff08P\\u578b \\/ \\u7d2b\\u8272\\uff09\",\"description\":\"\\u51cc\\u529b\\u9ad8\\u6027\\u80fd\\u78b3\\u6027\\u7535\\u6c60\\uff0c\\u8d85\\u5927\\u529f\\u7387\\uff0c\\u65e0\\u6c5e\\u73af\\u4fdd\\uff0c\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"keywords\":\"\\u51cc\\u529b\\u7535\\u6c60,\\u78b3\\u6027\\u7535\\u6c60\\uff0c5\\u53f7\\u7535\\u6c60\\uff0c7\\u53f7\\u7535\\u6c60\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u51cc\\u529b\\u78b3\\u6027\\u7535\\u6c60\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"P\\u578b\\/\\u65e0\\u6c5e\",\"5\":\"\\u5916\\u58f3\",\"6\":\"\\u94dd\\u7b94\\u8d34\\u6807\",\"11\":\"\\u6807\\u51c6\\u7535\\u538b\",\"12\":\"1.5V\"}}',1542343624,0),(9,'碳性电池（S型 / 橙色）','凌力高性能碳性电池，超大功率，无汞环保，经济实用','凌力电池,碳性电池,5号电池,7号电池,五号电池,七号电池','/upload/product/201811/fe251be5b608c1b8b097722857aa5c9f.jpg','{\"thumb\":\"\\/upload\\/product\\/201811\\/fe251be5b608c1b8b097722857aa5c9f.jpg\",\"id\":\"9\",\"title\":\"\\u78b3\\u6027\\u7535\\u6c60\\uff08S\\u578b \\/ \\u6a59\\u8272\\uff09\",\"description\":\"\\u51cc\\u529b\\u9ad8\\u6027\\u80fd\\u78b3\\u6027\\u7535\\u6c60\\uff0c\\u8d85\\u5927\\u529f\\u7387\\uff0c\\u65e0\\u6c5e\\u73af\\u4fdd\\uff0c\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"keywords\":\"\\u51cc\\u529b\\u7535\\u6c60,\\u78b3\\u6027\\u7535\\u6c60,5\\u53f7\\u7535\\u6c60,7\\u53f7\\u7535\\u6c60,\\u4e94\\u53f7\\u7535\\u6c60,\\u4e03\\u53f7\\u7535\\u6c60\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u51cc\\u529b\\u78b3\\u6027\\u7535\\u6c60\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"S\\u578b\\/\\u65e0\\u6c5e\",\"5\":\"\\u5916\\u58f3\",\"6\":\"\\u70ed\\u7f29\\u80f6\\u819c\",\"7\":\"\\u6807\\u51c6\\u7535\\u538b\",\"8\":\"1.5V\"}}',1542343589,0),(11,'碳性电池（S型 / 蓝色）','凌力高性能碳性电池，超大功率，无汞环保，经济实用','碳性电池,超大功率,无汞环保,经济实用','/upload/product/201811/fcac9455018b1d8c71da20333ba71593.jpg','{\"title\":\"\\u78b3\\u6027\\u7535\\u6c60\\uff08S\\u578b \\/ \\u84dd\\u8272\\uff09\",\"description\":\"\\u51cc\\u529b\\u9ad8\\u6027\\u80fd\\u78b3\\u6027\\u7535\\u6c60\\uff0c\\u8d85\\u5927\\u529f\\u7387\\uff0c\\u65e0\\u6c5e\\u73af\\u4fdd\\uff0c\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"keywords\":\"\\u78b3\\u6027\\u7535\\u6c60,\\u8d85\\u5927\\u529f\\u7387,\\u65e0\\u6c5e\\u73af\\u4fdd,\\u7ecf\\u6d4e\\u5b9e\\u7528\",\"info\":{\"1\":\"\\u4ea7\\u54c1\\u540d\",\"2\":\"\\u51cc\\u529b\\u78b3\\u6027\\u7535\\u6c60\",\"3\":\"\\u7c7b\\u578b\",\"4\":\"S\\u578b\\/\\u65e0\\u6c5e\",\"5\":\"\\u5916\\u58f3\",\"6\":\"\\u70ed\\u7f29\\u80f6\\u819c\",\"7\":\"\\u6807\\u51c6\\u7535\\u538b\",\"8\":\"1.5V\"}}',1542343972,0);
/*!40000 ALTER TABLE `nobita_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nobita_setting`
--

DROP TABLE IF EXISTS `nobita_setting`; /*!40101 SET @saved_cs_client     =
@@character_set_client */; /*!40101 SET character_set_client = utf8 */; CREATE
TABLE `nobita_setting` (   `type` varchar(255) NOT NULL,   `content` longtext
NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT; /*!40101 SET
character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nobita_setting`
--

LOCK TABLES `nobita_setting` WRITE;
/*!40000 ALTER TABLE `nobita_setting` DISABLE KEYS */;
INSERT INTO `nobita_setting` VALUES ('admin','{\"site_name\":\"凌力电池\",\"admin_email\":\"4020426@qq.com\",\"web_url\":\"http:\\/\\/note.199508.com\",\"keyword\":\"\\u5927\\u96c4,199508\",\"description\":\"\\u5582\\u9a6c\\uff0c\\u5288\\u67f4\\uff0c\\u5468\\u6e38\\u4e16\\u754c\",\"icp\":\"\\u7ca4ICP\\u590714057972\\u53f7-1\",\"host\":\"smtp.qq.com\",\"username\":\"post@199508.com\",\"password\":\"***********\",\"port\":\"465\",\"nickname\":\"\\u5927\\u96c4\\u7684\\u90ae\\u9012\\u5458\",\"secure\":\"ssl\"}'),('comment','{\"address\":\"\\u4e2d\\u56fd\\u5e7f\\u4e1c\\u7701\\u4e1c\\u839e\\u5e02\\u4e07\\u6c5f\\u6cb9\\u4e45\\u5de5\\u4e1a\\u533a\",\"addemail\":\"523039\",\"phone\":\"86 - 769 - 2227 1791\",\"phonecall\":\"86 - 769 - 2228 5445\",\"email\":\"dglingli@21cn.com\"}');
/*!40000 ALTER TABLE `nobita_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nobita_user`
--

DROP TABLE IF EXISTS `nobita_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nobita_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `group` varchar(32) NOT NULL,
  `create_time` int(11) NOT NULL,
  `face_url` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nobita_user`
--

LOCK TABLES `nobita_user` WRITE;
/*!40000 ALTER TABLE `nobita_user` DISABLE KEYS */;
INSERT INTO `nobita_user` VALUES (1,'admin','e4f7b7e74caa7f4c717d423eeabfc67e','admin',1539877346,'/upload/face/201811/9a8a3e0461d5ca7d7fe6f50a93bec37d.jpg'),(2,'test','e4f7b7e74caa7f4c717d423eeabfc67e','guest',1539877346,'');
/*!40000 ALTER TABLE `nobita_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-28 15:19:26
