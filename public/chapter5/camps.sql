create table IF NOT EXISTS camps(
           id INT NOT NULL AUTO_INCREMENT,
           camp_name VARCHAR(100) NOT NULL,
           size INT NOT NULL,
           created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
           PRIMARY KEY ( id )
);
