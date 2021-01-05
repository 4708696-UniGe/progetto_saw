<?php

    include 'database_connect.php';
    echo (' <script type="text/javascript" src="../js/profile_update_validation.js" ></script> ');


    if(isset($_POST)){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = (int) $_POST['phone'];
        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $workstation_os = mysqli_real_escape_string($conn, $_POST['workstation_os']);
        $mobile_os = mysqli_real_escape_string($conn, $_POST['mobile_os']);
        $about = mysqli_real_escape_string($conn, $_POST['about']);

        if (validation($firstname) && $firstname != $_SESSION["FIRSTNAME"]) {
            $sql_updt = "UPDATE users SET firstname='".$firstname."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($lastname) && $lastname != $_SESSION["LASTNAME"]) {
            $sql_updt = "UPDATE users SET lastname='".$lastname."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($email) && $email != $_SESSION["EMAIL"]) {
            $sql_updt = "UPDATE users SET email='".$email."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($phone) && $phone != $_SESSION["PHONE"]) {
            $sql_updt = "UPDATE users SET phone='".$phone."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($company_name) && $company_name != $_SESSION["COMPANY_NAME"]) {
            $sql_updt = "UPDATE users SET company_name='".$company_name."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($workstation_os) && $workstation_os != $_SESSION["WORKSTATION_OS"]) {
            $sql_updt = "UPDATE users SET workstation_os='".$workstation_os."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($mobile_os) && $mobile_os != $_SESSION["MOBILE_OS"]) {
            $sql_updt = "UPDATE users SET mobile_os='".$mobile_os."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }

        if (validation($about) && $about != $_SESSION["ABOUT"]) {
            $sql_updt = "UPDATE users SET about='".$about."'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
            }
        }
            /* $sql_updt = "UPDATE users SET firstname='".$firstname."',
                 lastname='".$lastname."',
                 email='".$email."',
                 phone='".$phone."',
                 company_name='".$company_name."',
                 workstation_os='".$workstation_os."',
                 mobile_os='".$mobile_os."',
                 about='".$about."'
                 WHERE email='".$email."'";

        $res = mysqli_query($conn, $sql_updt); */

        if (mysqli_affected_rows($conn) != 1) {
            echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servio clienti ".mysqli_error($conn);
        } else {
            $_SESSION["FIRSTNAME"]=$firstname;
            $_SESSION["LASTNAME"]=$lastname;
            $_SESSION["EMAIL"]=$email;
            $_SESSION["PHONE"]=$phone;
            $_SESSION["COMPANY_NAME"]=$company_name;
            $_SESSION["WORKSTATION_OS"]=$workstation_os;
            $_SESSION["MOBILE_OS"]=$mobile_os;
            $_SESSION["ABOUT"]=$about;
            header("Location: ../php/profile.php");
            exit();
        }
    }

?>
