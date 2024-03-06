CREATE TABLE tblGameInfo (
    idGameId INT PRIMARY KEY AUTO_INCREMENT, 
    dtTitel VARCHAR(50),
    dtGenre VARCHAR(30),
    dtVeröffentlichungsdatum DATE,
    dtPGI VARCHAR(5),
    dtReleasedate DATE,
    fiPubId INT,
    FOREIGN KEY(fiPubId) REFERENCES tblPublisher(idPubId)
);

CREATE TABLE tblPublisher (
    idPubId INT PRIMARY KEY AUTO_INCREMENT,
    dtName VARCHAR(40),
    dtGrundjahr INT,
    dtHauptsitz VARCHAR(50),
    dtWebseite VARCHAR(255)
);

CREATE TABLE USER (
    IdUser INT PRIMARY KEY AUTO_INCREMENT,
    dtVorname VARCHAR(30),
    dtNachname VARCHAR(30),
    dtFavGame VARCHAR(30),
    dtPasswort VARCHAR(255)
);
