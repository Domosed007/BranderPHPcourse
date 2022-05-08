CREATE DATABASE productsDB;

use productsDB;

CREATE TABLE products(
    Id INT PRIMARY KEY,
    ProductName VARCHAR(100) NOT NULL,
    Price DECIMAL NOT NULL,
    Season VARCHAR(100) NOT NULL
);

INSERT INTO products(Id,ProductName,Price,Season) VALUES (0,'strawberry',25,'spring');
INSERT INTO products(Id,ProductName,Price,Season) VALUES (1,'apple',15,'autumn');
INSERT INTO products(Id,ProductName,Price,Season) VALUES (2,'tomato',10,'summer');