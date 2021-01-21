<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    // Query for create users table if not exist //

    $sql_user = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE,
        pass VARCHAR(256),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        phone BIGINT DEFAULT 0,
        company_name VARCHAR(50),
        workstation_os VARCHAR(50),
        mobile_os VARCHAR(20),
        about TEXT,
        admin BOOLEAN DEFAULT 0 NULL,
        subscription VARCHAR(10) DEFAULT '--'
        )";

    $sql_ticket = "CREATE TABLE IF NOT EXISTS ticket (
        email VARCHAR(50) PRIMARY KEY ,
        opening_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        device VARCHAR(50),
        os VARCHAR(50),
        description TEXT
        )";

        // Tabella chat_message:
	    $sql_chat_message = "CREATE TABLE IF NOT EXISTS `chat_message` (
		`chat_message_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`to_user_id` int(11) NOT NULL,
		`from_user_id` int(11) NOT NULL,
		`chat_message` text NOT NULL,
		`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`status` int(1) NOT NULL
	)";



	// Tabella login_details:
	$sql_login_details = "CREATE TABLE IF NOT EXISTS `login_details` (
		  `login_details_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `user_id` int(11) NOT NULL,
		  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	)";

	
	if (mysqli_query($conn, $sql_chat_message) === TRUE) {
	}else {
	echo "Error creating table: " . mysqli_error($conn) . '\n';
	}

    
	if (mysqli_query($conn, $sql_login_details) === TRUE) {
	}else {
	echo "Error creating table: " . mysqli_error($conn) . '\n';
	}







?>