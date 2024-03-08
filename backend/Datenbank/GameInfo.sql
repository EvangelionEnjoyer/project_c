CREATE TABLE tblPublisher (
    idPubblisherNumber INT PRIMARY KEY AUTO_INCREMENT,
    dtName VARCHAR(40),
    dtFoundingDate DATE,
    dtHeadquarters VARCHAR(50),
    dtWebsite VARCHAR(255),
);
CREATE TABLE tblDevelopper (
    idDevelopperNumber INT PRIMARY KEY AUTO_INCREMENT,
    dtName VARCHAR(40),
    dtFoundingDate DATE,
    dtHeadquarters VARCHAR(50),
    dtWebsite VARCHAR(255),
);
CREATE TABLE tblGameInfo (
    idGameNumber INT PRIMARY KEY AUTO_INCREMENT, 
    dtGameName VARCHAR(50),
    dtGenre VARCHAR(50),
    dtPGI VARCHAR(5),
    dtReleasedate DATE,
    fiPublisherNumber INT,
    FOREIGN KEY(fiPublisherNumber) REFERENCES tblPublisher(idPublisherNumber)
);

CREATE TABLE tblUser (
    idUserName INT PRIMARY KEY AUTO_INCREMENT,
    dtFirstName VARCHAR(30),
    dtLastName VARCHAR(30),
    dtFavGame VARCHAR(30),
    dtPasswort VARCHAR(255)
);

CREATE TABLE tblDeveloping (
    fiDeveloperNumber INT,
    fiGameNumber INT,
    FOREIGN KEY(fiDeveloperNumber) REFERENCES tblDevelopper(idDevelopperNumber)
    FOREIGN KEY(fiGameNumber) REFERENCES tblGameInfo(idGameNumber)
);
