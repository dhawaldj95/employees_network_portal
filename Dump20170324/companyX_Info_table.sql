-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: companyX
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.10.1

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
-- Table structure for table `Info_table`
--

DROP TABLE IF EXISTS `Info_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Info_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_given_id` int(8) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `user_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `company_given_id_UNIQUE` (`company_given_id`),
  UNIQUE KEY `email_id_UNIQUE` (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Info_table`
--

LOCK TABLES `Info_table` WRITE;
/*!40000 ALTER TABLE `Info_table` DISABLE KEYS */;
INSERT INTO `Info_table` VALUES (1,80000001,'basant.sharma@gmail.com','Basant Sharma','basant.sharma'),(2,80000002,'akash.jain@gmail.com','Akash Jain','akash.jain'),(3,80000003,'gaurav.goyal@gmail.com','Gaurav Goyal','gaurav.goyal'),(4,80000004,'abhishek.pareek@gmail.com','Abhishek Pareek','abhishek.pareek'),(5,80000005,'jitendra.jain@gmail.com','Jitendra Jain','jitendra.jain'),(6,80000006,'sagar.choudhary@gmail.com','Sagar Choudhary','sagar.choudhary'),(7,80000007,'dhawal.jain@gmail.com','Dhawal Jain','dhawal.jain'),(8,80000008,'mohit.bansal@gmail.com','Mohit Bansal','mohit.bansal'),(9,80000009,'natwar.singh@gmail.com','Natwar Singh','natwar.singh'),(10,80000010,'preeti.jain@gmail.com','Preeti Jain','preeti.jain'),(11,80000011,'nishant.singhal@gmail.com','Nishant Singhal','nishant.singhal'),(12,80000012,'ankita.tayal@gmail.com','Ankita Tayal','ankita.tayal'),(13,80000013,'charu.jain@gmail.com','Charu Jain','charu.jain'),(14,80000014,'aman.jain@gmail.com','Aman Jain','aman.jain'),(15,80000015,'mehak.jain@gmail.com','Mehak Jain','mehak.jain'),(16,80000016,'aman.goel@gmail.com','Aman Goel','aman.goel'),(17,80000017,'abhishek.lata@gmail.com','Abhishek Lata','abhishek.lata');
/*!40000 ALTER TABLE `Info_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-24 17:35:11
