# Projeto Finanças 
##### Comandos para criação da base, e cadastro do usuario (user:admin senha:12345).
1 -- Criando estrutura do banco de dados para fin:<br />
 CREATE DATABASE IF NOT EXISTS `fin`;
 USE `fin`;

2-- Criando estrutura para tabela fin.controle:<br />
 CREATE TABLE IF NOT EXISTS `controle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT 0,
  `titulo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `natureza` varchar(50) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;

3-- Criando estrutura para tabela usuarios:<br />
 CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

4 -- Copiando dados para a tabela usuarios:<br />
 INSERT INTO `usuarios` (`id`, `user`, `senha`) VALUES
	(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');
