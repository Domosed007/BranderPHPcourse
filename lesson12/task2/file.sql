CREATE DATABASE list_products_db;

use list_products_db;

create table products;

create table products
    (
        Id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(200) NOT NULL,
        Price DECIMAL NOT NULL,
        Season VARCHAR(50)
    );

INSERT INTO products (Name, Price, Season) Values ('Product1',1000,'spring');
INSERT INTO products (Name, Price, Season) Values ('Product2',2000,'summer');