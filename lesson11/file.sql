CREATE DATABASE films_db;

USE films_db;

CREATE TABLE actors
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Surname VARCHAR(50) NOT NULL,
    Age INT CHECK(Age>0 AND Age<110)
);

CREATE TABLE directors
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Surname VARCHAR(50) NOT NULL,
    Age INT CHECK(Age>0 AND Age<110),
);

CREATE TABLE films
(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(150) NOT NULL,
    Publication_date YEAR NOT NULL,
    ActorId INT,
    DirectorId INT,
    Is_famous BOOL NOT NULL,
    FOREIGN KEY (ActorId) REFERENCES actors (Id),
    FOREIGN KEY (DirectorId) REFERENCES directors (Id)
);

INSERT INTO actors (Name, Surname,Age) VALUES ('Доуэн','Джонсон',49);
INSERT INTO actors (Name, Surname,Age) VALUES ('Джонни','Депп',58);
INSERT INTO actors (Name, Surname,Age) VALUES ('Уилл','Смит',43);

INSERT INTO directors (Name, Surname, Age, Is_famous) VALUES ('Квентин','Торантино',55, true);
INSERT INTO directors (Name, Surname, Age, Is_famous) VALUES ('Кристофер','Нолан',53, true);
INSERT INTO directors (Name, Surname, Age, Is_famous) VALUES ('Джеймс','Тобак',45, false);

INSERT INTO films (Name,Publication_date,DirectorId) VALUES ('Джанго освобожденный',2012,1);
INSERT INTO films (Name,Publication_date,DirectorId) VALUES ('Test1',2021,2);
INSERT INTO films (Name,Publication_date,DirectorId) VALUES ('Test2',2021,3);