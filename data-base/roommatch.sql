-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql.roommatch.com.br
-- Generation Time: Jul 06, 2022 at 04:26 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roommatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `estabelecimentos`
--

CREATE TABLE `estabelecimentos` (
  `id_estab` int NOT NULL,
  `CEP` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quartos` int NOT NULL,
  `tamanho_casa` float NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ap_ou_casa` tinyint(1) NOT NULL,
  `vagas_carro` int NOT NULL,
  `comodos` int NOT NULL,
  `banheiros` int NOT NULL,
  `lavanderia` int NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `id_locador` int NOT NULL,
  `foto_perfil_casa` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `apet` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `estabelecimentos`
--

INSERT INTO `estabelecimentos` (`id_estab`, `CEP`, `endereco`, `complemento`, `bairro`, `cidade`, `estado`, `quartos`, `tamanho_casa`, `descricao`, `ap_ou_casa`, `vagas_carro`, `comodos`, `banheiros`, `lavanderia`, `internet`, `id_locador`, `foto_perfil_casa`, `apet`) VALUES
(11, '17.898-899', 'Rua Simão, 123', '', 'Vila Inglesa', 'Tupã', 'SP', 6, 10, 'Casa muito linda                            ', 1, 2, 10, 2, 1, 1, 56, '../userimages/629027dd9f0d7.jpg', 1),
(13, '17.610-250', 'rua julio dualibi', 'casa', 'jardim maraba', 'tupã', 'SP', 2, 22, 'Casa antiga, mas em bom estado de conservação, recém reformada e muito aconchegante', 1, 1, 5, 2, 1, 1, 59, '../userimages/628c16e2303aa.jpg', 1),
(14, '17.654-222', 'Aimores', 'casa', 'jardim sao pedro ', 'Tupã', 'SP', 3, 2.5, 'Boa localização, próximo a mercados. ', 0, 2, 6, 3, 1, 1, 60, '../userimages/628c18091b619.jpg', 1),
(15, '17.602-312', 'rua mandaguaris', 'casa', 'jardim são pedro', 'tupã', 'SP', 3, 12.5, 'Casa com boa vizinhança', 1, 3, 8, 3, 2, 1, 61, '../userimages/628c19521123e.jpg', 0),
(16, '17.549-685', 'rua caetes', 'casa', 'jardim sao paulo', 'tupa', 'SP', 3, 85.5, 'Casa recentemente reformada, ótima localização.', 1, 1, 7, 2, 1, 1, 62, '../userimages/628c1a281a2ed.jpg', 1),
(17, '15.454-685', 'rua tupiniquins', 'casa', 'vila independencia', 'tupã', 'SP', 2, 12.5, 'Casa bem localizada, próximo a mercados e lotéricas. ', 1, 2, 6, 2, 1, 1, 63, '../userimages/628c1b2895bf9.jpg', 1),
(18, '17.602-842', 'Rua Mandaguaris', '', 'Centro', 'Tupã', 'SP', 3, 10000, 'Casa com uma bela vista', 1, 1, 10, 3, 1, 1, 64, '../userimages/628c2056b1541.jpg', 1),
(19, '17.605-888', 'Rua Leodoro Quiqueto More, 500', '', 'CDHU', 'Arco Iris', 'SP', 2, 36, 'Limpa, organizada, ótima localização, em frente a uma praça', 1, 1, 5, 1, 1, 1, 65, '../userimages/628c265828ccb.jpg', 0),
(20, '17.602-870', 'Rua Adhemar de Barros, 300', '', 'Centro', 'Bastos', 'SP', 2, 60, 'Prédio recém construído', 1, 1, 10, 2, 1, 1, 66, '../userimages/628d9dfd20957.jpg', 0),
(21, '68.904-813', 'Avenida Treze de Setembro, 795', 'Não tem', 'Novo Buritizal', 'Macapá', 'SP', 2, 0.45, 'Quarto Minimalista', 1, 1, 2, 1, 0, 0, 67, '../userimages/6291535796fa7.jpg', 1),
(22, '25.555-555', 'Avenida Brasil', 'a', 'centro', 'tupa', 'SP', 5, 55, ' ', 1, 5, 5, 5, 5, 1, 68, '../userimages/62b4f3cc7ad4d.jpg', 0),
(26, '17.602-841', 'Rua Bezerra de Menezes', '', 'Centro', 'Tupã', 'SP', 2, 100, '', 1, 2, 5, 3, 2, 1, 70, '../userimages/62b6500c47af6.jpg', 0),
(27, '1783068637', 'Rua Doutor Edson Bernardi', '480', 'Vila Roma', 'TUPÃ', 'SP', 2, 100, '', 1, 0, 5, 1, 1, 1, 71, '../userimages/62b65aa6751a6.jpeg', 1),
(28, '17.607-157', 'Rua Santo Agostinho 60 Vila Abarca', 'Casa', 'Vila abarca ', 'Tupã', 'SP', 4, 5.5, '', 0, 3, 10, 2, 1, 1, 72, '../userimages/62b66395d804b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int NOT NULL,
  `local` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_quarto` int DEFAULT NULL,
  `id_estab` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locadores`
--

CREATE TABLE `locadores` (
  `id_locador` int NOT NULL,
  `nome_completo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fumante` tinyint(1) NOT NULL,
  `pet` tinyint(1) NOT NULL,
  `quant_pet` int NOT NULL,
  `vegano` tinyint(1) NOT NULL,
  `vegetariano` tinyint(1) NOT NULL,
  `faculdade` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `trabalho` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cozinha` tinyint NOT NULL,
  `tem_carro` tinyint(1) DEFAULT NULL,
  `tem_vel` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locadores`
--

INSERT INTO `locadores` (`id_locador`, `nome_completo`, `cpf`, `telefone`, `email`, `senha`, `data_nascimento`, `sexo`, `fumante`, `pet`, `quant_pet`, `vegano`, `vegetariano`, `faculdade`, `trabalho`, `cozinha`, `tem_carro`, `tem_vel`) VALUES
(56, 'Jorge Silva', '454.545.454-54', '(14) 9965-68988', 'jorges@gmail.com', '123456', '1995-05-14', 'm', 0, 1, 10, 1, 1, 'Usp', 'Amemdupã', 1, 1, 1),
(57, 'Camila Silva', '400.289.228-44', '(14) 9665-65474', 'camilasilva@gmail.com', '123456', '1990-05-23', 'f', 0, 1, 3, 0, 0, 'Etec', 'Magazine', 1, 1, 1),
(59, 'Giovanna Dias Rocha', '554.703.940-34', '(21) 3143-1511', 'gio7@gmail.com', '123456', '1992-10-24', 'f', 0, 1, 1, 1, 0, 'unesp', 'granol', 0, 0, 1),
(60, 'Mariana Alves Ferreira', '582.412.200-81', '(81) 3620-0319', 'marina57@gmail.com', '123456', '1998-09-15', 'f', 0, 1, 3, 0, 1, 'unesp', 'loja', 1, 1, 0),
(61, 'Letícia Cardoso Fernandes', '366.762.430-16', '(81) 3242-2344', 'lecardoso5@hotmail.com', '123456', '1989-03-18', 'f', 1, 0, 0, 0, 1, 'facat', 'agua e Sol', 0, 0, 1),
(62, 'Beatriz Cunha Pereira', '204.476.720-10', '(71) 2835-1832', 'beatrizcunha@hotmai.com', '123456', '1986-08-06', 'f', 0, 0, 0, 0, 0, 'facat', 'mercado', 0, 0, 0),
(63, 'Amanda Sousa Souza', '107.956.190-06', '(67) 3421-4331', 'amandasouza@gmail.com', '123456', '1991-04-02', 'n', 1, 0, 0, 0, 1, 'facat', 'mercado', 1, 1, 0),
(64, 'Lucas Souza', '455.655.656-56', '(14) 9999-87544', 'lucassouza@gmail.com', '123456', '1980-10-29', 'm', 0, 0, 0, 0, 0, 'FADAP', 'Americanas', 0, 0, 0),
(65, 'Lucas Finoti Rodrigues', '454.454.575-45', '(14) 99810-0124', 'lucasf@gmail.com', '123456', '2001-06-26', 'm', 0, 0, 0, 0, 0, 'Unesp', 'Magazine Luiza', 0, 0, 1),
(66, 'Jailton Santos', '457.877.875-65', '(14) 9400-28788', 'jailtons@gmail.com', '123456', '1990-02-15', 'm', 0, 0, 0, 0, 1, 'Esefap', 'Casa da criança', 1, 1, 0),
(67, 'Joaquim Pietro Lima', '195.913.971-19', '(96) 99763-1157', 'joaquim-lima79@metroquali.com.br', 'teste1234', '1962-03-12', 'm', 0, 0, 0, 0, 0, 'Médio Completo', 'Escritorio', 0, 0, 0),
(68, 'Lucas Finoti Rodrigues', '415.156.156-41', '(14) 4545-45454', 'lucas@gmail.com', '123456', '2000-06-23', 'n', 0, 0, 5, 1, 1, 'Unesp', 'Unesp', 0, 0, 0),
(70, 'Cristhian Araujo Rodrigues', '447.7756.418-00', '(14) 9960-46543', 'cristhian.rodrigues105@gmail.com', '123456', '1995-05-29', 'm', 0, 1, 1, 0, 0, 'Unesp', 'Etec', 0, 0, 1),
(71, 'Sebastián Melo', '444.765.234-88', '(14) 996056745', 'sebastian@gmail.com', '123456', '1990-06-14', 'm', 0, 0, 0, 0, 0, 'Etec', 'Container', 1, 0, 0),
(72, 'DOUGLAS ESTEVES LIMA', '350.693.998.02', '(14) 996573790', 'douglasesteveslima@gmail.com', 'senha123', '2003-09-25', 'm', 0, 0, 0, 0, 0, 'Faccat', 'Escritório ', 0, 0, 1),
(73, 'Dougals Esteves Lima', '363.732.666-66', '(14) 9981-00124', 'douglas@gmail.com', '123456', '2022-06-23', 'm', 0, 0, 2, 0, 0, 'ETEC', 'ETEC', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `moradores`
--

CREATE TABLE `moradores` (
  `id_morador` int NOT NULL,
  `nome_completo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fumante` tinyint(1) NOT NULL,
  `pet` tinyint(1) NOT NULL,
  `quant_pet` int DEFAULT NULL,
  `vegano` tinyint(1) NOT NULL,
  `vegetariano` tinyint(1) NOT NULL,
  `faculdade` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `trabalho` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tem_carro` tinyint(1) NOT NULL,
  `tem_vel` tinyint(1) NOT NULL,
  `cozinha` tinyint(1) NOT NULL,
  `id_quarto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moradores`
--

INSERT INTO `moradores` (`id_morador`, `nome_completo`, `cpf`, `telefone`, `email`, `senha`, `data_nascimento`, `sexo`, `fumante`, `pet`, `quant_pet`, `vegano`, `vegetariano`, `faculdade`, `trabalho`, `tem_carro`, `tem_vel`, `cozinha`, `id_quarto`) VALUES
(11, 'Cristhian Araujo Rodrigues', '448.775.488-00', '(14) 9960-46540', 'cristhian.rodrigues908@gmail.com', '123456', '1995-05-29', 'm', 1, 1, 1, 0, 0, 'Etec', 'IBGE', 0, 1, 1, NULL),
(14, 'Luan Azevedo Barbosa', '795.953.880-84', '(82) 3248-6346', 'Luan12@Hotmail.com', '123456', '1998-04-12', 'm', 1, 1, 2, 1, 0, 'unesp', 'granol', 0, 1, 1, NULL),
(15, 'Samuel Costa Carvalho', '999.288.350-20', '(55) 3621-9797', 'Samu_13@gmail.com', '123456', '2000-07-23', 'm', 1, 1, 3, 1, 0, 'unesp', 'sabesp', 0, 1, 0, NULL),
(16, 'Marcos Azevedo Oliveira', '553.743.140-84', '(34) 3141-2828', 'Marcos_azevedo@gmail.com', '123456', '1993-02-14', 'm', 1, 0, 0, 0, 0, 'unesp', 'sabesp', 1, 1, 1, NULL),
(17, 'Paulo Barros Azevedo', '051.683.100-36', '(27) 3892-6552', 'Paulo87@hotmail.com', '123456', '2002-06-29', 'm', 1, 0, 0, 0, 1, 'FACAT', 'Magazine', 1, 1, 1, NULL),
(18, 'Daniel Dias Souza', '719.317.280-89', '(97) 3307-8905', 'Dani_dias31@gmail.com', '123456', '1991-10-17', 'm', 0, 0, 0, 0, 1, 'FACAT', 'Magazine', 1, 1, 1, NULL),
(19, 'Wesley Carçado', '123.456.789-09', '(14) 9999-99999', 'wesley@hotmail.com', '123456', '1991-03-11', 'm', 0, 1, 3, 0, 0, 'Etec Prof. Massuyuki Kawano', 'Etec. Prof. Massuyuki Kawano', 1, 1, 1, NULL),
(20, 'Monique Evangelista Santos da Silva ', '422.040.308-64', '(14) 9968-94992', 'moniquesilva24@yahoo.com', '01091994', '1994-09-01', 'f', 0, 1, 1, 0, 0, 'ETEC Prof. Massuyuki Kawano', 'Vila inglesa', 0, 0, 1, NULL),
(23, 'Mariana Banhara Buzzatto', '847.373.378-37', '(14) 9989-9768', 'mariana@gmail.com', '123456', '2001-12-26', 'f', 0, 1, 2, 0, 0, '', '', 1, 1, 1, NULL),
(24, 'Maria silva', '234.234.567-89', '(11) 9876-45345', 'maria.maria@gmail.com', '01091994', '1990-12-12', 'f', 1, 1, 2, 0, 1, 'facat', 'Amendopã', 1, 0, 1, NULL),
(25, 'Lucas Finoti Rodrigues', '363.232.323-23', '(14) 9981-00124', 'lucasfinotirodrigues@hotmail.com', '123456', '2022-06-29', 'm', 0, 0, 0, 0, 0, 'ETEC', 'ETEC', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quartos`
--

CREATE TABLE `quartos` (
  `id_quarto` int NOT NULL,
  `tamanho_quarto` float NOT NULL,
  `valor` float NOT NULL,
  `mobiliado` tinyint(1) NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `quantidade_tomada` int NOT NULL,
  `arcondicionado` tinyint(1) NOT NULL,
  `id_estab` int NOT NULL,
  `foto_perfil_quarto` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `negociavel` tinyint(1) DEFAULT NULL,
  `disponibilidade` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Disponível'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quartos`
--

INSERT INTO `quartos` (`id_quarto`, `tamanho_quarto`, `valor`, `mobiliado`, `descricao`, `quantidade_tomada`, `arcondicionado`, `id_estab`, `foto_perfil_quarto`, `negociavel`, `disponibilidade`) VALUES
(7, 6, 820, 0, '        Quarto reformado', 5, 0, 11, '../userimages/6290287e31f00.jpg', 0, 'Indisponível'),
(9, 4, 300, 0, 'Quarto espaçoso ', 3, 0, 13, '../userimages/628c170fbd95c.jpg', 1, 'Disponível'),
(10, 7, 500, 0, 'Quarto Espaçoso, bem ventilado, recém pintado ', 9, 0, 14, '../userimages/628c1839e2bd0.jpg', 0, 'Disponível'),
(11, 3, 600, 0, 'Quarto com ótima vista, bem ventilado com grandes janelas', 5, 1, 15, '../userimages/628c198427ad1.jpg', 0, 'Disponível'),
(12, 8.75, 350, 0, 'Quarto com varanda bem ventilado.', 4, 0, 16, '../userimages/628c1a5e59955.jpg', 0, 'Disponível'),
(13, 2.5, 500, 1, 'Quarto mobiliado, bem espaçoso e com ar-condicionado. ', 3, 1, 17, '../userimages/628c1b44b1a0d.jpg', 1, 'Disponível'),
(14, 9, 100, 1, 'Lindo Quarto bem conservado', 5, 0, 18, '../userimages/628c207b77bf4.jpg', 0, 'Disponível'),
(15, 10.75, 600, 1, 'Pequeno , porém organizado', 2, 0, 19, '../userimages/628c26a956567.jpg', 1, 'Disponível'),
(16, 15, 700, 1, 'Quarto com mobília nova', 5, 0, 20, '../userimages/628d9e2ac678a.jpg', 1, 'Disponível'),
(17, 0.5, 1500, 1, 'Imovel bem feito para pessoas que gostam de um lugar agradavel', 3, 1, 21, '../userimages/629152cb3a49f.jpg', 1, 'Disponível'),
(18, 5, 5000, 0, '', 5, 0, 22, '../userimages/62b4f41d352d9.jpg', 0, 'Disponível'),
(20, 10, 1000, 1, 'Bonito e agradável', 5, 1, 26, '../userimages/62b6504531fb1.jpg', 0, 'Disponível'),
(21, 10, 1000, 1, '', 5, 0, 27, '../userimages/62b65ad103fb1.jpeg', 0, 'Disponível'),
(22, 5.5, 150, 1, '', 3, 1, 28, '../userimages/62b663b04c294.jpg', 1, 'Disponível');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD PRIMARY KEY (`id_estab`),
  ADD KEY `id_locador` (`id_locador`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_quarto` (`id_quarto`),
  ADD KEY `id_estab` (`id_estab`);

--
-- Indexes for table `locadores`
--
ALTER TABLE `locadores`
  ADD PRIMARY KEY (`id_locador`),
  ADD UNIQUE KEY `telefone` (`telefone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `moradores`
--
ALTER TABLE `moradores`
  ADD PRIMARY KEY (`id_morador`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `telefone` (`telefone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone_2` (`telefone`),
  ADD KEY `id_quarto` (`id_quarto`);

--
-- Indexes for table `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`id_quarto`),
  ADD KEY `id_estab` (`id_estab`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  MODIFY `id_estab` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locadores`
--
ALTER TABLE `locadores`
  MODIFY `id_locador` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `moradores`
--
ALTER TABLE `moradores`
  MODIFY `id_morador` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id_quarto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD CONSTRAINT `estabelecimentos_ibfk_1` FOREIGN KEY (`id_locador`) REFERENCES `locadores` (`id_locador`);

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_quarto`) REFERENCES `quartos` (`id_quarto`),
  ADD CONSTRAINT `fotos_ibfk_2` FOREIGN KEY (`id_estab`) REFERENCES `estabelecimentos` (`id_estab`);

--
-- Constraints for table `moradores`
--
ALTER TABLE `moradores`
  ADD CONSTRAINT `id_quarto` FOREIGN KEY (`id_quarto`) REFERENCES `quartos` (`id_quarto`);

--
-- Constraints for table `quartos`
--
ALTER TABLE `quartos`
  ADD CONSTRAINT `quartos_ibfk_1` FOREIGN KEY (`id_estab`) REFERENCES `estabelecimentos` (`id_estab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
