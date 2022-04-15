<?php

require_once('db.php');
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$query = 'create table IF NOT EXISTS users(
	   id INT NOT NULL AUTO_INCREMENT,
	   first_name VARCHAR(100) NOT NULL,
	   last_name VARCHAR(40) NOT NULL,
	   password VARCHAR(10) NOT NULL,
	   created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
	   PRIMARY KEY ( id )
)';
$result = $mysqli->query($query);

$query = "Select * from users";
$result = $mysqli->query($query);
if ($result->num_rows == 0) {
	echo 'Seeing Users into table..1';
	$query = "INSERT INTO users (first_name,last_name,password) values ('tom','hanks','1234')";
	$result = $mysqli->query($query);
	echo '..2';
	$query = "INSERT INTO users (first_name,last_name,password) values ('billy','mitchell','1234')";
	$result = $mysqli->query($query);
	echo '..3<br />';
	$query = "INSERT INTO users (first_name,last_name,password) values ('mega','man','1234')";
	$result = $mysqli->query($query);
	echo 'Users added<br />';
} else {
	echo "data already added<br /><br />";
}

$query = "Select * from users";
$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
	print $row['id'].' - '.$row['first_name'].' - '.$row['last_name'].' - '. $row['password'].' - '.$row['created'].'<br />';
}
