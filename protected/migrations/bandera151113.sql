SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `bandera` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bandera` ;

-- -----------------------------------------------------
-- Table `bandera`.`city`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`city` (
  `ptt` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(90) NULL ,
  `state` VARCHAR(120) NULL ,
  `latitude` VARCHAR(45) NULL ,
  `longitude` VARCHAR(45) NULL ,
  PRIMARY KEY (`ptt`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bandera`.`options`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`options` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(90) NULL ,
  `heating` VARCHAR(90) NULL ,
  `beds` INT NULL ,
  `kitchen` VARCHAR(90) NULL ,
  `entery` VARCHAR(90) NULL ,
  `bathroom` VARCHAR(90) NULL ,
  `floor` VARCHAR(45) NULL ,
  `tv` TINYINT(1) NULL ,
  `internet` TINYINT(1) NULL ,
  `phone` TINYINT(1) NULL ,
  `balcony` TINYINT(1) NULL ,
  `air_conditioning` TINYINT(1) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bandera`.`ad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`ad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `start_date` DATETIME NULL ,
  `content` TEXT NULL ,
  `is_active` TINYINT(1) NULL ,
  `latitude` VARCHAR(45) NULL ,
  `longitude` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `visits` INT NULL ,
  `city_ptt` INT NOT NULL ,
  `options_id` INT NOT NULL ,
  `price` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_oglas_sity_idx` (`city_ptt` ASC) ,
  INDEX `fk_oglas_options1_idx` (`options_id` ASC) ,
  CONSTRAINT `fk_oglas_sity`
    FOREIGN KEY (`city_ptt` )
    REFERENCES `bandera`.`city` (`ptt` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_oglas_options1`
    FOREIGN KEY (`options_id` )
    REFERENCES `bandera`.`options` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bandera`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(120) NULL ,
  `password` VARCHAR(120) NULL ,
  `name_surname` VARCHAR(180) NULL ,
  `registration_date` DATETIME NULL ,
  `last_activity` DATETIME NULL ,
  `premium` TINYINT(1) NULL ,
  `avatar` VARCHAR(255) NULL ,
  `city_ptt` INT NOT NULL ,
  `email` VARCHAR(255) NULL ,
  `phone` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_user_sity1_idx` (`city_ptt` ASC) ,
  CONSTRAINT `fk_user_sity1`
    FOREIGN KEY (`city_ptt` )
    REFERENCES `bandera`.`city` (`ptt` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bandera`.`search`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`search` (
  `id` INT NOT NULL ,
  `date` DATETIME NULL ,
  `keywords` VARCHAR(255) NULL ,
  `text` TEXT NULL ,
  `successful` TINYINT(1) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bandera`.`user_has_oglas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bandera`.`user_has_oglas` (
  `user_id` INT NOT NULL ,
  `oglas_id` INT NOT NULL ,
  PRIMARY KEY (`user_id`, `oglas_id`) ,
  INDEX `fk_user_has_oglas_oglas1_idx` (`oglas_id` ASC) ,
  INDEX `fk_user_has_oglas_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_user_has_oglas_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `bandera`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_oglas_oglas1`
    FOREIGN KEY (`oglas_id` )
    REFERENCES `bandera`.`ad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `bandera` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
