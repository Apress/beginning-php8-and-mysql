<?php
$myArray[0] = "first";
$myArray[1] = "second";
$myArray[2] = "3rd";

var_dump($myArray);
unset($myArray);


$myArray['fruit'] = "apple";
$myArray['vegetable'] = "carrot";
$myArray['color'] = "blue";

var_dump($myArray);
unset($myArray);

$strangestThings['season1']['episode1'] = 'The Beginnig';
$strangestThings[0][0] = 'The Beginning';
$strangestThings['season1']['episode3'] = 'The Third Episode';

var_dump($strangestThings);

?>

