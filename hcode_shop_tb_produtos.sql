CREATE DATABASE  IF NOT EXISTS `hcode_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hcode_shop`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hcode_shop
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_produtos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod_curto` varchar(150) DEFAULT NULL,
  `nome_prod_longo` varchar(500) DEFAULT NULL,
  `codigo_interno` bigint(20) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `largura_centimetro` int(11) DEFAULT NULL,
  `altura_centimetro` int(11) DEFAULT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL,
  `preco_promorcional` decimal(10,2) DEFAULT NULL,
  `foto_principal` varchar(500) DEFAULT NULL,
  `visivel` bit(8) DEFAULT NULL,
  `comprimento_centimetro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produtos`
--

LOCK TABLES `tb_produtos` WRITE;
/*!40000 ALTER TABLE `tb_produtos` DISABLE KEYS */;
INSERT INTO `tb_produtos` VALUES (3,'Fini Candies','Fini Candies on Tire for Kids',124678139,3,5,0,0,0,0,0,'fini.jpg','',NULL),(4,'Halls Drop','Halls Drop Multiple Flavours Avaiable ',124407806,1,3,0,0,92,10,1999.00,'halls.png','',NULL),(5,'Lollypop','Crazy Fucking Awesome Lollypop On SALE',120866280,5,0.22,2.70,26,60,100,508.00,'lollypop.jpg','',NULL),(6,'Ar Condicionado Split Hi Wall LG 12.000 Btus Quente/Frio - 220V','Ar Condicionado Split Hi Wall LG 12.000 Btus Quente/Frio - 220V',123893531,5,1599.99,9.00,29,21,10,1499.99,'arCondicionadoSplitLG.jpg','',NULL),(7,'Smartphone Motorola Moto Maxx','Smartphone Motorola Moto Maxx Desbloqueado Android 4.4 Tela 5.2\" Memória 64GB Wi-Fi Câmera 21MP Preto',121034371,3,2000.00,0.14,7,13,100,1943.33,'motoMaxx.jpg','',NULL);
/*!40000 ALTER TABLE `tb_produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
-- Dump completed on 2016-01-25 11:40:45
