<?php 
trait userFunctions {
	Public function message1() {
		print "user message1\n";
	}
}

Class UserClass {
	Use userFunctions;
}

Class UserClass2 {
	Use userFunctions;
}
$user = new UserClass();
$user->message1();

$user2 = new UserClass2();
$user2->message1();

