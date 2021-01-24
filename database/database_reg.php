<?php

    include 'database_connect.php';


	if (mysqli_query($conn, $sql_user) === TRUE) {
	}else {
	echo "Error creating table: " . mysqli_error($conn) . '\n';
	}

	if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass'])){
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['pass']);
		$psw = password_hash($psw, PASSWORD_DEFAULT);

  		$sql_e = "SELECT * FROM users WHERE email='$email'";
  		$res_e = mysqli_query($conn, $sql_e);
		  
		if(mysqli_num_rows($res_e) > 0){
			echo "<script> var flag = 1; </script>";
		}
		else{
			$sql_reg = "INSERT INTO users (firstname, lastname, email, pass)
			VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$psw."');";

			$res = mysqli_query($conn, $sql_reg);

			if (mysqli_affected_rows($conn) != 1) {
				echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
			} else {
			    header("Location: ../php/index.php");
		    }
		}
	}

	mysqli_close($conn);
?>