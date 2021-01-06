<?php

$conn = new PDO("mysql:host=localhost;dbname=test;charset=utf8mb4", "root", "");

// CREO LE TABELLE PER LA CHAT:
	// Tabella chat_table:
	$sql_chat_table = "CREATE TABLE IF NOT EXISTS `chat_table` (
		`chat_message_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`to_user_id` int(11) NOT NULL,
		`from_user_id` int(11) NOT NULL,
		`chat_message` text NOT NULL,
		`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`status` int(1) NOT NULL
	)";
	$result = $conn->query($sql_chat_table);



	// Tabella login:
	$sql_login = "CREATE TABLE IF NOT EXISTS `login` (
		  `user_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `username` varchar(255) NOT NULL,
		  `password` varchar(255) NOT NULL
	)";
	$result = $conn->query($sql_login);


	// Tabella login_details:
	$sql_login_details = "CREATE TABLE IF NOT EXISTS `login_details` (
		  `login_details_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `user_id` int(11) NOT NULL,
		  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  `is_type` enum('no','yes') NOT NULL
	)";
	$result = $conn->query($sql_login_details);





function fetch_user_last_activity($user_id, $conn)
{
	$query = "
	SELECT * FROM login_details 
	WHERE user_id = '$user_id' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";
	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['last_activity'];
	}
}

function fetch_user_chat_history($from_user_id, $to_user_id, $conn)
{
	$query = "
	SELECT * FROM chat_message 
	WHERE (from_user_id = '".$from_user_id."' 
	AND to_user_id = '".$to_user_id."') 
	OR (from_user_id = '".$to_user_id."' 
	AND to_user_id = '".$from_user_id."') 
	ORDER BY timestamp DESC
	";
	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		if($row["from_user_id"] == $from_user_id)
		{
			$user_name = '<b class="text-success">You</b>';
		}
		else
		{
			$user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $conn).'</b>';
		}
		$output .= '
		<li style="border-bottom:1px dotted #ccc">
			<p>'.$user_name.' - '.$row["chat_message"].'
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	$query = "
	UPDATE chat_message 
	SET status = '0' 
	WHERE from_user_id = '".$to_user_id."' 
	AND to_user_id = '".$from_user_id."' 
	AND status = '1'
	";
	$statement = $conn->prepare($query);
	$statement->execute();
	return $output;
}

function get_user_name($user_id, $conn)
{
	$query = "SELECT username FROM login WHERE user_id = '$user_id'";
	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['username'];
	}
}

function count_unseen_message($from_user_id, $to_user_id, $conn)
{
	$query = "
	SELECT * FROM chat_message 
	WHERE from_user_id = '$from_user_id' 
	AND to_user_id = '$to_user_id' 
	AND status = '1'
	";
	$statement = $conn->prepare($query);
	$statement->execute();
	$count = $statement->rowCount();
	$output = '';
	if($count > 0)
	{
		$output = '<span class="label label-success">'.$count.'</span>';
	}
	return $output;
}

function fetch_is_type_status($user_id, $conn)
{
	$query = "
	SELECT is_type FROM login_details 
	WHERE user_id = '".$user_id."' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";	
	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		if($row["is_type"] == 'yes')
		{
			$output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
		}
	}
	return $output;
}

?>