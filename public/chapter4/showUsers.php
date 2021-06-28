<?php

require_once('db.php');

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$query = "SELECT * FROM users";

$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
    echo "Name: {$row['first_name']} {$row['last_name']} = Created: {$row['created']} </br>";
}

