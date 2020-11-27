-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- -- Copiando estrutura do banco de dados para food_healthy
CREATE DATABASE IF NOT EXISTS `food_healthy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `food_healthy`;

-- Copiando estrutura para tabela food_healthy.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `tipo_produto` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela food_healthy.produto: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id_produto`, `nome`, `descricao`, `valor`, `imagem`, `tipo_produto`, `ativo`) VALUES
	(104, 'teste', 'teste', 1231, 'img-upload/35360cb37dc47687db1b912cbcf5a0d7.jpg', 'sobremesa', 1),
	(105, 'teste', 'teste', 10, 'img-upload/93bc354d7aec181d947dbe71f9917bff.png', 'prato', 1),
	(107, 'Suco De Fruta Vermelha', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 10, 'img-upload/8806eecbd612ed2a8a1a6c4bf2c640e5.jpg', 'fruta', 1),
	(108, 'Suco antioxidante', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 10, 'img-upload/444fd7f3542a8a4ef70c2f8f1654b50b.jpg', 'detox', 1),
	(109, 'Conjunto de Vitaminas de Abacaxi, Abacate e Morang', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 12, 'img-upload/cbdcfafab4d1f56d388a6661865c41efjfif', 'vitamina', 1),
	(110, 'Sopa de Cenoura', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 50, 'img-upload/faafcc196bde6c5c8fd1a99c9d8af789.jpg', 'prato', 1),
	(111, 'Suco de goiaba', 'lorem ipsum', 12, 'img-upload/18b0e10a07a6a58fda679b1a04924ba3.jpg', 'fruta', 1),
	(112, 'Flan Sem Gluten', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 12, 'img-upload/5f2b90e32c712c9ca7e31796fe90c02cjfif', 'sobremesa', 1),
	(113, 'Pudim com baixa caloria', 'teste som som', 12, 'img-upload/d8b0e80bf074777880930888207e0cb3.jpg', 'sobremesa', 1),
	(115, 'Brigadeiro', 'teste', 10, 'img-upload/a67d50b088776dccc710265aab148309.jpg', 'sobremesa', 1),
	(116, 'Sobremesa', 'teste som', 12, 'img-upload/66c15493826f652f82fbbe799c1aecda.png', 'sobremesa', 1);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando estrutura para tabela food_healthy.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `tel` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `datanasc` date NOT NULL,
  `pws` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela food_healthy.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `email`, `tel`, `ativo`, `datanasc`, `pws`) VALUES
	(21, 'teste', 'teste@gmail.com', '1111', 1, '1111-01-01', '?\n?9I?Y??V?W??>');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
