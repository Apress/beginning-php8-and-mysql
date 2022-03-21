<?php
$cars = array (
  array("Subaru",21,17),
  array("Toyota",13,12),
  array("Lexus",6,8),
  array("Ford",14,10)
);

echo $cars[0][0].": In available: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In available: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In available: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In available: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row #$row -- {$cars[$row][0]}</b></p>";
  echo "<ul>";
  for ($col = 1; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
