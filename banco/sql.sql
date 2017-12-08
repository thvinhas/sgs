-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 01:04
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nome_pai` varchar(60) DEFAULT NULL,
  `nome_mae` varchar(60) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `cpf_pai` int(11) DEFAULT NULL,
  `cpf_mae` int(11) DEFAULT NULL,
  `rg_aluno` int(11) DEFAULT NULL,
  `serie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome`, `nome_pai`, `nome_mae`, `data_nascimento`, `cpf_pai`, `cpf_mae`, `rg_aluno`, `serie_id`) VALUES
(13, 'Thiago', 'Marcio', 'Antonia', '2017-12-07 00:00:00', 123, 123, 321, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `dia_aula` varchar(10) NOT NULL,
  `numero_aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id`, `id_turma`, `id_disciplina`, `dia_aula`, `numero_aula`) VALUES
(0, 2, 2, 'Segunda', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(45) NOT NULL,
  `valor_curso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome_curso`, `valor_curso`) VALUES
(2, 'Ensino Fundamenta', 500);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `nm_disciplina` varchar(45) NOT NULL,
  `carga_horaria` double NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`nm_disciplina`, `carga_horaria`, `id_curso`, `id`) VALUES
('Portugues', 40, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `ch_presenca` binary(1) DEFAULT NULL,
  `matricula_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_escolar`
--

CREATE TABLE `historico_escolar` (
  `id` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `valor_resultado` double NOT NULL,
  `periodo_letivo` varchar(5) NOT NULL,
  `matricula_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `tipo`) VALUES
(3, 'master', '1', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `nota` double NOT NULL,
  `unidade` varchar(45) DEFAULT NULL,
  `matricula_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf_professor` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `nome`, `cpf_professor`, `email`) VALUES
(1234, 'José Couto', 4567, 'jose_couto@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `periodo_letivo` varchar(8) DEFAULT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`id`, `nome`, `periodo_letivo`, `curso_id`) VALUES
(2, '7', '2017.1', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `serie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `serie_id`) VALUES
(2, 'A', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_has_disciplina`
--

CREATE TABLE `turma_has_disciplina` (
  `turma_id` int(11) NOT NULL,
  `turma_serie_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_has_professor`
--

CREATE TABLE `turma_has_professor` (
  `turma_id_serie` int(11) NOT NULL,
  `professor_matricula` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `alu_nu_matricula_UNIQUE` (`matricula`),
  ADD KEY `fk_aluno_serie1_idx` (`serie_id`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `au_id_aula_UNIQUE` (`id`),
  ADD KEY `fk_aul_aula_serie_disciplina1_idx` (`id_turma`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crs_id_curso_UNIQUE` (`id`),
  ADD UNIQUE KEY `crs_ds_curso_UNIQUE` (`nome_curso`),
  ADD UNIQUE KEY `crs_vl_curso_UNIQUE` (`valor_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `atp_ds_atividade_UNIQUE` (`nm_disciplina`),
  ADD UNIQUE KEY `atp_carga_horaria_UNIQUE` (`carga_horaria`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rpa_id_presenca_UNIQUE` (`id`),
  ADD KEY `fk_fra_frequencia_aluno_aul_aula1_idx` (`id_aula`),
  ADD KEY `fk_fra_frequencia_aluno_alu_aluno1_idx` (`matricula_aluno`);

--
-- Indexes for table `historico_escolar`
--
ALTER TABLE `historico_escolar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_historico_escolar_aluno1_idx` (`matricula_aluno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rac_id_resultado_aluno_curso_UNIQUE` (`id`),
  ADD KEY `fk_not_nota_serie_disciplina1_idx` (`id_turma`),
  ADD KEY `fk_not_nota_alu_aluno1_idx` (`matricula_aluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `doc_nu_matricula_UNIQUE` (`matricula`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`,`curso_id`),
  ADD UNIQUE KEY `tur_id_turma_UNIQUE` (`id`),
  ADD UNIQUE KEY `tur_ds_turma_UNIQUE` (`nome`),
  ADD KEY `fk_serie_curso1_idx` (`curso_id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`,`serie_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_turma_serie1_idx` (`serie_id`);

--
-- Indexes for table `turma_has_disciplina`
--
ALTER TABLE `turma_has_disciplina`
  ADD PRIMARY KEY (`turma_id`,`disciplina_id`,`turma_serie_id`),
  ADD KEY `fk_turma_has_disciplina_disciplina1_idx` (`disciplina_id`),
  ADD KEY `fk_turma_has_disciplina_turma1_idx` (`turma_id`,`turma_serie_id`);

--
-- Indexes for table `turma_has_professor`
--
ALTER TABLE `turma_has_professor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_turma_has_professor_professor1_idx` (`professor_matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `historico_escolar`
--
ALTER TABLE `historico_escolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324325;
--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turma_has_professor`
--
ALTER TABLE `turma_has_professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_serie1` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `fk_aul_aula_serie_disciplina1` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `fk_fra_frequencia_aluno_alu_aluno1` FOREIGN KEY (`matricula_aluno`) REFERENCES `aluno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fra_frequencia_aluno_aul_aula1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `historico_escolar`
--
ALTER TABLE `historico_escolar`
  ADD CONSTRAINT `fk_historico_escolar_aluno1` FOREIGN KEY (`matricula_aluno`) REFERENCES `aluno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_not_nota_alu_aluno1` FOREIGN KEY (`matricula_aluno`) REFERENCES `aluno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_not_nota_serie_disciplina1` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `fk_serie_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_turma_serie1` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma_has_disciplina`
--
ALTER TABLE `turma_has_disciplina`
  ADD CONSTRAINT `fk_turma_has_disciplina_disciplina1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_has_disciplina_turma1` FOREIGN KEY (`turma_id`,`turma_serie_id`) REFERENCES `turma` (`id`, `serie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma_has_professor`
--
ALTER TABLE `turma_has_professor`
  ADD CONSTRAINT `fk_turma_has_professor_professor1` FOREIGN KEY (`professor_matricula`) REFERENCES `professor` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
