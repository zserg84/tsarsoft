CREATE DATABASE  IF NOT EXISTS `tsarsoft` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `tsarsoft`;
-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: tsarsoft
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_blog_blog_category` (`blog_category_id`),
  KEY `idx_blog_title` (`title`),
  CONSTRAINT `fk_blog_blog_category` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,1,'Мытьё полов','<p><strong><em>Моем полы</em></strong><br />\r\n<img src=\"http://cs416229.vk.me/v416229561/8a7a/E9P2O-eGwx4.jpg\" /></p>\r\n','Очень качественное','2015-01-01 07:00:00','10012015121456_4387.png'),(2,2,'Вася пупкин','Крутой разраб',NULL,'0000-00-00 00:00:00',NULL),(3,3,'Джедай','Ищем джедая',NULL,'0000-00-00 00:00:00',NULL),(4,4,'Уячина','<p>Тут текст.. И картинки</p>\r\n\r\n<p><img alt=\"\" src=\"http://cs308226.vk.me/v308226561/4a0f/yA17RmJNlyY.jpg\" style=\"height:253px; width:200px\" />&nbsp;</p>\r\n\r\n<p>и снова текст</p>\r\n','Всякая чепуха','0000-00-00 00:00:00',NULL),(5,2,'Еще немного','<p>Снова пишем текст</p>\r\n\r\n<p><img alt=\"\" src=\"http://narisuy-ka.ru/wp-content/uploads/2012/11/%D0%9A%D1%80%D0%B0%D1%81%D0%B8%D0%B2%D1%8B%D0%B5-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%BA%D0%B8-1.jpg\" style=\"height:821px; width:640px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Негр выше</p>\r\n','про негров','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-10 23:42:25
