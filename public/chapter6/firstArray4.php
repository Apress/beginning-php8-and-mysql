<?php
$array = array(
    "bar" => "foo",
    24    => 42,
    "multi" => array(
         "dimensional" => array(
             "array" => "foobar"
         )
    )
);

var_dump($array["bar"]);
var_dump($array[24]);
var_dump($array["multi"]["dimensional"]["array"]);
