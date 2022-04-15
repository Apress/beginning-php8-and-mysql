<?php 
// to Start a PHP session
session_start();
?>
<html>
<body>
	<div class="container">
			<form method="post" action="">
				<div id="div_login">
						<h1>Login</h1>
						<div>
							<input type="text" class="textbox" id="first_name" name="first_name" placeholder="first_name" />
						</div>
						<div>
							<input type="password" class="textbox" id="password" name="password" placeholder="Password"/>
						</div>
						<div>
							<input type="submit" value="Submit" name="submit" id="submit" />
						</div>
				</div>
			</form>
	</div>

	<?php
		// DB Host name
		$host = "mysql-db";

		// DB User
		$user = "user";

		// DB Password
		$password = "pass";

		// Database name
		$db = "beginningPHP";

		$connection = mysqli_connect($host, $user, $password, $db);

		// If the connection fails
		if (!$connection) {

			// Display message and terminate script
  			die("Connection failed: " . mysqli_connect_error());
		}

		// If the submit button is pressed
		if(isset($_POST['submit'])){

			// Escape special characters in a string
    			$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    			$password = mysqli_real_escape_string($connection, $_POST['password']);

			// If username and password are not empty
    			if ($first_name != "" && $password != ""){

				// Query database to find user with matching username and password
        			$query = "select count(*) as countUser from users where first_name='".$first_name."' and password='".$password."'";

				// Store query result
        			$result = mysqli_query($connection, $query);

				// Fetch row as associative array
        			$row = mysqli_fetch_array($result);

				// Get number of rows
        			$count = $row['countUser'];

				// If number of row is more than zero
        			if($count > 0){

					// Set matched user as current user
            				$_SESSION['first_name'] = $first_name;
							$_SESSION['timestamp'] = date("h:i:sa");

					// Display success message
	    				echo "You are logged in!";
							if (isset($_SESSION)) {
								echo "<br /><br />";
								print_r($_SESSION);
							}

				// Else if number of row is less than zero
        			} else {
					
					// Display failed message
            				echo "Error! Invalid first_name and password.";
        			}

    			}

		}
	?>
</body>
</html>
