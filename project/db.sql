-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para equipamentos
DROP DATABASE IF EXISTS `equipamentos`;
CREATE DATABASE IF NOT EXISTS `equipamentos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `equipamentos`;

-- A despejar estrutura para tabela equipamentos.equipamentos
DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela equipamentos.equipamentos: ~23 rows (aproximadamente)
DELETE FROM `equipamentos`;
INSERT INTO `equipamentos` (`id`, `name`, `description`, `date`) VALUES
	(1, 'test', 'teste 1', '2024-04-15 10:59:42'),
	(2, 'testenovo', 'lorep ipsum ahduihdflasf', '2024-04-15 11:21:20'),
	(3, 'video', 'teste para o video', '2024-04-15 11:23:56'),
	(4, 'Teste', '', '2024-04-15 16:44:00'),
	(5, 'Teste', '', '2024-04-15 16:44:00'),
	(6, 'Teste', '', '2024-04-15 16:44:00'),
	(7, 'Teste', '', '2024-04-15 16:44:00'),
	(8, 'Teste', '', '2024-04-15 16:46:00'),
	(9, 'Teste', '', '2024-04-15 16:46:00'),
	(10, 'Teste324', '', '2024-04-15 16:46:00'),
	(11, 'Teste324', '', '2024-04-15 16:46:00'),
	(12, 'Teste324', '', '2024-04-15 16:46:00'),
	(13, 'Teste324', '', '2024-04-15 16:46:00'),
	(14, 'Teste', '', '2024-04-15 16:49:00'),
	(15, 'Teste', '', '2024-04-15 16:49:00'),
	(16, 'Teste', '', '2024-04-15 16:49:00'),
	(17, 'Teste', '', '2024-04-15 16:49:00'),
	(18, 'Teste', '', '2024-04-15 16:49:00'),
	(19, 'Teste', '', '2024-04-15 16:49:00'),
	(20, 'Teste', 'Dispositivo de Teste', '2024-04-15 17:03:00'),
	(21, 'Teste', 'Dispositivo de Teste', '2024-04-15 17:03:00'),
	(22, 'Laptop ASUS Vivobook', 'Portátil maravilhoso', '2024-04-15 17:06:00'),
	(23, 'Laptop ASUS Vivobook', 'Portátil maravilhoso', '2024-04-15 17:06:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
