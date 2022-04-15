<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Here are the variables:<br />";
var_dump($_SESSION);
echo "<br /><br />";
// remove all session variables
session_unset();
echo "Here are the variables after session_unset:<br />";
var_dump($_SESSION);
echo "<br /><br />";

// destroy the session
session_destroy();
echo "Here are the variables after session_destroy:<br />";
var_dump($_SESSION);
echo "<br /><br />";
?>

</body>
</html>
