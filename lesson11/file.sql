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
    Age INT CHECK(Age>0 AND Age<110)
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

INSERT INTO directors (Name, Surname, Age) VALUES ('Квентин','Торантино',55);
INSERT INTO directors (Name, Surname, Age) VALUES ('Кристофер','Нолан',53);
INSERT INTO directors (Name, Surname, Age) VALUES ('Джеймс','Тобак',45);

INSERT INTO films (Name,Publication_date,DirectorId,Is_famous) VALUES ('Джанго освобожденный',2012,1,true);
INSERT INTO films (Name,Publication_date,DirectorId,Is_famous) VALUES ('Test1',2021,2,false);
INSERT INTO films (Name,Publication_date,DirectorId,Is_famous) VALUES ('Test2',2021,3,false);

--Выбор фильмов, режисер которых известный
SELECT Name FROM films WHERE Is_famous=true;

--Получаем имя, фамилию и воздраст актеров, которым 43 года
SELECT Name, Surname, Age FROM actors WHERE Age=43;

--Меняется дата выхода фильмов, которые были выпущены в 2021, на 2022 год
UPDATE  films SET Publication_date=2022 WHERE Publication_date=2021;