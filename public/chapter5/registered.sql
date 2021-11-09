create table IF NOT EXISTS registered(
           id INT NOT NULL AUTO_INCREMENT,
	   camper_id INT NOT NULL,
           camp_id INT NOT NULL,
           registered INT NOT NULL,
           paid INT NOT NULL,
           created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
           PRIMARY KEY ( id )
);
