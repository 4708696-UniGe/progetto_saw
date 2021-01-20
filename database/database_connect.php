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
        about TEXT
    )";

    if (mysqli_query($conn, $sql_user) === TRUE) {
    printf("Table myCity successfully created.\n");
    }

    $sql_ticket = "CREATE TABLE IF NOT EXISTS ticket (
        email VARCHAR(50) PRIMARY KEY ,
        opening_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        device VARCHAR(50),
        os VARCHAR(50),
        description TEXT
    )";

    if (mysqli_query($conn, $sql_ticket) === TRUE) {
    printf("Table myCity successfully created.\n");
    }

   




?>