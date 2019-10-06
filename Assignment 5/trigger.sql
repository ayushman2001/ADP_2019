-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: activity6
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `task3`
--
create database assignment5;
use assignment5;
DROP TABLE IF EXISTS `task3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task3` (
  `STUDENT_ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SUB1` double NOT NULL,
  `SUB2` double NOT NULL,
  `SUB3` double NOT NULL,
  `SUB4` double NOT NULL,
  `SUB5` double NOT NULL,
  `TOTAL` double NOT NULL,
  `PER_MARKS` double NOT NULL,
  `GRADE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`STUDENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task3`
--

LOCK TABLES `task3` WRITE;
/*!40000 ALTER TABLE `task3` DISABLE KEYS */;
INSERT INTO `task3` VALUES (1,'LARRY BIRD',0,0,0,0,0,0,0,NULL),(2,'KAREEM ABDUL JABBAR',0,0,0,0,0,0,0,NULL),(3,'WILT CHAMBERLIN',0,0,0,0,0,0,0,NULL),(4,'JULIUS ERVING',0,0,0,0,0,0,0,NULL);
/*!40000 ALTER TABLE `task3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `JOBID` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SALARY` double NOT NULL,
  `COMMISSION_PCT` double NOT NULL,
  PRIMARY KEY (`EMPLOYEE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (0,'Demarcus','Cousins','C','DC@gmail.com',1000000,0.04),(11,'Klay','Thompson','SG','KT@gmail.com',1400000,0.05),(23,'Draymond','Green','PF','DG@gmail.com',1300000,0.06),(30,'Stephen','Curry','PG','SC@gmail.com',2400000,0.1),(35,'Kevin','Durant','SF','KD@gmail.com',2100000,0.09);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks2`
--

DROP TABLE IF EXISTS `tasks2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks2` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SALARY` int(11) NOT NULL,
  PRIMARY KEY (`EMPLOYEE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks2`
--

LOCK TABLES `tasks2` WRITE;
/*!40000 ALTER TABLE `tasks2` DISABLE KEYS */;
INSERT INTO `tasks2` VALUES (4,'Paul Millsap',313000000),(20,'Gordon Hayward',287000000),(22,'Blake Griffin',297000000),(23,'LeBron James',34000000),(30,'Stephen Curry',34000000);
/*!40000 ALTER TABLE `tasks2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-24  0:40:39
