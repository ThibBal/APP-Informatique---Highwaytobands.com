SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`membre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`membre` (
  `id` INT NULL AUTO_INCREMENT,
  `login` VARCHAR(20) NULL,
  `password` VARCHAR(255) NULL,
  `zipcode` VARCHAR(5) NULL,
  `mail` VARCHAR(45) NULL,
  `photo` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`salle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`salle` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `name` VARCHAR(45) NULL,
  `capacity` INT NULL,
  `zipcode` INT NULL,
  `mail` VARCHAR(45) NULL,
  `phone` VARCHAR(10) NULL,
  `adress` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `hours` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `Pseudo_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`artiste`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`artiste` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `name` VARCHAR(45) NULL,
  `style` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `mail` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`concert`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`concert` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `artist` VARCHAR(45) NULL,
  `salle` VARCHAR(45) NULL,
  `date` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `price` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`photo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`photo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `date` VARCHAR(45) NULL,
  `artiste_id` INT NOT NULL,
  `salle_id` INT NOT NULL,
  `concert_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_photo_artiste1_idx` (`artiste_id` ASC),
  INDEX `fk_photo_salle1_idx` (`salle_id` ASC),
  INDEX `fk_photo_concert1_idx` (`concert_id` ASC),
  CONSTRAINT `fk_photo_artiste1`
    FOREIGN KEY (`artiste_id`)
    REFERENCES `mydb`.`artiste` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_photo_salle1`
    FOREIGN KEY (`salle_id`)
    REFERENCES `mydb`.`salle` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_photo_concert1`
    FOREIGN KEY (`concert_id`)
    REFERENCES `mydb`.`concert` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categorie forum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categorie forum` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`topic`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`topic` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `nombre_message` INT NULL,
  `creation` DATE NULL,
  `categorie forum_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_topic_categorie forum1_idx` (`categorie forum_id` ASC),
  CONSTRAINT `fk_topic_categorie forum1`
    FOREIGN KEY (`categorie forum_id`)
    REFERENCES `mydb`.`categorie forum` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contenu` TEXT NULL,
  `date` DATETIME NULL,
  `topic_id` INT NOT NULL,
  `membre_id` INT NOT NULL,
  `salle_id` INT NOT NULL,
  `artiste_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_messages_topic1_idx` (`topic_id` ASC),
  INDEX `fk_messages_membre1_idx` (`membre_id` ASC),
  INDEX `fk_messages_salle1_idx` (`salle_id` ASC),
  INDEX `fk_messages_artiste1_idx` (`artiste_id` ASC),
  CONSTRAINT `fk_messages_topic1`
    FOREIGN KEY (`topic_id`)
    REFERENCES `mydb`.`topic` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_salle1`
    FOREIGN KEY (`salle_id`)
    REFERENCES `mydb`.`salle` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_artiste1`
    FOREIGN KEY (`artiste_id`)
    REFERENCES `mydb`.`artiste` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`extrait`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`extrait` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `duree` DECIMAL(20) NULL,
  `album` VARCHAR(45) NULL,
  `artiste_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_extrait_artiste_idx` (`artiste_id` ASC),
  CONSTRAINT `fk_extrait_artiste`
    FOREIGN KEY (`artiste_id`)
    REFERENCES `mydb`.`artiste` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`avis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`avis` (
  `id` INT NOT NULL,
  `date` DATETIME NULL,
  `commentaire` VARCHAR(45) NULL,
  `note` VARCHAR(45) NULL,
  `membre_id` INT NOT NULL,
  `salle_id` INT NOT NULL,
  `artiste_id` INT NOT NULL,
  `concert_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_avis_membre1_idx` (`membre_id` ASC),
  INDEX `fk_avis_salle1_idx` (`salle_id` ASC),
  INDEX `fk_avis_artiste1_idx` (`artiste_id` ASC),
  INDEX `fk_avis_concert1_idx` (`concert_id` ASC),
  CONSTRAINT `fk_avis_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avis_salle1`
    FOREIGN KEY (`salle_id`)
    REFERENCES `mydb`.`salle` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avis_artiste1`
    FOREIGN KEY (`artiste_id`)
    REFERENCES `mydb`.`artiste` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avis_concert1`
    FOREIGN KEY (`concert_id`)
    REFERENCES `mydb`.`concert` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`message` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contenu` TEXT NULL,
  `sujet` VARCHAR(45) NULL,
  `membre_id` INT NOT NULL,
  `membre_id1` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_message_membre1_idx` (`membre_id` ASC),
  INDEX `fk_message_membre2_idx` (`membre_id1` ASC),
  CONSTRAINT `fk_message_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_membre2`
    FOREIGN KEY (`membre_id1`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`participation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`participation` (
  `id` INT NOT NULL,
  `membre_id` INT NOT NULL,
  `concert_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_participation_membre1_idx` (`membre_id` ASC),
  INDEX `fk_participation_concert1_idx` (`concert_id` ASC),
  CONSTRAINT `fk_participation_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_participation_concert1`
    FOREIGN KEY (`concert_id`)
    REFERENCES `mydb`.`concert` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`suivre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`suivre` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `membre_id` INT NOT NULL,
  `salle_id` INT NOT NULL,
  `artiste_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_suivre_membre1_idx` (`membre_id` ASC),
  INDEX `fk_suivre_salle1_idx` (`salle_id` ASC),
  INDEX `fk_suivre_artiste1_idx` (`artiste_id` ASC),
  CONSTRAINT `fk_suivre_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_suivre_salle1`
    FOREIGN KEY (`salle_id`)
    REFERENCES `mydb`.`salle` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_suivre_artiste1`
    FOREIGN KEY (`artiste_id`)
    REFERENCES `mydb`.`artiste` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
