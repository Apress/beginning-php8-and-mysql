create table IF NOT EXISTS campers(
           id INT NOT NULL AUTO_INCREMENT,
           first_name VARCHAR(100) NOT NULL,
           last_name VARCHAR(40) NOT NULL,
           age INT NOT NULL,
       campId INT default 0,
           created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
           PRIMARY KEY ( id )
);
