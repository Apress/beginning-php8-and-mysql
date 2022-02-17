<!DOCTYPE html>
<html lang="en">
<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Beginning PHP 8 and Mysql</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="../chapter1/" class="nav-link">Chapter 1</a></li>
        <li class="nav-item"><a href="../chapter2/" class="nav-link active">Chapter 2</a></li>
        <li class="nav-item"><a href="../chapter3/" class="nav-link">Chapter 3</a></li>
        <li class="nav-item"><a href="../chapter4/" class="nav-link">Chapter 4</a></li>
        <li class="nav-item"><a href="../chapter5/" class="nav-link">Chapter 5</a></li>
        <li class="nav-item"><a href="../chapter6/" class="nav-link">Chapter 6</a></li>
        <li class="nav-item"><a href="../chapter7/" class="nav-link">Chapter 7</a></li>
        <li class="nav-item"><a href="../chapter8/" class="nav-link">Chapter 8</a></li>
      </ul>
    </header>

<?php
$arrFiles = array();
$handle = opendir('.');

if ($handle) {
    while (($entry = readdir($handle)) !== FALSE) {
	    if ($entry != '.' && $entry != '..') {
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
