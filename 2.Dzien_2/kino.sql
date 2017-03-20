-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Kino
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `Cinemas`
--

DROP TABLE IF EXISTS `Cinemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cinemas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `adress` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cinemas`
--

LOCK TABLES `Cinemas` WRITE;
/*!40000 ALTER TABLE `Cinemas` DISABLE KEYS */;
INSERT INTO `Cinemas` VALUES (1,'Luna','ul. Marsza³kowska 28'),(2,'Silver Screen Pu³awska','Centrum Europlex - ul. Pu³awska 17'),(3,'Iluzjon Filmoteki Narodowej','ul. Narbutta 50a'),(4,'Etnokino','Ul. Kredytowa 1, Warszawa'),(5,'Multikino Z³ote Tarasy','ul. Z³ota 59'),(6,'Kinoteka','pl. Defilad 1'),(7,'Cinema City Promenada','ul. Ostrobramska 75C'),(8,'Praha','ul. Jagielloñska 26'),(9,'Alchemia','ul. Jezuicka 4'),(10,'Muranów','ul. Zamenhofa 1'),(11,'Femina','al. Solidarno¶ci 115');
/*!40000 ALTER TABLE `Cinemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Movies`
--

DROP TABLE IF EXISTS `Movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Movies`
--

LOCK TABLES `Movies` WRITE;
/*!40000 ALTER TABLE `Movies` DISABLE KEYS */;
INSERT INTO `Movies` VALUES (1,'Zbuntowana (2015)','Beatrice Prior konfrontuje siê z wewnêtrznymi demonami i kontynuuje walkê przeciwko ogromnemu sojuszowi, który mo¿e spowodowaæ rozpad spo³eczeñstwa.',7),(2,'Seks, mi³o¶æ i terapia (2014)','Lambert, seksoholik staraj±cy siê zerwaæ z na³ogiem, zatrudnia wiecznie niezaspokojon± nimfomankê.',5),(3,'Ex Machina (2015)','Po wygraniu konkursu programista jednej z najwiêkszych firm internetowych zostaje zaproszony do posiad³o¶ci swojego szefa. Na miejsce okazuje siê, ¿e jest czê¶ci± eksperymentu. ',8),(4,'Sils Maria (2014)','Wybitna aktorka podczas kilku dni spêdzonych w Alpach ze swoj± asystentk± na nowo odkrywa siebie. ',7),(5,'Chappie (2015)','Dwóch gangsterów kradnie policyjnego androida, by wykorzystaæ go do swoich celów. ',8),(6,'Kopciuszek (2015)','Po ¶mierci ojca z³a macocha Elli zamienia dziewczynê w s³u¿±c±. Los Kopciuszka odmieni dopiero Dobra Wró¿ka.',8),(7,'S±siady (2014)','Ksi±dz odwiedza po kolêdzie kamienicê, odkrywaj±c tajemnice jej lokatorów. ',3),(8,'Z³ota klatka (2013)','Sara, nastolatka z Gwatemali, wyrusza w niebezpieczn± podró¿ do Los Angeles w poszukiwaniu lepszego ¿ycia.',9),(9,'Body/Cia³o (2015)','Cyniczny prokurator i jego cierpi±ca na anoreksjê córka próbuj± odnale¼æ siê po tragicznej ¶mierci najbli¿szej osoby.',6),(10,'Fru! (2014)','Ptaszek, który nigdy wcze¶niej nie wychyli³ dzioba poza rodzinne gniazdo, zostaje przez pomy³kê przewodnikiem stada.',5),(11,'Disco Polo (2015)','M³odzi muzycy z prowincji w b³yskawiczny sposób zdobywaj± szczyty list przebojów.',2),(12,'Asteriks i Obeliks: Osiedle Bogów (2014)','Juliusz Cezar decyduje siê na budowê dzielnicy mieszkaniowej dla w³a¶cicieli rzymskich i nazywa j± Osiedlem Bogów.',9);
/*!40000 ALTER TABLE `Movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tickets`
--

DROP TABLE IF EXISTS `Tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tickets`
--

LOCK TABLES `Tickets` WRITE;
/*!40000 ALTER TABLE `Tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `Tickets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-23 20:07:03
