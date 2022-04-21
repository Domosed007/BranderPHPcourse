CREATE DATABASE films_db;

USE films_db;

CREATE TABLE Actors
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    NameActor VARCHAR(50) NOT NULL,
    SurnameActor VARCHAR(50) NOT NULL,
    AgeActor INT CHECK(AgeActor>0 AND AgeActor<110)
);

CREATE TABLE Directors
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    NameDirector VARCHAR(50) NOT NULL,
    SurnameDirector VARCHAR(50) NOT NULL,
    AgeDirector INT CHECK(AgeDirector>0 AND AgeDirector<110)
);

CREATE TABLE Films
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    NameFilm VARCHAR(150) NOT NULL,
    Publication_date YEAR NOT NULL,
    ActorId INT,
    DirectorId INT,
    Is_famous BOOL NOT NULL,
    FOREIGN KEY (ActorId) REFERENCES Actors (Id),
    FOREIGN KEY (DirectorId) REFERENCES Directors (Id)
);

INSERT INTO Actors (NameActor, SurnameActor,AgeActor) VALUES ('Доуэн','Джонсон',49);
INSERT INTO Actors (NameActor, SurnameActor,AgeActor) VALUES ('Джонни','Депп',58);
INSERT INTO Actors (NameActor, SurnameActor,AgeActor) VALUES ('Уилл','Смит',43);

INSERT INTO Directors (NameDirector, SurnameDirector, AgeDirector) VALUES ('Квентин','Торантино',55);
INSERT INTO Directors (NameDirector, SurnameDirector, AgeDirector) VALUES ('Кристофер','Нолан',53);
INSERT INTO Directors (NameDirector, SurnameDirector, AgeDirector) VALUES ('Джеймс','Тобак',45);

INSERT INTO Films (NameFilm,Publication_date, ActorId, DirectorId,Is_famous) VALUES ('Джанго освобожденный',2012,1,1,true);
INSERT INTO Films (NameFilm,Publication_date, ActorId, DirectorId,Is_famous) VALUES ('Test1',2021,2,2,false);
INSERT INTO Films (NameFilm,Publication_date, ActorId, DirectorId,Is_famous) VALUES ('Test2',2021,3,3,false);

SELECT F.NameFilm, D.NameDirector, D.SurnameDirector,A.NameActor,A.SurnameActor FROM Films AS F
INNER JOIN Directors AS D ON D.Id=F.DirectorId
INNER JOIN Actors AS A ON A.Id=F.ActorId;