<?php

    include 'database_connect.php';


    if(isset($_POST)) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = (int)$_POST['phone'];
        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $workstation_os = mysqli_real_escape_string($conn, $_POST['workstation_os']);
        $mobile_os = mysqli_real_escape_string($conn, $_POST['mobile_os']);
        $about = mysqli_real_escape_string($conn, $_POST['about']);


        if ($firstname != $_SESSION["FIRSTNAME"] && $firstname !== "") {
            $sql_updt = "UPDATE users SET firstname='" . $firstname . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle firstname, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["FIRSTNAME"] = $firstname;
        }

        if ($lastname != $_SESSION["LASTNAME"] && $lastname != "") {
            $sql_updt = "UPDATE users SET lastname='" . $lastname . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle lastname, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["LASTNAME"] = $lastname;
        }

        if ($email != $_SESSION["EMAIL"] && $email != "") {
            $sql_updt = "UPDATE users SET email='" . $email . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle email, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["EMAIL"] = $email;
        }

        if ($phone != $_SESSION["PHONE"] && $phone != 0) {
            $sql_updt = "UPDATE users SET phone='" . $phone . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle phone, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["PHONE"] = $phone;
        }

        if ($company_name != $_SESSION["COMPANY_NAME"] && $company_name != "") {
            $sql_updt = "UPDATE users SET company_name='" . $company_name . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle company_name, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["COMPANY_NAME"] = $company_name;
        }

        if ($workstation_os != $_SESSION["WORKSTATION_OS"] && $workstation_os != "") {
            $sql_updt = "UPDATE users SET workstation_os='" . $workstation_os . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle workstation_os, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["WORKSTATION_OS"] = $workstation_os;
        }

        if ($mobile_os != $_SESSION["MOBILE_OS"] && $mobile_os != "") {
            $sql_updt = "UPDATE users SET mobile_os='" . $mobile_os . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle mobile_os, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["MOBILE_OS"] = $mobile_os;
        }

        if ($about != $_SESSION["ABOUT"] && $about != "") {
            $sql_updt = "UPDATE users SET about='" . $about . "'
                 WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle about, contattare il servio clienti " . mysqli_error($conn);
            }
            $_SESSION["ABOUT"] = $about;
        }
        /*    $sql_updt = "UPDATE users SET firstname='".$firstname."',
                 lastname='".$lastname."',
                 email='".$email."',
                 phone='".$phone."',
                 company_name='".$company_name."',
                 workstation_os='".$workstation_os."',
                 mobile_os='".$mobile_os."',
                 about='".$about."'
                 WHERE email='".$email."'";

        $res = mysqli_query($conn, $sql_updt); */

        header("Location: ../php/profile.php");
        exit();
    }

?>