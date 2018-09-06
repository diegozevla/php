-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema teste_fluxo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema teste_fluxo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `teste_fluxo` DEFAULT CHARACTER SET utf8 ;
USE `teste_fluxo` ;

-- -----------------------------------------------------
-- Table `teste_fluxo`.`Tecnico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Tecnico` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Tecnico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `data_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `numero` VARCHAR(10) NULL DEFAULT NULL,
  `complemento` VARCHAR(255) NULL DEFAULT NULL,
  `data_criacao` TIMESTAMP NOT NULL,
  `data_atualizacao` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Chamado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Chamado` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Chamado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_visita` DATE NULL,
  `hora_visita` TIME NULL,
  `taxa_visita` DOUBLE(15,2) NOT NULL DEFAULT 0,
  `observacao` VARCHAR(1000) NULL DEFAULT NULL,
  `disponivel_para_tecnico` SMALLINT NOT NULL DEFAULT 0,
  `data_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tecnico_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Chamado_Tecnico_idx` (`tecnico_id` ASC),
  INDEX `fk_Chamado_Cliente1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_Chamado_Tecnico`
    FOREIGN KEY (`tecnico_id`)
    REFERENCES `teste_fluxo`.`Tecnico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_Cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `teste_fluxo`.`Cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Estado_Historico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Estado_Historico` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Estado_Historico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `data_criacao` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `descricao_UNIQUE` (`descricao` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Nome_Relacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Nome_Relacao` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Nome_Relacao` (
  `id` INT NOT NULL,
  `nome_sem_acento` VARCHAR(50) NOT NULL,
  `nome_com_acento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome_sem_acento` ASC),
  UNIQUE INDEX `nome_com_acento_UNIQUE` (`nome_com_acento` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Historico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Historico` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Historico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `chamado_id` INT NOT NULL,
  `estado_historico_id` INT NOT NULL,
  `nome_relacao_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Historico_Chamado1_idx` (`chamado_id` ASC),
  INDEX `fk_Historico_Estado_Historico1_idx` (`estado_historico_id` ASC),
  INDEX `fk_Historico_Relacoes1_idx` (`nome_relacao_id` ASC),
  CONSTRAINT `fk_Historico_Chamado1`
    FOREIGN KEY (`chamado_id`)
    REFERENCES `teste_fluxo`.`Chamado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Historico_Estado_Historico1`
    FOREIGN KEY (`estado_historico_id`)
    REFERENCES `teste_fluxo`.`Estado_Historico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Historico_Relacoes1`
    FOREIGN KEY (`nome_relacao_id`)
    REFERENCES `teste_fluxo`.`Nome_Relacao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teste_fluxo`.`Observacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teste_fluxo`.`Observacao` ;

CREATE TABLE IF NOT EXISTS `teste_fluxo`.`Observacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(1000) NOT NULL,
  `data_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `historico_id` INT NOT NULL,
  PRIMARY KEY (`id`, `historico_id`),
  INDEX `fk_Observacao_Historico1_idx` (`historico_id` ASC),
  CONSTRAINT `fk_Observacao_Historico1`
    FOREIGN KEY (`historico_id`)
    REFERENCES `teste_fluxo`.`Historico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
