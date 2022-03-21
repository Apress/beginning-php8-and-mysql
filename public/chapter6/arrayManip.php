<?php
$arr = array(5 => 1, 12 => 2);
var_dump($arr);
echo "<br />";

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script
var_dump($arr);
echo "<br />";

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
var_dump($arr);
echo "<br />";
                
unset($arr[5]); // This removes the element from the array
var_dump($arr);
echo "<br />";

unset($arr);    // This deletes the whole array
echo "<br /> Fatal error because it does not exist";

var_dump(arr);
