-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sion
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_indice` int(11) DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `kilometros` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (1,1,'Bautismo','100',NULL,1),(2,1,'1 culto de un miembro nuevo','200',NULL,1),(3,1,'4 cultos de un miembro nuevo','200',NULL,1),(4,1,'1 culto de una oveja perdida','100',NULL,1),(5,2,'Diezmo de miembro nuevo','100','Sólo incluye a los miembros nuevos',1),(6,2,'Diezmo de oveja perdida','500','Un miembro que fue encontrado después de un año',1),(7,3,'Presentar nuestra iglesia (1 minuto o mas)','20','Predicar únicamente con la Biblia',1),(8,3,'Predicar con apacienta mis ovejas','30','Enseñar un tema con el libro \"Apacienta mis Ovejas\"',1),(9,3,'Predicar con Academia Elohim','50','Enseñar un tema de los 50 temas del sermón',1),(10,3,'Predicar con otro material de la predicación 5 minutos o más','20','Uccspace, folder de predicación, Video de presentación, etc',1),(11,3,'Seminario Bíblico','30','Obtiene puntos por invitado que asiste al seminario',1),(12,4,'Leer 1 capítulo de la Biblia','3',NULL,1),(13,4,'Leer 1 capítulo de los Libros de la Verdad o de Primer Pastor','20',NULL,1),(14,4,'Ver video de sermón de Primer Pastor o de la Madre','10',NULL,1),(15,4,'Practicar un tema de Academia Elohim','30','Puede practicar el tema consigo mismo. Sin embargo, en cualquier situación debe ser sin mirar el sermón',1),(16,4,'Carta a la Madre','20',NULL,1),(17,4,'Oración de Madrugada','50',NULL,1),(18,4,'Oración por su grupo','10',NULL,1),(19,4,'Obra social','10','Ejemplo: Lavar los pies, cocinar, hacer masajes, servir café.',1);
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iglesia`
--

DROP TABLE IF EXISTS `iglesia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `iglesia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iglesia`
--

LOCK TABLES `iglesia` WRITE;
/*!40000 ALTER TABLE `iglesia` DISABLE KEYS */;
INSERT INTO `iglesia` VALUES (1,'IGLESIA PRINCIPAL',1),(2,'IGLESIA DE SAUCES',1),(3,'IGLESIA DE MANGOMARCA',1),(4,'IGLESIA DE CAMPOY',1),(5,'IGLESIA DEL CENTRO',1);
/*!40000 ALTER TABLE `iglesia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indice`
--

DROP TABLE IF EXISTS `indice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `indice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indice`
--

LOCK TABLES `indice` WRITE;
/*!40000 ALTER TABLE `indice` DISABLE KEYS */;
INSERT INTO `indice` VALUES (1,'ASISTENCIA',NULL),(2,'MELQUISEDEC',NULL),(3,'PREDICACION',NULL),(4,'OTROS',NULL);
/*!40000 ALTER TABLE `indice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel`
--

DROP TABLE IF EXISTS `nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel`
--

LOCK TABLES `nivel` WRITE;
/*!40000 ALTER TABLE `nivel` DISABLE KEYS */;
INSERT INTO `nivel` VALUES (1,'ADMINISTRADOR',1),(2,'LIDER',1),(3,'HERMANO',1);
/*!40000 ALTER TABLE `nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_iglesia` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,1,'FE',1),(2,1,'SONRISA',1),(3,1,'HUMILDAD',1),(4,1,'PACIENCIA',1),(5,1,'AMOR',1),(6,1,'ABRAHAM',1),(7,1,'MELQUISEDEC',1),(8,1,'JOSUE',1),(9,1,'CALEB',1),(10,1,'ZAFIRO',1),(11,1,'JASPE',1),(12,2,'SEÑORAS SAUCES',1),(13,2,'SEÑORES SAUCES',1),(14,2,'JOVENES/SEÑORITAS/ESTUDIANTES SAUCES',1),(15,3,'JAVIER',1),(16,3,'PAULINA',1),(17,3,'JOVENES/SEÑORITAS/ESTUDIANTES MANGOMARCA',1),(18,4,'SEÑORES',1),(19,4,'ERIBERTHA',1),(20,4,'JOVENES/SEÑORITAS/ESTUDIANTES CAMPOY',1),(21,5,'CARMEN',1),(22,5,'GLENDA',1),(23,5,'CIRO',1),(24,5,'JHONATHAN CARHUAPOMA',1),(25,5,'JOVENES',1),(26,5,'SEÑORITAS',1),(27,5,'ESTUDIANTES',1);
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_indice` int(11) DEFAULT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `klm_total_dia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `created_at` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(45) COLLATE utf8_spanish2_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
INSERT INTO `reporte` VALUES (1,'1',1,1,1,'1000',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `id_iglesia` int(11) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jimmy Niels PAYTAN VILLAVICENCIO','jimmypaytan10@gmail.com',NULL,'$2y$10$RzNI.u9dW0hwDWieyj.t2esGxJnvUJsQ67WBDrMBwVGYXpzfIuWjK',2,1,NULL,NULL,'2020-09-02 09:53:00','2020-09-02 20:26:57',0),(2,'Jimmy Niels','correo@correo.com',NULL,'$2y$10$V4AoE1ewZfKaiKbysFgg6.RyAfkcOklaAwcYJl27PgceXU33Evuj2',2,1,NULL,NULL,'2020-09-02 12:57:08','2020-09-02 20:26:55',0),(3,'Maria Salome','esalasv@policia.gob.pe',NULL,'$2y$10$s6yQECn8G780nDZ71vfQVuWNkgw/1d35A2UWj4l9E73tY.KjDFkLS',1,1,NULL,NULL,'2020-09-02 13:04:29','2020-09-02 20:25:09',1),(4,'test2','admin@correo.com',NULL,'$2y$10$2zMG/h8ZgjQbYO4vjkimse5g9BTsruFLoQR5TjeWnsodic5/oU0qq',3,1,8,NULL,'2020-09-02 13:21:04','2020-09-02 20:07:48',1),(5,'test2','jdelsolar@policia.gob.pe',NULL,'$2y$10$//g5u2kGO8wKBR/aqnONw.fbhe111fpNcRwA6p./BNgtjVQjMqTLW',3,1,8,NULL,'2020-09-02 14:01:06','2020-09-02 20:12:00',1),(6,'JOSE ENRIQUE LUJAN','theoneilove_srp@hotmail.com',NULL,'$2y$10$i8cfS0BtqeDIeuWyFFc1RegLQUGAo4uXnjXHcygLYFTtLFQd2tFCK',3,1,8,NULL,'2020-09-02 14:02:16','2020-09-02 19:54:27',1),(7,'HENRY MANAYAY','henry@correo.com',NULL,'$2y$10$Z.4aW7opf4.Ooo9zWfEbZ.pgJZJ3X2R3U4g1WuERDzkBUVWGhK5Dy',2,1,8,NULL,'2020-09-02 21:49:17','2020-09-02 21:49:17',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-02 17:00:38
