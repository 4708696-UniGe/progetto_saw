<?php
	include 'database_connect.php';

		if (!$conn) {
			die("Connessione fallita: " . mysqli_connect_error());
		}

	$sql = "CREATE TABLE IF NOT EXISTS `test`.`chat` ( 
			`id` INT NOT NULL AUTO_INCREMENT , 
			`message` TEXT NOT NULL , 
			`user_from` VARCHAR(128) NOT NULL , 
			`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
			PRIMARY KEY (`id`)
			)";
	
	if (mysqli_query($conn, $sql) === TRUE) {
	}else {
	echo "Error creating table: " . mysqli_error($conn) . '\n';
	}

?>