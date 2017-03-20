<?php

/*
CREATE TABLE UserAddres (
Client_id INT PRIMARY KEY,
city VARCHAR(100) NOT NULL,
street VARCHAR(100) NOT NULL,
house_nr VARCHAR(10) NOT NULL,
); 

CREATE TABLE ClientAddress (
client_id INT PRIMARY KEY,
city VARCHAR(100) NOT NULL,
street VARCHAR(100) NOT NULL,
house_nr VARCHAR(10) NOT NULL,
FOREIGN KEY(Client_id) REFERENCES Client(id) ON DELETE CASCADE
);


INSERT INTO ClientAddress VALUES (1,'New York', '5fth Avenue', '9');
INSERT INTO ClientAddress VALUES (2,'New York', 'Linclon', '15' );
INSERT INTO ClientAddress VALUES (1,'New York', 'W14str', '20');
 
 SELECT * FROM Client JOIN ClientAddress ON
 Client.id = ClientAddress.client_id
WHERE Client.id = 1;
 */