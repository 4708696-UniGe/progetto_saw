<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}

	if(isset($_POST['email']) && isset($_POST['pass']) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['pass']);

		$sql="SELECT '$pass', '$firstname', '$lastname' FROM users WHERE email='$email'";
		$res = mysqli_query($conn, $sql_e);
		if (mysqli_affected_rows($conn) != 1) {
				echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
		}
		else{
			$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
			if(password_verify($rows[0], password_hash($psw, PASSWORD_DEFAULT) {
				$_SESSION["user"]=true;
				$_SESSION["firstname"]=$rows[1];
				$_SESSION["lastname"]=$rows[2];
			}
		}

	}