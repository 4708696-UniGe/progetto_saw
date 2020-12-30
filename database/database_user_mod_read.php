<?php

    include 'database_connect.php';



    $fname = $_COOKIE['FIRSTNAME'];

    $sql = "SELECT firstname, lastname, email, phone, company_name, workstation_os, mobile_os, about FROM users WHERE firstname = '".$fname."'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) != 1) {
        echo "Errore interno, contattare l'assistenza " . mysqli_error($conn);
    }
    else {
        $rows = mysqli_fetch_array($res);
        $firstname = $rows[0];
        $lastname = $rows[1];
        $email = $rows[2];
        $phone = $rows[3];
        $company_name = $rows[4];
        $workstation_os = $rows[5];
        $mobile_os = $rows[6];
        $about = $rows[7];
    }







?>