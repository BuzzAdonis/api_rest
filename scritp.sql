-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: api_rest
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contactos` json NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Adonis Alexander','Severino Perez','adonisalexander@hotmail.com','{\"contato\": \"809-559-4005\"}','2022-02-24 14:29:58','2022-02-24 14:29:58'),(3,'Bruno','Diaz','batman@barman.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 02:34:36','2022-02-25 02:34:36'),(4,'Clark','Diaz','batman@barman.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 02:35:57','2022-02-25 07:57:49'),(5,'','','','{\"contato1\": \"\", \"contato2\": \"\", \"contacto3\": \"\"}','2022-02-25 12:17:52','2022-02-25 12:17:52'),(6,'','','','{}','2022-02-25 12:18:34','2022-02-25 12:18:34'),(7,'Clark','Diaz','batman@barman.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 12:20:54','2022-02-25 17:52:50'),(8,'NULL','','','{}','2022-02-25 12:23:28','2022-02-25 12:23:28'),(9,'Rayden','Thuder','Dios@Trueno.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 12:26:03','2022-02-25 18:28:13'),(10,'','','','{}','2022-02-25 12:26:36','2022-02-25 12:26:36'),(11,'1','','','{}','2022-02-25 12:33:31','2022-02-25 12:33:31'),(12,'','','','{}','2022-02-25 12:35:13','2022-02-25 12:35:13'),(13,'Clark','Diaz','batman@barman.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 12:46:00','2022-02-25 12:46:00'),(14,'Clark','Diaz','batman@barman.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 12:52:35','2022-02-25 12:52:35'),(15,'Rayden','Thuder','Dios@Trueno.com','{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}','2022-02-25 13:27:41','2022-02-25 13:27:41');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'api_rest'
--

--
-- Dumping routines for database 'api_rest'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-25  9:34:04
