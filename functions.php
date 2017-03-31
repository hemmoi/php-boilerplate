<?php

	session_start();
	$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

	if (!$link) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	if ($_GET['function'] == "logout") {
		session_unset();
		session_destroy();
	}

?>
