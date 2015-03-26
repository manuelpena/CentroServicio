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

insert  into `adicionales_pilotos`(`id`,`adicional_id`,`cuadre_piloto_id`,`cantidad`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,4,7,9,1,'2015-03-09 08:27:33',NULL,NULL),(2,4,8,9,1,'2015-03-09 08:27:56',NULL,NULL),(3,5,8,10,1,'2015-03-09 08:27:56',NULL,NULL),(4,1,9,5,1,'2015-03-10 01:17:46',NULL,NULL),(5,2,9,4,1,'2015-03-10 01:17:46',NULL,NULL),(6,3,9,3,1,'2015-03-10 01:17:46',NULL,NULL),(7,1,10,5,1,'2015-03-10 01:19:44',NULL,NULL),(13,4,12,25,1,'2015-03-10 07:25:24',NULL,NULL),(19,2,14,5,1,'2015-03-10 08:15:57',NULL,NULL),(20,3,14,6,1,'2015-03-10 08:15:57',NULL,NULL),(21,4,15,23,1,'2015-03-10 14:55:47',NULL,NULL),(22,5,15,24,1,'2015-03-10 14:55:47',NULL,NULL),(23,1,16,4,1,'2015-03-10 15:00:03',NULL,NULL),(24,2,16,5,1,'2015-03-10 15:00:03',NULL,NULL),(25,3,16,7,1,'2015-03-10 15:00:03',NULL,NULL),(26,1,17,4,1,'2015-03-10 15:03:23',NULL,NULL),(27,2,17,25,1,'2015-03-10 15:03:23',NULL,NULL),(28,3,17,5,1,'2015-03-10 15:03:24',NULL,NULL),(29,4,18,4,1,'2015-03-10 15:31:44',NULL,NULL),(31,5,19,5,1,'2015-03-10 15:35:56',NULL,NULL),(32,4,19,4,1,'2015-03-10 15:35:56',NULL,NULL),(33,4,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(34,5,20,0,1,'2015-03-10 17:54:38',NULL,NULL),(35,4,21,5,1,'2015-03-10 22:00:36',NULL,NULL),(36,5,21,23,1,'2015-03-10 22:00:36',NULL,NULL),(37,4,22,5,1,'2015-03-10 22:03:43',NULL,NULL),(38,5,22,25,1,'2015-03-10 22:03:43',NULL,NULL),(39,1,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(40,2,23,24,1,'2015-03-10 22:04:34',NULL,NULL),(41,3,23,25,1,'2015-03-10 22:04:35',NULL,NULL),(42,1,24,5,1,'2015-03-10 22:23:50',NULL,NULL),(43,2,24,4,1,'2015-03-10 22:23:50',NULL,NULL),(44,3,24,3,1,'2015-03-10 22:23:50',NULL,NULL),(45,1,0,4,1,'2015-03-10 23:35:22',NULL,NULL),(46,2,0,5,1,'2015-03-10 23:35:22',NULL,NULL),(47,3,0,6,1,'2015-03-10 23:35:22',NULL,NULL),(48,1,27,5,1,'2015-03-10 23:35:48',NULL,NULL),(49,2,27,6,1,'2015-03-10 23:35:48',NULL,NULL),(50,3,27,4,1,'2015-03-10 23:35:48',NULL,NULL),(51,4,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(52,5,0,0,1,'2015-03-10 23:36:48',NULL,NULL),(53,4,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(54,5,0,23,1,'2015-03-11 00:17:59',NULL,NULL),(55,4,28,4,1,'2015-03-11 00:18:39',NULL,NULL),(56,5,28,5,1,'2015-03-11 00:18:39',NULL,NULL),(57,4,0,4,1,'2015-03-12 07:57:24',NULL,NULL),(58,5,0,6,1,'2015-03-12 07:57:24',NULL,NULL),(59,4,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(60,5,29,4,1,'2015-03-12 07:57:59',NULL,NULL),(61,4,30,4,1,'2015-03-14 00:43:51',NULL,NULL),(62,5,30,3,1,'2015-03-14 00:43:51',NULL,NULL),(63,4,0,5,1,'2015-03-16 12:44:32',NULL,NULL),(64,5,0,6,1,'2015-03-16 12:44:32',NULL,NULL),(65,8,0,7,1,'2015-03-16 12:44:32',NULL,NULL),(66,4,31,5,1,'2015-03-16 12:45:19',NULL,NULL),(67,5,31,7,1,'2015-03-16 12:45:19',NULL,NULL),(68,8,31,8,1,'2015-03-16 12:45:19',NULL,NULL),(69,1,32,4,3,'2015-03-20 07:58:04',NULL,NULL),(70,2,32,5,3,'2015-03-20 07:58:04',NULL,NULL),(71,3,32,6,3,'2015-03-20 07:58:04',NULL,NULL),(72,9,32,7,3,'2015-03-20 07:58:04',NULL,NULL),(73,4,33,4,3,'2015-03-23 21:59:38',NULL,NULL),(74,5,33,6,3,'2015-03-23 21:59:38',NULL,NULL),(75,8,33,7,3,'2015-03-23 21:59:38',NULL,NULL),(76,4,34,3,3,'2015-03-23 22:00:16',NULL,NULL),(77,5,34,4,3,'2015-03-23 22:00:16',NULL,NULL),(78,8,34,5,3,'2015-03-23 22:00:16',NULL,NULL),(79,4,0,5,3,'2015-03-23 22:02:04',NULL,NULL),(80,5,0,2,3,'2015-03-23 22:02:04',NULL,NULL),(81,8,0,4,3,'2015-03-23 22:02:04',NULL,NULL),(82,4,0,0,3,'2015-03-23 22:03:58',NULL,NULL),(83,5,0,0,3,'2015-03-23 22:03:58',NULL,NULL),(84,8,0,0,3,'2015-03-23 22:03:58',NULL,NULL);

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

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('0099f6f8f357b70c6c8f874d23576871','127.0.0.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36',1427398468,'a:6:{s:9:\"user_data\";s:0:\"\";s:7:\"usuario\";s:11:\"Alex Guzman\";s:10:\"usuario_id\";s:1:\"3\";s:3:\"rol\";s:6:\"admind\";s:6:\"imagen\";s:34:\"images/perfiles/mario.valencia.jpg\";s:12:\"is_logged_in\";b:1;}');

/*Table structure for table `consejeras` */

DROP TABLE IF EXISTS `consejeras`;

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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

/*Data for the table `consejeras` */

insert  into `consejeras`(`id`,`codigo`,`zona`,`sector`,`nombres`,`direccion`,`telefono_1`,`telefono_2`,`los`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,783,234,98,'Juliet','Ap #822-2122 Scelerisque Ave474-2354 Arcu. St.','1650-3664','7493-7813',8,3,'2015-03-26 14:15:45',NULL,NULL),(2,258,215,77,'Illiana','P.O. Box 134, 2824 Nibh. St.421-1486 Ante, Street','4818-8856','3934-7245',9,3,'2015-03-26 14:15:45',NULL,NULL),(3,2067,213,37,'Taylor','351-9918 Tortor Road8977 Ac Rd.','6629-7983','7077-8504',6,3,'2015-03-26 14:15:45',NULL,NULL),(4,1762,229,12,'Tanisha','7672 Ornare Av.P.O. Box 382, 610 Donec Street','5668-7725','1231-8215',1,3,'2015-03-26 14:15:45',NULL,NULL),(5,1576,215,41,'Sara','198 Primis Rd.Ap #843-4087 Sit St.','4080-3203','7267-0266',10,3,'2015-03-26 14:15:45',NULL,NULL),(6,1102,210,83,'Rylee','P.O. Box 189, 6867 Odio St.946-4675 Felis. Ave','7687-5333','3041-0153',6,3,'2015-03-26 14:15:45',NULL,NULL),(7,1677,237,55,'Jade','9910 Diam Avenue419-9019 Hendrerit Road','3894-4914','3123-3835',8,3,'2015-03-26 14:15:45',NULL,NULL),(8,94,227,39,'Alexis','328-6936 Aptent Rd.P.O. Box 733, 2510 Aliquam Street','9317-8869','9147-2198',9,3,'2015-03-26 14:15:45',NULL,NULL),(9,208,240,11,'Molly','4688 Est, Rd.Ap #129-1963 Enim. St.','9472-7016','2502-8234',7,3,'2015-03-26 14:15:45',NULL,NULL),(10,266,221,87,'Patience','8755 Adipiscing St.8100 Ipsum St.','9986-0659','8714-5660',4,3,'2015-03-26 14:15:45',NULL,NULL),(11,2299,222,51,'Donna','907-3814 Luctus St.Ap #417-3122 Felis. Av.','4394-0603','1216-7670',5,3,'2015-03-26 14:15:45',NULL,NULL),(12,857,211,79,'Charissa','424-3454 Egestas. Street943-6977 Vivamus St.','1341-3208','9488-1400',7,3,'2015-03-26 14:15:45',NULL,NULL),(13,896,203,57,'Lara','P.O. Box 549, 3372 Mollis. Road354-654 Magna Ave','3845-0796','5470-1925',5,3,'2015-03-26 14:15:45',NULL,NULL),(14,1864,228,42,'Sigourney','P.O. Box 112, 2153 Libero Rd.717-9535 Ligula. St.','8347-0693','2035-4617',6,3,'2015-03-26 14:15:45',NULL,NULL),(15,2380,207,84,'Kessie','351 Dui. Rd.Ap #796-7139 Neque St.','4744-5304','4977-9828',2,3,'2015-03-26 14:15:45',NULL,NULL),(16,2176,211,8,'Jessica','8442 Risus. St.Ap #149-8583 Magna Rd.','3839-1712','7203-8585',7,3,'2015-03-26 14:15:45',NULL,NULL),(17,1569,213,76,'Kelsie','4299 Ut, AveP.O. Box 173, 267 Amet St.','1267-8518','8768-0363',3,3,'2015-03-26 14:15:45',NULL,NULL),(18,2393,231,73,'Lilah','Ap #717-6748 Nam StreetP.O. Box 312, 6267 Aliquam St.','3885-7717','3670-7713',8,3,'2015-03-26 14:15:45',NULL,NULL),(19,584,239,98,'Kimberly','956-5637 Tellus. St.Ap #938-3239 Neque Rd.','7169-6345','3107-1679',2,3,'2015-03-26 14:15:45',NULL,NULL),(20,1973,221,82,'Suki','560-1983 Lorem St.399-2658 At Street','5494-4993','1467-1116',5,3,'2015-03-26 14:15:45',NULL,NULL),(21,1837,219,44,'Courtney','Ap #948-4953 Pede, Rd.4449 Curabitur Street','3275-2113','7712-3838',6,3,'2015-03-26 14:15:45',NULL,NULL),(22,233,206,22,'Libby','5411 At, AveAp #479-8773 Fusce Avenue','3425-8321','6475-3153',1,3,'2015-03-26 14:15:45',NULL,NULL),(23,1232,232,48,'Jaime','P.O. Box 626, 6782 Orci. Avenue3405 Taciti St.','2110-9994','8795-2429',2,3,'2015-03-26 14:15:45',NULL,NULL),(24,1714,202,64,'Naomi','374-8309 Varius St.7342 Velit. Av.','8802-1554','3047-0234',7,3,'2015-03-26 14:15:45',NULL,NULL),(25,942,218,10,'Noelani','Ap #104-6933 Dui St.9907 Congue. Rd.','4915-8705','3028-0868',4,3,'2015-03-26 14:15:45',NULL,NULL),(26,585,236,21,'Jasmine','P.O. Box 334, 1489 Pharetra. StreetP.O. Box 693, 3222 Eu, Road','2086-8748','8626-7732',8,3,'2015-03-26 14:15:45',NULL,NULL),(27,1923,235,38,'Cathleen','7535 Ante. Street688-5267 Nullam Road','4768-1244','6927-3273',4,3,'2015-03-26 14:15:45',NULL,NULL),(28,1424,240,43,'Yetta','Ap #793-1723 Felis. AvenueAp #792-8466 Arcu Rd.','3939-7694','6022-4661',6,3,'2015-03-26 14:15:45',NULL,NULL),(29,267,204,65,'Alice','P.O. Box 593, 6512 Ut Road5349 Mi Avenue','2329-9219','2816-2471',8,3,'2015-03-26 14:15:45',NULL,NULL),(30,1492,235,28,'Harriet','Ap #189-3256 Sit Rd.1787 Sem Street','2202-5368','4367-5359',4,3,'2015-03-26 14:15:45',NULL,NULL),(31,605,229,69,'Kalia','9076 Et, St.4142 Maecenas St.','8537-8134','1989-2219',3,3,'2015-03-26 14:15:45',NULL,NULL),(32,151,215,52,'Odessa','1357 Neque Av.5925 Nec Avenue','6777-5595','1130-2233',1,3,'2015-03-26 14:15:45',NULL,NULL),(33,1341,200,68,'Rosalyn','P.O. Box 136, 4178 Eu Street5008 Erat St.','8172-2297','9113-3481',6,3,'2015-03-26 14:15:45',NULL,NULL),(34,317,229,55,'Tatum','Ap #980-4875 Varius AvenueP.O. Box 635, 881 Tellus Ave','9226-9037','2290-7450',10,3,'2015-03-26 14:15:45',NULL,NULL),(35,1769,205,53,'Nora','Ap #127-1055 Curabitur Rd.P.O. Box 592, 323 Pede Rd.','5246-9817','5854-7832',10,3,'2015-03-26 14:15:45',NULL,NULL),(36,771,221,88,'Dahlia','P.O. Box 308, 5642 Hymenaeos. Rd.8589 Ut St.','3676-2551','9108-8237',1,3,'2015-03-26 14:15:45',NULL,NULL),(37,1044,217,32,'Idola','257-4860 Vulputate StreetAp #176-8388 Mus. Av.','1665-0472','5924-5989',9,3,'2015-03-26 14:15:45',NULL,NULL),(38,17,214,15,'Kiona','P.O. Box 669, 8824 Molestie St.P.O. Box 679, 9394 Urna Road','3385-2955','4959-2979',8,3,'2015-03-26 14:15:45',NULL,NULL),(39,3,200,42,'Yolanda','5178 Ut Ave490-5357 Sapien. St.','3640-7162','5264-8294',7,3,'2015-03-26 14:15:45',NULL,NULL),(40,926,233,55,'Chelsea','Ap #378-3709 Neque. Ave6926 Risus. Street','6840-0089','3497-5271',3,3,'2015-03-26 14:15:45',NULL,NULL),(41,1964,228,60,'Lara','875-4397 Dui. Av.P.O. Box 750, 6277 Nec Rd.','6060-8597','7117-0577',6,3,'2015-03-26 14:15:45',NULL,NULL),(42,393,210,49,'Yvonne','1352 Pede. Rd.687-5503 Lacus. Road','2495-5096','6347-5619',4,3,'2015-03-26 14:15:45',NULL,NULL),(43,1260,215,51,'Francesca','3356 Arcu. Rd.828-1520 Sed St.','4948-0633','6381-9782',1,3,'2015-03-26 14:15:45',NULL,NULL),(44,1581,218,46,'Alika','P.O. Box 507, 2860 Dui Street3913 Orci, Rd.','5193-3415','8066-3840',5,3,'2015-03-26 14:15:45',NULL,NULL),(45,2486,204,16,'Ella','P.O. Box 694, 3255 Nunc Rd.1428 Est Avenue','4523-6112','8032-7391',4,3,'2015-03-26 14:15:45',NULL,NULL),(46,2333,222,58,'Brielle','5197 Mauris Rd.684-8468 Quisque St.','4373-2717','1429-2628',4,3,'2015-03-26 14:15:45',NULL,NULL),(47,2388,202,68,'Farrah','1188 Montes, Ave1468 Vitae Av.','9014-5995','7890-9211',6,3,'2015-03-26 14:15:45',NULL,NULL),(48,1072,226,93,'Eliana','P.O. Box 253, 9957 Sed Road4831 Parturient Rd.','4908-3750','7894-4993',9,3,'2015-03-26 14:15:45',NULL,NULL),(49,620,228,20,'Lani','183-7111 Vel Rd.P.O. Box 551, 9423 Senectus Rd.','4573-1523','4442-1610',3,3,'2015-03-26 14:15:45',NULL,NULL),(50,679,202,30,'Ignacia','8704 Mauris RoadP.O. Box 679, 8496 Dolor, Road','2953-6106','4743-6124',3,3,'2015-03-26 14:15:45',NULL,NULL),(51,229,230,59,'Ursa','P.O. Box 848, 4765 Tempor Rd.P.O. Box 902, 8956 Tempus Av.','6875-1477','5186-9054',9,3,'2015-03-26 14:15:45',NULL,NULL),(52,1459,208,61,'Roanna','Ap #956-5199 Erat, Av.Ap #439-3610 Donec Rd.','7221-8517','7570-1847',9,3,'2015-03-26 14:15:45',NULL,NULL),(53,2424,217,49,'Quincy','1087 Nec Rd.Ap #500-9354 Lobortis Avenue','6331-8859','1483-3084',6,3,'2015-03-26 14:15:45',NULL,NULL),(54,228,212,30,'Patience','Ap #707-1566 Nulla Rd.Ap #856-1408 Diam. Ave','8679-3263','9525-5078',10,3,'2015-03-26 14:15:45',NULL,NULL),(55,2382,211,78,'Shay','Ap #530-398 Tempor St.6024 Dui. St.','4147-7495','1915-3248',8,3,'2015-03-26 14:15:45',NULL,NULL),(56,737,202,98,'Nayda','Ap #218-3232 Fermentum AvenueP.O. Box 636, 1278 Porttitor Ave','5591-1186','5562-2987',3,3,'2015-03-26 14:15:45',NULL,NULL),(57,512,232,23,'Kellie','8451 Non, Rd.Ap #337-3486 Dolor. Rd.','5982-1179','9027-5896',6,3,'2015-03-26 14:15:45',NULL,NULL),(58,1944,220,91,'Zenia','P.O. Box 988, 2141 Nulla. Avenue844-3121 Ipsum. Rd.','6780-0291','5522-6159',8,3,'2015-03-26 14:15:45',NULL,NULL),(59,1735,204,49,'Yvette','5812 Feugiat Street457-746 Risus. Rd.','1710-4053','2934-2815',3,3,'2015-03-26 14:15:45',NULL,NULL),(60,1376,202,78,'Jescie','4941 Risus Avenue552-4750 Augue Rd.','7080-3955','3266-8577',7,3,'2015-03-26 14:15:45',NULL,NULL),(61,1831,200,45,'Fiona','P.O. Box 194, 8023 Quis Avenue331-5649 Iaculis St.','2652-1112','6245-3097',10,3,'2015-03-26 14:15:45',NULL,NULL),(62,1571,212,36,'Blythe','2192 Morbi AvenueAp #937-9304 Id, Avenue','9485-7533','8453-9837',9,3,'2015-03-26 14:15:45',NULL,NULL),(63,814,206,79,'Cally','P.O. Box 348, 8597 Lacus. St.527-3095 Nisl. Street','1212-8206','6757-5370',6,3,'2015-03-26 14:15:45',NULL,NULL),(64,725,213,37,'Karen','P.O. Box 944, 6251 Mollis St.P.O. Box 485, 3961 Lacinia Road','8061-1973','4294-6273',5,3,'2015-03-26 14:15:45',NULL,NULL),(65,111,235,58,'Inez','127-8638 Id StreetP.O. Box 138, 9953 Vel Avenue','3115-6099','6128-9356',5,3,'2015-03-26 14:15:45',NULL,NULL),(66,796,214,73,'Kimberley','Ap #252-5369 Duis Avenue807-8092 Vulputate, St.','2959-2816','7444-0422',2,3,'2015-03-26 14:15:45',NULL,NULL),(67,1898,231,64,'Xerxes','Ap #316-3719 Lorem, AvenueP.O. Box 981, 388 Molestie Av.','9249-0832','9939-7139',8,3,'2015-03-26 14:15:45',NULL,NULL),(68,757,223,51,'Cally','5164 Elit Rd.Ap #880-2366 Lobortis Avenue','5195-0807','4991-2683',10,3,'2015-03-26 14:15:45',NULL,NULL),(69,1336,212,45,'Lila','P.O. Box 924, 1104 Velit Road689-5597 Cursus. Avenue','5442-0383','4907-4640',3,3,'2015-03-26 14:15:45',NULL,NULL),(70,354,233,13,'Priscilla','257-4208 Tellus Av.Ap #505-6079 Ut Rd.','5785-2695','9939-3012',8,3,'2015-03-26 14:15:45',NULL,NULL),(71,2221,215,66,'Sonia','P.O. Box 705, 6875 Fermentum Rd.7561 Ut, Road','4074-9140','6671-5193',3,3,'2015-03-26 14:15:45',NULL,NULL),(72,2156,218,44,'Astra','P.O. Box 815, 6174 Nunc Ave439-165 Eros. Ave','1221-6683','4600-0259',1,3,'2015-03-26 14:15:45',NULL,NULL),(73,887,220,14,'Aubrey','P.O. Box 346, 6984 Vestibulum St.Ap #617-6327 Fringilla. Avenue','6197-4584','5821-4799',5,3,'2015-03-26 14:15:45',NULL,NULL),(74,1643,233,89,'Maxine','P.O. Box 556, 7558 Sem Rd.5504 Placerat St.','6349-7171','7212-2028',10,3,'2015-03-26 14:15:45',NULL,NULL),(75,852,239,96,'Regan','713-7796 Ultrices. St.539-8557 Fringilla Road','2433-6806','8404-1328',9,3,'2015-03-26 14:15:45',NULL,NULL),(76,1173,210,43,'Laurel','P.O. Box 536, 216 Mi Rd.744-737 Arcu. Rd.','2461-5257','2764-9303',1,3,'2015-03-26 14:15:45',NULL,NULL),(77,2418,232,85,'Athena','295-137 Turpis St.P.O. Box 301, 157 Nunc, Av.','4974-2458','2831-5632',5,3,'2015-03-26 14:15:45',NULL,NULL),(78,1109,226,53,'Beatrice','894-1159 Orci St.5700 Enim. Av.','5936-6273','4556-9099',7,3,'2015-03-26 14:15:45',NULL,NULL),(79,1698,235,1,'Leah','919-2737 Mollis. St.P.O. Box 948, 4743 Mi Road','6880-6912','4636-3303',8,3,'2015-03-26 14:15:45',NULL,NULL),(80,598,222,49,'Basia','Ap #741-3577 Dui. Road549-1496 Laoreet St.','4182-4913','3456-2546',1,3,'2015-03-26 14:15:45',NULL,NULL),(81,273,228,90,'Gloria','996-8355 A St.116-9388 Nascetur Street','1410-7767','9419-5665',10,3,'2015-03-26 14:15:45',NULL,NULL),(82,1243,226,90,'Leslie','Ap #862-2729 Pede. Street905-5780 Fusce Street','1988-7520','1630-4703',6,3,'2015-03-26 14:15:45',NULL,NULL),(83,2456,219,86,'Ariana','415-6759 Netus Rd.Ap #128-7610 Eget, St.','5910-2260','3705-9430',2,3,'2015-03-26 14:15:45',NULL,NULL),(84,1848,234,71,'Mikayla','P.O. Box 430, 1388 Diam Avenue412-3339 Ligula. Road','9031-5164','2461-0354',3,3,'2015-03-26 14:15:45',NULL,NULL),(85,498,235,6,'Delilah','Ap #334-8705 Iaculis AvenueP.O. Box 141, 3070 Velit Rd.','9826-4175','4834-8490',2,3,'2015-03-26 14:15:45',NULL,NULL),(86,2174,203,2,'Whoopi','Ap #232-5482 Arcu St.144-1459 Bibendum. Rd.','9032-3852','1279-8240',8,3,'2015-03-26 14:15:45',NULL,NULL),(87,1138,223,75,'Quincy','P.O. Box 932, 7954 Ornare, Rd.468-5742 Tellus. St.','9544-4903','4509-1383',10,3,'2015-03-26 14:15:45',NULL,NULL),(88,284,236,100,'Allegra','647-629 Vivamus Ave814 Justo Av.','8239-7716','1784-2570',4,3,'2015-03-26 14:15:45',NULL,NULL),(89,1071,204,33,'Althea','P.O. Box 543, 1169 Mus. Rd.3109 Aliquam St.','2965-0112','5763-8196',2,3,'2015-03-26 14:15:45',NULL,NULL),(90,1199,230,24,'Mariam','4235 Urna StreetP.O. Box 319, 4215 Aenean Rd.','6070-2484','1625-6763',6,3,'2015-03-26 14:15:45',NULL,NULL),(91,2109,216,57,'Quinn','6791 Molestie Road9254 Pede. Rd.','4588-7963','1804-8031',9,3,'2015-03-26 14:15:45',NULL,NULL),(92,279,231,37,'Claire','7123 Sociis Rd.231-6567 Eros St.','3390-1447','5826-3580',4,3,'2015-03-26 14:15:45',NULL,NULL),(93,1723,217,14,'Eleanor','P.O. Box 973, 507 Ultrices. Ave550-1778 Massa. St.','6031-7310','3639-5777',3,3,'2015-03-26 14:15:45',NULL,NULL),(94,49,214,7,'Bethany','8230 Ut, St.3981 Ligula. Street','2221-2867','5497-3521',2,3,'2015-03-26 14:15:45',NULL,NULL),(95,2360,229,35,'Sharon','Ap #386-2207 Cum Street9850 Egestas Ave','7723-9108','5124-8160',10,3,'2015-03-26 14:15:45',NULL,NULL),(96,231,215,37,'Hiroko','633-7036 Amet, Av.8346 Aliquam Ave','4799-7362','5160-4207',6,3,'2015-03-26 14:15:45',NULL,NULL),(97,713,231,89,'Aileen','Ap #841-1361 Fringilla Rd.P.O. Box 316, 4186 Phasellus St.','7138-4302','9592-3513',6,3,'2015-03-26 14:15:45',NULL,NULL),(98,1240,238,61,'Ori','2179 Elementum AvenueP.O. Box 675, 107 Facilisis St.','9849-7071','8668-8542',5,3,'2015-03-26 14:15:45',NULL,NULL),(99,482,239,77,'Haviva','208-9630 Tristique Rd.7124 Et St.','5288-5038','3388-9517',5,3,'2015-03-26 14:15:45',NULL,NULL);

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

insert  into `cuadre_pilotos`(`id`,`anio`,`campania`,`piloto`,`pedidos`,`cajas`,`zona`,`entrada`,`salida`,`agencia_id`,`fecha_cuadre`,`observaciones`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,2015,1,1,5,5,204,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:07:52',NULL,NULL),(2,2015,1,1,5,5,207,'7:15 AM','7:15 AM',1,'2015-03-24','xd',1,'2015-03-09 08:08:17',NULL,NULL),(3,2015,1,1,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:37',NULL,NULL),(4,2015,1,2,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:43',NULL,NULL),(5,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:08:46',NULL,NULL),(6,2015,1,5,5,5,207,'7:15 AM','7:15 AM',2,'2015-03-24','xd',1,'2015-03-09 08:15:31',NULL,NULL),(7,2015,2,3,4,5,209,'7:30 AM','7:30 AM',2,'2015-03-19','dddd',1,'2015-03-09 08:27:33',NULL,NULL),(13,2015,1,1,5,23,203,'6:30 AM','6:30 AM',1,'2015-03-04','acasdas',1,'2015-03-10 07:25:42',NULL,NULL),(19,2015,2,2,2,4,202,'2:00 AM','2:30 PM',1,'2015-03-10','2323',1,'2015-03-10 15:35:56',NULL,NULL),(20,2015,2,9,2,4,209,'4:30 AM','7:15 AM',2,'2015-03-19','asdasdasd',1,'2015-03-10 17:54:38',NULL,NULL),(21,2015,2,10,4,2,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:00:36',NULL,NULL),(22,2015,2,19,4,5,209,'9:00 PM','9:00 PM',1,'2015-03-02','asd',1,'2015-03-10 22:03:43',NULL,NULL),(23,2015,1,18,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',1,'2015-03-10 22:04:34',NULL,NULL),(24,2015,1,2,2,3,202,'9:30 PM','9:30 PM',1,'2015-03-10','2321',1,'2015-03-10 22:23:50',NULL,NULL),(25,2015,1,2,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 22:59:42',NULL,NULL),(26,2015,1,7,42,42,209,'9:15 PM','9:15 PM',1,'2015-03-11','asdasd',0,'2015-03-10 23:34:36',NULL,NULL),(27,2015,1,9,2,4,209,'1:15 PM','10:45 PM',1,'2015-03-06','xdasdasd',1,'2015-03-10 23:35:48',NULL,NULL),(28,2015,2,2,4,5,209,'1:23 PM','1:15 AM',1,'2015-02-23','2323',1,'2015-03-11 00:18:39',NULL,NULL),(29,2015,2,2,4,4,201,'1:15 AM','7:00 AM',2,'2015-02-23','asdasd',1,'2015-03-12 07:57:59',NULL,NULL),(31,2015,2,15,5,7,201,'1:15 AM','11:45 AM',1,'2015-02-09','asd',1,'2015-03-16 12:45:19',NULL,NULL),(32,2015,1,1,2,4,201,'4:04 AM','7:00 AM',1,'2015-03-24','asd',3,'2015-03-20 07:58:04',NULL,NULL),(33,2015,2,3,5,7,201,'','',1,'2015-02-10','a',3,'2015-03-23 21:59:38',NULL,NULL),(34,2015,2,1,4,5,201,'2:00 AM','',1,'2015-02-03','',3,'2015-03-23 22:00:16',NULL,NULL);

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

insert  into `detalle_rol`(`id`,`usuarios_id`,`id_rol`,`id_sistema`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,1,1,1,NULL,NULL,3,'2015-03-20 07:42:21'),(2,3,1,1,1,'2015-03-18 23:49:33',3,'2015-03-20 07:42:27'),(3,4,1,1,3,'2015-03-23 23:24:40',3,'2015-03-23 23:24:55');

/*Table structure for table `dias_laborales` */

DROP TABLE IF EXISTS `dias_laborales`;

CREATE TABLE `dias_laborales` (
  `id` int(11) NOT NULL auto_increment,
  `fecha` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

/*Data for the table `dias_laborales` */

insert  into `dias_laborales`(`id`,`fecha`) values (1,'2015-02-02'),(2,'2015-02-03'),(3,'2015-02-04'),(4,'2015-02-05'),(8,'2015-02-09'),(9,'2015-02-10'),(10,'2015-02-11'),(11,'2015-02-12'),(12,'2015-02-13'),(15,'2015-02-16'),(16,'2015-02-17'),(17,'2015-02-18'),(18,'2015-02-19'),(22,'2015-02-23'),(23,'2015-02-24'),(24,'2015-02-25'),(25,'2015-02-26'),(29,'2015-03-02'),(30,'2015-02-06'),(31,'2015-02-27'),(32,'2015-02-20'),(36,'2015-02-21'),(37,'2015-02-28'),(38,'2015-03-03'),(39,'2015-03-04'),(40,'2015-03-05');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `paginas` */

insert  into `paginas`(`id`,`menu_id`,`descripcion`,`url`) values (1,1,'Solicitudes Consejera','solicitudesconsejeras'),(2,1,'Solicitudes Buzones y Gerentes','solicitudesbuzones'),(3,2,'Pedidos Pendientes','pedidospendientes'),(4,3,'Boletas','datosboletas'),(5,3,'Consulta de Boletas','consultasboletas'),(6,4,'Cuadre Pilotos','cuadrepilotos'),(7,5,'Cargas DRC','cargasdrc'),(8,5,'Desmantelado','desmantelado'),(9,5,'Dias Laborales','diaslaborales'),(10,5,'Bancos','bancos'),(11,5,'Adicionales','adicionales'),(12,5,'Agencias','agencias'),(13,5,'Bodegaje','bodegaje'),(14,6,'Consultas Consejera','consultaconsejera'),(15,7,'Reportes','reportes'),(16,5,'Usuarios','usuarios'),(17,5,'Roles','roles'),(18,5,'Buzones','buzones');

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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

/*Data for the table `pedidos` */

insert  into `pedidos`(`id`,`codigo`,`anio`,`campania`,`cod`,`monto_facturado`,`pod`,`comentarios`,`cajas`,`fecha_ingreso`,`tipo_pedido`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`,`ncaja`,`razon`,`estado`) values (1,783,2015,2,40,53,4,'Luke',20,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Denise',1),(2,258,2015,2,45,10,7,'Leo',22,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Abraham',1),(3,2067,2015,2,95,66,1,'Sandra',18,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Xantha',1),(4,1762,2015,2,47,66,2,'Veronica',68,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Colette',1),(5,1576,2015,2,76,50,1,'Dorothy',56,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Herrod',1),(6,1102,2015,2,49,60,6,'Hannah',57,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'John',2),(7,1677,2015,2,40,47,6,'Rhonda',78,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Barrett',1),(8,94,2015,2,70,6,8,'Sheila',16,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Reuben',2),(9,208,2015,2,30,44,10,'Ivory',10,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kenneth',1),(10,266,2015,2,86,93,7,'Kermit',96,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kennedy',1),(11,2299,2015,2,56,68,10,'Noel',87,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kelsey',2),(12,857,2015,2,73,76,6,'Sydney',21,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Madaline',1),(13,896,2015,2,76,36,6,'Hadassah',55,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Carol',1),(14,1864,2015,2,83,71,8,'Damian',33,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Libby',1),(15,2380,2015,2,2,53,1,'Callie',61,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Aquila',1),(16,2176,2015,2,16,46,9,'Winifred',70,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Hannah',1),(17,1569,2015,2,98,82,3,'Bryar',57,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Ivan',1),(18,2393,2015,2,17,23,4,'Leonard',86,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Levi',1),(19,584,2015,2,58,32,3,'Odette',46,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Fulton',1),(20,1973,2015,2,49,56,8,'Ruby',82,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Thor',1),(21,1837,2015,2,43,96,4,'Joel',63,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Peter',1),(22,233,2015,2,30,100,2,'Chastity',6,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kelsie',1),(23,1232,2015,2,7,28,10,'Raya',72,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Samuel',1),(24,1714,2015,2,72,7,1,'Daphne',2,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Ramona',1),(25,942,2015,2,67,95,6,'Grady',93,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Paula',1),(26,585,2015,2,2,11,5,'Noble',18,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Anastasia',1),(27,1923,2015,2,33,60,10,'Ursula',10,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kim',1),(28,1424,2015,2,29,87,2,'Sophia',72,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Zia',1),(29,267,2015,2,79,18,6,'Kirk',16,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Quintessa',1),(30,1492,2015,2,54,89,2,'Norman',54,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Cameron',1),(31,605,2015,2,10,82,6,'Dante',38,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Lydia',1),(32,151,2015,2,96,45,4,'Zenaida',33,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Vielka',1),(33,1341,2015,2,80,1,3,'Kyra',32,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Boris',1),(34,317,2015,2,20,25,9,'Tanner',34,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kessie',1),(35,1769,2015,2,1,43,6,'Lacota',28,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Calvin',1),(36,771,2015,2,62,6,2,'Dahlia',95,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Zahir',1),(37,1044,2015,2,57,23,2,'Mercedes',31,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Hilary',1),(38,17,2015,2,89,52,2,'Cherokee',61,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Lucy',1),(39,3,2015,2,30,41,2,'Alden',81,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Keiko',1),(40,926,2015,2,7,29,6,'Wilma',36,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Joel',1),(41,1964,2015,2,60,84,7,'Yoko',73,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Montana',1),(42,393,2015,2,87,84,8,'Michelle',25,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kennedy',1),(43,1260,2015,2,100,72,10,'Roanna',72,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Clare',1),(44,1581,2015,2,78,46,7,'Clarke',63,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Madeline',1),(45,2486,2015,2,2,8,9,'Nissim',25,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Hanna',1),(46,2333,2015,2,52,23,3,'Vaughan',39,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Sara',1),(47,2388,2015,2,45,4,7,'Suki',20,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Dennis',1),(48,1072,2015,2,95,13,5,'Nicole',56,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Quincy',1),(49,620,2015,2,2,90,3,'Claire',46,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Lila',1),(50,679,2015,2,35,71,10,'Vincent',59,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Barbara',1),(51,229,2015,2,25,30,4,'Lael',63,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Aidan',1),(52,1459,2015,2,88,93,7,'Callum',4,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Tobias',1),(53,2424,2015,2,80,90,3,'Debra',84,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Silas',1),(54,228,2015,2,54,27,7,'Sylvester',34,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Alexis',1),(55,2382,2015,2,71,55,3,'Violet',37,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Mannix',1),(56,737,2015,2,34,85,5,'Darryl',64,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Craig',1),(57,512,2015,2,64,56,2,'Rogan',51,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Cora',1),(58,1944,2015,2,31,31,6,'Kenneth',84,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Charlotte',1),(59,1735,2015,2,30,96,2,'Odysseus',16,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Zenaida',1),(60,1376,2015,2,42,29,7,'Giacomo',80,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Roth',2),(61,1831,2015,2,16,63,5,'Ava',45,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Sharon',1),(62,1571,2015,2,38,59,5,'Ryan',6,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Buffy',1),(63,814,2015,2,91,23,1,'Erica',44,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Julie',1),(64,725,2015,2,34,58,7,'Rhona',69,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Courtney',1),(65,111,2015,2,50,33,9,'Inez',53,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Leilani',1),(66,796,2015,2,56,94,1,'Hamish',66,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Marsden',1),(67,1898,2015,2,87,85,6,'Dakota',84,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kitra',1),(68,757,2015,2,42,85,1,'Geraldine',88,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Brielle',1),(69,1336,2015,2,86,34,10,'Elmo',31,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Felicia',1),(70,354,2015,2,98,46,10,'Erasmus',77,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Sierra',1),(71,2221,2015,2,2,18,1,'Aquila',48,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Zephr',1),(72,2156,2015,2,70,8,4,'Kennedy',78,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Edan',1),(73,887,2015,2,98,97,3,'Isaac',98,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Pascale',1),(74,1643,2015,2,32,88,10,'Uta',90,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Hiram',1),(75,852,2015,2,83,28,3,'Ulysses',18,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Carol',1),(76,1173,2015,2,25,75,4,'Yoshio',28,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Marah',1),(77,2418,2015,2,78,57,1,'Velma',41,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Zeph',1),(78,1109,2015,2,10,15,1,'Hedwig',43,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Madaline',1),(79,1698,2015,2,81,100,8,'Oscar',44,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Michelle',1),(80,598,2015,2,11,32,8,'Nevada',100,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Maisie',1),(81,273,2015,2,93,17,9,'Clarke',78,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Luke',1),(82,1243,2015,2,37,43,8,'Buckminster',4,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Blaine',1),(83,2456,2015,2,35,54,2,'Lisandra',78,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Nicole',1),(84,1848,2015,2,4,90,6,'Griffith',4,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Evelyn',1),(85,498,2015,2,8,6,4,'Thomas',91,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Yoko',1),(86,2174,2015,2,59,7,2,'Dacey',41,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Tallulah',1),(87,1138,2015,2,94,14,9,'Sawyer',42,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'India',1),(88,284,2015,2,1,8,7,'Brenden',59,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Tamekah',1),(89,1071,2015,2,54,81,2,'Raphael',39,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Dolan',1),(90,1199,2015,2,5,70,1,'Wing',82,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Kim',1),(91,2109,2015,2,31,61,7,'Aileen',10,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Dora',1),(92,279,2015,2,84,80,9,'Tad',75,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Veronica',1),(93,1723,2015,2,47,92,9,'Jamal',51,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Quemby',1),(94,49,2015,2,74,22,6,'Isadora',76,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Fredericka',1),(95,2360,2015,2,2,87,5,'Portia',88,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Laurel',1),(96,231,2015,2,39,4,6,'Lionel',10,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Delilah',1),(97,713,2015,2,90,92,9,'Keegan',95,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Aretha',1),(98,1240,2015,2,78,21,9,'Herrod',58,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Justine',1),(99,482,2015,2,19,27,3,'Chandler',75,'2015-03-06',1,3,'2015-03-26 14:15:45',NULL,NULL,NULL,'Ethan',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `roles_paginas` */

insert  into `roles_paginas`(`id`,`pagina_id`,`rol_id`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,3,1,1,'2015-03-18 08:49:13',NULL,NULL),(2,5,1,1,'2015-03-18 08:49:19',NULL,NULL),(3,1,14,1,'2015-03-18 08:50:40',NULL,NULL),(4,2,1,1,'2015-03-18 08:50:44',NULL,NULL),(5,1,1,1,'2015-03-18 08:50:52',NULL,NULL),(6,6,1,1,'2015-03-18 08:50:57',NULL,NULL),(7,7,1,1,'2015-03-18 08:51:02',NULL,NULL),(8,8,1,1,'2015-03-18 08:51:05',NULL,NULL),(9,9,1,1,'2015-03-18 08:51:07',NULL,NULL),(10,12,1,1,'2015-03-18 08:51:12',NULL,NULL),(13,11,14,2,'2015-03-19 16:54:17',NULL,NULL),(14,11,1,1,'2015-03-20 00:41:57',NULL,NULL),(15,16,14,1,'2015-03-20 00:41:57',NULL,NULL),(16,17,14,1,'2015-03-20 00:41:57',NULL,NULL),(17,13,1,3,'2015-03-20 07:41:04',NULL,NULL),(18,16,1,3,'2015-03-20 07:41:07',NULL,NULL),(19,17,1,3,'2015-03-20 07:41:09',NULL,NULL),(20,10,1,3,'2015-03-20 07:41:27',NULL,NULL),(21,14,1,3,'2015-03-20 07:41:30',NULL,NULL),(22,15,1,3,'2015-03-20 07:41:34',NULL,NULL),(23,4,1,3,'2015-03-20 16:38:46',NULL,NULL),(24,18,1,3,'2015-03-26 14:17:42',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `solicitudes` */

insert  into `solicitudes`(`id`,`pedido_id`,`solicitante`,`buzon_id`,`documento`,`autorizacion`,`tipo_solicitud`,`flete`,`bodegaje`,`exoneracion`,`estado`,`fecha_despachado`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,8,'32',35,NULL,0,3,NULL,0,1,2,'2015-03-26 14:19:39',3,'2015-03-26 14:19:23',NULL,NULL),(2,6,'Yo',32,NULL,2,3,NULL,0,1,2,'2015-03-26 14:19:45',3,'2015-03-26 14:19:23',NULL,NULL),(3,60,'yo',0,NULL,0,2,NULL,0,1,2,'2015-03-26 14:19:42',3,'2015-03-26 14:19:23',NULL,NULL),(4,11,'Mario',NULL,'041888-05',3,1,NULL,0,0,2,'2015-03-26 14:35:09',3,'2015-03-26 14:34:57',NULL,NULL);

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

insert  into `usuarios`(`id`,`usuario`,`password`,`imagen_url`,`descripcion`,`estado`,`creado_por`,`fecha_creado`,`modificado_por`,`fecha_modificado`) values (1,'admin','202cb962ac59075b964b07152d234b70','images/perfiles/mario.valencia.jpg','Mario',1,NULL,NULL,3,'2015-03-20 07:42:21'),(3,'Alex','81dc9bdb52d04dc20036dbd8313ed055','images/perfiles/mario.valencia.jpg','Alex Guzman',2,1,'2015-03-18 23:49:33',3,'2015-03-20 07:42:27'),(4,'Mario','7815696ecbf1c96e6894b779456d330e',NULL,'asd',2,3,'2015-03-23 23:24:40',3,'2015-03-23 23:24:55');

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
