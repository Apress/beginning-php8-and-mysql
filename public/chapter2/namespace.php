<?php
Namespace Pants;

Class PantsMaker {

Public function pantsLabel($size, $color, $name) {
		$label = "These pants are size: $size, color: $color named: $name";
	Return $label;
}
}

$thesePants = new PantsMaker();
Echo $thesePants->pantsLabel('12','blue','leeevi');

