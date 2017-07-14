-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: e_comerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `carrinho_produtos`
--

DROP TABLE IF EXISTS `carrinho_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinho_produtos` (
  `produto_id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_nome` varchar(100) NOT NULL,
  `produto_preco` decimal(10,2) DEFAULT NULL,
  `produto_quantidade` tinyint(4) DEFAULT NULL,
  `produto_img` varchar(100) DEFAULT NULL,
  `produto_descricao` varchar(100) DEFAULT NULL,
  `produto_id_categoria` int(20) DEFAULT NULL,
  PRIMARY KEY (`produto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho_produtos`
--

LOCK TABLES `carrinho_produtos` WRITE;
/*!40000 ALTER TABLE `carrinho_produtos` DISABLE KEYS */;
INSERT INTO `carrinho_produtos` VALUES (21,'Colchao_ortobom_physical_ultra_resistente',2000.00,15,'Colchao_ortobom_physical_ultra_resistente.jpg',NULL,NULL),(22,'Colchao_ortobom_physical_resistente_liso',1000.00,5,'Colchao_ortobom_physical_resistente_liso.jpg',NULL,NULL),(23,'Colchao_ortobom_physical_super_resistente',1250.00,7,'Colchao_ortobom_physical_super_resistente.jpg',NULL,NULL),(24,'Colchao_ortobom_physical_mega_resistente',1500.00,10,'Colchao_ortobom_physical_mega_resistente.jpg',NULL,NULL),(25,'colchao_premium',5000.00,6,'colchao_premium.png',NULL,NULL),(26,'colchao_premium_light',3000.00,6,'colchao_premium_light.png',NULL,NULL);
/*!40000 ALTER TABLE `carrinho_produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-30  0:59:19
