
<?php
$emailErr= null;
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

if (!$emailErr) {
echo "Thank you {$name}. I will email you at {$email}";
} else {
	echo $emailErr;
}

?>
<br />
<a href="basicForm.php?name=<?= $name ?>&email=<?= $email?>">back</a>
