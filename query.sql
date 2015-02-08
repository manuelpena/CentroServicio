SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `ci_cookies`;

CREATE TABLE `ci_cookies` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cookie_id` VARCHAR(255) DEFAULT NULL,
  `netid` VARCHAR(255) DEFAULT NULL,
  `ip_address` VARCHAR(255) DEFAULT NULL,
  `user_agent` VARCHAR(255) DEFAULT NULL,
  `orig_page_requested` VARCHAR(120) DEFAULT NULL,
  `php_session_id` VARCHAR(40) DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `ci_cookies` */

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT '0',
  `ip_address` VARCHAR(45) NOT NULL DEFAULT '0',
  `user_agent` VARCHAR(120) NOT NULL,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` TEXT NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

INSERT  INTO `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) VALUES ('7ab58003fe5ef8cbc6e9e86e5c47a9e9','127.0.0.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36',1422329979,''),('3972491e89d1869c8d8eb55015a248c3','127.0.0.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36',1422219156,'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"user_name\";s:5:\"admin\";s:12:\"is_logged_in\";b:1;}');

/*Table structure for table `detalle_contacto` */


/*Table structure for table `detalle_rol` */

DROP TABLE IF EXISTS `detalle_rol`;

CREATE TABLE `detalle_rol` (
  `id_detalle_rol` INT(11) NOT NULL,
  `id_usuarios` INT(11) DEFAULT NULL,
  `id_rol` INT(11) DEFAULT NULL,
  `id_sistema` INT(11) DEFAULT NULL,
  PRIMARY KEY  (`id_detalle_rol`),
  KEY `fk_detalle_rol_y_usuarios_idx` (`id_usuarios`),
  KEY `fk_detalle_rol_y_rol_idx` (`id_rol`),
  KEY `fk_detalle_rol_y_sistema_idx` (`id_sistema`),
  CONSTRAINT `fk_detalle_rol_y_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_rol_y_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sistema` FOREIGN KEY (`id_sistema`) REFERENCES `sistema` (`id_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `detalle_rol` */

INSERT  INTO `detalle_rol`(`id_detalle_rol`,`id_usuarios`,`id_rol`,`id_sistema`) VALUES (0,1,1,1);


DROP TABLE IF EXISTS `ejemplo_empleado`;

CREATE TABLE `ejemplo_empleado` (
  `id_empleado` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` VARCHAR(45) COLLATE latin1_spanish_ci NOT NULL,
  `salario` DOUBLE DEFAULT NULL,
  PRIMARY KEY  (`id_empleado`),
  UNIQUE KEY `id_empleado_UNIQUE` (`id_empleado`)
) ENGINE=INNODB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

/*Data for the table `ejemplo_empleado` */

INSERT  INTO `ejemplo_empleado`(`id_empleado`,`nombres`,`apellidos`,`salario`) VALUES (6,'Marcos','Orellana',250),(16,'Paz','Peña',2500),(17,'Jorge','de la O',5000),(21,'Mario','Hernandez',8500),(22,'Marcos','Orellana',2500);


/*Data for the table `prospecto_crece` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` INT(11) NOT NULL,
  `detalle` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY  (`id_rol`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `rol` */

INSERT  INTO `rol`(`id_rol`,`detalle`) VALUES (1,'admin');

/*Table structure for table `sistema` */

DROP TABLE IF EXISTS `sistema`;

CREATE TABLE `sistema` (
  `id_sistema` INT(11) NOT NULL AUTO_INCREMENT,
  `sistema` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY  (`id_sistema`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sistema` */

INSERT  INTO `sistema`(`id_sistema`,`sistema`,`descripcion`) VALUES (1,'SSI','Sistema de Seguimiento de Invitados');



DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuarios` INT(11) NOT NULL,
  `id_miembros` INT(11) DEFAULT NULL,
  `usuario` VARCHAR(50) DEFAULT NULL,
  `password` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY  (`id_usuarios`),
  KEY `fk_usuarios_y_miembros_idx` (`id_miembros`),
  CONSTRAINT `fk_usuarios_y_miembros` FOREIGN KEY (`id_miembros`) REFERENCES `miembros` (`id_miembros`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

INSERT  INTO `usuarios`(`id_usuarios`,`id_miembros`,`usuario`,`password`) VALUES (1,1,'Manuel','5caae99531c54bc794f2489f5f2e6f33');
