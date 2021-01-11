-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: notas_db
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1

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
-- Table structure for table `NOTAS_TB`
--

DROP TABLE IF EXISTS `NOTAS_TB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NOTAS_TB` (
  `id_nota` int(11) DEFAULT NULL,
  `nota` varchar(1000) DEFAULT NULL,
  `horario` varchar(30) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NOTAS_TB`
--

LOCK TABLES `NOTAS_TB` WRITE;
/*!40000 ALTER TABLE `NOTAS_TB` DISABLE KEYS */;
--INSERT INTO `NOTAS_TB` VALUES (158273,'Vagabundo, vamo funcionar vei, hahhahahahha','26-09-2020 16:52',12),(339680,'teste de nota !','26-09-2020 18:39',0),(242595,'dasdasdas','26-09-2020 18:39',0),(142318,'dasdasdasdadasdas','26-09-2020 18:41',704674),(759366,'dasdasdasdasda','26-09-2020 18:43',704674),(8275,'dasdasdasd','26-09-2020 18:43',704674),(579071,'dsadasdas','26-09-2020 18:44',704674),(141821,'dasdasdasd','26-09-2020 18:44',704674),(351129,'<script>alert(\"asasdas\")</script>','26-09-2020 18:44',704674),(489162,'dasdasdasdasda','26-09-2020 19:23',704674),(166876,'<script>console.log(\'13123\')</script>','26-09-2020 19:25',704674),(553308,'dasdasda','26-09-2020 19:30',704674),(994094,'Graças a deus foi agora','26-09-2020 19:30',704674),(387426,'O daniel é viado !','27-09-2020 12:06',47883),(974675,'dsadasdsa','22-12-2020 18:15',0),(121763,'Funcione pelo amor de deusssssssssssssssss','22-12-2020 18:15',0),(598658,'dasdas','22-12-2020 18:16',0),(406759,'','22-12-2020 18:57',91721),(514536,'','22-12-2020 18:57',91721),(406872,'','22-12-2020 18:57',91721),(881287,'dsadasdsa','22-12-2020 18:57',91721),(83185,'','22-12-2020 18:57',91721),(724157,'','22-12-2020 18:57',91721),(459596,'dsadasdsadsada','22-12-2020 18:57',91721),(437748,'','22-12-2020 18:57',91721),(742156,'','22-12-2020 18:57',91721),(910365,'','23-12-2020 17:36',91721),(627523,'','23-12-2020 17:36',91721),(445847,'','23-12-2020 17:36',91721),(368131,'','23-12-2020 17:39',91721),(507830,'','23-12-2020 17:39',91721),(978042,'','23-12-2020 17:39',91721),(730143,'','23-12-2020 17:39',91721),(462568,'','23-12-2020 17:39',91721),(848883,'','23-12-2020 17:39',91721),(711201,'','23-12-2020 17:39',91721),(338848,'','23-12-2020 17:39',91721),(863169,'','23-12-2020 17:39',91721),(619995,'','23-12-2020 17:39',91721),(564382,'','23-12-2020 17:39',91721),(610202,'','23-12-2020 17:39',91721),(918085,'','23-12-2020 17:40',91721),(773579,'','23-12-2020 17:40',91721),(495159,'','23-12-2020 17:40',91721),(320371,'','23-12-2020 17:40',91721),(77639,'','23-12-2020 17:40',91721),(616858,'','23-12-2020 17:40',91721),(745944,'','23-12-2020 17:40',91721),(785403,'a','23-12-2020 17:41',91721),(609714,'dasdasdasda','23-12-2020 18:00',91721),(693239,'ffdsfsdfs','23-12-2020 18:01',91721),(465613,'dsadasdasdas','23-12-2020 18:02',91721),(238979,'dasdsadas','23-12-2020 18:02',91721),(273122,'dasdasdas','23-12-2020 18:04',91721),(529764,'dasdasdas','23-12-2020 18:05',91721),(747373,'dasdasda','23-12-2020 18:07',91721),(408617,'sdadasda','23-12-2020 18:10',91721),(130103,'sadasdas','23-12-2020 18:12',91721),(547431,'sdadasda','23-12-2020 18:12',91721),(233766,'dsdasdsa','23-12-2020 18:14',91721),(609296,'dasdasdas','23-12-2020 18:14',91721),(407938,'dasdasdas','23-12-2020 18:16',91721),(785967,'DASDASDAS','23-12-2020 18:17',91721),(303190,'DDSFVSDVS','23-12-2020 18:17',91721),(673556,'DFFSDFSDFSDDFSD','23-12-2020 18:18',91721),(143508,'dasdsadsa','23-12-2020 18:25',91721),(160682,'dasdasdasdas','23-12-2020 18:32',91721),(631061,'asdasdasd','23-12-2020 18:33',91721),(615668,'dasdasdas','23-12-2020 18:40',91721);
/*!40000 ALTER TABLE `NOTAS_TB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UPLOAD_TB`
--

DROP TABLE IF EXISTS `UPLOAD_TB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UPLOAD_TB` (
  `id_upload` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `caminho` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UPLOAD_TB`
--

LOCK TABLES `UPLOAD_TB` WRITE;
/*!40000 ALTER TABLE `UPLOAD_TB` DISABLE KEYS */;
INSERT INTO `UPLOAD_TB` VALUES (1,1,'TESTE'),(2,1,'TESTE'),(3,1,'TESTE'),(4,160682,'../store/160682-Captura de tela de 2020-11-12 21-16-06.png'),(5,631061,'631061-check-this.png'),(6,615668,'615668-2-3-cg3002012.txt'),(7,0,'0-<body onafterprint=alert(1)>.jpg');
/*!40000 ALTER TABLE `UPLOAD_TB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER_TB`
--

DROP TABLE IF EXISTS `USER_TB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER_TB` (
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER_TB`
--

LOCK TABLES `USER_TB` WRITE;
/*!40000 ALTER TABLE `USER_TB` DISABLE KEYS */;
INSERT INTO `USER_TB` VALUES ('Jericho','9eb71ab7420eb452a22787ca4fab501b',1),('Jericho','1234',15),('Jericho','1234',15),('Jericho','1234',15),('Jericho','1234',15),('Jericho','1234',15),('Alemao','9eb71ab7420eb452a22787ca4fab501b',12),('Amado','3fca88662462bbad6247bbeb6f43c448',343),('Amadodasdassad','3fca88662462bbad6247bbeb6f43c448',945560),('Amadodasdassad','3fca88662462bbad6247bbeb6f43c448',184746),('Amadodasdassaddasda','3fca88662462bbad6247bbeb6f43c448',231162),('ju','81dc9bdb52d04dc20036dbd8313ed055',414276),('dasdas','89defae676abd3e3a42b41df17c40096',881651),('dasdas','8f4031bfc7640c5f267b11b6fe0c2507',9066),('dasdas','8f4031bfc7640c5f267b11b6fe0c2507',135293),('dasdas','8f4031bfc7640c5f267b11b6fe0c2507',807586),('dasdasasddasdas','8f4031bfc7640c5f267b11b6fe0c2507',651428),('asdasuser','e17dfccf2594750bce31419b35223307',996607),('asdasuser','e17dfccf2594750bce31419b35223307',440430),('momo','6bcd4817088a4bc68bbee1d34d14b541',26534),('dasdasdasdas','ec02c59dee6faaca3189bace969c22d3',631102),('dasdasdasdas','ec02c59dee6faaca3189bace969c22d3',88483),('dasdasdasdas','651d8a1218acfa9e42022db4e2b8d827',994738),('dasdasdasdas','7c1cadb6887373dacb595c47166bfbd9',645716),('dasdasd','89defae676abd3e3a42b41df17c40096',795414),('dasdas','ac6555bfe23f5fe7e98fdcc0cd5f2451',907879),('dasdas','8f4031bfc7640c5f267b11b6fe0c2507',805646),('dasdas','89defae676abd3e3a42b41df17c40096',870847),('junior1','81dc9bdb52d04dc20036dbd8313ed055',765890),('junior1','81dc9bdb52d04dc20036dbd8313ed055',960526),('','d41d8cd98f00b204e9800998ecf8427e',154434),('teste','698dc19d489c4e4db73e28a713eab07b',704674),('Daniel','81dc9bdb52d04dc20036dbd8313ed055',47883),('junior','81dc9bdb52d04dc20036dbd8313ed055',91721);
/*!40000 ALTER TABLE `USER_TB` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-11  7:45:51
