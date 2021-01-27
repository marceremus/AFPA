-- MySQL Script generated by MySQL Workbench
-- Sun Mar 29 22:10:25 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema studentTableRelation
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `studentTableRelation` ;

-- -----------------------------------------------------
-- Schema studentTableRelation
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `studentTableRelation` DEFAULT CHARACTER SET utf8 ;
USE `studentTableRelation` ;

-- -----------------------------------------------------
-- Table `studentTableRelation`.`suppliers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `studentTableRelation`.`suppliers` ;

CREATE TABLE IF NOT EXISTS `studentTableRelation`.`suppliers` (
  `SupplierID` INT(11) NOT NULL,
  `SupplierName` VARCHAR(38) NOT NULL,
  `ContactName` VARCHAR(26) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `City` VARCHAR(13) NOT NULL,
  `PostalCode` VARCHAR(8) NOT NULL,
  `Country` VARCHAR(11) NOT NULL,
  `Phone` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`SupplierID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `studentTableRelation`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `studentTableRelation`.`products` ;

CREATE TABLE IF NOT EXISTS `studentTableRelation`.`products` (
  `ProductID` VARCHAR(20) NOT NULL,
  `ProductName` VARCHAR(32) NULL DEFAULT NULL,
  `SupplierID` INT(11) NULL DEFAULT NULL,
  `CategoryID` INT(11) NULL DEFAULT NULL,
  `Unit` VARCHAR(20) NULL DEFAULT NULL,
  `Price` DECIMAL(6,2) NULL DEFAULT NULL,
  `suppliers_SupplierID` INT(11) NOT NULL,
  PRIMARY KEY (`ProductID`, `suppliers_SupplierID`),
  INDEX `fk_products_suppliers1_idx` (`suppliers_SupplierID` ASC),
  CONSTRAINT `fk_products_suppliers1`
    FOREIGN KEY (`suppliers_SupplierID`)
    REFERENCES `studentTableRelation`.`suppliers` (`SupplierID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `studentTableRelation`.`customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `studentTableRelation`.`customers` ;

CREATE TABLE IF NOT EXISTS `studentTableRelation`.`customers` (
  `CustomerID` INT(11) NOT NULL,
  `CustomerName` VARCHAR(36) NOT NULL,
  `ContactName` VARCHAR(20) NOT NULL,
  `Address` VARCHAR(46) NOT NULL,
  `City` VARCHAR(15) NOT NULL,
  `PostalCode` VARCHAR(9) NULL DEFAULT NULL,
  `Country` VARCHAR(11) NOT NULL,
  `products_ProductID` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`CustomerID`, `products_ProductID`),
  INDEX `fk_customers_products_idx` (`products_ProductID` ASC),
  CONSTRAINT `fk_customers_products`
    FOREIGN KEY (`products_ProductID`)
    REFERENCES `studentTableRelation`.`products` (`ProductID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;