<?php
include '../database/database_connect.php';

if (mysqli_query($conn, $sql_ticket) === TRUE) {
}else {
    echo "Error creating table: " . mysqli_error($conn) . '\n';
}

if(isset($_POST['description'])){
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $os = $_POST['os'];
    $timestamp = date("Y-m-d H:i:s");

    if ($_POST['os'] == 'Windows' || $_POST['os'] == 'Linux' || $_POST['os'] == 'mac OS') {
        $device = 'desktop';
    }
    elseif ($_POST['os'] == 'Android') {
        $device = 'mobile';
    }
    $sql_t = "INSERT INTO ticket (firstname, lastname, email, opening_date, device, os, description)
			VALUES ('" . $_SESSION["FIRSTNAME"] . "', '" . $_SESSION["LASTNAME"] . "', '" . $_SESSION["EMAIL"] . "', '" . $timestamp . "', '" . $device . "', '" . $_POST['os'] . "', '" . $_POST['description'] . "');";
    $res = mysqli_query($conn, $sql_t);
    //echo mysqli_num_rows($res);

    if(mysqli_affected_rows($conn) != 1){
        echo "Attenzione c'è stato un problema nell'inserimento. ".mysqli_error($conn);
    }
    else{

            header("Location: ../php/control_panel_user.php");
            exit();
    }
}