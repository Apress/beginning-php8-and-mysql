<?php

require_once('db.php');
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$query = "Select * from users";
$result = $mysqli->query($query);
if (!$result) {
    echo 'Creating table "USERS"';
$query = 'create table IF NOT EXISTS users(
	   id INT NOT NULL AUTO_INCREMENT,
	   first_name VARCHAR(100) NOT NULL,
	   last_name VARCHAR(40) NOT NULL,
	   created DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP default current_timestamp,
	   PRIMARY KEY ( id )
)';
$result = $mysqli->query($query);
echo 'Seeing Users into table..1';
$query = "INSERT INTO users (first_name,last_name) values ('tom','hanks')";
$result = $mysqli->query($query);
echo '..2';
$query = "INSERT INTO users (first_name,last_name) values ('billy','mitchell')";
$result = $mysqli->query($query);
echo '..3<br />';
$query = "INSERT INTO users (first_name,last_name) values ('mega','man')";
$result = $mysqli->query($query);
echo 'Users added<br />';

$query = "Select * from users";
$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
    print $row['id'].' - '.$row['first_name'].' - '.$row['last_name'].' - '.$row['created'].'<br />';
}

} else {
    echo 'No Need';
}
