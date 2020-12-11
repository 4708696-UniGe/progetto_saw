<?php
	/*
	$servername = "http://webdev19.dibris.unige.it/";
	$username = "S4708696";
	$password = "46394394678610";
	$dbname = "S4708696";
	
	*/
	session_start();
	$servername = "localhost";
    $username = "test";
    $password = "1234";
    $dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connessione fallita: " . $conn->connect_error);
	}

	$sql = "CREATE TABLE [IF NOT EXISTS] Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(256),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	echo "Successo tabella";
	} else {
	echo "Error creating table: " . $conn->error;
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$psw = $_POST['password'];

	$firstname = mysqli_real_escape_string($conn, $firstname);
	$lastname = mysqli_real_escape_string($conn, $lastname);
	$email = mysqli_real_escape_string($conn, $email);
	$psw = mysqli_real_escape_string($conn, $psw)


	$conn->close();
?>