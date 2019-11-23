CREATE DATABASE dogAppDB;

USE dogAppDB;

CREATE TABLE user (
	userID INT AUTO_INCREMENT NOT NULL,
    fName NVARCHAR(255),
    lName NVARCHAR(255),
    dob DATE,
    bio TEXT,
    profilePic VARCHAR(255),
    location NVARCHAR(255),
    userName NVARCHAR(255),
    userPass NVARCHAR(255),
    email NVARCHAR(255),
    PRIMARY KEY (userID),
    INDEX (userID)
);

CREATE TABLE dog (
	dogID INT AUTO_INCREMENT NOT NULL,
    name NVARCHAR(255),
    breed NVARCHAR(255),
    gender VARCHAR(10),
    dob DATE,
    adoptedDate DATE,
    userID INT,
    PRIMARY KEY (dogID),
    INDEX (dogID),
    FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE group_ (
	groupID INT AUTO_INCREMENT NOT NULL,
    name NVARCHAR(255),
    description TEXT,
    profilePic VARCHAR(255),
    PRIMARY KEY (groupID),
    INDEX (groupID)
);

CREATE TABLE event (
	eventID INT AUTO_INCREMENT NOT NULL,
    description TEXT,
    location NVARCHAR(255),
    time DATETIME,
    isPrivate BOOL,
    groupID INT,
    PRIMARY KEY (eventID),
    INDEX (eventID),
    FOREIGN KEY (groupID) REFERENCES group_(groupID)
);

CREATE TABLE interest (
	interestID INT AUTO_INCREMENT NOT NULL,
    name NVARCHAR(255),
    PRIMARY KEY (interestID),
    INDEX (interestID)
);

CREATE TABLE userGroup (
	userID INT,
    groupID INT,
    isAdmin BOOL,
    PRIMARY KEY (userID, groupID),
    INDEX (userID, groupID),
    FOREIGN KEY (userID) REFERENCES user(userID),
    FOREIGN KEY (groupID) REFERENCES group_(groupID)
);

CREATE TABLE userInterest (
	userID INT,
    interestID INT,
	PRIMARY KEY (userID, interestID),
    INDEX (userID, interestID),
    FOREIGN KEY (userID) REFERENCES user(userID),
    FOREIGN KEY (interestID) REFERENCES interest(interestID)
);

CREATE TABLE groupInterest (
	groupID INT,
    interestID INT,
	PRIMARY KEY (groupID, interestID),
    INDEX (groupID, interestID),
    FOREIGN KEY (groupID) REFERENCES group_(groupID),
    FOREIGN KEY (interestID) REFERENCES interest(interestID)
);

CREATE TABLE userEvent (
	userID INT,
    eventID INT,
    isHost BOOL,
    PRIMARY KEY (userID, eventID),
    INDEX (userID, eventID),
    FOREIGN KEY (userID) REFERENCES user(userID),
    FOREIGN KEY (eventID) REFERENCES event(eventID)
);

CREATE USER 'dogAppUser'@'localhost'
	IDENTIFIED WITH mysql_native_password
	BY '123456';
GRANT ALL PRIVILEGES ON dogappdb.* TO 'dogAppUser'@'localhost';
