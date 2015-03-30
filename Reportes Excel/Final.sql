/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.0.51b-community-nt-log : Database - cservicio
*********************************************************************
*/

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
) ENGINE=MyISAM AUTO_INCREMENT=4189 DEFAULT CHARSET=utf8;

/*Data for the table `consejeras_eficiencia` */

DROP TABLE IF EXISTS `paginas`;

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL auto_increment,
  `menu_id` int(11) default NULL,
  `descripcion` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `paginas` */

insert  into `paginas`(`id`,`menu_id`,`descripcion`,`url`) values (1,1,'Solicitudes Consejera','solicitudesconsejeras'),(2,1,'Solicitudes Buzones y Gerentes','solicitudesbuzones'),(3,2,'Pedidos Pendientes','pedidospendientes'),(4,3,'Boletas','datosboletas'),(5,3,'Consulta de Boletas','consultasboletas'),(6,4,'Cuadre Pilotos','cuadrepilotos'),(7,5,'Cargas DRC','cargasdrc'),(8,5,'Desmantelado','desmantelado'),(9,5,'Dias Laborales','diaslaborales'),(10,5,'Bancos','bancos'),(11,5,'Adicionales','adicionales'),(12,5,'Agencias','agencias'),(13,5,'Bodegaje','bodegaje'),(14,6,'Consultas Consejera','consultaconsejera'),(15,7,'Reportes','reportes'),(16,5,'Usuarios','usuarios'),(17,5,'Roles','roles'),(18,5,'Buzones','buzones'),(19,4,'Efiencias','cargaseficiencias');
