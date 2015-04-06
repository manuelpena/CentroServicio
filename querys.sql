/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.0.51b-community-nt-log : Database - cservicio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cservicio` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `adicionales` */

DROP TABLE IF EXISTS `adicionales`;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `adicionales` */

insert  into `adicionales`(`id`,`anio`,`campania`,`descripcion`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,2015,1,'Closet',NULL,NULL,NULL,NULL),(2,2015,1,'Set de Vasos',NULL,NULL,NULL,NULL),(3,2015,1,'Black Touch',NULL,NULL,NULL,NULL),(4,2015,2,'Colonia',NULL,NULL,1,'2015-03-16 11:28:32'),(5,2015,2,'Col. Mesmerize 2',NULL,NULL,1,'2015-03-16 11:29:03'),(8,2015,2,'Sensus',1,'2015-03-16 12:43:43',NULL,NULL),(9,2015,1,'Far Away',1,'2015-03-16 12:43:56',NULL,NULL);

/*Table structure for table `adicionales_pilotos` */

DROP TABLE IF EXISTS `adicionales_pilotos`;

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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

/*Data for the table `adicionales_pilotos` */

insert  into `adicionales_pilotos`(`id`,`adicional_id`,`cuadre_piloto_id`,`cantidad`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,4,7,9,1,'2015-03-09 08:27:33',NULL,NULL),(2,4,8,9,1,'2015-03-09 08:27:56',NULL,NULL),(3,5,8,10,1,'2015-03-09 08:27:56',NULL,NULL),(4,1,9,5,1,'2015-03-10 01:17:46',NULL,NULL),(5,2,9,4,1,'2015-03-10 01:17:46',NULL,NULL),(6,3,9,3,1,'2015-03-10 01:17:46',NULL,NULL),(7,1,10,5,1,'2015-03-10 01:19:44',NULL,NULL),(13,4,12,25,1,'2015-03-10 07:25:24',NULL,NULL),(20,3,14,6,1,'2015-03-10 08:15:57',NULL,NULL),(21,4,15,23,1,'2015-03-10 14:55:47',NULL,NULL),(22,5,15,24,1,'2015-03-10 14:55:47',NULL,NULL),(23,1,16,4,1,'2015-03-10 15:00:03',NULL,NULL),(24,2,16,5,1,'2015-03-10 15:00:03',NULL,NULL),(25,3,16,7,1,'2015-03-10 15:00:03',NULL,NULL),(26,1,17,4,1,'2015-03-10 15:03:23',NULL,NULL),(27,2,17,25,1,'2015-03-10 15:03:23',NULL,NULL),(28,3,17,5,1,'2015-03-10 15:03:24',NULL,NULL),(29,4,18,4,1,'2015-03-10 15:31:44',NULL,NULL),(31,5,19,5,1,'2015-03-10 15:35:56',NULL,NULL),(32,4,19,4,1,'2015-03-10 15:35:56',NULL,NULL),(33,4,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(34,5,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(35,4,21,5,1,'2015-03-10 22:00:36',NULL,NULL),(36,5,21,23,1,'2015-03-10 22:00:36',NULL,NULL),(37,4,22,5,1,'2015-03-10 22:03:43',NULL,NULL),(38,5,22,25,1,'2015-03-10 22:03:43',NULL,NULL),(39,1,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(40,2,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(41,3,23,25,1,'2015-03-10 22:04:35',NULL,NULL),(42,1,24,5,1,'2015-03-10 22:23:50',NULL,NULL),(43,2,24,4,1,'2015-03-10 22:23:50',NULL,NULL),(44,3,24,3,1,'2015-03-10 22:23:50',NULL,NULL),(45,1,0,4,1,'2015-03-10 23:35:22',NULL,NULL),(46,2,0,5,1,'2015-03-10 23:35:22',NULL,NULL),(47,3,0,6,1,'2015-03-10 23:35:22',NULL,NULL),(48,1,27,5,1,'2015-03-10 23:35:48',NULL,NULL),(49,2,27,6,1,'2015-03-10 23:35:48',NULL,NULL),(50,3,27,4,1,'2015-03-10 23:35:48',NULL,NULL),(51,4,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(52,5,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(53,4,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(54,5,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(55,4,28,4,1,'2015-03-11 00:18:39',NULL,NULL),(56,5,28,5,1,'2015-03-11 00:18:39',NULL,NULL),(57,4,0,4,1,'2015-03-12 07:57:24',NULL,NULL),(58,5,0,6,1,'2015-03-12 07:57:24',NULL,NULL),(59,4,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(60,5,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(61,4,30,4,1,'2015-03-14 00:43:51',NULL,NULL),(62,5,30,3,1,'2015-03-14 00:43:51',NULL,NULL),(63,4,0,5,1,'2015-03-16 12:44:32',NULL,NULL),(64,5,0,6,1,'2015-03-16 12:44:32',NULL,NULL),(65,8,0,7,1,'2015-03-16 12:44:32',NULL,NULL),(66,4,31,5,1,'2015-03-16 12:45:19',NULL,NULL),(67,5,31,7,1,'2015-03-16 12:45:19',NULL,NULL),(68,8,31,8,1,'2015-03-16 12:45:19',NULL,NULL),(69,1,32,4,3,'2015-03-20 07:58:04',NULL,NULL),(70,2,32,5,3,'2015-03-20 07:58:04',NULL,NULL),(71,3,32,6,3,'2015-03-20 07:58:04',NULL,NULL),(72,9,32,7,3,'2015-03-20 07:58:04',NULL,NULL),(73,4,33,4,3,'2015-03-23 21:59:38',NULL,NULL),(74,5,33,6,3,'2015-03-23 21:59:38',NULL,NULL),(75,8,33,7,3,'2015-03-23 21:59:38',NULL,NULL),(76,4,34,3,3,'2015-03-23 22:00:16',NULL,NULL),(77,5,34,4,3,'2015-03-23 22:00:16',NULL,NULL),(78,8,34,5,3,'2015-03-23 22:00:16',NULL,NULL),(79,4,0,5,3,'2015-03-23 22:02:04',NULL,NULL),(80,5,0,2,3,'2015-03-23 22:02:04',NULL,NULL),(81,8,0,4,3,'2015-03-23 22:02:04',NULL,NULL),(82,4,0,0,3,'2015-03-23 22:03:58',NULL,NULL),(83,5,0,0,3,'2015-03-23 22:03:58',NULL,NULL),(84,8,0,0,3,'2015-03-23 22:03:58',NULL,NULL);

/*Table structure for table `agencias` */

DROP TABLE IF EXISTS `agencias`;

CREATE TABLE `agencias` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(50) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `agencias` */

insert  into `agencias`(`id`,`descripcion`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,'COMTEC',NULL,NULL,3,'2015-03-20 07:57:37'),(2,'DHL',NULL,NULL,NULL,NULL);

/*Table structure for table `bancos` */

DROP TABLE IF EXISTS `bancos`;

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `bancos` */

insert  into `bancos`(`id`,`descripcion`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,'Fomento Agropecuarix',NULL,NULL,1,'2015-03-13 18:09:28'),(5,'Promerica',NULL,NULL,1,'2015-03-13 08:18:26'),(21,'Agricola',1,'2015-03-13 08:18:32',NULL,NULL),(22,'CITI',1,'2015-03-13 08:18:37',NULL,NULL),(23,'SCOTIABANK',1,'2015-03-13 08:18:44',NULL,NULL),(24,'FEDECASES',1,'2015-03-13 08:18:49',NULL,NULL),(25,'TIGO MONEY',1,'2015-03-13 08:18:55',NULL,NULL),(26,'Hipotecario',1,'2015-03-13 08:19:19',NULL,NULL);

/*Table structure for table `bodegaje_config` */

DROP TABLE IF EXISTS `bodegaje_config`;

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

/*Data for the table `bodegaje_config` */

insert  into `bodegaje_config`(`id`,`dia`,`tipo_pedido`,`cobro`,`tipo_solicitud`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,1,1,1,2,NULL,NULL,NULL,NULL),(2,2,1,0,2,NULL,NULL,1,'2015-03-17 15:18:50'),(3,3,1,1,2,NULL,NULL,NULL,NULL),(4,4,1,2,2,NULL,NULL,NULL,NULL),(5,5,1,2,2,NULL,NULL,NULL,NULL),(6,6,1,2,2,NULL,NULL,NULL,NULL),(7,7,1,2,2,NULL,NULL,NULL,NULL),(8,8,1,2,2,NULL,NULL,NULL,NULL),(9,1,2,0,2,NULL,NULL,NULL,NULL),(10,2,2,0,2,NULL,NULL,NULL,NULL),(11,3,2,0,2,NULL,NULL,NULL,NULL),(12,4,2,2,2,NULL,NULL,NULL,NULL),(13,5,2,2,2,NULL,NULL,NULL,NULL),(14,6,2,2,2,NULL,NULL,NULL,NULL),(15,7,2,2,2,NULL,NULL,NULL,NULL),(16,8,2,2,2,NULL,NULL,NULL,NULL),(19,3,1,7,1,NULL,NULL,1,'2015-03-17 15:23:47'),(20,4,1,0,1,NULL,NULL,1,'2015-03-17 15:15:06'),(21,5,1,2,1,NULL,NULL,NULL,NULL),(22,6,1,2,1,NULL,NULL,NULL,NULL),(23,7,1,2,1,NULL,NULL,NULL,NULL),(24,8,1,2,1,NULL,NULL,NULL,NULL),(25,1,2,0,1,NULL,NULL,NULL,NULL),(26,2,2,0,1,NULL,NULL,NULL,NULL),(27,3,2,1,1,NULL,NULL,NULL,NULL),(28,4,2,2,1,NULL,NULL,NULL,NULL),(29,5,2,2,1,NULL,NULL,NULL,NULL),(30,6,2,2,1,NULL,NULL,NULL,NULL),(31,7,2,2,1,NULL,NULL,NULL,NULL),(32,8,2,2,1,NULL,NULL,NULL,NULL),(33,1,0,1,0,1,'2015-03-17 13:03:54',NULL,NULL),(34,8,0,1,1,1,'2015-03-17 13:04:38',NULL,NULL),(35,1,0,4,0,1,'2015-03-17 13:05:48',NULL,NULL),(36,1,0,2,0,1,'2015-03-17 13:06:23',NULL,NULL),(37,10,1,1,1,1,'2015-03-17 13:34:40',NULL,NULL),(38,6,0,5,0,1,'2015-03-17 13:36:30',NULL,NULL),(39,1,0,5,0,1,'2015-03-17 14:30:23',NULL,NULL),(40,1,0,5,0,1,'2015-03-17 14:31:45',NULL,NULL),(41,1,0,7,0,1,'2015-03-17 14:35:06',NULL,NULL),(42,1,0,7,0,1,'2015-03-17 14:35:31',NULL,NULL),(43,10,2,7,2,1,'2015-03-17 14:35:51',NULL,NULL),(44,12,2,5,2,1,'2015-03-17 14:46:52',NULL,NULL),(45,11,1,5,2,1,'2015-03-17 14:47:07',NULL,NULL),(46,11,1,8,1,1,'2015-03-17 14:47:43',1,'2015-03-17 15:21:06'),(47,9,1,12,1,1,'2015-03-17 14:48:01',NULL,NULL),(48,0,0,3,0,1,'2015-03-17 14:52:41',NULL,NULL),(49,10,1,2,2,1,'2015-03-17 15:04:18',NULL,NULL),(50,1,1,1,1,1,'2015-03-17 15:30:39',1,'2015-03-17 15:38:32'),(51,2,1,3,1,1,'2015-03-17 15:30:46',1,'2015-03-17 15:30:55');

/*Table structure for table `boletas` */

DROP TABLE IF EXISTS `boletas`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `boletas` */

/*Table structure for table `buzones` */

DROP TABLE IF EXISTS `buzones`;

CREATE TABLE `buzones` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(50) default NULL,
  `zona` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

/*Data for the table `buzones` */

insert  into `buzones`(`id`,`descripcion`,`zona`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (2,'ZARAGOZA',201,1,'2015-02-14 22:04:01',NULL,NULL),(3,'SALA DE TE',204,1,'2015-02-14 22:04:01',NULL,NULL),(4,'NEJAPA',204,1,'2015-02-14 22:04:01',NULL,NULL),(5,'SAN VICENTE',205,1,'2015-02-14 22:04:01',NULL,NULL),(6,'SANTO DOMINGO',205,1,'2015-02-14 22:04:01',NULL,NULL),(7,'VERAPAZ',213,1,'2015-02-14 22:04:01',NULL,NULL),(8,'SAN SEBASTIAN',205,1,'2015-02-14 22:04:01',NULL,NULL),(9,'SALA DE BELLEZA',206,1,'2015-02-14 22:04:01',NULL,NULL),(10,'TIPICOS MARGOTH',206,1,'2015-02-14 22:04:01',NULL,NULL),(11,'VENTA ROPA',207,1,'2015-02-14 22:04:01',NULL,NULL),(12,'SAN MARTIN',227,1,'2015-02-14 22:04:01',NULL,NULL),(13,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(14,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(15,'USULUTAN',211,1,'2015-02-14 22:04:01',NULL,NULL),(16,'LA UNION',212,1,'2015-02-14 22:04:01',NULL,NULL),(17,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(18,'SAN MARCOS',215,1,'2015-02-14 22:04:01',NULL,NULL),(19,'TEXACUANGO',215,1,'2015-02-14 22:04:01',NULL,NULL),(20,'TRANSITO',216,1,'2015-02-14 22:04:01',NULL,NULL),(21,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(22,'LOURDES',217,1,'2015-02-14 22:04:01',NULL,NULL),(23,'SANTA TECLA',217,1,'2015-02-14 22:04:01',NULL,NULL),(24,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(25,'METAPAN',218,1,'2015-02-14 22:04:01',NULL,NULL),(26,'LA PALMA',220,1,'2015-02-14 22:04:01',NULL,NULL),(27,'CHALATENANGO',220,1,'2015-02-14 22:04:01',NULL,NULL),(28,'TEJUTLA',220,1,'2015-02-14 22:04:01',NULL,NULL),(29,'AHUCHAPAN',221,1,'2015-02-14 22:04:01',NULL,NULL),(30,'ATIQUIZAYA',221,1,'2015-02-14 22:04:01',NULL,NULL),(31,'SAN ROBERTO',235,1,'2015-02-14 22:04:01',NULL,NULL),(32,'CASA GERENTE',210,1,'2015-02-14 22:04:01',NULL,NULL),(33,'ILOBASCO',223,1,'2015-02-14 22:04:01',NULL,NULL),(34,'SENSUNTE',223,1,'2015-02-14 22:04:01',NULL,NULL),(35,'SAN MARTIN',227,1,'2015-02-14 22:04:01',NULL,NULL),(36,'GUAZAPA',228,1,'2015-02-14 22:04:01',NULL,NULL),(37,'AGUILARES',228,1,'2015-02-14 22:04:01',NULL,NULL),(38,'AMAYO',228,1,'2015-02-14 22:04:01',NULL,NULL),(39,'NUEVA CONCEPCION',228,1,'2015-02-14 22:04:01',NULL,NULL),(40,'QUEZALTE',229,1,'2015-02-14 22:04:01',NULL,NULL),(41,'OPICO',229,1,'2015-02-14 22:04:01',NULL,NULL),(42,'SAN LUIS TALPA',215,1,'2015-02-14 22:04:01',NULL,NULL),(43,'ROSARIO',230,1,'2015-02-14 22:04:01',NULL,NULL),(44,'HERRADURA',230,1,'2015-02-14 22:04:01',NULL,NULL),(45,'SANTIGO NONUALCO',230,1,'2015-02-14 22:04:01',NULL,NULL),(46,'SAN RAFAEL',230,1,'2015-02-14 22:04:01',NULL,NULL),(47,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(48,'ARMENIA',232,1,'2015-02-14 22:04:01',NULL,NULL),(49,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(50,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(51,'SANTA ROSA',235,1,'2015-02-14 22:04:01',NULL,NULL),(52,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(53,'JUAYUA',236,1,'2015-02-14 22:04:01',NULL,NULL),(54,'ZACATE',237,1,'2015-02-14 22:04:01',NULL,NULL),(55,'CIUDAD REAL',238,1,'2015-02-14 22:04:01',NULL,NULL),(56,'CHALCHUAPA',238,1,'2015-02-14 22:04:01',NULL,NULL),(57,'SANTA ANA',238,1,'2015-02-14 22:04:01',NULL,NULL),(58,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(59,'ANGELICA',240,1,'2015-02-14 22:04:01',NULL,NULL),(60,'ALTAVISTA',234,1,'2015-02-14 22:04:01',NULL,NULL),(61,'OLOCUILTA',215,1,'2015-02-14 22:04:01',NULL,NULL),(62,'SAN LUIS TALPA',215,1,'2015-02-14 22:04:01',NULL,NULL),(63,'PEDREGAL',230,1,'2015-02-14 22:04:01',NULL,NULL),(64,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(66,'SAN MIGUEL',235,1,'2015-02-14 22:04:01',NULL,NULL),(67,'SAN ALEJO',212,1,'2015-02-14 22:04:01',NULL,NULL),(68,'SANTO TOMAS',215,1,'2015-02-14 22:04:01',NULL,NULL),(69,'SAN ROBERTO',235,1,'2015-02-14 22:04:01',NULL,NULL),(71,'TONACA',228,1,'2015-02-14 22:04:01',NULL,NULL),(73,'xd3',203,1,'2015-03-16 15:26:39',1,'2015-03-16 15:26:56'),(74,'xd2',203,1,'2015-03-16 15:26:46',NULL,NULL);

/*Table structure for table `ci_cookies` */

DROP TABLE IF EXISTS `ci_cookies`;

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

/*Data for the table `ci_cookies` */

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(45) NOT NULL default '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('368f7d93034afbe64f279a5963fab069','127.0.0.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1428299006,'a:6:{s:9:\"user_data\";s:0:\"\";s:7:\"usuario\";s:11:\"Alex Guzman\";s:10:\"usuario_id\";s:1:\"3\";s:3:\"rol\";s:6:\"admind\";s:6:\"imagen\";s:34:\"images/perfiles/mario.valencia.jpg\";s:12:\"is_logged_in\";b:1;}');

/*Table structure for table `consejeras` */

DROP TABLE IF EXISTS `consejeras`;

CREATE TABLE `consejeras` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `zona` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `consejeras` */

/*Table structure for table `consejeras_eficiencia` */

DROP TABLE IF EXISTS `consejeras_eficiencia`;

CREATE TABLE `consejeras_eficiencia` (
  `id` int(11) NOT NULL auto_increment,
  `anio` int(11) default NULL,
  `campania` int(11) default NULL,
  `zona` int(11) default NULL,
  `sector` int(11) default NULL,
  `codigo` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `consejeras_eficiencia` */

/*Table structure for table `cuadre_pilotos` */

DROP TABLE IF EXISTS `cuadre_pilotos`;

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `cuadre_pilotos` */

insert  into `cuadre_pilotos`(`id`,`anio`,`campania`,`piloto`,`pedidos`,`cajas`,`zona`,`entrada`,`salida`,`agencia_id`,`fecha_cuadre`,`observaciones`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,2015,1,1,5,5,204,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:07:52',NULL,NULL),(2,2015,1,1,5,5,207,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:08:17',NULL,NULL),(3,2015,1,1,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:37',NULL,NULL),(4,2015,1,2,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:43',NULL,NULL),(5,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:46',NULL,NULL),(6,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:15:31',NULL,NULL),(7,2015,2,3,4,5,209,'7:30 AM','7:30 AM',2,'2015-03-19','dddd',1,'2015-03-09 08:27:33',NULL,NULL),(13,2015,1,1,5,23,203,'6:30 AM','6:30 AM',1,'2015-03-04','acasdas',1,'2015-03-10 07:25:42',NULL,NULL),(20,2015,2,9,2,4,209,'4:30 AM','7:15 AM',2,'2015-03-19','asdasdasd',1,'2015-03-10 17:54:38',NULL,NULL),(21,2015,2,10,4,2,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:00:36',NULL,NULL),(22,2015,2,19,4,5,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:03:43',NULL,NULL),(23,2015,1,18,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',1,'2015-03-10 22:04:34',NULL,NULL),(24,2015,1,2,2,3,202,'9:30 PM','9:30 PM',1,'2015-03-10','2321',1,'2015-03-10 22:23:50',NULL,NULL),(25,2015,1,2,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 22:59:42',NULL,NULL),(26,2015,1,7,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 23:34:36',NULL,NULL),(27,2015,1,9,2,4,209,'1:15 PM','10:45 PM',1,'2015-03-06','xdasdasd',1,'2015-03-10 23:35:48',NULL,NULL),(28,2015,2,2,4,5,209,'1:23 PM','1:15 AM',1,'2015-02-23','2323',1,'2015-03-11 00:18:39',NULL,NULL),(29,2015,2,2,4,4,201,'1:15 AM','7:00 AM',2,'2015-02-23','asdasd',1,'2015-03-12 07:57:59',NULL,NULL),(31,2015,2,15,5,7,201,'1:15 AM','11:45 AM',1,'2015-02-09','asd',1,'2015-03-16 12:45:19',NULL,NULL),(32,2015,1,1,2,4,201,'4:04 AM','7:00 AM',1,'2015-03-24','asd',3,'2015-03-20 07:58:04',NULL,NULL),(33,2015,2,3,5,7,201,'','',1,'2015-02-10','a',3,'2015-03-23 21:59:38',NULL,NULL),(34,2015,2,1,4,5,201,'2:00 AM','',1,'2015-02-03','',3,'2015-03-23 22:00:16',NULL,NULL);

/*Table structure for table `detalle_rol` */

DROP TABLE IF EXISTS `detalle_rol`;

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

/*Data for the table `detalle_rol` */

insert  into `detalle_rol`(`id`,`usuarios_id`,`id_rol`,`id_sistema`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,1,1,1,NULL,NULL,1,'2015-04-06 00:41:00'),(2,3,1,1,1,'2015-03-18 23:49:33',1,'2015-04-06 00:41:09'),(3,4,1,1,3,'2015-03-23 23:24:40',3,'2015-03-23 23:24:55');

/*Table structure for table `dias_laborales` */

DROP TABLE IF EXISTS `dias_laborales`;

CREATE TABLE `dias_laborales` (
  `id` int(11) NOT NULL auto_increment,
  `fecha` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

/*Data for the table `dias_laborales` */

insert  into `dias_laborales`(`id`,`fecha`) values (1,'2015-02-02'),(2,'2015-02-03'),(3,'2015-02-04'),(4,'2015-02-05'),(8,'2015-02-09'),(9,'2015-02-10'),(10,'2015-02-11'),(11,'2015-02-12'),(12,'2015-02-13'),(15,'2015-02-16'),(16,'2015-02-17'),(17,'2015-02-18'),(18,'2015-02-19'),(22,'2015-02-23'),(23,'2015-02-24'),(24,'2015-02-25'),(25,'2015-02-26'),(29,'2015-03-02'),(30,'2015-02-06'),(31,'2015-02-27'),(32,'2015-02-20'),(36,'2015-02-21'),(37,'2015-02-28'),(38,'2015-03-03'),(39,'2015-03-04'),(40,'2015-03-05'),(41,'2015-03-06'),(42,'2015-03-07'),(43,'2015-03-14'),(44,'2015-03-13'),(45,'2015-03-21'),(46,'2015-03-27'),(48,'2015-03-26'),(49,'2015-03-25'),(50,'2015-03-31'),(51,'2015-03-30'),(52,'2015-04-01'),(53,'2015-04-02'),(54,'2015-04-03'),(55,'2015-04-04'),(58,'2015-04-11'),(59,'2015-04-10'),(60,'2015-04-09');

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `clase` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `menus` */

insert  into `menus`(`id`,`descripcion`,`url`,`clase`) values (1,'Operaciones','http://localhost:8080/CentroServicio/operaciones/','	<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>'),(2,'Bodega','http://localhost:8080/CentroServicio/bodega/','<i class=\"fa fa-dropbox\" aria-hidden=\"true\"></i>'),(3,'Boletas','http://localhost:8080/CentroServicio/boletas/','<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>'),(4,'Pilotos','http://localhost:8080/CentroServicio/pilotos/','<i class=\"fa fa-group\" aria-hidden=\"true\"></i>'),(5,'Mantenimientos','http://localhost:8080/CentroServicio/mantenimientos/','<i class=\"fa fa-cog\" aria-hidden=\"true\"></i>'),(6,'Consultas','http://localhost:8080/CentroServicio/consultas/','<i class=\"fa fa-search\" aria-hidden=\"true\"></i>'),(7,'Reportes','http://localhost:8080/CentroServicio/operaciones/','<i class=\"fa fa-bar-chart-o\" aria-hidden=\"true\"></i>');

/*Table structure for table `paginas` */

DROP TABLE IF EXISTS `paginas`;

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL auto_increment,
  `menu_id` int(11) default NULL,
  `descripcion` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

/*Data for the table `paginas` */

insert  into `paginas`(`id`,`menu_id`,`descripcion`,`url`) values (1,1,'Solicitudes Consejera','solicitudesconsejeras'),(2,1,'Solicitudes Buzones y Gerentes','solicitudesbuzones'),(3,2,'Pedidos Pendientes','pedidospendientes'),(4,3,'Boletas','datosboletas'),(5,3,'Consulta de Boletas','consultasboletas'),(6,4,'Cuadre Pilotos','cuadrepilotos'),(7,5,'Cargas DRC','cargasdrc'),(8,5,'Desmantelado','desmantelado'),(9,5,'Dias Laborales','diaslaborales'),(10,5,'Bancos','bancos'),(11,5,'Adicionales','adicionales'),(12,5,'Agencias','agencias'),(13,5,'Bodegaje','bodegaje'),(14,6,'Consejera','consultaconsejera'),(15,7,'Reportes','reportes'),(16,5,'Usuarios','usuarios'),(17,5,'Roles','roles'),(18,5,'Buzones','buzones'),(19,4,'Eficiencias Cargas','cargaseficiencias'),(20,7,'Eficiencias en Ruta','eficiencias'),(21,6,'Pilotos','consultapilotos'),(22,6,'Bodegaje','cobrobodegaje');

/*Table structure for table `pedidos` */

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `anio` int(4) NOT NULL,
  `campania` tinyint(4) NOT NULL,
  `cod` double default NULL,
  `monto_facturado` double default NULL,
  `pod` double default '0',
  `comentarios` varchar(100) default NULL,
  `cajas` tinyint(4) default NULL,
  `los` int(11) default NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pedidos` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id` int(11) NOT NULL auto_increment,
  `detalle` varchar(50) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `rol` */

insert  into `rol`(`id`,`detalle`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,'admind',NULL,NULL,1,'2015-03-18 08:58:24'),(14,'operador',1,'2015-03-18 08:49:32',NULL,NULL);

/*Table structure for table `roles_paginas` */

DROP TABLE IF EXISTS `roles_paginas`;

CREATE TABLE `roles_paginas` (
  `id` int(11) NOT NULL auto_increment,
  `pagina_id` int(11) default NULL,
  `rol_id` int(11) default NULL,
  `creado_por` int(11) default NULL,
  `fecha_creado` datetime default NULL,
  `modificado_por` int(11) default NULL,
  `fecha_modificado` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `roles_paginas` */

insert  into `roles_paginas`(`id`,`pagina_id`,`rol_id`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,3,1,1,'2015-03-18 08:49:13',NULL,NULL),(2,5,1,1,'2015-03-18 08:49:19',NULL,NULL),(3,1,14,1,'2015-03-18 08:50:40',NULL,NULL),(4,2,1,1,'2015-03-18 08:50:44',NULL,NULL),(5,1,1,1,'2015-03-18 08:50:52',NULL,NULL),(6,6,1,1,'2015-03-18 08:50:57',NULL,NULL),(7,7,1,1,'2015-03-18 08:51:02',NULL,NULL),(8,8,1,1,'2015-03-18 08:51:05',NULL,NULL),(9,9,1,1,'2015-03-18 08:51:07',NULL,NULL),(10,12,1,1,'2015-03-18 08:51:12',NULL,NULL),(13,11,14,2,'2015-03-19 16:54:17',NULL,NULL),(14,11,1,1,'2015-03-20 00:41:57',NULL,NULL),(15,16,14,1,'2015-03-20 00:41:57',NULL,NULL),(16,17,14,1,'2015-03-20 00:41:57',NULL,NULL),(17,13,1,3,'2015-03-20 07:41:04',NULL,NULL),(18,16,1,3,'2015-03-20 07:41:07',NULL,NULL),(19,17,1,3,'2015-03-20 07:41:09',NULL,NULL),(20,10,1,3,'2015-03-20 07:41:27',NULL,NULL),(21,14,1,3,'2015-03-20 07:41:30',NULL,NULL),(22,15,1,3,'2015-03-20 07:41:34',NULL,NULL),(23,4,1,3,'2015-03-20 16:38:46',NULL,NULL),(24,18,1,3,'2015-03-26 14:17:42',NULL,NULL),(25,19,1,3,'2015-03-28 23:50:09',NULL,NULL),(26,20,1,3,'2015-04-03 22:25:26',NULL,NULL),(27,21,1,3,'2015-04-05 18:52:54',NULL,NULL),(28,22,1,3,'2015-04-05 20:40:25',NULL,NULL);

/*Table structure for table `sistema` */

DROP TABLE IF EXISTS `sistema`;

CREATE TABLE `sistema` (
  `id` int(11) NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `descripcion` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sistema` */

insert  into `sistema`(`id`,`sistema`,`descripcion`) values (1,'CS','Centro de Servicio');

/*Table structure for table `solicitudes` */

DROP TABLE IF EXISTS `solicitudes`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `solicitudes` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

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

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`password`,`imagen_url`,`descripcion`,`estado`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,'admin','81dc9bdb52d04dc20036dbd8313ed055','images/perfiles/mario.valencia.jpg','Mario',2,NULL,NULL,1,'2015-04-06 00:41:00'),(3,'Alex','81dc9bdb52d04dc20036dbd8313ed055','images/perfiles/mario.valencia.jpg','Alex Guzman',1,1,'2015-03-18 23:49:33',1,'2015-04-06 00:41:09'),(4,'Mario','7815696ecbf1c96e6894b779456d330e',NULL,'asd',1,3,'2015-03-23 23:24:40',3,'2015-03-23 23:24:55');

/*Table structure for table `zonas` */

DROP TABLE IF EXISTS `zonas`;

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL auto_increment,
  `zona` int(11) default NULL,
  `division` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='		';

/*Data for the table `zonas` */

insert  into `zonas`(`id`,`zona`,`division`) values (1,205,'ARAUCARIA'),(2,207,'ARAUCARIA'),(3,210,'ARAUCARIA'),(4,211,'ARAUCARIA'),(5,212,'ARAUCARIA'),(6,216,'ARAUCARIA'),(7,222,'ARAUCARIA'),(8,223,'ARAUCARIA'),(9,231,'ARAUCARIA'),(10,235,'ARAUCARIA'),(11,237,'ARAUCARIA'),(12,239,'ARAUCARIA'),(13,203,'MAQUILISHUAT'),(14,209,'MAQUILISHUAT'),(15,213,'MAQUILISHUAT'),(16,214,'MAQUILISHUAT'),(17,215,'MAQUILISHUAT'),(18,219,'MAQUILISHUAT'),(19,220,'MAQUILISHUAT'),(20,224,'MAQUILISHUAT'),(21,225,'MAQUILISHUAT'),(22,227,'MAQUILISHUAT'),(23,228,'MAQUILISHUAT'),(24,229,'MAQUILISHUAT'),(25,230,'MAQUILISHUAT'),(26,234,'MAQUILISHUAT'),(27,201,'OLIVO'),(28,202,'OLIVO'),(29,204,'OLIVO'),(30,206,'OLIVO'),(31,208,'OLIVO'),(32,217,'OLIVO'),(33,218,'OLIVO'),(34,221,'OLIVO'),(35,226,'OLIVO'),(36,232,'OLIVO'),(37,233,'OLIVO'),(38,236,'OLIVO'),(39,238,'OLIVO'),(40,240,'OLIVO');

/*Table structure for table `boletas_vista` */

DROP TABLE IF EXISTS `boletas_vista`;

/*!50001 DROP VIEW IF EXISTS `boletas_vista` */;
/*!50001 DROP TABLE IF EXISTS `boletas_vista` */;

/*!50001 CREATE TABLE  `boletas_vista`(
 `boleta_id` int(11) ,
 `codigo` int(11) ,
 `nombres` varchar(100) ,
 `cod` double ,
 `referencia` varchar(50) ,
 `monto` double ,
 `fecha` date ,
 `observaciones` varchar(250) ,
 `banco` varchar(100) ,
 `usuario` varchar(100) 
)*/;

/*Table structure for table `solicitudes_vista` */

DROP TABLE IF EXISTS `solicitudes_vista`;

/*!50001 DROP VIEW IF EXISTS `solicitudes_vista` */;
/*!50001 DROP TABLE IF EXISTS `solicitudes_vista` */;

/*!50001 CREATE TABLE  `solicitudes_vista`(
 `id` int(11) ,
 `codigo` int(11) ,
 `nombres` varchar(100) ,
 `zona` int(11) ,
 `ncaja` tinyint(4) ,
 `estado` varchar(10) ,
 `descripcion_solicitud` varchar(9) ,
 `tipo_solicitud` int(11) 
)*/;

/*View structure for view boletas_vista */

/*!50001 DROP TABLE IF EXISTS `boletas_vista` */;
/*!50001 DROP VIEW IF EXISTS `boletas_vista` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `boletas_vista` AS (select `a`.`id` AS `boleta_id`,`c`.`codigo` AS `codigo`,`c`.`nombres` AS `nombres`,`b`.`cod` AS `cod`,`a`.`referencia` AS `referencia`,`a`.`monto` AS `monto`,`a`.`fecha` AS `fecha`,`a`.`observaciones` AS `observaciones`,`d`.`descripcion` AS `banco`,`e`.`descripcion` AS `usuario` from ((((`boletas` `a` join `pedidos` `b` on((`a`.`pedido_id` = `b`.`id`))) join `consejeras` `c` on((`c`.`codigo` = `b`.`codigo`))) join `bancos` `d` on((`d`.`id` = `a`.`banco_id`))) join `usuarios` `e` on((`e`.`id` = `a`.`creado_por`)))) */;

/*View structure for view solicitudes_vista */

/*!50001 DROP TABLE IF EXISTS `solicitudes_vista` */;
/*!50001 DROP VIEW IF EXISTS `solicitudes_vista` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `solicitudes_vista` AS select `c`.`id` AS `id`,`a`.`codigo` AS `codigo`,`a`.`nombres` AS `nombres`,`a`.`zona` AS `zona`,`b`.`ncaja` AS `ncaja`,(case `c`.`estado` when 1 then _utf8'Pendiente' when 2 then _utf8'Despachado' when 3 then _utf8'Cancelado' end) AS `estado`,(case `c`.`tipo_solicitud` when 1 then _utf8'Consejera' when 2 then _utf8'Gerente' when 3 then _utf8'Buzon' end) AS `descripcion_solicitud`,`c`.`tipo_solicitud` AS `tipo_solicitud` from ((`consejeras` `a` join `pedidos` `b` on((`b`.`codigo` = `a`.`codigo`))) join `solicitudes` `c` on((`b`.`id` = `c`.`pedido_id`))) where (cast(`c`.`fecha_creado` as date) = curdate()) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
