<?php
	$servername = "http://webdev19.dibris.unige.it/";
	$username = "S4708696";
	$password = "46394394678610";
	$dbname = "S4708696";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connessione fallita: " . $conn->connect_error);
	}

	$sql = "CREATE TABLE [IF NOT EXISTS] Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(50) NOT NULL,
	email VARCHAR(50),
	password VARCHAR(256),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($conn->query($sql) == TRUE) {
	echo "Successo tabella";
	}else {
	echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>