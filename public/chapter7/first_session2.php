<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
// Set session variables
$_SESSION["firstname"] = "Foo";
$_SESSION["username"] = "barFoo";
echo "Session variables are set.";
echo "<br />";
var_dump($_SESSION);
?>
 
</body>
</html>
