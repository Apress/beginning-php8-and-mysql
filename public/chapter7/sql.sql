create table users(
	   id INT NOT NULL AUTO_INCREMENT,
	   first_name VARCHAR(100) NOT NULL,
	   last_name VARCHAR(40) NOT NULL,
	   created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
	   PRIMARY KEY ( id )
);
INSERT INTO users (first_name,last_name) values ('tom','hanks');
INSERT INTO users (first_name,last_name) values ('billy','mitchell');
INSERT INTO users (first_name,last_name) values ('mega','man');

