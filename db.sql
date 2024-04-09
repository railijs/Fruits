CREATE DATABASE Fruits;
USE Fruits;
SELECT * FROM fruits;

 CREATE TABLE fruits (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
calories INT NOT NULL 
); 

 INSERT INTO fruits
(name, calories)
 VALUES
("Apple", 50),
("Banana", 110);