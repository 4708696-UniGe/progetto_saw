<?php

    include 'database_connect.php';

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}

	if(isset($_POST['email']) && isset($_POST['pass'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['pass']);

		$sql="SELECT id, firstname, lastname, email, pass, phone, company_name, workstation_os, mobile_os, about, admin, subscription FROM users WHERE email='$email'";
		$res = mysqli_query($conn, $sql);
		if (mysqli_affected_rows($conn) != 1) {
		    echo ('<script> var flag = 1 </script>');
		}
		else{
				$rows = mysqli_fetch_array($res);
				if(password_verify($psw, $rows[4])) {

                    $_SESSION["ID_USER"]=$rows[0];
                    $_SESSION["FIRSTNAME"]=$rows[1];
                    $_SESSION["LASTNAME"]=$rows[2];
                    $_SESSION["EMAIL"]=$rows[3];
                    $_SESSION["PHONE"]=$rows[5];
                    $_SESSION["COMPANY_NAME"]=$rows[6];
                    $_SESSION["WORKSTATION_OS"]=$rows[7];
                    $_SESSION["MOBILE_OS"]=$rows[8];
                    $_SESSION["ABOUT"]=$rows[9];
					$_SESSION["USER_TYPE"]=$rows[10];
					$_SESSION["SUB"]=$rows[11];
                    $_SESSION["LOGGED"]=1;

                    $sub_query = "
					INSERT INTO login_details 
	     			(user_id) 
	     			VALUES ('".$rows[0]."')
					";
                    $statement = $conn->prepare($sub_query);
                    $statement->execute();
                    $_SESSION['login_details_id'] = $conn->insert_id;

					header("Location: ../php/index.php");
					exit();
			}
				else {
                    echo ('<script> var flag = 1 </script>');
                }
		}
	}
	else{
		echo "Connessione interrotta: ". mysqli_error($conn) . '\n';
	}

?>