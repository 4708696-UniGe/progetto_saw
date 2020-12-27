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

    $fname = $_COOKIE['FIRSTNAME'];

    $sql = "SELECT email FROM users WHERE firstname = '$fname'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) != 1) {
        echo "Errore interno, contattare l'assistenza ".mysqli_error($conn);
    }
    else {
        $rows = mysqli_fetch_array($res);
        $email = $rows[0];
    }







?>