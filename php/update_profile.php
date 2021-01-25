<?php

    include '../database/database_connect.php';


    if(isset($_POST)) {
        $go_update = 0;
        if (isset($_POST['firstname']) && $_POST['firstname'] != $_SESSION["FIRSTNAME"] && $_POST['firstname'] !== "") {
            $_SESSION["FIRSTNAME"] = mysqli_real_escape_string($conn, $_POST['firstname']);
            $go_update = 1;
        }

        if (isset($_POST['lastname']) && $_POST['lastname']!= $_SESSION["LASTNAME"] && $_POST['lastname'] != "") {
            $_SESSION["LASTNAME"] = mysqli_real_escape_string($conn, $_POST['lastname']);
            $go_update = 1;
        }

        if (isset($_POST['email']) && $_POST['email'] != $_SESSION["EMAIL"] && $_POST['email'] != "") {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $sql_e = "SELECT * FROM users WHERE email='$email'";
            $res_e = mysqli_query($conn, $sql_e);
            if(mysqli_num_rows($res_e) == 0){
                $_SESSION["EMAIL"] = $email;
                $go_update = 1;
            }
            else {
                $_SESSION['flag'] = 1;
                header("Location: ../php/mod_profile.php");
                exit();
            }
        }

        if (isset($_POST['old_pass']) && $_POST['old_pass'] != "" && isset($_POST['new_pass']) && $_POST['new_pass'] != "") {
            $old_psw = mysqli_real_escape_string($conn, $_POST['old_pass']);
            $sql="SELECT pass FROM users WHERE id ='{$_SESSION["ID_USER"]}'";
            $res = mysqli_query($conn, $sql);
            $rows = mysqli_fetch_array($res);
            if (password_verify($old_psw, $rows[0])) {
                $new_psw = mysqli_real_escape_string($conn, $_POST['new_pass']);
                $new_psw = password_hash($new_psw, PASSWORD_DEFAULT);
                $sql_updt_pass = "UPDATE users SET pass='".$new_psw."'
                    WHERE id='{$_SESSION["ID_USER"]}'";
                $res = mysqli_query($conn, $sql_updt_pass);

                if (mysqli_affected_rows($conn) != 1) {
                    echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servizio clienti " . mysqli_error($conn);
                }
            } else {
                $_SESSION['flag'] = 1;
                header("Location: ../php/mod_profile.php");
                exit();
            }
        }

        if (isset($_POST['phone']) && $_POST['phone'] != $_SESSION["PHONE"] && $_POST['phone'] != "") {
            $_SESSION["PHONE"] = (int)$_POST['phone'];
            $go_update = 1;
        }

        if (isset($_POST['company_name']) && $_POST['company_name'] != $_SESSION["COMPANY_NAME"] && $_POST['company_name'] != "") {
            $_SESSION["COMPANY_NAME"] = mysqli_real_escape_string($conn, $_POST['company_name']);
            $go_update = 1;
        }

        if (isset($_POST['workstation_os']) && $_POST['workstation_os'] != $_SESSION["WORKSTATION_OS"] && $_POST['workstation_os'] != "") {
            $_SESSION["WORKSTATION_OS"] = mysqli_real_escape_string($conn, $_POST['workstation_os']);
            $go_update = 1;
        }

        if (isset($_POST['mobile_os']) && $_POST['mobile_os'] != $_SESSION["MOBILE_OS"] && $_POST['mobile_os'] != "") {
            $_SESSION["MOBILE_OS"] = mysqli_real_escape_string($conn, $_POST['mobile_os']);
            $go_update = 1;
        }

        if (isset($_POST['about']) && $_POST['about'] != $_SESSION["ABOUT"] && $_POST['about'] != "") {
            $_SESSION["ABOUT"] = mysqli_real_escape_string($conn, $_POST['about']);
            $go_update = 1;
        }

        if ($go_update == 1) {
            $sql_updt = "UPDATE users SET firstname='{$_SESSION["FIRSTNAME"]}',
             lastname='{$_SESSION["LASTNAME"]}',
             email='{$_SESSION["EMAIL"]}',
             phone='{$_SESSION["PHONE"]}',
             company_name='{$_SESSION["COMPANY_NAME"]}',
             workstation_os='{$_SESSION["WORKSTATION_OS"]}',
             mobile_os='{$_SESSION["MOBILE_OS"]}',
             about='{$_SESSION["ABOUT"]}'
             WHERE id='{$_SESSION["ID_USER"]}'";

            $res = mysqli_query($conn, $sql_updt);

            if (mysqli_affected_rows($conn) != 1) {
                echo "Attenzione c'è stato un problema nell'aggiornamento delle informazioni, contattare il servizio clienti " . mysqli_error($conn);
            }
        }


        header("Location: show_profile.php");
        exit();
    }

?>