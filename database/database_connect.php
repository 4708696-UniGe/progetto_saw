<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    $servername = "localhost";
    $username = "S4708696";
    $password = "46394394678610";
    $dbname = "S4708696";

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
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL ,
        opening_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        device VARCHAR(50),
        os VARCHAR(50),
        description TEXT
        )";

    $sql_cart = "CREATE TABLE IF NOT EXISTS cart (
       email VARCHAR(50) PRIMARY KEY,
       product_code VARCHAR(10)
    )";

    $sql_products = "CREATE TABLE IF NOT EXISTS products (
      name varchar(30) NOT NULL,
      code varchar(10) NOT NULL PRIMARY KEY,
      price double(5,2) NOT NULL
    )";



?>