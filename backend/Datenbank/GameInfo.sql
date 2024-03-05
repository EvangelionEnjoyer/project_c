CREATE TABLE tblGameInfo{
    idGameId INT, 
    dtTitel VARCHAR(50),
    dtGenre VARCHAR(30),
    dtVeröffentlichungsdatum DATE,
    fiPubId,
    FOREIGN KEY(fiPubId) REFERENCES tblPublisher(idPubId)
};

CREATE TABLE tblPublisher{
    idPubId INT,
    dtName VARCHAR(40),
    dtGrundjahr INT,
    dtHauptsitz VARCHAR(50),
    dtWebseite VARCHAR(255)
};