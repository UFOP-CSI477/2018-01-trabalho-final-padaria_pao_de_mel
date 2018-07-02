-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema new_schema2
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema new_schema3
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema paodemel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema paodemel
-- -----------------------------------------------------
CREATE SCHEMA  `paodemel` DEFAULT CHARACTER SET utf8 ;
USE `paodemel` ;

-- -----------------------------------------------------
-- Table `paodemel`.`produtos`
-- -----------------------------------------------------
CREATE TABLE  `paodemel`.`produtos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `quantidade` INT(11) NOT NULL,
  `preco` DOUBLE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `paodemel`.`estoque`
-- -----------------------------------------------------
CREATE TABLE  `paodemel`.`estoque` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `quantidade` INT(11) NOT NULL,
  `produtos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estoque_produtos_idx` (`produtos_id` ASC),
  CONSTRAINT `fk_estoque_produtos`
    FOREIGN KEY (`produtos_id`)
    REFERENCES `paodemel`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `paodemel`.`login`
-- -----------------------------------------------------
CREATE TABLE `paodemel`.`login` (
  `id` INT(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `paodemel`.`vendas`
-- -----------------------------------------------------
CREATE TABLE  `paodemel`.`vendas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `quantidade` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `produtos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `produtos_id`),
  INDEX `fk_vendas_produtos1_idx` (`produtos_id` ASC),
  CONSTRAINT `fk_vendas_produtos1`
    FOREIGN KEY (`produtos_id`)
    REFERENCES `paodemel`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


