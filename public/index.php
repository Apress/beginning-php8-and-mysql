<?php

$directory = '/var/www';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
foreach ($scanned_directory as $directory) {
    if (is_dir('/var/www/'.$directory)) {
        echo '<a href="http://localhost/'.$directory.'"><h2>'.$directory.'</h2></a><br />';
    }
}
try {
    echo '<br />';
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'mysql-db';
    $dbname = 'beginningPHP';
    $user = 'user';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
