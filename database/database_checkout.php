<?php

    include 'database_connect.php';

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}
	foreach ($_SESSION["cart_item"] as $item){
		if($item["code"] == "bronze2" || $item["code"] == "silver2" || $item["code"] == "gold2"){
			$query = "UPDATE users SET subscription = '".$item["code"]."' WHERE email = '".$_SESSION["EMAIL"]."'";
			if(mysqli_query($conn, $query)){
				$query = "DELETE FROM cart WHERE email = '{$_SESSION["EMAIL"]}'";
				mysqli_query($conn, $query);
				if (mysqli_affected_rows($conn) == 0) {
					echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($con);
				}
				unset($_SESSION["cart_item"]);
				header("Location: ../php/show_profile.php");
				exit();
			}
			else{
				echo "ERRORE";
			}
		}
		else if ($item["code"] == "bronze1" || $item["code"] == "silver1" || $item["code"] == "gold1"){
			header("Location: ../php/under_construction.php");
			exit();
		}
	}