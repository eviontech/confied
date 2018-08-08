<?php
	 $host = "localhost";
	 $database_username = "root";
	 $database_password = "";
	
	// $host = "localhost";
	// $database_username = "eviontec_cc";
	// $database_password = "Evion_1234";

	$conn = mysqli_connect($host, $database_username, $database_password);
	if (!$conn) {
		die('Not connected : ');
	}

	// make cc the current db
	$db_selected = mysqli_select_db($conn, "cc");

	if (!$db_selected) {
		echo mysqli_error($conn);
	}
?>