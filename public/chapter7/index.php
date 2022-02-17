
<?php
$title = dirname(__FILE__);
$title = explode('/',$title);
if (isset($title[count($title)-1])) {
	$title = $title[count($title)-1];
} else {
	$title = "Home";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
	  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
		<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		<span class="fs-4"><?= $title ?></span>
	  </a>

	  <ul class="nav nav-pills">
	<li class="nav-item"><a href="../index.php" class="nav-link" aria-current="page">Home</a></li>
<?php
$directory = '/var/www';
$scanned_directory = array_diff(scandir($directory), array('..', '.','bootstrap'));
foreach ($scanned_directory as $directory) {
	if (is_dir('/var/www/'.$directory)) {
		if ($title == $directory) {
			$active = "active";
		} else {
			$active = '';
		}
		echo '<li class="nav-item"><a href="http://localhost/'.$directory.'" class="nav-link '.$active.'">'.$directory.'</a></li>';
	}
}
?>
	  </ul>
	</header>
<div>

<?php
$arrFiles = array();
$handle = opendir('.');

if ($handle) {
    while (($entry = readdir($handle)) !== FALSE) {
	    if (str_contains($entry,'php')) {
		    $arrFiles[] = $entry;
	    } else {
		    continue;
	    }
    }
}
foreach ($arrFiles as $arrFile) {
	echo "<a href='$arrFile'>$arrFile</a><br />";
}

closedir($handle);
?>
</div>
<?php
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
?>
  </div>
