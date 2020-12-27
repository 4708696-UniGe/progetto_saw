<?php

    include 'database_connect.php';

    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }


    if(isset($_POST[])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $workstation_os = mysqli_real_escape_string($conn, $_POST['workstation_os']);
        $mobile_os = mysqli_real_escape_string($conn, $_POST['mobile_os']);
        $about = mysqli_real_escape_string($conn, $_POST['about']);

        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_e = mysqli_query($conn, $sql_e);

        $sql_reg = "INSERT INTO users (firstname, lastname, email, phone, company_name, workstation_os, mobile_os, about)
            VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$phone."', '".$company_name."', '".$workstation_os."', '".$mobile_os."', '".$about."');";

        $res = mysqli_query($conn, $sql_reg);

        if (mysqli_affected_rows($conn) != 1) {
            echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
        } else header("Location: ../php/profile.php");
    }

?>