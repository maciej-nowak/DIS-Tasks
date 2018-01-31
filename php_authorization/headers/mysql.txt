CREATE DATABASE pisidatabase;
USE pisidatabase;

CREATE TABLE user
(
login varchar(40) PRIMARY KEY NOT NULL,
password varchar(40) NOT NULL,
first_name varchar(40),
last_name varchar(40)
);