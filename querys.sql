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

/*Table structure for table `boletas_vista_tm` */

DROP TABLE IF EXISTS `boletas_vista_tm`;

/*!50001 DROP VIEW IF EXISTS `boletas_vista_tm` */;
/*!50001 DROP TABLE IF EXISTS `boletas_vista_tm` */;

/*!50001 CREATE TABLE  `boletas_vista_tm`(
 `fecha_pago` varchar(200) ,
 `hora_pago` time ,
 `referencia` varchar(100) ,
 `monto` double ,
 `msisdn` int(11) ,
 `estatus` varchar(5) ,
 `transaccion` varchar(100) ,
 `record` int(11) ,
 `compania` varchar(50) 
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
 `ncaja` varchar(10) ,
 `comentarios` varchar(100) ,
 `estado` varchar(10) ,
 `descripcion_solicitud` varchar(9) ,
 `tipo_solicitud` int(11) 
)*/;

/*View structure for view boletas_vista */

/*!50001 DROP TABLE IF EXISTS `boletas_vista` */;
/*!50001 DROP VIEW IF EXISTS `boletas_vista` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `boletas_vista` AS (select `a`.`id` AS `boleta_id`,`c`.`codigo` AS `codigo`,`c`.`nombres` AS `nombres`,`b`.`cod` AS `cod`,`a`.`referencia` AS `referencia`,`a`.`monto` AS `monto`,`a`.`fecha` AS `fecha`,`a`.`observaciones` AS `observaciones`,`d`.`descripcion` AS `banco`,`e`.`descripcion` AS `usuario` from ((((`boletas` `a` join `pedidos` `b` on((`a`.`pedido_id` = `b`.`id`))) join `consejeras` `c` on((`c`.`codigo` = `b`.`codigo`))) join `bancos` `d` on((`d`.`id` = `a`.`banco_id`))) join `usuarios` `e` on((`e`.`id` = `a`.`creado_por`)))) */;

/*View structure for view boletas_vista_tm */

/*!50001 DROP TABLE IF EXISTS `boletas_vista_tm` */;
/*!50001 DROP VIEW IF EXISTS `boletas_vista_tm` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `boletas_vista_tm` AS (select `boletas_tm`.`fecha_pago` AS `fecha_pago`,`boletas_tm`.`hora_pago` AS `hora_pago`,`boletas_tm`.`referencia` AS `referencia`,`boletas_tm`.`monto` AS `monto`,`boletas_tm`.`MSISDN` AS `msisdn`,`boletas_tm`.`estatus` AS `estatus`,`boletas_tm`.`transaccion` AS `transaccion`,`boletas_tm`.`record` AS `record`,`boletas_tm`.`compania` AS `compania` from `boletas_tm` limit 75000) */;

/*View structure for view solicitudes_vista */

/*!50001 DROP TABLE IF EXISTS `solicitudes_vista` */;
/*!50001 DROP VIEW IF EXISTS `solicitudes_vista` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `solicitudes_vista` AS select `c`.`id` AS `id`,`a`.`codigo` AS `codigo`,`a`.`nombres` AS `nombres`,`a`.`zona` AS `zona`,`b`.`ncaja` AS `ncaja`,`b`.`comentarios` AS `comentarios`,(case `c`.`estado` when 1 then _utf8'Pendiente' when 2 then _utf8'Despachado' when 3 then _utf8'Cancelado' end) AS `estado`,(case `c`.`tipo_solicitud` when 1 then _utf8'Consejera' when 2 then _utf8'Gerente' when 3 then _utf8'Buzon' end) AS `descripcion_solicitud`,`c`.`tipo_solicitud` AS `tipo_solicitud` from ((`consejeras` `a` join `pedidos` `b` on((`b`.`codigo` = `a`.`codigo`))) join `solicitudes` `c` on((`b`.`id` = `c`.`pedido_id`))) where ((cast(`c`.`fecha_creado` as date) >= (curdate() + interval -(2) day)) and (cast(`c`.`fecha_creado` as date) <= (curdate() + interval 2 day))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
