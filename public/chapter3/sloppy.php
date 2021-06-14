<?php

function getUser($id = null) {
    if ($id) {
        return $id;
    } else {
        return rand();
    }
}

$user = getUser();

Function showUserName() {
	$user = getUser(4);
	var_dump($user);
}
var_dump($user);
showUserName();

