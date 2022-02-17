<?php
$awesome = "Super Awesome!";

$result = strpos ( $awesome, 'G' );
if ($result === false) {
	echo 'Not found';
} else {
	echo 'Found at position ' . $result;
}

// Not found
?>

