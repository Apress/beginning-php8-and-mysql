<?php
// Parent class
abstract class Candy {
  public $name;
  public function __construct($name) {
	$this->name = $name;
  }
  abstract public function slogan() : string;
}

// Child classes
class Skittle extends Candy {
  public function slogan() : string {
    return "$this->name! - Taste the rainbow!\n";
  }
}

class Twix extends Candy {
  public function slogan() : string {
    return "$this->name - Which side are you?\n";
  }
}

class KitKat extends Candy {
  public function slogan() : string {
    return "$this->name - Gimmie a break!\n";
  }
}

// Create objects from the child classes
$skittle = new Skittle('Skittles');
print $skittle->slogan();

$kitkat = new KitKat('KitKat');
print $kitkat->slogan();
?> 

