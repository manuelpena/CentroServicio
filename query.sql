-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cservicio
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt-log

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `addressbook`
--

DROP TABLE IF EXISTS `addressbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addressbook` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) default NULL,
  `lastname` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  `email` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addressbook`
--

LOCK TABLES `addressbook` WRITE;
/*!40000 ALTER TABLE `addressbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `addressbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adicionales`
--

DROP TABLE IF EXISTS `adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adicionales` (
  `id` int(11) NOT NULL auto_increment,
  `anio` int(11) default NULL,
  `campania` int(11) default NULL,
  `descripcion` varchar(100) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adicionales`
--

LOCK TABLES `adicionales` WRITE;
/*!40000 ALTER TABLE `adicionales` DISABLE KEYS */;
INSERT INTO `adicionales` VALUES (1,2015,1,'Closet',NULL,NULL,NULL,NULL),(2,2015,1,'Set de Vasos',NULL,NULL,NULL,NULL),(3,2015,1,'Black Touch',NULL,NULL,NULL,NULL),(4,2015,2,'Colonia',NULL,NULL,1,'2015-03-16 11:28:32'),(5,2015,2,'Col. Mesmerize 2',NULL,NULL,1,'2015-03-16 11:29:03'),(8,2015,2,'Sensus',1,'2015-03-16 12:43:43',NULL,NULL),(9,2015,1,'Far Away',1,'2015-03-16 12:43:56',NULL,NULL),(10,2015,4,'CLOSET',3,'2015-03-20 08:28:41',NULL,NULL),(11,2015,4,'SET DE VASOS',3,'2015-03-20 08:29:00',NULL,NULL);
/*!40000 ALTER TABLE `adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adicionales_pilotos`
--

DROP TABLE IF EXISTS `adicionales_pilotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adicionales_pilotos` (
  `id` int(11) NOT NULL auto_increment,
  `adicional_id` int(11) default NULL,
  `cuadre_piloto_id` int(11) default NULL,
  `cantidad` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adicionales_pilotos`
--

LOCK TABLES `adicionales_pilotos` WRITE;
/*!40000 ALTER TABLE `adicionales_pilotos` DISABLE KEYS */;
INSERT INTO `adicionales_pilotos` VALUES (1,4,7,9,1,'2015-03-09 08:27:33',NULL,NULL),(2,4,8,9,1,'2015-03-09 08:27:56',NULL,NULL),(3,5,8,10,1,'2015-03-09 08:27:56',NULL,NULL),(4,1,9,5,1,'2015-03-10 01:17:46',NULL,NULL),(5,2,9,4,1,'2015-03-10 01:17:46',NULL,NULL),(6,3,9,3,1,'2015-03-10 01:17:46',NULL,NULL),(7,1,10,5,1,'2015-03-10 01:19:44',NULL,NULL),(13,4,12,25,1,'2015-03-10 07:25:24',NULL,NULL),(19,2,14,5,1,'2015-03-10 08:15:57',NULL,NULL),(20,3,14,6,1,'2015-03-10 08:15:57',NULL,NULL),(21,4,15,23,1,'2015-03-10 14:55:47',NULL,NULL),(22,5,15,24,1,'2015-03-10 14:55:47',NULL,NULL),(23,1,16,4,1,'2015-03-10 15:00:03',NULL,NULL),(24,2,16,5,1,'2015-03-10 15:00:03',NULL,NULL),(25,3,16,7,1,'2015-03-10 15:00:03',NULL,NULL),(26,1,17,4,1,'2015-03-10 15:03:23',NULL,NULL),(27,2,17,25,1,'2015-03-10 15:03:23',NULL,NULL),(28,3,17,5,1,'2015-03-10 15:03:24',NULL,NULL),(29,4,18,4,1,'2015-03-10 15:31:44',NULL,NULL),(31,5,19,5,1,'2015-03-10 15:35:56',NULL,NULL),(32,4,19,4,1,'2015-03-10 15:35:56',NULL,NULL),(33,4,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(34,5,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(35,4,21,5,1,'2015-03-10 22:00:36',NULL,NULL),(36,5,21,23,1,'2015-03-10 22:00:36',NULL,NULL),(37,4,22,5,1,'2015-03-10 22:03:43',NULL,NULL),(38,5,22,25,1,'2015-03-10 22:03:43',NULL,NULL),(39,1,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(40,2,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(41,3,23,25,1,'2015-03-10 22:04:35',NULL,NULL),(42,1,24,5,1,'2015-03-10 22:23:50',NULL,NULL),(43,2,24,4,1,'2015-03-10 22:23:50',NULL,NULL),(44,3,24,3,1,'2015-03-10 22:23:50',NULL,NULL),(45,1,0,4,1,'2015-03-10 23:35:22',NULL,NULL),(46,2,0,5,1,'2015-03-10 23:35:22',NULL,NULL),(47,3,0,6,1,'2015-03-10 23:35:22',NULL,NULL),(48,1,27,5,1,'2015-03-10 23:35:48',NULL,NULL),(49,2,27,6,1,'2015-03-10 23:35:48',NULL,NULL),(50,3,27,4,1,'2015-03-10 23:35:48',NULL,NULL),(51,4,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(52,5,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(53,4,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(54,5,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(55,4,28,4,1,'2015-03-11 00:18:39',NULL,NULL),(56,5,28,5,1,'2015-03-11 00:18:39',NULL,NULL),(57,4,0,4,1,'2015-03-12 07:57:24',NULL,NULL),(58,5,0,6,1,'2015-03-12 07:57:24',NULL,NULL),(59,4,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(60,5,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(61,4,30,4,1,'2015-03-14 00:43:51',NULL,NULL),(62,5,30,3,1,'2015-03-14 00:43:51',NULL,NULL),(63,4,0,5,1,'2015-03-16 12:44:32',NULL,NULL),(64,5,0,6,1,'2015-03-16 12:44:32',NULL,NULL),(65,8,0,7,1,'2015-03-16 12:44:32',NULL,NULL),(66,4,31,5,1,'2015-03-16 12:45:19',NULL,NULL),(67,5,31,7,1,'2015-03-16 12:45:19',NULL,NULL),(68,8,31,8,1,'2015-03-16 12:45:19',NULL,NULL),(69,1,32,4,3,'2015-03-20 07:58:04',NULL,NULL),(70,2,32,5,3,'2015-03-20 07:58:04',NULL,NULL),(71,3,32,6,3,'2015-03-20 07:58:04',NULL,NULL),(72,9,32,7,3,'2015-03-20 07:58:04',NULL,NULL),(73,10,33,1,3,'2015-03-20 08:30:11',NULL,NULL),(74,11,33,0,3,'2015-03-20 08:30:11',NULL,NULL);
/*!40000 ALTER TABLE `adicionales_pilotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agencias`
--

DROP TABLE IF EXISTS `agencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agencias` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(50) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agencias`
--

LOCK TABLES `agencias` WRITE;
/*!40000 ALTER TABLE `agencias` DISABLE KEYS */;
INSERT INTO `agencias` VALUES (1,'COMTEC',NULL,NULL,3,'2015-03-20 07:57:37'),(2,'DHL',NULL,NULL,NULL,NULL),(4,'FEDEX',3,'2015-03-20 08:27:34',NULL,NULL);
/*!40000 ALTER TABLE `agencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bancos`
--

DROP TABLE IF EXISTS `bancos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bancos` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bancos`
--

LOCK TABLES `bancos` WRITE;
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
INSERT INTO `bancos` VALUES (1,'Fomento Agropecuarix',NULL,NULL,1,'2015-03-13 18:09:28'),(5,'Promerica',NULL,NULL,1,'2015-03-13 08:18:26'),(26,'Hipotecario',1,'2015-03-13 08:19:19',NULL,NULL),(24,'FEDECASES',1,'2015-03-13 08:18:49',NULL,NULL),(25,'TIGO MONEY',1,'2015-03-13 08:18:55',NULL,NULL),(21,'Agricola',1,'2015-03-13 08:18:32',NULL,NULL),(23,'SCOTIABANK',1,'2015-03-13 08:18:44',NULL,NULL),(22,'CITI',1,'2015-03-13 08:18:37',NULL,NULL);
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bodegaje_config`
--

DROP TABLE IF EXISTS `bodegaje_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bodegaje_config` (
  `id` int(11) NOT NULL auto_increment,
  `dia` int(11) default NULL,
  `tipo_pedido` tinyint(2) default NULL,
  `cobro` double default NULL,
  `tipo_solicitud` tinyint(2) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bodegaje_config`
--

LOCK TABLES `bodegaje_config` WRITE;
/*!40000 ALTER TABLE `bodegaje_config` DISABLE KEYS */;
INSERT INTO `bodegaje_config` VALUES (1,1,1,1,2,NULL,NULL,NULL,NULL),(2,2,1,1,2,NULL,NULL,3,'2015-03-20 08:49:22'),(3,3,1,1,2,NULL,NULL,NULL,NULL),(4,4,1,2,2,NULL,NULL,NULL,NULL),(5,5,1,2,2,NULL,NULL,NULL,NULL),(6,6,1,2,2,NULL,NULL,NULL,NULL),(7,7,1,2,2,NULL,NULL,NULL,NULL),(9,1,2,0,2,NULL,NULL,NULL,NULL),(10,2,2,0,2,NULL,NULL,NULL,NULL),(11,3,2,0,2,NULL,NULL,NULL,NULL),(12,4,2,2,2,NULL,NULL,NULL,NULL),(13,5,2,2,2,NULL,NULL,NULL,NULL),(14,6,2,2,2,NULL,NULL,NULL,NULL),(15,7,2,2,2,NULL,NULL,NULL,NULL),(51,2,1,1,1,1,'2015-03-17 15:30:46',3,'2015-03-20 08:46:41'),(50,1,1,0,1,1,'2015-03-17 15:30:39',3,'2015-03-20 08:46:28'),(19,3,1,1,1,NULL,NULL,3,'2015-03-20 08:46:58'),(20,4,1,2,1,NULL,NULL,3,'2015-03-20 08:47:14'),(21,5,1,2,1,NULL,NULL,NULL,NULL),(22,6,1,2,1,NULL,NULL,NULL,NULL),(23,7,1,2,1,NULL,NULL,NULL,NULL),(25,1,2,0,1,NULL,NULL,NULL,NULL),(26,2,2,0,1,NULL,NULL,NULL,NULL),(27,3,2,1,1,NULL,NULL,NULL,NULL),(28,4,2,2,1,NULL,NULL,NULL,NULL),(29,5,2,2,1,NULL,NULL,NULL,NULL),(30,6,2,2,1,NULL,NULL,NULL,NULL),(31,7,2,2,1,NULL,NULL,NULL,NULL),(33,1,0,1,0,1,'2015-03-17 13:03:54',NULL,NULL),(34,8,0,1,1,1,'2015-03-17 13:04:38',NULL,NULL),(35,1,0,4,0,1,'2015-03-17 13:05:48',NULL,NULL),(36,1,0,2,0,1,'2015-03-17 13:06:23',NULL,NULL),(38,6,0,5,0,1,'2015-03-17 13:36:30',NULL,NULL),(39,1,0,5,0,1,'2015-03-17 14:30:23',NULL,NULL),(40,1,0,5,0,1,'2015-03-17 14:31:45',NULL,NULL),(41,1,0,7,0,1,'2015-03-17 14:35:06',NULL,NULL),(42,1,0,7,0,1,'2015-03-17 14:35:31',NULL,NULL),(48,0,0,3,0,1,'2015-03-17 14:52:41',NULL,NULL);
/*!40000 ALTER TABLE `bodegaje_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boletas`
--

DROP TABLE IF EXISTS `boletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boletas` (
  `id` int(11) NOT NULL auto_increment,
  `pedido_id` int(11) default NULL,
  `banco_id` int(11) default NULL,
  `referencia` varchar(50) default NULL,
  `monto` double default NULL,
  `fecha` date default NULL,
  `observaciones` varchar(250) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletas`
--

LOCK TABLES `boletas` WRITE;
/*!40000 ALTER TABLE `boletas` DISABLE KEYS */;
/*!40000 ALTER TABLE `boletas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `boletas_vista`
--

DROP TABLE IF EXISTS `boletas_vista`;
/*!50001 DROP VIEW IF EXISTS `boletas_vista`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `boletas_vista` (
  `boleta_id` tinyint NOT NULL,
  `codigo` tinyint NOT NULL,
  `nombres` tinyint NOT NULL,
  `cod` tinyint NOT NULL,
  `referencia` tinyint NOT NULL,
  `monto` tinyint NOT NULL,
  `fecha` tinyint NOT NULL,
  `observaciones` tinyint NOT NULL,
  `banco` tinyint NOT NULL,
  `usuario` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `buzones`
--

DROP TABLE IF EXISTS `buzones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buzones` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(50) default NULL,
  `zona` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buzones`
--

LOCK TABLES `buzones` WRITE;
/*!40000 ALTER TABLE `buzones` DISABLE KEYS */;
INSERT INTO `buzones` VALUES (2,'ZARAGOZA',201,1,'2015-02-14 22:04:01',NULL,NULL),(3,'SALA DE TE',204,1,'2015-02-14 22:04:01',NULL,NULL),(4,'NEJAPA',204,1,'2015-02-14 22:04:01',NULL,NULL),(5,'SAN VICENTE',205,1,'2015-02-14 22:04:01',NULL,NULL),(6,'SANTO DOMINGO',205,1,'2015-02-14 22:04:01',NULL,NULL),(7,'VERAPAZ',213,1,'2015-02-14 22:04:01',NULL,NULL),(8,'SAN SEBASTIAN',205,1,'2015-02-14 22:04:01',NULL,NULL),(9,'SALA DE BELLEZA',206,1,'2015-02-14 22:04:01',NULL,NULL),(10,'TIPICOS MARGOTH',206,1,'2015-02-14 22:04:01',NULL,NULL),(11,'VENTA ROPA',207,1,'2015-02-14 22:04:01',NULL,NULL),(12,'SAN MARTIN',227,1,'2015-02-14 22:04:01',NULL,NULL),(13,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(14,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(15,'USULUTAN',211,1,'2015-02-14 22:04:01',NULL,NULL),(16,'LA UNION',212,1,'2015-02-14 22:04:01',NULL,NULL),(17,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(18,'SAN MARCOS',215,1,'2015-02-14 22:04:01',NULL,NULL),(19,'TEXACUANGO',215,1,'2015-02-14 22:04:01',NULL,NULL),(20,'TRANSITO',216,1,'2015-02-14 22:04:01',NULL,NULL),(21,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(22,'LOURDES',217,1,'2015-02-14 22:04:01',NULL,NULL),(23,'SANTA TECLA',217,1,'2015-02-14 22:04:01',NULL,NULL),(24,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(25,'METAPAN',218,1,'2015-02-14 22:04:01',NULL,NULL),(26,'LA PALMA',220,1,'2015-02-14 22:04:01',NULL,NULL),(27,'CHALATENANGO',220,1,'2015-02-14 22:04:01',NULL,NULL),(28,'TEJUTLA',220,1,'2015-02-14 22:04:01',NULL,NULL),(29,'AHUCHAPAN',221,1,'2015-02-14 22:04:01',NULL,NULL),(30,'ATIQUIZAYA',221,1,'2015-02-14 22:04:01',NULL,NULL),(31,'SAN ROBERTO',235,1,'2015-02-14 22:04:01',NULL,NULL),(32,'CASA GERENTE',210,1,'2015-02-14 22:04:01',NULL,NULL),(33,'ILOBASCO',223,1,'2015-02-14 22:04:01',NULL,NULL),(34,'SENSUNTE',223,1,'2015-02-14 22:04:01',NULL,NULL),(35,'SAN MARTIN',227,1,'2015-02-14 22:04:01',NULL,NULL),(36,'GUAZAPA',228,1,'2015-02-14 22:04:01',NULL,NULL),(37,'AGUILARES',228,1,'2015-02-14 22:04:01',NULL,NULL),(38,'AMAYO',228,1,'2015-02-14 22:04:01',NULL,NULL),(39,'NUEVA CONCEPCION',228,1,'2015-02-14 22:04:01',NULL,NULL),(40,'QUEZALTE',229,1,'2015-02-14 22:04:01',NULL,NULL),(41,'OPICO',229,1,'2015-02-14 22:04:01',NULL,NULL),(42,'SAN LUIS TALPA',215,1,'2015-02-14 22:04:01',NULL,NULL),(43,'ROSARIO',230,1,'2015-02-14 22:04:01',NULL,NULL),(44,'HERRADURA',230,1,'2015-02-14 22:04:01',NULL,NULL),(45,'SANTIGO NONUALCO',230,1,'2015-02-14 22:04:01',NULL,NULL),(46,'SAN RAFAEL',230,1,'2015-02-14 22:04:01',NULL,NULL),(47,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(48,'ARMENIA',232,1,'2015-02-14 22:04:01',NULL,NULL),(49,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(50,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(51,'SANTA ROSA',235,1,'2015-02-14 22:04:01',NULL,NULL),(52,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(53,'JUAYUA',236,1,'2015-02-14 22:04:01',NULL,NULL),(54,'ZACATE',237,1,'2015-02-14 22:04:01',NULL,NULL),(55,'CIUDAD REAL',238,1,'2015-02-14 22:04:01',NULL,NULL),(56,'CHALCHUAPA',238,1,'2015-02-14 22:04:01',NULL,NULL),(57,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(58,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(59,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(60,'ALTAVISTA',234,1,'2015-02-14 22:04:01',NULL,NULL),(61,'OLOCUILTA',215,1,'2015-02-14 22:04:01',NULL,NULL),(62,'SAN LUIS TALPA',215,1,'2015-02-14 22:04:01',NULL,NULL),(63,'PEDREGAL',230,1,'2015-02-14 22:04:01',NULL,NULL),(64,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(65,'CASA GERENTE',210,1,'2015-02-14 22:04:01',NULL,NULL),(66,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(67,'SAN ALEJO',212,1,'2015-02-14 22:04:01',NULL,NULL),(68,'SANTO TOMAS',215,1,'2015-02-14 22:04:01',NULL,NULL),(69,'SAN ROBERTO',235,1,'2015-02-14 22:04:01',NULL,NULL),(70,'CASA GERENTE',210,1,'2015-02-14 22:04:01',NULL,NULL),(71,'TONACA',228,1,'2015-02-14 22:04:01',NULL,NULL),(73,'xd3',203,1,'2015-03-16 15:26:39',1,'2015-03-16 15:26:56'),(74,'xd2',203,1,'2015-03-16 15:26:46',NULL,NULL);
/*!40000 ALTER TABLE `buzones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_cookies`
--

DROP TABLE IF EXISTS `ci_cookies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_cookies` (
  `id` int(11) NOT NULL auto_increment,
  `cookie_id` varchar(255) default NULL,
  `netid` varchar(255) default NULL,
  `ip_address` varchar(255) default NULL,
  `user_agent` varchar(255) default NULL,
  `orig_page_requested` varchar(120) default NULL,
  `php_session_id` varchar(40) default NULL,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_cookies`
--

LOCK TABLES `ci_cookies` WRITE;
/*!40000 ALTER TABLE `ci_cookies` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_cookies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(45) NOT NULL default '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('f65b6b8476180b1a5480129be203e7e0','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',1426864035,'a:6:{s:9:\"user_data\";s:0:\"\";s:7:\"usuario\";s:11:\"Alex Guzman\";s:10:\"usuario_id\";s:1:\"3\";s:3:\"rol\";s:6:\"admind\";s:6:\"imagen\";s:34:\"images/perfiles/mario.valencia.jpg\";s:12:\"is_logged_in\";b:1;}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consejeras`
--

DROP TABLE IF EXISTS `consejeras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consejeras` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `zona` int(11) NOT NULL,
  `sector` tinyint(4) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono_1` varchar(50) default NULL,
  `telefono_2` varchar(50) default NULL,
  `los` int(11) NOT NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consejeras`
--

LOCK TABLES `consejeras` WRITE;
/*!40000 ALTER TABLE `consejeras` DISABLE KEYS */;
INSERT INTO `consejeras` VALUES (1,496613,210,1,'ANA CLARINEC GUZMAN RIVERA','CASERIO 1CASA 1','51000000','51005115',21,3,'2015-03-20 08:36:56',NULL,NULL),(2,447502,210,1,'CANDELARIA  LARA MORENO','CASERIO 2CASA 2','52000000','51222222',46,3,'2015-03-20 08:36:56',NULL,NULL),(3,531469,210,3,'ELIZABETH  ARGUETA ESCOBAR','CASERIO 3CASA 3','53000000','530000',2,3,'2015-03-20 08:36:56',NULL,NULL),(4,492775,210,3,'EVELYN MARICELA CENTENO  DE MAJANO','CASERIO 4CASA 4','54000000','54000',22,3,'2015-03-20 08:36:56',NULL,NULL),(5,529403,210,3,'LINDA BEATRIZ RIVERA PINEDA','CASERIO 5CASA 5','55000000','5111111',3,3,'2015-03-20 08:36:56',NULL,NULL),(6,524891,210,3,'ROXANA ELIZABETH GUEVARA CHICAS','CASERIO 6CASA 6','56000000','560000',6,3,'2015-03-20 08:36:56',NULL,NULL),(7,526430,210,3,'SONIA ISABEL YOJCOM OCHOA','CASERIO 7CASA 7','57000000','57000000',5,3,'2015-03-20 08:36:56',NULL,NULL),(8,512592,210,4,'JOSUE RAMON MEDRANO JIMENEZ','CASERIO 8CASA 8','58000000','580000',11,3,'2015-03-20 08:36:56',NULL,NULL);
/*!40000 ALTER TABLE `consejeras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuadre_pilotos`
--

DROP TABLE IF EXISTS `cuadre_pilotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuadre_pilotos` (
  `id` int(11) NOT NULL auto_increment,
  `anio` int(11) default NULL,
  `campania` int(11) default NULL,
  `piloto` int(11) default NULL,
  `pedidos` int(11) default NULL,
  `cajas` int(11) default NULL,
  `zona` int(11) default NULL,
  `entrada` varchar(10) default NULL,
  `salida` varchar(10) default NULL,
  `agencia_id` int(11) default NULL,
  `fecha_cuadre` date default NULL,
  `observaciones` varchar(250) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuadre_pilotos`
--

LOCK TABLES `cuadre_pilotos` WRITE;
/*!40000 ALTER TABLE `cuadre_pilotos` DISABLE KEYS */;
INSERT INTO `cuadre_pilotos` VALUES (1,2015,1,1,5,5,204,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:07:52',NULL,NULL),(2,2015,1,1,5,5,207,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:08:17',NULL,NULL),(3,2015,1,1,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:37',NULL,NULL),(4,2015,1,2,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:43',NULL,NULL),(5,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:46',NULL,NULL),(6,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:15:31',NULL,NULL),(7,2015,2,3,4,5,209,'7:30 AM','7:30 AM',2,'2015-03-19','dddd',1,'2015-03-09 08:27:33',NULL,NULL),(13,2015,1,1,5,23,203,'6:30 AM','6:30 AM',1,'2015-03-04','acasdas',1,'2015-03-10 07:25:42',NULL,NULL),(19,2015,2,2,2,4,202,'2:00 AM','2:30 PM',1,'2015-03-10','2323',1,'2015-03-10 15:35:56',NULL,NULL),(20,2015,2,9,2,4,209,'4:30 AM','7:15 AM',2,'2015-03-19','asdasdasd',1,'2015-03-10 17:54:38',NULL,NULL),(21,2015,2,10,4,2,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:00:36',NULL,NULL),(22,2015,2,19,4,5,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:03:43',NULL,NULL),(23,2015,1,18,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',1,'2015-03-10 22:04:34',NULL,NULL),(24,2015,1,2,2,3,202,'9:30 PM','9:30 PM',1,'2015-03-10','2321',1,'2015-03-10 22:23:50',NULL,NULL),(25,2015,1,2,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 22:59:42',NULL,NULL),(26,2015,1,7,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 23:34:36',NULL,NULL),(27,2015,1,9,2,4,209,'1:15 PM','10:45 PM',1,'2015-03-06','xdasdasd',1,'2015-03-10 23:35:48',NULL,NULL),(28,2015,2,2,4,5,209,'1:23 PM','1:15 AM',1,'2015-02-23','2323',1,'2015-03-11 00:18:39',NULL,NULL),(29,2015,2,2,4,4,201,'1:15 AM','7:00 AM',2,'2015-02-23','asdasd',1,'2015-03-12 07:57:59',NULL,NULL),(31,2015,2,15,5,7,201,'1:15 AM','11:45 AM',1,'2015-02-09','asd',1,'2015-03-16 12:45:19',NULL,NULL),(32,2015,1,1,2,4,201,'4:04 AM','7:00 AM',1,'2015-03-24','asd',3,'2015-03-20 07:58:04',NULL,NULL),(33,2015,4,1,12,24,210,'7:30 AM','8:00 AM',1,'2015-03-02','',3,'2015-03-20 08:30:11',NULL,NULL);
/*!40000 ALTER TABLE `cuadre_pilotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_rol`
--

DROP TABLE IF EXISTS `detalle_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_rol` (
  `id` int(11) NOT NULL auto_increment,
  `usuarios_id` int(11) default NULL,
  `id_rol` int(11) default NULL,
  `id_sistema` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_detalle_rol_y_usuarios_idx` (`usuarios_id`),
  KEY `fk_detalle_rol_y_rol_idx` (`id_rol`),
  KEY `fk_detalle_rol_y_sistema_idx` (`id_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_rol`
--

LOCK TABLES `detalle_rol` WRITE;
/*!40000 ALTER TABLE `detalle_rol` DISABLE KEYS */;
INSERT INTO `detalle_rol` VALUES (1,1,1,1,NULL,NULL,3,'2015-03-20 07:42:21'),(2,3,1,1,1,'2015-03-18 23:49:33',3,'2015-03-20 07:42:27');
/*!40000 ALTER TABLE `detalle_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dias_laborales`
--

DROP TABLE IF EXISTS `dias_laborales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dias_laborales` (
  `id` int(11) NOT NULL auto_increment,
  `fecha` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dias_laborales`
--

LOCK TABLES `dias_laborales` WRITE;
/*!40000 ALTER TABLE `dias_laborales` DISABLE KEYS */;
INSERT INTO `dias_laborales` VALUES (1,'2015-02-02'),(2,'2015-02-03'),(3,'2015-02-04'),(4,'2015-02-05'),(8,'2015-02-09'),(9,'2015-02-10'),(10,'2015-02-11'),(11,'2015-02-12'),(12,'2015-02-13'),(15,'2015-02-16'),(16,'2015-02-17'),(17,'2015-02-18'),(18,'2015-02-19'),(22,'2015-02-23'),(23,'2015-02-24'),(24,'2015-02-25'),(25,'2015-02-26'),(29,'2015-03-02'),(30,'2015-02-06'),(31,'2015-02-27'),(32,'2015-02-20'),(36,'2015-02-21'),(37,'2015-02-28'),(38,'2015-03-03'),(39,'2015-03-04'),(40,'2015-03-05'),(41,'2015-03-06'),(42,'2015-03-07'),(43,'2015-03-09'),(44,'2015-03-10'),(45,'2015-03-11'),(46,'2015-03-12'),(47,'2015-03-13'),(48,'2015-03-14'),(49,'2015-03-16'),(50,'2015-03-17'),(51,'2015-03-18'),(52,'2015-03-14'),(53,'2015-03-20'),(54,'2015-03-21'),(55,'2015-03-23'),(56,'2015-03-24'),(57,'2015-03-25'),(58,'2015-03-26'),(59,'2015-03-27'),(60,'2015-03-28'),(61,'2015-03-30'),(62,'2015-03-31');
/*!40000 ALTER TABLE `dias_laborales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ejemplo_empleado`
--

DROP TABLE IF EXISTS `ejemplo_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ejemplo_empleado` (
  `id_empleado` int(11) NOT NULL auto_increment,
  `nombres` varchar(45) collate latin1_spanish_ci NOT NULL,
  `apellidos` varchar(45) collate latin1_spanish_ci NOT NULL,
  `salario` double default NULL,
  PRIMARY KEY  (`id_empleado`),
  UNIQUE KEY `id_empleado_UNIQUE` (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ejemplo_empleado`
--

LOCK TABLES `ejemplo_empleado` WRITE;
/*!40000 ALTER TABLE `ejemplo_empleado` DISABLE KEYS */;
INSERT INTO `ejemplo_empleado` VALUES (6,'Marcos','Orellana',250),(16,'Paz','Peña',2500),(17,'Jorge','de la O',5000),(21,'Mario','Hernandez',8500),(22,'Marcos','Orellana',2500);
/*!40000 ALTER TABLE `ejemplo_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `clase` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Operaciones','http://localhost:8080/CentroServicio/operaciones/','	<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>'),(2,'Bodega','http://localhost:8080/CentroServicio/bodega/','<i class=\"fa fa-dropbox\" aria-hidden=\"true\"></i>'),(3,'Boletas','http://localhost:8080/CentroServicio/boletas/','<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>'),(4,'Pilotos','http://localhost:8080/CentroServicio/pilotos/','<i class=\"fa fa-group\" aria-hidden=\"true\"></i>'),(5,'Mantenimientos','http://localhost:8080/CentroServicio/mantenimientos/','<i class=\"fa fa-cog\" aria-hidden=\"true\"></i>'),(6,'Consultas','http://localhost:8080/CentroServicio/consultas/','<i class=\"fa fa-search\" aria-hidden=\"true\"></i>'),(7,'Reportes','http://localhost:8080/CentroServicio/operaciones/','<i class=\"fa fa-bar-chart-o\" aria-hidden=\"true\"></i>');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id` int(11) NOT NULL auto_increment,
  `menu_id` int(11) default NULL,
  `descripcion` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (1,1,'Solicitudes Consejera','solicitudesconsejeras'),(2,1,'Solicitudes Buzones y Gerentes','solicitudesbuzones'),(3,2,'Pedidos Pendientes','pedidospendientes'),(4,3,'Boletas','datosboletas'),(5,3,'Consulta de Boletas','consultasboletas'),(6,4,'Cuadre Pilotos','cuadrepilotos'),(7,5,'Cargas DRC','cargasdrc'),(8,5,'Desmantelado','desmantelado'),(9,5,'Dias Laborales','diaslaborales'),(10,5,'Bancos','bancos'),(11,5,'Adicionales','adicionales'),(12,5,'Agencias','agencias'),(13,5,'Bodegaje','bodegaje'),(14,6,'Consultas Consejera','consultaconsejera'),(15,7,'Reportes','reportes'),(16,5,'Usuarios','usuarios'),(17,5,'Roles','roles'),(18,5,'Buzones','buzones');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `anio` int(4) NOT NULL,
  `campania` tinyint(4) NOT NULL,
  `cod` double default NULL,
  `pod` double default '0',
  `comentarios` varchar(100) default NULL,
  `cajas` tinyint(4) default NULL,
  `fecha_ingreso` date NOT NULL COMMENT 'fecha con la que se guarda la informacion',
  `tipo_pedido` tinyint(2) default NULL COMMENT '1: normal, 2:tardio',
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  `ncaja` tinyint(4) default NULL,
  `razon` varchar(50) default NULL,
  `estado` tinyint(4) NOT NULL default '1' COMMENT '1:activo, 2:En Solicitud, 3:Desmantelado',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,496613,2015,2,0,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,1,'NO TIENA DINERO',1),(2,447502,2015,2,20.03,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,2,'NO TIENA DINERO',1),(3,531469,2015,2,46.92,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,3,'NO TIENA DINERO',1),(4,492775,2015,2,207.86,0,'',3,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,4,'NO TIENA DINERO',1),(5,529403,2015,2,57.47,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,5,'NO TIENA DINERO',1),(6,524891,2015,2,62.03,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,6,'NO TIENA DINERO',1),(7,526430,2015,2,129.73,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,7,'NO TIENA DINERO',1),(8,512592,2015,2,49.4,0,'',1,'2015-03-12',1,1,'2015-03-20 07:32:52',NULL,NULL,8,'NO TIENA DINERO',1),(9,496613,2015,4,0,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,1,'NO TIENA DINERO',1),(10,447502,2015,4,20.03,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,2,'NO TIENA DINERO',1),(11,531469,2015,4,46.92,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,3,'NO TIENA DINERO',2),(12,492775,2015,4,207.86,0,'',3,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,4,'NO TIENA DINERO',2),(13,529403,2015,4,57.47,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,5,'NO TIENA DINERO',1),(14,524891,2015,4,62.03,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,6,'NO TIENA DINERO',1),(15,526430,2015,4,129.73,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,7,'NO TIENA DINERO',1),(16,512592,2015,4,49.4,0,'',1,'2015-03-16',1,3,'2015-03-20 08:25:17',NULL,NULL,8,'NO TIENA DINERO',1);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL auto_increment,
  `detalle` varchar(50) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'admind',NULL,NULL,1,'2015-03-18 08:58:24'),(14,'operador',1,'2015-03-18 08:49:32',NULL,NULL);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_paginas`
--

DROP TABLE IF EXISTS `roles_paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_paginas` (
  `id` int(11) NOT NULL auto_increment,
  `pagina_id` int(11) default NULL,
  `rol_id` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_paginas`
--

LOCK TABLES `roles_paginas` WRITE;
/*!40000 ALTER TABLE `roles_paginas` DISABLE KEYS */;
INSERT INTO `roles_paginas` VALUES (1,3,1,1,'2015-03-18 08:49:13',NULL,NULL),(2,5,1,1,'2015-03-18 08:49:19',NULL,NULL),(3,1,14,1,'2015-03-18 08:50:40',NULL,NULL),(4,2,1,1,'2015-03-18 08:50:44',NULL,NULL),(5,1,1,1,'2015-03-18 08:50:52',NULL,NULL),(6,6,1,1,'2015-03-18 08:50:57',NULL,NULL),(7,7,1,1,'2015-03-18 08:51:02',NULL,NULL),(8,8,1,1,'2015-03-18 08:51:05',NULL,NULL),(9,9,1,1,'2015-03-18 08:51:07',NULL,NULL),(10,12,1,1,'2015-03-18 08:51:12',NULL,NULL),(13,11,14,2,'2015-03-19 16:54:17',NULL,NULL),(14,11,1,1,'2015-03-20 00:41:57',NULL,NULL),(15,16,14,1,'2015-03-20 00:41:57',NULL,NULL),(16,17,14,1,'2015-03-20 00:41:57',NULL,NULL),(17,13,1,3,'2015-03-20 07:41:04',NULL,NULL),(18,16,1,3,'2015-03-20 07:41:07',NULL,NULL),(19,17,1,3,'2015-03-20 07:41:09',NULL,NULL),(20,10,1,3,'2015-03-20 07:41:27',NULL,NULL),(21,14,1,3,'2015-03-20 07:41:30',NULL,NULL),(22,15,1,3,'2015-03-20 07:41:34',NULL,NULL),(23,18,1,3,'2015-03-20 10:09:56',NULL,NULL),(24,4,1,3,'2015-03-20 10:10:43',NULL,NULL);
/*!40000 ALTER TABLE `roles_paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistema`
--

DROP TABLE IF EXISTS `sistema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistema` (
  `id` int(11) NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `descripcion` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistema`
--

LOCK TABLES `sistema` WRITE;
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
INSERT INTO `sistema` VALUES (1,'CS','Centro de Servicio');
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL auto_increment,
  `pedido_id` int(11) default NULL,
  `solicitante` varchar(50) default NULL,
  `buzon_id` int(11) default NULL,
  `documento` varchar(50) default NULL,
  `autorizacion` double default NULL,
  `tipo_solicitud` int(11) default NULL COMMENT '1:consejera, 2:gerente, 3: buzones',
  `flete` double default NULL,
  `bodegaje` double default NULL,
  `exoneracion` tinyint(1) default NULL COMMENT 'Remover bodegaje',
  `estado` tinyint(1) default NULL COMMENT '1:pendiente, 2: enviado, 3: cancelado',
  `fecha_despachado` datetime default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
INSERT INTO `solicitudes` VALUES (2,0,'&lt;input type=\"text\" class=\"form-control input-bl',NULL,NULL,0,3,NULL,0,1,1,NULL,3,'2015-03-20 08:39:13',NULL,NULL),(3,12,'',70,NULL,0,3,NULL,0,1,2,'2015-03-20 08:41:34',3,'2015-03-20 08:39:57',NULL,NULL),(4,11,'',0,NULL,0,2,NULL,2,1,2,'2015-03-20 08:41:29',3,'2015-03-20 08:39:58',NULL,NULL);
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `solicitudes_vista`
--

DROP TABLE IF EXISTS `solicitudes_vista`;
/*!50001 DROP VIEW IF EXISTS `solicitudes_vista`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `solicitudes_vista` (
  `id` tinyint NOT NULL,
  `codigo` tinyint NOT NULL,
  `nombres` tinyint NOT NULL,
  `zona` tinyint NOT NULL,
  `ncaja` tinyint NOT NULL,
  `estado` tinyint NOT NULL,
  `descripcion_solicitud` tinyint NOT NULL,
  `tipo_solicitud` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `usuario` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  `imagen_url` varchar(250) default NULL,
  `descripcion` varchar(100) default NULL,
  `estado` tinyint(4) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` timestamp NULL default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','202cb962ac59075b964b07152d234b70','images/perfiles/mario.valencia.jpg','Mario',1,NULL,NULL,3,'2015-03-20 07:42:21'),(3,'Alex','81dc9bdb52d04dc20036dbd8313ed055','images/perfiles/mario.valencia.jpg','Alex Guzman',2,1,'2015-03-19 05:49:33',3,'2015-03-20 07:42:27');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `boletas_vista`
--

/*!50001 DROP TABLE IF EXISTS `boletas_vista`*/;
/*!50001 DROP VIEW IF EXISTS `boletas_vista`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `boletas_vista` AS (select `a`.`id` AS `boleta_id`,`c`.`codigo` AS `codigo`,`c`.`nombres` AS `nombres`,`b`.`cod` AS `cod`,`a`.`referencia` AS `referencia`,`a`.`monto` AS `monto`,`a`.`fecha` AS `fecha`,`a`.`observaciones` AS `observaciones`,`d`.`descripcion` AS `banco`,`e`.`descripcion` AS `usuario` from ((((`boletas` `a` join `pedidos` `b` on((`a`.`pedido_id` = `b`.`id`))) join `consejeras` `c` on((`c`.`codigo` = `b`.`codigo`))) join `bancos` `d` on((`d`.`id` = `a`.`banco_id`))) join `usuarios` `e` on((`e`.`id` = `a`.`creado_por`)))) */;

--
-- Final view structure for view `solicitudes_vista`
--

/*!50001 DROP TABLE IF EXISTS `solicitudes_vista`*/;
/*!50001 DROP VIEW IF EXISTS `solicitudes_vista`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `solicitudes_vista` AS select `c`.`id` AS `id`,`a`.`codigo` AS `codigo`,`a`.`nombres` AS `nombres`,`a`.`zona` AS `zona`,`b`.`ncaja` AS `ncaja`,(case `c`.`estado` when 1 then _utf8'Pendiente' when 2 then _utf8'Despachado' when 3 then _utf8'Cancelado' end) AS `estado`,(case `c`.`tipo_solicitud` when 1 then _utf8'Consejera' when 2 then _utf8'Gerente' when 3 then _utf8'Buzon' end) AS `descripcion_solicitud`,`c`.`tipo_solicitud` AS `tipo_solicitud` from ((`consejeras` `a` join `pedidos` `b` on((`b`.`codigo` = `a`.`codigo`))) join `solicitudes` `c` on((`b`.`id` = `c`.`pedido_id`))) where (cast(`c`.`fecha_creado` as date) = curdate()) */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-20  9:14:44
