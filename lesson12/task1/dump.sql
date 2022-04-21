-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: films_db
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Actors`
--

DROP TABLE IF EXISTS `Actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Actors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `NameActor` varchar(50) NOT NULL,
  `SurnameActor` varchar(50) NOT NULL,
  `AgeActor` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  CONSTRAINT `Actors_chk_1` CHECK (((`AgeActor` > 0) and (`AgeActor` < 110)))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Actors`
--

LOCK TABLES `Actors` WRITE;
/*!40000 ALTER TABLE `Actors` DISABLE KEYS */;
INSERT INTO `Actors` VALUES (1,'Доуэн','Джонсон',49),(2,'Джонни','Депп',58),(3,'Уилл','Смит',43);
/*!40000 ALTER TABLE `Actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Directors`
--

DROP TABLE IF EXISTS `Directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Directors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `NameDirector` varchar(50) NOT NULL,
  `SurnameDirector` varchar(50) NOT NULL,
  `AgeDirector` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  CONSTRAINT `Directors_chk_1` CHECK (((`AgeDirector` > 0) and (`AgeDirector` < 110)))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Directors`
--

LOCK TABLES `Directors` WRITE;
/*!40000 ALTER TABLE `Directors` DISABLE KEYS */;
INSERT INTO `Directors` VALUES (1,'Квентин','Торантино',55),(2,'Кристофер','Нолан',53),(3,'Джеймс','Тобак',45);
/*!40000 ALTER TABLE `Directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Films`
--

DROP TABLE IF EXISTS `Films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Films` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `NameFilm` varchar(150) NOT NULL,
  `Publication_date` year NOT NULL,
  `ActorId` int DEFAULT NULL,
  `DirectorId` int DEFAULT NULL,
  `Is_famous` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `ActorId` (`ActorId`),
  KEY `DirectorId` (`DirectorId`),
  CONSTRAINT `Films_ibfk_1` FOREIGN KEY (`ActorId`) REFERENCES `Actors` (`Id`),
  CONSTRAINT `Films_ibfk_2` FOREIGN KEY (`DirectorId`) REFERENCES `Directors` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Films`
--

LOCK TABLES `Films` WRITE;
/*!40000 ALTER TABLE `Films` DISABLE KEYS */;
INSERT INTO `Films` VALUES (1,'Джанго освобожденный',2012,1,1,1),(2,'Test1',2021,2,2,0),(3,'Test2',2021,3,3,0);
/*!40000 ALTER TABLE `Films` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-21 15:38:48
