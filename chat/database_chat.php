<?php


    $conn = new PDO("mysql:host=localhost;dbname=S4708696;charset=latin1", "S4708696", "46394394678610");

// CREO LE TABELLE PER LA CHAT:
	// Tabella chat_message:
	$sql_chat_message = "CREATE TABLE IF NOT EXISTS `chat_message` (
		`chat_message_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`to_user_id` int(11) NOT NULL,
		`from_user_id` int(11) NOT NULL,
		`chat_message` text NOT NULL,
		`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`status` int(1) NOT NULL
	)";
	$result = $conn->query($sql_chat_message);
	if ($conn->query($sql_chat_message) === TRUE) {
	}else {
	echo "Error creating table: " . $conn->error;
	}


	// Tabella login_details:
	$sql_login_details = "CREATE TABLE IF NOT EXISTS `login_details` (
		  `login_details_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `user_id` int(11) NOT NULL,
		  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	)";
	$result = $conn->query($sql_login_details);
	if ($conn->query($sql_login_details) === TRUE) {
	}else {
	echo "Error creating table: " . $conn->error;
	}





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
	$query = "SELECT firstname FROM users WHERE id = '$user_id'";
	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['firstname'];
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
		$output = '<span class="label label-success" style="color:red;"><b>'.$count.'</b></span>';
	}
	return $output;
}


?>