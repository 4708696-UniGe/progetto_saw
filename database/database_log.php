<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}

	if(isset($_POST['email']) && isset($_POST['pass'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['pass']);

		$sql="SELECT pass, firstname, lastname FROM users WHERE email='$email'";
		$res = mysqli_query($conn, $sql);
		if (mysqli_affected_rows($conn) != 1) {
				echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
		}
		else{
			$rows = mysqli_fetch_row($res);
			if(password_verify($psw, $rows[0])) {
				$_SESSION["user"]=TRUE;
				$_SESSION["firstname"]=$rows[1];
				$_SESSION["lastname"]=$rows[2];
				header("Location: ../php/home.php");
			}
		}
	}
	else{
		echo "Connessione interrotta: ". mysqli_error($conn) . '\n';
	}