<?php

/*
CREATE TABLE Screenings (
    id INT AUTO_INCREMENT,
    movie_id INT NOT NULL,
    cinema_id INT NOT NULL,
    date_time DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(movie_id) REFERENCES Movies(id),
    FOREIGN KEY(cinema_id) REFERENCES Cinemas(id)
);
 */