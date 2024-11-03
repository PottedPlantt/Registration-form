CREATE DATABASE Registration_Form;

USE Registration_Form;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    CHECK (CHAR_LENGTH(username) > 5),
    CHECK (CHAR_LENGTH(password) > 5)
);
