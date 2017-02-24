CREATE DATABASE IF NOT EXISTS bookmark;

USE bookmark;

# USER TABLE
CREATE TABLE IF NOT EXISTS user (
id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
name CHAR(16) NOT NULL,
password CHAR(41) NOT NULL)
engine = innodb;
