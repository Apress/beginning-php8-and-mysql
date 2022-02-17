<?php

require_once('db.php');

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$query = "Select * from users";
$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
    print $row['id'].' - '.$row['first_name'].' - '.$row['last_name'].' - '.$row['created'].'<br />';
}

