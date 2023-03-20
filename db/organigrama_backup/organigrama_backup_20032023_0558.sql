-- MariaDB dump 10.19  Distrib 10.6.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: organigrama
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `organigrama`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `organigrama` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `organigrama`;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Titular'),(2,'Director general'),(3,'Presidente de la Junta de Gobierno y Coordinación Política'),(4,'Coordinadora de Quejas Denuncias e Investigaciones'),(5,'Coordinadora de Responsabilidades Administrativas'),(6,'Coordinadora de Auditoría Interna y Control'),(7,'Coordinación de Estudios Sociales y Legislativos'),(8,'Coordinación de Estudios Financieros y Economicos'),(9,'Secretaria General'),(10,'Coordinadora Ejecutiva'),(11,'Oficialia de Partes'),(12,'Coordinador de Logística y Protocolo'),(13,'Coordinador de Servicios Legislativos'),(14,'Jefe de Apoyo Legislativo'),(15,'Encargado de archivo'),(16,'Jefa de Archivo Histórico'),(17,'Jefa de Archivo de Tramite y Conservación'),(18,'Coordinador de Asuntos Jurídicos y de lo Contencioso'),(19,'Coordinador de Estudios y de Proyectos Legislativos'),(20,'Jefa de Asuntos Jurídicos y de lo Contencioso'),(21,'Jefa de Gobernación y Asuntos Municipales'),(22,'Jefa/Jefe de Hacienda y Fiscalización'),(23,'Coordinador de Vinculación Institucional'),(24,'Coordinadora de Comunicación'),(25,'Jefatura de Enlace Institucional'),(26,'Jefatura de Enlace con Medios'),(27,'Directora General'),(28,'Coordinadora Administrativo'),(29,'Jefe de Presupuesto y Contabilidad'),(30,'Jefe de Servicios Generales y Control de Bienes'),(31,'Jefe de Recursos Humanos y Capacitación'),(32,'Jefe de Tecnologías de la Información');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos_a_mostrar`
--

DROP TABLE IF EXISTS `cargos_a_mostrar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos_a_mostrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos_a_mostrar`
--

LOCK TABLES `cargos_a_mostrar` WRITE;
/*!40000 ALTER TABLE `cargos_a_mostrar` DISABLE KEYS */;
INSERT INTO `cargos_a_mostrar` VALUES (1,'Presidencia<br>JUGOCOPO'),(2,'Órgano Interno de Control'),(3,'Coordinación de Quejas, Denuncias e Investigaciones'),(4,'Coordinación de Responsabilidades Administrativas'),(5,'Coordinación de Auditoría Interna y Control'),(6,'Unidad de Transparencia'),(7,'Dirección General de Servicios Legislativos'),(8,'Unidad para la Igualdad de Género'),(9,'Instituto de Investigaciones Legislativas, Financieras y Socioeconómicas'),(10,'Coordinación de Estudios Sociales y Legislativos'),(11,'Coordinación de Estudios Financieros y Económicos'),(12,'Secretaría General'),(13,'Coordinación Ejecutiva'),(14,'Oficialía de Partes'),(15,'Unidad de Atención Ciudadana*'),(16,'Coordinación de Logística y Protocolo'),(17,'Coordinación de Servicios Legislativos'),(18,'Jefatura de Apoyo Legislativo'),(19,'Jefatura de Archivo Histórico'),(20,'Dirección General de Archivo'),(21,'Jefatura de Archivo de Tramite y Conservación'),(22,'Dirección General de Asuntos Jurídicos, de Estudios y de Proyectos Legislativos'),(23,'Coordinación de Asuntos Jurídicos y de lo Contencioso'),(24,'Coordinación de Estudios y de Proyectos Legislativos'),(25,'Jefatura de Asuntos Jurídicos y de lo Contencioso'),(26,'Jefatura de Gobernación y Asuntos Municipales'),(27,'Jefatura de Hacienda y Fiscalización'),(28,'Dirección General de Comunicación y Vinculación'),(29,'Coordinación de Vinculación Institucional'),(30,'Coordinación de Comunicación'),(31,'Jefatura de Enlace Institucional'),(32,'Jefatura de Enlace con Medios'),(33,'Dirección General de Administración y Finanzas'),(34,'Coordinación Administrativa'),(35,'Jefatura de Presupuesto y Contabilidad'),(36,'Jefatura de Servicios Generales y Control de Bienes'),(37,'Jefatura de Recursos Humanos y Capacitación'),(38,'Jefatura de Tecnologías de la Información');
/*!40000 ALTER TABLE `cargos_a_mostrar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correos`
--

DROP TABLE IF EXISTS `correos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correos`
--

LOCK TABLES `correos` WRITE;
/*!40000 ALTER TABLE `correos` DISABLE KEYS */;
INSERT INTO `correos` VALUES (15,'antonio.lopezmalo@congresodepuebla.mx'),(25,'asuntos_juridicosycontencioso@congresopuebla.mx'),(14,'coor.secretariageneral@congresopuebla.mx'),(8,'coord.auditoria.control@congresodepuebla.mx'),(28,'coord.enlacemedios@congresopuebla.mx'),(23,'coord.juridicoycontencioso@congresopuebla.mx'),(3,'coord.relacionespub@congresopuebla.mx'),(32,'coordinacion.administrativa@congresopuebla.mx'),(24,'coordinacion.estudios.proyectos.legislativos@congresopuebla.mx'),(16,'coordinacion.logistica.protocolo@congresodepuebla.mx'),(6,'coordinacion.quejas.denuncias@congresodepuebla.mx'),(7,'coordinacion.responsabilidades.administrativas@congresodepuebla.mx'),(17,'coordinacion.servicios@congresopuebla.mx'),(4,'dip.eduardo.castillo@congresopuebla.gob.mx'),(31,'dir.administracion.finanzas@congresopuebla.gob.mx'),(22,'dir.asuntos.juridicos@congresopuebla.gob.mx'),(19,'dir.general.archivo@congresodepuebla.mx'),(12,'dir.instituto.investigaciones@congresopuebla.mx'),(2,'En Proceso'),(26,'gobernacion_asuntosmun@congresopuebla.mx'),(1,'instituto.investigaciones@congresopuebla.mx'),(20,'jefatura.archivo.historico@congresodepuebla.mx'),(21,'jefatura.archivo.tramite.conservacion@congresodepuebla.mx'),(29,'jefatura.enlace.institucional@congresopuebla.mx'),(27,'jefatura.hacienda.fiscalizacion@congresopuebla.mx'),(33,'jefatura.presupuesto.contabilidad@congresopuebla.mx'),(35,'jefatura.recursos.humanos@congresodepuebla.mx'),(18,'jefatura_apoyo@congresopuebla.mx'),(36,'jefatura_tecnologias@congresopuebla.mx'),(10,'jmaldonado@congresopuebla.mx'),(5,'organointernodecontrol@congresopuebla.mx'),(34,'servicios.generales@congresopuebla.mx'),(13,'sriageneral@congresopuebla.gob.mx'),(30,'theo.martinez@congresodepuebla.mx'),(9,'transparencia@congresopuebla.gob.mx'),(11,'unidad.para.igualdad.genero@congresodepuebla.mx');
/*!40000 ALTER TABLE `correos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cv`
--

DROP TABLE IF EXISTS `cv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cv`
--

LOCK TABLES `cv` WRITE;
/*!40000 ALTER TABLE `cv` DISABLE KEYS */;
INSERT INTO `cv` VALUES (1,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/enproceso.pdf'),(2,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Julieta_Hernandez_Vega.pdf'),(3,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Monica_Balderas_Alvarado.pdf'),(4,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Monica_Elizabeth_Pena_Gonzalez.pdf'),(5,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Maria_De_Los_Angeles_Lopez_Palafox.pdf'),(6,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Alexis_Dominguez_Mendez.pdf'),(7,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Joaquin_Maldonado_Ibarguen-13-07-2022.pdf'),(8,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Garcia_Olmedo_Maria_del_Rocio2.pdf'),(9,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Ruben_Alejandro_Paredes_Castaneda.pdf'),(10,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Felix_Alejandro_Suarez_Garza.pdf'),(11,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Fernanda_Abdeyan_Godos_Balderas_new3.pdf'),(12,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Maria_del_Rosario_Evangelista_Rosas13-07-2022.pdf'),(13,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Luis_Fernando_Ulloa_Aguilar.pdf'),(14,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Jose_Antonio_Lopez_Malo_Capellini_new.pdf'),(15,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Sergio_Gilberto_Veraza_Merigo_new.pdf'),(16,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Luis_Maldonado_Fosado_new.pdf'),(17,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Jose_Abraham_Manuel_Paredes_Gonzalez_new.pdf'),(18,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Ismael_Zarate_Gutierrez.pdf'),(19,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Dulce_Alicia_Gonzalez_Pacheco.pdf'),(20,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Zaira_Elisa_Herrera_Hernandez_new.pdf'),(21,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Gilberto_Ramon_Navarro_Jimenez_21-09-22.pdf'),(22,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Rodolfo_Jimenez_Morales.pdf'),(23,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Jose_Lozada_Diaz.pdf'),(24,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Patricia_Coral_Bello_Vazquez.pdf'),(25,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Ilse_Ivonne_Rodriguez_Bedolla.pdf'),(26,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/miguel_angel_arroyo.pdf'),(27,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Irvin_Baltazar_Garcia_Ramirez-2-05-2022.pdf'),(28,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Maria_Del_Pilar_Perez_Luna_new.pdf'),(29,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Maria_Elena_Dominguez_Serrano.pdf'),(30,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Theo_Martinez_Miranda_new.pdf'),(31,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Maritza_Mendez_Cabrera2.pdf'),(32,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Diana_Edith_Salcedo_Flores2.pdf'),(33,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/German_Mignon_Gonzalez2.pdf'),(34,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Jesus_Mario_Garcia_de_la_Cadena_Balseca.pdf'),(35,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Jorge_Arturo_Meneses_Merino_ok.pdf'),(36,'https://www.congresopuebla.gob.mx/congreso/organigrama/CV/Rafael_Felipe_Rosas_Torres.pdf');
/*!40000 ALTER TABLE `cv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotos`
--

DROP TABLE IF EXISTS `fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (1,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/enproceso.jpg'),(2,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Eduardo_Castillo_Lopez.jpg'),(3,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Julieta_Hernandez_Vega.jpg'),(4,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Monica_Balderas_Alvarado.jpg'),(5,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Monica_Elizabeth_Pena_Gonzalez.jpg'),(6,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Alexis_Dominguez_Mendez.jpg'),(7,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Joaquin_Maldonado_Ibarguen-23-06-2022.JPG'),(8,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Maria_del_Rocio_Garcia_Olmedo.jpg'),(9,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Ruben_Alejandro_Paredes_Castaneda.jpg'),(10,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Fernanda_Abdeyan_Godos_Balderas.jpg'),(11,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/rosario_evangelista_rosas.jpg'),(12,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Sergio_Gilberto_Veraza_Merigo.jpg'),(13,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/luis_maldonado_fosado.jpg'),(14,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/abraham_paredes_gonzalez.jpg'),(15,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Zaira_Elisa_Herrera_Hernandez.jpg'),(16,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Gilberto_Ramon_Navarro_Jimenez.jpg'),(17,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Rodolfo_Jimenez_Morales.jpg'),(18,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Ilse_Ivonne_Rodriguez_Bedolla.jpg'),(19,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/miguel_angel_arroyo.jpg'),(20,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Irvin_Baltazar_Garcia_Ramirez.jpg'),(21,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Maria_del_Pilar_Perez_Luna.jpg'),(22,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Maria_Elena_Dominguez_Serrano.jpg'),(23,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Theo_Martinez_Miranda.png'),(24,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Maritza_Mendez_Cabrera.jpg'),(25,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Diana_Edith_Salcedo_Flores.jpg'),(26,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/German_Mignon_Gonzalez.jpg'),(27,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/Jesus_Mario_Garcia_de_la_Cadena_Balseca.jpg'),(28,'https://www.congresopuebla.gob.mx/congreso/organigrama/images/rafael_rosas_torres.jpg');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_correo` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_cargo_a_mostrar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_correo` (`id_correo`),
  KEY `id_telefono` (`id_telefono`),
  KEY `id_cv` (`id_cv`),
  KEY `id_foto` (`id_foto`),
  KEY `id_cargo_a_mostrar` (`id_cargo_a_mostrar`),
  CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`),
  CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`id_correo`) REFERENCES `correos` (`id`),
  CONSTRAINT `personas_ibfk_3` FOREIGN KEY (`id_telefono`) REFERENCES `telefonos` (`id`),
  CONSTRAINT `personas_ibfk_4` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`),
  CONSTRAINT `personas_ibfk_5` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`),
  CONSTRAINT `personas_ibfk_6` FOREIGN KEY (`id_cargo_a_mostrar`) REFERENCES `cargos_a_mostrar` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'Dip. Eduardo Castillo López',3,4,5,1,2,1),(2,'Julieta Hernández Vega',1,5,6,2,3,2),(3,'Mónica Balderas Alvarado',4,6,1,3,4,3),(4,'Mónica Elizabeth Peña González',5,7,1,4,5,4),(5,'María De Los Angeles López Palafox',6,8,1,5,1,5),(6,'Alexis Domínguez Méndez',1,9,7,6,6,6),(7,'Joaquín Maldonado Ibargüen',1,10,8,7,7,7),(8,'María del Rocío García Olmedo',1,11,9,8,8,8),(9,'Rubén Alejandro Paredes Castañeda',2,12,2,9,9,9),(10,'Felix Alejandro Suárez Garza',7,1,2,10,1,10),(11,'EN PROCESO',8,1,2,1,1,11),(12,'Fernanda Abdeyan Godos Balderas',8,13,10,11,10,12),(13,'María del Rosario Evangelista Rosas',10,14,11,12,11,13),(14,'Luis Fernando Ulloa Aguilar',11,2,12,13,1,14),(15,'José Antonio López Malo Capellini',2,15,13,14,1,NULL),(16,'Sergio Gilberto Veraza Merigo',12,16,14,15,12,16),(17,'Luis Maldonado Fosado',13,17,3,16,13,17),(18,'José Abraham Manuel Paredes González',14,18,3,17,14,18),(19,'Ismael Zarate Gutiérrez',15,19,3,18,1,NULL),(20,'Dulce Alicia González Pacheco',16,20,3,19,1,20),(21,'Zaira Elisa Herrera Hernández',17,21,3,20,15,21),(22,'Gilberto Ramón Navarro Jiménez',2,22,15,21,16,22),(23,'Rodolfo Jiménez Morales',18,23,16,22,17,23),(24,'José Lozada Díaz',19,24,17,23,1,24),(25,'Patricia Coral Bello Vazquez',20,25,18,24,1,25),(26,'Ilse Ivonne Rodríguez Bedolla',21,26,19,25,18,26),(27,'EN PROCESO',22,27,20,1,1,NULL),(28,'Miguel Ángel Arroyo Castillo',2,3,21,26,19,28),(29,'Irvin Baltazar García Ramírez',23,28,22,27,20,29),(30,'María del Pilar Pérez Luna',24,3,4,28,21,30),(31,'María Elena Domínguez Serrano',25,29,4,29,22,31),(32,'Theo Martínez Miranda',26,30,4,30,23,32),(33,'Maritza Méndez Cabrera',27,31,23,31,24,33),(34,'Diana Edith Salcedo Flores',28,32,24,32,25,NULL),(35,'Germán Mignón González',29,33,25,33,26,35),(36,'Jesus Mario García de la Cadena Balseca',30,34,26,34,27,36),(37,'Jorge Arturo Meneses Merino',31,35,27,35,1,37),(38,'Rafael Felipe Rosas Torres',32,36,28,36,28,38);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonos`
--

LOCK TABLES `telefonos` WRITE;
/*!40000 ALTER TABLE `telefonos` DISABLE KEYS */;
INSERT INTO `telefonos` VALUES (1,'(+5222) 23721100 EXT. (124)'),(2,'(+5222) 23721100 EXT. (216)'),(3,'(+5222) 23721100 EXT. (186)'),(4,'(+5222) 23721100 EXT. (188)'),(5,'(+5222) 23721100 EXT. (175)'),(6,'(+5222) 23721100 EXT. (203)'),(7,'(+5222) 23721100 EXT. (126)'),(8,'(+5222) 23721100 EXT. (190)'),(9,'(+5222) 23721100 EXT. ( 221 y 174)'),(10,'(+5222) 23721100 EXT. (105)'),(11,'(+5222) 23721100 EXT. (107)'),(12,'(+5222) 23721100 EXT. (180)'),(13,'(+5222) 23721100 EXT. (114)'),(14,'(+5222) 23721100 EXT. (115)'),(15,'(+5222) 23721100 EXT. (112)'),(16,'(+5222) 23721100 EXT. (255)'),(17,'(+5222) 23721100 EXT. (172)'),(18,'(+5222) 23721100 EXT. (225)'),(19,'(+5222) 23721100 EXT. (133)'),(20,'(+5222) 23721100 EXT. (118)'),(21,'(+5222) 23721100 EXT. (178)'),(22,'(+5222) 23721100 EXT. (239)'),(23,'(+5222) 23721100 EXT. (137)'),(24,'(+5222) 23721100 EXT. (108)'),(25,'(+5222) 23721100 EXT. (138)'),(26,'(+5222) 23721100 EXT. (121)'),(27,'(+5222) 23721100 EXT. (109)'),(28,'(+5222) 23721100 EXT. (167)');
/*!40000 ALTER TABLE `telefonos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-20 19:43:53
