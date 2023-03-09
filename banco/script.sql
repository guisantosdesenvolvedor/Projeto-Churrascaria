-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2023 às 19:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ti93phpdb01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `id_produto` int(11) NOT NULL,
  `id_tipo_produto` int(11) NOT NULL,
  `descri_produto` varchar(100) NOT NULL,
  `resumo_produto` varchar(1000) DEFAULT NULL,
  `valor_produto` decimal(9,2) DEFAULT NULL,
  `imagem_produto` varchar(50) DEFAULT NULL,
  `destaque_produto` enum('Sim','Não') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`id_produto`, `id_tipo_produto`, `descri_produto`, `resumo_produto`, `valor_produto`, `imagem_produto`, `destaque_produto`) VALUES
(34, 14, 'Picanha ao alho', NULL, '29.00', 'picanha_alho.jpg', 'Sim'),
(35, 14, 'Fraldinha', NULL, '29.00', 'fraldinha.jpg', 'Sim'),
(36, 14, 'Costela ', NULL, '29.00', 'costelona.jpg', 'Não'),
(37, 14, 'Cupim', NULL, '29.00', 'cupim.jpg', 'Não'),
(38, 14, 'Picanha', NULL, '30.00', 'picanha_sem.jpg', 'Não'),
(39, 16, 'Apfelstrudel', NULL, '30.00', 'strudel.jpg', 'Sim'),
(40, 14, 'Alcatra', NULL, '29.00', 'alcatra_pedra.jpg', 'Não'),
(41, 14, 'Maminha', NULL, '29.00', 'maminha.jpg', 'Não'),
(42, 16, 'Abacaxi', NULL, '29.00', 'abacaxi.jpg', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbreservas`
--

CREATE TABLE `tbreservas` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `data_reserva` date NOT NULL,
  `data_enviada` date NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tbusuarios_id_usuario` int(11) NOT NULL,
  `statuss` enum('conr','arq') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbreservas`
--

INSERT INTO `tbreservas` (`id`, `nome`, `data_reserva`, `data_enviada`, `quantidade`, `tbusuarios_id_usuario`, `statuss`) VALUES
(8, 'guilherme antonio dos santos', '2023-03-16', '2023-03-01', 5, 1, NULL),
(9, 'guilherme antonio dos santos', '2023-03-16', '2023-03-01', 5, 1, NULL),
(10, 'dayane aparecida', '2023-03-24', '2023-03-01', 8, 1, ''),
(11, 'dayane aparecida', '2023-03-16', '2023-03-01', 8, 1, ''),
(12, 'gabriel', '2023-03-01', '2023-03-01', 2, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipos`
--

CREATE TABLE `tbtipos` (
  `id_tipo` int(11) NOT NULL,
  `sigla_tipo` varchar(3) NOT NULL,
  `rotulo_tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbtipos`
--

INSERT INTO `tbtipos` (`id_tipo`, `sigla_tipo`, `rotulo_tipo`) VALUES
(14, 'chu', 'churrasco'),
(15, 'fra', 'frango'),
(16, 'sob', 'sobremesa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `id_usuario` int(11) NOT NULL,
  `login_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL,
  `nivel_usuario` enum('sup','cli') NOT NULL,
  `cpf_usuario` varchar(11) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `nivel_usuario`, `cpf_usuario`, `email_usuario`) VALUES
(1, 'senac', '81dc9bdb52d04dc20036dbd8313ed055', 'sup', NULL, NULL),
(3, 'guilherme', '81dc9bdb52d04dc20036dbd8313ed055', 'cli', ' 3184122689', 'guikerme.1707@gmail.com'),
(4, 'gabriel', '647431b5ca55b04fdf3c2fce31ef1915', 'cli', ' 4444444444', 'gabrielleandrosantiago@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_tbprodutos`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_tbprodutos` (
`id_produto` int(11)
,`id_tipo_produto` int(11)
,`sigla_tipo` varchar(3)
,`rotulo_tipo` varchar(15)
,`descri_produto` varchar(100)
,`resumo_produto` varchar(1000)
,`valor_produto` decimal(9,2)
,`imagem_produto` varchar(50)
,`destaque_produto` enum('Sim','Não')
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_tbprodutos`
--
DROP TABLE IF EXISTS `vw_tbprodutos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tbprodutos`  AS SELECT `p`.`id_produto` AS `id_produto`, `p`.`id_tipo_produto` AS `id_tipo_produto`, `t`.`sigla_tipo` AS `sigla_tipo`, `t`.`rotulo_tipo` AS `rotulo_tipo`, `p`.`descri_produto` AS `descri_produto`, `p`.`resumo_produto` AS `resumo_produto`, `p`.`valor_produto` AS `valor_produto`, `p`.`imagem_produto` AS `imagem_produto`, `p`.`destaque_produto` AS `destaque_produto` FROM (`tbprodutos` `p` join `tbtipos` `t`) WHERE `p`.`id_tipo_produto` = `t`.`id_tipo``id_tipo`  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_tipo_produto_fk` (`id_tipo_produto`);

--
-- Índices para tabela `tbreservas`
--
ALTER TABLE `tbreservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbreservas_tbusuarios1_idx` (`tbusuarios_id_usuario`);

--
-- Índices para tabela `tbtipos`
--
ALTER TABLE `tbtipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `tbreservas`
--
ALTER TABLE `tbreservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbtipos`
--
ALTER TABLE `tbtipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD CONSTRAINT `id_tipo_produto_fk` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tbtipos` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbreservas`
--
ALTER TABLE `tbreservas`
  ADD CONSTRAINT `fk_tbreservas_tbusuarios1` FOREIGN KEY (`tbusuarios_id_usuario`) REFERENCES `tbusuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
