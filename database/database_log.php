<?php

    include 'database_connect.php';

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}

	if(isset($_POST['email']) && isset($_POST['pass'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['pass']);

		$sql="SELECT pass, firstname, lastname, id FROM users WHERE email='$email'";
		$res = mysqli_query($conn, $sql);
		if (mysqli_affected_rows($conn) != 1) {
				echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
		}
		else{
				$rows = mysqli_fetch_array($res);
				if(password_verify($psw, $rows[0])) {
					SettaCookie("FIRSTNAME", $rows[1], 72000);
					SettaCookie("LASTNAME", $rows[2], 72000);
					SettaCookie("ID_USER", $rows[3], 72000);
					header("Location: ../php/home.php");
			}
		}
	}
	else{
		echo "Connessione interrotta: ". mysqli_error($conn) . '\n';
	}

	function SettaCookie($ID_COOKIE, $VALUE, $TEMPO)
      {
            setcookie($ID_COOKIE, $VALUE, time()+$TEMPO); // Identifica l'utente
      }
	?>