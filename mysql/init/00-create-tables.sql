-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema phpsampleapp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `phpsampleapp` DEFAULT CHARACTER SET utf8 ;
USE `phpsampleapp` ;

-- -----------------------------------------------------
-- Table `phpsampleapp`.`Articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpsampleapp`.`Articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subject` VARCHAR(255) NOT NULL,
  `body` TEXT NOT NULL,
  `created_datetime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_datetime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
