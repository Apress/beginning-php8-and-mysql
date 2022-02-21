<?php
if (isset($_GET)) {
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
	}
	if (isset($_GET['email']) {
		$email = $_GET['email'];
	}
}

$name != '' ? $name : ''; 
$email != '' ? $email : ''; 
?>

<html>
<body>
<form action="functions.php" method="post">
Name: <input type="text" name="name" value="<?= $name; ?>"><br>
E-mail: <input type="text" name="email" value="<?= $email; ?>"><br>
<input type="submit">
</form>
</body>
</html>

