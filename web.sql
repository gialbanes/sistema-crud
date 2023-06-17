-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela web.blog: ~0 rows (aproximadamente)
INSERT INTO `blog` (`blog_codigo`, `blog_bloginfo_codigo`, `blog_blogimgs_codigo`, `blog_usuario_codigo`) VALUES
	(65, 64, 51, 1),
	(66, 65, 52, 1),
	(67, 66, 53, 1);

-- Copiando dados para a tabela web.blogimgs: ~6 rows (aproximadamente)
INSERT INTO `blogimgs` (`blogimgs_codigo`, `blogimgs_nome`, `blogimgs_random`) VALUES
	(42, 'instagram (1).png', '1acaf7b24c84cd7b708a40b0df93363d.png'),
	(43, 'instagram (1).png', '1acaf7b24c84cd7b708a40b0df93363d.png'),
	(44, 'instagram (1).png', '1acaf7b24c84cd7b708a40b0df93363d.png'),
	(45, 'instagram (1).png', 'db9aeb7ae0ac98102b5acdd152d43fbc.png'),
	(46, 'instagram (1).png', 'c346acc042fcd82125d66acab6a45624.png'),
	(47, 'instagram (1).png', 'db1c8abf4578a25a963989213c17a41e.png'),
	(48, 'coracao (2).png', 'ca50fd5749d8f8799a5ad17c127c2af3.png'),
	(49, 'computador-desktop.png', 'c2489bfe3488ec36f670b78f8c40e856.png'),
	(50, 'computador-desktop.png', 'dc06182a78589300c68f200c79e8e317.png'),
	(51, 'computador-desktop.png', 'af222fc984342d6ec018b7905997683e.png'),
	(52, 'visualizacao-de-dados.png', 'ce8b9e4a011e25b3095be4401354c774.png'),
	(53, 'computador-portatil.png', '6b7383e41ae286b6835a0a5dc5d3202b.png');

-- Copiando dados para a tabela web.bloginfo: ~6 rows (aproximadamente)
INSERT INTO `bloginfo` (`bloginfo_codigo`, `bloginfo_titulo`, `bloginfo_corpo`, `bloginfo_data`, `bloginfo_img`) VALUES
	(55, 'a', 'a', '2023-06-16 03:00:00', NULL),
	(56, 'b', 'b', '2023-06-16 03:00:00', NULL),
	(57, 'g', 'g', '2023-06-16 03:00:00', NULL),
	(58, 'm', 'm', '2023-06-16 03:00:00', NULL),
	(59, 'g', 'g1', '2023-06-17 03:00:00', NULL),
	(60, 'c', 'c', '2023-06-17 03:00:00', NULL),
	(61, 'Teste', 'a', '2023-06-17 03:00:00', NULL),
	(62, 'Teste 1', 'Esse é o primeiro teste de post', '2023-06-17 03:00:00', NULL),
	(63, 'Teste 1', 'Esse é o primeiro teste de post ', '2023-06-17 03:00:00', NULL),
	(64, 'Teste 1', 'Esse é o primeiro teste de post', '2023-06-17 03:00:00', NULL),
	(65, 'Teste 2', 'Esse é o segundo teste de post', '2023-06-17 03:00:00', NULL),
	(66, 'Teste 3', 'Esse é o terceiro teste de post', '1970-01-01 04:00:00', NULL);

-- Copiando dados para a tabela web.usuario: ~2 rows (aproximadamente)
INSERT INTO `usuario` (`usuario_codigo`, `usuario_nome`, `usuario_email`, `usuario_senha`) VALUES
	(1, 'João', 'joao@email.com', '123'),
	(2, 'Maria', 'maria@email.com', '321');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
