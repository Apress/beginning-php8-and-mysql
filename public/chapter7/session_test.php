<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Firstname is " . $_SESSION["firstname"] . ".<br>";
echo "Username is " . $_SESSION["username"] . ".";
?>

</body>
</html>
