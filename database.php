<?php
	//Connect to MySQL
	$servername = "localhost";
	$username = "root";
	$password = ""; 
	$dbname = "talkup";
	$port = 3307;

	// Create connection
	//MySQL provides a procedural interface. 
	//MySQLi provides both object oriented and procedural interface. 
	//MySQLi supports store procedure. MySQL extension does not support stored procedure.
	$con = new mysqli($servername, $username, $password, $dbname, $port);

	// Check connection
	/* if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully"; */
?>