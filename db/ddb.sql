/*Database created by:ANDRE FREEMAN
Date:10/22/2017
DnJ REAL ESTATE DATABASE SCHEMA*/

CREATE DATABASE RealEs;

CREATE TABLE Home(
    HID INT UNIQUE AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    Length INT NOT NULL,
    Width INT NOT NULL,
    Floors INT NOT NULL,
    Des TEXT NOT NULL,
    Price INT NOT NULL,
    Currency VARCHAR(3) NOT NULL,
    IMG TINYTEXT NOT NULL,
    UID INT UNIQUE NOT NULL, /*----NEED TO ADD A column to specify which user was the uplaod uploaded by*/
    H_STATUS VARCHAR(10) NOT NULL,  /*--- Indicate house for RENT/SELLING/SOLD/RENTOUT*/
    PRIMARY KEY(HID)
);
ALTER TABLE Homes AUTO_INCREMENT=10001;

CREATE TABLE Users( /*Login Table*/
    UID INT UNIQUE AUTO_INCREMENT,/*USER ID*/
    Username VARCHAR(50) NOT NULL,
    Fname VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    PWord VARCHAR(50) NOT NULL,
    Credential VARCHAR(2) NOT NULL,/*DA/OW/PU/PR*/
    PRIMARY KEY(Credential,UID) /*PLease Figure ou thow to make a joint key and get it to increment*/
);/*NEEED TO LOOK UP TRIGUES IN mySQL TO DO THIS*/
ALTER TABLE Users AUTO_INCREMENT=70001;

/*Create a Credential table to link abbreviated cred to actual Credential*/
CREATE TABLE Credentials(
    Credential VARCHAR(2) NOT NULL,
    Description VARCHAR(50) NOT NULL,/*Whether DA=DBAdmin/OW=Owner/PU=Power User/PR=Portal*/
    PRIMARY KEY(Credentials)
);

/*NEED TO ADD RELATIONSHIPS BEFORE THE DATA INSERTION HERE*/


INSERT INTO Credentials(Credential,Description) VALUES
("DA","Database Admin"),
("OW","Owner"),
("PU","Power User"),
("PR","Portal");



/*TESTValues*/
INSERT INTO Users (Username,Fname,Lname,Pword,Credential) VALUES
("Admin","Harry","Potter","1234","DA");
INSERT INTO Users (Username,Fname,Lname,Pword,Credential) VALUES
("Admin","Djavan","Martin","4321","DA");/*DOesnt WORK HOW I WANT IT TO WORK YET*/

INSERT INTO Homes (HID,Title,Length,Width,Floors,Des,Price,Currency,IMG,UID,H_STATUS) VALUES
("","BedRock House",300,400,3,"An amazing choose for porspect families hoping to build a sturdy, comfortable and fulfilling life",250000,"USD","h4.jpg","","SELLING");
INSERT INTO Homes (HID,Title,Length,Width,Floors,Des,Price,Currency,IMG,UID,H_STATUS) VALUES
();