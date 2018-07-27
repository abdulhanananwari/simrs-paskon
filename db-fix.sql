-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.0.43    Database: simrs_paskon
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `card_member`
--

DROP TABLE IF EXISTS `card_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `card_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_member`
--

LOCK TABLES `card_member` WRITE;
/*!40000 ALTER TABLE `card_member` DISABLE KEYS */;
INSERT INTO `card_member` VALUES (1,'sdsd',NULL,'2018-07-27 03:32:24');
/*!40000 ALTER TABLE `card_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'bpjs'),(2,'melati');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokter`
--

DROP TABLE IF EXISTS `dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `spesialist` varchar(225) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `address` mediumtext,
  `ktp` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `dokter_registration_code` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `place_dob` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokter`
--

LOCK TABLES `dokter` WRITE;
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
INSERT INTO `dokter` VALUES (2,'jj','jh',NULL,'Screenshot from 2018-04-18 22-50-18.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'kljlkj','kljklj',NULL,'Screenshot from 2018-04-18 22-50-18.png','2018-07-26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'r','e',NULL,'Screenshot from 2018-04-18 22-50-18.png','2018-07-26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'jkjlkjlkjlkjlkj',NULL,NULL,NULL,'0000-00-00','',NULL,'','',NULL,'',NULL,NULL),(6,'jlkjkjkj',NULL,NULL,NULL,'2018-07-27','',NULL,'','',NULL,'',NULL,NULL),(7,'jlklkjlkjlkjlkj',NULL,NULL,'Screenshot from 2018-04-18 22-50-18.png','2018-07-27','',NULL,'','',NULL,'',NULL,NULL),(8,'lkhkhjklh',NULL,NULL,'Screenshot from 2018-04-18 22-50-18.png','2018-07-27','',NULL,'','',NULL,'',NULL,NULL),(9,'kjklhlkjkj',NULL,NULL,'Screenshot from 2018-04-18 22-50-18.png','2018-07-27','',NULL,'','',NULL,'',NULL,NULL),(10,'abdul hanan aDASD',NULL,NULL,NULL,NULL,'batujajar',NULL,'83817520840','83817520840',NULL,'Tuesday 13 July 1993',NULL,NULL),(11,'abdul hanan aDASD',NULL,NULL,'e8c7c07e94eaacde54e61ca4b78aa51f.PNG','2018-07-27','',NULL,' 83817520840','83817520840','','Tuesday 13 July 1993',NULL,NULL);
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasien`
--

DROP TABLE IF EXISTS `pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `address` longtext,
  `dob` date DEFAULT NULL,
  `place_dob` varchar(225) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `pasien_type` varchar(100) DEFAULT NULL,
  `card_member_id` varchar(100) DEFAULT NULL,
  `rm_number` varchar(100) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `card_type` varchar(45) DEFAULT NULL,
  `complaint` longtext,
  `exp_card_member` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `dokter_id` int(11) DEFAULT NULL,
  `diagnosis` mediumtext,
  `kk` varchar(45) DEFAULT NULL,
  `ktp` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasien`
--

LOCK TABLES `pasien` WRITE;
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` VALUES (1,'jkhjkhkjhkjhkjhk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-27 06:09:49',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruangan`
--

DROP TABLE IF EXISTS `ruangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `capacity` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruangan`
--

LOCK TABLES `ruangan` WRITE;
/*!40000 ALTER TABLE `ruangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'babangtamvan@wadev.com','c44a471bd78cc6c2fea32b9fe028d30a','abdul','hanan'),(2,'wadevsolution@gmail.com','040b7cf4a55014e185813e0644502ea9','akl','klklk');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-27 11:25:35
