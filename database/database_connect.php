<?php
    session_start();
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
        email VARCHAR(50),
        pass VARCHAR(256),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        phone BIGINT,
        company_name VARCHAR(50),
        workstation_os VARCHAR(50),
        mobile_os VARCHAR(20),
        about TEXT
        )";

?>