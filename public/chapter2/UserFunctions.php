<?php 
trait userFunctions {
	Public function message1() {
		Echo “user message1”;
	}
}

Class UserClass {
	Use userFunctions;
    }

Class UserClass2 {
	Use userFunctions;
}

$user = new UserClass();
$user2 = new UserClass2();
$user->messge1();
$user2->message1();

