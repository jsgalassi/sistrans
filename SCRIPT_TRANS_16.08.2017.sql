-- MySQL Script generated by MySQL Workbench
-- 08/16/17 19:56:03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema trans
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema trans
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `trans` DEFAULT CHARACTER SET utf8 ;
USE `trans` ;

-- -----------------------------------------------------
-- Table `trans`.`uf_cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`uf_cidade` (
  `cidade_id` INT NOT NULL AUTO_INCREMENT,
  `uf` VARCHAR(2) NULL,
  `cidade` VARCHAR(200) NULL,
  PRIMARY KEY (`cidade_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`veiculo` (
  `veiculo_id` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(10) NULL,
  `nro_renavam` VARCHAR(20) NULL,
  `ano` VARCHAR(9) NULL,
  `modelo` VARCHAR(45) NULL,
  `chassi` VARCHAR(25) NULL,
  `marca` VARCHAR(45) NULL,
  `cor` VARCHAR(45) NULL,
  `descricao` TEXT NULL,
  PRIMARY KEY (`veiculo_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`motorista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`motorista` (
  `motorista_id` INT NOT NULL AUTO_INCREMENT,
  `veiculo_id` INT NOT NULL,
  `nome` VARCHAR(100) NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `nro_cnh` VARCHAR(15) NULL,
  `tipo_cnh` VARCHAR(5) NULL,
  `logradouro` VARCHAR(150) NULL,
  `nro` INT NULL,
  `complemento` VARCHAR(150) NULL,
  `bairro` VARCHAR(150) NULL,
  `cep` VARCHAR(12) NULL,
  `cidade_id` INT NOT NULL,
  `obs` TEXT NULL,
  PRIMARY KEY (`motorista_id`),
  INDEX `fk_motorista_uf_cidade_idx` (`cidade_id` ASC),
  INDEX `fk_motorista_veiculo1_idx` (`veiculo_id` ASC),
  CONSTRAINT `fk_motorista_uf_cidade`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `trans`.`uf_cidade` (`cidade_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_motorista_veiculo1`
    FOREIGN KEY (`veiculo_id`)
    REFERENCES `trans`.`veiculo` (`veiculo_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`frete`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`frete` (
  `frete_id` INT NOT NULL AUTO_INCREMENT,
  `veiculo_id` INT NOT NULL,
  `data_entrada` DATE NULL,
  `data_fechamento` DATE NULL,
  `nro_entrada` INT NULL,
  `kminicial` DOUBLE NULL,
  `kmfinal` DOUBLE NULL,
  `percorrido` DOUBLE NULL,
  `cidade_id` INT NOT NULL,
  `vlr_frete` DOUBLE NULL,
  `nf` VARCHAR(10) NULL,
  `status` VARCHAR(45) NULL,
  `modificacao` DATETIME NULL,
  PRIMARY KEY (`frete_id`),
  INDEX `fk_frete_uf_cidade1_idx` (`cidade_id` ASC),
  INDEX `fk_frete_veiculo1_idx` (`veiculo_id` ASC),
  CONSTRAINT `fk_frete_uf_cidade1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `trans`.`uf_cidade` (`cidade_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_frete_veiculo1`
    FOREIGN KEY (`veiculo_id`)
    REFERENCES `trans`.`veiculo` (`veiculo_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(10) NULL,
  `senha` VARCHAR(8) NULL,
  PRIMARY KEY (`usuario_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`pagina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`pagina` (
  `pagina_id` INT NOT NULL,
  `pag` VARCHAR(60) NULL,
  PRIMARY KEY (`pagina_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trans`.`usuario_pagina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trans`.`usuario_pagina` (
  `usuario_usuario_id` INT NOT NULL,
  `pagina_pagina_id` INT NOT NULL,
  PRIMARY KEY (`usuario_usuario_id`, `pagina_pagina_id`),
  INDEX `fk_usuario_has_pagina_pagina1_idx` (`pagina_pagina_id` ASC),
  INDEX `fk_usuario_has_pagina_usuario1_idx` (`usuario_usuario_id` ASC),
  CONSTRAINT `fk_usuario_has_pagina_usuario1`
    FOREIGN KEY (`usuario_usuario_id`)
    REFERENCES `trans`.`usuario` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_pagina_pagina1`
    FOREIGN KEY (`pagina_pagina_id`)
    REFERENCES `trans`.`pagina` (`pagina_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;