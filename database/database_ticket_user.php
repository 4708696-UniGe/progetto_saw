<?php

include 'database_connect.php';

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$sql_show_user_ticket = "SELECT opening_date, device, os, description FROM ticket WHERE email='{$_SESSION["EMAIL"]}'";

    if (mysqli_query($conn, $sql_ticket) === TRUE) {
    }else {
        echo "Error creating table: " . mysqli_error($conn) . '\n';
    }

    $res = mysqli_query($conn, $sql_show_user_ticket);
    if (mysqli_affected_rows($conn) != 1) {
    }
    else{
        $rows = mysqli_fetch_array($res);

    }

?>