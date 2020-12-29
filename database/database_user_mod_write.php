<?php

    include 'database_connect.php';


    $fname = 'pino';
    echo "test";
    if(isset($_POST)){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $emailn = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = (int) $_POST['phone'];
        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $workstation_os = mysqli_real_escape_string($conn, $_POST['workstation_os']);
        $mobile_os = mysqli_real_escape_string($conn, $_POST['mobile_os']);
        $about = mysqli_real_escape_string($conn, $_POST['about']);

        $sql_e = "SELECT email FROM users WHERE firstname = 'pino'";
        $res_e = mysqli_query($conn, $sql_e);
        echo mysqli_affected_rows($conn) ;
        if (mysqli_affected_rows($conn) != 1) {
            echo "Errore interno, contattare l'assistenza ".mysqli_error($conn);
        }
        else {
            $rows = mysqli_fetch_array($res_e);
            $email = $rows[0];
            echo $email;

        }

            $sql_updt = "UPDATE users SET firstname='".$firstname."',
                 lastname='".$lastname."',
                 email='".$emailn."',
                 phone='".$phone."',
                 company_name='".$company_name."',
                 workstation_os='".$workstation_os."',
                 mobile_os='".$mobile_os."',
                 about='".$about."'
                 WHERE email='".$email."'";

        $res = mysqli_query($conn, $sql_updt);

        if (mysqli_affected_rows($conn) != 1) {
            echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
        } else header("Location: ../php/profile.php"); exit();
    }

?>