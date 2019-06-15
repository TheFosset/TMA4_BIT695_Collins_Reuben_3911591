
/*Creates the table Board Games*/.

CREATE TABLE `tma2`.`Board Games` 
( 
`Member ID` VARCHAR(255) NOT NULL ,
`First name` VARCHAR(255) NOT NULL ,
`Surname` VARCHAR(255) NOT NULL ,
`Board Game` VARCHAR(255) NOT NULL ) 
ENGINE = InnoDB;

/* Creates the table board games assigned to players */.

CREATE TABLE `tma2`.`Board games assigned to playes` ( 
`Member ID` VARCHAR(255) NOT NULL , 
`First name` VARCHAR(255) NOT NULL , 
`Boardgame` VARCHAR(255) NOT NULL , 
`Date` VARCHAR(255) NOT NULL , `Venue` VARCHAR(255) NOT NULL ) 
ENGINE = InnoDB;

/* Creates table schedule */

CREATE TABLE `tma2`.`schedule` ( 
`Day` VARCHAR(255) NOT NULL , 
`Date` VARCHAR(255) NOT NULL , 
`Venue` VARCHAR(255) NOT NULL ,  ) 
ENGINE = InnoDB;

/* Creates table Scoring */

CREATE TABLE `tma2`.`Scoring` ( 
`Game` VARCHAR(255) NOT NULL , 
`Score` VARCHAR(255) NOT NULL , 
`Member` VARCHAR(255) NOT NULL , 
`Name` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;

